# 🕹 Project
Signup and Login Project

## 👨🏼‍💻Scenario

We are developing a web application that requires user authentication. The application will have a login and signup functionality to allow users to access personalized content and features. The project will be implemented using PHP for server-side scripting and a MySQL database for storing user information.

## ⚡️Requirements:

1. User Signup:
- Users should be able to create an account by providing a unique username, a valid email address, and a password.
- The password should be securely stored using hashing techniques.
- Validate the user inputs, such as checking for valid email addresses and ensuring that the username is not already taken.

2. User Login:
- Registered users should be able to log in using their credentials.
- Verify the user's entered password against the stored hashed password.
- Implement session management to maintain user authentication across different pages.

3. Database:
- Stored into MySQL organized with phpmyadmin

## 🤖Programming Language
This program was made by `PHP`, `SQL`, `HTML`, also `CSS`

## 🦾Implementation
1. Preparation: <br>
Before going to the code, we make files that include:
- `index.php`
- `login.php`
- `signup.php`
- `connection.php`
- `functions.php`

2. Index.php:
In this file we make page that will show after login to the web, the code show below:
```
<!DOCTYPE HTML>
<html>
	<head>
		<title>Halaman utama</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">
				<!-- Header -->
					<header id="header">
						<h1>Raja Syam</h1>
						<p>Web Dev &nbsp;&bull;&nbsp; Back-End &nbsp;&bull;&nbsp; Never asked for this</p>
						<nav>
							<ul>
								<li><a href="https://instagram.com/rajasyamabbas" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://www.linkedin.com/in/raja-syam-abbas-shagir/" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="https://youtube.com/@syam-data" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>
								<li><a href="https://github.com/rajasyamabbas" class="icon brands fa-github"><span class="label">Github</span></a></li>
								<li><a href="mailto:rajasyamabbas@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Made with: ❤️.</span>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>
```

3. Make a login code

```
<?php 

session_start();

	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		// something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
		{
			// read from database
			$query = "SELECT * FROM users WHERE user_name = '$user_name'";
			$result = mysqli_query($con, $query);

			if ($result) {
				if ($result && mysqli_num_rows($result) > 0) 
				{
					$user_data = mysqli_fetch_assoc($result);
					if ($user_data['password'] === $password) {
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo "wrong username or password";
		}else
		{
			echo "wrong username or password";
		}
	}

?>
```

4. Singup code
```
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		// something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
		{
			// save to database
			$user_id = random_num(20);
			$query = "INSERT INTO users (user_id,user_name,password) VALUES ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
```

## 👌🏻Result

See the complete demo on video below:

[![Video Name](https://img.youtube.com/vi/sHiYCDOwDZs/0.jpg)](https://www.youtube.com/watch?v=sHiYCDOwDZs)

Login page

<img alt="UPDATE" width="auto" src="https://github.com/rajasyamabbas/signup-login-system/blob/main/LOGIN.PNG">

If we entered wrong account or account havent registered that will show like this
<img alt="UPDATE" width="auto" src="https://github.com/rajasyamabbas/signup-login-system/blob/main/LOGIN%20WRONG.PNG">

Signup page
<img alt="UPDATE" width="auto" src="https://github.com/rajasyamabbas/signup-login-system/blob/main/SIGNUP.PNG">

After we signup the data will added to database in MySQL
<img alt="UPDATE" width="auto" src="https://github.com/rajasyamabbas/signup-login-system/blob/main/PHP.PNG">

After we entered correct name & password we'll enter the index page
<img alt="UPDATE" width="auto" src="https://github.com/rajasyamabbas/signup-login-system/blob/main/INDEX.PNG">


*Click this button to see complete code* 
[CLICK ME](https://github.com/rajasyamabbas/signup-login-system/archive/refs/heads/main.zip)
