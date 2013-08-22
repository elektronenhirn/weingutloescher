<?php

	function displaySchnaps($schnaps)
	{
		?>
			<tr>
				<td><img src="<?php echo $schnaps->Bild;?>"></img></td>
				<td> <?php echo $schnaps->Title; ?></td>
			</tr>
			<tr>
				<form action="displayschnaepse.php" method="post" id="<?php echo $schnaps->Id;?>" data-validate="parsley">
					<input type="submit" value="Bestellen" name="<?php echo $schnaps->Id?>"/>
				</form>
			</tr>
		<?php
		
	}
?>