<?php require "auth.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Patrimônio - Consultar Itens</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/87d0763c50.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-warning">
            <a class="navbar-branch"><img src="imagens/logo.png" alt=""></a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="menu">
                <ul class="navbar-nav text-white text-center">
                    <li class="navbar-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="navbar-item"><a class="nav-link" href="cadastrar_usuario.php">Cadastrar Usuários</a></li>
                    <li class="navbar-item"><a class="nav-link" href="editar_usuario.php">Editar Usuários</a></li>
                    <li class="navbar-item"><a class="nav-link" href="cadastrar_item.php">Cadastrar Itens</a></li>
                    <li class="navbar-item"><a class="nav-link" href="consultar_itens.php">Consultar itens</a></li>
                    <li class="navbar-item"><a class="nav-link" href="contato.php">Contato</a></li>
                    <?php if(isset($_SESSION['nome'])){?>
                        <li class="navbar-item"><a class="nav-link fas fa-user-alt" href="./controller/controller.php?msg=sair"> olá <?=$_SESSION['nome']?></a></li>
                    <?}?>
                </ul>
            </div>
           
        </nav>
    </header>
    <main class="container">

        <div class="row">
            <div class="col-12">
                <h3>Consulta</h3>
                <form action="" method="post">
                    <div class="input-group">
                        <input class="form-control mb-3" type="text" placeholder="Pesquisar por nome, ou codigo">
                        <div class="input-group-append">
                            <button class="btn btn-secondary">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Itens</h3>
                
               <div class="table-responsive">
                <table class="table table-dark table-striped table-hover text-white">
                    <thead>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Localização</th>
                        <th scope="col">Editar</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Notebook</td>
                            <td>Eletrônico</td>
                            <td>Suporte</td>
                            <td>5</td>
                            <td>Suporte</td>
                            <td><a href="editar_item.html"><button class="btn btn-primary">Editar</button></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Notebook</td>
                            <td>Eletrônico</td>
                            <td>Suporte</td>
                            <td>5</td>
                            <td>Suporte</td>
                            <td><a href="editar_item.html"><button class="btn btn-primary">Editar</button></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Notebook</td>
                            <td>Eletrônico</td>
                            <td>Suporte</td>
                            <td>5</td>
                            <td>Suporte</td>
                            <td><a href="editar_item.html"><button class="btn btn-primary">Editar</button></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Notebook</td>
                            <td>Eletrônico</td>
                            <td>Suporte</td>
                            <td>5</td>
                            <td>Suporte</td>
                            <td><a href="editar_item.html"><button class="btn btn-primary">Editar</button></a></td>
                        </tr>
                    </tbody>
                </table>
               </div>
                
            </div>
        </div>
       
    </main>

    <footer>

        <div class="text-white bg-warning text-center"> 
            <h6> &copy; Desenvolvido por Higor Rabelo 2022</h6>
            <h3><a href="" class="text-white nav-link fab fa-whatsapp"></a><a href="" class="text-white nav-link fab fa-facebook"></a><a href="" class="text-white nav-link fab fa-instagram"></a></h3>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>