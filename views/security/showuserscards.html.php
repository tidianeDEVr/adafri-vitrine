<!-- -----------------------------------------------------------CONTAINER -->
<div class="container">
    <h1 class="text-center alert alert-dark">LISTE DES UTILISATEURS</h1>
      <div class="row">
      <?php foreach($utilisateurs["data"] as $utilisateur): ?>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="<?php 
                echo "../media/".$utilisateur["avatar"];
              ?>"
              
              alt="Avatar"
            />
            <div class="card-body">
                <h5 class="text-center"><?php echo "$utilisateur[nom_complet]"?></h5>
                <div class="text-center">
                <span class="badge badge-danger"><?=  $utilisateur["role"];?></span>
                </div>
            </div>
          </div>
        </div>
        <?php endforeach?>
      </div>
      
      <div class="row text-center">
        <div class="col-sm-4 offset-sm-4">
          <ul class="pagination pl-4">
              <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
              </li>
            </ul>
        </div>
      </div> 
    </div>

