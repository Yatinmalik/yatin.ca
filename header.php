<?php


echo '
<!DOCTYPE html>
<html>

<head>
<title>Event Website</title>
<link rel="stylesheet" type="text/css" href="indexy.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<div class="header">

  <h2>Yatin Malik</h2>

  <img src="https://drive.google.com/uc?id=1kh5NGFcfay9bYf0kknC6LqdmLN1kCtxO" alt="banner" width=1000px height=250px >
</div>

<div id="navbar">


';


if($active == 'index')
{echo '<a class="active" href="indexy.php">Home</a>';}
else
{echo '<a href="indexy.php">Home</a>';}

if($active == 'contact')
{echo '<a class="active" href="contact.php">Sign up for deals</a>';}
else
{echo '<a href="contact.php">Sign up for deals</a>';}

echo '
	<a href="indexy.php#bottom_of_the_page">Socials</a>
</div>

<div class="content">';
 
?>

