<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1><strong>TROJAN HORSE</h1>
         <p><img width="500" src="./libs/images/TROJAN HORSE.png"/></p>
         <h1><font face="Alef"> OUR TEAM</h1>
                <li>Pigera.A.C.J -204159E</li>
                <li>Silva.W.H.I-204202G</li>
                <li>Kavindi J.A.D.A.-204100R</li>
                <li>Basnayaka C.S.L - 204019C</li>
                <li>Sankalpanee D.J.M.R - 204191T</li>
                <li>Jayarathna I.P.K.T- 204082K</li>
                <li>Adhikari A.N.K - 204002T</li>
                <li>Piyumal J.K.P. - 204162G</li>  
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
