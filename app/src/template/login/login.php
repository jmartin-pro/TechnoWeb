<?php
    include("template/base/header_html.php");
?>

<?= $errorDiv?>

<form action="<?= $urlAction?>" method="POST">
    <label for="<?= BuilderUtilisateur::FIELD_LOGIN?>">Login</label><input name="<?= BuilderUtilisateur::FIELD_LOGIN?>" placeholder="Login" id="<?= BuilderUtilisateur::FIELD_LOGIN?>" value="<?= $loginFieldValue?>"/>
    <label for="<?= BuilderUtilisateur::FIELD_PASSWORD?>">Mot de passe</label><input name="<?= BuilderUtilisateur::FIELD_PASSWORD?>" placeholder="Mot de passe" id="<?= BuilderUtilisateur::FIELD_PASSWORD?>" type="password"/>
   
    <input type="submit" value="Valider"/>
</form>

<?php
    include("template/base/footer_html.php");
?>