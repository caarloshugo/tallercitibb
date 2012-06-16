<?php foreach($contacts as $contact) { ?>
	<p><?php print $contact["ID_Contact"]; ?></p>
	<p><?php print $contact["Name"]; ?></p>
	<p><?php print $contact["Email"]; ?></p>
	<p><?php print $contact["Telephone"]; ?></p>
	<p><?php print $contact["Address"];?></p>
	<p>
		<a href="<?php print path("contact/" . $contact["ID_Contact"], FALSE, FALSE);?>" title="<?php print $contact["Name"]; ?>">Ver</a>
	</p>
	
	<br/><br/>
<?php } ?>
