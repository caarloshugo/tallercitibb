<?php if($contact) { ?>
	<p><?php print $contact[0]["ID_Contact"]; ?></p>
	<p><?php print $contact[0]["Name"]; ?></p>
	<p><?php print $contact[0]["Email"]; ?></p>
	<p><?php print $contact[0]["Telephone"]; ?></p>
	<p><?php print $contact[0]["Situation"]; ?></p>
<?php } else { ?>
	<p>No se econtro el registro</p>
<?php } ?>			
