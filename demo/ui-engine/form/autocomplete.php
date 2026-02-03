<?php
/**
 * SixOrbit UI Engine - Autocomplete Element Demo
 */

$pageTitle = 'Autocomplete - UI Engine';
$pageDescription = 'Autocomplete input with single/multiple selection, async data, and token support';

require_once '../../includes/config.php';
require_once '../../includes/header.php';
require_once '../../includes/sidebar.php';
require_once '../../includes/navbar.php';
?>

<main class="so-main-content">
    <!-- Page Header -->
    <div class="so-page-header">
        <div class="so-page-header-left">
            <h1 class="so-page-title">Autocomplete</h1>
            <p class="so-page-subtitle">Autocomplete input element with single/multiple selection, static or remote data, and token/chip display.</p>
        </div>
    </div>

    <div class="so-page-body">
        <!-- Basic Autocomplete -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Basic Autocomplete</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Country</label>
                    <div class="so-autocomplete" id="demo-basic-autocomplete"></div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('basic-autocomplete', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "<?php
use Core\UiEngine\UiEngine;

\$autocomplete = UiEngine::autocomplete('country')
    ->label('Country')
    ->placeholder('Type to search...')
    ->options([
        ['value' => 'us', 'text' => 'United States'],
        ['value' => 'uk', 'text' => 'United Kingdom'],
        ['value' => 'ca', 'text' => 'Canada'],
        ['value' => 'au', 'text' => 'Australia'],
        ['value' => 'de', 'text' => 'Germany'],
        ['value' => 'fr', 'text' => 'France'],
    ]);

echo \$autocomplete->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const autocomplete = new SOAutocomplete('#country', {
    placeholder: 'Type to search...',
    options: [
        { value: 'us', text: 'United States' },
        { value: 'uk', text: 'United Kingdom' },
        { value: 'ca', text: 'Canada' },
        { value: 'au', text: 'Australia' },
        { value: 'de', text: 'Germany' },
        { value: 'fr', text: 'France' }
    ]
});"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Country</label>
    <div class="so-autocomplete" id="country" data-so-autocomplete>
        <div class="so-autocomplete-container">
            <input type="text" class="so-autocomplete-input" placeholder="Type to search...">
            <span class="so-autocomplete-arrow">
                <span class="material-icons">expand_more</span>
            </span>
        </div>
        <div class="so-autocomplete-dropdown">
            <div class="so-autocomplete-options"></div>
        </div>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Multiple Selection -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Multiple Selection</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Select Skills</label>
                    <div class="so-autocomplete" id="demo-multiple-autocomplete" data-so-multiple="true"></div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('autocomplete-multiple', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$autocomplete = UiEngine::autocomplete('skills')
    ->label('Select Skills')
    ->placeholder('Add skills...')
    ->multiple()
    ->options([
        ['value' => 'js', 'text' => 'JavaScript'],
        ['value' => 'py', 'text' => 'Python'],
        ['value' => 'php', 'text' => 'PHP'],
        ['value' => 'java', 'text' => 'Java'],
        ['value' => 'ruby', 'text' => 'Ruby'],
        ['value' => 'go', 'text' => 'Go'],
    ]);

echo \$autocomplete->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const autocomplete = new SOAutocomplete('#skills', {
    placeholder: 'Add skills...',
    multiple: true,
    options: [
        { value: 'js', text: 'JavaScript' },
        { value: 'py', text: 'Python' },
        { value: 'php', text: 'PHP' },
        { value: 'java', text: 'Java' },
        { value: 'ruby', text: 'Ruby' },
        { value: 'go', text: 'Go' }
    ]
});"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Select Skills</label>
    <div class="so-autocomplete" id="skills" data-so-autocomplete data-so-multiple="true">
        <div class="so-autocomplete-container">
            <div class="so-autocomplete-tokens">
                <input type="text" class="so-autocomplete-input" placeholder="Add skills...">
            </div>
            <span class="so-autocomplete-arrow">
                <span class="material-icons">expand_more</span>
            </span>
        </div>
        <div class="so-autocomplete-dropdown">
            <div class="so-autocomplete-options"></div>
        </div>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Display Modes -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Display Modes</h3>
            </div>
            <div class="so-card-body">
                <!-- Code Tabs -->
                <?= so_code_tabs('autocomplete-display', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Chips display (default - wrapping)
\$autocomplete = UiEngine::autocomplete('tags')
    ->multiple()
    ->displayMode('chips');

// Chips overflow (single line with +N more)
\$autocomplete = UiEngine::autocomplete('tags')
    ->multiple()
    ->displayMode('chips-overflow')
    ->maxVisibleTokens(2);

// Text display (\"3 selected\")
\$autocomplete = UiEngine::autocomplete('tags')
    ->multiple()
    ->displayMode('text');"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Chips display (default - wrapping)
new SOAutocomplete('#tags', {
    multiple: true,
    displayMode: 'chips'
});

// Chips overflow (single line with +N more)
new SOAutocomplete('#tags', {
    multiple: true,
    displayMode: 'chips-overflow',
    maxVisibleTokens: 2
});

// Text display (\"3 selected\")
new SOAutocomplete('#tags', {
    multiple: true,
    displayMode: 'text'
});"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<!-- Chips display (wrapping) -->
<div class="so-autocomplete so-autocomplete-display-chips" data-so-multiple="true">
    <!-- ... -->
</div>

<!-- Chips overflow (single line) -->
<div class="so-autocomplete so-autocomplete-display-chips-overflow" data-so-multiple="true">
    <!-- ... -->
</div>

<!-- Text display -->
<div class="so-autocomplete so-autocomplete-display-text" data-so-multiple="true">
    <!-- ... -->
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Remote Data Source -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Remote Data Source</h3>
            </div>
            <div class="so-card-body">
                <!-- Code Tabs -->
                <?= so_code_tabs('autocomplete-remote', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$autocomplete = UiEngine::autocomplete('product')
    ->label('Search Products')
    ->placeholder('Type to search products...')
    ->async('/api/products/search')
    ->minLength(2)
    ->debounce(300);

echo \$autocomplete->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const autocomplete = new SOAutocomplete('#product', {
    placeholder: 'Type to search products...',
    async: async (query) => {
        const response = await fetch(`/api/products/search?q=\${query}`);
        return await response.json();
    },
    minLength: 2,
    debounceTime: 300
});"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-autocomplete" id="product" data-so-autocomplete data-so-async="/api/products/search">
    <div class="so-autocomplete-container">
        <input type="text" class="so-autocomplete-input" placeholder="Type to search products...">
        <div class="so-autocomplete-loading" style="display: none;">
            <span class="so-spinner so-spinner-sm"></span>
        </div>
        <span class="so-autocomplete-arrow">
            <span class="material-icons">expand_more</span>
        </span>
    </div>
    <div class="so-autocomplete-dropdown">
        <div class="so-autocomplete-options"></div>
        <div class="so-autocomplete-no-results" style="display: none;">No results found</div>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Free Solo Mode -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Free Solo Mode</h3>
            </div>
            <div class="so-card-body">
                <!-- Code Tabs -->
                <?= so_code_tabs('autocomplete-freesolo', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Allow custom values with validation
\$autocomplete = UiEngine::autocomplete('emails')
    ->label('Email Addresses')
    ->placeholder('Type email and press Enter...')
    ->multiple()
    ->freeSolo()
    ->tokenDelimiters([',', ';', ' '])
    ->validation(function(\$value) {
        return filter_var(\$value, FILTER_VALIDATE_EMAIL);
    });

echo \$autocomplete->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const autocomplete = new SOAutocomplete('#emails', {
    placeholder: 'Type email and press Enter...',
    multiple: true,
    freeSolo: true,
    tokenDelimiters: [',', ';', ' '],
    tokenValidation: (value) => {
        const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
        return emailRegex.test(value);
    }
});"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-autocomplete" id="emails" data-so-autocomplete data-so-multiple="true" data-so-free-solo="true">
    <div class="so-autocomplete-container">
        <div class="so-autocomplete-tokens">
            <!-- Tokens appear here when added -->
            <span class="so-autocomplete-token so-chip so-chip-sm so-chip-soft-primary">
                <span class="so-autocomplete-token-text">user@example.com</span>
                <button class="so-autocomplete-token-remove so-chip-close">
                    <span class="material-icons">close</span>
                </button>
            </span>
            <input type="text" class="so-autocomplete-input" placeholder="Type email and press Enter...">
        </div>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Size Variants -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Size Variants</h3>
            </div>
            <div class="so-card-body">
                <!-- Code Tabs -->
                <?= so_code_tabs('autocomplete-sizes', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Small
UiEngine::autocomplete('small')->size('sm');

// Default
UiEngine::autocomplete('default');

// Large
UiEngine::autocomplete('large')->size('lg');"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Small
new SOAutocomplete('#small', { size: 'sm' });

// Default
new SOAutocomplete('#default');

// Large
new SOAutocomplete('#large', { size: 'lg' });"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<!-- Small -->
<div class="so-autocomplete so-autocomplete-sm" data-so-autocomplete></div>

<!-- Default -->
<div class="so-autocomplete" data-so-autocomplete></div>

<!-- Large -->
<div class="so-autocomplete so-autocomplete-lg" data-so-autocomplete></div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- API Reference -->
        <div class="so-card">
            <div class="so-card-header">
                <h3 class="so-card-title">API Reference</h3>
            </div>
            <div class="so-card-body">
                <div class="so-table-responsive">
                    <table class="so-table so-table-bordered">
                        <thead class="so-table-light">
                            <tr>
                                <th>Method/Option</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>options</code></td>
                                <td><code>array</code></td>
                                <td>Static options array with value/text pairs</td>
                            </tr>
                            <tr>
                                <td><code>async</code></td>
                                <td><code>function|string</code></td>
                                <td>Async function or URL for remote data</td>
                            </tr>
                            <tr>
                                <td><code>multiple</code></td>
                                <td><code>boolean</code></td>
                                <td>Enable multiple selection with tokens</td>
                            </tr>
                            <tr>
                                <td><code>freeSolo</code></td>
                                <td><code>boolean</code></td>
                                <td>Allow custom values not in options list</td>
                            </tr>
                            <tr>
                                <td><code>displayMode</code></td>
                                <td><code>string</code></td>
                                <td>chips, chips-overflow, or text</td>
                            </tr>
                            <tr>
                                <td><code>minLength</code></td>
                                <td><code>int</code></td>
                                <td>Minimum characters before searching</td>
                            </tr>
                            <tr>
                                <td><code>debounceTime</code></td>
                                <td><code>int</code></td>
                                <td>Debounce delay in milliseconds (default: 300)</td>
                            </tr>
                            <tr>
                                <td><code>size</code></td>
                                <td><code>string</code></td>
                                <td>Size variant: sm or lg</td>
                            </tr>
                            <tr>
                                <td><code>tokenDelimiters</code></td>
                                <td><code>array</code></td>
                                <td>Characters that create tokens in free solo mode</td>
                            </tr>
                            <tr>
                                <td><code>tokenValidation</code></td>
                                <td><code>function</code></td>
                                <td>Function to validate token values</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize basic autocomplete demo
    if (document.getElementById('demo-basic-autocomplete')) {
        new SOAutocomplete('#demo-basic-autocomplete', {
            placeholder: 'Type to search...',
            options: [
                { value: 'us', text: 'United States' },
                { value: 'uk', text: 'United Kingdom' },
                { value: 'ca', text: 'Canada' },
                { value: 'au', text: 'Australia' },
                { value: 'de', text: 'Germany' },
                { value: 'fr', text: 'France' },
                { value: 'jp', text: 'Japan' },
                { value: 'in', text: 'India' }
            ]
        });
    }

    // Initialize multiple autocomplete demo
    if (document.getElementById('demo-multiple-autocomplete')) {
        new SOAutocomplete('#demo-multiple-autocomplete', {
            placeholder: 'Add skills...',
            multiple: true,
            options: [
                { value: 'js', text: 'JavaScript' },
                { value: 'py', text: 'Python' },
                { value: 'php', text: 'PHP' },
                { value: 'java', text: 'Java' },
                { value: 'ruby', text: 'Ruby' },
                { value: 'go', text: 'Go' },
                { value: 'rust', text: 'Rust' },
                { value: 'ts', text: 'TypeScript' }
            ]
        });
    }
});
</script>

<?php require_once '../../includes/footer.php'; ?>
