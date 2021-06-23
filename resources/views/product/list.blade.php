<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List Page</title>
</head>
<body>
    <a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 
    
    <table border="1" align="center">
        <tr>
            <th colspan="5">
                <a href="/product/create">Create</a>
            </th>
        </tr>
        <tr>
            <th colspan="5">Product Information List</th>
        </tr>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Unit Price</th>
            <th>Action</th>
        </tr>
        
        @foreach($productlist as $user)
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
        @endforeach
    </table>
    
</body> 
</html>