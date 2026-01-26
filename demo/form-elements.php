<?php
/**
 * SixOrbit UI Demo - Form Elements
 */
$pageTitle = 'Form Elements';
$pageDescription = 'SixOrbit UI Form Components Showcase';

require_once 'includes/config.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
?>

<!-- Main Content -->
<main class="so-main-content">
    <!-- Page Header -->
    <div class="so-page-header">
        <div class="so-page-header-left">
            <h1 class="so-page-title">Form Elements</h1>
            <p class="so-page-subtitle">A showcase of all form components available in SixOrbit UI</p>
        </div>
    </div>

    <!-- Page Body -->
    <div class="so-page-body">
        <!-- Vertical Tabs Container -->
        <div class="so-tabs-container so-tabs-container-vertical">
            <!-- Tabbed Navigation (Vertical Left) -->
            <div class="so-tabs so-tabs-vertical so-tabs-pills" role="tablist" data-so-tabs style="position: sticky; top: calc(var(--so-navbar-height) + 16px); align-self: flex-start;">
                <button class="so-tab active" role="tab" aria-selected="true" data-so-target="#pane-buttons">
                    <span class="material-icons">ads_click</span>
                    Buttons
                </button>
                <button class="so-tab" role="tab" aria-selected="false" data-so-target="#pane-inputs">
                    <span class="material-icons">edit_note</span>
                    Text Inputs
                </button>
                <button class="so-tab" role="tab" aria-selected="false" data-so-target="#pane-selects">
                    <span class="material-icons">list</span>
                    Selects
                </button>
                <button class="so-tab" role="tab" aria-selected="false" data-so-target="#pane-dropdowns">
                    <span class="material-icons">arrow_drop_down_circle</span>
                    Dropdowns
                </button>
                <button class="so-tab" role="tab" aria-selected="false" data-so-target="#pane-checkboxes">
                    <span class="material-icons">checklist</span>
                    Checkboxes & Radios
                </button>
                <button class="so-tab" role="tab" aria-selected="false" data-so-target="#pane-badges">
                    <span class="material-icons">label</span>
                    Badges
                </button>
                <button class="so-tab" role="tab" aria-selected="false" data-so-target="#pane-cards">
                    <span class="material-icons">dashboard</span>
                    Cards
                </button>
                <button class="so-tab" role="tab" aria-selected="false" data-so-target="#pane-tabs">
                    <span class="material-icons">tab</span>
                    Tabs
                </button>
                <button class="so-tab" role="tab" aria-selected="false" data-so-target="#pane-tooltips">
                    <span class="material-icons">info_outline</span>
                    Tooltips
                </button>
            </div>

            <!-- Tab Content -->
            <div class="so-tab-content">
            <!-- Buttons Pane -->
            <div class="so-tab-pane fade show active" id="pane-buttons" role="tabpanel">

                <!-- Section 1: Button Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Button Variants</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-2 so-flex-wrap">
                                    <button class="so-btn so-btn-primary">Primary</button>
                                    <button class="so-btn so-btn-secondary">Secondary</button>
                                    <button class="so-btn so-btn-success">Success</button>
                                    <button class="so-btn so-btn-danger">Danger</button>
                                    <button class="so-btn so-btn-warning">Warning</button>
                                    <button class="so-btn so-btn-info">Info</button>
                                    <button class="so-btn so-btn-light">Light</button>
                                    <button class="so-btn so-btn-dark">Dark</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button class="so-btn so-btn-primary"&gt;Primary&lt;/button&gt;
&lt;button class="so-btn so-btn-secondary"&gt;Secondary&lt;/button&gt;
&lt;button class="so-btn so-btn-success"&gt;Success&lt;/button&gt;
&lt;button class="so-btn so-btn-danger"&gt;Danger&lt;/button&gt;
&lt;button class="so-btn so-btn-warning"&gt;Warning&lt;/button&gt;
&lt;button class="so-btn so-btn-info"&gt;Info&lt;/button&gt;
&lt;button class="so-btn so-btn-light"&gt;Light&lt;/button&gt;
&lt;button class="so-btn so-btn-dark"&gt;Dark&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Outline Buttons -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Outline Buttons</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-2 so-flex-wrap">
                                    <button class="so-btn so-btn-outline">Outline</button>
                                    <button class="so-btn so-btn-outline-primary">Primary</button>
                                    <button class="so-btn so-btn-outline-success">Success</button>
                                    <button class="so-btn so-btn-outline-danger">Danger</button>
                                    <button class="so-btn so-btn-outline-warning">Warning</button>
                                    <button class="so-btn so-btn-outline-info">Info</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button class="so-btn so-btn-outline"&gt;Outline&lt;/button&gt;
&lt;button class="so-btn so-btn-outline-primary"&gt;Primary&lt;/button&gt;
&lt;button class="so-btn so-btn-outline-success"&gt;Success&lt;/button&gt;
&lt;button class="so-btn so-btn-outline-danger"&gt;Danger&lt;/button&gt;
&lt;button class="so-btn so-btn-outline-warning"&gt;Warning&lt;/button&gt;
&lt;button class="so-btn so-btn-outline-info"&gt;Info&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Light Buttons -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Light Buttons (Soft Background)</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-2 so-flex-wrap">
                                    <button class="so-btn so-btn-light-primary">Primary</button>
                                    <button class="so-btn so-btn-light-success">Success</button>
                                    <button class="so-btn so-btn-light-danger">Danger</button>
                                    <button class="so-btn so-btn-light-warning">Warning</button>
                                    <button class="so-btn so-btn-light-info">Info</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button class="so-btn so-btn-light-primary"&gt;Primary&lt;/button&gt;
&lt;button class="so-btn so-btn-light-success"&gt;Success&lt;/button&gt;
&lt;button class="so-btn so-btn-light-danger"&gt;Danger&lt;/button&gt;
&lt;button class="so-btn so-btn-light-warning"&gt;Warning&lt;/button&gt;
&lt;button class="so-btn so-btn-light-info"&gt;Info&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Ghost Buttons -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Ghost Buttons</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-2 so-flex-wrap">
                                    <button class="so-btn so-btn-ghost">Ghost</button>
                                    <button class="so-btn so-btn-ghost so-btn-primary">Primary</button>
                                    <button class="so-btn so-btn-ghost so-btn-success">Success</button>
                                    <button class="so-btn so-btn-ghost so-btn-danger">Danger</button>
                                    <button class="so-btn so-btn-ghost so-btn-info">Info</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button class="so-btn so-btn-ghost"&gt;Ghost&lt;/button&gt;
&lt;button class="so-btn so-btn-ghost so-btn-primary"&gt;Primary&lt;/button&gt;
&lt;button class="so-btn so-btn-ghost so-btn-success"&gt;Success&lt;/button&gt;
&lt;button class="so-btn so-btn-ghost so-btn-danger"&gt;Danger&lt;/button&gt;
&lt;button class="so-btn so-btn-ghost so-btn-info"&gt;Info&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Button Sizes -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Button Sizes</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-2 so-items-center so-flex-wrap">
                                    <button class="so-btn so-btn-primary so-btn-xs">Extra Small</button>
                                    <button class="so-btn so-btn-primary so-btn-sm">Small</button>
                                    <button class="so-btn so-btn-primary">Default</button>
                                    <button class="so-btn so-btn-primary so-btn-lg">Large</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button class="so-btn so-btn-primary so-btn-xs"&gt;Extra Small&lt;/button&gt;
&lt;button class="so-btn so-btn-primary so-btn-sm"&gt;Small&lt;/button&gt;
&lt;button class="so-btn so-btn-primary"&gt;Default&lt;/button&gt;
&lt;button class="so-btn so-btn-primary so-btn-lg"&gt;Large&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 6: Buttons with Icons -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Buttons with Icons</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-2 so-flex-wrap">
                                    <button class="so-btn so-btn-primary">
                                        <span class="material-icons">add</span>
                                        Add New
                                    </button>
                                    <button class="so-btn so-btn-success">
                                        <span class="material-icons">save</span>
                                        Save
                                    </button>
                                    <button class="so-btn so-btn-danger">
                                        <span class="material-icons">delete</span>
                                        Delete
                                    </button>
                                    <button class="so-btn so-btn-outline">
                                        <span class="material-icons">download</span>
                                        Export
                                    </button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button class="so-btn so-btn-primary"&gt;
    &lt;span class="material-icons"&gt;add&lt;/span&gt;
    Add New
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 7: Icon-Only Buttons -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Icon-Only Buttons</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-2 so-flex-wrap so-items-center">
                                    <button class="so-btn so-btn-icon so-btn-primary">
                                        <span class="material-icons">add</span>
                                    </button>
                                    <button class="so-btn so-btn-icon so-btn-success">
                                        <span class="material-icons">check</span>
                                    </button>
                                    <button class="so-btn so-btn-icon so-btn-danger">
                                        <span class="material-icons">delete</span>
                                    </button>
                                    <button class="so-btn so-btn-icon so-btn-outline">
                                        <span class="material-icons">edit</span>
                                    </button>
                                    <button class="so-btn so-btn-icon so-btn-ghost">
                                        <span class="material-icons">more_vert</span>
                                    </button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button class="so-btn so-btn-icon so-btn-primary"&gt;
    &lt;span class="material-icons"&gt;add&lt;/span&gt;
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 8: Button Groups -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Button Groups</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-4 so-flex-wrap so-items-center">
                                    <div class="so-btn-group">
                                        <button class="so-btn">Left</button>
                                        <button class="so-btn active">Center</button>
                                        <button class="so-btn">Right</button>
                                    </div>
                                    <div class="so-btn-group">
                                        <button class="so-btn so-btn-outline-primary">Day</button>
                                        <button class="so-btn so-btn-outline-primary active">Week</button>
                                        <button class="so-btn so-btn-outline-primary">Month</button>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-btn-group"&gt;
    &lt;button class="so-btn"&gt;Left&lt;/button&gt;
    &lt;button class="so-btn active"&gt;Center&lt;/button&gt;
    &lt;button class="so-btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 9: Hover Style Modifiers -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Hover Style Modifiers</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <p style="font-size: 12px; color: var(--so-text-muted); margin-bottom: 12px;">Combine any button variant with a hover modifier to customize hover behavior</p>

                                <!-- Soft Hover -->
                                <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">.btn-hover-soft (Light tinted background)</h5>
                                <div class="so-flex so-gap-2 so-flex-wrap so-mb-3">
                                    <button class="so-btn so-btn-outline-primary btn-hover-soft">Outline + Soft</button>
                                    <button class="so-btn so-btn-outline-success btn-hover-soft">Outline + Soft</button>
                                    <button class="so-btn so-btn-outline-danger btn-hover-soft">Outline + Soft</button>
                                    <button class="so-btn so-btn-light-primary btn-hover-soft">Light + Soft</button>
                                    <button class="so-btn so-btn-ghost so-btn-primary btn-hover-soft">Ghost + Soft</button>
                                </div>

                                <!-- Solid Hover -->
                                <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">.btn-hover-solid (Fill with solid color)</h5>
                                <div class="so-flex so-gap-2 so-flex-wrap so-mb-3">
                                    <button class="so-btn so-btn-ghost so-btn-primary btn-hover-solid">Ghost + Solid</button>
                                    <button class="so-btn so-btn-ghost so-btn-success btn-hover-solid">Ghost + Solid</button>
                                    <button class="so-btn so-btn-ghost so-btn-danger btn-hover-solid">Ghost + Solid</button>
                                    <button class="so-btn so-btn-light-info btn-hover-solid">Light + Solid</button>
                                </div>

                                <!-- Darken Hover -->
                                <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">.btn-hover-darken (Subtle darkening)</h5>
                                <div class="so-flex so-gap-2 so-flex-wrap so-mb-3">
                                    <button class="so-btn so-btn-light-primary btn-hover-darken">Light + Darken</button>
                                    <button class="so-btn so-btn-light-success btn-hover-darken">Light + Darken</button>
                                    <button class="so-btn so-btn-light-danger btn-hover-darken">Light + Darken</button>
                                    <button class="so-btn so-btn-outline-primary btn-hover-darken">Outline + Darken</button>
                                    <button class="so-btn so-btn-ghost btn-hover-darken">Ghost + Darken</button>
                                </div>

                                <!-- Effect Hovers -->
                                <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Effect Modifiers (.btn-hover-lift, .btn-hover-scale, .btn-hover-none)</h5>
                                <div class="so-flex so-gap-2 so-flex-wrap so-mb-3">
                                    <button class="so-btn so-btn-primary btn-hover-lift">Lift Effect</button>
                                    <button class="so-btn so-btn-success btn-hover-scale">Scale Effect</button>
                                    <button class="so-btn so-btn-outline-danger btn-hover-lift">Outline + Lift</button>
                                    <button class="so-btn so-btn-light-info btn-hover-none">No Hover</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;!-- Soft Hover: Light tinted background on hover --&gt;
&lt;button class="so-btn so-btn-outline-primary btn-hover-soft"&gt;Outline + Soft&lt;/button&gt;
&lt;button class="so-btn so-btn-light-primary btn-hover-soft"&gt;Light + Soft&lt;/button&gt;
&lt;button class="so-btn so-btn-ghost so-btn-primary btn-hover-soft"&gt;Ghost + Soft&lt;/button&gt;

&lt;!-- Solid Hover: Fill with solid color on hover --&gt;
&lt;button class="so-btn so-btn-ghost so-btn-primary btn-hover-solid"&gt;Ghost + Solid&lt;/button&gt;
&lt;button class="so-btn so-btn-light-info btn-hover-solid"&gt;Light + Solid&lt;/button&gt;

&lt;!-- Darken Hover: Subtle darkening on hover --&gt;
&lt;button class="so-btn so-btn-light-primary btn-hover-darken"&gt;Light + Darken&lt;/button&gt;
&lt;button class="so-btn so-btn-outline-primary btn-hover-darken"&gt;Outline + Darken&lt;/button&gt;

