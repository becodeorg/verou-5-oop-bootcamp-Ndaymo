<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The big waffle News</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,900&family=Montserrat:wght@400;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Welcome to the big waffle news</h1>

    <!-- <?php ?> -->
    <div> 
        <section>
            <img src="backend.webp" alt="">
        <h2><?php echo $contents[0]->getTitle(); ?></h2>
        <p><?php echo $contents[0]->getText(); ?></p>
        </section>
        <span>
<?php foreach ($contents as $array) { ?>
                        <?php echo "<h2>" . $array->getTitle() . "</h2>"; ?>
                        <?php echo "<p>" . $array->getText() . "</p>"; ?>
                        <?php echo "<br>"; ?>
    <?php } ?>

    </span>
</div>
</body>
</html>