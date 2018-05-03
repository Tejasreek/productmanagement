<!DOCTYPE html>
<head>
<script>
function goBack() {
    window.history.back()
}

</script>
</head>
<body>
<button onclick="location.href = 'logout.php'">Logout</button>
<table style="border: 1px solid black;width:100%">
    <thead >
		<tr>
            <th style="border: 1px solid black;">S.NO</th>
            <th style="border: 1px solid black;">category</th>
            <th style="border: 1px solid black;">Product</th>
            <th style="border: 1px solid black;">price</th>
            <th style="border: 1px solid black;">Quality</th>
            <th style="border: 1px solid black;">Image</th>
           
        </tr>
    </thead>    
	<tbody>
	
	<?php
	
	include('config.php');
	$i=1;
	$query=mysql_query("SELECT * FROM `category`");
	while($row=mysql_fetch_assoc($query))
	{
		
	
	
	
	?>
	
							



                                 
		<tr>
		    <td style="border: 1px solid black;"><?php echo $i; ?></td>
			<td style="border: 1px solid black;"><?php echo $row['category']?></td>
			<td style="border: 1px solid black;"><?php echo $row['product']?></td>
			<td style="border: 1px solid black;"><?php echo $row['price']?></td>
			<td style="border: 1px solid black;"><?php echo $row['quality']?></td>
			<td style="border: 1px solid black;"><img style="width:100px;height:100px" src="gallery/<?php echo $row['image']?>"></td>
		    <td>
		</tr>
			<?php $i++; } ?>
    </tbody>	
	</table><br><br>
<center>
<button onclick="goBack()">Go Back</button>
<button onclick="location.href = 'productlist.php'" type="submit">Confirm</button>
<button onclick="location.href = 'index.php'">Cancel</button>
</center>
</body>
</html>