<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png"> <!-- FAVICON -->

	<title>Portefolio - Alexandre Nicol</title>
	<meta name="description" content="Design and Strategic Innovation studio based in Shanghai">
	<meta name="author" content="blank shanghai">

	<style>

		@font-face { 
		    font-family: 'Dinnext'; 
		    src: url('http://birkenstockbondibeach.com.au/fonts/Din_Next/Regular/dinnext_regular.eot'); 
		    src: url('http://birkenstockbondibeach.com.au/fonts/Din_Next/Regular/dinnext_regular?#iefix') format('embedded-opentype'), 
		         url('http://birkenstockbondibeach.com.au/fonts/Din_Next/Regular/dinnext_regular.woff') format('woff'), 
		         url('http://birkenstockbondibeach.com.au/fonts/Din_Next/Regular/dinnext_regular.ttf') format('truetype'), 
		         url('http://birkenstockbondibeach.com.au/fonts/Din_Next/Regular/dinnext_regular.svg#Dinnext') format('svg');
		    font-weight: 400;
		    font-style: normal;
		}

		body{
			background: white;
			font-family: 'Dinnext';
		}

			.main{
				margin: 5% auto;
				border: 1px solid #333333;
				padding: 40px;
				width: 80%;
				max-width: 630px;
			}

			h1{
				font-size: 20px;
				text-align: center;
			}
			h2{ font-size: 16px; }
			p{ font-size:12px; }

			button{
				font-size: 12px;
				line-height: 1.42857;
				padding: 6px 12px;
				border: 1px solid #94c7e4;
				border-radius: 4px;
				text-align: center;
				white-space: nowrap;
				vertical-align: middle;
				cursor: pointer;
				-moz-user-select: none;
				background-image: none;
			}

			.Confirm{
				background-color: #94c7e4;
				border-color: #94c7e4;
				color: #fff;
			}
	
			.infos{
				font-size: 12px;
				margin-left: 110px;
			}


		@media screen and (min-width: 479px){
			h1{ text-align: center; }
			h2{ font-size: 24px; }
			p{ font-size: 16px; }
		}
	}
	</style>

</head>

<body>
<?php
	if(isset($_POST)){
	   if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["message"])){

		$text = nl2br($_POST["message"]);

			$var = array("name" => $_POST["name"],	"email" => $_POST["email"], "phone"  => $_POST["phone"], "message"  => $_POST["message"]);
			$var = http_build_query($var);
			$link = 'http://birkenstockbondibeach.com.au/views/mail_send2.php?' . $var;


		echo "<script type=\"text/javascript\" >document.title = 'Hello " . $_POST["name"] . "'</script>";
	   	echo 	"<div class=\"main\">
	   				<h1>Please make sure everything is okay.</h1> <br />
	   				<h2>Name : " . $_POST["name"] . "</h2>
	   				<h2>Email : " . $_POST["email"] . "</h2>
	   				<h2>Phone : " . $_POST["phone"] . "</h2><br />
	   				<p>Content : <br /><br />". $text . "</p><br />
	   				<button class=\"Confirm\" type=\"button\" onclick=\"window.location='" . $link . "'\" >Confirm the Mail</button> <button type=\"button\" onclick=\"window.location='http://birkenstockbondibeach.com.au/views/contact.html'; \" >Cancel</button>
	   				<p class=\"infos\">(All data will be erased)</p>
	   			</div>";
		}
	}

?>

</body>