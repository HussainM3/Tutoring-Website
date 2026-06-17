<?php
$currentPage = $currentPage ?? '';
$pageTitle = $pageTitle ?? 'SM Math Academy';
$basePath = $basePath ?? '';
require_once __DIR__ . '/site-data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SM Math Academy offers online and in-person math tutoring for elementary, high school, SAT, and Cambridge IGCSE students.">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $basePath; ?>shared/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $basePath; ?>shared/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $basePath; ?>shared/css/footer.css">
</head>
<body>
    <header class="site-header">
        <a href="<?php echo $basePath; ?>index.php" class="brand" aria-label="SM Math Academy home">
            <span class="brand-mark">SM</span>
            <span>
                <span class="brand-name"><?php echo htmlspecialchars($site['name']); ?></span>
                <span class="brand-line">Math tutoring with clarity and care</span>
            </span>
        </a>

        <button class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="site-nav">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-nav" id="site-nav" aria-label="Main navigation">
            <a class="<?php echo $currentPage === 'home' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>index.php">Home</a>
            <a class="<?php echo $currentPage === 'curriculum' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>curriculum/">Curriculum</a>
            <a class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>contact.php">Contact</a>
            <a class="nav-cta" href="<?php echo $basePath; ?>contact.php">Book a Call</a>
        </nav>
    </header>