&lt;!-- Effect Modifiers --&gt;
&lt;button class="so-btn so-btn-primary btn-hover-lift"&gt;Lift Effect&lt;/button&gt;
&lt;button class="so-btn so-btn-success btn-hover-scale"&gt;Scale Effect&lt;/button&gt;
&lt;button class="so-btn so-btn-light-info btn-hover-none"&gt;No Hover&lt;/button&gt;

&lt;!-- Available hover modifiers:
  .btn-hover-soft   - Light tinted background (like ghost)
  .btn-hover-solid  - Fill with solid color (like outline default)
  .btn-hover-darken - Slightly darker shade
  .btn-hover-lift   - Elevate with shadow
  .btn-hover-scale  - Slight scale up
  .btn-hover-none   - Disable hover effects
--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 10: Progress Buttons -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Progress Buttons</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <!-- Solid Variants -->
                                <h5 style="margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Solid Variants</h5>
                                <div class="so-flex so-gap-3 so-flex-wrap so-items-center so-mb-4">
                                    <button class="so-btn so-btn-primary so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Primary</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Done</span>
                                    </button>
                                    <button class="so-btn so-btn-secondary so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Secondary</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-success so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Success</span>
                                        <span class="btn-done"><span class="material-icons">check_circle</span></span>
                                    </button>
                                    <button class="so-btn so-btn-danger so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Danger</span>
                                        <span class="btn-done"><span class="material-icons">close</span></span>
                                    </button>
                                    <button class="so-btn so-btn-warning so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Warning</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-info so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Info</span>
                                        <span class="btn-done">Synced!</span>
                                    </button>
                                </div>

                                <!-- Outline Variants -->
                                <h5 style="margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Outline Variants</h5>
                                <div class="so-flex so-gap-3 so-flex-wrap so-items-center so-mb-4">
                                    <button class="so-btn so-btn-outline-primary so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Primary</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-outline-success so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Success</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-outline-danger so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Danger</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-outline-warning so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Warning</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-outline-info so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Info</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                </div>

                                <!-- Light Variants -->
                                <h5 style="margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Light (Soft) Variants</h5>
                                <div class="so-flex so-gap-3 so-flex-wrap so-items-center so-mb-4">
                                    <button class="so-btn so-btn-light-primary so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Primary</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-light-success so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Success</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-light-danger so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Danger</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-light-warning so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Warning</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-light-info so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Info</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                </div>

                                <!-- Size Variants -->
                                <h5 style="margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Size Variants</h5>
                                <div class="so-flex so-gap-3 so-flex-wrap so-items-center so-mb-4">
                                    <button class="so-btn so-btn-primary so-btn-xs so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Extra Small</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-primary so-btn-sm so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Small</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-primary so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Default</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <button class="so-btn so-btn-primary so-btn-lg so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Large</span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                </div>

                                <!-- Content Variants: Text Only, Icon Only, Text + Icon -->
                                <h5 style="margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Content Variants</h5>
                                <div class="so-flex so-gap-3 so-flex-wrap so-items-center so-mb-3">
                                    <!-- Text Only -->
                                    <button class="so-btn so-btn-primary so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Text Only</span>
                                        <span class="btn-done">Done!</span>
                                    </button>
                                    <!-- Icon Only -->
                                    <button class="so-btn so-btn-primary so-btn-icon so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text"><span class="material-icons">cloud_upload</span></span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                    <!-- Text + Icon (Icon Left) -->
                                    <button class="so-btn so-btn-success so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text"><span class="material-icons">save</span> Save</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Saved</span>
                                    </button>
                                    <!-- Text + Icon (Icon Right) -->
                                    <button class="so-btn so-btn-info so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Sync <span class="material-icons">sync</span></span>
                                        <span class="btn-done"><span class="material-icons">cloud_done</span></span>
                                    </button>
                                    <!-- Outline with Icon -->
                                    <button class="so-btn so-btn-outline-primary so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text"><span class="material-icons">download</span> Export</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Ready</span>
                                    </button>
                                    <!-- Light Icon Only -->
                                    <button class="so-btn so-btn-light-danger so-btn-icon so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text"><span class="material-icons">delete</span></span>
                                        <span class="btn-done"><span class="material-icons">check</span></span>
                                    </button>
                                </div>
                                <p style="font-size: 12px; color: var(--so-text-secondary); margin: 0;">Click buttons to see progress animation</p>

                                <!-- Done State Color Modifiers -->
                                <h5 style="margin-top: 24px; margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Done State Color Control</h5>
                                <p style="font-size: 12px; color: var(--so-text-muted); margin-bottom: 12px;">Override the completed state color with <code>.btn-done-{color}</code> or keep parent color with <code>.btn-done-match</code></p>

                                <div class="so-flex so-gap-3 so-flex-wrap so-items-center so-mb-3">
                                    <!-- Default: Primary -> Success -->
                                    <button class="so-btn so-btn-primary so-btn-progress" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Default (→ Success)</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Done</span>
                                    </button>
                                    <!-- Match Parent Color -->
                                    <button class="so-btn so-btn-primary so-btn-progress btn-done-match" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Match Parent</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Done</span>
                                    </button>
                                    <!-- Force Danger -->
                                    <button class="so-btn so-btn-primary so-btn-progress btn-done-danger" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Force Danger</span>
                                        <span class="btn-done"><span class="material-icons">warning</span> Error</span>
                                    </button>
                                    <!-- Force Info -->
                                    <button class="so-btn so-btn-warning so-btn-progress btn-done-info" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Warning → Info</span>
                                        <span class="btn-done"><span class="material-icons">info</span> Complete</span>
                                    </button>
                                </div>
                                <div class="so-flex so-gap-3 so-flex-wrap so-items-center so-mb-3">
                                    <!-- Outline with Match -->
                                    <button class="so-btn so-btn-outline-danger so-btn-progress btn-done-match" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Outline Match</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Done</span>
                                    </button>
                                    <!-- Outline Force Success -->
                                    <button class="so-btn so-btn-outline-secondary so-btn-progress btn-done-success" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Secondary → Success</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Done</span>
                                    </button>
                                    <!-- Light with Match -->
                                    <button class="so-btn so-btn-light-info so-btn-progress btn-done-match" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Light Match</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Done</span>
                                    </button>
                                    <!-- Light Force Primary -->
                                    <button class="so-btn so-btn-light-danger so-btn-progress btn-done-primary" onclick="simulateProgress(this)">
                                        <span class="btn-progress-bar"></span>
                                        <span class="btn-text">Light → Primary</span>
                                        <span class="btn-done"><span class="material-icons">check</span> Done</span>
                                    </button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;!-- Text Only --&gt;
&lt;button class="so-btn so-btn-primary so-btn-progress"&gt;
    &lt;span class="btn-progress-bar"&gt;&lt;/span&gt;
    &lt;span class="btn-text"&gt;Upload File&lt;/span&gt;
    &lt;span class="btn-done"&gt;Done!&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Icon Only --&gt;
&lt;button class="so-btn so-btn-primary so-btn-icon so-btn-progress"&gt;
    &lt;span class="btn-progress-bar"&gt;&lt;/span&gt;
    &lt;span class="btn-text"&gt;&lt;span class="material-icons"&gt;cloud_upload&lt;/span&gt;&lt;/span&gt;
    &lt;span class="btn-done"&gt;&lt;span class="material-icons"&gt;check&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Text + Icon --&gt;
&lt;button class="so-btn so-btn-success so-btn-progress"&gt;
    &lt;span class="btn-progress-bar"&gt;&lt;/span&gt;
    &lt;span class="btn-text"&gt;&lt;span class="material-icons"&gt;save&lt;/span&gt; Save&lt;/span&gt;
    &lt;span class="btn-done"&gt;&lt;span class="material-icons"&gt;check&lt;/span&gt; Saved&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Outline, Light, Sizes work the same way --&gt;
&lt;button class="so-btn so-btn-outline-primary so-btn-progress"&gt;...&lt;/button&gt;
&lt;button class="so-btn so-btn-light-primary so-btn-progress"&gt;...&lt;/button&gt;
&lt;button class="so-btn so-btn-primary so-btn-sm so-btn-progress"&gt;...&lt;/button&gt;

&lt;!-- Done State Color Modifiers --&gt;
&lt;!-- .btn-done-match: Keep parent button color on complete --&gt;
&lt;button class="so-btn so-btn-primary so-btn-progress btn-done-match"&gt;
    &lt;span class="btn-progress-bar"&gt;&lt;/span&gt;
    &lt;span class="btn-text"&gt;Match Parent&lt;/span&gt;
    &lt;span class="btn-done"&gt;Done&lt;/span&gt;
&lt;/button&gt;

&lt;!-- .btn-done-{color}: Force specific color on complete --&gt;
&lt;button class="so-btn so-btn-primary so-btn-progress btn-done-danger"&gt;
    &lt;span class="btn-progress-bar"&gt;&lt;/span&gt;
    &lt;span class="btn-text"&gt;Processing&lt;/span&gt;
    &lt;span class="btn-done"&gt;Error!&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Available: btn-done-primary, btn-done-success, btn-done-danger,
     btn-done-warning, btn-done-info, btn-done-secondary --&gt;

&lt;!-- JavaScript to control progress --&gt;
&lt;script&gt;
btn.style.setProperty('--progress', '50%'); // Set progress
btn.classList.add('completed'); // Mark as complete
&lt;/script&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Inputs Pane -->
            <div class="so-tab-pane fade" id="pane-inputs" role="tabpanel">
                <div class="so-card">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Text Inputs</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1">
                            <div class="so-form-group">
                                <label class="so-form-label">Default Input</label>
                                <input type="text" class="so-form-input" placeholder="Enter text...">
                            </div>

                            <div class="so-form-group">
                                <label class="so-form-label">Input with Icon</label>
                                <div class="so-form-input-wrapper">
                                    <span class="material-icons so-form-input-icon">search</span>
                                    <input type="text" class="so-form-input" placeholder="Search...">
                                </div>
                            </div>

                            <div class="so-form-group">
                                <label class="so-form-label">Disabled Input</label>
                                <input type="text" class="so-form-input" placeholder="Disabled" disabled>
                            </div>

                            <div class="so-form-group has-error">
                                <label class="so-form-label">Error State</label>
                                <input type="text" class="so-form-input" value="Invalid value">
                                <span class="so-form-error">This field has an error</span>
                            </div>
                        </div>

                        <div class="so-form-group" style="margin-top: 16px;">
                            <label class="so-form-label">Textarea</label>
                            <textarea class="so-form-textarea" rows="3" placeholder="Enter description..."></textarea>
                        </div>

                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;div class="so-form-group"&gt;
    &lt;label class="so-form-label"&gt;Default Input&lt;/label&gt;
    &lt;input type="text" class="so-form-input" placeholder="Enter text..."&gt;
&lt;/div&gt;

&lt;div class="so-form-group"&gt;
    &lt;label class="so-form-label"&gt;Input with Icon&lt;/label&gt;
    &lt;div class="so-form-input-wrapper"&gt;
        &lt;span class="material-icons so-form-input-icon"&gt;search&lt;/span&gt;
        &lt;input type="text" class="so-form-input" placeholder="Search..."&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="so-form-group has-error"&gt;
    &lt;label class="so-form-label"&gt;Error State&lt;/label&gt;
    &lt;input type="text" class="so-form-input" value="Invalid value"&gt;
    &lt;span class="so-form-error"&gt;This field has an error&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Selects Pane -->
            <div class="so-tab-pane fade" id="pane-selects" role="tabpanel">
                <div class="so-card">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Select & Dropdowns</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1">
                            <div class="so-form-group">
                                <label class="so-form-label">Standard Dropdown</label>
                                <div class="so-dropdown">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">Option 1</div>
                                        <div class="so-dropdown-item" data-value="2">Option 2</div>
                                        <div class="so-dropdown-item" data-value="3">Option 3</div>
                                    </div>
                                </div>
                            </div>

                            <div class="so-form-group">
                                <label class="so-form-label">Native Select</label>
                                <select class="so-form-select">
                                    <option value="">Choose...</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>

                            <div class="so-form-group">
                                <label class="so-form-label">Searchable Dropdown</label>
                                <div class="so-dropdown so-dropdown-searchable" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select customer</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-search">
                                            <input type="text" class="so-dropdown-search-input" placeholder="Search...">
                                        </div>
                                        <div class="so-dropdown-items">
                                            <div class="so-dropdown-item" data-value="1">Ajay Kumar</div>
                                            <div class="so-dropdown-item" data-value="2">Priya Sharma</div>
                                            <div class="so-dropdown-item" data-value="3">Rahul Singh</div>
                                            <div class="so-dropdown-item" data-value="4">Meera Patel</div>
                                            <div class="so-dropdown-item" data-value="5">Vikash Gupta</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Standard Dropdown --&gt;
&lt;div class="so-dropdown"&gt;
    &lt;button type="button" class="so-btn so-btn-light so-dropdown-trigger"&gt;
        &lt;span class="so-dropdown-selected"&gt;Select option&lt;/span&gt;
        &lt;span class="material-icons so-dropdown-arrow"&gt;expand_more&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="so-dropdown-menu"&gt;
        &lt;div class="so-dropdown-item" data-value="1"&gt;Option 1&lt;/div&gt;
        &lt;div class="so-dropdown-item" data-value="2"&gt;Option 2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Native Select --&gt;
&lt;select class="so-form-select"&gt;
    &lt;option value=""&gt;Choose...&lt;/option&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
