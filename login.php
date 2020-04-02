<?php
    include("admin/config.php");
    if(count($_POST))
    { 
       $email=stripslashes($_POST['email']);
       $password=sha1($_POST['password']);
      $connectReq=$classadherant->Login($email,$password);
        if($connectReq->rowCount()>0)
        {
             $tabses=$connectReq->fetch();  
             $_SESSION['user']['email']=$email;
             $_SESSION['user']['role']=stripslashes($tabses['role']);
             $_SESSION['user']['id']=$tabses['id']; 
             $_SESSION['user']['nom']=stripslashes($tabses['nom']); 
             $_SESSION['user']['prenoms']=stripslashes($tabses['prenoms']);  
             header("location:admin/index.php");
             exit(); 
        }else{
            $notification="<strong>Erreur!</strong> Login ou Mot de passe incorrect!";  
        }  
    }  

  include("header.php");
?>



<main>
	<section   class="wow fadeIn" >
      <div class="container text-center">
      </div>
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container" style="margin-top: 50px;">

        <div class="section-header">
          <h3>Connexion</h3>
          <p></p>
        </div> 
        <div class="form">
          <form action="" method="post">
            <div class="form-row">
  				<div class=" form-group col-md-6 offset-md-3">
            <?php if(!empty($notification)){ ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $notification ?>
              </div>
            <?php } ?>
  					<input type="email" name="email" class="form-control"  placeholder="Email" />
  				</div>
  				<div class=" form-group col-md-6 offset-md-3">
              <input type="password" class="form-control" name="password"   placeholder="Mot de passe"  />
  				</div>
            </div> 
            <div class="text-center">
              <button type="submit">Connexion</button>
            </div>
          </form>
          <div class="col-md-6 offset-md-3"><a href="#">Mot de passe oublié?</a></div>
        </div>
      </div>
    </section>
  </main>

<?php
 	include("footer.php");
?>
<script type="text/javascript">
  
</script>