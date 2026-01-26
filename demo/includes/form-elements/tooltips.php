            <div class="so-tab-pane fade" id="pane-tooltips" role="tabpanel">
                <!-- Basic Tooltips -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Basic Tooltips</h3>
                    </div>
                    <div class="so-card-body">
                        <p class="so-demo-desc">
                            JavaScript-powered tooltips with automatic positioning and animations.
                        </p>
                                                        <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-primary" data-so-tooltip="Tooltip on top">Top</button>
                                    <button class="so-btn so-btn-primary" data-so-tooltip="Tooltip on bottom" data-so-tooltip-position="bottom">Bottom</button>
                                    <button class="so-btn so-btn-primary" data-so-tooltip="Tooltip on left" data-so-tooltip-position="left">Left</button>
                                    <button class="so-btn so-btn-primary" data-so-tooltip="Tooltip on right" data-so-tooltip-position="right">Right</button>
                                </div>                            <div class="so-code-block so-mt-4">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button data-so-tooltip="Tooltip on top"&gt;Top&lt;/button&gt;
&lt;button data-so-tooltip="Tooltip on bottom" data-so-tooltip-position="bottom"&gt;Bottom&lt;/button&gt;
&lt;button data-so-tooltip="Tooltip on left" data-so-tooltip-position="left"&gt;Left&lt;/button&gt;
&lt;button data-so-tooltip="Tooltip on right" data-so-tooltip-position="right"&gt;Right&lt;/button&gt;</code></pre>
                            </div>
                    </div>
                </div>

                <!-- Keyboard Shortcuts -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Keyboard Shortcuts</h3>
                    </div>
                    <div class="so-card-body">
                        <p class="so-demo-desc">
                            Display keyboard shortcuts alongside tooltip text. Automatically adapts for Mac (⌘) and Windows (Ctrl).
                        </p>
                                                        <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Copy" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons" class="so-tooltip-demo-icon">content_copy</span>
                                        Copy
                                    </button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Paste" data-so-shortcut="Ctrl+V">
                                        <span class="material-icons" class="so-tooltip-demo-icon">content_paste</span>
                                        Paste
                                    </button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Save" data-so-shortcut="Ctrl+S">
                                        <span class="material-icons" class="so-tooltip-demo-icon">save</span>
                                        Save
                                    </button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Undo" data-so-shortcut="Ctrl+Z">
                                        <span class="material-icons" class="so-tooltip-demo-icon">undo</span>
                                        Undo
                                    </button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Command Palette" data-so-shortcut="Ctrl+Shift+P">
                                        <span class="material-icons" class="so-tooltip-demo-icon">terminal</span>
                                        Commands
                                    </button>
                                </div>                            <div class="so-code-block so-mt-4">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button data-so-tooltip="Copy" data-so-shortcut="Ctrl+C"&gt;Copy&lt;/button&gt;
&lt;button data-so-tooltip="Paste" data-so-shortcut="Ctrl+V"&gt;Paste&lt;/button&gt;
&lt;button data-so-tooltip="Save" data-so-shortcut="Ctrl+S"&gt;Save&lt;/button&gt;
&lt;button data-so-tooltip="Undo" data-so-shortcut="Ctrl+Z"&gt;Undo&lt;/button&gt;
&lt;button data-so-tooltip="Command Palette" data-so-shortcut="Ctrl+Shift+P"&gt;Commands&lt;/button&gt;</code></pre>
                            </div>
                        </div>

                        <!-- Shortcut-only tooltip -->
                        <h4 class="so-demo-section-heading-spaced">Shortcut Only</h4>
                                                        <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-ghost" data-so-shortcut="Escape">
                                        <span class="material-icons" class="so-tooltip-demo-icon">close</span>
                                    </button>
                                    <button class="so-btn so-btn-ghost" data-so-shortcut="Enter">
                                        <span class="material-icons" class="so-tooltip-demo-icon">check</span>
                                    </button>
                                    <button class="so-btn so-btn-ghost" data-so-shortcut="Tab">
                                        <span class="material-icons" class="so-tooltip-demo-icon">keyboard_tab</span>
                                    </button>
                                </div>                            <div class="so-code-block so-mt-4">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;!-- Shortcut only (no text) --&gt;
