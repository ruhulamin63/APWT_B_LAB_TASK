<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
</head>
<body>

	<a href="/product/list"> Back</a> |
	<a href="/login"> Logout </a> 

	<form method="post">
	@csrf

	<table align="center" border="1">
		<tr>
            <th colspan="5">Update Product Information</th>
        </tr>
        <tr>
			<td>Product Id</td>
			<td><input type="text" name="product_id" value="{{$user->product_id}}"></td>
		</tr>
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="product_name" value="{{$user->product_name}}"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category" value="{{$user->category}}"></td>
		</tr
		<tr>
			<td>Unit Price</td>
			<td><input type="text" name="unit_price" value="{{$user->unit_price}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="Submit" value="Update"></td>
		</tr>
	</table>
	</form>
</body>
</html>