&lt;/select&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dropdowns Pane -->
            <div class="so-tab-pane fade" id="pane-dropdowns" role="tabpanel">

                <!-- Section 1: Basic Dropdowns -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Basic Dropdowns</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-grid so-grid-cols-3 so-grid-cols-md-2 so-grid-cols-sm-1" style="gap: 24px;">

                            <!-- Standard Dropdown -->
                            <div class="so-form-group">
                                <label class="so-form-label">Standard Dropdown</label>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">Option 1</div>
                                        <div class="so-dropdown-item" data-value="2">Option 2</div>
                                        <div class="so-dropdown-item" data-value="3">Option 3</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Searchable Dropdown -->
                            <div class="so-form-group">
                                <label class="so-form-label">Searchable Dropdown</label>
                                <div class="so-dropdown so-dropdown-searchable" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Search & Select</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-search">
                                            <input type="text" class="so-dropdown-search-input" placeholder="Search...">
                                        </div>
                                        <div class="so-dropdown-items">
                                            <div class="so-dropdown-item" data-value="1">Apple</div>
                                            <div class="so-dropdown-item" data-value="2">Banana</div>
                                            <div class="so-dropdown-item" data-value="3">Cherry</div>
                                            <div class="so-dropdown-item" data-value="4">Date</div>
                                            <div class="so-dropdown-item" data-value="5">Elderberry</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Options Dropdown (Action Menu) -->
                            <div class="so-form-group">
                                <label class="so-form-label">Options Dropdown</label>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-btn-icon so-dropdown-trigger">
                                        <span class="material-icons">more_vert</span>
                                    </button>
                                    <div class="so-dropdown-menu so-dropdown-menu-end">
                                        <div class="so-dropdown-item" data-action="edit">
                                            <span class="material-icons">edit</span>
                                            <span>Edit</span>
                                        </div>
                                        <div class="so-dropdown-item" data-action="duplicate">
                                            <span class="material-icons">content_copy</span>
                                            <span>Duplicate</span>
                                        </div>
                                        <div class="so-dropdown-divider"></div>
                                        <div class="so-dropdown-item so-dropdown-item-danger" data-action="delete">
                                            <span class="material-icons">delete</span>
                                            <span>Delete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Standard Dropdown --&gt;
&lt;div class="so-dropdown" data-so-dropdown&gt;
    &lt;button type="button" class="so-btn so-btn-light so-dropdown-trigger"&gt;
        &lt;span class="so-dropdown-selected"&gt;Select option&lt;/span&gt;
        &lt;span class="material-icons so-dropdown-arrow"&gt;expand_more&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="so-dropdown-menu"&gt;
        &lt;div class="so-dropdown-item" data-value="1"&gt;Option 1&lt;/div&gt;
        &lt;div class="so-dropdown-item" data-value="2"&gt;Option 2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Searchable Dropdown --&gt;
&lt;div class="so-dropdown so-dropdown-searchable" data-so-dropdown&gt;
    &lt;button type="button" class="so-btn so-btn-light so-dropdown-trigger"&gt;
        &lt;span class="so-dropdown-selected"&gt;Search &amp; Select&lt;/span&gt;
        &lt;span class="material-icons so-dropdown-arrow"&gt;expand_more&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="so-dropdown-menu"&gt;
        &lt;div class="so-dropdown-search"&gt;
            &lt;input type="text" class="so-dropdown-search-input" placeholder="Search..."&gt;
        &lt;/div&gt;
        &lt;div class="so-dropdown-items"&gt;
            &lt;div class="so-dropdown-item" data-value="1"&gt;Apple&lt;/div&gt;
            &lt;div class="so-dropdown-item" data-value="2"&gt;Banana&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Options/Action Dropdown --&gt;
&lt;div class="so-dropdown" data-so-dropdown&gt;
    &lt;button type="button" class="so-btn so-btn-light so-btn-icon so-dropdown-trigger"&gt;
        &lt;span class="material-icons"&gt;more_vert&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="so-dropdown-menu so-dropdown-menu-end"&gt;
        &lt;div class="so-dropdown-item" data-action="edit"&gt;
            &lt;span class="material-icons"&gt;edit&lt;/span&gt;
            &lt;span&gt;Edit&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="so-dropdown-divider"&gt;&lt;/div&gt;
        &lt;div class="so-dropdown-item so-dropdown-item-danger" data-action="delete"&gt;
            &lt;span class="material-icons"&gt;delete&lt;/span&gt;
            &lt;span&gt;Delete&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Menu Content Types -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Menu Content Types</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1" style="gap: 24px;">

                            <!-- Headers & Dividers -->
                            <div class="so-form-group">
                                <label class="so-form-label">Headers & Dividers</label>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select category</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-header">Fruits</div>
                                        <div class="so-dropdown-item" data-value="apple">Apple</div>
                                        <div class="so-dropdown-item" data-value="banana">Banana</div>
                                        <div class="so-dropdown-divider"></div>
                                        <div class="so-dropdown-header">Vegetables</div>
                                        <div class="so-dropdown-item" data-value="carrot">Carrot</div>
                                        <div class="so-dropdown-item" data-value="broccoli">Broccoli</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Icons with Items -->
                            <div class="so-form-group">
                                <label class="so-form-label">Icons with Items</label>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select action</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="new">
                                            <span class="material-icons">add</span>
                                            New File
                                        </div>
                                        <div class="so-dropdown-item" data-value="open">
                                            <span class="material-icons">folder_open</span>
                                            Open
                                        </div>
                                        <div class="so-dropdown-item" data-value="save">
                                            <span class="material-icons">save</span>
                                            Save
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Disabled Items -->
                            <div class="so-form-group">
                                <label class="so-form-label">Disabled Items</label>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">Available Option</div>
                                        <div class="so-dropdown-item disabled" data-value="2">Unavailable (disabled)</div>
                                        <div class="so-dropdown-item" data-value="3">Another Option</div>
                                        <div class="so-dropdown-item disabled" data-value="4">Also Disabled</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Active/Selected State -->
                            <div class="so-form-group">
                                <label class="so-form-label">Active/Selected State</label>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Option 2</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">Option 1</div>
                                        <div class="so-dropdown-item active" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">Option 3</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Headers & Dividers --&gt;
&lt;div class="so-dropdown-menu"&gt;
    &lt;div class="so-dropdown-header"&gt;Category&lt;/div&gt;
    &lt;div class="so-dropdown-item"&gt;Item 1&lt;/div&gt;
    &lt;div class="so-dropdown-divider"&gt;&lt;/div&gt;
    &lt;div class="so-dropdown-item"&gt;Item 2&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Icons with Items --&gt;
&lt;div class="so-dropdown-item"&gt;
    &lt;span class="material-icons"&gt;edit&lt;/span&gt;
    Edit
&lt;/div&gt;

&lt;!-- Disabled Items --&gt;
&lt;div class="so-dropdown-item disabled"&gt;Unavailable&lt;/div&gt;

&lt;!-- Active/Selected with Checkmark --&gt;
&lt;div class="so-dropdown-item active"&gt;
    Selected Option
    &lt;span class="material-icons so-dropdown-check"&gt;check&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Direction & Alignment Variants</h3>
                    </div>
                    <div class="so-card-body">

                        <h4 style="margin-bottom: 16px; font-size: 14px; font-weight: 600;">Dropdown Directions</h4>
                        <div class="so-flex so-gap-4 so-flex-wrap so-mb-4">

                            <!-- Dropdown (default) -->
                            <div class="so-dropdown" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Dropdown</span>
                                    <span class="material-icons so-dropdown-arrow">expand_more</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">Action 1</div>
                                    <div class="so-dropdown-item">Action 2</div>
                                </div>
                            </div>

                            <!-- Dropup -->
                            <div class="so-dropdown so-dropup" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Dropup</span>
                                    <span class="material-icons so-dropdown-arrow">expand_less</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">Action 1</div>
                                    <div class="so-dropdown-item">Action 2</div>
                                </div>
                            </div>

                            <!-- Dropstart -->
                            <div class="so-dropdown so-dropstart" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="material-icons">chevron_left</span>
                                    <span class="so-dropdown-selected">Dropstart</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">Action 1</div>
                                    <div class="so-dropdown-item">Action 2</div>
                                </div>
                            </div>

                            <!-- Dropend -->
                            <div class="so-dropdown so-dropend" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Dropend</span>
                                    <span class="material-icons">chevron_right</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">Action 1</div>
                                    <div class="so-dropdown-item">Action 2</div>
                                </div>
                            </div>

                        </div>

                        <h4 style="margin-bottom: 16px; font-size: 14px; font-weight: 600;">Menu Alignment</h4>
                        <div class="so-flex so-gap-4 so-flex-wrap so-mb-4">

                            <!-- Left aligned (default) -->
                            <div class="so-dropdown" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Left Aligned</span>
                                    <span class="material-icons so-dropdown-arrow">expand_more</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">This menu is left-aligned</div>
                                    <div class="so-dropdown-item">Default behavior</div>
                                </div>
                            </div>

                            <!-- Right aligned -->
                            <div class="so-dropdown so-dropdown-menu-end" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Right Aligned</span>
                                    <span class="material-icons so-dropdown-arrow">expand_more</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">This menu is right-aligned</div>
                                    <div class="so-dropdown-item">Use .so-dropdown-menu-end</div>
                                </div>
                            </div>

                        </div>

                        <h4 style="margin-bottom: 16px; font-size: 14px; font-weight: 600;">Size Variants</h4>
                        <div class="so-flex so-gap-4 so-flex-wrap so-items-end">

                            <!-- Small -->
                            <div class="so-dropdown so-dropdown-sm" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Small</span>
                                    <span class="material-icons so-dropdown-arrow">expand_more</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">Small Option 1</div>
                                    <div class="so-dropdown-item">Small Option 2</div>
                                </div>
                            </div>

                            <!-- Default -->
                            <div class="so-dropdown" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Default</span>
                                    <span class="material-icons so-dropdown-arrow">expand_more</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">Default Option 1</div>
                                    <div class="so-dropdown-item">Default Option 2</div>
                                </div>
                            </div>

                            <!-- Large -->
                            <div class="so-dropdown so-dropdown-lg" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Large</span>
                                    <span class="material-icons so-dropdown-arrow">expand_more</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item">Large Option 1</div>
                                    <div class="so-dropdown-item">Large Option 2</div>
                                </div>
                            </div>

                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Dropup (opens above) --&gt;
&lt;div class="so-dropdown so-dropup" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Dropstart (opens left) --&gt;
&lt;div class="so-dropdown so-dropstart" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Dropend (opens right) --&gt;
&lt;div class="so-dropdown so-dropend" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Right-aligned menu --&gt;
&lt;div class="so-dropdown so-dropdown-menu-end" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Size variants --&gt;
&lt;div class="so-dropdown so-dropdown-sm" data-so-dropdown&gt;...&lt;/div&gt;
&lt;div class="so-dropdown so-dropdown-lg" data-so-dropdown&gt;...&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Behaviors -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Auto-Close Behaviors</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary); font-size: 14px;">
                            Control how the dropdown closes with the <code>data-so-auto-close</code> attribute.
                        </p>

                        <div class="so-grid so-grid-cols-4 so-grid-cols-md-2 so-grid-cols-sm-1" style="gap: 16px;">

                            <!-- autoClose: true (default) -->
                            <div>
                                <div class="so-dropdown" data-so-dropdown data-so-auto-close="true">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">true (default)</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item-text">Closes on any click</div>
                                        <div class="so-dropdown-divider"></div>
                                        <div class="so-dropdown-item">Click me</div>
                                        <div class="so-dropdown-item">Or me</div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Closes on any click</small>
                            </div>

                            <!-- autoClose: 'inside' -->
                            <div>
                                <div class="so-dropdown" data-so-dropdown data-so-auto-close="inside">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">inside</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item-text">Only closes on inside click</div>
                                        <div class="so-dropdown-divider"></div>
                                        <div class="so-dropdown-item">Click me to close</div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Only closes on item click</small>
                            </div>

                            <!-- autoClose: 'outside' -->
                            <div>
                                <div class="so-dropdown" data-so-dropdown data-so-auto-close="outside">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">outside</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item-text">Only closes on outside click</div>
                                        <div class="so-dropdown-divider"></div>
                                        <div class="so-dropdown-item">Click won't close</div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Only closes on outside click</small>
                            </div>

                            <!-- autoClose: false -->
                            <div>
                                <div class="so-dropdown" data-so-dropdown data-so-auto-close="false">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">false</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item-text">Manual close only (Esc or toggle)</div>
                                        <div class="so-dropdown-divider"></div>
                                        <div class="so-dropdown-item">Nothing closes me</div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Use Escape or toggle button</small>
                            </div>

                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- autoClose: true (default) - closes on any click --&gt;
&lt;div class="so-dropdown" data-so-dropdown data-so-auto-close="true"&gt;...&lt;/div&gt;

&lt;!-- autoClose: inside - only closes when clicking menu items --&gt;
&lt;div class="so-dropdown" data-so-dropdown data-so-auto-close="inside"&gt;...&lt;/div&gt;

&lt;!-- autoClose: outside - only closes when clicking outside --&gt;
&lt;div class="so-dropdown" data-so-dropdown data-so-auto-close="outside"&gt;...&lt;/div&gt;

