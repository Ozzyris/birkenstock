<?php

	$destinataire = "birkenstockbondi@gmail.com";
	$sujet = "NEW message from Birkenstock Bondi Beach.com" ;
	$text = nl2br($_GET['message']);

	$contenu="";
	$contenu.="Name: ". $_GET['name'] ."\r\n";
	$contenu.="Phone: ". $_GET['phone'] ."\r\n";
	$contenu=$contenu."\r\nMessage:\r\n" . $text;
	
	$entete = "From:" . $_GET['email'];


	mail($destinataire, $sujet, $contenu, $entete);
	header('Location: http://birkenstockbondibeach.com.au/views/contact.html?answer=send');
