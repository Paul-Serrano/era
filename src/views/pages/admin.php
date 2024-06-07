<?php

?>

<form action="/src/controllers/handle_form_submission.php" method="POST">
    <?php if($path === '/admin') {?>
        <div class="form-group">
            <label for="adminMail">Enter your mail</label>
            <input class="border-2 border-black" name="adminMail" value="" type="text" />
        </div>
        <div class="form-group">
            <label for="adminPass">Enter your password</label>
            <input class="border-2 border-black" name="adminPass" value="" type="text" />
        </div>
        <button type="submit" name="submitAdmin">Send</button>
    <?php } ?>
    <?php if(isset($component)) include_once $component ;?>
</form>

