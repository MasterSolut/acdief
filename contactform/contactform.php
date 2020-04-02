<?php 
		 
	$copie ="oui";
	$destinataire="acdieftogo@gmail.com";
	$email=$_POST["email"];
	 
	$objet=$_POST["subject"];
	$message=$_POST["message"];

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	            $headers .= 'From: '.$_POST["name"].' <'.$email.'>' . "\r\n" .
	            'Reply-To:'.$email. "\r\n" .
	            'Content-Type: text/html; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
	            'Content-Disposition: inline'. "\r\n" .
	            'Content-Transfer-Encoding: 7bit'." \r\n" .
	            'X-Mailer:PHP/'.phpversion(); 
	if ($copie == 'oui')
    {
        $cible = $destinataire.';'.$email;
    }
    else
    {
        $cible = $destinataire;
    };

    // Remplacement de certains caractères spéciaux
    $objet = str_replace("&#039;","'",$objet);
    $objet = str_replace("&#8217;","'",$objet);
    $objet = str_replace("&quot;",'"',$objet);
    $objet = str_replace('<br>','',$objet);
    $objet = str_replace('<br />','',$objet);
    $objet = str_replace("&lt;","<",$objet);
    $objet = str_replace("&gt;",">",$objet);
    $objet = str_replace("&amp;","&",$objet);
            
    $message = str_replace("&#039;","'",$message);
    $message = str_replace("&#8217;","'",$message);
    $message = str_replace("&quot;",'"',$message);
    $message = str_replace('<br>','',$message);
    $message = str_replace('<br />','',$message);
    $message = str_replace("&lt;","<",$message);
    $message = str_replace("&gt;",">",$message);
    $message = str_replace("&amp;","&",$message); 
    // Envoi du mail
    $num_emails = 0;
    $tmp = explode(';', $cible);
    
    foreach($tmp as $email_destinataire)
    {
        if (mail($email_destinataire, $objet, $message, $headers))
            $num_emails++;
    } 

     if((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
    { 
        $msg=1;
    }
    else
    {
        $msg="L'envoi du mail a &eacute;chou&eacute;, veuillez r&eacute;essayer SVP!";
    }

  	echo json_encode($msg);               
 ?>