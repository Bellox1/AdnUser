<?php

    $req = $pdo->query("SELECT * FROM users");  // Récupération de toutes les données de la table users
    $users = $req->fetchAll(PDO::FETCH_ASSOC);
     //print_r(json_encode($users)); // pour debogger
    //exit();



?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-9 col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-primary">Liste des utilisateurs</h2>
                </div>
                <div class="card-body">
                    <table class="table table-hover text-center align-middle">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Age</th>
                                <th>Identifiant</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user): ?>
                                <tr>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo htmlspecialchars($user['nom']); ?></td>
                                    <td><?php echo htmlspecialchars($user['prenom']); ?></td>
                                    <td><?php echo htmlspecialchars($user['age']); ?></td>
                                    <td><?php echo htmlspecialchars($user['identifiant']); ?></td>  
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="update_user.php?id=<?php echo $user["id"];?>" class="btn btn-success btn-sm" id="update">Modifier</a>
                                            <a href="includes/users/delete.php?id=<?php echo $user["id"]; ?>" 
                                               class="btn btn-danger btn-sm" 
                                               onclick="return confirm('⚠️ Es-tu sûr de vouloir supprimer cet utilisateur ?')">
                                                Supprimer
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php if (empty($users)): ?>
                        <div class="alert alert-info text-center my-3">Aucun utilisateur enregistré pour le moment.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
