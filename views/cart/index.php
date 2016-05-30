<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="column">
			<h1 class="ui container">Mon Panier</h1>
			<div class="ui list">
				<div class="item">
					<a href="/cart/checkout" class="ui button">Finaliser ma commande</a>
				</div>
				<h4 class="item header">Montant total : <?=$amount?> &euro;</h4>
				<h4 classs="item header">Nombre produits : <?=count($products)?></h4>
			</div>
		</div>
		<div class="column">
			<table class="ui table compact">
				<?php foreach($products as $product): ?>
					<tr><td class="collapsing"><img width="200" src="<?=$product->picture?>" alt=""></td><td><?=$product->name?></td><td class="collapsing"><?=$product->price?> &euro;</td></tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>


</div>