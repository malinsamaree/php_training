<?php
    include_once 'Layout.php';
    include_once 'Section.php';
    include_once 'TwoColumnLayout.php';
    include_once 'ThreeColumnLayout.php';
    include_once 'HtmlTags.php';
    include_once 'FestgeldViewBuilder.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $festgeldViewBuilder = new FestgeldViewBuilder();
        $festgeldViewBuilder->render();
    ?>
</body>
</html>