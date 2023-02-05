<?php 

use ism\lib\Session;

//verification des erreur de session
$array_error = [];
if (Session::keyExist("array_error")){
    //recupeeration des erreur de la session dans la variable local
    
    $array_error = Session::getSession("array_error");
    //dd($array_error);
    //suppression des erreur dans la session

    Session::destroyKey("array_error");
    
}

?>
      <div class="container">
      <h1 class="text-center alert alert-dark">CONNEXION</h1>
      <?php if(isset($array_error["error_login"])): ?>
        <div class="alert alert-danger my-2 " role="alert">
            <strong><?= $array_error["error_login"]?></strong>
        </div>
    <?php endif ?>
      <form action="<?php path("security/login") ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                <input type="text" class="form-control" name="login">
                <?php if(isset($array_error["login"])):?>
                    <div id="emailHelp" class="form-text text-danger ">
                    <?= $array_error["login"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control"name="password" >
                <?php if(isset($array_error["password"])):?>
                    <div id="emailHelp" class="form-text text-danger ">
                    <?= $array_error["password"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="row float-right">
             <button type="submit" class="btn btn-dark">Connexion</button>
            </div>
            
        </form>

      </div>