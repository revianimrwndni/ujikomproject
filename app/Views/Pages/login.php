<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    /* Gaya dasar halaman */
    body {
        background-color: #fff;
        font-family: 'Times New Roman', Times, serif;
    }

    /* Gaya kontainer login */
    .login-container {
        width: 300px;
        margin: 0 auto;
        margin-top: 150px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    /* Gaya judul halaman */
    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #555;
    }

    /* Gaya input teks */
    input[type="text"],
    input[type="password"] {
        width: 90%;
        padding: 10px;
        margin-bottom: 30px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    /* Gaya tombol login */
    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #74838b;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #74838b;
    }

    /* Gaya unik */
    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        pointer-events: none;
    }

    .login-container {
        position: relative;
        z-index: 1;
    }
</style>

<body>
    <div class="login-container">
        <h1>LOGIN</h1>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="<?= base_url("/login/authenticate", 'LoginController::authenticate') ?>" method="post">
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit" value="Login">LOGIN

        </form>
    </div>
</body>

</html>