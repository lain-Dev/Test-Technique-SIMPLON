<?php require_once(dirname(__DIR__).'/view/head.php');
?>


<?php if ($_SESSION['user'] == true) { ?>

<form class="container" action="home.php" method="POST" id="home">
  <div class="form-row">

    <div class="container row row-cols-lg-2 row-cols-1"> 
      <div class="col">
        <i class="fa fa-desktop mr-2" aria-hidden="true"></i>
        <label for="poste">Poste</label>
        <select class="form-control" id="poste" name="poste">
          <option value="id_poste">01</option>
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

      <div class="col-auto mt-2">
      <i class="fa fa-id-card-o" aria-hidden="true"></i>
        <label for="num_carte">ID abonné</label>
        <input type="number" min="1" class="form-control form-control-sm" id="num_carte" name="num_carte" required placeholder="Entrez le numéro carte de l'utilisateur" value="<?php if(isset($_POST['num_carte'])){echo htmlspecialchars($_POST['num_carte'], ENT_QUOTES);}?>">
      </div>
    </div>
    
   
      <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
 

  </div>

</form>                      
<?php } ?>




        
      <?php require_once(dirname(__DIR__).'/controller/showPostes.php'); ?>	
			<?php require_once(dirname(__DIR__).'/model/listHome.php'); ?>







<?php require_once(dirname(__DIR__).'/view/footer.php');?>

