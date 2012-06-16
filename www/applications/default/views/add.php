<?php print isset($alert) ? $alert : NULL; ?>

<form action="<?php print path("default/add");?>" method="post">
	<p>
		Name <input class="input-large" name="name" type="text" placeholder="Name">
	</p>
	
	<p>
		Emial <input class="input-large" name="email" type="text" placeholder="Email">
	</p>
	
	<p>
		Telephone <input class="input-large" name="telephone" type="text" placeholder="telephone">
	</p>
	
	<p>
		Address <input class="input-large" name="address" type="text" placeholder="address">
	</p>
	
	<p>
		<button class="btn" name="add" type="submit" value="add">Add</button>
	</p>
</form>
