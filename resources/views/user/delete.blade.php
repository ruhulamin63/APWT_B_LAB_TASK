<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Delete</title>
</head>
<body>
    <a href="/user/list">Back</a> |
	<a href="/login"> Logout </a> 
  
   <form method="post">
		@csrf
        <table align="center" border="1">
			<tr>
				<th colspan="6">Delete Information</th>
			</tr>
			<tr>
			    <td>Id</td>
			    <td>{{$user->id}}</td>
		    </tr>
		    <tr>
			    <td>Username</td>
			    <td>{{$user->username}}</td>
		    </tr>
			<tr>
			    <td>Name</td>
			    <td>{{$user->name}}</td>
		    </tr>
		    <tr>
			    <td>Email</td>
			    <td>{{$user->email}}</td>
		    </tr>
			<tr>
			    <td>Type</td>
			    <td>{{$user->type}}</td>
		    </tr>
			<tr>
				<td><input type="submit" name="Submit" value="Delete"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>