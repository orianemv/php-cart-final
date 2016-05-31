<?php 
 $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<h1 class="ui header">My Super Products</h1>
	<hr class="ui divider">
	<section class="ui three stackable cards">
		<!-- boucle des produits ui card -->
		<?php
		foreach ($products as $product) : ?>
		<div class="ui card">
			<img src="<?=$product->picture?>" />
			<h2><?=$product->name?></h2>
			<p><?=$product->price?> euros</p>
			<button class="ui button">add to cart</button>
		</div>
		<?php endforeach?>

	</section>
</div>