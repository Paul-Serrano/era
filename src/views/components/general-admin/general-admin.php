<?php 

?>
<div class="formGroup">
    <label for="newMail">Your mail</label>
    <input class="border-1 border-black" name="newAdminMail" value="<?php echo $_SESSION['admin']->getMail(); ?>" type="text" />
</div>

<div class="formGroup">
    <label for="newPass">Your password</label>
    <input class="border-1 border-black" name="newAdminPass" value="" type="password" />
</div>

<div class="formGroup">
    <label for="newPassVerif">Password again</label>
    <input class="border-1 border-black" name="newAdminPassVerif" value="" type="password"/>
</div>

<button type="submit" name="submitNewAdmin" value="yes">Update</button>