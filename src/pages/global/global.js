// ============================================
// GLOBAL SEARCH CONTROLLER
// Standalone search overlay functionality
// ============================================

/**
 * GlobalSearchController - Standalone search overlay controller
 * This is independent of the SO Framework and can be configured
 * with custom API endpoints and callbacks
 */
class GlobalSearchController {
  // Default configuration
  static DEFAULTS = {
    overlaySelector: '.so-search-overlay',
    inputSelector: '.so-search-overlay-input',
    closeSelector: '.so-search-overlay-close',
    backdropSelector: '.so-search-overlay-backdrop',
    quickLinksSelector: '.so-search-quick-links',
    categoryTabsSelector: '.so-search-category-tabs',
    filterBarSelector: '.so-search-filter-bar',
    resultsContainerSelector: '.so-search-results-container',
    resultsGridSelector: '.so-search-results-grid',
    resultsListSelector: '.so-search-results-list',
    emptySelector: '.so-search-empty',
    loadingSelector: '.so-search-loading',
    debounceMs: 300,
    minSearchLength: 2,
  };

  /**
   * Create a new GlobalSearchController
   * @param {Object} options - Configuration options
   */
  constructor(options = {}) {
    this.options = { ...GlobalSearchController.DEFAULTS, ...options };

    // State
    this.isOpen = false;
    this.isISVSearch = false;
    this.searchQuery = '';
    this.currentView = 'grid';
    this.activeFilters = { stock: 'all', status: 'all' };
    this.activeCategory = 'all';
    this.focusedIndex = -1;
    this.results = [];
    this._debounceTimer = null;

    // Callbacks
    this.onSearch = options.onSearch || null;
    this.onItemClick = options.onItemClick || null;
    this.onAccountClick = options.onAccountClick || null;
    this.onQuickActionClick = options.onQuickActionClick || null;

    // API URLs
    this.searchUrl = options.searchUrl || null;
    this.isvSearchUrl = options.isvSearchUrl || null;

    // Initialize
    this._init();
  }

  /**
   * Initialize the controller
   * @private
   */
  _init() {
    // Cache DOM elements
    this._overlay = document.querySelector(this.options.overlaySelector);
    if (!this._overlay) return;

    this._input = this._overlay.querySelector(this.options.inputSelector);
    this._closeBtn = this._overlay.querySelector(this.options.closeSelector);
    this._backdrop = this._overlay.querySelector(this.options.backdropSelector);
    this._quickLinks = this._overlay.querySelector(this.options.quickLinksSelector);
    this._categoryTabs = this._overlay.querySelector(this.options.categoryTabsSelector);
    this._filterBar = this._overlay.querySelector(this.options.filterBarSelector);
    this._resultsContainer = this._overlay.querySelector(this.options.resultsContainerSelector);
    this._resultsGrid = this._overlay.querySelector(this.options.resultsGridSelector);
    this._resultsList = this._overlay.querySelector(this.options.resultsListSelector);
    this._empty = this._overlay.querySelector(this.options.emptySelector);
    this._loading = this._overlay.querySelector(this.options.loadingSelector);

    // Bind events
    this._bindEvents();

    // Store global reference
    window.globalSearchController = this;
  }

  /**
   * Bind event listeners
   * @private
   */
  _bindEvents() {
    // Global keyboard shortcut (Ctrl/Cmd + K)
    document.addEventListener('keydown', (e) => this._handleGlobalKeydown(e));

    // Close button
    if (this._closeBtn) {
      this._closeBtn.addEventListener('click', () => this.close());
    }

    // Backdrop click
    if (this._backdrop) {
      this._backdrop.addEventListener('click', () => this.close());
    }

    // Search input
    if (this._input) {
      this._input.addEventListener('input', (e) => this._handleInput(e));
      this._input.addEventListener('keydown', (e) => this._handleInputKeydown(e));
    }

    // Category tabs
    this._overlay.querySelectorAll('.so-search-category-tab').forEach(tab => {
      tab.addEventListener('click', (e) => this._handleCategoryClick(e));
    });

    // View toggle buttons
    this._overlay.querySelectorAll('.so-search-view-btn').forEach(btn => {
      btn.addEventListener('click', (e) => this._handleViewToggle(e));
    });

    // Filter dropdowns
    this._initFilters();

    // Quick links
    this._overlay.querySelectorAll('.so-search-quick-link').forEach(link => {
      link.addEventListener('click', (e) => this._handleQuickLinkClick(e));
    });

    // Result clicks (using event delegation)
    if (this._resultsContainer) {
      this._resultsContainer.addEventListener('click', (e) => this._handleResultClick(e));
    }

    // Click trigger from navbar search
    const navbarSearch = document.querySelector('.so-navbar-search-input');
    if (navbarSearch) {
      navbarSearch.addEventListener('focus', () => this.open());
      navbarSearch.addEventListener('click', () => this.open());
    }
  }

