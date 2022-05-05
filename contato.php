
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Patrimônio - Contato</title>
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
                        <li class="navbar-item"><a class="nav-link fas fa-user-alt" href="./controller/controller.php?msg=sair"> <?=$_SESSION['nome']?></a></li>
                    <?}?>
                </ul>
            </div>
           
        </nav>
    </header>
    
    <main class="container">
      <div class="row">
        <section class="col-sm-6">

            <div class="titulo">
                <h1>Deseja entrar em contato?</h1>
            </div>
            <hr>

            <p>
                Entre em contato conosco
            </p>

            <div>

                <label for="seunome">Qual seu Nome</label>
                <input class="form-control" type="text" placeholder="Seu Nome">
                <label for="duvida">Digite sua Dúvida</label>
                <input class="form-control" type="text" placeholder="Digite sua dúvida">
                <label for="problema" class="mt-4">Digite sua Mensagem</label>
                <textarea class="form-control mt-1" rows="6" name="problema" id="problema"></textarea>

                <div class="d-flex justify-content-center mt-4 mb-4">
                    <button class="btn btn-warning">Enviar</button>
                </div>
            </div>

        </section>
        <section class="col-sm-6">

            <div class="text-center">
                <h3>Outros Canais Disponíveis</h3>
                <h3><a href="" class="text-secondary nav-link fab fa-whatsapp"></a><a href="" class="text-secondary  nav-link fab fa-facebook"></a><a href="" class="text-secondary nav-link fab fa-instagram"></a></h3>
            </div>
            <hr>
            
                <div class="text-center">
                <h3>Telefone: 91 984447474</h3>
                <h3>Telefone: 91 324447474</h3>
                <h3>Endereço</h3>
                <p>Avenida Jucelino Germerval 855 bairro: Jesus Amado</p>
                </div>

        </section>
    
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