<?php 
use ism\lib\Session;
$array_error = [];
if (Session::keyExist("array_error")){
    $array_error = Session::getSession("array_error");
    Session::destroyKey("array_error");    
}
    $imgSrc = "/public/media/users_avatars/".$_SESSION["user_connect"]["avatar"];
?>

      <div class="container">
      <h1 class="text-center alert alert-dark">MODIFIER VOTRE COMPTE</h1>
        <p class="alert alert-dark">Photo de profil</p>
    <?php
        echo "<img src='https://source.unsplash.com/720x460/?person' class='img-thumbnail mx-auto d-block'>";
    ?><br><br>

      <form action="<?php ROOT_CONTROLLERS.'/security.php' ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label  class="form-label">Nom complet</label>
                <input disabled="disabled" type="text" class="form-control" name="nom_complet" value="<?php echo $_SESSION["user_connect"]["nom_complet"]?>">
                <?php if(isset($array_error["login"])):?>
                    <div id="emailHelp" class="form-text text-danger ">
                    <?= $array_error["nom_complet"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label  class="form-label">Adresse e-mail</label>
                <input disabled="disabled" type="text" class="form-control" name="login" value="<?php echo $_SESSION["user_connect"]["login"]?>">
                <?php if(isset($array_error["login"])):?>
                    <div id="emailHelp" class="form-text text-danger ">
                    <?= $array_error["login"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label  class="form-label">Role</label>
                <input disabled="disabled" type="text" class="form-control" name="login" value="<?php echo str_replace("ROLE_", "",$_SESSION["user_connect"]["role"])?>">
                <?php if(isset($array_error["role"])):?>
                    <div id="role" class="form-text text-danger ">
                    <?= $array_error["role"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label  class="form-label">Ancien mot de passe</label>
                <input type="password" class="form-control"name="password" >
                <?php if(isset($array_error["password"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["password"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nouveau mot de passe</label>
                <input type="password" class="form-control"name="new_password" >
                <?php if(isset($array_error["new_password"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["new_password"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label  class="form-label">Confirmer le nouveau mot de passe</label>
                <input type="password" class="form-control"name="confirm_new_password" >
                <?php if(isset($array_error["confirm_new_password"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["confirm_new_password"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label  class="form-label">Modifier votre Avatar : </label>
                <input type="file" class="form-control" name="avatar">
                <?php if(isset($array_error["avatar"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["avatar"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="row float-right">
             <button type="submit" class="btn btn-dark">Soumettre</button></button>
            </div>
        </form>

      </div>