&lt;button data-so-shortcut="Escape"&gt;...&lt;/button&gt;
&lt;button data-so-shortcut="Enter"&gt;...&lt;/button&gt;
&lt;button data-so-shortcut="Tab"&gt;...&lt;/button&gt;</code></pre>
                            </div>
                    </div>
                </div>

                <!-- Color Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Color Variants</h3>
                    </div>
                    <div class="so-card-body">
                                                        <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-outline" data-so-tooltip="Default tooltip">Default</button>
                                    <button class="so-btn so-btn-outline-primary" data-so-tooltip="Primary color" data-so-tooltip-color="primary">Primary</button>
                                    <button class="so-btn so-btn-outline-success" data-so-tooltip="Success message" data-so-tooltip-color="success">Success</button>
                                    <button class="so-btn so-btn-outline-danger" data-so-tooltip="Danger alert" data-so-tooltip-color="danger">Danger</button>
                                    <button class="so-btn so-btn-outline-warning" data-so-tooltip="Warning notice" data-so-tooltip-color="warning">Warning</button>
                                    <button class="so-btn so-btn-outline-info" data-so-tooltip="Info hint" data-so-tooltip-color="info">Info</button>
                                </div>                            <div class="so-code-block so-mt-4">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button data-so-tooltip="Default tooltip"&gt;Default&lt;/button&gt;
&lt;button data-so-tooltip="Primary color" data-so-tooltip-color="primary"&gt;Primary&lt;/button&gt;
&lt;button data-so-tooltip="Success message" data-so-tooltip-color="success"&gt;Success&lt;/button&gt;
&lt;button data-so-tooltip="Danger alert" data-so-tooltip-color="danger"&gt;Danger&lt;/button&gt;
&lt;button data-so-tooltip="Warning notice" data-so-tooltip-color="warning"&gt;Warning&lt;/button&gt;
&lt;button data-so-tooltip="Info hint" data-so-tooltip-color="info"&gt;Info&lt;/button&gt;</code></pre>
                            </div>
                    </div>
                </div>

                <!-- Size Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Size Variants</h3>
                    </div>
                    <div class="so-card-body">
                                                        <div class="so-flex so-gap-3 so-flex-wrap so-items-center">
                                    <button class="so-btn so-btn-secondary so-btn-sm" data-so-tooltip="Small tooltip" data-so-tooltip-size="sm">Small</button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Default tooltip size">Default</button>
                                    <button class="so-btn so-btn-secondary so-btn-lg" data-so-tooltip="Large tooltip" data-so-tooltip-size="lg">Large</button>
                                </div>                            <div class="so-code-block so-mt-4">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button data-so-tooltip="Small tooltip" data-so-tooltip-size="sm"&gt;Small&lt;/button&gt;
&lt;button data-so-tooltip="Default tooltip size"&gt;Default&lt;/button&gt;
&lt;button data-so-tooltip="Large tooltip" data-so-tooltip-size="lg"&gt;Large&lt;/button&gt;</code></pre>
                            </div>
                    </div>
                </div>

                <!-- Light Theme -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Light Theme</h3>
                    </div>
                    <div class="so-card-body">
                        <p class="so-demo-desc">
                            Light themed tooltips that adapt to light/dark mode.
                        </p>
                                                        <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-light" data-so-tooltip="Light themed tooltip" data-so-tooltip-theme="light">Light Theme</button>
                                    <button class="so-btn so-btn-light" data-so-tooltip="With shortcut" data-so-shortcut="Ctrl+L" data-so-tooltip-theme="light">Light + Shortcut</button>
                                </div>                            <div class="so-code-block so-mt-4">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button data-so-tooltip="Light themed tooltip" data-so-tooltip-theme="light"&gt;Light Theme&lt;/button&gt;
