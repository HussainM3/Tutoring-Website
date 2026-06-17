<?php
$pageTitle = 'Contact | SM Math Academy';
$currentPage = 'contact';
$basePath = '';
require_once __DIR__ . '/shared/site-data.php';
require_once __DIR__ . '/shared/icons.php';

$errors = [];
$submitted = false;
$values = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'student_level' => '',
    'message' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($values as $key => $value) {
        $values[$key] = trim($_POST[$key] ?? '');
    }

    if ($values['name'] === '') {
        $errors['name'] = 'Please enter your name.';
    }

    if (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    if ($values['message'] === '') {
        $errors['message'] = 'Please share a few details about the tutoring support needed.';
    }

    if ($values['phone'] === '' || !preg_match('/^\+?[0-9\s\-()]+$/', $values['phone'])) {
        $errors['phone'] = 'Please enter a valid phone number.';
    }

    $submitted = count($errors) === 0;
}

include __DIR__ . '/shared/header.php';
?>

<main class="contact-page">
    <section class="page-hero contact-hero">
        <p class="eyebrow">Contact SM Math Academy</p>
        <h1>Start with a quick conversation.</h1>
        <p>Reach out by email, phone, or the form below to discuss online or in-person math tutoring.</p>
    </section>

    <section class="contact-layout">
        <aside class="contact-card information">
            <h2>Contact Details</h2>
            <a href="mailto:<?php echo htmlspecialchars($site['email']); ?>">
                <?php echo sm_icon('mail'); ?>
                <?php echo htmlspecialchars($site['email']); ?>
            </a>
            <a href="tel:<?php echo htmlspecialchars($site['phone_href']); ?>">
                <?php echo sm_icon('phone'); ?>
                <?php echo htmlspecialchars($site['phone']); ?>
            </a>
            <p>
                Include the student's grade, current math course, and whether online or in-person tutoring works best.
            </p>
        </aside>

        <form class="contact-form information" method="post" action="contact.php" novalidate>
            <div id="success-message" class="form-status success" role="status" style="display: none;">
                Email sent successfully! Your default email application is opening.
            </div>

            <div class="field">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" value="<?php echo htmlspecialchars($values['name']); ?>" autocomplete="name" required>
                <span class="field-error" style="display: <?php echo isset($errors['name']) ? 'block' : 'none'; ?>;"><?php echo $errors['name'] ?? ''; ?></span>
            </div>

            <div class="field-grid">
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($values['email']); ?>" autocomplete="email" required>
                    <span class="field-error" style="display: <?php echo isset($errors['email']) ? 'block' : 'none'; ?>;"><?php echo $errors['email'] ?? ''; ?></span>
                </div>
                <div class="field">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" type="tel" value="<?php echo htmlspecialchars($values['phone']); ?>" autocomplete="tel">
                    <span class="field-error" style="display: <?php echo isset($errors['phone']) ? 'block' : 'none'; ?>;"><?php echo $errors['phone'] ?? ''; ?></span>
                </div>
            </div>

            <div class="field">
                <label for="student_level">Student Level</label>
                <select id="student_level" name="student_level">
                    <option value="">Choose a level</option>
                    <?php foreach ($levels as $level): ?>
                        <option value="<?php echo htmlspecialchars($level); ?>" <?php echo $values['student_level'] === $level ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($level); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <span class="field-error" style="display: none;"></span>
            </div>

            <div class="field">
                <label for="message">How can we help you?</label>
                <textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($values['message']); ?></textarea>
                <span class="field-error" style="display: <?php echo isset($errors['message']) ? 'block' : 'none'; ?>;"><?php echo $errors['message'] ?? ''; ?></span>
            </div>

            <button class="button primary" type="submit">Send Email</button>
        </form>

        <!-- Custom Confirmation Modal -->
        <div id="confirm-modal" class="modal">
            <div class="modal-content">
                <h3>Confirm Email Send</h3>
                <p>Are you sure you want to send this email?</p>
                <button id="confirm-yes" class="button primary">Yes, Prepare email</button>
                <button id="confirm-no" class="button secondary">Cancel</button>
            </div>
        </div>
    </section>
</main>

<script>
var siteEmail = '<?php echo htmlspecialchars($site['email']); ?>';

document.querySelector('.contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Clear previous errors and any previous success message
    document.querySelectorAll('.field-error').forEach(el => {
        el.style.display = 'none';
        el.textContent = '';
    });
    document.getElementById('success-message').style.display = 'none';
    
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();
    var phone = document.getElementById('phone').value.trim();
    var studentLevel = document.getElementById('student_level').value.trim();
    
    var errors = {};
    
    if (name === '') {
        errors.name = 'Please enter your name.';
    }
    
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        errors.email = 'Please enter a valid email address.';
    }
    
    if (message === '') {
        errors.message = 'Please share a few details about the tutoring support needed.';
    }
    
    if (studentLevel === '') {
        errors.student_level = 'Please select a student level.';
    }
    
    if (phone === '') {
        errors.phone = 'Please enter your phone number.';
    } else if (!/^\+?[0-9\s\-()]+$/.test(phone)) {
        errors.phone = 'Please enter a valid phone number.';
    }
    
    if (Object.keys(errors).length > 0) {
        for (var key in errors) {
            var errorSpan = document.querySelector('#' + key + ' ~ .field-error');
            if (errorSpan) {
                errorSpan.textContent = errors[key];
                errorSpan.style.display = 'block';
            }
        }
        return;
    }
    
    // If valid, show custom confirmation modal
    document.getElementById('confirm-modal').style.display = 'flex';
});

// Handle modal buttons
document.getElementById('confirm-yes').addEventListener('click', function() {
    var name = document.getElementById('name').value.trim();
    var message = document.getElementById('message').value.trim();
    var subject = 'Tutoring Inquiry from ' + name + ' - Student level: ' + document.getElementById('student_level').value;
    var body = message + '\n\nContact details:\nEmail: ' + document.getElementById('email').value.trim() + '\nPhone: ' + document.getElementById('phone').value.trim();
    var mailto = 'mailto:' + siteEmail + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
    
    // Show success message
    var successMessage = document.getElementById('success-message');
    successMessage.style.display = 'block';
    
    // Hide modal
    document.getElementById('confirm-modal').style.display = 'none';
    
    // Open email client
    // this may not work in all browsers as default mailto behavior can be blocked, and can be improved
    // by using a server-side email sending solution instead of mailto links, but this is a simple approach for now
    // Testing may also require handling the mailto behavior differently, as it can be tricky to test reliably in automated tests
    window.location.href = mailto;
    
    // Hide success message after 15 seconds
    setTimeout(function() {
        successMessage.style.display = 'none';
    }, 15000);
});

document.getElementById('confirm-no').addEventListener('click', function() {
    document.getElementById('confirm-modal').style.display = 'none';
});
</script>

<?php include __DIR__ . '/shared/footer.php'; ?>
