<?php
$config = require 'config.php';
$domains = $config['domains'];
$version = $config['version'];

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($requetsUri === '/json' || $requestUri === '/json/' || $requestUri === '/index.php/json' || $requestUri === '/index.php/json/' || (isset($_GET['format']) && $_GET['format'] === 'json') || (isset($_GET['output']) && $_GET['output'] === 'json') || (isset($_GET['type']) && $_GET['type'] === 'json') || (isset($_GET['type']) && $_GET['type'] === 'raw')) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'version' => $version,
        'domains' => $domains,
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Central directory and manifest of all mtex.dev domains and nodes.">
    <meta name="keywords" content="mtex, mtex.dev, domain, directory, nodes, manifest, index">
    <meta name="author" content="MTEX.dev">

    <meta property="og:image" content="https://github.com/MTEXdotDev.png">
    <meta property="twitter:image" content="https://github.com/MTEXdotDev.png">

    <link rel="icon" type="image/x-icon" href="https://github.com/MTEXdotDev.png">
    <link rel="apple-touch-icon" href="https://github.com/MTEXdotDev.png">
    <link rel="stylesheet" href="style.css">
    <title>MTEX.dev // Domain Directory</title>
</head>
<body class="site-wrapper">
    <header class="header">
        <img src="https://github.com/MTEXdotDev.png" alt="Logo" class="logo">
        <p class="version-info">
            MTEX.dev Domain Directory - <span class="version-tag">v<?php echo htmlspecialchars($version); ?></span>
        </p>
    </header>

    <main class="content">
        <ul class="domain-list">
            <?php foreach ($domains as $domain): ?>
                <li class="domain-item">
                    <code class="domain-name"><?php echo htmlspecialchars($domain); ?></code>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>