&lt;button data-so-tooltip="With shortcut" data-so-shortcut="Ctrl+L" data-so-tooltip-theme="light"&gt;Light + Shortcut&lt;/button&gt;</code></pre>
                            </div>
                    </div>
                </div>

                <!-- Animation Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Animation Variants</h3>
                    </div>
                    <div class="so-card-body">
                                                        <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-outline" data-so-tooltip="Fade animation" data-so-tooltip-animation="fade">Fade</button>
                                    <button class="so-btn so-btn-outline" data-so-tooltip="Scale animation (default)" data-so-tooltip-animation="scale">Scale</button>
                                    <button class="so-btn so-btn-outline" data-so-tooltip="Slide animation" data-so-tooltip-animation="slide">Slide</button>
                                </div>                            <div class="so-code-block so-mt-4">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button data-so-tooltip="Fade animation" data-so-tooltip-animation="fade"&gt;Fade&lt;/button&gt;
&lt;button data-so-tooltip="Scale animation (default)" data-so-tooltip-animation="scale"&gt;Scale&lt;/button&gt;
&lt;button data-so-tooltip="Slide animation" data-so-tooltip-animation="slide"&gt;Slide&lt;/button&gt;</code></pre>
                            </div>
                    </div>
                </div>

                <!-- JavaScript API -->
                <div class="so-card">
                    <div class="so-card-header">
                        <h3 class="so-card-title">JavaScript API</h3>
                    </div>
                    <div class="so-card-body">
                        <p class="so-demo-desc">
                            Use the JavaScript API for programmatic control and temporary feedback tooltips.
                        </p>
                                                        <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-primary" id="tooltip-api-demo" onclick="showApiTooltip(this)">
                                        <span class="material-icons" class="so-tooltip-demo-icon">mouse</span>
                                        Click for Tooltip
                                    </button>
                                    <button class="so-btn so-btn-success" onclick="showSuccessTooltip(this)">
                                        <span class="material-icons" class="so-tooltip-demo-icon">check</span>
                                        Show Success
                                    </button>
                                    <button class="so-btn so-btn-danger" onclick="showErrorTooltip(this)">
                                        <span class="material-icons" class="so-tooltip-demo-icon">error</span>
                                        Show Error
                                    </button>
                                </div>                            <div class="so-code-block so-mt-4">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons">code</span> JavaScript</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-javascript">// Get or create tooltip instance
const tooltip = SOTooltip.getInstance(element, {
    content: 'Tooltip text',
    shortcut: 'Ctrl+S',
    position: 'top',
    color: 'primary',
    size: 'sm',
    theme: 'light',
    animation: 'scale',
    trigger: 'hover'
});

// Manual show/hide
tooltip.show();
tooltip.hide();
tooltip.toggle();

// Update content dynamically
tooltip.setContent('New content');
tooltip.setShortcut('Ctrl+N');
tooltip.setColor('success');
tooltip.setPosition('bottom');

// Enable/disable
tooltip.enable();
tooltip.disable();

// Show temporary feedback tooltip (auto-hides)
SOTooltip.showTemporary(button, {
    content: 'Copied!',
    color: 'success',
    position: 'top',
    autoHide: 2000
});

// Events
element.addEventListener('so:tooltip:show', (e) => {
    console.log('Showing via:', e.detail.trigger);
    // e.preventDefault(); // Cancel show
});

element.addEventListener('so:tooltip:shown', (e) => {
    console.log('Tooltip visible:', e.detail.tooltipEl);
});

element.addEventListener('so:tooltip:hide', (e) => {
    console.log('Hiding via:', e.detail.trigger);
});

element.addEventListener('so:tooltip:hidden', (e) => {
    console.log('Tooltip hidden');
});</code></pre>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
$inlineJs = <<<'JS'
// Tooltip demo functions
function showApiTooltip(btn) {
    if (typeof SOTooltip !== 'undefined') {
        SOTooltip.showTemporary(btn, {
            content: 'Programmatic tooltip!',
            color: 'primary',
            position: 'top',
            autoHide: 2000
        });
    }
}

function showSuccessTooltip(btn) {
    if (typeof SOTooltip !== 'undefined') {
        SOTooltip.showTemporary(btn, {
            content: 'Action completed successfully!',
            color: 'success',
            position: 'top',
            autoHide: 2000
        });
    }
}

function showErrorTooltip(btn) {
    if (typeof SOTooltip !== 'undefined') {
        SOTooltip.showTemporary(btn, {
            content: 'Something went wrong',
            color: 'danger',
            position: 'top',
            autoHide: 2000
        });
    }
}

