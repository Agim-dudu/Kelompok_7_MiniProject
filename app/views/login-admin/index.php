<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Admin</title>
    <link rel="stylesheet" href="<?=BASEURL?>/css/Login-Admin.css">
</head>

<body>
    <div class="caixa__login">
        <h2>Login Admin</h2>
        <form action="login_admin/confirm" method="post">
            <div class="caixa__login-input">
                <input name="username" id="username" type="text" required />
                <label>Username</label>
            </div>
            <div class="caixa__login-input">
                <input name="password" id="password" type="password" required />
                <label>Password</label>
            </div>
            <a href="home_admin">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                kirim
            </a>
        </form>
    </div>
</body>

</html>