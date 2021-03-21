<?php require_once(dirname(__DIR__).'/view/head.php');?>

<?php if ($_SESSION['user'] == true) { ?>

    <div>
    <pre class="container">
    
        <?php 
            $file = require_once(dirname(__DIR__).'/log.txt');
            error_log(date('l jS \of F Y h:i:s A') . ": Affichag Logs\r\n", 3, '../log.txt');

        ?>
    </pre>
</div>

<?php } ?>

<?php require_once(dirname(__DIR__).'/view/footer.php');?>