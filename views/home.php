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
			<form action="cart/add" method="POST">
				<input type="hidden" name="id" value="<?=$product->id?>">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button class="ui fluid button" id="addToCart">add to cart</button>
			</form>
		</div>
		<?php endforeach?>

	</section>
</div>