<?php
$pageTitle = 'SM Math Academy | Math Tutoring';
$currentPage = 'home';
$basePath = '';
require_once __DIR__ . '/shared/site-data.php';
require_once __DIR__ . '/shared/icons.php';
include __DIR__ . '/shared/header.php';
?>

<main>
    <section class="hero">
        <div class="hero-content">
            <p class="eyebrow">Online and in-person math tutoring</p>
            <h1><?php echo htmlspecialchars($site['name']); ?></h1>
            <p class="hero-copy">
                Meaningful, patient math support for elementary, high school, SAT, and Cambridge IGCSE students.
            </p>
            <div class="hero-actions">
                <a class="button primary" href="contact.php">Contact Us</a>
                <a class="button secondary" href="#programs">Explore Tutoring</a>
            </div>
            <blockquote>
                "<?php echo htmlspecialchars($site['tagline']); ?>"
                <cite>- <?php echo htmlspecialchars($site['founder']); ?></cite>
            </blockquote>
        </div>

        <div class="hero-visual" aria-label="Student math tutoring illustration">
            <div class="photo-circle photo-circle--primary">
                <img src="shared/images/Tutor_Question.png" alt="Illustration of students raising their hands in a classroom">
            </div>
            <div class="photo-circle photo-circle--secondary">
                <img src="shared/images/Tutor_Clipart.png" alt="Illustration of a tutor and student working together">
            </div>
        </div>
    </section>

    <section class="section" id="programs">
        <div class="section-heading">
            <p class="eyebrow">What families can expect</p>
            <h2>Clear math support, matched to the student.</h2>
        </div>

        <div class="service-grid">
            <?php foreach ($services as $service): ?>
                <article class="service-card information">
                    <div class="service-icon"><?php echo sm_icon($service['icon']); ?></div>
                    <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                    <p><?php echo htmlspecialchars($service['description']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="split-section">
        <div class="split-copy information">
            <p class="eyebrow">Teaching approach</p>
            <h2>Confidence comes from understanding the next step.</h2>
            <p>
                SM Math Academy keeps lessons focused, calm, and practical. Students get help with the topic in front of them while building the habits that make future math feel less intimidating.
            </p>
            <ul class="check-list">
                <?php foreach ($levels as $level): ?>
                    <li><?php echo sm_icon('check'); ?><?php echo htmlspecialchars($level); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="process-panel information">
            <?php foreach ($process as $item): ?>
                <article class="process-step">
                    <span><?php echo htmlspecialchars($item['step']); ?></span>
                    <div>
                        <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                        <p><?php echo htmlspecialchars($item['description']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="contact-band">
        <div>
            <p class="eyebrow">Ready to begin?</p>
            <h2>Talk through your student's math goals.</h2>
        </div>
        <a class="button dark" href="contact.php">Contact Us</a>
    </section>
</main>

<?php include __DIR__ . '/shared/footer.php'; ?>
