<?php  
	
	// conditional statements

	// $price =20;
	// if($price<10)
	// {
	// 	echo 'the condition is met';
	// }
	// elseif ($price<30) {
	// 	// code...
	// 	echo 'elseif condition  met';
	// }
	// else
	// {
	// 	echo 'condition not met';
	// }

	$products = [
		['name'=> 'shiny star','price'=>20],
		['name'=> 'green shell','price'=>10],
		['name'=> 'red shell','price'=>15],
		['name'=> 'gold coin','price'=>5],
		['name'=> 'lightning bolt','price'=>40],
		['name'=> 'banana skin','price'=>2]
	];

	foreach ($products as $product) {
		// code...
		// if ($product['price'] < 15 && $product['price']>2) {
		// 	// code...
		// 	echo $product['name']. '<br />';
		// }

		// if ($product['price'] >20 || $product['price']<10) {
		// 	// code...
		// 	echo $product['name']. '<br />';
		// }
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>
	<div>
		<ul>
			<?php foreach($products as $product) {?>
				<?php if($product['price'] > 15){ ?>
					<li>
					<?php echo $product['name']; ?>
					</li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>

</body>
</html>