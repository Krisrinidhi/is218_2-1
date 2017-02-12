<?php
    // get the data from the form
    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
    
    // calculate the discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;
    
    // apply currency formatting to the dollar and percent amounts
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);            
    
    // escape the unformatted input
    $product_description_escaped = htmlspecialchars($product_description);
?>
<!DOCTYPE html>
<html>
<head>
    <title><b>|PRODUCT DISCOUNT CALCULATOR|</b></title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>|DISPLAY RESULTS|</h1>

        <label>Product Description:</label>
	        <span><?php echo ''; ?></span><br>

		        <label>Listed Price:</label>
			        <span><?php echo ''; ?></span><br>

				        <label>Standard Discount:</label>
					        <span><?php echo ''; ?></span><br>

						        <label>Discount Amount:</label>
							        <span><?php echo ''; ?></span><br>

								        <label>Discount Price:</label>
									        <span><?php echo ''; ?></span><br>
										
    </main>
</body>
</html>
