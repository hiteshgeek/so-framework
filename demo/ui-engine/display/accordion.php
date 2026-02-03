<?php
/**
 * SixOrbit UI Engine - Accordion Element Demo
 */

$pageTitle = 'Accordion - UI Engine';
$pageDescription = 'Collapsible content panels for organizing information';

require_once '../../includes/config.php';
require_once '../../includes/header.php';
require_once '../../includes/sidebar.php';
require_once '../../includes/navbar.php';
?>

<main class="so-main-content">
    <!-- Page Header -->
    <div class="so-page-header">
        <div class="so-page-header-left">
            <h1 class="so-page-title">Accordion</h1>
            <p class="so-page-subtitle">Collapsible content panels for organizing and presenting information in a compact format.</p>
        </div>
    </div>

    <div class="so-page-body">
        <!-- Basic Accordion -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Basic Accordion</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-accordion so-mb-4" id="demo-accordion" data-so-accordion>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button" type="button" data-so-toggle="collapse" data-so-target="#demo-one">
                                What is UiEngine?
                            </button>
                        </h2>
                        <div id="demo-one" class="so-accordion-collapse so-show" data-so-parent="#demo-accordion">
                            <div class="so-accordion-body">
                                UiEngine is a programmatic UI generation system that provides symmetric PHP and JavaScript APIs for building user interfaces.
                            </div>
                        </div>
                    </div>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button so-collapsed" type="button" data-so-toggle="collapse" data-so-target="#demo-two">
                                How does it work?
                            </button>
                        </h2>
                        <div id="demo-two" class="so-accordion-collapse" data-so-parent="#demo-accordion">
                            <div class="so-accordion-body">
                                You create elements using a fluent API, configure them with methods, and render them to HTML. The same code patterns work in both PHP and JavaScript.
                            </div>
                        </div>
                    </div>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button so-collapsed" type="button" data-so-toggle="collapse" data-so-target="#demo-three">
                                Why use it?
                            </button>
                        </h2>
                        <div id="demo-three" class="so-accordion-collapse" data-so-parent="#demo-accordion">
                            <div class="so-accordion-body">
                                UiEngine provides consistency between server and client rendering, reduces boilerplate code, and offers built-in validation integration.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('basic-accordion', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "<?php
use Core\UiEngine\UiEngine;

\$accordion = UiEngine::accordion('faq')
    ->item('What is UiEngine?', 'UiEngine is a programmatic UI generation system...', true)
    ->item('How does it work?', 'You create elements using a fluent API...')
    ->item('Why use it?', 'UiEngine provides consistency between server and client...');

echo \$accordion->render();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const accordion = UiEngine.accordion('faq')
    .item('What is UiEngine?', 'UiEngine is a programmatic UI generation system...', true)
    .item('How does it work?', 'You create elements using a fluent API...')
    .item('Why use it?', 'UiEngine provides consistency between server and client...');

document.getElementById('container').innerHTML = accordion.toHtml();"
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Always Open -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Always Open (Multiple Expanded)</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-accordion so-mb-4" id="demo-always-open" data-so-accordion>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button" type="button" data-so-toggle="collapse" data-so-target="#open-one">
                                Feature 1
                            </button>
                        </h2>
                        <div id="open-one" class="so-accordion-collapse so-show">
                            <div class="so-accordion-body">
                                Description of feature 1. Multiple panels can be open at the same time.
                            </div>
                        </div>
                    </div>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button" type="button" data-so-toggle="collapse" data-so-target="#open-two">
                                Feature 2
                            </button>
                        </h2>
                        <div id="open-two" class="so-accordion-collapse so-show">
                            <div class="so-accordion-body">
                                Description of feature 2. Notice both panels can stay open.
                            </div>
                        </div>
                    </div>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button so-collapsed" type="button" data-so-toggle="collapse" data-so-target="#open-three">
                                Feature 3
                            </button>
                        </h2>
                        <div id="open-three" class="so-accordion-collapse">
                            <div class="so-accordion-body">
                                Description of feature 3.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('accordion-open', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$accordion = UiEngine::accordion('features')
    ->alwaysOpen()  // Allow multiple panels to be open
    ->item('Feature 1', 'Description of feature 1', true)
    ->item('Feature 2', 'Description of feature 2', true)
    ->item('Feature 3', 'Description of feature 3');

echo \$accordion->render();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const accordion = UiEngine.accordion('features')
    .alwaysOpen()
    .item('Feature 1', 'Description of feature 1', true)
    .item('Feature 2', 'Description of feature 2', true)
    .item('Feature 3', 'Description of feature 3');

document.getElementById('container').innerHTML = accordion.toHtml();"
                    ],
                ]) ?>
            </div>
        </div>

        <!-- With Icons -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">With Icons</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-accordion so-mb-4" id="demo-icons" data-so-accordion>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button" type="button" data-so-toggle="collapse" data-so-target="#icon-one">
                                <span class="material-icons so-me-2">person</span> Account Settings
                            </button>
                        </h2>
                        <div id="icon-one" class="so-accordion-collapse so-show" data-so-parent="#demo-icons">
                            <div class="so-accordion-body">
                                Manage your account preferences, profile information, and security settings.
                            </div>
                        </div>
                    </div>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button so-collapsed" type="button" data-so-toggle="collapse" data-so-target="#icon-two">
                                <span class="material-icons so-me-2">lock</span> Privacy Settings
                            </button>
                        </h2>
                        <div id="icon-two" class="so-accordion-collapse" data-so-parent="#demo-icons">
                            <div class="so-accordion-body">
                                Control your privacy preferences and data sharing options.
                            </div>
                        </div>
                    </div>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button so-collapsed" type="button" data-so-toggle="collapse" data-so-target="#icon-three">
                                <span class="material-icons so-me-2">notifications</span> Notifications
                            </button>
                        </h2>
                        <div id="icon-three" class="so-accordion-collapse" data-so-parent="#demo-icons">
                            <div class="so-accordion-body">
                                Configure how and when you receive notifications.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('accordion-icons', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$accordion = UiEngine::accordion('settings')
    ->item('Account Settings', 'Manage your account...', false, 'person')
    ->item('Privacy Settings', 'Control your privacy...', false, 'lock')
    ->item('Notifications', 'Configure notifications...', false, 'notifications');

echo \$accordion->render();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const accordion = UiEngine.accordion('settings')
    .item('Account Settings', 'Manage your account...', false, 'person')
    .item('Privacy Settings', 'Control your privacy...', false, 'lock')
    .item('Notifications', 'Configure notifications...', false, 'notifications');

document.getElementById('container').innerHTML = accordion.toHtml();"
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Flush Style -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Flush Style (Borderless)</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-accordion so-accordion-flush so-mb-4" id="demo-flush" data-so-accordion>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button" type="button" data-so-toggle="collapse" data-so-target="#flush-one">
                                Section 1
                            </button>
                        </h2>
                        <div id="flush-one" class="so-accordion-collapse so-show" data-so-parent="#demo-flush">
                            <div class="so-accordion-body">
                                Content for section 1. The flush style removes borders and rounded corners for a cleaner look.
                            </div>
                        </div>
                    </div>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button so-collapsed" type="button" data-so-toggle="collapse" data-so-target="#flush-two">
                                Section 2
                            </button>
                        </h2>
                        <div id="flush-two" class="so-accordion-collapse" data-so-parent="#demo-flush">
                            <div class="so-accordion-body">
                                Content for section 2.
                            </div>
                        </div>
                    </div>
                    <div class="so-accordion-item">
                        <h2 class="so-accordion-header">
                            <button class="so-accordion-button so-collapsed" type="button" data-so-toggle="collapse" data-so-target="#flush-three">
                                Section 3
                            </button>
                        </h2>
                        <div id="flush-three" class="so-accordion-collapse" data-so-parent="#demo-flush">
                            <div class="so-accordion-body">
                                Content for section 3.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('accordion-flush', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$accordion = UiEngine::accordion('flush-demo')
    ->flush()  // Remove borders and rounded corners
    ->item('Section 1', 'Content for section 1')
    ->item('Section 2', 'Content for section 2')
    ->item('Section 3', 'Content for section 3');

echo \$accordion->render();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const accordion = UiEngine.accordion('flush-demo')
    .flush()
    .item('Section 1', 'Content for section 1')
    .item('Section 2', 'Content for section 2')
    .item('Section 3', 'Content for section 3');

document.getElementById('container').innerHTML = accordion.toHtml();"
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
                                <td><code>item()</code></td>
                                <td><code>string $title, string $content, bool $expanded, string $icon</code></td>
                                <td>Add an accordion item</td>
                            </tr>
                            <tr>
                                <td><code>items()</code></td>
                                <td><code>array $items</code></td>
                                <td>Add multiple items at once</td>
                            </tr>
                            <tr>
                                <td><code>alwaysOpen()</code></td>
                                <td>-</td>
                                <td>Allow multiple panels to be open</td>
                            </tr>
                            <tr>
                                <td><code>flush()</code></td>
                                <td>-</td>
                                <td>Remove borders and rounded corners</td>
                            </tr>
                            <tr>
                                <td><code>onChange()</code></td>
                                <td><code>callable $callback</code></td>
                                <td>Callback when panel opens/closes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
// SOAccordion Class for handling accordion interactions
class SOAccordion {
    static init() {
        document.querySelectorAll('[data-so-accordion]').forEach(accordion => {
            accordion.querySelectorAll('[data-so-toggle="collapse"]').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const target = document.querySelector(button.dataset.soTarget);
                    if (target) {
                        SOAccordion.toggle(target);
                    }
                });
            });
        });
    }

    static toggle(element) {
        if (element.classList.contains('so-show')) {
            SOAccordion.hide(element);
        } else {
            SOAccordion.show(element);
        }
    }

    static show(element) {
        const parent = element.dataset.soParent ? document.querySelector(element.dataset.soParent) : null;
        const button = document.querySelector(`[data-so-target="#${element.id}"]`);

        // Close siblings if parent exists
        if (parent) {
            parent.querySelectorAll('.so-accordion-collapse.so-show').forEach(sibling => {
                if (sibling !== element) {
                    SOAccordion.hide(sibling);
                }
            });
        }

        // Show element
        element.classList.add('so-collapsing');
        element.classList.remove('so-show');
        element.style.display = 'block';
        const height = element.scrollHeight;
        element.style.height = '0px';

        // Force reflow
        element.offsetHeight;

        element.style.height = height + 'px';

        if (button) {
            button.classList.remove('so-collapsed');
            button.setAttribute('aria-expanded', 'true');
        }

        setTimeout(() => {
            element.classList.remove('so-collapsing');
            element.classList.add('so-show');
            element.style.height = '';
        }, 350);
    }

    static hide(element) {
        const button = document.querySelector(`[data-so-target="#${element.id}"]`);

        element.style.height = element.scrollHeight + 'px';
        element.offsetHeight; // Force reflow
        element.classList.add('so-collapsing');
        element.classList.remove('so-show');
        element.style.height = '0px';

        if (button) {
            button.classList.add('so-collapsed');
            button.setAttribute('aria-expanded', 'false');
        }

        setTimeout(() => {
            element.classList.remove('so-collapsing');
            element.style.display = '';
            element.style.height = '';
        }, 350);
    }
}

// Initialize on DOM ready
document.addEventListener('DOMContentLoaded', function() {
    SOAccordion.init();
});
</script>

<?php require_once '../../includes/footer.php'; ?>
