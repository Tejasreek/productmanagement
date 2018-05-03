<?php


include('config.php');
if(isset($_POST['submit']))
{
$category=$_POST['category'];
$product=$_POST['product'];
$price=$_POST['price'];
$quality=$_POST['quality'];
$image = $_FILES['image']['name'];

 $image_tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($image_tmp,"gallery/$image");

$query=mysql_query("INSERT INTO `category`(`category`, `product`, `price`, `quality`, `image`) VALUES ('$category','$product','$price','$quality','$image')");
if($query)
{
	header('location:view.php');
}
}
?>
<!DOCTYPE html>
<body>
<form action="" method="POST" enctype="mutipart/form-data">

<center>
<select name="category" style="width:250px;height:40px">
  <option value="Category" checked>Category</option>
  <option value="cat1" name="cat1">cat1</option>
  <option value="cat2" name="cat2">cat2</option>
  <option value="cat3" name="cat3">cat3</option>
</select><br><br>
<select name="product" style="width:250px;height:40px">
  <option value="products" checked>products</option>
  <option value="product1" name="product1">product1</option>
  <option value="product2" name="product2">product2</option>
  <option value="product3" name="product3">product3</option>
</select><br><br>
<input type="text" placeholder="price" style="width:250px;height:40px" name="price"><br><br>
<select name="quality" style="width:250px;height:40px">
  <option value="quality" checked>quality</option>
  <option value="quality1" name="product1">quality1</option>
  <option value="quality2" name="product2">quality2</option>
  <option value="quality3" name="product3">quality3</option>
</select><br><br>
Product Image:<input type="file" name="image"><br><br>
<button type="submit" name="submit" style="width:100px;height:35px">submit</button>
</center>
</form>

</body>

