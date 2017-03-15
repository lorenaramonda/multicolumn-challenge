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

<?php $layout = 'grid' ?>

<table class="layout grid">
	<?php for ($i = 0; $i < $repeatTimes; $i++) : ?>
		<?php $num = $i + 1; ?>
        <tr>
            <td class="left-col<?php echo ' cavy' . $num ?>">
                <h2>Left</h2>
				<?php include('../../inc/text.php'); ?>
            </td>
            <td class="center-col<?php echo ' cavy' . $num ?>">
                <h2>Center</h2>
				<?php include('../../inc/text.php'); ?>
            </td>
            <td class="right-col<?php echo ' cavy' . $num ?>">
                <h2>Right</h2>
				<?php include('../../inc/text.php'); ?>
            </td>
        </tr>
	<?php endfor; ?>
</table>

</body>
</html>