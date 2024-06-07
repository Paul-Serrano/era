<?php 

?>
<div class="formGroup">
    <label for="newMail">Your mail</label>
    <input class="border-1 border-black" name="newAdminMail" value="<?php echo $_SESSION['admin']->getMail(); ?>" type="text" />
</div>

<div class="formGroup">
    <label for="newPass">Your mail</label>
    <input class="border-1 border-black" name="newAdminPass" value="<?php echo $_SESSION['admin']->getPass(); ?>" type="password" />
</div>

<div class="formGroup">
    <label for="newPassVerif">Your mail</label>
    <input class="border-1 border-black" name="newAdminPassVerif" value="<?php echo $_SESSION['admin']->getPass(); ?>" type="password"/>
</div>

<button type="submit" name="submitNewAdmin" value="yes">Update</button>