&lt;!-- autoClose: false - only closes via Escape key or programmatically --&gt;
&lt;div class="so-dropdown" data-so-dropdown data-so-auto-close="false"&gt;...&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 5: JavaScript API -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">JavaScript API</h3>
                    </div>
                    <div class="so-card-body">

                        <h4 style="margin-bottom: 16px; font-size: 14px; font-weight: 600;">Event Listeners Demo</h4>
                        <div class="so-flex so-gap-4 so-items-start so-mb-4">
                            <div class="so-dropdown" id="demo-events-dropdown" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Select to see events</span>
                                    <span class="material-icons so-dropdown-arrow">expand_more</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item" data-value="1">Option 1</div>
                                    <div class="so-dropdown-item" data-value="2">Option 2</div>
                                    <div class="so-dropdown-item" data-value="3">Option 3</div>
                                </div>
                            </div>

                            <div style="flex: 1; padding: 12px; font-size: 13px; color: var(--so-text-secondary);">
                                <span class="material-icons" style="font-size: 16px; vertical-align: middle; margin-right: 4px;">terminal</span>
                                Events are logged to browser console (F12)
                            </div>
                        </div>

                        <h4 style="margin-bottom: 16px; font-size: 14px; font-weight: 600;">Programmatic Control</h4>
                        <div class="so-flex so-gap-2 so-flex-wrap so-mb-3">
                            <button class="so-btn so-btn-outline" onclick="window.demoDropdown && demoDropdown.open()">
                                <span class="material-icons">expand_more</span>
                                Open
                            </button>
                            <button class="so-btn so-btn-outline" onclick="window.demoDropdown && demoDropdown.close()">
                                <span class="material-icons">expand_less</span>
                                Close
                            </button>
                            <button class="so-btn so-btn-outline" onclick="window.demoDropdown && demoDropdown.toggle()">
                                <span class="material-icons">swap_vert</span>
                                Toggle
                            </button>
                            <button class="so-btn so-btn-outline" onclick="window.demoDropdown && demoDropdown.select('2', 'Option 2')">
                                <span class="material-icons">check</span>
                                Select Option 2
                            </button>
                            <button class="so-btn so-btn-outline" onclick="alert('Value: ' + (window.demoDropdown ? demoDropdown.getValue() : 'N/A'))">
                                <span class="material-icons">info</span>
                                Get Value
                            </button>
                        </div>

                        <h4 style="margin-bottom: 16px; font-size: 14px; font-weight: 600;">Enable/Disable Demo</h4>
                        <div class="so-flex so-gap-4 so-items-center">
                            <div class="so-dropdown" id="demo-disable-dropdown" data-so-dropdown>
                                <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                    <span class="so-dropdown-selected">Enable/Disable Me</span>
                                    <span class="material-icons so-dropdown-arrow">expand_more</span>
                                </button>
                                <div class="so-dropdown-menu">
                                    <div class="so-dropdown-item" data-value="1">Option 1</div>
                                    <div class="so-dropdown-item" data-value="2">Option 2</div>
                                </div>
                            </div>

                            <button class="so-btn so-btn-outline-danger" onclick="window.disableDropdown && disableDropdown.disable()">Disable</button>
                            <button class="so-btn so-btn-outline-success" onclick="window.disableDropdown && disableDropdown.enable()">Enable</button>
                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> JavaScript</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-javascript">// Get dropdown instance
const dropdown = SODropdown.getInstance('#my-dropdown');

// Listen for events
dropdown.element.addEventListener('so:dropdown:show', (e) => {
  console.log('Dropdown is about to open');
  // e.preventDefault(); // Cancel opening
});

dropdown.element.addEventListener('so:dropdown:shown', () => {
  console.log('Dropdown is now open');
});

dropdown.element.addEventListener('so:dropdown:change', (e) => {
  console.log('Selected:', e.detail.value, e.detail.text);
});

// Programmatic control
dropdown.open();
dropdown.close();
dropdown.toggle();
dropdown.select('value', 'Display Text');
dropdown.getValue(); // Returns current value
dropdown.disable();
dropdown.enable();
dropdown.setItemDisabled('value', true); // Disable specific item</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 6: Split Button Dropdown -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Split Button Dropdown</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary); font-size: 14px;">
                            Combine a primary action button with a dropdown for additional options.
                        </p>

                        <div class="so-flex so-gap-4 so-flex-wrap">

                            <!-- Primary Split Button -->
                            <div class="so-btn-group">
                                <button class="so-btn so-btn-primary">Save</button>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-dropdown-trigger so-btn so-btn-primary">
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-action="save-draft">Save as Draft</div>
                                        <div class="so-dropdown-item" data-action="save-publish">Save & Publish</div>
                                        <div class="so-dropdown-item" data-action="save-copy">Save as Copy</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Success Split Button -->
                            <div class="so-btn-group">
                                <button class="so-btn so-btn-success">
                                    <span class="material-icons">download</span>
                                    Export
                                </button>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-dropdown-trigger so-btn so-btn-success">
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item">Export as CSV</div>
                                        <div class="so-dropdown-item">Export as Excel</div>
                                        <div class="so-dropdown-item">Export as PDF</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Outline Split Button -->
                            <div class="so-btn-group">
                                <button class="so-btn so-btn-outline">Actions</button>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-dropdown-trigger so-btn so-btn-outline">
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item">Action 1</div>
                                        <div class="so-dropdown-item">Action 2</div>
                                        <div class="so-dropdown-divider"></div>
                                        <div class="so-dropdown-item" style="color: var(--so-accent-danger);">Delete</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;div class="so-btn-group"&gt;
    &lt;button class="so-btn so-btn-primary"&gt;Save&lt;/button&gt;
    &lt;div class="so-dropdown" data-so-dropdown&gt;
        &lt;button type="button" class="so-dropdown-trigger so-btn so-btn-primary"&gt;
            &lt;span class="material-icons so-dropdown-arrow"&gt;expand_more&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="so-dropdown-menu"&gt;
            &lt;div class="so-dropdown-item"&gt;Save as Draft&lt;/div&gt;
            &lt;div class="so-dropdown-item"&gt;Save &amp; Publish&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 7: Selection Styles -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Selection Styles</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary); font-size: 14px;">
                            Control how selected items are displayed with the <code>data-so-selection-style</code> attribute.
                        </p>

                        <div class="so-grid so-grid-cols-3 so-grid-cols-md-2 so-grid-cols-sm-1" style="gap: 24px;">

                            <!-- Default: Background + Check -->
                            <div class="so-form-group">
                                <label class="so-form-label">Default (background + check)</label>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">
                                            Option 1
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">
                                            Option 3
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Background highlight + checkmark</small>
                            </div>

                            <!-- Highlight Only -->
                            <div class="so-form-group">
                                <label class="so-form-label">Highlight Only</label>
                                <div class="so-dropdown" data-so-dropdown data-so-selection-style="highlight">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">Option 1</div>
                                        <div class="so-dropdown-item" data-value="2">Option 2</div>
                                        <div class="so-dropdown-item" data-value="3">Option 3</div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Background highlight only, no checkmark</small>
                            </div>

                            <!-- Check Only -->
                            <div class="so-form-group">
                                <label class="so-form-label">Check Only</label>
                                <div class="so-dropdown" data-so-dropdown data-so-selection-style="check">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">
                                            Option 1
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">
                                            Option 3
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Checkmark only, no background</small>
                            </div>

                            <!-- Custom Icon -->
                            <div class="so-form-group">
                                <label class="so-form-label">Custom Icon (star)</label>
                                <div class="so-dropdown" data-so-dropdown data-so-selection-style="check">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select favorite</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="pizza">
                                            <span class="material-icons">local_pizza</span>
                                            Pizza
                                            <span class="material-icons so-dropdown-check">star</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="burger">
                                            <span class="material-icons">lunch_dining</span>
                                            Burger
                                            <span class="material-icons so-dropdown-check">star</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="sushi">
                                            <span class="material-icons">set_meal</span>
                                            Sushi
                                            <span class="material-icons so-dropdown-check">star</span>
                                        </div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Use any icon for selection indicator</small>
                            </div>

                            <!-- With Item Icons -->
                            <div class="so-form-group">
                                <label class="so-form-label">Items with Icons</label>
                                <div class="so-dropdown" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select status</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="active">
                                            <span class="material-icons" style="color: var(--so-accent-success);">check_circle</span>
                                            Active
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="pending">
                                            <span class="material-icons" style="color: var(--so-accent-warning);">schedule</span>
                                            Pending
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="inactive">
                                            <span class="material-icons" style="color: var(--so-accent-danger);">cancel</span>
                                            Inactive
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Icons on left, checkmark on right</small>
                            </div>

                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Default: background + check (no attribute needed) --&gt;
&lt;div class="so-dropdown" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Highlight only: just background color --&gt;
&lt;div class="so-dropdown" data-so-dropdown data-so-selection-style="highlight"&gt;...&lt;/div&gt;

&lt;!-- Check only: just checkmark, no background --&gt;
&lt;div class="so-dropdown" data-so-dropdown data-so-selection-style="check"&gt;...&lt;/div&gt;

&lt;!-- Custom selection icon (use any Material Icon) --&gt;
&lt;div class="so-dropdown-item" data-value="pizza"&gt;
    &lt;span class="material-icons"&gt;local_pizza&lt;/span&gt;
    Pizza
    &lt;span class="material-icons so-dropdown-check"&gt;star&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Item with colored icon --&gt;
&lt;div class="so-dropdown-item" data-value="active"&gt;
    &lt;span class="material-icons" style="color: var(--so-accent-success);"&gt;check_circle&lt;/span&gt;
    Active
    &lt;span class="material-icons so-dropdown-check"&gt;check&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 8: Multiple Selection -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Multiple Selection</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary); font-size: 14px;">
                            Enable multiple selection with <code>data-so-multiple</code>. Add <code>data-so-show-actions</code> for All/None links. Optionally limit selections with <code>data-so-max-selections</code>.
                        </p>

                        <div class="so-grid so-grid-cols-3 so-grid-cols-md-2 so-grid-cols-sm-1" style="gap: 24px;">

                            <!-- Multiple with All/None actions -->
                            <div class="so-form-group">
                                <label class="so-form-label">With All/None Actions</label>
                                <div class="so-dropdown so-dropdown-searchable" data-so-dropdown data-so-multiple="true" data-so-show-actions="true">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected placeholder">Select items</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-search">
                                            <input type="text" class="so-dropdown-search-input" placeholder="Search...">
                                        </div>
                                        <div class="so-dropdown-items">
                                            <div class="so-dropdown-item" data-value="apple">Apple</div>
                                            <div class="so-dropdown-item" data-value="banana">Banana</div>
                                            <div class="so-dropdown-item" data-value="cherry">Cherry</div>
                                            <div class="so-dropdown-item" data-value="date">Date</div>
                                            <div class="so-dropdown-item" data-value="elderberry">Elderberry</div>
                                            <div class="so-dropdown-item" data-value="fig">Fig</div>
                                            <div class="so-dropdown-item" data-value="grape">Grape</div>
                                        </div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Click All/None to quick select</small>
                            </div>

                            <!-- Multiple Selection (Checkbox style) -->
                            <div class="so-form-group">
                                <label class="so-form-label">Multiple (checkbox style)</label>
                                <div class="so-dropdown so-dropdown-searchable" data-so-dropdown data-so-multiple="true">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected placeholder">Select items</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-search">
                                            <input type="text" class="so-dropdown-search-input" placeholder="Search...">
                                        </div>
                                        <div class="so-dropdown-items">
                                            <div class="so-dropdown-item" data-value="red">Red</div>
                                            <div class="so-dropdown-item" data-value="green">Green</div>
                                            <div class="so-dropdown-item" data-value="blue">Blue</div>
                                            <div class="so-dropdown-item" data-value="yellow">Yellow</div>
                                            <div class="so-dropdown-item" data-value="purple">Purple</div>
                                        </div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Click multiple items to select</small>
                            </div>

                            <!-- Multiple with Max Selections -->
                            <div class="so-form-group">
                                <label class="so-form-label">Max 3 Selections</label>
                                <div class="so-dropdown so-dropdown-searchable" data-so-dropdown data-so-multiple="true" data-so-max-selections="3">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected placeholder">Select up to 3</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-search">
                                            <input type="text" class="so-dropdown-search-input" placeholder="Search...">
                                        </div>
                                        <div class="so-dropdown-items">
                                            <div class="so-dropdown-item" data-value="pizza">Pizza</div>
                                            <div class="so-dropdown-item" data-value="burger">Burger</div>
                                            <div class="so-dropdown-item" data-value="pasta">Pasta</div>
                                            <div class="so-dropdown-item" data-value="sushi">Sushi</div>
                                            <div class="so-dropdown-item" data-value="tacos">Tacos</div>
                                        </div>
                                    </div>
                                </div>
                                <small style="display: block; margin-top: 8px; color: var(--so-text-muted);">Limited to maximum 3 selections</small>
                            </div>

                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Multiple selection with All/None actions --&gt;
&lt;div class="so-dropdown so-dropdown-searchable" data-so-dropdown
     data-so-multiple="true"
     data-so-show-actions="true"&gt;
    &lt;button class="so-btn so-btn-light so-dropdown-trigger"&gt;...&lt;/button&gt;
    &lt;div class="so-dropdown-menu"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Custom action text --&gt;
&lt;div class="so-dropdown so-dropdown-searchable" data-so-dropdown
     data-so-multiple="true"
     data-so-show-actions="true"
     data-so-select-all-text="Select All"
     data-so-select-none-text="Clear"&gt;
    ...
&lt;/div&gt;

&lt;!-- Multiple with max selections --&gt;
&lt;div class="so-dropdown so-dropdown-searchable" data-so-dropdown
     data-so-multiple="true"
     data-so-max-selections="3"&gt;
    ...
&lt;/div&gt;

