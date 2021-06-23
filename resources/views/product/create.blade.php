<!DOCTYPE html>
<html>
<head>
	<title>Create Page</title>
</head>
<body>

	<a href="/product/list"> Back</a> |
	<a href="/login"> Logout </a> 

	<h2>Create New Product</h2>

	<form method="post">
	@csrf
	<table align="center" border="1">
		<tr>
			<td>Product Id</td>
			<td><input type="text" name="product_id"></td>
		</tr>
		<tr>
			<td>Product_name</td>
			<td><input type="text" name="product_name"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category"></td>
		</tr>
		<tr>
			<td>Unit Price</td>
			<td><input type="text" name="unit_price"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Add"></td>
		</tr>
	</table>
	</form>
</body>
</html>