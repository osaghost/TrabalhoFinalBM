<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pages/css/login.css">
    <title>Login</title>
</head>

<body>
    <main class="box">
        <div>
            <form action="" method="post">
                <fieldset>
                    <legend><b>Login</b></legend>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="text" name="user"  type="text"   id="name" autocomplete="off"required>
                        <label for="name=" class="labelInput">Usuário</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="password" name="password" required>
                        <label for="password" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit"  value="Acessar">
                    <br><br>
                    <div>
                        <a href= 'http://localhost/projetos/Basketball/registro' class="register" >Registre-se</a>
                    </div>
                    <br>

                    <div>
                        <a href= 'http://localhost/projetos/Basketball' class="register" >Voltar</a>
                    </div>

                </fieldset>
            </form>
        </div>
    </main>
</body>

</html>