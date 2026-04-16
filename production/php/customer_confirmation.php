<?php require '../header.php'; ?>
    <main>
        <h1>登録完了画面</h1>
        <?php
        $stmt = $pdo->prepare('INSERT INTO users (
            full_name, gender, username, email, password,
            birth_date, phone_number, postal_code, address,
            sns_provider, sns_id, created_at
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

        $params = $_REQUEST;
        $params['password'] = password_hash($params['password'], PASSWORD_DEFAULT);
        $params['created_at'] = date('Y-m-d H:i:s');

        $stmt->execute([
            $params['full_name'], $params['gender'], $params['username'],
            $params['email'], $params['password'], $params['birth_date'],
            $params['phone_number'], $params['postal_code'], $params['address'],
            $params['sns_provider'], $params['sns_id'], $params['created_at']
        ]);
        ?>
        <a href="login.php">ログインはこちら</a>
    </main>
<?php require '../footer.php'; ?>