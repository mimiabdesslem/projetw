<?PHP
include "../entities/historique.php";
include "../core/historiqueC.php";
if (isset($_GET['reference'])){
	$HistoriqueC=new HistoriqueC();
    $result=$HistoriqueC->recupererHistorique($_GET['reference']);
	foreach($result as $row){
		$reference=$row['reference'];
		$nomarticle=$row['nomarticle'];
		$marque=$row['marque'];
		$prix=$row['prix'];


?>
<HTML>
<head>
</head>
<body>
<form method="POST">
<table>
<caption>Modifier Historique</caption>

<tr>
<td>Reference</td>
<td><input type="text" name="Reference" value="<?PHP echo $reference ?>"></td>
</tr>
<tr>
<td>NomArticle</td>
<td><input type="text" name="NomArticle" value="<?PHP echo $nomarticle ?>"></td>
</tr>
<tr>
<td>Marque</td>
<td><input type="text" name="Marque" value="<?PHP echo $marque ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="text" name="Prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="reference" value="<?PHP echo $_GET['reference'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Historique=new Historique($_POST['NomArticle'],$_POST['Marque'],$_POST['Prix']);
	$HistoriqueC->modifierHistorique($Historique,$_GET['reference']);
    header('Location: afficherHistorique.php');
}
?>
</body>
</HTMl>