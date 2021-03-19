<?php 
require_once(dirname(__DIR__).'/view/head.php');
require_once(dirname(__DIR__).'/controller/showPostes.php');
require_once(dirname(__DIR__).'/controller/showUsers.php');
?>


<?php if ($_SESSION['user'] == true) { ?>

<form class="container" action="../controller/affectation.php" method="POST">
  <div class="form-row">

    <div class="container row row-cols-lg-2 row-cols-1"> 
      <div class="col">
        <i class="fa fa-desktop mr-2" aria-hidden="true"></i>
        <label for="id_poste">Poste</label>
        <select class="form-control" name="id_poste">
          <?php foreach($postes as $poste):?>
            <option value="<?= htmlspecialchars($poste->id); ?>">
              <?= htmlspecialchars($poste->poste); ?>
            </option>
          <?php endforeach; ?> 
        </select>
      </div>

      <div class="col">
      <i class="fa fa-clock-o" aria-hidden="true"></i>
              <label for="horaire">Plage horaire</label>
              <select class="form-control" id="horaire" name="horaire">
                <option value="1">8h à 9h</option>
                <option value="2">9h à 10h</option>
                <option value="3">10h à 11H</option>
                <option value="4">11h à 12h</option>
                <option value="5">14h à 15h</option>
                <option value="6">15h à 16h</option>
              </select>
      </div>
    </div>

    <div class="container row row-cols-lg-2 row-cols-1 mt-2"> 
      <div class="col">
      <i class="fa fa-calendar" aria-hidden="true"></i>
        <label for="date">Date</label>
        <input class="form-control" type="date" value="<?php if(isset($_POST['date'])){echo htmlspecialchars($_POST['date'], ENT_QUOTES);}?>" id="date" name="date" required>
      </div>

      <!--choix présentation 01-->
      <!-- <div class="col-6 mt-2">
        <i class="fa fa-id-card-o" aria-hidden="true"></i>
        <label for="id_user">ID abonné</label>
        <input type="number" min="1" class="form-control form-control-sm" name="id_user" required placeholder="Numéro utilisateur" value="<?php if(isset($_POST['id_user'])){echo htmlspecialchars($_POST['id_user'], ENT_QUOTES);}?>">
      </div> -->

      <!--choix présentation 02-->
      <div class="col-6">
      <i class="fa fa-id-card-o" aria-hidden="true"></i>
        <label for="id_user">ID abonné</label>
        <select class="form-control" name="id_user">
          <?php foreach($users as $user):?>
            <option value="<?= htmlspecialchars($user->id); ?>">
              <?= htmlspecialchars($user->id); ?>
            </option>
          <?php endforeach; ?> 
        </select>
      </div>

    </div>
    
   
      <button type="submit" class="btn btn-primary btn-block" name="affectation">Envoyer</button>
 

  </div>

</form>                      
<?php } ?>




        
      <?php require_once(dirname(__DIR__).'/controller/showPostes.php'); ?>	
			<?php require_once(dirname(__DIR__).'/model/listHome.php'); ?>







<?php require_once(dirname(__DIR__).'/view/footer.php');?>

