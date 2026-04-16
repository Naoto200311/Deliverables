<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="../css/main.css">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
</head>
<body>
    <?php
		$dsn = 'mysql:host=mysql80.masa21.sakura.ne.jp;dbname=masa21_taka27;charset=utf8mb4';
		$user = 'masa21_taka27';
		$pass = 'Naoto2003';  // ← 本番環境では.envなどに切り出すと安全です！
		
		try {
    		$pdo = new PDO($dsn, $user, $pass);
    		echo '✅ 接続成功！';
		} catch (PDOException $e) {
		    echo '❌ 接続失敗: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
		}
    ?>
            <header>
            <div class="header-banner">Glamour Grove</div>
        </header>
    <div id="login_screen">