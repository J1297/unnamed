<h1> User counter settings: </h1>
<p> Which design would you like to utilize? </p>

<?php settings_errors(); ?>
<!-- <form method="post" action="options.php"> !-->

<!-- </form>      !-->
<?php settings_fields('uc-settings-group'); ?>
<?php do_settings_sections('exOptions'); ?>

<?php

$design = get_option('design', 'number');

?>
<form method="post">
    <p> <input type="radio" name="designchoice" value="floating" <?= $design == 'floating' ? 'checked="checked"' : '' ?>/>
        <span class="ftext"> Floating Text </span> </p>
    <p><input type="radio" name="designchoice" value="number" <?= $design == 'number' ? 'checked="checked"' : '' ?>/>
        <span class="nbox"> Number Box</span></p>
    <p> <input type="radio" name="designchoice" value="hidden" <?= $design == 'hidden' ? 'checked="checked"' : '' ?>/>
        <span class="nbox"> Hidden </span> </p>
    <button type="submit"><?= _('Absenden'); ?></button>
</form>