&lt;!-- JavaScript API for multiple selection --&gt;
&lt;script&gt;
const dropdown = SODropdown.getInstance('#my-dropdown');
dropdown.selectAll();       // Select all items
dropdown.selectNone();      // Deselect all items
dropdown.getValues();       // ['apple', 'banana']
dropdown.getTexts();        // ['Apple', 'Banana']
dropdown.clearSelection();  // Clear all selections
&lt;/script&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 9: Contextual Selection Colors -->
                <div class="so-card">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Contextual Selection Colors</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary); font-size: 14px;">
                            Apply contextual colors to the selected item state using <code>.so-dropdown-{context}</code> classes.
                        </p>

                        <div class="so-grid so-grid-cols-3 so-grid-cols-md-2 so-grid-cols-sm-1" style="gap: 24px;">

                            <!-- Primary (default) -->
                            <div class="so-form-group">
                                <label class="so-form-label">Primary (default)</label>
                                <div class="so-dropdown so-dropdown-primary" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">
                                            Option 1
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">
                                            Option 3
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Success -->
                            <div class="so-form-group">
                                <label class="so-form-label">Success</label>
                                <div class="so-dropdown so-dropdown-success" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">
                                            Option 1
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">
                                            Option 3
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Danger -->
                            <div class="so-form-group">
                                <label class="so-form-label">Danger</label>
                                <div class="so-dropdown so-dropdown-danger" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">
                                            Option 1
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">
                                            Option 3
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Warning -->
                            <div class="so-form-group">
                                <label class="so-form-label">Warning</label>
                                <div class="so-dropdown so-dropdown-warning" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">
                                            Option 1
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">
                                            Option 3
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Info -->
                            <div class="so-form-group">
                                <label class="so-form-label">Info</label>
                                <div class="so-dropdown so-dropdown-info" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">
                                            Option 1
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">
                                            Option 3
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Secondary -->
                            <div class="so-form-group">
                                <label class="so-form-label">Secondary</label>
                                <div class="so-dropdown so-dropdown-secondary" data-so-dropdown>
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected">Select option</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-item" data-value="1">
                                            Option 1
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="2">
                                            Option 2
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                        <div class="so-dropdown-item" data-value="3">
                                            Option 3
                                            <span class="material-icons so-dropdown-check">check</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h4 style="margin: 24px 0 16px 0; font-size: 14px; font-weight: 600;">Multiple Selection with Contextual Colors</h4>
                        <div class="so-grid so-grid-cols-3 so-grid-cols-md-2 so-grid-cols-sm-1" style="gap: 24px;">

                            <!-- Multiple Success -->
                            <div class="so-form-group">
                                <label class="so-form-label">Multiple (Success)</label>
                                <div class="so-dropdown so-dropdown-searchable so-dropdown-success" data-so-dropdown data-so-multiple="true">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected placeholder">Select items</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-items">
                                            <div class="so-dropdown-item" data-value="apple">Apple</div>
                                            <div class="so-dropdown-item" data-value="banana">Banana</div>
                                            <div class="so-dropdown-item" data-value="cherry">Cherry</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Multiple Danger -->
                            <div class="so-form-group">
                                <label class="so-form-label">Multiple (Danger)</label>
                                <div class="so-dropdown so-dropdown-searchable so-dropdown-danger" data-so-dropdown data-so-multiple="true">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected placeholder">Select items</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-items">
                                            <div class="so-dropdown-item" data-value="red">Red</div>
                                            <div class="so-dropdown-item" data-value="orange">Orange</div>
                                            <div class="so-dropdown-item" data-value="pink">Pink</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Multiple Info -->
                            <div class="so-form-group">
                                <label class="so-form-label">Multiple (Info)</label>
                                <div class="so-dropdown so-dropdown-searchable so-dropdown-info" data-so-dropdown data-so-multiple="true">
                                    <button type="button" class="so-btn so-btn-light so-dropdown-trigger">
                                        <span class="so-dropdown-selected placeholder">Select items</span>
                                        <span class="material-icons so-dropdown-arrow">expand_more</span>
                                    </button>
                                    <div class="so-dropdown-menu">
                                        <div class="so-dropdown-items">
                                            <div class="so-dropdown-item" data-value="css">CSS</div>
                                            <div class="so-dropdown-item" data-value="html">HTML</div>
                                            <div class="so-dropdown-item" data-value="js">JavaScript</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Code Example -->
                        <div class="so-code-block" style="margin-top: 24px;">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Primary selection color (default) --&gt;
&lt;div class="so-dropdown so-dropdown-primary" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Success selection color --&gt;
&lt;div class="so-dropdown so-dropdown-success" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Danger selection color --&gt;
&lt;div class="so-dropdown so-dropdown-danger" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Warning selection color --&gt;
&lt;div class="so-dropdown so-dropdown-warning" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Info selection color --&gt;
&lt;div class="so-dropdown so-dropdown-info" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Secondary selection color --&gt;
&lt;div class="so-dropdown so-dropdown-secondary" data-so-dropdown&gt;...&lt;/div&gt;

&lt;!-- Multiple selection with contextual color --&gt;
&lt;div class="so-dropdown so-dropdown-searchable so-dropdown-success"
     data-so-dropdown data-so-multiple="true"&gt;
    ...
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Checkboxes & Radios Pane -->
            <div class="so-tab-pane fade" id="pane-checkboxes" role="tabpanel">

                <!-- Section 1: Basic Checkboxes -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Checkboxes</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1" style="gap: 24px;">
                            <div>
                                <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">States</h5>
                                <div class="so-checkbox-group so-checkbox-group-vertical">
                                    <label class="so-checkbox">
                                        <input type="checkbox">
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                        <span class="so-checkbox-label">Default checkbox</span>
                                    </label>
                                    <label class="so-checkbox">
                                        <input type="checkbox" checked>
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                        <span class="so-checkbox-label">Checked checkbox</span>
                                    </label>
                                    <label class="so-checkbox" id="indeterminate-checkbox">
                                        <input type="checkbox">
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">remove</span>
                                        </span>
                                        <span class="so-checkbox-label">Indeterminate checkbox</span>
                                    </label>
                                    <label class="so-checkbox disabled">
                                        <input type="checkbox" disabled>
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                        <span class="so-checkbox-label">Disabled checkbox</span>
                                    </label>
                                    <label class="so-checkbox disabled">
                                        <input type="checkbox" checked disabled>
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                        <span class="so-checkbox-label">Disabled checked</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Inline Layout</h5>
                                <div class="so-checkbox-group so-checkbox-group-inline so-mb-4">
                                    <label class="so-checkbox">
                                        <input type="checkbox" checked>
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                        <span class="so-checkbox-label">Option A</span>
                                    </label>
                                    <label class="so-checkbox">
                                        <input type="checkbox">
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                        <span class="so-checkbox-label">Option B</span>
                                    </label>
                                    <label class="so-checkbox">
                                        <input type="checkbox">
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                        <span class="so-checkbox-label">Option C</span>
                                    </label>
                                </div>

                                <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Without Label</h5>
                                <div class="so-flex so-gap-3">
                                    <label class="so-checkbox">
                                        <input type="checkbox">
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                    </label>
                                    <label class="so-checkbox">
                                        <input type="checkbox" checked>
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">check</span>
                                        </span>
                                    </label>
                                    <label class="so-checkbox" id="indeterminate-checkbox-2">
                                        <input type="checkbox">
                                        <span class="so-checkbox-box">
                                            <span class="material-icons">remove</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="so-code-block so-mt-4">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Default Checkbox --&gt;
&lt;label class="so-checkbox"&gt;
    &lt;input type="checkbox"&gt;
    &lt;span class="so-checkbox-box"&gt;
        &lt;span class="material-icons"&gt;check&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="so-checkbox-label"&gt;Default checkbox&lt;/span&gt;
&lt;/label&gt;

&lt;!-- Indeterminate (set via JavaScript) --&gt;
&lt;label class="so-checkbox"&gt;
    &lt;input type="checkbox" id="myCheckbox"&gt;
    &lt;span class="so-checkbox-box"&gt;
        &lt;span class="material-icons"&gt;remove&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="so-checkbox-label"&gt;Indeterminate&lt;/span&gt;
&lt;/label&gt;
&lt;script&gt;document.getElementById('myCheckbox').indeterminate = true;&lt;/script&gt;

&lt;!-- Disabled --&gt;
&lt;label class="so-checkbox disabled"&gt;
    &lt;input type="checkbox" disabled&gt;
    ...
&lt;/label&gt;

&lt;!-- Inline Group --&gt;
&lt;div class="so-checkbox-group so-checkbox-group-inline"&gt;
    &lt;label class="so-checkbox"&gt;...&lt;/label&gt;
    &lt;label class="so-checkbox"&gt;...&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Vertical Group --&gt;
&lt;div class="so-checkbox-group so-checkbox-group-vertical"&gt;
    &lt;label class="so-checkbox"&gt;...&lt;/label&gt;
    &lt;label class="so-checkbox"&gt;...&lt;/label&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Checkbox Sizes -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Checkbox Sizes</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-flex so-gap-5 so-items-start so-flex-wrap">
                            <label class="so-checkbox so-checkbox-sm">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Small</span>
                            </label>
                            <label class="so-checkbox">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Default</span>
                            </label>
                            <label class="so-checkbox so-checkbox-lg">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Large</span>
                            </label>
                        </div>

                        <div class="so-code-block so-mt-4">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;label class="so-checkbox so-checkbox-sm"&gt;...&lt;/label&gt;
&lt;label class="so-checkbox"&gt;...&lt;/label&gt;
&lt;label class="so-checkbox so-checkbox-lg"&gt;...&lt;/label&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Checkbox Colors -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Checkbox Colors</h3>
                    </div>
                    <div class="so-card-body">
                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Color Variants</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap so-mb-4">
                            <label class="so-checkbox so-checkbox-primary">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Primary</span>
                            </label>
                            <label class="so-checkbox so-checkbox-secondary">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Secondary</span>
                            </label>
                            <label class="so-checkbox so-checkbox-success">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Success</span>
                            </label>
                            <label class="so-checkbox so-checkbox-danger">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Danger</span>
                            </label>
                            <label class="so-checkbox so-checkbox-warning">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Warning</span>
                            </label>
                            <label class="so-checkbox so-checkbox-info">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Info</span>
                            </label>
                        </div>

                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">With Contextual Labels (label color matches when checked)</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap">
                            <label class="so-checkbox so-checkbox-primary so-checkbox-label-contextual">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Primary</span>
                            </label>
                            <label class="so-checkbox so-checkbox-success so-checkbox-label-contextual">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Success</span>
                            </label>
                            <label class="so-checkbox so-checkbox-danger so-checkbox-label-contextual">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Danger</span>
                            </label>
                            <label class="so-checkbox so-checkbox-warning so-checkbox-label-contextual">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Warning</span>
                            </label>
                            <label class="so-checkbox so-checkbox-info so-checkbox-label-contextual">
                                <input type="checkbox" checked>
                                <span class="so-checkbox-box">
                                    <span class="material-icons">check</span>
                                </span>
                                <span class="so-checkbox-label">Info</span>
                            </label>
                        </div>

                        <div class="so-code-block so-mt-4">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Color variant --&gt;
&lt;label class="so-checkbox so-checkbox-primary"&gt;...&lt;/label&gt;
&lt;label class="so-checkbox so-checkbox-success"&gt;...&lt;/label&gt;
&lt;label class="so-checkbox so-checkbox-danger"&gt;...&lt;/label&gt;
&lt;label class="so-checkbox so-checkbox-warning"&gt;...&lt;/label&gt;
&lt;label class="so-checkbox so-checkbox-info"&gt;...&lt;/label&gt;

&lt;!-- With contextual label color (label matches when checked) --&gt;
&lt;label class="so-checkbox so-checkbox-success so-checkbox-label-contextual"&gt;
    &lt;input type="checkbox"&gt;
    &lt;span class="so-checkbox-box"&gt;
        &lt;span class="material-icons"&gt;check&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="so-checkbox-label"&gt;Success&lt;/span&gt;
&lt;/label&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Radio Buttons -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Radio Buttons</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1" style="gap: 24px;">
                            <div>
                                <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Vertical Group (Default)</h5>
                                <div class="so-radio-group so-radio-group-vertical">
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-1" value="1">
                                        <span class="so-radio-circle"></span>
                                        <span class="so-radio-label">Option 1</span>
                                    </label>
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-1" value="2" checked>
                                        <span class="so-radio-circle"></span>
                                        <span class="so-radio-label">Option 2 (Selected)</span>
                                    </label>
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-1" value="3">
                                        <span class="so-radio-circle"></span>
                                        <span class="so-radio-label">Option 3</span>
                                    </label>
                                    <label class="so-radio disabled">
                                        <input type="radio" name="radio-demo-1" value="4" disabled>
                                        <span class="so-radio-circle"></span>
                                        <span class="so-radio-label">Disabled option</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Inline Layout</h5>
                                <div class="so-radio-group so-radio-group-inline so-mb-4">
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-2" value="a" checked>
                                        <span class="so-radio-circle"></span>
                                        <span class="so-radio-label">Option A</span>
                                    </label>
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-2" value="b">
                                        <span class="so-radio-circle"></span>
                                        <span class="so-radio-label">Option B</span>
                                    </label>
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-2" value="c">
                                        <span class="so-radio-circle"></span>
                                        <span class="so-radio-label">Option C</span>
                                    </label>
                                </div>

                                <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Without Label</h5>
                                <div class="so-flex so-gap-3">
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-3" value="1">
                                        <span class="so-radio-circle"></span>
                                    </label>
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-3" value="2" checked>
                                        <span class="so-radio-circle"></span>
                                    </label>
                                    <label class="so-radio">
                                        <input type="radio" name="radio-demo-3" value="3">
                                        <span class="so-radio-circle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="so-code-block so-mt-4">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Radio Button --&gt;
&lt;label class="so-radio"&gt;
    &lt;input type="radio" name="group" value="1"&gt;
    &lt;span class="so-radio-circle"&gt;&lt;/span&gt;
    &lt;span class="so-radio-label"&gt;Option 1&lt;/span&gt;
&lt;/label&gt;

&lt;!-- Vertical Group --&gt;
&lt;div class="so-radio-group so-radio-group-vertical"&gt;
    &lt;label class="so-radio"&gt;...&lt;/label&gt;
    &lt;label class="so-radio"&gt;...&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Inline Group --&gt;
&lt;div class="so-radio-group so-radio-group-inline"&gt;
    &lt;label class="so-radio"&gt;...&lt;/label&gt;
    &lt;label class="so-radio"&gt;...&lt;/label&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Radio Sizes -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Radio Sizes</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-flex so-gap-5 so-items-start so-flex-wrap">
                            <label class="so-radio so-radio-sm">
                                <input type="radio" name="radio-size" value="sm" checked>
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Small</span>
                            </label>
                            <label class="so-radio">
                                <input type="radio" name="radio-size" value="md">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Default</span>
                            </label>
                            <label class="so-radio so-radio-lg">
                                <input type="radio" name="radio-size" value="lg">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Large</span>
                            </label>
                        </div>

                        <div class="so-code-block so-mt-4">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;label class="so-radio so-radio-sm"&gt;...&lt;/label&gt;
