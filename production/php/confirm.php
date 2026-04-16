<?php
session_start();
$_SESSION['form'] = $_POST;

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

require '../header.php';
?>

<main class="content-area">
    <h1>入力内容の確認</h1>

    <div class="confirm-form">
        <div class="confirm-row">
            <label>氏名：</label><span><?= h($_POST['full_name']) ?></span>
        </div>
        <div class="confirm-row">
            <label>性別：</label><span><?= h($_POST['gender']) ?></span>
        </div>
        <div class="confirm-row">
            <label>ユーザーネーム：</label><span><?= h($_POST['username']) ?></span>
        </div>
        <div class="confirm-row">
            <label>メールアドレス：</label><span><?= h($_POST['email']) ?></span>
        </div>
        <div class="confirm-row">
            <label>生年月日：</label><span><?= h($_POST['birth_date']) ?></span>
        </div>
        <div class="confirm-row">
            <label>電話番号：</label><span><?= h($_POST['phone_number']) ?></span>
        </div>
        <div class="confirm-row">
            <label>郵便番号：</label><span><?= h($_POST['postal_code']) ?></span>
        </div>
        <div class="confirm-row">
            <label>住所：</label><span><?= h($_POST['address']) ?></span>
        </div>
        <div class="confirm-row">
            <label>SNS連携：</label><span><?= h($_POST['sns_provider']) ?></span>
        </div>
        <div class="confirm-row">
            <label>SNS ID：</label><span><?= h($_POST['sns_id']) ?></span>
        </div>
    </div>

    <!-- パスワードは表示しないのが基本 -->
    <form action="customer_confirmation.php" method="post">
        <input type="submit" value="この内容で登録する">
    </form>

    <form action="customer.php" method="post">
        <?php foreach ($_POST as $key => $value): ?>
            <input type="hidden" name="<?= h($key) ?>" value="<?= h($value) ?>">
        <?php endforeach; ?>
        <input type="submit" value="修正する">
    </form>
</main>

<?php require '../footer.php'; ?>