function simulateProgress(btn) {
    // Reset if already completed
    if (btn.classList.contains('completed')) {
        btn.classList.remove('completed');
        btn.classList.remove('progressing');
        btn.style.setProperty('--progress', '0%');
        return;
    }

    let progress = 0;
    btn.disabled = true;
    btn.classList.add('progressing'); // Add progressing state

    const interval = setInterval(() => {
        progress += Math.random() * 15 + 5;
        if (progress >= 100) {
            progress = 100;
            clearInterval(interval);
            btn.style.setProperty('--progress', '100%');

            // Add completed class after a brief moment
            setTimeout(() => {
                btn.classList.remove('progressing'); // Remove progressing state
                btn.classList.add('completed');
                btn.disabled = false;
            }, 200);
        } else {
            btn.style.setProperty('--progress', progress + '%');
        }
    }, 150);
}

// Dropdown demo functions
function logDropdownEvent(e) {
    const eventName = e.type.replace('so:dropdown:', '');
    let details = {};

    if (e.detail) {
        if (e.detail.value !== undefined) details.value = e.detail.value;
        if (e.detail.text !== undefined) details.text = e.detail.text;
        if (e.detail.values !== undefined) details.values = e.detail.values;
        if (e.detail.action !== undefined) details.action = e.detail.action;
    }

    // Log to console
    if (Object.keys(details).length > 0) {
        console.log(`dropdown:${eventName}`, details);
    } else {
        console.log(`dropdown:${eventName}`);
    }
}

// Tabs demo functions
function demoTabsNext() {
    const tabsEl = document.querySelector('#demo-events-tabs');
    const tabs = SOTabs.getInstance(tabsEl);
    if (tabs) tabs.next();
}

function demoTabsPrev() {
    const tabsEl = document.querySelector('#demo-events-tabs');
    const tabs = SOTabs.getInstance(tabsEl);
    if (tabs) tabs.prev();
}

function demoTabsShowById() {
    const tabsEl = document.querySelector('#demo-events-tabs');
    const tabs = SOTabs.getInstance(tabsEl);
    if (tabs) tabs.showById('demo-events-3');
}

// Listen to tab events for demo
document.addEventListener('DOMContentLoaded', function() {
    // Initialize dropdown demo instances
    const eventsDropdownEl = document.querySelector('#demo-events-dropdown');
    if (eventsDropdownEl && typeof SODropdown !== 'undefined') {
        window.demoDropdown = SODropdown.getInstance(eventsDropdownEl);

        // Attach event listeners for the demo
        ['show', 'shown', 'hide', 'hidden', 'change'].forEach(eventName => {
            eventsDropdownEl.addEventListener('so:dropdown:' + eventName, logDropdownEvent);
        });
    }

    const disableDropdownEl = document.querySelector('#demo-disable-dropdown');
    if (disableDropdownEl && typeof SODropdown !== 'undefined') {
        window.disableDropdown = SODropdown.getInstance(disableDropdownEl);
    }

    // Set indeterminate state for demo checkboxes
    const indeterminateCheckbox = document.querySelector('#indeterminate-checkbox input');
    if (indeterminateCheckbox) {
        indeterminateCheckbox.indeterminate = true;
    }
    const indeterminateCheckbox2 = document.querySelector('#indeterminate-checkbox-2 input');
    if (indeterminateCheckbox2) {
        indeterminateCheckbox2.indeterminate = true;
    }

    const demoTabs = document.querySelector('#demo-events-tabs');
    if (demoTabs) {
        demoTabs.addEventListener('so:tab:show', function(e) {
            console.log('so:tab:show - About to show:', e.target.textContent.trim());
            if (e.detail.relatedTarget) {
                console.log('  Previous tab:', e.detail.relatedTarget.textContent.trim());
            }
        });

        demoTabs.addEventListener('so:tab:shown', function(e) {
            console.log('so:tab:shown - Tab now active:', e.target.textContent.trim());
        });

        demoTabs.addEventListener('so:tab:hide', function(e) {
            console.log('so:tab:hide - About to hide:', e.target.textContent.trim());
        });

        demoTabs.addEventListener('so:tab:hidden', function(e) {
            console.log('so:tab:hidden - Tab now hidden:', e.target.textContent.trim());
        });
    }
});
JS;

require_once 'includes/footer.php';
?>
