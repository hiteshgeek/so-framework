<?php
/**
 * SixOrbit UI Engine - Checkbox Element Demo
 */

$pageTitle = 'Checkbox - UI Engine';
$pageDescription = 'Checkbox input for boolean and multiple selections';

require_once '../../includes/config.php';
require_once '../../includes/header.php';
require_once '../../includes/sidebar.php';
require_once '../../includes/navbar.php';
?>

<main class="so-main-content">
    <!-- Page Header -->
    <div class="so-page-header">
        <div class="so-page-header-left">
            <h1 class="so-page-title">Checkbox</h1>
            <p class="so-page-subtitle">Checkbox element for boolean values and multiple selections with various styling options.</p>
        </div>
    </div>

    <div class="so-page-body">
        <!-- Basic Checkbox -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Basic Checkbox</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-demo-preview so-mb-4 so-p-4 so-bg-light so-rounded">
                    <label class="so-checkbox">
                        <input type="checkbox" name="terms">
                        <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                        <span class="so-checkbox-label">I agree to the terms and conditions</span>
                    </label>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('basic-checkbox', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "<?php
use Core\UiEngine\UiEngine;

\$checkbox = UiEngine::checkbox('terms')
    ->label('I agree to the terms and conditions');

echo \$checkbox->render();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const checkbox = UiEngine.checkbox('terms')
    .label('I agree to the terms and conditions');

document.getElementById('container').innerHTML = checkbox.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<label class="so-checkbox">
    <input type="checkbox" name="terms">
    <span class="so-checkbox-box"><span class="material-icons">check</span></span>
    <span class="so-checkbox-label">I agree to the terms and conditions</span>
</label>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Checkbox Group -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Checkbox Group</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-demo-preview so-mb-4 so-p-4 so-bg-light so-rounded">
                    <label class="so-form-label so-mb-2">Select your interests</label>
                    <div class="so-checkbox-group so-checkbox-group-vertical">
                        <label class="so-checkbox">
                            <input type="checkbox" name="interests[]" value="tech">
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Technology</span>
                        </label>
                        <label class="so-checkbox">
                            <input type="checkbox" name="interests[]" value="sports">
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Sports</span>
                        </label>
                        <label class="so-checkbox">
                            <input type="checkbox" name="interests[]" value="music">
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Music</span>
                        </label>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('checkbox-group', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$checkboxGroup = UiEngine::checkboxGroup('interests')
    ->label('Select your interests')
    ->options([
        'tech' => 'Technology',
        'sports' => 'Sports',
        'music' => 'Music',
    ]);

echo \$checkboxGroup->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const checkboxGroup = UiEngine.checkboxGroup('interests')
    .label('Select your interests')
    .options({
        tech: 'Technology',
        sports: 'Sports',
        music: 'Music',
    });

document.getElementById('container').innerHTML = checkboxGroup.toHtml();"
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Inline Checkboxes -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Inline Checkboxes</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-demo-preview so-mb-4 so-p-4 so-bg-light so-rounded">
                    <label class="so-form-label so-mb-2">Size options</label>
                    <div class="so-checkbox-group so-checkbox-group-inline">
                        <label class="so-checkbox">
                            <input type="checkbox" name="sizes[]" value="sm">
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Small</span>
                        </label>
                        <label class="so-checkbox">
                            <input type="checkbox" name="sizes[]" value="md">
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Medium</span>
                        </label>
                        <label class="so-checkbox">
                            <input type="checkbox" name="sizes[]" value="lg">
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Large</span>
                        </label>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('checkbox-inline', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$checkboxGroup = UiEngine::checkboxGroup('sizes')
    ->label('Size options')
    ->inline()
    ->options([
        'sm' => 'Small',
        'md' => 'Medium',
        'lg' => 'Large',
    ]);

echo \$checkboxGroup->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const checkboxGroup = UiEngine.checkboxGroup('sizes')
    .label('Size options')
    .inline()
    .options({
        sm: 'Small',
        md: 'Medium',
        lg: 'Large',
    });

document.getElementById('container').innerHTML = checkboxGroup.toHtml();"
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Checked & Disabled States -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">States</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-demo-preview so-mb-4 so-p-4 so-bg-light so-rounded">
                    <div class="so-checkbox-group so-checkbox-group-vertical">
                        <label class="so-checkbox">
                            <input type="checkbox" name="checked" checked>
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Checked checkbox</span>
                        </label>
                        <label class="so-checkbox disabled">
                            <input type="checkbox" name="disabled" disabled>
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Disabled checkbox</span>
                        </label>
                        <label class="so-checkbox disabled">
                            <input type="checkbox" name="both" checked disabled>
                            <span class="so-checkbox-box"><span class="material-icons">check</span></span>
                            <span class="so-checkbox-label">Checked and disabled</span>
                        </label>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('checkbox-states', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Checked checkbox
UiEngine::checkbox('checked')->label('Checked checkbox')->checked();

// Disabled checkbox
UiEngine::checkbox('disabled')->label('Disabled checkbox')->disabled();

// Checked and disabled
UiEngine::checkbox('both')->label('Checked and disabled')->checked()->disabled();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Checked checkbox
UiEngine.checkbox('checked').label('Checked checkbox').checked();

// Disabled checkbox
UiEngine.checkbox('disabled').label('Disabled checkbox').disabled();

// Checked and disabled
UiEngine.checkbox('both').label('Checked and disabled').checked().disabled();"
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
                                <td><code>label()</code></td>
                                <td><code>string $label</code></td>
                                <td>Set the checkbox label</td>
                            </tr>
                            <tr>
                                <td><code>checked()</code></td>
                                <td><code>bool $checked = true</code></td>
                                <td>Set checked state</td>
                            </tr>
                            <tr>
                                <td><code>value()</code></td>
                                <td><code>mixed $value</code></td>
                                <td>Set the checkbox value</td>
                            </tr>
                            <tr>
                                <td><code>options()</code></td>
                                <td><code>array $options</code></td>
                                <td>Set options for checkbox group</td>
                            </tr>
                            <tr>
                                <td><code>inline()</code></td>
                                <td>-</td>
                                <td>Display checkboxes inline</td>
                            </tr>
                            <tr>
                                <td><code>required()</code></td>
                                <td>-</td>
                                <td>Mark as required</td>
                            </tr>
                            <tr>
                                <td><code>disabled()</code></td>
                                <td>-</td>
                                <td>Disable the checkbox</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once '../../includes/footer.php'; ?>
