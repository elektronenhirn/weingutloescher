<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
    <head>
        <title>Weingut und Brennerei Loescher Erben</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<!-- import the stylesheets -->
		<link rel="stylesheet" href="order.css" type="text/css" media="screen" />
		
		<!-- import von parsley -->
		<script type="text/javascript" src="js/jquery-2.0.0.js"></script>
		<script type="text/javascript" src="js/parsley.js"></script>
		

    </head>
    <body>
        <h1>Lieferanschrift</h1>
		
		<form action="processorder.php" method="post" id="customer" data-validate="parsley">
		<div class="row">
			<label for="Anrede" id="Anrede-ariaLabel">Anrede</label>
			<select id="Anrede" name="Anrede" aria-labelledby="Anrede-ariaLabel">
				<option value="Herr">Herr</option>
				<option value="Frau">Frau</option>
			</select>
		</div>
		<div class="row requiredRow">
			<label for="Vorname" id="Vorname-ariaLabel">Vorname</label>
			<input id="Vorname" name="Vorname" type="text" aria-labelledby="Vorname-ariaLabel" class="required" data-notblank="true" data-minlength="2" title="Vorname. Dieses Feld erfordert eine Eingabe" />
		</div>
		<div class="row requiredRow">
			<label for="Nachname" id="Nachname-ariaLabel">Nachname</label>
			<input id="Nachname" name="Nachname" type="text" aria-labelledby="Nachname-ariaLabel" class="required" data-notblank="true" data-minlength="2" title="Nachname. Dieses Feld erfordert eine Eingabe" />
		</div>
		<div class="row requiredRow">
			<label for="Strasse" id="Straße-ariaLabel">Straße</label>
			<input id="Strasse" name="Strasse" type="text" aria-labelledby="Strasse-ariaLabel" class="required" data-notblank="true" data-minlength="2" title="Straße. Dieses Feld erfordert eine Eingabe" />
		</div>
		<div class="row requiredRow">
			<label for="PLZ" id="PLZ-ariaLabel">PLZ</label>
			<input id="PLZ" name="PLZ" type="text" aria-labelledby="PLZ-ariaLabel" class="required" data-notblank="true" data-minlength="2" title="PLZ. Dieses Feld erfordert eine Eingabe" />
		</div>
		<div class="row requiredRow">
			<label for="Ort" id="Ort-ariaLabel">Ort</label>
			<input id="Ort" name="Ort" type="text" aria-labelledby="Ort-ariaLabel" class="required" data-notblank="true" data-minlength="2" title="Ort. Dieses Feld erfordert eine Eingabe" />
		</div>
		<div class="row requiredRow">
			<label for="Land" id="Land-ariaLabel">Land</label>
			<select id="Land" name="Land" aria-labelledby="Land-ariaLabel" class="required" data-notblank="true" data-minlength="2" title="Land. Dieses Feld erfordert eine Eingabe">
				<option value="Belgien">Belgien </option>
				<option value="Bulgarien">Bulgarien </option>
				<option value="Dänemark">Dänemark </option>
				<option value="Deutschland" selected="selected">Deutschland</option>
				<option value="Estland">Estland </option>
				<option value="Finnland">Finnland </option>
				<option value="Frankreich">Frankreich </option>
				<option value="Griechenland">Griechenland </option>
				<option value="Irland">Irland </option>
				<option value="Italien">Italien </option>
				<option value="Kroatien">Kroatien </option>
				<option value="Lettland">Lettland </option>
				<option value="Litauen">Litauen </option>
				<option value="Luxemburg">Luxemburg </option>
				<option value="Malta">Malta </option>
				<option value="Niederlande">Niederlande </option>
				<option value="Österreich">Österreich </option>
				<option value="Polen">Polen </option>
				<option value="Portugal">Portugal </option>
				<option value="Rumänien">Rumänien </option>
				<option value="Schweden">Schweden </option>
				<option value="Slowakei">Slowakei </option>
				<option value="Slowenien">Slowenien </option>
				<option value="Spanien">Spanien </option>
				<option value="Tschechische Republik">Tschechische Republik </option>
				<option value="Ungarn">Ungarn </option>
				<option value="Vereinigtes Königreich">Vereinigtes Königreich </option>
				<option value="Zypern">Zypern</option>
			</select>
		</div>
		<div class="row requiredRow">
			<label for="E-Mail" id="E-Mail-ariaLabel">E-Mail</label>
			<input id="E-Mail" name="E-Mail" type="email" aria-labelledby="E-Mail-ariaLabel" class="required" data-notblank="true" data-minlength="2" title="Land. Dieses Feld erfordert eine Eingabe" />
		</div>
		<div class="row requiredRow">
			<label for="Telefon" id="Telefon-ariaLabel">Telefon</label>
			<input id="Telefon" name="Telefon" type="tel" aria-labelledby="Telefon-ariaLabel" class="required" data-notblank="true" data-minlength="2" title="Land. Dieses Feld erfordert eine Eingabe" />
		</div>
		<div class="row">
			<label for="Anmerkungen" id="Anmerkungen-ariaLabel">Anmerkungen</label>
			<textarea id="Anmerkungen" name="Anmerkungen" cols="20" rows="3" aria-labelledby="Anmerkungen-ariaLabel"></textarea>
		</div>
		<div class="row">
		<input type="submit" value="Bestellen" />
		</div>
		</form>
	</body>
</html>