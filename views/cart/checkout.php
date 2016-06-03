<?php 
$this->layout('layout', ['title' => 'Super boutique']) ?>



<div class="ui padded grid">
	<form class="ui six wide column centered form" action="/cart/checkout" method="post">
		<label for="first_name">First Name</label>
		<input name="first_name" type="text" required="true" placeholder="First Name">
		<label for="last_name">Last Name</label>
		<input name="last_name" type="text" required="true" placeholder="Last Name">
		<label for="address">Address</label>
		<input type="text" name="address" required="true" placeholder="Address">
		<label for="postcode">Postcode</label>
		<input type="text" name="postcode" required="true" placeholder="Postcode">			
		<label for="phone">Phone Number</label>
		<input type="text" name="phone" required="true" placeholder="Phone Number">
		<br><br>
		<button class="ui pink button" type="submit">Check !</button>
	</form>
</div>