  /**
   * Handle global keyboard shortcuts
   * @param {KeyboardEvent} e
   * @private
   */
  _handleGlobalKeydown(e) {
    // Open with Ctrl/Cmd + K
    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
      e.preventDefault();
      this.toggle();
    }

    // Close with Escape
    if (e.key === 'Escape' && this.isOpen) {
      this.close();
    }
  }

  /**
   * Handle search input
   * @param {Event} e
   * @private
   */
  _handleInput(e) {
    const query = e.target.value.trim();
    this.searchQuery = query;

    // Clear previous debounce
    clearTimeout(this._debounceTimer);

    // Check for ISV mode
    this.isISVSearch = query.toLowerCase().startsWith('isv:');

    // Update UI based on mode
    this._updateSearchMode();

    // Debounce search
    this._debounceTimer = setTimeout(() => {
      if (query.length >= this.options.minSearchLength) {
        this._performSearch(query);
      } else {
        this._showDefaultState();
      }
    }, this.options.debounceMs);
  }

  /**
   * Handle input keydown for navigation
   * @param {KeyboardEvent} e
   * @private
   */
  _handleInputKeydown(e) {
    switch (e.key) {
      case 'ArrowDown':
        e.preventDefault();
        this._focusNext();
        break;
      case 'ArrowUp':
        e.preventDefault();
        this._focusPrev();
        break;
      case 'Enter':
        e.preventDefault();
        this._selectFocused();
        break;
    }
  }

  /**
   * Initialize filter dropdowns
   * @private
   */
  _initFilters() {
    this._overlay.querySelectorAll('.so-search-filter-dropdown').forEach(dropdown => {
      const btn = dropdown.querySelector('.so-search-filter-btn');
      const menu = dropdown.querySelector('.so-search-filter-menu');
      const filterType = dropdown.dataset.filter;

      if (btn && menu) {
        btn.addEventListener('click', (e) => {
          e.stopPropagation();
          menu.classList.toggle('open');
        });

        menu.querySelectorAll('.so-search-filter-option').forEach(option => {
          option.addEventListener('click', () => {
            this._selectFilter(filterType, option.dataset.value);
            menu.classList.remove('open');
          });
        });
      }
    });

    // Close dropdowns on outside click
    document.addEventListener('click', () => {
      this._overlay.querySelectorAll('.so-search-filter-menu').forEach(menu => {
        menu.classList.remove('open');
      });
    });
  }

  /**
   * Select a filter option
   * @param {string} type - Filter type (stock, status)
   * @param {string} value - Filter value
   * @private
   */
  _selectFilter(type, value) {
    this.activeFilters[type] = value;

    // Update UI
    const dropdown = this._overlay.querySelector(`.so-search-filter-dropdown[data-filter="${type}"]`);
    if (dropdown) {
      dropdown.querySelectorAll('.so-search-filter-option').forEach(opt => {
        opt.classList.toggle('selected', opt.dataset.value === value);
      });

      const label = dropdown.querySelector('.filter-label');
      const selected = dropdown.querySelector(`.so-search-filter-option[data-value="${value}"]`);
      if (label && selected) {
        label.textContent = selected.textContent.trim();
      }
    }

    // Re-search with new filters
    if (this.searchQuery.length >= this.options.minSearchLength) {
      this._performSearch(this.searchQuery);
    }
  }

  /**
   * Handle category tab click
   * @param {Event} e
   * @private
   */
  _handleCategoryClick(e) {
    const tab = e.currentTarget;
    const category = tab.dataset.category;

    // Update active state
    this._overlay.querySelectorAll('.so-search-category-tab').forEach(t => {
      t.classList.toggle('active', t === tab);
    });

    this.activeCategory = category;

    // Re-filter results
    if (this.searchQuery.length >= this.options.minSearchLength) {
      this._performSearch(this.searchQuery);
    }
  }

  /**
   * Handle view toggle
   * @param {Event} e
   * @private
   */
  _handleViewToggle(e) {
    const btn = e.currentTarget;
    const view = btn.dataset.view;

    // Update button states
    this._overlay.querySelectorAll('.so-search-view-btn').forEach(b => {
      b.classList.toggle('active', b === btn);
    });

    this.currentView = view;

    // Update results display
    if (this._resultsGrid) {
      this._resultsGrid.classList.toggle('visible', view === 'grid');
    }
    if (this._resultsList) {
      this._resultsList.classList.toggle('visible', view === 'list');
    }

    // Re-render results in new view
    this._renderResults(this.results);
  }

  /**
   * Handle quick link click
   * @param {Event} e
   * @private
   */
  _handleQuickLinkClick(e) {
    e.preventDefault();
    const link = e.currentTarget;
    const action = link.dataset.action;

    if (this.onQuickActionClick) {
      this.onQuickActionClick(action, link);
    }

    // If the quick link has a URL, navigate
    const url = link.getAttribute('href');
    if (url && url !== '#') {
      window.location.href = url;
    }

    this.close();
  }

  /**
   * Handle result item click
   * @param {Event} e
   * @private
   */
  _handleResultClick(e) {
    const item = e.target.closest('.so-search-item-card, .so-search-item-row, .so-search-account-card, .so-search-overlay-item');
    if (!item) return;

    const itemData = {
      id: item.dataset.itemId,
      type: item.dataset.itemType,
      element: item,
    };

    // Call appropriate callback
    if (item.classList.contains('so-search-account-card') && this.onAccountClick) {
      this.onAccountClick(itemData);
    } else if (this.onItemClick) {
      this.onItemClick(itemData);
    }

    this.close();
  }

  /**
   * Update UI based on search mode (normal vs ISV)
   * @private
   */
  _updateSearchMode() {
    if (this._filterBar) {
      this._filterBar.classList.toggle('visible', this.isISVSearch);
    }
    if (this._categoryTabs) {
      this._categoryTabs.classList.toggle('visible', !this.isISVSearch && this.searchQuery.length >= this.options.minSearchLength);
    }
  }

  /**
   * Perform search
   * @param {string} query
   * @private
   */
  async _performSearch(query) {
    this._showLoading();

    try {
      let results;

      if (this.isISVSearch) {
        // ISV search
        const isvQuery = query.replace(/^isv:/i, '').trim();
        results = await this._fetchISVResults(isvQuery);
      } else {
        // Normal search
        results = await this._fetchSearchResults(query);
      }

      this.results = results;
      this._renderResults(results);

      // Trigger callback
      if (this.onSearch) {
        this.onSearch(query, results);
      }
    } catch (error) {
      console.error('Search error:', error);
      this._showEmpty('error', 'Search Error', 'An error occurred while searching. Please try again.');
    }
  }

  /**
   * Fetch normal search results
   * @param {string} query
   * @returns {Promise<Array>}
   * @private
   */
  async _fetchSearchResults(query) {
    if (this.searchUrl) {
      const response = await fetch(`${this.searchUrl}?q=${encodeURIComponent(query)}&category=${this.activeCategory}`);
      return await response.json();
    }

    // Fallback demo data
    return this._getFallbackSearchData(query);
  }

  /**
   * Fetch ISV search results
   * @param {string} query
   * @returns {Promise<Array>}
   * @private
   */
  async _fetchISVResults(query) {
    if (this.isvSearchUrl) {
      const params = new URLSearchParams({
        q: query,
        stock: this.activeFilters.stock,
        status: this.activeFilters.status,
      });
      const response = await fetch(`${this.isvSearchUrl}?${params}`);
      return await response.json();
    }

    // Fallback demo data
    return this._getFallbackISVData(query);
  }

  /**
   * Render search results
   * @param {Array} results
   * @private
   */
  _renderResults(results) {
    this._hideLoading();

    if (!results || results.length === 0) {
      this._showEmpty('search_off', 'No results found', `No matches for "${this.searchQuery}"`);
      return;
    }

    this._hideEmpty();

    if (this.isISVSearch) {
      this._renderISVResults(results);
    } else {
      this._renderNormalResults(results);
    }
  }

  /**
   * Render normal search results (menus, accounts)
   * @param {Array} results
   * @private
   */
  _renderNormalResults(results) {
    // Group results by type
    const grouped = {
      menus: results.filter(r => r.type === 'menu'),
      customers: results.filter(r => r.type === 'customer'),
      vendors: results.filter(r => r.type === 'vendor'),
      ledgers: results.filter(r => r.type === 'ledger'),
    };

    // Update category counts
    this._updateCategoryCounts(grouped);

    // Filter by active category
    let filteredResults = results;
    if (this.activeCategory !== 'all') {
      filteredResults = grouped[this.activeCategory] || [];
    }

    // Render to container
    if (this._resultsContainer) {
      let html = '';

      // Menus section
      const menus = this.activeCategory === 'all' ? grouped.menus : (this.activeCategory === 'menus' ? filteredResults : []);
      if (menus.length > 0) {
        html += `
          <div class="so-search-overlay-section">
            <div class="so-search-overlay-section-title">Menus</div>
            <div class="so-search-overlay-results">
              ${menus.map(item => this._renderMenuItem(item)).join('')}
            </div>
          </div>
        `;
      }

      // Accounts sections
      ['customers', 'vendors', 'ledgers'].forEach(type => {
        const items = this.activeCategory === 'all' ? grouped[type] : (this.activeCategory === type ? filteredResults : []);
        if (items.length > 0) {
          const title = type.charAt(0).toUpperCase() + type.slice(1);
          html += `
            <div class="so-search-account-section">
              <div class="so-search-account-section-title">${title}</div>
              <div class="so-search-account-cards">
                ${items.map(item => this._renderAccountCard(item)).join('')}
              </div>
            </div>
          `;
        }
      });

      this._resultsContainer.innerHTML = html;
      this._resultsContainer.style.display = 'block';
    }
  }

  /**
   * Render ISV search results (items/products)
   * @param {Array} results
   * @private
   */
  _renderISVResults(results) {
    if (this.currentView === 'grid') {
      if (this._resultsGrid) {
        this._resultsGrid.innerHTML = results.map(item => this._renderItemCard(item)).join('');
        this._resultsGrid.classList.add('visible');
      }
      if (this._resultsList) {
        this._resultsList.classList.remove('visible');
      }
    } else {
      if (this._resultsList) {
        this._resultsList.innerHTML = `
          <div class="so-search-list-header">
            <span>Item</span>
            <span>Stock</span>
            <span>Price</span>
            <span>Cost</span>
            <span>Vendor</span>
          </div>
          ${results.map(item => this._renderItemRow(item)).join('')}
        `;
        this._resultsList.classList.add('visible');
      }
      if (this._resultsGrid) {
        this._resultsGrid.classList.remove('visible');
      }
    }

    if (this._resultsContainer) {
      this._resultsContainer.style.display = 'none';
    }
  }

  /**
   * Render a menu item
   * @param {Object} item
   * @returns {string}
   * @private
   */
  _renderMenuItem(item) {
    return `
      <a href="${item.url || '#'}" class="so-search-overlay-item" data-item-id="${item.id}" data-item-type="menu">
        <div class="so-search-overlay-item-icon ${item.iconColor || 'blue'}">
          <span class="material-icons">${item.icon || 'article'}</span>
        </div>
        <div class="so-search-overlay-item-content">
          <div class="so-search-overlay-item-title">${this._highlightMatch(item.name, this.searchQuery)}</div>
          <div class="so-search-overlay-item-path">${item.path || ''}</div>
        </div>
        <span class="material-icons so-search-overlay-item-arrow">arrow_forward</span>
      </a>
    `;
  }

  /**
   * Render an account card
   * @param {Object} item
   * @returns {string}
   * @private
   */
  _renderAccountCard(item) {
    const balanceClass = item.balance > 0 ? 'positive' : (item.balance < 0 ? 'negative' : 'neutral');
    const balanceText = this._formatWalletBalance(item.balance);

    return `
      <div class="so-search-account-card" data-item-id="${item.id}" data-item-type="${item.type}">
        <div class="so-search-account-card-header">
          <div class="so-search-account-card-icon ${item.iconColor || 'blue'}">
            <span class="material-icons">${item.icon || 'account_circle'}</span>
          </div>
          <div class="so-search-account-card-info">
            <div class="so-search-account-card-name">${this._highlightMatch(item.name, this.searchQuery)}</div>
            <div class="so-search-account-card-category">${item.category || item.type}</div>
          </div>
          <div class="so-search-account-card-balance ${balanceClass}">${balanceText}</div>
        </div>
        ${item.details ? `
          <div class="so-search-account-card-details">
            ${item.details.map(d => `
              <div class="so-search-account-card-detail">
                <div class="so-search-account-card-detail-label">${d.label}</div>
                <div class="so-search-account-card-detail-value">${d.value}</div>
              </div>
            `).join('')}
          </div>
        ` : ''}
      </div>
    `;
  }

  /**
   * Render an item card (grid view)
   * @param {Object} item
   * @returns {string}
   * @private
   */
  _renderItemCard(item) {
    const stockClass = this._getStockClass(item.stock);
    const statusClass = item.status === 'active' ? 'active' : 'liquidation';

    return `
      <div class="so-search-item-card" data-item-id="${item.id}" data-item-type="item">
        <div class="so-search-item-card-header">
          <div class="so-search-item-card-sku">${item.sku || ''}</div>
          <div class="so-search-item-card-status ${statusClass}">${item.status || 'active'}</div>
        </div>
        <div class="so-search-item-card-title">${this._highlightMatch(item.name, this.searchQuery.replace(/^isv:/i, '').trim())}</div>
        <div class="so-search-item-card-details">
          <div class="so-search-item-card-detail">
            <div class="so-search-item-card-detail-label">Stock</div>
            <div class="so-search-item-card-detail-value ${stockClass}">${item.stock}</div>
          </div>
          <div class="so-search-item-card-detail">
            <div class="so-search-item-card-detail-label">Price</div>
            <div class="so-search-item-card-detail-value">${this._formatCurrency(item.price)}</div>
          </div>
          <div class="so-search-item-card-detail">
            <div class="so-search-item-card-detail-label">Cost</div>
            <div class="so-search-item-card-detail-value">${this._formatCurrency(item.cost)}</div>
          </div>
          <div class="so-search-item-card-detail">
            <div class="so-search-item-card-detail-label">Vendor Stock</div>
            <div class="so-search-item-card-detail-value">${item.vendorStock || 0}</div>
          </div>
        </div>
      </div>
    `;
  }

  /**
   * Render an item row (list view)
   * @param {Object} item
   * @returns {string}
   * @private
   */
  _renderItemRow(item) {
    const stockClass = this._getStockClass(item.stock);

    return `
      <div class="so-search-item-row" data-item-id="${item.id}" data-item-type="item">
        <div class="so-search-item-row-info">
          <div class="so-search-item-row-title">${this._highlightMatch(item.name, this.searchQuery.replace(/^isv:/i, '').trim())}</div>
          <div class="so-search-item-row-sku">${item.sku || ''}</div>
        </div>
        <div class="so-search-item-row-value ${stockClass}">${item.stock}</div>
        <div class="so-search-item-row-value">${this._formatCurrency(item.price)}</div>
        <div class="so-search-item-row-value">${this._formatCurrency(item.cost)}</div>
        <div class="so-search-item-row-value">${item.vendorStock || 0}</div>
      </div>
    `;
  }

  /**
   * Update category counts in tabs
   * @param {Object} grouped
   * @private
   */
  _updateCategoryCounts(grouped) {
    const total = Object.values(grouped).reduce((sum, arr) => sum + arr.length, 0);

    this._overlay.querySelectorAll('.so-search-category-tab').forEach(tab => {
      const category = tab.dataset.category;
      const count = tab.querySelector('.so-search-category-count');
      if (count) {
        const value = category === 'all' ? total : (grouped[category]?.length || 0);
        count.textContent = value;
      }
    });
  }

  // ============================================
  // KEYBOARD NAVIGATION
  // ============================================

  /**
   * Focus next result item
   * @private
   */
  _focusNext() {
    const items = this._overlay.querySelectorAll('.so-search-overlay-item, .so-search-account-card, .so-search-item-card, .so-search-item-row');
    if (items.length === 0) return;

    this.focusedIndex = Math.min(this.focusedIndex + 1, items.length - 1);
    this._updateFocus(items);
  }

  /**
   * Focus previous result item
   * @private
   */
  _focusPrev() {
    const items = this._overlay.querySelectorAll('.so-search-overlay-item, .so-search-account-card, .so-search-item-card, .so-search-item-row');
    if (items.length === 0) return;

    this.focusedIndex = Math.max(this.focusedIndex - 1, 0);
    this._updateFocus(items);
  }

  /**
   * Update focus state on items
   * @param {NodeList} items
   * @private
   */
  _updateFocus(items) {
    items.forEach((item, index) => {
      item.classList.toggle('focused', index === this.focusedIndex);
    });

    // Scroll into view
    if (items[this.focusedIndex]) {
      items[this.focusedIndex].scrollIntoView({ block: 'nearest' });
    }
  }

  /**
   * Select the focused item
   * @private
   */
  _selectFocused() {
    const focused = this._overlay.querySelector('.focused');
    if (focused) {
      focused.click();
    }
  }

  // ============================================
  // UI STATE METHODS
  // ============================================

  /**
   * Show loading state
   * @private
   */
  _showLoading() {
    if (this._loading) this._loading.classList.add('visible');
    if (this._empty) this._empty.classList.remove('visible');
    if (this._quickLinks) this._quickLinks.style.display = 'none';
    if (this._resultsContainer) this._resultsContainer.style.display = 'none';
    if (this._resultsGrid) this._resultsGrid.classList.remove('visible');
    if (this._resultsList) this._resultsList.classList.remove('visible');
  }

  /**
   * Hide loading state
   * @private
   */
  _hideLoading() {
    if (this._loading) this._loading.classList.remove('visible');
  }

  /**
   * Show empty state
   * @param {string} icon
   * @param {string} title
   * @param {string} text
   * @private
   */
  _showEmpty(icon, title, text) {
    if (this._empty) {
      const iconEl = this._empty.querySelector('.so-search-empty-icon');
      const titleEl = this._empty.querySelector('.so-search-empty-title');
      const textEl = this._empty.querySelector('.so-search-empty-text');

      if (iconEl) iconEl.textContent = icon;
      if (titleEl) titleEl.textContent = title;
      if (textEl) textEl.textContent = text;

      this._empty.classList.add('visible');
    }
    if (this._resultsContainer) this._resultsContainer.style.display = 'none';
    if (this._resultsGrid) this._resultsGrid.classList.remove('visible');
    if (this._resultsList) this._resultsList.classList.remove('visible');
  }

  /**
   * Hide empty state
   * @private
   */
  _hideEmpty() {
    if (this._empty) this._empty.classList.remove('visible');
  }

  /**
   * Show default state (quick links)
   * @private
   */
  _showDefaultState() {
    this._hideLoading();
    this._hideEmpty();
    if (this._quickLinks) this._quickLinks.style.display = 'block';
    if (this._resultsContainer) this._resultsContainer.style.display = 'none';
    if (this._resultsGrid) this._resultsGrid.classList.remove('visible');
    if (this._resultsList) this._resultsList.classList.remove('visible');
    if (this._categoryTabs) this._categoryTabs.classList.remove('visible');
    if (this._filterBar) this._filterBar.classList.remove('visible');
  }

  // ============================================
  // UTILITY METHODS
  // ============================================

  /**
   * Highlight search match in text
   * @param {string} text
   * @param {string} query
   * @returns {string}
   * @private
   */
  _highlightMatch(text, query) {
    if (!query || !text) return text;
    const escaped = this._escapeHtml(query).replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    const regex = new RegExp(`(${escaped})`, 'gi');
    return this._escapeHtml(text).replace(regex, '<mark>$1</mark>');
  }

  /**
   * Escape HTML special characters
   * @param {string} text
   * @returns {string}
   * @private
   */
  _escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
  }

  /**
   * Format currency
   * @param {number} value
   * @returns {string}
   * @private
   */
  _formatCurrency(value) {
    if (value === null || value === undefined) return '-';
    return new Intl.NumberFormat('en-IN', {
      style: 'currency',
      currency: 'INR',
      minimumFractionDigits: 2,
    }).format(value);
  }

  /**
   * Format wallet balance with Cr/Dr suffix
   * @param {number} value
   * @returns {string}
   * @private
   */
  _formatWalletBalance(value) {
    if (value === null || value === undefined || value === 0) return '-';
    const formatted = this._formatCurrency(Math.abs(value));
    return value > 0 ? `${formatted} Cr` : `${formatted} Dr`;
  }

  /**
   * Get stock status class
   * @param {number} stock
   * @returns {string}
   * @private
   */
  _getStockClass(stock) {
    if (stock <= 0) return 'out-of-stock';
    if (stock < 10) return 'low-stock';
    return 'in-stock';
  }

  // ============================================
  // FALLBACK DATA (Demo Mode)
  // ============================================

  /**
   * Get fallback search data for demo
   * @param {string} query
   * @returns {Array}
   * @private
   */
  _getFallbackSearchData(query) {
    const data = [
      { id: 1, type: 'menu', name: 'Dashboard', icon: 'dashboard', iconColor: 'blue', path: 'Home / Dashboard', url: 'index.php' },
      { id: 2, type: 'menu', name: 'Trial Balance', icon: 'account_balance', iconColor: 'green', path: 'Reports / Trial Balance', url: 'trial-balance.php' },
      { id: 3, type: 'menu', name: 'Profit & Loss', icon: 'trending_up', iconColor: 'orange', path: 'Reports / Profit & Loss', url: 'profit-loss.php' },
      { id: 4, type: 'menu', name: 'Balance Sheet', icon: 'receipt_long', iconColor: 'purple', path: 'Reports / Balance Sheet', url: 'balance-sheet.php' },
      { id: 5, type: 'customer', name: 'Rajesh Kumar', icon: 'person', iconColor: 'blue', category: 'Customer', balance: 15000, details: [{ label: 'Phone', value: '+91 98765 43210' }, { label: 'Last Order', value: '2 days ago' }] },
      { id: 6, type: 'customer', name: 'Priya Sharma', icon: 'person', iconColor: 'green', category: 'Customer', balance: -5000, details: [{ label: 'Phone', value: '+91 98765 12345' }, { label: 'Last Order', value: '1 week ago' }] },
      { id: 7, type: 'vendor', name: 'ABC Suppliers', icon: 'store', iconColor: 'orange', category: 'Vendor', balance: -25000, details: [{ label: 'Phone', value: '+91 98700 00001' }, { label: 'Last Purchase', value: '3 days ago' }] },
      { id: 8, type: 'ledger', name: 'Sales Account', icon: 'account_balance_wallet', iconColor: 'teal', category: 'Ledger', balance: 150000 },
    ];

    return data.filter(item =>
      item.name.toLowerCase().includes(query.toLowerCase())
    );
  }

  /**
   * Get fallback ISV data for demo
   * @param {string} query
   * @returns {Array}
   * @private
   */
  _getFallbackISVData(query) {
    const data = [
      { id: 1, sku: 'SKU001', name: 'iPhone 15 Pro Max 256GB', stock: 25, price: 159900, cost: 140000, vendorStock: 50, status: 'active' },
      { id: 2, sku: 'SKU002', name: 'Samsung Galaxy S24 Ultra', stock: 8, price: 134999, cost: 115000, vendorStock: 30, status: 'active' },
      { id: 3, sku: 'SKU003', name: 'OnePlus 12 5G 256GB', stock: 0, price: 64999, cost: 55000, vendorStock: 20, status: 'active' },
      { id: 4, sku: 'SKU004', name: 'Google Pixel 8 Pro', stock: 3, price: 106999, cost: 90000, vendorStock: 15, status: 'liquidation' },
      { id: 5, sku: 'SKU005', name: 'MacBook Pro 14" M3', stock: 12, price: 199900, cost: 175000, vendorStock: 25, status: 'active' },
    ];

    let filtered = data;

    // Filter by query
    if (query) {
      filtered = filtered.filter(item =>
        item.name.toLowerCase().includes(query.toLowerCase()) ||
        item.sku.toLowerCase().includes(query.toLowerCase())
      );
    }

    // Filter by stock
    if (this.activeFilters.stock !== 'all') {
      filtered = filtered.filter(item => {
        switch (this.activeFilters.stock) {
          case 'in-stock': return item.stock > 10;
          case 'low-stock': return item.stock > 0 && item.stock <= 10;
          case 'out-of-stock': return item.stock === 0;
          default: return true;
        }
      });
    }

    // Filter by status
    if (this.activeFilters.status !== 'all') {
      filtered = filtered.filter(item => item.status === this.activeFilters.status);
    }

    return filtered;
  }

  // ============================================
  // PUBLIC API
  // ============================================

  /**
   * Configure the search controller
   * @param {Object} config
   */
  configure(config) {
    if (config.searchUrl) this.searchUrl = config.searchUrl;
    if (config.isvSearchUrl) this.isvSearchUrl = config.isvSearchUrl;
    if (config.onSearch) this.onSearch = config.onSearch;
    if (config.onItemClick) this.onItemClick = config.onItemClick;
    if (config.onAccountClick) this.onAccountClick = config.onAccountClick;
    if (config.onQuickActionClick) this.onQuickActionClick = config.onQuickActionClick;
  }

  /**
   * Open the search overlay
   */
  open() {
    if (this.isOpen) return;

    this.isOpen = true;
    this._overlay.classList.add('active');
    document.body.style.overflow = 'hidden';

    // Focus input
    setTimeout(() => {
      if (this._input) this._input.focus();
    }, 100);

    // Show default state
    this._showDefaultState();
  }

  /**
   * Close the search overlay
   */
  close() {
    if (!this.isOpen) return;

    this.isOpen = false;
    this._overlay.classList.remove('active');
    document.body.style.overflow = '';

    // Reset state
    if (this._input) this._input.value = '';
    this.searchQuery = '';
    this.isISVSearch = false;
    this.focusedIndex = -1;
    this.results = [];
  }

  /**
   * Toggle the search overlay
   */
  toggle() {
    if (this.isOpen) {
      this.close();
    } else {
      this.open();
    }
  }

  /**
   * Programmatically search
   * @param {string} query
   */
  search(query) {
    if (this._input) {
      this._input.value = query;
    }
    this.searchQuery = query;
    this.isISVSearch = query.toLowerCase().startsWith('isv:');
    this._updateSearchMode();
    this._performSearch(query);
  }
}

