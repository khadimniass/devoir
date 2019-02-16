<!DOCTYPE html>
<html>
<head>
	<title>mon essai</title>
</head>
<body background="red">
<table border="4" align="center">
<td>	
	<?php
	include"imag.php";
$personne=array(
"prenom"=>"Khadim", 
"nom"=>"Niass",
"tel"=>"77 195 87 13",
"adresse"=>"Touba Darou Khoudosse",
"e-mail"=>"niassssn@gmail.com",
"date de naissance"=>"15/06/1998",
"Slack"=>"khadimniass");
?>
<table border="4" align="center">
	<?php
	foreach ($personne as $key => $value){
		if ($key!="tel"){
		?>
	<tr>
		<td><?= $key ?></td>
		<td>:</td>
		<td><?= $value?></td>
	</tr>
<?php
}
?>
	<?php
 	if ($key=="tel"){
	?>
	<tr>
		<td>telephone</td>
		<td>:</td>
		<td><?= $value?></td>
	</tr>
<?php	
	}
}
?>
</table>
</td>
</table>
</body>
</html>