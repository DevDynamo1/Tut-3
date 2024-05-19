<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $period_info['period']; ?></title>
</head>
<body>
    <h1><?php echo $period_info['index']; ?></h1>
    <p><?php echo $period_info['description']; ?></p>
    <h2>Dinosaurs:</h2>
    <ul>
        <?php foreach ($period_info['dinosaurs'] as $dinosaur): ?>
            <li><?php echo $dinosaur; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
