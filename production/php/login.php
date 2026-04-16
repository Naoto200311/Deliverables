<?php require '../header.php'; ?>
        <main>
            <h1>ログイン画面</h1>
            <form action="/index.php/Login/index" method="post">

                <div class="form-row">
                <label for="username">ユーザーネーム:</label>
                <input type="text" id="username" name="username" required>
                </div>
                <div class="form-row">
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required>
                </div>
                <input type="submit" value="ログイン">
                <p><a href="customer.php">新規会員登録はこちら</a></p>
            </form>
        </main>
<?php require '../footer.php'; ?>