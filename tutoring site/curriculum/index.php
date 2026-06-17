<?php
$pageTitle = 'Curriculum Roadmap | SM Math Academy';
$currentPage = 'curriculum';
$basePath = '../';
require_once __DIR__ . '/../shared/curriculum-data.php';

if (!function_exists('sm_e')) {
    function sm_e($value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('sm_slug')) {
    function sm_slug(string $value): string
    {
        return strtolower(preg_replace('/[^a-z0-9]+/', '-', trim($value)));
    }
}

include __DIR__ . '/../shared/header.php';
?>

<main class="curriculum-page">
    <section class="page-hero curriculum-hero">
        <p class="eyebrow">Ontario math support</p>
        <h1>Curriculum Roadmap</h1>
        <p>
            A grade-by-grade view of the Ontario mathematics strands for Grades 3 through 12,
            organized so families can see what students are building toward.
        </p>
        <div class="curriculum-hero-actions" aria-label="Curriculum source links">
            <a class="button secondary" href="https://www.dcp.edu.gov.on.ca/en/curriculum/elementary-mathematics" target="_blank" rel="noopener noreferrer">
                Ontario Elementary Math
            </a>
            <a class="button secondary" href="https://www.dcp.edu.gov.on.ca/en/curriculum/secondary-mathematics" target="_blank" rel="noopener noreferrer">
                Ontario Secondary Math
            </a>
        </div>
    </section>

    <section class="roadmap-section" id="roadmap" aria-label="Grade 3 to Grade 12 curriculum roadmap">
        <?php foreach ($curriculumRoadmap as $gradeIndex => $grade): ?>
            <details class="roadmap-grade information" <?php echo $gradeIndex === 0 ? 'open' : ''; ?>>
                <summary>
                    <span class="grade-summary-text">
                        <span class="grade-title"><?php echo sm_e($grade['grade']); ?></span>
                        <span class="grade-focus"><?php echo sm_e($grade['focus']); ?></span>
                    </span>
                </summary>

                <div class="grade-content">
                    <a class="curriculum-source" href="<?php echo sm_e($grade['source']['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo sm_e('Open official source for ' . $grade['grade']); ?>">
                        <?php echo sm_e($grade['source']['label']); ?>
                    </a>

                    <div class="strand-list">
                        <?php $strandIndex = 0; ?>
                        <?php foreach ($grade['strands'] as $strandName => $topics): ?>
                            <details class="roadmap-strand strand-<?php echo sm_e(sm_slug($strandName)); ?>" <?php echo $gradeIndex === 0 && $strandIndex === 0 ? 'open' : ''; ?>>
                                <summary>
                                    <span><?php echo sm_e($strandName); ?></span>
                                    <span class="topic-count"><?php echo count($topics); ?> topics</span>
                                </summary>

                                <div class="topic-list">
                                    <?php foreach ($topics as $topic): ?>
                                        <article class="topic-row">
                                            <div class="topic-copy">
                                                <h3><?php echo sm_e($topic['title']); ?></h3>
                                                <p><?php echo sm_e($topic['description']); ?></p>
                                            </div>
                                            <div class="topic-links" aria-label="<?php echo sm_e('Resources for ' . $grade['grade'] . ', ' . $topic['title']); ?>">
                                                <a href="<?php echo sm_e($topic['textbook_link']['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo sm_e('Open textbook link for ' . $grade['grade'] . ', ' . $topic['title']); ?>">
                                                    <?php echo sm_e($topic['textbook_link']['label']); ?>
                                                </a>
                                                <a href="<?php echo sm_e($topic['extra_practice_link']['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo sm_e('Open extra practice link for ' . $grade['grade'] . ', ' . $topic['title']); ?>">
                                                    <?php echo sm_e($topic['extra_practice_link']['label']); ?>
                                                </a>
                                            </div>
                                        </article>
                                    <?php endforeach; ?>
                                </div>
                            </details>
                            <?php $strandIndex++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </details>
        <?php endforeach; ?>
    </section>
</main>

<?php include __DIR__ . '/../shared/footer.php'; ?>
