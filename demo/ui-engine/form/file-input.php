<?php
/**
 * SixOrbit UI Engine - File Input Element Demo
 */

$pageTitle = 'File Input - UI Engine';
$pageDescription = 'Styled file input with browse button and filename display';

require_once '../../includes/config.php';
require_once '../../includes/header.php';
require_once '../../includes/sidebar.php';
require_once '../../includes/navbar.php';
?>

<main class="so-main-content">
    <!-- Page Header -->
    <div class="so-page-header">
        <div class="so-page-header-left">
            <h1 class="so-page-title">File Input</h1>
            <p class="so-page-subtitle">Styled file input element with browse button, filename display, and file type restrictions.</p>
        </div>
    </div>

    <div class="so-page-body">
        <!-- Basic File Input -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Basic File Input</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Upload Document</label>
                    <div class="so-form-control-file">
                        <input type="file" id="demo-file-basic">
                        <span class="so-form-file-button">
                            <span class="material-icons">upload_file</span>
                            Browse
                        </span>
                        <span class="so-form-file-text">No file chosen</span>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('basic-file', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "<?php
use Core\UiEngine\UiEngine;

\$file = UiEngine::file('document')
    ->label('Upload Document')
    ->buttonText('Browse')
    ->icon('upload_file');

echo \$file->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const file = UiEngine.file('document')
    .label('Upload Document')
    .buttonText('Browse')
    .icon('upload_file');

document.getElementById('container').innerHTML = file.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Upload Document</label>
    <div class="so-form-control-file">
        <input type="file" id="document">
        <span class="so-form-file-button">
            <span class="material-icons">upload_file</span>
            Browse
        </span>
        <span class="so-form-file-text">No file chosen</span>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- With File Type Restriction -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">File Type Restrictions</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1">
                    <div class="so-form-group">
                        <label class="so-form-label">Image files only</label>
                        <div class="so-form-control-file">
                            <input type="file" id="demo-file-image" accept="image/*">
                            <span class="so-form-file-button">
                                <span class="material-icons">image</span>
                                Browse
                            </span>
                            <span class="so-form-file-text">No file chosen</span>
                        </div>
                        <span class="so-form-hint">Accepts: JPG, PNG, GIF, etc.</span>
                    </div>
                    <div class="so-form-group">
                        <label class="so-form-label">PDF files only</label>
                        <div class="so-form-control-file">
                            <input type="file" id="demo-file-pdf" accept=".pdf">
                            <span class="so-form-file-button">
                                <span class="material-icons">picture_as_pdf</span>
                                Browse
                            </span>
                            <span class="so-form-file-text">No file chosen</span>
                        </div>
                        <span class="so-form-hint">Accepts: PDF documents</span>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('file-types', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Image files only
UiEngine::file('image')
    ->label('Image files only')
    ->accept('image/*')
    ->icon('image')
    ->help('Accepts: JPG, PNG, GIF, etc.');

// PDF files only
UiEngine::file('document')
    ->label('PDF files only')
    ->accept('.pdf')
    ->icon('picture_as_pdf')
    ->help('Accepts: PDF documents');

// Multiple specific types
UiEngine::file('media')
    ->label('Media files')
    ->accept('.jpg,.png,.mp4,.mp3');"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Image files only
UiEngine.file('image')
    .label('Image files only')
    .accept('image/*')
    .icon('image')
    .help('Accepts: JPG, PNG, GIF, etc.');

// PDF files only
UiEngine.file('document')
    .label('PDF files only')
    .accept('.pdf')
    .icon('picture_as_pdf')
    .help('Accepts: PDF documents');

// Multiple specific types
UiEngine.file('media')
    .label('Media files')
    .accept('.jpg,.png,.mp4,.mp3');"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<!-- Image files only -->
<div class="so-form-group">
    <label class="so-form-label">Image files only</label>
    <div class="so-form-control-file">
        <input type="file" id="image" accept="image/*">
        <span class="so-form-file-button">
            <span class="material-icons">image</span>
            Browse
        </span>
        <span class="so-form-file-text">No file chosen</span>
    </div>
    <span class="so-form-hint">Accepts: JPG, PNG, GIF, etc.</span>
</div>

<!-- PDF files only -->
<div class="so-form-group">
    <label class="so-form-label">PDF files only</label>
    <div class="so-form-control-file">
        <input type="file" id="document" accept=".pdf">
        <span class="so-form-file-button">
            <span class="material-icons">picture_as_pdf</span>
            Browse
        </span>
        <span class="so-form-file-text">No file chosen</span>
    </div>
    <span class="so-form-hint">Accepts: PDF documents</span>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Multiple Files -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Multiple Files</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Upload Images</label>
                    <div class="so-form-control-file">
                        <input type="file" id="demo-file-multi" multiple accept="image/*">
                        <span class="so-form-file-button">
                            <span class="material-icons">photo_library</span>
                            Choose Files
                        </span>
                        <span class="so-form-file-text">No files chosen</span>
                    </div>
                    <span class="so-form-hint">You can select multiple images</span>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('file-multiple', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$file = UiEngine::file('images')
    ->label('Upload Images')
    ->multiple()
    ->accept('image/*')
    ->buttonText('Choose Files')
    ->icon('photo_library')
    ->help('You can select multiple images');

echo \$file->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const file = UiEngine.file('images')
    .label('Upload Images')
    .multiple()
    .accept('image/*')
    .buttonText('Choose Files')
    .icon('photo_library')
    .help('You can select multiple images');

document.getElementById('container').innerHTML = file.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Upload Images</label>
    <div class="so-form-control-file">
        <input type="file" id="images" multiple accept="image/*">
        <span class="so-form-file-button">
            <span class="material-icons">photo_library</span>
            Choose Files
        </span>
        <span class="so-form-file-text">No files chosen</span>
    </div>
    <span class="so-form-hint">You can select multiple images</span>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- File Input Sizes -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">File Input Sizes</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Small</label>
                    <div class="so-form-control-file so-form-control-file-sm">
                        <input type="file">
                        <span class="so-form-file-button">
                            <span class="material-icons">upload</span>
                            Browse
                        </span>
                        <span class="so-form-file-text">No file chosen</span>
                    </div>
                </div>
                <div class="so-form-group">
                    <label class="so-form-label">Default</label>
                    <div class="so-form-control-file">
                        <input type="file">
                        <span class="so-form-file-button">
                            <span class="material-icons">upload</span>
                            Browse
                        </span>
                        <span class="so-form-file-text">No file chosen</span>
                    </div>
                </div>
                <div class="so-form-group">
                    <label class="so-form-label">Large</label>
                    <div class="so-form-control-file so-form-control-file-lg">
                        <input type="file">
                        <span class="so-form-file-button">
                            <span class="material-icons">upload</span>
                            Browse
                        </span>
                        <span class="so-form-file-text">No file chosen</span>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('file-sizes', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Small file input
UiEngine::file('small')
    ->label('Small')
    ->size('sm');

// Default file input
UiEngine::file('default')
    ->label('Default');

// Large file input
UiEngine::file('large')
    ->label('Large')
    ->size('lg');"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Small file input
UiEngine.file('small')
    .label('Small')
    .size('sm');

// Default file input
UiEngine.file('default')
    .label('Default');

// Large file input
UiEngine.file('large')
    .label('Large')
    .size('lg');"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<!-- Small -->
<div class="so-form-control-file so-form-control-file-sm">
    <input type="file">
    <span class="so-form-file-button">
        <span class="material-icons">upload</span>
        Browse
    </span>
    <span class="so-form-file-text">No file chosen</span>
</div>

<!-- Default -->
<div class="so-form-control-file">
    <input type="file">
    <span class="so-form-file-button">
        <span class="material-icons">upload</span>
        Browse
    </span>
    <span class="so-form-file-text">No file chosen</span>
</div>

<!-- Large -->
<div class="so-form-control-file so-form-control-file-lg">
    <input type="file">
    <span class="so-form-file-button">
        <span class="material-icons">upload</span>
        Browse
    </span>
    <span class="so-form-file-text">No file chosen</span>
</div>'
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
                                <td><code>accept()</code></td>
                                <td><code>string $types</code></td>
                                <td>Set accepted file types (e.g., 'image/*', '.pdf')</td>
                            </tr>
                            <tr>
                                <td><code>multiple()</code></td>
                                <td>-</td>
                                <td>Allow multiple file selection</td>
                            </tr>
                            <tr>
                                <td><code>buttonText()</code></td>
                                <td><code>string $text</code></td>
                                <td>Set button text (default: 'Browse')</td>
                            </tr>
                            <tr>
                                <td><code>icon()</code></td>
                                <td><code>string $icon</code></td>
                                <td>Set Material icon name</td>
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
                                <td>Disable the file input</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h4 class="so-mt-4">CSS Classes</h4>
                <div class="so-table-responsive">
                    <table class="so-table so-table-bordered">
                        <thead class="so-table-light">
                            <tr>
                                <th>Class</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>.so-form-control-file</code></td>
                                <td>Main file input container</td>
                            </tr>
                            <tr>
                                <td><code>.so-form-control-file-sm</code></td>
                                <td>Small size variant</td>
                            </tr>
                            <tr>
                                <td><code>.so-form-control-file-lg</code></td>
                                <td>Large size variant</td>
                            </tr>
                            <tr>
                                <td><code>.so-form-file-button</code></td>
                                <td>Browse button with icon</td>
                            </tr>
                            <tr>
                                <td><code>.so-form-file-text</code></td>
                                <td>Filename display area</td>
                            </tr>
                            <tr>
                                <td><code>.has-file</code></td>
                                <td>Added to text when file is selected</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once '../../includes/footer.php'; ?>

<script>
// Update filename display when file is selected
document.querySelectorAll('.so-form-control-file input[type="file"]').forEach(input => {
    input.addEventListener('change', function() {
        const fileText = this.closest('.so-form-control-file').querySelector('.so-form-file-text');
        if (this.files.length > 0) {
            const fileNames = Array.from(this.files).map(f => f.name).join(', ');
            fileText.textContent = fileNames;
            fileText.classList.add('has-file');
        } else {
            fileText.textContent = 'No file chosen';
            fileText.classList.remove('has-file');
        }
    });
});
</script>
