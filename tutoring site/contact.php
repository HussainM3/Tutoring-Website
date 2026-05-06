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

    $submitted = count($errors) === 0;
}

include __DIR__ . '/shared/header.php';
?>

<main>
    <section class="page-hero">
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
            <?php if ($submitted): ?>
                <div class="form-status success" role="status">
                    Thank you, <?php echo htmlspecialchars($values['name']); ?>. Your message is ready to send. Please email
                    <a href="mailto:<?php echo htmlspecialchars($site['email']); ?>?subject=Tutoring%20Inquiry&body=<?php echo rawurlencode($values['message']); ?>">
                        <?php echo htmlspecialchars($site['email']); ?>
                    </a>
                    or call <?php echo htmlspecialchars($site['phone']); ?> to confirm details.
                </div>
            <?php endif; ?>

            <div class="field">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" value="<?php echo htmlspecialchars($values['name']); ?>" autocomplete="name" required>
                <?php if (isset($errors['name'])): ?><span class="field-error"><?php echo $errors['name']; ?></span><?php endif; ?>
            </div>

            <div class="field-grid">
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($values['email']); ?>" autocomplete="email" required>
                    <?php if (isset($errors['email'])): ?><span class="field-error"><?php echo $errors['email']; ?></span><?php endif; ?>
                </div>
                <div class="field">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" type="tel" value="<?php echo htmlspecialchars($values['phone']); ?>" autocomplete="tel">
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
            </div>

            <div class="field">
                <label for="message">What kind of support is needed?</label>
                <textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($values['message']); ?></textarea>
                <?php if (isset($errors['message'])): ?><span class="field-error"><?php echo $errors['message']; ?></span><?php endif; ?>
            </div>

            <button class="button primary" type="submit">Prepare Message</button>
        </form>
    </section>
</main>

<?php include __DIR__ . '/shared/footer.php'; ?>