&lt;label class="so-radio"&gt;...&lt;/label&gt;
&lt;label class="so-radio so-radio-lg"&gt;...&lt;/label&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 6: Radio Colors -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Radio Colors</h3>
                    </div>
                    <div class="so-card-body">
                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Color Variants</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap so-mb-4">
                            <label class="so-radio so-radio-primary">
                                <input type="radio" name="radio-color" value="primary" checked>
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Primary</span>
                            </label>
                            <label class="so-radio so-radio-secondary">
                                <input type="radio" name="radio-color" value="secondary">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Secondary</span>
                            </label>
                            <label class="so-radio so-radio-success">
                                <input type="radio" name="radio-color" value="success">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Success</span>
                            </label>
                            <label class="so-radio so-radio-danger">
                                <input type="radio" name="radio-color" value="danger">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Danger</span>
                            </label>
                            <label class="so-radio so-radio-warning">
                                <input type="radio" name="radio-color" value="warning">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Warning</span>
                            </label>
                            <label class="so-radio so-radio-info">
                                <input type="radio" name="radio-color" value="info">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Info</span>
                            </label>
                        </div>

                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">With Contextual Labels (label color matches when selected)</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap">
                            <label class="so-radio so-radio-primary so-radio-label-contextual">
                                <input type="radio" name="radio-color-contextual" value="primary" checked>
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Primary</span>
                            </label>
                            <label class="so-radio so-radio-success so-radio-label-contextual">
                                <input type="radio" name="radio-color-contextual" value="success">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Success</span>
                            </label>
                            <label class="so-radio so-radio-danger so-radio-label-contextual">
                                <input type="radio" name="radio-color-contextual" value="danger">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Danger</span>
                            </label>
                            <label class="so-radio so-radio-warning so-radio-label-contextual">
                                <input type="radio" name="radio-color-contextual" value="warning">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Warning</span>
                            </label>
                            <label class="so-radio so-radio-info so-radio-label-contextual">
                                <input type="radio" name="radio-color-contextual" value="info">
                                <span class="so-radio-circle"></span>
                                <span class="so-radio-label">Info</span>
                            </label>
                        </div>

                        <div class="so-code-block so-mt-4">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Color variant --&gt;
&lt;label class="so-radio so-radio-primary"&gt;...&lt;/label&gt;
&lt;label class="so-radio so-radio-success"&gt;...&lt;/label&gt;
&lt;label class="so-radio so-radio-danger"&gt;...&lt;/label&gt;

&lt;!-- With contextual label color --&gt;
&lt;label class="so-radio so-radio-success so-radio-label-contextual"&gt;
    &lt;input type="radio" name="group" value="1"&gt;
    &lt;span class="so-radio-circle"&gt;&lt;/span&gt;
    &lt;span class="so-radio-label"&gt;Success&lt;/span&gt;
&lt;/label&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Section 7: Switches -->
                <div class="so-card so-mt-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Switches</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1" style="gap: 24px;">
                            <div>
                                <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Basic Switches</h5>
                                <div class="so-flex so-flex-col so-gap-3">
                                    <label class="so-switch">
                                        <input type="checkbox">
                                        <span class="so-switch-track"></span>
                                        <span class="so-switch-label">Default switch</span>
                                    </label>
                                    <label class="so-switch">
                                        <input type="checkbox" checked>
                                        <span class="so-switch-track"></span>
                                        <span class="so-switch-label">Checked switch</span>
                                    </label>
                                    <label class="so-switch disabled">
                                        <input type="checkbox" disabled>
                                        <span class="so-switch-track"></span>
                                        <span class="so-switch-label">Disabled switch</span>
                                    </label>
                                    <label class="so-switch disabled">
                                        <input type="checkbox" checked disabled>
                                        <span class="so-switch-track"></span>
                                        <span class="so-switch-label">Disabled checked</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Switch Sizes</h5>
                                <div class="so-flex so-flex-col so-gap-3">
                                    <label class="so-switch so-switch-sm">
                                        <input type="checkbox" checked>
                                        <span class="so-switch-track"></span>
                                        <span class="so-switch-label">Small</span>
                                    </label>
                                    <label class="so-switch">
                                        <input type="checkbox" checked>
                                        <span class="so-switch-track"></span>
                                        <span class="so-switch-label">Default</span>
                                    </label>
                                    <label class="so-switch so-switch-lg">
                                        <input type="checkbox" checked>
                                        <span class="so-switch-track"></span>
                                        <span class="so-switch-label">Large</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <h5 class="so-mb-3 so-mt-4" style="font-size: 13px; color: var(--so-text-secondary);">Color Variants</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap so-mb-4">
                            <label class="so-switch so-switch-primary">
                                <input type="checkbox" checked>
                                <span class="so-switch-track"></span>
                                <span class="so-switch-label">Primary</span>
                            </label>
                            <label class="so-switch so-switch-secondary">
                                <input type="checkbox" checked>
                                <span class="so-switch-track"></span>
                                <span class="so-switch-label">Secondary</span>
                            </label>
                            <label class="so-switch so-switch-success">
                                <input type="checkbox" checked>
                                <span class="so-switch-track"></span>
                                <span class="so-switch-label">Success</span>
                            </label>
                            <label class="so-switch so-switch-danger">
                                <input type="checkbox" checked>
                                <span class="so-switch-track"></span>
                                <span class="so-switch-label">Danger</span>
                            </label>
                            <label class="so-switch so-switch-warning">
                                <input type="checkbox" checked>
                                <span class="so-switch-track"></span>
                                <span class="so-switch-label">Warning</span>
                            </label>
                            <label class="so-switch so-switch-info">
                                <input type="checkbox" checked>
                                <span class="so-switch-track"></span>
                                <span class="so-switch-label">Info</span>
                            </label>
                        </div>

                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Contextual Label Colors</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap so-mb-4">
                            <label class="so-switch so-switch-success so-switch-label-contextual">
                                <input type="checkbox" checked>
                                <span class="so-switch-track"></span>
                                <span class="so-switch-label">Success contextual</span>
                            </label>
                            <label class="so-switch so-switch-danger so-switch-label-contextual">
                                <input type="checkbox" checked>
                                <span class="so-switch-track"></span>
                                <span class="so-switch-label">Danger contextual</span>
                            </label>
                        </div>

                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Switch with Inner Icons</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap so-items-center so-mb-4">
                            <label class="so-switch so-switch-icon so-switch-success">
                                <input type="checkbox">
                                <span class="so-switch-track">
                                    <span class="so-switch-on"><span class="material-icons">check</span></span>
                                    <span class="so-switch-off"><span class="material-icons">close</span></span>
                                </span>
                                <span class="so-switch-label">Icon switch</span>
                            </label>
                            <label class="so-switch so-switch-icon so-switch-success">
                                <input type="checkbox" checked>
                                <span class="so-switch-track">
                                    <span class="so-switch-on"><span class="material-icons">check</span></span>
                                    <span class="so-switch-off"><span class="material-icons">close</span></span>
                                </span>
                                <span class="so-switch-label">Checked</span>
                            </label>
                            <label class="so-switch so-switch-icon so-switch-danger">
                                <input type="checkbox" checked>
                                <span class="so-switch-track">
                                    <span class="so-switch-on"><span class="material-icons">notifications_active</span></span>
                                    <span class="so-switch-off"><span class="material-icons">notifications_off</span></span>
                                </span>
                                <span class="so-switch-label">Notifications</span>
                            </label>
                        </div>

                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Switch with Inner Text</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap so-items-center so-mb-4">
                            <label class="so-switch so-switch-text so-switch-success">
                                <input type="checkbox">
                                <span class="so-switch-track">
                                    <span class="so-switch-on">ON</span>
                                    <span class="so-switch-off">OFF</span>
                                </span>
                                <span class="so-switch-label">Text switch</span>
                            </label>
                            <label class="so-switch so-switch-text so-switch-success">
                                <input type="checkbox" checked>
                                <span class="so-switch-track">
                                    <span class="so-switch-on">ON</span>
                                    <span class="so-switch-off">OFF</span>
                                </span>
                                <span class="so-switch-label">Checked</span>
                            </label>
                            <label class="so-switch so-switch-text so-switch-primary">
                                <input type="checkbox" checked>
                                <span class="so-switch-track">
                                    <span class="so-switch-on">YES</span>
                                    <span class="so-switch-off">NO</span>
                                </span>
                                <span class="so-switch-label">Yes/No</span>
                            </label>
                        </div>

                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Switch with Icon + Text</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap so-items-center so-mb-4">
                            <label class="so-switch so-switch-icon-text so-switch-success">
                                <input type="checkbox">
                                <span class="so-switch-track">
                                    <span class="so-switch-on"><span class="material-icons">check</span>ON</span>
                                    <span class="so-switch-off">OFF<span class="material-icons">close</span></span>
                                </span>
                                <span class="so-switch-label">Icon + Text</span>
                            </label>
                            <label class="so-switch so-switch-icon-text so-switch-success">
                                <input type="checkbox" checked>
                                <span class="so-switch-track">
                                    <span class="so-switch-on"><span class="material-icons">check</span>ON</span>
                                    <span class="so-switch-off">OFF<span class="material-icons">close</span></span>
                                </span>
                                <span class="so-switch-label">Checked</span>
                            </label>
                        </div>

                        <h5 class="so-mb-3" style="font-size: 13px; color: var(--so-text-secondary);">Inner Switch Sizes</h5>
                        <div class="so-flex so-gap-4 so-flex-wrap so-items-center">
                            <label class="so-switch so-switch-icon so-switch-icon-sm so-switch-success">
                                <input type="checkbox" checked>
                                <span class="so-switch-track">
                                    <span class="so-switch-on"><span class="material-icons">check</span></span>
                                    <span class="so-switch-off"><span class="material-icons">close</span></span>
                                </span>
                                <span class="so-switch-label">Small</span>
                            </label>
                            <label class="so-switch so-switch-icon so-switch-success">
                                <input type="checkbox" checked>
                                <span class="so-switch-track">
                                    <span class="so-switch-on"><span class="material-icons">check</span></span>
                                    <span class="so-switch-off"><span class="material-icons">close</span></span>
                                </span>
                                <span class="so-switch-label">Default</span>
                            </label>
                            <label class="so-switch so-switch-icon so-switch-icon-lg so-switch-success">
                                <input type="checkbox" checked>
                                <span class="so-switch-track">
                                    <span class="so-switch-on"><span class="material-icons">check</span></span>
                                    <span class="so-switch-off"><span class="material-icons">close</span></span>
                                </span>
                                <span class="so-switch-label">Large</span>
                            </label>
                        </div>

                        <div class="so-code-block so-mt-4">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Basic Switch --&gt;
&lt;label class="so-switch"&gt;
    &lt;input type="checkbox"&gt;
    &lt;span class="so-switch-track"&gt;&lt;/span&gt;
    &lt;span class="so-switch-label"&gt;Switch label&lt;/span&gt;
&lt;/label&gt;

&lt;!-- Size Variants --&gt;
&lt;label class="so-switch so-switch-sm"&gt;...&lt;/label&gt;
&lt;label class="so-switch"&gt;...&lt;/label&gt;
&lt;label class="so-switch so-switch-lg"&gt;...&lt;/label&gt;

&lt;!-- Color Variants --&gt;
&lt;label class="so-switch so-switch-primary"&gt;...&lt;/label&gt;
&lt;label class="so-switch so-switch-success"&gt;...&lt;/label&gt;
&lt;label class="so-switch so-switch-danger"&gt;...&lt;/label&gt;

&lt;!-- Contextual Label Color --&gt;
&lt;label class="so-switch so-switch-success so-switch-label-contextual"&gt;
    &lt;input type="checkbox" checked&gt;
    &lt;span class="so-switch-track"&gt;&lt;/span&gt;
    &lt;span class="so-switch-label"&gt;Success&lt;/span&gt;
&lt;/label&gt;

&lt;!-- Switch with Inner Icons --&gt;
&lt;label class="so-switch so-switch-icon so-switch-success"&gt;
    &lt;input type="checkbox"&gt;
    &lt;span class="so-switch-track"&gt;
        &lt;span class="so-switch-on"&gt;&lt;span class="material-icons"&gt;check&lt;/span&gt;&lt;/span&gt;
        &lt;span class="so-switch-off"&gt;&lt;span class="material-icons"&gt;close&lt;/span&gt;&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="so-switch-label"&gt;Icon switch&lt;/span&gt;
&lt;/label&gt;

&lt;!-- Switch with Inner Text --&gt;
&lt;label class="so-switch so-switch-text so-switch-success"&gt;
    &lt;input type="checkbox"&gt;
    &lt;span class="so-switch-track"&gt;
        &lt;span class="so-switch-on"&gt;ON&lt;/span&gt;
        &lt;span class="so-switch-off"&gt;OFF&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="so-switch-label"&gt;Text switch&lt;/span&gt;
&lt;/label&gt;

&lt;!-- Switch with Icon + Text --&gt;
&lt;label class="so-switch so-switch-icon-text so-switch-success"&gt;
    &lt;input type="checkbox"&gt;
    &lt;span class="so-switch-track"&gt;
        &lt;span class="so-switch-on"&gt;&lt;span class="material-icons"&gt;check&lt;/span&gt;ON&lt;/span&gt;
        &lt;span class="so-switch-off"&gt;OFF&lt;span class="material-icons"&gt;close&lt;/span&gt;&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="so-switch-label"&gt;Icon + Text&lt;/span&gt;
