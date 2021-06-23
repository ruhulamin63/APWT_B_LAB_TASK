<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Page</title>
	<style>
		th, td {
		padding: 10px;
		}
	</style>
</head>
<body>
	<!-- @csrf -->
	<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
	
	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td align="right"> 
							<a href="/home">Home</a> |
							<a href="/login">Login</a> |
							<a href="/registration">Registration</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr>
			<td colspan="2" align="center" width="100%" height="100%">
				<table>
					<tr>
						<td>
							<form method="post">

							{{csrf_field()}}
								<fieldset>
									<legend>Registration</legend>
									<table>
										<tr>
											<td colspan="2" align="center" width="150px" height="50px">

												@foreach($errors->all() as $err)
													{{$err}}<hr>
												@endforeach
											</td>
										</tr>

                                        <tr>
											<td>Username</td>
											<td>
												<input type="text" name="uname" id="uname" placeholder="@username" value="{{old('username')}}">
											</td>
										</tr>
                                        <tr>
											<td>Name</td>
											<td>
												<input type="text" name="name" id="name" placeholder="@name" value="{{old('name')}}">
											</td>
										</tr>
                                        <tr>
											<td>Email</td>
											<td>
												<input type="text" name="email" id="email" placeholder="@email" value="{{old('email')}}">
											</td>
										</tr>
                                        <tr>
											<td>Password</td>
											<td>
												<input type="text" name="password" id="password" placeholder="@password" value="{{old('password')}}">
											</td>
										</tr>
										<tr>
											<td>Confirm Password</td>
											<td>
												<input type="text" name="cpassword" id="cpassword" placeholder="@cpassword" value="{{old('cpassword')}}">
											</td>
										</tr>
                                        <tr>
											<td>User Type</td>
											<td>
												<select name="type" id="type">
													<option value="">-Choose-</option>typetype
													<option value="admin">admin</option>
													<option value="manager">customer</option>
													<option value="director">seler</option>
													<option value="employee">accountant</option>
												</select>
											</td>
										</tr>
										
										<tr align="center">
											<td colspan="2">
												<hr><br>
												<input type="submit" name="submit" id="submit" value="Sing In"><br><br>

												<a href="#">Forgot Password ?</a><br><br>
												<a href="#">Create an account ?</a>
											</td>
										</tr>
									</table>
								</fieldset>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr height="50px">
			<td colspan="2" align="center">
				copyright@2021
			</td> 
		</tr>
	</table>
</body>
</html>