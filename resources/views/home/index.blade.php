<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<style>
	th, td {
	  padding: 10px;
	}
</style>
</head>
<body>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="{{asset('upload/abc.png')}}" width="100%" height="100%">
						</td>
						<td align="right"> 
							Loged in <a href="/home">{{session('uname')}}</a> |
							<a href="/user/list"> Back</a> |
							<a href="/login"> Logout </a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<t>
			<td colspan="2" align="center" width="100%" height="425px">
				<h1>Welcome to , {{session('email')}}</h1>
				<a href="{{route('user.create')}}"> Create New User </a> |
        		<a href="{{route('user.index')}}"> User Information </a> |
        		<a href="{{route('product.index')}}"> Product Management </a> |
				
			</td>
		</t>
		<tr height="50px">
			<td colspan="2" align="center">
				copyright@2021
			</td> 
		</tr>
	</table>
</body>
</html>