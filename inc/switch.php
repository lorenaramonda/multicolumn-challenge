<div class="switch">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="chooseLayout">Layout</label>
        <select id="chooseLayout" name="l">
            <option value="grid"<?php echo $layout == 'grid' ? ' selected="selected"' : '' ?>>grid lines</option>
            <option value="100vh"<?php echo $layout == '100vh' ? ' selected="selected"' : '' ?>>100% height</option>
        </select>
        <button type="submit">Set</button>
    </form>
</div>