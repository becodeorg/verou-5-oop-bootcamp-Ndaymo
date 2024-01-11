<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The big waffle News</title>
</head>
<body>
    <h1>Welcome to the big waffle news</h1>

    <!-- <?php ?> -->
    <div> 
        <span>
<?php foreach ($contents as $array) { ?>

                <?php echo "<h2>" . $array->getTitle() . "</h2>"; ?>
                <?php echo "<h2>" . $array->getText() . "</h2>"; ?>
                <?php echo "<br>" ?>
    <?php } ?>

    </span>
</div>
</body>
</html>