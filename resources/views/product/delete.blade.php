<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Delete</title>
</head>
<body>
    <a href="/product/list">Back</a> |
	<a href="/login"> Logout </a> 
  
   <form method="post">
		@csrf
        <table align="center" border="1">
			<tr>
				<th colspan="5">Product Delete Information</th>
			</tr>
			<tr>
			    <td>Product Id</td>
			    <td>{{$user->product_id}}</td>
		    </tr>
		    <tr>
			    <td>Product Name</td>
			    <td>{{$user->product_name}}</td>
		    </tr>
			<tr>
			    <td>Category</td>
			    <td>{{$user->category}}</td>
		    </tr>
		    <tr>
			    <td>Unit Price</td>
			    <td>{{$user->unit_price}}</td>
		    </tr>
			<tr>
				<td><input type="submit" name="Submit" value="Delete"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>