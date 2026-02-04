<?php
$config = require 'config.php';
$domains = $config['domains'];
$version = $config['version'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Central directory and manifest of all mtex.dev domains and nodes.">
    <meta name="keywords" content="mtex, mtex.dev, domain, directory, nodes, manifest, index">
    <meta name="author" content="MTEX.dev">
    <title>MTEX.dev // Domain Directory</title>
</head>
<body>
    <p>MTEX.dev Domain Directory - Version <?php echo htmlspecialchars($version); ?></p>
    <ul>
        <?php foreach ($domains as $domain): ?>
            <li><?php echo htmlspecialchars($domain); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>