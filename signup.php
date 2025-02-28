<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Form Validation</title>
</head>
<body>
	<div class="container">
        <form id="form" action="/">
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
			<div class="input-control">
                <label for="firstname">First Name</label>
                <input id="firstname" name="firstname" type="text">
                <div class="error"></div>
            </div>
			<div class="input-control">
                <label for="lastname">Last Name</label>
                <input id="lastname" name="lastname" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
            </div>
			<div class="input-control">
                <label for="jobtitle">Job Title</label>
                <input id="jobtitle"name="jobtitle" type="jobtitle">
                <div class="error"></div>
            </div>
			<div class="input-control">
				<label for="joblevel">Job Title</label>
                <select id="title" name="title">
					<option value="user">User</option>
					<option value="admin">Admin</option>
					<div class="error"></div>
				</select>
            </div>
            <div class="input-control">
				<label for="acesslevel">Access Level</label>
                <select id="role" name="role">
					<option value="jDev">Junior Developer</option>
					<option value="WDev">Web Developer</option>
					<option value="FSDev">Full Stack Developer</option>
					<option value="spider">UI/UX Designer</option>
					<option value="goldfish">Senior Developer</option>
					<option value="SMast">SCRUM Master</option>
					<option value="ITMan">IT Manager</option>
					<option value="DevMan">Development Manager</option>
					<option value="SysAdm">System Adminstrator</option>
					<option value="QuaEng">Quality Assurance Engineer</option>
					<div class="error"></div>
				</select>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>