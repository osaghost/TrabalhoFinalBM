<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pages/css/login.css">
    <title>Cadastrar</title>
</head>

<body>
    <main class="box">
        <div>
            <form action="http://localhost/projetos/Basketball/registro" method="post">
                <fieldset>
                    <legend><b>Registro</b></legend>
                    <br><br>

                    <div class="inputBox">
                        <input class="inputUser" type="text" name="name" required>
                        <label for="name" class="labelInput">Nome</label>
                    </div>
                    <br><br>


                    <div class="inputBox">
                        <input class="inputUser" type="text" name="user" required>
                        <label for="user" class="labelInput">Usuário</label>
                    </div>
                    <br><br>


                    <div class="inputBox">
                        <input class="inputUser" type="password" name="password" required>
                        <label for="password" class="labelInput">Senha</label>
                    </div>
                    <br><br>

                    <input type="submit" name="submit" id="submit" value="Registrar">

                    <p class="text-center text-muted mt-5 mb-0" >Já possui uma conta? <a  class="register" href="http://localhost/projetos/Basketball/login"
                        class="fw-bold text-body"><u>Login aqui</u></a></p>

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