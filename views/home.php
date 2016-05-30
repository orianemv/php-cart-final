<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<h1 class="ui header">My Super Products</h1>
	<hr class="ui divider">
	<section class="ui three stackable cards">
		<?php foreach($products as $product):	?>
		<div class="ui card">
			<div class="image">
				<img src="<?= $product->picture ?>">
			</div>
			<div class="content">
			<a class="header"><?= $product->name ?></a>
			<br>
			<?= $product->price ?> &euro;
			</div>
			<div class="extra content">
				<form method="post" action="/cart/add">
				<input type="hidden" name="product_id" value="<?= $product->id ?>">
					<button class="ui labeled icon button">
						<i class="icon cart"></i> Add to cart
					</button>
				</form>
			</div>
		</div>
		<?php endforeach; ?>
	</section>
</div>