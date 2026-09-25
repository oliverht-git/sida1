<?php
$pages = [
    [
        'title' => 'Index',
        'file' => 'index.html',
        'height' => '1100px'
    ],
    [
        'title' => 'OSI-modellen'
    ]
];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSI-modellen</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .page-section {
            max-width: 1200px;
            margin: 0 auto 24px;
        }

        .page-section h1 {
            margin: 0;
            padding: 16px;
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px 15px 0 0;
        }

        .index-frame {
            display: block;
            width: 100%;
            height: 1100px;
            border: 0;
            background: transparent;
        }
    </style>
</head>
<body>
    <section class="page-section">
        <h1><?php echo htmlspecialchars($pages[0]['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <iframe class="index-frame" src="index.html" title="Index"></iframe>
    </section>

    <section class="page-section">
        <?php require __DIR__ . '/osi-content.php'; ?>
    </section>
</body>
</html>