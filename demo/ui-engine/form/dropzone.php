<?php
/**
 * SixOrbit UI Engine - Dropzone Element Demo
 */

$pageTitle = 'Dropzone - UI Engine';
$pageDescription = 'Drag-and-drop file upload area with previews';

require_once '../../includes/config.php';
require_once '../../includes/header.php';
require_once '../../includes/sidebar.php';
require_once '../../includes/navbar.php';
?>

<main class="so-main-content">
    <!-- Page Header -->
    <div class="so-page-header">
        <div class="so-page-header-left">
            <h1 class="so-page-title">Dropzone</h1>
            <p class="so-page-subtitle">Drag-and-drop file upload area with file previews, progress indicators, and validation.</p>
        </div>
    </div>

    <div class="so-page-body">
        <!-- Basic Dropzone -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Basic Dropzone</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Upload Files</label>
                    <div class="so-form-file-dropzone" id="demo-dropzone-basic">
                        <input type="file" multiple>
                        <div class="so-form-file-dropzone-icon">
                            <span class="material-icons">cloud_upload</span>
                        </div>
                        <div class="so-form-file-dropzone-text">
                            Drag & drop files here, or <span>click to browse</span>
                        </div>
                        <div class="so-form-file-dropzone-hint">
                            Supports all file types
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('basic-dropzone', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "<?php
use Core\UiEngine\UiEngine;

\$dropzone = UiEngine::dropzone('files')
    ->label('Upload Files')
    ->message('Drag & drop files here')
    ->subMessage('or click to browse');

echo \$dropzone->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const dropzone = UiEngine.dropzone('files')
    .label('Upload Files')
    .message('Drag & drop files here')
    .subMessage('or click to browse');

document.getElementById('container').innerHTML = dropzone.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Upload Files</label>
    <div class="so-form-file-dropzone">
        <input type="file" multiple>
        <div class="so-form-file-dropzone-icon">
            <span class="material-icons">cloud_upload</span>
        </div>
        <div class="so-form-file-dropzone-text">
            Drag & drop files here, or <span>click to browse</span>
        </div>
        <div class="so-form-file-dropzone-hint">
            Supports all file types
        </div>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- With File Type Restrictions -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">File Type Restrictions</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Upload Images</label>
                    <div class="so-form-file-dropzone" id="demo-dropzone-images">
                        <input type="file" multiple accept="image/jpeg,image/png,image/gif">
                        <div class="so-form-file-dropzone-icon">
                            <span class="material-icons">add_photo_alternate</span>
                        </div>
                        <div class="so-form-file-dropzone-text">
                            <span>Click to upload</span> or drag and drop
                        </div>
                        <div class="so-form-file-dropzone-hint">
                            Accepts: JPG, PNG, GIF (max 5MB)
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('dropzone-types', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$dropzone = UiEngine::dropzone('images')
    ->label('Upload Images')
    ->accept(['image/jpeg', 'image/png', 'image/gif'])
    ->maxSize(5 * 1024 * 1024)  // 5MB
    ->message('Click to upload')
    ->subMessage('or drag and drop')
    ->hint('Accepts: JPG, PNG, GIF (max 5MB)')
    ->icon('add_photo_alternate');

echo \$dropzone->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const dropzone = UiEngine.dropzone('images')
    .label('Upload Images')
    .accept(['image/jpeg', 'image/png', 'image/gif'])
    .maxSize(5 * 1024 * 1024)
    .message('Click to upload')
    .subMessage('or drag and drop')
    .hint('Accepts: JPG, PNG, GIF (max 5MB)')
    .icon('add_photo_alternate');

document.getElementById('container').innerHTML = dropzone.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Upload Images</label>
    <div class="so-form-file-dropzone">
        <input type="file" multiple accept="image/jpeg,image/png,image/gif">
        <div class="so-form-file-dropzone-icon">
            <span class="material-icons">add_photo_alternate</span>
        </div>
        <div class="so-form-file-dropzone-text">
            <span>Click to upload</span> or drag and drop
        </div>
        <div class="so-form-file-dropzone-hint">
            Accepts: JPG, PNG, GIF (max 5MB)
        </div>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Document Upload -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Document Upload</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Upload Documents</label>
                    <div class="so-form-file-dropzone" id="demo-dropzone-docs">
                        <input type="file" multiple accept=".pdf,.doc,.docx,.xls,.xlsx">
                        <div class="so-form-file-dropzone-icon">
                            <span class="material-icons">description</span>
                        </div>
                        <div class="so-form-file-dropzone-text">
                            Drag & drop files here, or <span>click to browse</span>
                        </div>
                        <div class="so-form-file-dropzone-hint">
                            Supports: PDF, DOC, DOCX, XLS, XLSX (max 10MB)
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('dropzone-docs', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$dropzone = UiEngine::dropzone('documents')
    ->label('Upload Documents')
    ->accept(['.pdf', '.doc', '.docx', '.xls', '.xlsx'])
    ->maxSize(10 * 1024 * 1024)  // 10MB
    ->message('Drag & drop files here')
    ->subMessage('or click to browse')
    ->hint('Supports: PDF, DOC, DOCX, XLS, XLSX (max 10MB)')
    ->icon('description');

echo \$dropzone->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const dropzone = UiEngine.dropzone('documents')
    .label('Upload Documents')
    .accept(['.pdf', '.doc', '.docx', '.xls', '.xlsx'])
    .maxSize(10 * 1024 * 1024)
    .message('Drag & drop files here')
    .subMessage('or click to browse')
    .hint('Supports: PDF, DOC, DOCX, XLS, XLSX (max 10MB)')
    .icon('description');

document.getElementById('container').innerHTML = dropzone.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Upload Documents</label>
    <div class="so-form-file-dropzone">
        <input type="file" multiple accept=".pdf,.doc,.docx,.xls,.xlsx">
        <div class="so-form-file-dropzone-icon">
            <span class="material-icons">description</span>
        </div>
        <div class="so-form-file-dropzone-text">
            Drag & drop files here, or <span>click to browse</span>
        </div>
        <div class="so-form-file-dropzone-hint">
            Supports: PDF, DOC, DOCX, XLS, XLSX (max 10MB)
        </div>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Compact Profile Photo -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Compact Profile Photo Upload</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Profile Photo</label>
                    <div class="so-form-file-dropzone" id="demo-dropzone-avatar" style="padding: 2rem;">
                        <input type="file" accept="image/*">
                        <div class="so-form-file-dropzone-icon">
                            <span class="material-icons">account_circle</span>
                        </div>
                        <div class="so-form-file-dropzone-text">
                            <span>Click to upload</span> or drag and drop
                        </div>
                        <div class="so-form-file-dropzone-hint">
                            PNG, JPG or GIF (max 2MB)
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('dropzone-avatar', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$dropzone = UiEngine::dropzone('avatar')
    ->label('Profile Photo')
    ->accept('image/*')
    ->maxSize(2 * 1024 * 1024)  // 2MB
    ->compact()
    ->icon('account_circle')
    ->hint('PNG, JPG or GIF (max 2MB)');

echo \$dropzone->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const dropzone = UiEngine.dropzone('avatar')
    .label('Profile Photo')
    .accept('image/*')
    .maxSize(2 * 1024 * 1024)
    .compact()
    .icon('account_circle')
    .hint('PNG, JPG or GIF (max 2MB)');

document.getElementById('container').innerHTML = dropzone.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Profile Photo</label>
    <div class="so-form-file-dropzone" style="padding: 2rem;">
        <input type="file" accept="image/*">
        <div class="so-form-file-dropzone-icon">
            <span class="material-icons">account_circle</span>
        </div>
        <div class="so-form-file-dropzone-text">
            <span>Click to upload</span> or drag and drop
        </div>
        <div class="so-form-file-dropzone-hint">
            PNG, JPG or GIF (max 2MB)
        </div>
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- With Event Handlers -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">With Event Handlers</h3>
            </div>
            <div class="so-card-body">
                <!-- Code Tabs -->
                <?= so_code_tabs('dropzone-events', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$dropzone = UiEngine::dropzone('upload')
    ->label('Upload Files')
    ->multiple()
    ->accept('image/*')
    ->maxSize(5 * 1024 * 1024);

echo \$dropzone->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Initialize dropzone with event handlers
const dropzoneEl = document.querySelector('.so-form-file-dropzone');
const input = dropzoneEl.querySelector('input[type=\"file\"]');

// Prevent default drag behaviors
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropzoneEl.addEventListener(eventName, (e) => {
        e.preventDefault();
        e.stopPropagation();
    }, false);
});

// Highlight dropzone when dragging over
['dragenter', 'dragover'].forEach(eventName => {
    dropzoneEl.addEventListener(eventName, () => {
        dropzoneEl.classList.add('so-dragover');
    }, false);
});

['dragleave', 'drop'].forEach(eventName => {
    dropzoneEl.addEventListener(eventName, () => {
        dropzoneEl.classList.remove('so-dragover');
    }, false);
});

// Handle dropped files
dropzoneEl.addEventListener('drop', (e) => {
    const files = e.dataTransfer.files;
    input.files = files;
    handleFiles(files);
}, false);

// Handle file input change
input.addEventListener('change', function() {
    handleFiles(this.files);
});

function handleFiles(files) {
    if (files.length > 0) {
        const fileNames = Array.from(files).map(f => f.name).join(', ');
        const textEl = dropzoneEl.querySelector('.so-form-file-dropzone-text');
        textEl.innerHTML = '<strong>' + files.length + ' file(s) selected:</strong> ' + fileNames;
    }
}"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Upload Files</label>
    <div class="so-form-file-dropzone">
        <input type="file" multiple accept="image/*">
        <div class="so-form-file-dropzone-icon">
            <span class="material-icons">cloud_upload</span>
        </div>
        <div class="so-form-file-dropzone-text">
            Drag & drop files here, or <span>click to browse</span>
        </div>
        <div class="so-form-file-dropzone-hint">
            Accepts images (max 5MB)
        </div>
    </div>
</div>

<!-- Drag-over state adds .so-dragover class -->
<div class="so-form-file-dropzone so-dragover">
    <!-- ... -->
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
                                <td><code>string|array $types</code></td>
                                <td>Set accepted file types (MIME types or extensions)</td>
                            </tr>
                            <tr>
                                <td><code>maxSize()</code></td>
                                <td><code>int $bytes</code></td>
                                <td>Maximum file size per file in bytes</td>
                            </tr>
                            <tr>
                                <td><code>multiple()</code></td>
                                <td>-</td>
                                <td>Allow multiple file selection</td>
                            </tr>
                            <tr>
                                <td><code>message()</code></td>
                                <td><code>string $text</code></td>
                                <td>Set main message text</td>
                            </tr>
                            <tr>
                                <td><code>subMessage()</code></td>
                                <td><code>string $text</code></td>
                                <td>Set secondary message text</td>
                            </tr>
                            <tr>
                                <td><code>hint()</code></td>
                                <td><code>string $text</code></td>
                                <td>Set hint text (file restrictions info)</td>
                            </tr>
                            <tr>
                                <td><code>icon()</code></td>
                                <td><code>string $icon</code></td>
                                <td>Set Material icon name</td>
                            </tr>
                            <tr>
                                <td><code>compact()</code></td>
                                <td>-</td>
                                <td>Use compact variant with less padding</td>
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
                                <td><code>.so-form-file-dropzone</code></td>
                                <td>Main dropzone container</td>
                            </tr>
                            <tr>
                                <td><code>.so-form-file-dropzone-icon</code></td>
                                <td>Icon wrapper</td>
                            </tr>
                            <tr>
                                <td><code>.so-form-file-dropzone-text</code></td>
                                <td>Main message text</td>
                            </tr>
                            <tr>
                                <td><code>.so-form-file-dropzone-hint</code></td>
                                <td>Hint text (accepted formats, size limits)</td>
                            </tr>
                            <tr>
                                <td><code>.so-dragover</code></td>
                                <td>Applied when files are dragged over (highlight state)</td>
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
// Initialize dropzone functionality for all demo dropzones
document.querySelectorAll('.so-form-file-dropzone').forEach(dropzone => {
    const input = dropzone.querySelector('input[type="file"]');

    // Prevent default drag behaviors
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropzone.addEventListener(eventName, (e) => {
            e.preventDefault();
            e.stopPropagation();
        }, false);
    });

    // Highlight dropzone when dragging over
    ['dragenter', 'dragover'].forEach(eventName => {
        dropzone.addEventListener(eventName, () => {
            dropzone.classList.add('so-dragover');
        }, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropzone.addEventListener(eventName, () => {
            dropzone.classList.remove('so-dragover');
        }, false);
    });

    // Handle dropped files
    dropzone.addEventListener('drop', (e) => {
        const files = e.dataTransfer.files;
        input.files = files;
        handleDropzoneFiles(files, dropzone);
    }, false);

    // Handle file input change
    input.addEventListener('change', function() {
        handleDropzoneFiles(this.files, dropzone);
    });
});

function handleDropzoneFiles(files, dropzone) {
    if (files.length > 0) {
        const fileNames = Array.from(files).map(f => f.name).join(', ');
        const textEl = dropzone.querySelector('.so-form-file-dropzone-text');
        textEl.innerHTML = '<strong>' + files.length + ' file(s) selected:</strong> ' + fileNames;
    }
}
</script>
