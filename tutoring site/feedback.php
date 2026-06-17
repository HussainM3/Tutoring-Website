<?php
$pageTitle = 'Feedback | SM Math Academy';
$currentPage = 'feedback';
$basePath = '';
require_once __DIR__ . '/shared/site-data.php';
require_once __DIR__ . '/shared/icons.php';
require_once __DIR__ . '/shared/testimonials-data.php';

$errors = [];
$submitted = false;
$values = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'rating' => '',
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
        $errors['message'] = 'Please share your feedback.';
    }

    if ($values['phone'] !== '' && !preg_match('/^\+?[0-9\s\-()]+$/', $values['phone'])) {
        $errors['phone'] = 'Please enter a valid phone number.';
    }

    $submitted = count($errors) === 0;
}

include __DIR__ . '/shared/header.php';
?>

<main class="feedback-page">
    <section class="page-hero contact-hero">
        <p class="eyebrow">Feedback</p>
        <h1>We'd love to hear from you.</h1>
        <p>Share feedback about lessons, the website, or your overall experience with SM Math Academy.</p>
    </section>

    <section class="contact-layout">
        <aside class="contact-card information">
            <h2>Contact</h2>
            <a href="mailto:<?php echo htmlspecialchars($site['email']); ?>">
                <?php echo sm_icon('mail'); ?>
                <?php echo htmlspecialchars($site['email']); ?>
            </a>
            <a href="tel:<?php echo htmlspecialchars($site['phone_href']); ?>">
                <?php echo sm_icon('phone'); ?>
                <?php echo htmlspecialchars($site['phone']); ?>
            </a>
            <p>
                Use this form for site feedback, testimonials, or to share suggestions about tutoring.
            </p>
        </aside>

        <form class="contact-form information" method="post" action="feedback.php" novalidate>
            <div id="success-message" class="form-status success" role="status" style="display: none;">
                Thank you! Your email client is opening to send feedback.
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
                    <label for="phone">Phone (optional)</label>
                    <input id="phone" name="phone" type="tel" value="<?php echo htmlspecialchars($values['phone']); ?>" autocomplete="tel">
                    <span class="field-error" style="display: <?php echo isset($errors['phone']) ? 'block' : 'none'; ?>;"><?php echo $errors['phone'] ?? ''; ?></span>
                </div>
            </div>

            <div class="field">
                <label for="rating">Rating (optional)</label>
                <select id="rating" name="rating">
                    <option value="">Choose a rating</option>
                    <option value="5" <?php echo $values['rating'] === '5' ? 'selected' : ''; ?>>5 — Excellent</option>
                    <option value="4" <?php echo $values['rating'] === '4' ? 'selected' : ''; ?>>4 — Very good</option>
                    <option value="3" <?php echo $values['rating'] === '3' ? 'selected' : ''; ?>>3 — Good</option>
                    <option value="2" <?php echo $values['rating'] === '2' ? 'selected' : ''; ?>>2 — Fair</option>
                    <option value="1" <?php echo $values['rating'] === '1' ? 'selected' : ''; ?>>1 — Needs improvement</option>
                </select>
                <span class="field-error" style="display: none;"></span>
            </div>

            <div class="field">
                <label for="message">Your feedback</label>
                <textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($values['message']); ?></textarea>
                <span class="field-error" style="display: <?php echo isset($errors['message']) ? 'block' : 'none'; ?>;"><?php echo $errors['message'] ?? ''; ?></span>
            </div>

            <button class="button primary" type="submit">Send Feedback</button>
        </form>

        <!-- Testimonials shown below the form -->
        <aside class="testimonials information">
            <h2>Testimonials</h2>
            <br>
            <?php foreach ($testimonials as $testimonial): ?>
                <blockquote class="testimonial">
                    <p><?php echo htmlspecialchars($testimonial['text']); ?></p>
                    <footer>
                        — <?php echo htmlspecialchars($testimonial['name']); ?>
                        <?php if (!empty($testimonial['grade'])): ?>
                            , <?php echo htmlspecialchars($testimonial['grade']); ?>
                        <?php endif; ?>
                    </footer>
                </blockquote>
            <?php endforeach; ?>
        </aside>
    </section>
</main>

<script>
var siteEmail = '<?php echo htmlspecialchars($site['email']); ?>';

document.querySelector('.contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    document.querySelectorAll('.field-error').forEach(el => {
        el.style.display = 'none';
        el.textContent = '';
    });
    document.getElementById('success-message').style.display = 'none';

    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();
    var phone = document.getElementById('phone').value.trim();
    var rating = document.getElementById('rating').value.trim();

    var errors = {};
    if (name === '') {
        errors.name = 'Please enter your name.';
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        errors.email = 'Please enter a valid email address.';
    }
    if (message === '') {
        errors.message = 'Please share your feedback.';
    }
    if (phone !== '' && !/^\+?[0-9\s\-()]+$/.test(phone)) {
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

    // Prepare mailto and show success message
    var subject = 'Feedback from ' + name + (rating ? ' — Rating: ' + rating : '');
    var body = message + '\n\nContact details:\nEmail: ' + email + '\nPhone: ' + phone;
    var mailto = 'mailto:' + siteEmail + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);

    var successMessage = document.getElementById('success-message');
    successMessage.style.display = 'block';

    // Open email client
    window.location.href = mailto;

    setTimeout(function() {
        successMessage.style.display = 'none';
    }, 15000);
});
</script>

<?php include __DIR__ . '/shared/footer.php'; ?>
