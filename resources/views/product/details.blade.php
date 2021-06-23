<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
</head>
<body>

    <a href="/product/list"> Back</a> |
	<a href="/login"> Logout </a> 

    <table border="1" align="center">
    <tr>
        <td colspan="5">
            <a href="/product/create/{{$user->id}}">Details</a>
        </td>
    </tr>
    <tr>
            <th colspan="5">Product Details Information</th>
        </tr>
        <tr>
            <th>Product_id</th>
            <th>Product_name</th>
            <th>Category</th>
            <th>Unit Price</th>
            <th>Action</th>
        </tr>
        <tr>
                <td>{{$user->product_id}}</td>
                <td>{{$user->product_name}}</td>
                <td>{{$user->cetagory}}</td>
                <td>{{$user->unit_price}}</td>

                <td>
                    <a href="/product/details/{{$user->id}}">Details</a> | 
                    <a href="/product/edit/{{$user->id}}">Edit</a> | 
                    <a href="/product/delete/{{$user->id}}">Delete</a> 
                </td>
            </tr>
    </table>
    
</body>
</html>