<!DOCTYPE html>
<html>
<head>
	<title>Berita Seputar Putaran</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/js/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="proses/proses_index.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name ="user_auth" class="form-control" placeholder="Username or Email" required autofocus>
                <input type="password"  name ="password" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit" value="">Sign in</button>
            </form><!-- /form -->
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>