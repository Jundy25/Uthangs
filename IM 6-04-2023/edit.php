<!DOCTYPE html>
<html>
  <head>
    <title>Ibarra's Kan anan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="right" id="form">
		  <form action="saveupdaterec.php" method="post">
		  <?php
			$id=$_GET['id'];
			$query=mysqli_query($conn,"SELECT id, item_name, quantity, price, quantity*price AS total, DATE(created_at) AS date FROM uthangs JOIN items ON uthangs.item_id=items.item_id WHERE id='$id';");
			$row=mysqli_fetch_array($query);
		?>

   <tr><td>
	  <label for="item_name">Item</label></td><td>
	  <input type="text" name="item" id="item" value=<?php echo $row["item"];  ?> >
	  </td></tr>      
	
   <tr><td>
	  <label for="quantity">Quantity:</label></td><td>
	  <input type="text" name="quant" id="quant" value='<?php  echo $row["quantity"];  ?>'>
	  </td></tr>

	  <tr><td>
		 <input type="hidden" name="cre" id="cre" value ='<?php echo $row["credate"];  ?>'>
   <input type="submit" value="Submit">
   </td></tr>
	  </div>
	</div>

    </body>
  </html>