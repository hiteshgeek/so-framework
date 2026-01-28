<?php
/**
 * SixOrbit UI Demo - Footer Include
 * Include this at the bottom of each page
 */
?>
    <!-- SixOrbit UI JavaScript -->
    <script src="<?= so_asset('js', 'sixorbit-full') ?>"></script>

    <!-- Global Page JS (Search Controller) -->
    <?php $globalJs = so_page_asset('global', 'js'); ?>
    <?php if ($globalJs): ?>
    <script src="<?= htmlspecialchars($globalJs) ?>"></script>
    <script>
    // Configure search with API URLs
    document.addEventListener('DOMContentLoaded', function() {
        if (window.globalSearchController) {
            window.globalSearchController.configure({
                searchUrl: 'data/search-results.json',
                isvSearchUrl: 'data/isv-search-results.json',
                onSearch: function(query, results) {
                    console.log('Search:', query, results);
                },
                onItemClick: function(item) {
                    console.log('Item clicked:', item);
                },
                onAccountClick: function(item) {
                    console.log('Account clicked:', item);
                }
            });
        }
    });
    </script>
    <?php endif; ?>

    <?php if (!empty($additionalJs)): ?>
    <?php foreach ($additionalJs as $js): ?>
    <script src="<?= htmlspecialchars($js) ?>"></script>
    <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($inlineJs)): ?>
    <script>
    <?= $inlineJs ?>
    </script>
    <?php endif; ?>

</body>
</html>
