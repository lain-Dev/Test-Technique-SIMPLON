<?php foreach($postes as $poste):?>
    <div class="container text-center mb-1" style="margin-top: 40px;">
      <div class="jumbotron">

        <table class="table table-striped">
            <h3>Poste: <?= htmlspecialchars($poste->poste); ?></h3>
            <thead>
                <tr>
                <th scope="col">Date</th>
                <th scope="col">Plage horaire</th>
                <th scope="col">Numéro membre</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($affectations as $id_poste => $affectation ):?>
                
                
                <tr>
                <td><?= htmlspecialchars($affectation->date); ?></td>
                <td><?= htmlspecialchars($affectation->horaire); ?></td>
                <td><?= htmlspecialchars($affectation->id_user); ?></td>
                <td>
                    <form action="../controller/deleteAffectation.php" method="POST" style="margin: 0px; padding: 0px;">

                        <input type="hidden" value="<?= htmlspecialchars($affectation->id);?>" name="id"><!--Input cacher poure récupérer ID de la ligne ! -->

                        <button class="btn btn-danger btn-sm" type="submit" name="supprimerAffectation" style="margin-top: 0px;">X</button>
                    </form> 
                </td>
                <tr>
            
            <?php endforeach; ?>  
            </tbody>
            </table>
            <!---->
        </div>
        <div class="push-footer"></div>
    </div>

<?php endforeach; ?>  