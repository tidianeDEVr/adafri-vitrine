<?php 
use ism\lib\Session;
//verification des erreur de session
$array_error = [];
if (Session::keyExist("array_error")){
    //recupeeration des erreur de la session dans la variable local
    $array_error = Session::getSession("array_error");
    Session::destroyKey("array_error");    
}
?>
      <div class="container">
      <h1 class="text-center alert alert-dark">INSCRIPTION</h1>
      <form action="<?php ROOT_CONTROLLERS.'/security.php' ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom"<?php
                            echo !isset($array_error["nom"]) && isset($array_post["nom"])?trim($array_post["nom"]):'';?>
                        >
                        <?php if(isset($array_error["nom"])):?>
                            <div  class="form-text text-danger ">
                            <?= $array_error["nom"]; ?></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Prénom</label>
                        <input type="text" class="form-control" name="prenom">
                        <?php if(isset($array_error["prenom"])):?>
                            <div  class="form-text text-danger ">
                            <?= $array_error["prenom"]; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="text" class="form-control" name="login">
                <?php if(isset($array_error["login"])):?>
                    <div id="emailHelp" class="form-text text-danger ">
                    <?= $array_error["login"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control"name="password" >
                <?php if(isset($array_error["password"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["password"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label  class="form-label">Confirm password</label>
                <input type="password" class="form-control"name="confirm_password" >
                <?php if(isset($array_error["confirm_password"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["confirm_password"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="">Role</label>
              <select class="form-control" name="role" id="">
                <option value="ROLE_ETUDIANT">Etudiant</option>
                <option value="ROLE_PROFESSEUR">Professeur</option>
              </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">Avatar (facultative)</label>
                <input type="file" class="form-control" name="avatar">
                <?php if(isset($array_error["avatar"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["avatar"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="row float-right">
             <button type="submit" class="btn btn-dark">Inscription</button></button>
            </div>
        </form>

      </div>
