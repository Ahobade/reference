   <?php
   	
   
   		$bdd = new PDO("mysql:host=localhost;dbname=marketplaces","root", "");
   
	
if(isset($_POST['nom_boutique']) AND isset($_POST['lieu_boutique']) AND isset($_POST['type_produit']) AND isset($_POST['contacts']) AND isset($_POST['mdp']))
{
	if($_POST['mdp'] == $_POST['mdp_1'])
	{
		$req = $bdd->prepare("INSERT INTO boutique (nom_boutique , lieu_boutique , type_produit , contacts , mdp) VALUES(?,?,?,?,?	)");
	$req->execute(array($_POST['nom_boutique'],$_POST['lieu_boutique'],$_POST['type_produit'],$_POST['contacts'],$_POST['mdp']));
	}
	else
		echo "Les mots de passes entrés sont pas les mêmes";
	

}


?>