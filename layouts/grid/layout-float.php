<!DOCTYPE html>
<?php include('../../inc/variables.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The multicolumn performance challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/default.css">
    <link rel="stylesheet" href="../../assets/css/float.css">
</head>
<body>

<?php $layout = 'grid' ?>

<div class="layout grid">
	<?php for ($i = 0; $i < $repeatTimes; $i++) : ?>
		<?php $num = $i + 1; ?>
        <div class="left-col<?php echo ' cavy' . $num ?>">
            <h2>Left</h2>
			<?php include('../../inc/text.php'); ?>
        </div>
        <div class="center-col<?php echo ' cavy' . $num ?>">
            <h2>Center</h2>
			<?php include('../../inc/text.php'); ?>
        </div>
        <div class="right-col<?php echo ' cavy' . $num ?>">
            <h2>Right</h2>
			<?php include('../../inc/text.php'); ?>
        </div>
	<?php endfor; ?>
</div>

</body>
</html>