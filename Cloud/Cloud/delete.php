<?php
?>
<a>Are you sure you want to delete that Objekt?</a>
<form method="POST" action="index.php <?php unlink($_GET["name"]);?>">
    <input type="submit" name="button_0" value="delete">
</form>