// Auto-initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  const overlay = document.querySelector('.so-search-overlay');
  if (overlay) {
    new GlobalSearchController();
  }
});

// Export for ES modules
export default GlobalSearchController;
export { GlobalSearchController };

// ============================================
// SIDEBAR CONTROLLER
// Standalone sidebar component (extracted from framework)
// ============================================

/**
 * SidebarController - Handles sidebar collapse/expand, pinning, mobile menu, and submenu navigation
 */
class SidebarController {
  static DEFAULTS = {
    mainContentSelector: '.so-main-content',
    overlaySelector: '.so-sidebar-overlay',
    toggleSelector: '.so-sidebar-toggle',
    storageKey: 'so-sidebar-state',
    breakpoint: 768,
  };

  constructor(element, options = {}) {
    this.element = element;
    this.options = { ...SidebarController.DEFAULTS, ...options };

    if (!this.element) return;

    // Cache DOM elements
    this._mainContent = document.querySelector(this.options.mainContentSelector);
    this._overlay = document.querySelector(this.options.overlaySelector);
    this._toggle = this.element.querySelector(this.options.toggleSelector);

    // State
    this._isMobile = false;
    this._isCollapsed = true;
    this._isOpen = false;

    // Disable transitions initially
    this.element.classList.add('no-transition');

    // Check viewport and restore state
    this._checkMobile();
    this._restoreState();

    // Bind events
    this._bindEvents();

    // Initialize submenu state
    this._initSubmenuArrows();
    this._initSubmenuState();

    // Update body class
    this._updateBodyClass();

    // Re-enable transitions after paint
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        this.element.classList.remove('no-transition');
        document.documentElement.classList.remove('sidebar-collapsed', 'sidebar-pinned');
      });
    });
  }

  /**
   * Debounce helper
   */
  static debounce(fn, delay) {
    let timer = null;
    return function (...args) {
      clearTimeout(timer);
      timer = setTimeout(() => fn.apply(this, args), delay);
    };
  }

  /**
   * Bind event listeners
   */
  _bindEvents() {
    // Window resize
    window.addEventListener('resize', SidebarController.debounce(() => {
      this._checkMobile();
      if (this._isMobile) {
        this._closeMobile();
      }
      this._updateBodyClass();
    }, 150));

    // Toggle button (pin/unpin)
    if (this._toggle) {
      this._toggle.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        this.togglePinned();
      });
    }

    // Mobile toggle buttons
    document.querySelectorAll('[data-toggle="sidebar"]').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        if (this._isMobile) {
          this.toggleMobile();
        } else {
          this.togglePinned();
        }
      });
    });

    // Overlay click
    if (this._overlay) {
      this._overlay.addEventListener('click', () => this._closeMobile());
    }

    // Submenu toggle
    this.element.addEventListener('click', (e) => {
      const link = e.target.closest('.so-sidebar-link');
      if (link) {
        const item = link.parentElement;
        const submenu = item.querySelector('.so-sidebar-submenu');
        if (submenu) {
          e.preventDefault();
          this._toggleSubmenu(item);
        }
      }
    });

    // Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this._isMobile && this._isOpen) {
        this._closeMobile();
      }
    });
  }

  /**
   * Check if viewport is mobile
   */
  _checkMobile() {
    this._isMobile = window.innerWidth <= this.options.breakpoint;
  }

  /**
   * Update body class based on sidebar state
   */
  _updateBodyClass() {
    if (this._isCollapsed && !this._isMobile) {
      document.body.classList.add('sidebar-collapsed');
    } else {
      document.body.classList.remove('sidebar-collapsed');
    }
  }

  /**
   * Toggle pinned state
   */
  togglePinned() {
    this._isCollapsed = !this._isCollapsed;

    if (this._isCollapsed) {
      this.element.classList.add('so-collapsed');
      this.element.classList.remove('pinned');
    } else {
      this.element.classList.remove('so-collapsed');
      this.element.classList.add('pinned');
    }

    this._updateBodyClass();
    this._saveState(this._isCollapsed ? 'collapsed' : 'pinned');

    return this;
  }

  /**
   * Pin the sidebar (expand)
   */
  pin() {
    if (!this._isCollapsed) return this;
    return this.togglePinned();
  }

  /**
   * Unpin the sidebar (collapse)
   */
  unpin() {
    if (this._isCollapsed) return this;
    return this.togglePinned();
  }

  /**
   * Check if sidebar is pinned
   */
  isPinned() {
    return !this._isCollapsed;
  }

  /**
   * Toggle mobile sidebar
   */
  toggleMobile() {
    return this._isOpen ? this._closeMobile() : this._openMobile();
  }

  /**
   * Open mobile sidebar
   */
  _openMobile() {
    this._isOpen = true;
    this.element.classList.add('so-open');
    this._overlay?.classList.add('active');
    document.body.classList.add('so-sidebar-open');
    document.body.style.overflow = 'hidden';
    return this;
  }

  /**
   * Close mobile sidebar
   */
  _closeMobile() {
    this._isOpen = false;
    this.element.classList.remove('so-open');
    this._overlay?.classList.remove('active');
    document.body.classList.remove('so-sidebar-open');
    document.body.style.overflow = '';
    return this;
  }

  /**
   * Toggle submenu
   */
  _toggleSubmenu(item) {
    const isOpen = item.classList.contains('so-open');
    const parent = item.parentElement;

    // Close siblings
    parent.querySelectorAll(':scope > .so-sidebar-item.so-open').forEach(sibling => {
      if (sibling !== item) {
        sibling.classList.remove('so-open');
      }
    });

    // Toggle current
    item.classList.toggle('so-open', !isOpen);
  }

  /**
   * Initialize arrows for nested submenu items
   */
  _initSubmenuArrows() {
    this.element.querySelectorAll('.so-sidebar-submenu .so-sidebar-item').forEach(item => {
      const nestedSubmenu = item.querySelector(':scope > .so-sidebar-submenu');
      if (nestedSubmenu) {
        item.classList.add('has-children');

        const link = item.querySelector(':scope > .so-sidebar-link');
        if (link && !link.querySelector('.so-sidebar-arrow')) {
          const arrow = document.createElement('span');
          arrow.className = 'so-sidebar-arrow';
          arrow.innerHTML = '<span class="material-icons">chevron_right</span>';
          link.appendChild(arrow);
        }
      }
    });
  }

  /**
   * Initialize submenu state based on active items
   */
  _initSubmenuState() {
    this.element.querySelectorAll('.so-sidebar-item.current, .so-sidebar-item.active').forEach(item => {
      let parent = item.parentElement.closest('.so-sidebar-item');
      while (parent) {
        parent.classList.add('so-open');
        parent = parent.parentElement.closest('.so-sidebar-item');
      }
    });
  }

  /**
   * Save sidebar state to storage
   */
  _saveState(state) {
    try {
      localStorage.setItem(this.options.storageKey, state);
    } catch (e) {
      // Storage not available
    }
  }

  /**
   * Restore sidebar state from storage
   */
  _restoreState() {
    if (this._isMobile) return;

    try {
      const state = localStorage.getItem(this.options.storageKey);
      if (state === 'pinned') {
        this._isCollapsed = false;
        this.element.classList.remove('so-collapsed');
        this.element.classList.add('pinned');
      } else {
        this._isCollapsed = true;
        this.element.classList.add('so-collapsed');
      }
    } catch (e) {
      // Storage not available
      this._isCollapsed = true;
      this.element.classList.add('so-collapsed');
    }
  }
}

// Initialize sidebar when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  const sidebarEl = document.querySelector('.so-sidebar');
  if (sidebarEl) {
    window.soSidebar = new SidebarController(sidebarEl);
  }
});

// Export
export { SidebarController };
