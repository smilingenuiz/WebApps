<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
        
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="auth.php" method="post">
                 <!-- Username Input -->
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
                 <!-- Password Input -->
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
                
                 <!-- Type of User -->
                 <label class="input-group-text" for="inputGroupSelect01">Admin/User Login</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>


				<input type="submit" value="Login">

                
                </ul>
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                </div>
                                
			</form>
		</div>
	</body>
</html>