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
		<div class="col-xs-12">
			<h2>モテるようになる薬</h2>
			<p>この薬を飲むと、美女からモテます。すごい薬です。モテるだけじゃなく健康にもなります。すごいです。すごいです。すごいです。すごいです。すごいです。すごいです。すごいです。</p>
			<hr>
		</div>
		<div class="col-xs-12">
			<h4>名前：山田 太郎さん（2016/9/1）</h4>
			<p>信じられません。モテすぎて困っています。すぐに買うべきです。おすすめです。おすすめです。おすすめです。おすすめです。おすすめです。</p>
		</div>
		<div class="col-xs-12">
			<h4>名前：佐々木 太郎さん（2016/7/28）</h4>
			<p>まったく効果ありません。買わないほうがいいです。買わないほうがいいです。買わないほうがいいです。買わないほうがいいです。買わないほうがいいです。</p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		 <div class="col-xs-12">
		 	<h3>口コミを投稿する</h3>
			<form action="" method="post">
				<textarea name="add_review" class="form-control" placeholder="口コミを記入してください。"></textarea>
				<button type="submit" class="btn btn-default">投稿する</button>
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