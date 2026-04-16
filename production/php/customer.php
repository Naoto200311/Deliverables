<?php require '../header.php'; ?>
        <main class="content-area">
            <h1>新規会員登録</h1>
            <form action="confirm.php" method="post">
                <div class="form-row">
                <label for="full_name">氏名:</label>
                <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="form-row">
                <label for="gender">性別:</label>
                <select id="gender" name="gender" required>
                    <option value="male">男</option>
                    <option value="female">女</option>
                    <option value="other">その他</option>
                </select>
                </div>
                <div class="form-row">
                <label for="username">ユーザーネーム:</label>
                <input type="text" id="username" name="username" required>
                </div>
                <div class="form-row">
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email"
                        pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                </div>
                <div class="form-row">
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required>
                </div>
                <div class="form-row">
                <label for="confirm_password">パスワード確認:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <div class="form-row">
                <label for="birth_date">生年月日:</label>
                <input type="date" id="birth_date" name="birth_date">
                </div>
                <div class="form-row">
                <label for="phone_number">電話番号:</label>
                <input type="tel" id="phone_number" name="phone_number">
                </div>
                <div class="form-row">
                <label for="postal_code">郵便番号:</label>
                <input type="text" id="postal_code" name="postal_code"
                        placeholder="例: 812-0011" pattern="\d{3}-\d{4}">
                </div>
                <div class="form-row">
                <label for="address">住所:</label>
                <input type="text" id="address" name="address">
                </div>
                <div class="form-row">
                <label for="sns_provider">SNS連携:</label>
                <select id="sns_provider" name="sns_provider">
                    <option value="">なし</option>
                    <option value="twitter">x</option>
                    <option value="facebook">instagram</option>
                </select>
                </div>
                <div class="form-row">
                <label for="sns_id">SNS ID:</label>
                <input type="text" id="sns_id" name="sns_id">
                </div>
                <div class="form-row">
                <input type="submit" value="登録">
                </div>
            </form>
        </main>
<?php require '../footer.php'; ?>