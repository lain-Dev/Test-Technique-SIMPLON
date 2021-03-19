
<?php foreach($postes as $poste):?>
    <div class="container text-center" style="margin-top: 40px;">
      <div class="jumbotron">

        <table class="table table-striped">
            <h3><?= htmlspecialchars($poste->poste); ?></h3>
            <thead>
                <tr>
                <th scope="col">Date</th>
                <th scope="col">Plage horaire</th>
                <th scope="col">Numéro membre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>15/03/2021</td>
                <td>8h à 9h</td>
                <td>465</td>
            </tbody>
            </table>
            <!---->
        </div>
        <div class="push-footer"></div>
    </div>

<?php endforeach; ?>  