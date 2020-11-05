<?php
    include("header.php");
   
    require('php/database.php');

    $database = connectToDatabase();

    $query = 'SELECT * FROM projets WHERE id = ' . $_GET["id"];

    $sql = $database->prepare($query);
    $sql->execute();

    $fetch = $sql->fetchAll();
?>

<main>

  <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3> </h3>
        <p> </p> 
      </div>
    </section><!-- #call-to-action -->

 <section id="about">
      <div class="container">

        <header class="section-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          <h3><?php echo htmlspecialchars($fetch[0]["titre"]); ?></h3> 
        </header>

        <div class="card mb-3" style="padding-top: 10px;">
          <center> 
          <img class="card-img-top" src="<?php echo "admin/fichiers/". $fetch[0]["img"]; ?>" alt="<?php echo $fetch[0]["titre"]; ?>" style=" width: 600px; " />
          </center>
          <div class="card-body"> 
            <p class="card-text">
              <?php echo htmlspecialchars($fetch[0]["description"]); ?>  
            </p> 
          </div>
        </div>

      </div>
    </section><!-- #about -->


<?php
  include("footer.php");
?>
