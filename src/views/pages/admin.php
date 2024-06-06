<?php

?>

<form action="/src/controllers/handle_form_submission.php" method="POST">
    <input name="newKey" value="<?php echo $adminKey; ?>" type="text" />
    <button type="submit">Update</button>
</form>