&lt;/label&gt;</code></pre>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Badges Pane -->
            <div class="so-tab-pane fade" id="pane-badges" role="tabpanel">
                <div class="so-card">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Badges</h3>
                    </div>
                    <div class="so-card-body">
                        <h4 style="margin-bottom: 12px; font-size: 14px; color: var(--so-text-secondary);">Solid Badges</h4>
                        <div class="so-flex so-gap-2 so-flex-wrap so-mb-4">
                            <span class="so-badge so-badge-primary">Primary</span>
                            <span class="so-badge so-badge-secondary">Secondary</span>
                            <span class="so-badge so-badge-success">Success</span>
                            <span class="so-badge so-badge-danger">Danger</span>
                            <span class="so-badge so-badge-warning">Warning</span>
                            <span class="so-badge so-badge-info">Info</span>
                        </div>

                        <h4 style="margin-bottom: 12px; font-size: 14px; color: var(--so-text-secondary);">Soft Badges</h4>
                        <div class="so-flex so-gap-2 so-flex-wrap so-mb-4">
                            <span class="so-badge so-badge-soft-primary">Primary</span>
                            <span class="so-badge so-badge-soft-success">Success</span>
                            <span class="so-badge so-badge-soft-danger">Danger</span>
                            <span class="so-badge so-badge-soft-warning">Warning</span>
                            <span class="so-badge so-badge-soft-info">Info</span>
                        </div>

                        <h4 style="margin-bottom: 12px; font-size: 14px; color: var(--so-text-secondary);">Badge Sizes</h4>
                        <div class="so-flex so-gap-2 so-items-center so-flex-wrap so-mb-4">
                            <span class="so-badge so-badge-primary so-badge-sm">Small</span>
                            <span class="so-badge so-badge-primary">Default</span>
                            <span class="so-badge so-badge-primary so-badge-lg">Large</span>
                        </div>

                        <div class="so-code-block">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;!-- Solid badges --&gt;
&lt;span class="so-badge so-badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="so-badge so-badge-success"&gt;Success&lt;/span&gt;
&lt;span class="so-badge so-badge-danger"&gt;Danger&lt;/span&gt;

&lt;!-- Soft badges --&gt;
&lt;span class="so-badge so-badge-soft-primary"&gt;Primary&lt;/span&gt;
&lt;span class="so-badge so-badge-soft-success"&gt;Success&lt;/span&gt;

&lt;!-- Badge sizes --&gt;
&lt;span class="so-badge so-badge-primary so-badge-sm"&gt;Small&lt;/span&gt;
&lt;span class="so-badge so-badge-primary so-badge-lg"&gt;Large&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards Pane -->
            <div class="so-tab-pane fade" id="pane-cards" role="tabpanel">
                <div class="so-card">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Cards</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-grid so-grid-cols-3 so-grid-cols-sm-1 so-mb-4">
                            <div class="so-card">
                                <div class="so-card-header">
                                    <h3 class="so-card-title">Card Title</h3>
                                    <button class="so-btn so-btn-icon so-btn-ghost">
                                        <span class="material-icons">more_vert</span>
                                    </button>
                                </div>
                                <div class="so-card-body">
                                    <p>This is a basic card with header and body sections.</p>
                                </div>
                            </div>

                            <div class="so-card">
                                <div class="so-card-body">
                                    <h4 style="margin-bottom: 8px;">Simple Card</h4>
                                    <p style="color: var(--so-text-secondary);">A card without the header section.</p>
                                </div>
                                <div class="so-card-footer">
                                    <button class="so-btn so-btn-outline so-btn-sm">Cancel</button>
                                    <button class="so-btn so-btn-primary so-btn-sm">Save</button>
                                </div>
                            </div>

                            <div class="so-card">
                                <div class="so-card-header">
                                    <h3 class="so-card-title">With Badge</h3>
                                    <span class="so-badge so-badge-soft-primary">New</span>
                                </div>
                                <div class="so-card-body">
                                    <p>Card header with a badge indicator.</p>
                                </div>
                            </div>
                        </div>

                        <div class="so-code-block">
                            <div class="so-code-header">
                                <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                <button class="so-code-copy" onclick="copyCode(this)">
                                    <span class="material-icons">content_copy</span>
                                </button>
                            </div>
                            <pre class="so-code-content"><code class="language-html">&lt;div class="so-card"&gt;
    &lt;div class="so-card-header"&gt;
        &lt;h3 class="so-card-title"&gt;Card Title&lt;/h3&gt;
    &lt;/div&gt;
    &lt;div class="so-card-body"&gt;
        &lt;p&gt;Card content goes here.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="so-card-footer"&gt;
        &lt;button class="so-btn so-btn-primary"&gt;Action&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs Pane -->
            <div class="so-tab-pane fade" id="pane-tabs" role="tabpanel">
                <!-- Default (Underline) Tabs -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Default Tabs (Underline)</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-tabs" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-default-1">Home</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-default-2">Profile</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-default-3">Settings</button>
                                    <button class="so-tab disabled" role="tab">Disabled</button>
                                </div>
                                <div class="so-tab-content" style="margin-top: 16px;">
                                    <div class="so-tab-pane fade show active" id="demo-default-1" role="tabpanel">
                                        <p>Home tab content. This is the default underline style.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-default-2" role="tabpanel">
                                        <p>Profile tab content with user information.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-default-3" role="tabpanel">
                                        <p>Settings tab content for configuration options.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-tabs" role="tablist" data-so-tabs&gt;
    &lt;button class="so-tab active" role="tab" data-so-target="#panel1"&gt;Home&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel2"&gt;Profile&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel3"&gt;Settings&lt;/button&gt;
    &lt;button class="so-tab disabled" role="tab"&gt;Disabled&lt;/button&gt;
&lt;/div&gt;

&lt;div class="so-tab-content"&gt;
    &lt;div class="so-tab-pane fade show active" id="panel1" role="tabpanel"&gt;
        &lt;p&gt;Home tab content.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="so-tab-pane fade" id="panel2" role="tabpanel"&gt;
        &lt;p&gt;Profile tab content.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="so-tab-pane fade" id="panel3" role="tabpanel"&gt;
        &lt;p&gt;Settings tab content.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pills Variant -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Pills Variant</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-tabs so-tabs-pills" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-pills-1">Overview</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-pills-2">Features</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-pills-3">Pricing</button>
                                </div>
                                <div class="so-tab-content" style="margin-top: 16px;">
                                    <div class="so-tab-pane fade show active" id="demo-pills-1" role="tabpanel">
                                        <p>Pills have a rounded background on the active tab.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-pills-2" role="tabpanel">
                                        <p>Features content goes here.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-pills-3" role="tabpanel">
                                        <p>Pricing information displayed here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-tabs so-tabs-pills" role="tablist" data-so-tabs&gt;
    &lt;button class="so-tab active" role="tab" data-so-target="#panel1"&gt;Overview&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel2"&gt;Features&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel3"&gt;Pricing&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boxed/Segmented Variant -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Boxed/Segmented Variant</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-tabs so-tabs-boxed" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-boxed-1">Day</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-boxed-2">Week</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-boxed-3">Month</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-boxed-4">Year</button>
                                </div>
                                <div class="so-tab-content" style="margin-top: 16px;">
                                    <div class="so-tab-pane fade show active" id="demo-boxed-1" role="tabpanel">
                                        <p>Daily view - Boxed tabs look like a segmented control.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-boxed-2" role="tabpanel">
                                        <p>Weekly view content.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-boxed-3" role="tabpanel">
                                        <p>Monthly view content.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-boxed-4" role="tabpanel">
                                        <p>Yearly view content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-tabs so-tabs-boxed" role="tablist" data-so-tabs&gt;
    &lt;button class="so-tab active" role="tab" data-so-target="#panel1"&gt;Day&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel2"&gt;Week&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel3"&gt;Month&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel4"&gt;Year&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ghost Variant -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Ghost Variant</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-tabs so-tabs-ghost" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-ghost-1">All</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-ghost-2">Active</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-ghost-3">Completed</button>
                                </div>
                                <div class="so-tab-content" style="margin-top: 16px;">
                                    <div class="so-tab-pane fade show active" id="demo-ghost-1" role="tabpanel">
                                        <p>Ghost tabs have minimal styling with a soft background on active.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-ghost-2" role="tabpanel">
                                        <p>Active items content.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-ghost-3" role="tabpanel">
                                        <p>Completed items content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-tabs so-tabs-ghost" role="tablist" data-so-tabs&gt;
    &lt;button class="so-tab active" role="tab" data-so-target="#panel1"&gt;All&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel2"&gt;Active&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel3"&gt;Completed&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bordered Variant -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Bordered Variant</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-tabs so-tabs-bordered" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-bordered-1">Details</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-bordered-2">Reviews</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-bordered-3">FAQ</button>
                                </div>
                                <div class="so-tab-content" style="margin-top: 16px;">
                                    <div class="so-tab-pane fade show active" id="demo-bordered-1" role="tabpanel">
                                        <p>Bordered tabs have individual borders around each tab.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-bordered-2" role="tabpanel">
                                        <p>Reviews content goes here.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-bordered-3" role="tabpanel">
                                        <p>Frequently asked questions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-tabs so-tabs-bordered" role="tablist" data-so-tabs&gt;
    &lt;button class="so-tab active" role="tab" data-so-target="#panel1"&gt;Details&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel2"&gt;Reviews&lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel3"&gt;FAQ&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Size Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Size Variants</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <h5 style="margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Small Tabs</h5>
                                <div class="so-tabs so-tabs-pills so-tabs-sm so-mb-4" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-sm-1">Tab 1</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-sm-2">Tab 2</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-sm-3">Tab 3</button>
                                </div>

                                <h5 style="margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Default Tabs</h5>
                                <div class="so-tabs so-tabs-pills so-mb-4" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-def-1">Tab 1</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-def-2">Tab 2</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-def-3">Tab 3</button>
                                </div>

                                <h5 style="margin-bottom: 12px; font-size: 13px; color: var(--so-text-secondary);">Large Tabs</h5>
                                <div class="so-tabs so-tabs-pills so-tabs-lg" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-lg-1">Tab 1</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-lg-2">Tab 2</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-lg-3">Tab 3</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;!-- Small --&gt;
&lt;div class="so-tabs so-tabs-pills so-tabs-sm" role="tablist"&gt;...&lt;/div&gt;

&lt;!-- Default --&gt;
&lt;div class="so-tabs so-tabs-pills" role="tablist"&gt;...&lt;/div&gt;

&lt;!-- Large --&gt;
&lt;div class="so-tabs so-tabs-pills so-tabs-lg" role="tablist"&gt;...&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contextual Colors -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Contextual Colors</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-grid so-grid-cols-2 so-grid-cols-sm-1" style="gap: 24px;">
                                    <div>
                                        <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Primary</h5>
                                        <div class="so-tabs so-tabs-pills so-tabs-primary so-tabs-sm" role="tablist" data-so-tabs>
                                            <button class="so-tab active" role="tab">Active</button>
                                            <button class="so-tab" role="tab">Tab 2</button>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Success</h5>
                                        <div class="so-tabs so-tabs-pills so-tabs-success so-tabs-sm" role="tablist" data-so-tabs>
                                            <button class="so-tab active" role="tab">Active</button>
                                            <button class="so-tab" role="tab">Tab 2</button>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Danger</h5>
                                        <div class="so-tabs so-tabs-pills so-tabs-danger so-tabs-sm" role="tablist" data-so-tabs>
                                            <button class="so-tab active" role="tab">Active</button>
                                            <button class="so-tab" role="tab">Tab 2</button>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Warning</h5>
                                        <div class="so-tabs so-tabs-pills so-tabs-warning so-tabs-sm" role="tablist" data-so-tabs>
                                            <button class="so-tab active" role="tab">Active</button>
                                            <button class="so-tab" role="tab">Tab 2</button>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Info</h5>
                                        <div class="so-tabs so-tabs-pills so-tabs-info so-tabs-sm" role="tablist" data-so-tabs>
                                            <button class="so-tab active" role="tab">Active</button>
                                            <button class="so-tab" role="tab">Tab 2</button>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Secondary</h5>
                                        <div class="so-tabs so-tabs-pills so-tabs-secondary so-tabs-sm" role="tablist" data-so-tabs>
                                            <button class="so-tab active" role="tab">Active</button>
                                            <button class="so-tab" role="tab">Tab 2</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-tabs so-tabs-pills so-tabs-primary"&gt;...&lt;/div&gt;
