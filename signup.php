<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHPの口コミサイト</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">PHPの口コミサイト</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">カテゴリ①</a></li>
					<li><a href="#">カテゴリ②</a></li>
					<li><a href="#">カテゴリ③</a></li>
					<li><a href="login.php">ログイン</a></li>
					<li><a href="signup.php">会員登録</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</div> <!-- /container -->

<div class="container">
	<div class="row">
		 <div class="col-xs-6 col-xs-offset-3">
		 	<h2>会員登録</h2>
			<form action="" method="post">
				<div class="form-group">
					<label for="user_name">名前</label>
					<input type="text" class="form-control" id="user_name" name="user_name">
				</div>
				<div class="form-group">
					<label for="user_email">Email</label>
					<input type="email" class="form-control" id="user_email" name="user_email">
				</div>
				<div class="form-group">
					<label for="user_password">パスワード</label>
					<input type="password" class="form-control" id="user_password" name="user_password">
				</div>
				<div class="form-group">
					<label for="user_pass_check">パスワードの確認</label>
					<input type="password" class="form-control" id="user_pass_check" name="user_pass_check">
				</div>
				<button type="submit" class="btn btn-default">登録する</button>
			</form>
		 </div>
	</div>
</div>


<br><br><br>
<p class="col-xs-12 text-center">Copyright - <a href="#">PHPの口コミサイト</a>, 2016 All Rights Reserved.</p>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>