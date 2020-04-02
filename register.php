<?php
 	include("header.php");
?>

<main>

	<section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      </div>
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Inscription</h3>
        </div> 
        <div class="form">
          <div id="sendmessage">Votre compte a bien été créé</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
                <div class=" form-group col-md-6 offset-md-3">
  					<input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  </div>
                <div class=" form-group col-md-6 offset-md-3">
                <input type="text" name="surname" class="form-control" id="surname" placeholder="Prénom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
  				</div>
  				<div class=" form-group col-md-6 offset-md-3">
  					<input type="text" name="login" class="form-control" id="login" placeholder="Login" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
  				</div>
  				<div class=" form-group col-md-6 offset-md-3">
               	 <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" data-rule="email" data-msg="Mot de passe" />
                  </div>
                  <div class=" form-group col-md-6 offset-md-3">
               	 <input type="password" class="form-control" name="password-bis" id="password-bis" placeholder="Confirmer votre mot de passe" data-rule="password" data-msg="Mot de passe" />
  				</div>
            </div> 
            <div class="text-center"><button type="submit" >Inscription</button></div>
          </form>
        </div>

      </div>
    </section>
  </main>

<?php
 	include("footer.php");
?>
