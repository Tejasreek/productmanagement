<?php 

include("config.php");

 
if(isset($_POST['update']))
{
	$editid = $_POST['editid'];
 $category=$_POST['category'];
 $product = $_POST['product'];
 $price = $_POST['price'];
 $quality = $_POST['quality'];
 $image = $_POST['image'];
 
 $image = $_FILES['image']['name'];
 $image_tmp = $_FILES['image']['tmp_name'];

 move_uploaded_file($image_tmp,"gallery/$image");
 if($_FILES['image']['name'])
 {
	 
	 $update = mysql_query("UPDATE `category` SET `category`='$category',`product`='$product',`price`='$price',`quality`='$quality',`image`='$image' WHERE id='$editid'");
 }
 else {
		  
	$update = mysql_query("UPDATE `category` SET `category`='$category',`product`='$product',`price`='$price',`quality`='$quality' WHERE id='$editid'");
	 }
 
 echo "<script>alert('Event Successfully Added');</script>";
 echo "<script>window.location.href='view.php';</script>";


}

?>
<!DOCTYPE html>
<head>
<script>
function goBack() {
    window.history.back()
}

</script>
</head>
<body>


	<?php 
						$editid = $_REQUEST['id'];
						$query = mysql_query(" SELECT * FROM category WHERE id='$editid'");
						$result = mysql_fetch_array($query);
						
						?>                    
		<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="mutipart/form-data">

<center>
<input type="hidden" name="editid" value="<?php echo $editid; ?>">
<select name="category" style="width:250px;height:40px" value="<?php echo $result['category']; ?>">
  <option value="Category" checked value="<?php echo $result['category']; ?>">Category</option>
  <option value="cat1" name="cat1" value="<?php echo $result['category']; ?>">cat1</option>
  <option value="cat2" name="cat2" value="<?php echo $result['category']; ?>">cat2</option>
  <option value="cat3" name="cat3" value="<?php echo $result['category']; ?>">cat3</option>
</select><br><br>
<select name="product" style="width:250px;height:40px" value="<?php echo $result['product']; ?>">
  <option value="products" checked>products</option>
  <option value="product1" name="product1">product1</option>
  <option value="product2" name="product2">product2</option>
  <option value="product3" name="product3">product3</option>
</select><br><br>
<input type="text" placeholder="price" style="width:250px;height:40px" name="price" value="<?php echo $result['price']; ?>"><br><br>
<select name="quality" style="width:250px;height:40px" value="<?php echo $result['quality']; ?>">
  <option value="quality" checked>quality</option>
  <option value="quality1" name="product1">quality1</option>
  <option value="quality2" name="product2">quality2</option>
  <option value="quality3" name="product3">quality3</option>
</select><br><br>
Product Image:<input type="file" name="image" <img src="gallery/<?php echo $result['event_image']; ?>" style="width:30px;height:30px;"><br><br>
<button type="submit" name="update" style="width:100px;height:35px">update</button>
</center>
</form>

</body>