<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Formulário de Cadastro</title>

    <style>
        #tamanhoContainer{
            width: 500px;
        }

    </style>
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        
        <h3>Formulário de Cadastro</h3>
        <form  action="_inserir_produto.php" method="post" style="margin-top: 20px"> 
            <div class="form-group">
                <label>Nome do Livro</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Nome do produto" required>
            </div>

            <div class="form-group">
                <label>Sinopse</label>
                <input type="text" class="form-control" name="sinopse" placeholder="Sinopse do livro" autocomplete = off>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">
                    <option>Ação</option>
                    <option>Comics</option>
                    <option>Ficção Científica </option>
                    <option>Horror e Suspense</option>
                    <option>Tecnologia</option>
                </select>
            </div>

            <div class="form-group">
                <label>Editora</label>
                <select class="form-control" name="editora">
                    <option>Intrínseca</option>
                    <option>Globo Livros</option>
                    <option>Editora Sextante </option>
                    <option>Editora Rocco</option>
                </select>
            </div>

            <div class="form-group">
                <label> Preço</label>
                <input type="number" class="form-control" placeholder="Preço do livro em R$" name="preco">
            </div>
            <div style="text-align:right">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>