&lt;div class="so-tabs so-tabs-pills so-tabs-success"&gt;...&lt;/div&gt;
&lt;div class="so-tabs so-tabs-pills so-tabs-danger"&gt;...&lt;/div&gt;
&lt;div class="so-tabs so-tabs-pills so-tabs-warning"&gt;...&lt;/div&gt;
&lt;div class="so-tabs so-tabs-pills so-tabs-info"&gt;...&lt;/div&gt;
&lt;div class="so-tabs so-tabs-pills so-tabs-secondary"&gt;...&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs with Icons -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Tabs with Icons</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-tabs so-tabs-pills" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab" data-so-target="#demo-icons-1">
                                        <span class="material-icons">home</span>
                                        Home
                                    </button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-icons-2">
                                        <span class="material-icons">person</span>
                                        Profile
                                    </button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-icons-3">
                                        <span class="material-icons">mail</span>
                                        Messages
                                    </button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-icons-4">
                                        <span class="material-icons">settings</span>
                                        Settings
                                    </button>
                                </div>
                                <div class="so-tab-content" style="margin-top: 16px;">
                                    <div class="so-tab-pane fade show active" id="demo-icons-1" role="tabpanel">
                                        <p>Home content with icon in tab.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-icons-2" role="tabpanel">
                                        <p>Profile content.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-icons-3" role="tabpanel">
                                        <p>Messages content.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-icons-4" role="tabpanel">
                                        <p>Settings content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-tabs so-tabs-pills" role="tablist" data-so-tabs&gt;
    &lt;button class="so-tab active" role="tab" data-so-target="#panel1"&gt;
        &lt;span class="material-icons"&gt;home&lt;/span&gt;
        Home
    &lt;/button&gt;
    &lt;button class="so-tab" role="tab" data-so-target="#panel2"&gt;
        &lt;span class="material-icons"&gt;person&lt;/span&gt;
        Profile
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vertical Tabs -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Vertical Tabs</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-tabs-container so-tabs-container-vertical">
                                    <div class="so-tabs so-tabs-vertical" role="tablist" data-so-tabs>
                                        <button class="so-tab active" role="tab" data-so-target="#demo-vert-1">General</button>
                                        <button class="so-tab" role="tab" data-so-target="#demo-vert-2">Security</button>
                                        <button class="so-tab" role="tab" data-so-target="#demo-vert-3">Notifications</button>
                                        <button class="so-tab" role="tab" data-so-target="#demo-vert-4">Privacy</button>
                                    </div>
                                    <div class="so-tab-content">
                                        <div class="so-tab-pane fade show active" id="demo-vert-1" role="tabpanel">
                                            <h5 style="margin-bottom: 8px;">General Settings</h5>
                                            <p>Configure your general application settings here. Vertical tabs are great for settings pages with many sections.</p>
                                        </div>
                                        <div class="so-tab-pane fade" id="demo-vert-2" role="tabpanel">
                                            <h5 style="margin-bottom: 8px;">Security Settings</h5>
                                            <p>Manage your security preferences and two-factor authentication.</p>
                                        </div>
                                        <div class="so-tab-pane fade" id="demo-vert-3" role="tabpanel">
                                            <h5 style="margin-bottom: 8px;">Notification Preferences</h5>
                                            <p>Control which notifications you receive and how.</p>
                                        </div>
                                        <div class="so-tab-pane fade" id="demo-vert-4" role="tabpanel">
                                            <h5 style="margin-bottom: 8px;">Privacy Settings</h5>
                                            <p>Manage your privacy and data sharing preferences.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;div class="so-tabs-container so-tabs-container-vertical"&gt;
    &lt;div class="so-tabs so-tabs-vertical" role="tablist" data-so-tabs&gt;
        &lt;button class="so-tab active" role="tab" data-so-target="#panel1"&gt;General&lt;/button&gt;
        &lt;button class="so-tab" role="tab" data-so-target="#panel2"&gt;Security&lt;/button&gt;
        &lt;button class="so-tab" role="tab" data-so-target="#panel3"&gt;Notifications&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="so-tab-content"&gt;
        &lt;div class="so-tab-pane fade show active" id="panel1"&gt;...&lt;/div&gt;
        &lt;div class="so-tab-pane fade" id="panel2"&gt;...&lt;/div&gt;
        &lt;div class="so-tab-pane fade" id="panel3"&gt;...&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alignment Options -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Alignment Options</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Center Aligned</h5>
                                <div class="so-tabs so-tabs-center so-mb-4" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab">Tab 1</button>
                                    <button class="so-tab" role="tab">Tab 2</button>
                                    <button class="so-tab" role="tab">Tab 3</button>
                                </div>

                                <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Right Aligned</h5>
                                <div class="so-tabs so-tabs-end so-mb-4" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab">Tab 1</button>
                                    <button class="so-tab" role="tab">Tab 2</button>
                                    <button class="so-tab" role="tab">Tab 3</button>
                                </div>

                                <h5 style="margin-bottom: 8px; font-size: 12px; color: var(--so-text-secondary);">Justified (Full Width)</h5>
                                <div class="so-tabs so-tabs-justified" role="tablist" data-so-tabs>
                                    <button class="so-tab active" role="tab">Tab 1</button>
                                    <button class="so-tab" role="tab">Tab 2</button>
                                    <button class="so-tab" role="tab">Tab 3</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;!-- Center aligned --&gt;
&lt;div class="so-tabs so-tabs-center" role="tablist"&gt;...&lt;/div&gt;

&lt;!-- Right aligned --&gt;
&lt;div class="so-tabs so-tabs-end" role="tablist"&gt;...&lt;/div&gt;

&lt;!-- Justified (equal width) --&gt;
&lt;div class="so-tabs so-tabs-justified" role="tablist"&gt;...&lt;/div&gt;

&lt;!-- Fill (proportional) --&gt;
&lt;div class="so-tabs so-tabs-fill" role="tablist"&gt;...&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript Events -->
                <div class="so-card">
                    <div class="so-card-header">
                        <h3 class="so-card-title">JavaScript API & Events</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-tabs so-tabs-pills" role="tablist" data-so-tabs id="demo-events-tabs">
                                    <button class="so-tab active" role="tab" data-so-target="#demo-events-1">Tab 1</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-events-2">Tab 2</button>
                                    <button class="so-tab" role="tab" data-so-target="#demo-events-3">Tab 3</button>
                                </div>
                                <div class="so-tab-content" style="margin-top: 16px;">
                                    <div class="so-tab-pane fade show active" id="demo-events-1" role="tabpanel">
                                        <p>Tab 1 content - Check the console to see events firing.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-events-2" role="tabpanel">
                                        <p>Tab 2 content.</p>
                                    </div>
                                    <div class="so-tab-pane fade" id="demo-events-3" role="tabpanel">
                                        <p>Tab 3 content.</p>
                                    </div>
                                </div>
                                <div style="margin-top: 16px;">
                                    <button class="so-btn so-btn-outline so-btn-sm" onclick="demoTabsNext()">Next Tab</button>
                                    <button class="so-btn so-btn-outline so-btn-sm" onclick="demoTabsPrev()">Previous Tab</button>
                                    <button class="so-btn so-btn-outline so-btn-sm" onclick="demoTabsShowById()">Show Tab 3</button>
                                </div>
                                <p style="margin-top: 12px; font-size: 12px; color: var(--so-text-secondary);">Open browser console to see event logs</p>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> JavaScript</span>
                                    <button class="so-code-copy" onclick="copyCode(this)">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-javascript">// Get tabs instance
const tabsEl = document.querySelector('#my-tabs');
const tabs = SOTabs.getInstance(tabsEl);

// Public methods
tabs.show(2);           // Show tab by index (0-based)
tabs.showById('panel3'); // Show tab by target ID
tabs.next();            // Go to next tab
tabs.prev();            // Go to previous tab
tabs.getActiveTab();    // Get active tab element
tabs.getActiveIndex();  // Get active tab index

// Events (use 'so:' prefix)
tabsEl.addEventListener('so:tab:show', (e) => {
    console.log('About to show:', e.target);
    console.log('Previous tab:', e.detail.relatedTarget);
    // e.preventDefault(); // Can cancel tab change
});

tabsEl.addEventListener('so:tab:shown', (e) => {
    console.log('Tab shown:', e.target);
});

tabsEl.addEventListener('so:tab:hide', (e) => {
    console.log('About to hide:', e.target);
});

tabsEl.addEventListener('so:tab:hidden', (e) => {
    console.log('Tab hidden:', e.target);
});</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tooltips Pane -->
            <div class="so-tab-pane fade" id="pane-tooltips" role="tabpanel">
                <!-- Basic Tooltips -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Basic Tooltips</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary);">
                            JavaScript-powered tooltips with automatic positioning and animations.
                        </p>
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-primary" data-so-tooltip="Tooltip on top">Top</button>
                                    <button class="so-btn so-btn-primary" data-so-tooltip="Tooltip on bottom" data-so-tooltip-position="bottom">Bottom</button>
                                    <button class="so-btn so-btn-primary" data-so-tooltip="Tooltip on left" data-so-tooltip-position="left">Left</button>
                                    <button class="so-btn so-btn-primary" data-so-tooltip="Tooltip on right" data-so-tooltip-position="right">Right</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
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
                </div>

                <!-- Keyboard Shortcuts -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Keyboard Shortcuts</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary);">
                            Display keyboard shortcuts alongside tooltip text. Automatically adapts for Mac (⌘) and Windows (Ctrl).
                        </p>
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Copy" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons" style="font-size: 18px;">content_copy</span>
                                        Copy
                                    </button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Paste" data-so-shortcut="Ctrl+V">
                                        <span class="material-icons" style="font-size: 18px;">content_paste</span>
                                        Paste
                                    </button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Save" data-so-shortcut="Ctrl+S">
                                        <span class="material-icons" style="font-size: 18px;">save</span>
                                        Save
                                    </button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Undo" data-so-shortcut="Ctrl+Z">
                                        <span class="material-icons" style="font-size: 18px;">undo</span>
                                        Undo
                                    </button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Command Palette" data-so-shortcut="Ctrl+Shift+P">
                                        <span class="material-icons" style="font-size: 18px;">terminal</span>
                                        Commands
                                    </button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
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
                        <h4 style="margin: 24px 0 16px; font-size: 14px; font-weight: 600;">Shortcut Only</h4>
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-ghost" data-so-shortcut="Escape">
                                        <span class="material-icons" style="font-size: 18px;">close</span>
                                    </button>
                                    <button class="so-btn so-btn-ghost" data-so-shortcut="Enter">
                                        <span class="material-icons" style="font-size: 18px;">check</span>
                                    </button>
                                    <button class="so-btn so-btn-ghost" data-so-shortcut="Tab">
                                        <span class="material-icons" style="font-size: 18px;">keyboard_tab</span>
                                    </button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
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
                </div>

                <!-- Color Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Color Variants</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-outline" data-so-tooltip="Default tooltip">Default</button>
                                    <button class="so-btn so-btn-outline-primary" data-so-tooltip="Primary color" data-so-tooltip-color="primary">Primary</button>
                                    <button class="so-btn so-btn-outline-success" data-so-tooltip="Success message" data-so-tooltip-color="success">Success</button>
                                    <button class="so-btn so-btn-outline-danger" data-so-tooltip="Danger alert" data-so-tooltip-color="danger">Danger</button>
                                    <button class="so-btn so-btn-outline-warning" data-so-tooltip="Warning notice" data-so-tooltip-color="warning">Warning</button>
                                    <button class="so-btn so-btn-outline-info" data-so-tooltip="Info hint" data-so-tooltip-color="info">Info</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
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
                </div>

                <!-- Size Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Size Variants</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-3 so-flex-wrap so-items-center">
                                    <button class="so-btn so-btn-secondary so-btn-sm" data-so-tooltip="Small tooltip" data-so-tooltip-size="sm">Small</button>
                                    <button class="so-btn so-btn-secondary" data-so-tooltip="Default tooltip size">Default</button>
                                    <button class="so-btn so-btn-secondary so-btn-lg" data-so-tooltip="Large tooltip" data-so-tooltip-size="lg">Large</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
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
                </div>

                <!-- Light Theme -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Light Theme</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary);">
                            Light themed tooltips that adapt to light/dark mode.
                        </p>
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-light" data-so-tooltip="Light themed tooltip" data-so-tooltip-theme="light">Light Theme</button>
                                    <button class="so-btn so-btn-light" data-so-tooltip="With shortcut" data-so-shortcut="Ctrl+L" data-so-tooltip-theme="light">Light + Shortcut</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
                                    <button class="so-code-copy" onclick="copyCode(this)" data-so-tooltip="Copy code" data-so-shortcut="Ctrl+C">
                                        <span class="material-icons">content_copy</span>
                                    </button>
                                </div>
                                <pre class="so-code-content"><code class="language-html">&lt;button data-so-tooltip="Light themed tooltip" data-so-tooltip-theme="light"&gt;Light Theme&lt;/button&gt;
&lt;button data-so-tooltip="With shortcut" data-so-shortcut="Ctrl+L" data-so-tooltip-theme="light"&gt;Light + Shortcut&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Animation Variants -->
                <div class="so-card so-mb-4">
                    <div class="so-card-header">
                        <h3 class="so-card-title">Animation Variants</h3>
                    </div>
                    <div class="so-card-body">
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-outline" data-so-tooltip="Fade animation" data-so-tooltip-animation="fade">Fade</button>
                                    <button class="so-btn so-btn-outline" data-so-tooltip="Scale animation (default)" data-so-tooltip-animation="scale">Scale</button>
                                    <button class="so-btn so-btn-outline" data-so-tooltip="Slide animation" data-so-tooltip-animation="slide">Slide</button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> HTML</span>
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
                </div>

                <!-- JavaScript API -->
                <div class="so-card">
                    <div class="so-card-header">
                        <h3 class="so-card-title">JavaScript API</h3>
                    </div>
                    <div class="so-card-body">
                        <p style="margin-bottom: 16px; color: var(--so-text-secondary);">
                            Use the JavaScript API for programmatic control and temporary feedback tooltips.
                        </p>
                        <div class="so-example-block">
                            <div class="so-example-preview">
                                <div class="so-flex so-gap-3 so-flex-wrap">
                                    <button class="so-btn so-btn-primary" id="tooltip-api-demo" onclick="showApiTooltip(this)">
                                        <span class="material-icons" style="font-size: 18px;">mouse</span>
                                        Click for Tooltip
                                    </button>
                                    <button class="so-btn so-btn-success" onclick="showSuccessTooltip(this)">
                                        <span class="material-icons" style="font-size: 18px;">check</span>
                                        Show Success
                                    </button>
                                    <button class="so-btn so-btn-danger" onclick="showErrorTooltip(this)">
                                        <span class="material-icons" style="font-size: 18px;">error</span>
                                        Show Error
                                    </button>
                                </div>
                            </div>
                            <div class="so-code-block">
                                <div class="so-code-header">
                                    <span class="so-code-label"><span class="material-icons" style="font-size: 14px; margin-right: 4px;">code</span> JavaScript</span>
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
        btn.style.setProperty('--progress', '0%');
        return;
    }

    let progress = 0;
    btn.disabled = true;

    const interval = setInterval(() => {
        progress += Math.random() * 15 + 5;
        if (progress >= 100) {
            progress = 100;
            clearInterval(interval);
            btn.style.setProperty('--progress', '100%');

            // Add completed class after a brief moment
            setTimeout(() => {
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
