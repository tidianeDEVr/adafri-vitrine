<h1 class="text-center alert alert-dark">LISTE DES UTILISATEURS</h1>
<table class="table mt-5 container table-bordered">
    <thead>
        <tr>
            <th>Nom et Prenom</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users['data'] as  $user):?>
        <tr>
            <td><?= $user["nom_complet"] ?></td>
            <td><?= $user["login"] ?></td>
            <td><?= $user["role"] ?></td>
        </tr>
    <?php  endforeach;?>
        
        
    </tbody>
</table>
