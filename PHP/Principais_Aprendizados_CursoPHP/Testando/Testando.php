<html>
<head>
    <title>Fillow - Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #7030A1;
            font-family: "Inter", "Helvetica", "sans-serif";
            display: flex;
            justify-content: right;
            align-items: right;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .logo {
            font-size: 50px;
            color: red;
        }
        .title {
            margin-bottom: 20px;
            margin-top: 10px;
        }
        .subtitle {
            font-size: 14px;
            color: #888;
            margin-bottom: 30px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-group input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }
        .form-group .forgot-password {
            float: right;
            font-size: 12px;
            color: #888;
        }
        .form-group .forgot-password:hover {
            text-decoration: underline;
        }
        .btn {
            background-color: #7030A1;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 50px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #5a4dbf;
        }
        .signup {
            margin-top: 20px;
            font-size: 14px;
        }
        .signup a {
            color: #6c5ce7;
            text-decoration: none;
        }
        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo"> 
        <div>
    <i class="fas fa-f"></i>
    <img src="/tamandulogin.png" alt="Tamandu Login">
    </div>
            <i class="fas fa-f"></i>
        </div>
        <div class="title"></div>
        <div class="subtitle">Tamandu sistemas</div>
        <div class="form-group">
            <label for="username">Login:</label>
            <input type="text" id="username" placeholder="Digite seu login"> 
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" id="password" placeholder="Digite sua senha">
            <a href="#" class="forgot-password">Esqueceu a senha?</a>
        </div>
        <div class="form-group">
            <input type="checkbox" id="remember">
            <label for="remember">Lembrar minha conta</label>
        </div>
        <button class="btn">Fazer Login</button>
        <div class="signup">Não é um tamandu? <a href="#">Cadastre-se</a></div>
    </div>
</body>
</html>


