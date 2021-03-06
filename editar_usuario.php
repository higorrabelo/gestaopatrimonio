<?php require "auth.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Patrimônio - Editar Usuário</title>
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

            <section class="col-sm-6">

                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <h1>Editar Usuário</h1>
                    </div>
                    <hr>
                    <label for="nome">Nome:</label>
                    <input  class="form-control" type="text" placeholder="Digite o Nome do usuário">
                    <label for="senha">Senha:</label>
                    <input class="form-control" type="password" placeholder="Digite a senha do seu Usuário">
                    <label for="repetesenha">Repetir Senha:</label>
                    <input class="form-control" type="password" placeholder="Repita a senha do seu Usuário">
                    <label for="email">E-mail:</label>
                    <input class="form-control" type="email" placeholder="Digite o Nome do usuário">
                    <label for="setor">Nome:</label>
                    <select class="form-select" name="setor" id="setor">
                        <option value="" selected>Selecione seu Setor</option>
                        <option value="suporte">Suporte</option>
                        <option value="comercial">Comercial</option>
                        <option value="financeiro">Financeiro</option>
                        <option value="diretoria">Diretoria</option>
                        <option value="externo">Externo</option>
                    </select>
    
                    <br>
    
                    <div class="d-flex justify-content-center mb-3">
                        <button class="btn btn-warning">Cadastrar</button>
                    </div>
    
                </form>
    
            </section>
            <section  class="col-sm-6">
    
                <div class="titulo">
                    <h1>Listagem de usuários</h1>
                </div>
                <hr>
    
             <table  class="table table-dark table-striped">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Editar Usuário</td>
                    </tr>
                </thead>
              <tbody>
                <tr>
                    <td>Allan Lima</td>
                    <td>allima@gmail.com</td>
                    <td><button>Editar</button></td>
                </tr>
                <tr>
                    <td>Amanda Maciel</td>
                    <td>amanda@gmail.com</td>
                    <td><button>Editar</button></td>
                </tr>
                <tr>
                    <td>Adilson Freire</td>
                    <td>adilson@gmail.com</td>
                    <td><button>Editar</button></td>
                </tr>
                <tr>
                    <td>Wagner Varlin</td>
                    <td>wagner@gmail.com</td>
                    <td><button>Editar</button></td>
                </tr>
              </tbody>
               
             </table>
    
            </section>

        </div>
    
    </main>

    <footer >

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