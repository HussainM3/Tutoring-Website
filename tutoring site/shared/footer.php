<?php
require_once __DIR__ . '/site-data.php';
require_once __DIR__ . '/icons.php';
?>
    <footer class="site-footer">
        <div class="footer-inner">
            <div>
                <a href="<?php echo $basePath ?? ''; ?>index.php" class="footer-brand"><?php echo htmlspecialchars($site['name']); ?></a>
                <p><?php echo htmlspecialchars($site['tagline']); ?></p>
            </div>

            <div class="footer-contact">
                <a href="mailto:<?php echo htmlspecialchars($site['email']); ?>">
                    <?php echo sm_icon('mail'); ?>
                    <?php echo htmlspecialchars($site['email']); ?>
                </a>
                <a href="tel:<?php echo htmlspecialchars($site['phone_href']); ?>">
                    <?php echo sm_icon('phone'); ?>
                    <?php echo htmlspecialchars($site['phone']); ?>
                </a>
            </div>
        </div>
    </footer>
    <script src="<?php echo $basePath ?? ''; ?>shared/js/main.js"></script>
</body>
</html>
