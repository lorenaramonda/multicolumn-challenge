<!DOCTYPE html>
<?php include('../../inc/variables.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The multicolumn performance challenge</title>
    <link rel="stylesheet" href="../../assets/css/default.css">
    <link rel="stylesheet" href="../../assets/css/table.css">
</head>
<body>

<?php $layout = '100vh' ?>
<table class="layout fullpage">
    <tr>
        <td class="left-col">
            <h2>Left</h2>
			<?php include('../../inc/text.php'); ?>
        </td>
        <td class="center-col">
            <h2>Center</h2>
			<?php $longText = LONG_TEXT; ?>
			<?php include('../../inc/text.php'); ?>
			<?php unset($longText); ?>
        </td>
        <td class="right-col">
            <h2>Right</h2>
			<?php include('../../inc/text.php'); ?>
        </td>
    </tr>
</table>

</body>
</html>