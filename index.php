<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

?>

<h1>Jeu de combat POO</h1>

<form method="post" action="">
	<p>
		<fieldset>
			<legend>Votre personnage</legend>
			<label for="joueur">Choisissez votre personnage :</label>
			<select name="joueur" id="joueur">
				<optgroup label="Humain">
					<option value="Chevalier">Chevalier</option>
					<option value="Fantassin">Fantassin</option>
					<option value="Paysan">Paysan</option>
				</optgroup>
				<optgroup label="Animal">
					<option value="Dragon">Dragon</option>
					<option value="Taureau">Taureau</option>
					<option value="Poulet">Poulet</option>
				</optgroup>
			</select>
			<label for="name">Donnez lui un nom :</label>
			<input type="text" name="name" id="name" required="" />	
		</fieldset>
	</p>
	<p>
		<fieldset>
			<legend>Votre adversaire</legend>
			<label for="adversaire">Choisissez votre adversaire :</label>
			<select name="adversaire" id="adversaire">
				<optgroup label="Humain">
					<option value="Chevalier">Chevalier</option>
					<option value="Fantassin">Fantassin</option>
					<option value="Paysan">Paysan</option>
				</optgroup>
				<optgroup label="Animal">
					<option value="Dragon">Dragon</option>
					<option value="Taureau">Taureau</option>
					<option value="Poulet">Poulet</option>
				</optgroup>
			</select>
		</fieldset>
	</p>
	<input type="submit" value="Lancer le jeu" />
</form>

<?php

function chargerClasse($classe)
{
	require $classe . '.php';
}
spl_autoload_register('chargerClasse');

if (isset($_POST['joueur']) && isset($_POST['name']) && isset($_POST['adversaire']))
{

	$perso1 = new $_POST['joueur']();
	$perso1->setName($_POST['name']);
	$perso2 = new $_POST['adversaire']();
	$perso2->setName('Méchant adversaire');


?>
<p>
	Votre personnage <?= $perso1->getName(); ?> est un <?= $perso1->getPersonnage(); ?>. Sa santé est de <?= $perso1->getSante(); ?>. Sa force de frappe sera aléatoirement entre <?= $perso1->getForceMin(); ?> et <?= $perso1->getForceMax(); ?>.
	<?php
	if (!empty($perso1->getPersonnage() === 'Chevalier' || $perso1->getPersonnage() === 'Paysan' || $perso1->getPersonnage() === 'Fantassin'))
	{
		echo ' Votre joueur étant un Humain, il possède une arme : ' . $perso1->getPersoArme()->getArme();
	}
	else {
		echo ' Votre joueur est un Animal, il ne possède pas d\'arme.';
	}
	?>
	<br />
	Votre adversaire <?= $perso2->getName(); ?> est un <?= $perso2->getPersonnage(); ?>. Sa santé est de <?= $perso2->getSante(); ?>. Sa force de frappe sera aléatoirement entre <?= $perso2->getForceMin(); ?> et <?= $perso2->getForceMax(); ?>.
	<?php
	if (!empty($perso2->getPersonnage() === 'Chevalier' || $perso2->getPersonnage() === 'Paysan' || $perso2->getPersonnage() === 'Fantassin'))
	{
		echo ' Votre adversaire étant un Humain, il possède une arme : ' . $perso2->getPersoArme()->getArme();
	}
	else {
		echo ' Votre joueur est un Animal, il ne possède pas d\'arme.';
	}
	?>	
	<br />
</p>

<?php

$tour = 1;

while (($perso1->getSante() > 0) && ($perso2->getSante() > 0)) 
{
	$perso1->frapper($perso2);
	$perso2->frapper($perso1);

	if (($perso1->getSante() <= 0) && ($perso2->getSante() <= 0)) {
		echo $perso2->getName() . ' a frappé ' . $perso1->getName() . ' avec une force de ' . $perso2->getForce() . '. ' . $perso1->getName() . ' a frappé ' . $perso2->getName() . ' avec une force de ' . $perso1->getForce() . '. ' . $perso1->getName() . ' et ' . $perso2->getName() . ' sont tous les deux morts !';
	}
	else if ($perso1->getSante() <= 0) {
		echo $perso2->getName() . ' a frappé ' . $perso1->getName() . ' avec une force de ' . $perso2->getForce() . '. ' . $perso1->getName() . ' est mort... ' . $perso2->getName() . ' a gagné !';
	}
	else if ($perso2->getSante() <= 0) {
		echo $perso1->getName() . ' a frappé ' . $perso2->getName() . ' avec une force de ' . $perso1->getForce() . '. ' . $perso2->getName() . ' est mort... ' . $perso1->getName() . ' a gagné !';
	}
	else {
	?>
	<p>
		Tour n°<?= $tour; ?><br />
		<?= $perso1->getName(); ?> a frappé <?= $perso2->getName(); ?> avec une force de <?= $perso1->getForce(); ?>. La nouvelle santé de <?= $perso2->getName(); ?> est de <?= $perso2->getSante(); ?>.<br />
		<?= $perso2->getName(); ?> a frappé <?= $perso1->getName(); ?> avec une force de <?= $perso2->getForce(); ?>. La nouvelle santé de <?= $perso1->getName(); ?> est de <?= $perso1->getSante(); ?>.
	</p>
	<?php
	$tour++;
	}
}

}
?>