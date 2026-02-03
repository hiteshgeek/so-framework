<?php
/**
 * SixOrbit UI Engine - OTP Input Element Demo
 */

$pageTitle = 'OTP Input - UI Engine';
$pageDescription = 'One-time password input with auto-focus and paste support';

require_once '../../includes/config.php';
require_once '../../includes/header.php';
require_once '../../includes/sidebar.php';
require_once '../../includes/navbar.php';
?>

<main class="so-main-content">
    <!-- Page Header -->
    <div class="so-page-header">
        <div class="so-page-header-left">
            <h1 class="so-page-title">OTP Input</h1>
            <p class="so-page-subtitle">One-time password input element with automatic focus navigation, paste support, and validation.</p>
        </div>
    </div>

    <div class="so-page-body">
        <!-- Basic OTP Input -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Basic OTP Input</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Enter verification code</label>
                    <div class="so-otp-group" id="demo-basic-otp">
                        <div class="so-otp-inputs">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                        </div>
                    </div>
                    <input type="hidden" name="verification_code">
                    <div class="so-form-hint so-mt-2">Enter the 6-digit code sent to your phone</div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('basic-otp', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "<?php
use Core\UiEngine\UiEngine;

\$otp = UiEngine::otp('verification_code')
    ->label('Enter verification code')
    ->length(6)
    ->help('Enter the 6-digit code sent to your phone');

echo \$otp->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const otp = UiEngine.otp('verification_code')
    .label('Enter verification code')
    .length(6)
    .help('Enter the 6-digit code sent to your phone');

document.getElementById('container').innerHTML = otp.toHtml();"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-form-group">
    <label class="so-form-label">Enter verification code</label>
    <div class="so-otp-group" id="otpInput">
        <div class="so-otp-inputs">
            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
        </div>
    </div>
    <input type="hidden" name="verification_code">
    <small class="so-form-text">Enter the 6-digit code sent to your phone</small>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Different Lengths -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Different Lengths</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-mb-4">
                    <label class="so-form-label">4-digit PIN</label>
                    <div class="so-otp-group" id="demo-pin4">
                        <div class="so-otp-inputs">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                        </div>
                    </div>
                </div>
                <div>
                    <label class="so-form-label">8-digit code</label>
                    <div class="so-otp-group" id="demo-code8">
                        <div class="so-otp-inputs">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('otp-lengths', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// 4-digit PIN
UiEngine::otp('pin')
    ->label('4-digit PIN')
    ->length(4);

// 8-digit code
UiEngine::otp('long_code')
    ->label('8-digit code')
    ->length(8);"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// 4-digit PIN
UiEngine.otp('pin')
    .label('4-digit PIN')
    .length(4);

// 8-digit code
UiEngine.otp('long_code')
    .label('8-digit code')
    .length(8);"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<!-- 4-digit PIN -->
<div class="so-otp-group" id="pin4">
    <div class="so-otp-inputs">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
    </div>
</div>

<!-- 8-digit code -->
<div class="so-otp-group" id="code8">
    <div class="so-otp-inputs">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <!-- ... 8 inputs total ... -->
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- OTP Sizes -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">OTP Sizes</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-mb-4">
                    <label class="so-form-label">Small (<code>.so-otp-group-sm</code>)</label>
                    <div class="so-otp-group so-otp-group-sm" id="demo-otp-sm">
                        <div class="so-otp-inputs">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                        </div>
                    </div>
                </div>
                <div class="so-mb-4">
                    <label class="so-form-label">Default</label>
                    <div class="so-otp-group" id="demo-otp-default">
                        <div class="so-otp-inputs">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                        </div>
                    </div>
                </div>
                <div>
                    <label class="so-form-label">Large (<code>.so-otp-group-lg</code>)</label>
                    <div class="so-otp-group so-otp-group-lg" id="demo-otp-lg">
                        <div class="so-otp-inputs">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('otp-sizes', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "// Small
UiEngine::otp('small')
    ->label('Small OTP')
    ->length(6)
    ->size('sm');

// Default
UiEngine::otp('default')
    ->label('Default OTP')
    ->length(6);

// Large
UiEngine::otp('large')
    ->label('Large OTP')
    ->length(6)
    ->size('lg');"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "// Small
UiEngine.otp('small')
    .label('Small OTP')
    .length(6)
    .size('sm');

// Default
UiEngine.otp('default')
    .label('Default OTP')
    .length(6);

// Large
UiEngine.otp('large')
    .label('Large OTP')
    .length(6)
    .size('lg');"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<!-- Small OTP -->
<div class="so-otp-group so-otp-group-sm">
    <div class="so-otp-inputs">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <!-- ... -->
    </div>
</div>

<!-- Default OTP -->
<div class="so-otp-group">
    <div class="so-otp-inputs">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <!-- ... -->
    </div>
</div>

<!-- Large OTP -->
<div class="so-otp-group so-otp-group-lg">
    <div class="so-otp-inputs">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <!-- ... -->
    </div>
</div>'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Error State -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Error State</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">OTP with error state</label>
                    <div class="so-otp-group" id="demo-error-otp">
                        <div class="so-otp-inputs">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                        </div>
                    </div>
                    <div class="so-btn-group so-mt-3">
                        <button type="button" class="so-btn so-btn-danger so-btn-sm" onclick="setOtpError(true)">Show Error</button>
                        <button type="button" class="so-btn so-btn-outline so-btn-sm" onclick="setOtpError(false)">Clear Error</button>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('otp-error', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$otp = UiEngine::otp('code')
    ->label('OTP with error')
    ->length(6)
    ->error('Invalid code'); // Sets error state

echo \$otp->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const otp = SOOtpInput.getInstance('#errorOtp');

// Show error state
otp.setError(true);

// Clear error state
otp.setError(false);

// Validate against expected value
const isValid = otp.validate('123456');
if (!isValid) {
    // Error state is automatically set
}"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-otp-group" id="errorOtp">
    <div class="so-otp-inputs">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <!-- ... -->
    </div>
</div>

<!-- Error state adds .so-otp-error to inputs -->'
                    ],
                ]) ?>
            </div>
        </div>

        <!-- Event Handling -->
        <div class="so-card so-mb-4">
            <div class="so-card-header">
                <h3 class="so-card-title">Event Handling</h3>
            </div>
            <div class="so-card-body">
                <!-- Live Demo -->
                <div class="so-form-group">
                    <label class="so-form-label">Type to see events</label>
                    <div class="so-otp-group" id="demo-event-otp">
                        <div class="so-otp-inputs">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                            <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]">
                        </div>
                    </div>
                    <div class="so-alert so-alert-info so-mt-3" id="eventLog">
                        <span class="material-icons">info</span>
                        <div>
                            <strong>Event Log:</strong> <span id="eventOutput">Type in the OTP field above...</span>
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <?= so_code_tabs('otp-events', [
                    [
                        'label' => 'PHP',
                        'language' => 'php',
                        'icon' => 'data_object',
                        'code' => "\$otp = UiEngine::otp('code')
    ->label('Verification Code')
    ->length(6)
    ->onComplete('handleComplete')
    ->onInput('handleInput');

echo \$otp->renderGroup();"
                    ],
                    [
                        'label' => 'JavaScript',
                        'language' => 'javascript',
                        'icon' => 'javascript',
                        'code' => "const otp = SOOtpInput.getInstance('#eventOtp');

// Listen for value changes
otp.element.addEventListener('otp:change', (e) => {
    console.log('Current value:', e.detail.value);
    console.log('Changed index:', e.detail.index);
});

// Listen for completion
otp.element.addEventListener('otp:complete', (e) => {
    console.log('OTP complete:', e.detail.value);
    // Submit form or validate
});"
                    ],
                    [
                        'label' => 'HTML Output',
                        'language' => 'html',
                        'icon' => 'code',
                        'code' => '<div class="so-otp-group" id="eventOtp">
    <div class="so-otp-inputs">
        <input type="text" class="so-otp-input" maxlength="1" inputmode="numeric">
        <!-- ... -->
    </div>
</div>

<!-- Events: otp:change, otp:complete -->'
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
                                <td><code>length()</code></td>
                                <td><code>int $length</code></td>
                                <td>Set number of digits (default: 6)</td>
                            </tr>
                            <tr>
                                <td><code>size()</code></td>
                                <td><code>string $size</code></td>
                                <td>Set size: 'sm' or 'lg'</td>
                            </tr>
                            <tr>
                                <td><code>autoFocus()</code></td>
                                <td>-</td>
                                <td>Auto-focus first input on load</td>
                            </tr>
                            <tr>
                                <td><code>onComplete()</code></td>
                                <td><code>callable $callback</code></td>
                                <td>Callback when all digits entered</td>
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
                                <td><code>.so-otp-group</code></td>
                                <td>Main OTP container</td>
                            </tr>
                            <tr>
                                <td><code>.so-otp-group-sm</code></td>
                                <td>Small size variant</td>
                            </tr>
                            <tr>
                                <td><code>.so-otp-group-lg</code></td>
                                <td>Large size variant</td>
                            </tr>
                            <tr>
                                <td><code>.so-otp-inputs</code></td>
                                <td>Container for input elements</td>
                            </tr>
                            <tr>
                                <td><code>.so-otp-input</code></td>
                                <td>Individual digit input</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h4 class="so-mt-4">JavaScript Methods</h4>
                <div class="so-table-responsive">
                    <table class="so-table so-table-bordered">
                        <thead class="so-table-light">
                            <tr>
                                <th>Method</th>
                                <th>Returns</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>getValue()</code></td>
                                <td>string</td>
                                <td>Returns the combined OTP value</td>
                            </tr>
                            <tr>
                                <td><code>setValue(value)</code></td>
                                <td>this</td>
                                <td>Sets the OTP value and updates UI</td>
                            </tr>
                            <tr>
                                <td><code>clear()</code></td>
                                <td>this</td>
                                <td>Clears all inputs</td>
                            </tr>
                            <tr>
                                <td><code>focus()</code></td>
                                <td>this</td>
                                <td>Focuses on first empty input</td>
                            </tr>
                            <tr>
                                <td><code>setError(hasError)</code></td>
                                <td>this</td>
                                <td>Sets or removes error state</td>
                            </tr>
                            <tr>
                                <td><code>isComplete()</code></td>
                                <td>boolean</td>
                                <td>Returns true if all inputs filled</td>
                            </tr>
                            <tr>
                                <td><code>validate(expected)</code></td>
                                <td>boolean</td>
                                <td>Validates OTP against expected value</td>
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
// Initialize OTP inputs after DOM ready
document.addEventListener('DOMContentLoaded', () => {
    if (typeof SOOtpInput !== 'undefined') {
        initOtpDemos();
    } else {
        setTimeout(initOtpDemos, 100);
    }
});

function initOtpDemos() {
    // Initialize all OTP inputs with autoFocus disabled
    document.querySelectorAll('.so-otp-group').forEach(el => {
        SOOtpInput.getInstance(el, { autoFocus: false });
    });

    // Setup event handling demo
    const eventOtp = document.getElementById('demo-event-otp');
    const eventOutput = document.getElementById('eventOutput');

    if (eventOtp) {
        eventOtp.addEventListener('otp:change', (e) => {
            eventOutput.textContent = `Change: value="${e.detail.value}", index=${e.detail.index ?? 'paste'}`;
        });

        eventOtp.addEventListener('otp:complete', (e) => {
            eventOutput.innerHTML = `<strong class="so-text-success">Complete!</strong> value="${e.detail.value}"`;
        });
    }
}

// Error state demo
function setOtpError(hasError) {
    const otp = SOOtpInput.getInstance('#demo-error-otp');
    otp.setError(hasError);
}
</script>
