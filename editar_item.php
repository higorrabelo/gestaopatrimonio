<?php require "auth.php";
require "./modelos/PatrimonioDb.php";
$busca = new PatrimonioDb();
$result = $busca->localizarPatrimonio($_GET['id']);
?>
<!DOCTYPE php>
<php lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Patrimônio</title>
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
                        <li class="navbar-item"><a class="nav-link fas fa-user-alt" href="./controller/controller.php?msg=sair"> Olá <?=$_SESSION['nome']?></a></li>
                    <?}?>
                </ul>
            </div>
           
        </nav>
    </header>


    <main class="container">
        <form action="controller/editar_item_controller.php?id=<?=$result->id?>" method="post" enctype="multipart/form-data">
            <div class="row mt-3">
                                
            
                    <section class="col-sm-4 mt-2">
                            <div>
                                <h1>Imagem</h1>
                            </div>
                            <hr>
                          
                            <?php
                            $caminho = substr($result->imagem,3);
                            $path = scandir($caminho);                          
                            ?>
                            <img class="img-fluid" width="300px" src="<?=$caminho.$path[2]?>" alt="">
                          
                    </section>

                    <section class="col-sm-4 mt-2">
                            <div>
                                <h1>Editar Item</h1>
                            </div>
                            <hr>
                            <label for="nome">Nome:</label>
                            <input class="form-control" type="text" name="nome" value="<?=$result->nome?>">
                            <label for="fabricante">Fabricante:</label>
                            <input class="form-control" type="text" name="fabricante" value="<?=$result->fabricante?>">
                            <label for="fornecedor">Fornecedor</label>:</label>
                            <input class="form-control" type="text" name="fornecedor" value="<?=$result->fornecedor?>">
                            <label for="quantidade">Quantidade:</label>
                            <input class="form-control" type="number" name="quantidade" value="<?=$result->quantidade?>">
                            <label for="localizacao">Localização:</label>
                            <input class="form-control" type="text" name="localizacao" value="<?=$result->localizacao?>">
                        
                            <br>
                            <label for="foto">Imagem</label>
                                <input type="file" name="arquivo" required>  
                            
                    </section>

                      <section class="col-sm-4 mt-2">
                        <div>
                            <h1>Especificações</h1>
                        </div>
                        <hr>
                        <br>
                        <select class="form-select" name="tipo" id="tipo">
                            <option value="<?=$result->tipo?>" selected><?=$result->tipo?></option>
                            <option value="ELETRONICO">ELETRONICOS</option>
                            <option value="DIVERSOS">DIVERSOS</option>
                            <option value="AUTOMOVEIS">AUTOMÓVEIS</option>
                            <option value="MOVEIS">MÓVEIS</option>
                            <option value="MATERIAL">MATERIAL</option>
                        </select>
                        <br>
                        <select class="form-select" name="setor" id="setor" value="<?=$result->setor?>">
                            <option value="<?=$result->setor?>" selected><?=$result->setor?></option>
                            <option value="suporte">Suporte</option>
                            <option value="comercial">Comercial</option>
                            <option value="financeiro">Financeiro</option>
                            <option value="diretoria">Diretoria</option>
                            <option value="externo">Externo</option>
                        </select>
                        <br>
                                <div class="input-group">
                                    <label for="depreciacao" class="input-group-text">Valor: </label>
                                    <input class="form-control" type="number" name="valor" value="<?=$result->valor?>">
                                    <span class="input-group-text">R$</span>
                                </div>
                        <br>
                                <div class="input-group">
                                    <label for="depreciacao" class="input-group-text">Depreciação: </label>
                                    <input class="form-control" type="number" name="depreciacao" value="<?=$result->depreciacao?>">
                                    <span class="input-group-text">%</span>
                                </div>
                                <br>
                                <label for="nome">Data de Aquisição:</label>
                                <input class="form-control" type="date" name="data" value="<?=$result->aquisicao?>">
                                <br>                                
                    </section>
                   
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <input class="btn btn-warning" type="submit" value="Editar">
                </div>
            </div>
    </form>

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