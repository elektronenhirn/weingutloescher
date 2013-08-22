<?php
	include 'loescher.php';
	include 'shoppingcart.php';
	include 'schnaps.php';
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		reset($_REQUEST);
		$schnaps_id = key($_REQUEST);
		echo "Added Schnaps " . $schnaps_id . " to cart";
		GetShoppingCart()->addArticle($schnaps_id, 1);
		exit;
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
    <head>
        <title>Weingut und Brennerei Loescher Erben</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
    </head>
    <body>
		<table>
<?php
		foreach ($allArticles->schnaepse() as $schnaps)
		{
			displaySchnaps($schnaps);
		}
?>
		</table>
	</body>
</html>