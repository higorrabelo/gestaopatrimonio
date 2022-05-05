<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Patrimônio - Área Restrita</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/87d0763c50.js" crossorigin="anonymous"></script>
</head>
<body class="bg-warning text-white">
    
        
     <div class="container" style="margin-top: 8em; width: 350px;">
        <div class="d-flex justify-content-center mt-3 mb-3">
            <h2>Gestão de Patrimônio</h2>
        </div>
        <form action="./controller/controller.php?msg=logar" method="post">
            <div class="card text-secondary" width="400px">   
                <div class="card-body">   
                    <label for="">Login</label><br>
                    <input class="form-control" type="text" name="login" placeholder="Login de Usuário" required><br>
                    <label for="">Senha</label><br>
                    <input class="form-control" type="password" name="senha" placeholder="Senha do Usuário" required><br>  
                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-warning mb-2" type="submit">Entrar</button>    
                    </div>
                    <?php if(isset($_GET['msg']) && $_GET['msg']=="ERRO"){?>
                        <div class="text-center text-danger">Usuário não Encontrado</div>
                    <?}?>
                    <?php if(isset($_GET['msg']) && $_GET['msg']=="ERRO2"){?>
                        <div class="text-center text-danger">Usuário precisa estar logado</div>
                    <?}?>
                    <a class="d-flex justify-content-center" href="">Esqueceu Senha ou Login?</a>
                    <a class="d-flex justify-content-center" href="./cadastrar_usuario.php">Cadastrar Usuário</a>
                </div>  
            </div>
    
        </form>
     </div>


    <footer>

        <div class="text-white bg-warning text-center mt-3"> 
            <h6> &copy; Desenvolvido por Higor Rabelo 2022</h6>
            <h4><a href="" class="text-white nav-link fab fa-whatsapp"></a><a href="" class="text-white nav-link fab fa-facebook"></a><a href="" class="text-white nav-link fab fa-instagram"></a></h4>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>