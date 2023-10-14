<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Formulário com PHP</h1>
        
        <p class="error">* Obrigatório</p>
        
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" >
        <span class="error">*</span>
        <br><br>
        
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" >
        <span class="error">*</span>
        <br><br>

        <label for="website">Website: </label>
        <input type="text" name="website" id="website">
        <br><br>

        <label for="comentario">Comentário: </label>
        <textarea name="comentario" id="comentario" cols="30" rows="3"></textarea>
        <br><br>

        <label for="">Gênero: </label>
        <input type="radio" value="feminino" name="genero" >Feminino
        <input type="radio" value="masculino" name="genero" >Masculino
        <input type="radio" value="outros" name="genero" >Outros<span class="error">*</span>
        <br><br>

        <button name="enviado" type="submit">Enviar</button>
        <h1>Dados enviados:</h1>
        <?php 
            if(isset($_POST['enviado'])) {

                if(empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100){
                    echo '<p class="error">Preencha o campo nome</p>';
                    die();
                }

                if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    echo '<p class="error">Preencha o campo E-mail</p>';
                    die();
                }

                if(!empty($_POST['website']) && !filter_var($_POST['website'], FILTER_VALIDATE_URL)){
                    echo '<p class="error">Preencha corretamente o campo Website</p>';
                    die();
                }

                $genero = "Não selecionado";
                if(isset($_POST['genero'])){
                    $genero = $_POST['genero'];
                    if($genero != "masculino" || $genero != "feminino" || $genero != "outros"){
                        echo '<p class="error">Preencha corretamente o gênero</p>';
                        die();
                    }
                }
                echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
                echo "<p><b>Email: </b>" . $_POST['email'] . "</p>";
                echo "<p><b>Website: </b>" . $_POST['website'] . "</p>";
                echo "<p><b>Comentário: </b>" . $_POST['comentario'] . "</p>";
                echo "<p><b>Gênero: </b>" . $genero . "</p>";
            }
        ?>
    </form>
</body>
</html>