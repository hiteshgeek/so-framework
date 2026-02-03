<?php
/**
 * SixOrbit UI Engine - Select Element Demo
 */

$pageTitle = 'Select - UI Engine';
$pageDescription = 'Dropdown select with single and multiple selection support';

require_once '../../includes/config.php';
require_once '../../includes/header.php';
require_once '../../includes/sidebar.php';
require_once '../../includes/navbar.php';
?>

<main class="so-main-content">
    <!-- Page Header -->
    <div class="so-page-header">
        <div class="so-page-header-left">
            <h1 class="so-page-title">Select</h1>
            <p class="so-page-subtitle">Dropdown select element with single and multiple selection, option groups, and search functionality.</p>
        </div>
    </div>

    <div class="so-page-body">
        <!-- Basic Select -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Basic Select</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label" for="demo-country">Country</label>
                    <select class="so-form-control" id="demo-country" name="country">
                        <option value="">Select a country</option>
                        <option value="us">United States</option>
                        <option value="uk">United Kingdom</option>
                        <option value="ca">Canada</option>
                        <option value="au">Australia</option>
                    </select>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('basic-select', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "<?php
use Core\UiEngine\UiEngine;

\$select = UiEngine::select('country')
    ->label('Country')
    ->placeholder('Select a country')
    ->options([
        'us' => 'United States',
        'uk' => 'United Kingdom',
        'ca' => 'Canada',
        'au' => 'Australia',
    ]);

echo \$select->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const select = UiEngine.select('country')
    .label('Country')
    .placeholder('Select a country')
    .options({
        us: 'United States',
        uk: 'United Kingdom',
        ca: 'Canada',
        au: 'Australia',
    });

document.getElementById('container').innerHTML = select.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label" for="country">Country</label>
    <select class="so-form-control" id="country" name="country">
        <option value="">Select a country</option>
        <option value="us">United States</option>
        <option value="uk">United Kingdom</option>
        <option value="ca">Canada</option>
        <option value="au">Australia</option>
    </select>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- With Option Groups -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Option Groups</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label" for="demo-car">Car Model</label>
                    <select class="so-form-control" id="demo-car" name="car">
                        <option value="">Select a car</option>
                        <optgroup label="German">
                            <option value="bmw">BMW</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </optgroup>
                        <optgroup label="Japanese">
                            <option value="toyota">Toyota</option>
                            <option value="honda">Honda</option>
                            <option value="nissan">Nissan</option>
                        </optgroup>
                    </select>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('select-groups', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$select = UiEngine::select('car')
    ->label('Car Model')
    ->placeholder('Select a car')
    ->optionGroups([
        'German' => [
            'bmw' => 'BMW',
            'mercedes' => 'Mercedes',
            'audi' => 'Audi',
        ],
        'Japanese' => [
            'toyota' => 'Toyota',
            'honda' => 'Honda',
            'nissan' => 'Nissan',
        ],
    ]);

echo \$select->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const select = UiEngine.select('car')
    .label('Car Model')
    .placeholder('Select a car')
    .optionGroups({
        German: {
            bmw: 'BMW',
            mercedes: 'Mercedes',
            audi: 'Audi',
        },
        Japanese: {
            toyota: 'Toyota',
            honda: 'Honda',
            nissan: 'Nissan',
        },
    });

document.getElementById('container').innerHTML = select.toHtml();"
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Multiple Select -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Multiple Selection</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label" for="demo-skills">Skills</label>
                    <select class="so-form-control" id="demo-skills" name="skills[]" multiple>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="js">JavaScript</option>
                        <option value="php">PHP</option>
                        <option value="python">Python</option>
                    </select>
                    <div class="so-form-hint">Hold Ctrl/Cmd to select multiple</div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('select-multiple', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$select = UiEngine::select('skills')
    ->label('Skills')
    ->multiple()
    ->options([
        'html' => 'HTML',
        'css' => 'CSS',
        'js' => 'JavaScript',
        'php' => 'PHP',
        'python' => 'Python',
    ])
    ->help('Hold Ctrl/Cmd to select multiple');

echo \$select->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const select = UiEngine.select('skills')
    .label('Skills')
    .multiple()
    .options({
        html: 'HTML',
        css: 'CSS',
        js: 'JavaScript',
        php: 'PHP',
        python: 'Python',
    })
    .help('Hold Ctrl/Cmd to select multiple');

document.getElementById('container').innerHTML = select.toHtml();"
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Enhanced Select (JS-powered) -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Enhanced Select</h3>
            </div>
            <div class="so-card-body">
                <p class="so-text-secondary so-mb-4">Add <code>data-so-select</code> attribute to enable enhanced select with search, custom styling, and advanced features.</p>
                <!-- Live Demo -->
                <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1">
                    <div class="so-form-group">
                        <label class="so-form-label">Basic Enhanced</label>
                        <select class="so-form-control" data-so-select>
                            <option value="">Select a country</option>
                            <option value="us">United States</option>
                            <option value="uk">United Kingdom</option>
                            <option value="ca">Canada</option>
                            <option value="au">Australia</option>
                        </select>
                    </div>
                    <div class="so-form-group">
                        <label class="so-form-label">Searchable</label>
                        <select class="so-form-control" data-so-select data-so-searchable="true">
                            <option value="">Search countries...</option>
                            <option value="us">United States</option>
                            <option value="uk">United Kingdom</option>
                            <option value="ca">Canada</option>
                            <option value="au">Australia</option>
                            <option value="de">Germany</option>
                            <option value="fr">France</option>
                        </select>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('select-enhanced', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Enhanced select with JS features
\$select = UiEngine::select('country')
    ->label('Country')
    ->enhanced()  // Adds data-so-select attribute
    ->placeholder('Select a country')
    ->options([...]);

// Searchable enhanced select
\$select = UiEngine::select('country')
    ->enhanced()
    ->searchable()  // Adds data-so-searchable=\"true\"
    ->placeholder('Search countries...')
    ->options([...]);"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Enhanced select with JS features
const select = UiEngine.select('country')
    .label('Country')
    .enhanced()  // Adds data-so-select attribute
    .placeholder('Select a country')
    .options({...});

// Searchable enhanced select
const select = UiEngine.select('country')
    .enhanced()
    .searchable()  // Adds data-so-searchable=\"true\"
    .placeholder('Search countries...')
    .options({...});"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<!-- Basic enhanced select -->
<select class="so-form-control" data-so-select>
    <option value="">Select a country</option>
    <option value="us">United States</option>
    ...
</select>

<!-- Searchable enhanced select -->
<select class="so-form-control" data-so-select data-so-searchable="true">
    <option value="">Search countries...</option>
    <option value="us">United States</option>
    ...
</select>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Select Sizes -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Select Sizes</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-grid so-grid-cols-3 so-grid-cols-sm-1">
                    <div class="so-form-group">
                        <label class="so-form-label">Small</label>
                        <select class="so-form-control so-form-control-sm">
                            <option>Small select</option>
                        </select>
                    </div>
                    <div class="so-form-group">
                        <label class="so-form-label">Default</label>
                        <select class="so-form-control">
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="so-form-group">
                        <label class="so-form-label">Large</label>
                        <select class="so-form-control so-form-control-lg">
                            <option>Large select</option>
                        </select>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('select-sizes', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Small select
UiEngine::select('small')->size('sm')->options(['opt' => 'Small select']);

// Default select
UiEngine::select('default')->options(['opt' => 'Default select']);

// Large select
UiEngine::select('large')->size('lg')->options(['opt' => 'Large select']);"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Small select
UiEngine.select('small').size('sm').options({opt: 'Small select'});

// Default select
UiEngine.select('default').options({opt: 'Default select'});

// Large select
UiEngine.select('large').size('lg').options({opt: 'Large select'});"
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
                                <th>Method</th>
                                <th>Parameters</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>options()</code></td>
                                <td><code>array $options</code></td>
                                <td>Set select options as key-value pairs</td>
                            </tr>
                            <tr>
                                <td><code>optionGroups()</code></td>
                                <td><code>array $groups</code></td>
                                <td>Set options with optgroup labels</td>
                            </tr>
                            <tr>
                                <td><code>multiple()</code></td>
                                <td>-</td>
                                <td>Enable multiple selection</td>
                            </tr>
                            <tr>
                                <td><code>searchable()</code></td>
                                <td>-</td>
                                <td>Enable search/filter functionality</td>
                            </tr>
                            <tr>
                                <td><code>enhanced()</code></td>
                                <td>-</td>
                                <td>Enable JS-powered enhanced select (adds data-so-select)</td>
                            </tr>
                            <tr>
                                <td><code>placeholder()</code></td>
                                <td><code>string $text</code></td>
                                <td>Set placeholder option text</td>
                            </tr>
                            <tr>
                                <td><code>value()</code></td>
                                <td><code>mixed $value</code></td>
                                <td>Set selected value(s)</td>
                            </tr>
                            <tr>
                                <td><code>size()</code></td>
                                <td><code>string $size</code></td>
                                <td>Set size: 'sm' or 'lg'</td>
                            </tr>
                            <tr>
                                <td><code>required()</code></td>
                                <td>-</td>
                                <td>Mark as required</td>
                            </tr>
                            <tr>
                                <td><code>disabled()</code></td>
                                <td>-</td>
                                <td>Disable the select</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once '../../includes/footer.php'; ?>
