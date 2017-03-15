<!DOCTYPE html>
<?php include('../../inc/variables.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The multicolumn performance challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/default.css">
    <link rel="stylesheet" href="../../assets/css/flexbox.css">
</head>
<body>

<?php $layout = '100vh' ?>
<div class="layout fullpage">
    <div class="left-col">
        <h2>Left</h2>
		<?php include('../../inc/text.php'); ?>
    </div>
    <div class="center-col">
        <h2>Center</h2>
		<?php $longText = LONG_TEXT; ?>
		<?php include('../../inc/text.php'); ?>
		<?php unset($longText); ?>
    </div>
    <div class="right-col">
        <h2>Right</h2>
		<?php include('../../inc/text.php'); ?>
    </div>
</div>

</body>
</html>