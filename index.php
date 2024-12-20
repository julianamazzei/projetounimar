
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros Academia</title>

    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
   
</head>

<body>
    <div class="container">
        <h1 id="titulo">Cadastros</h1>
        <p id="subtitulo">Usuários da Academia</p>

        <!-- Início do Formulário -->
        <form action="salvar.php" method="POST"> 
            <!-- Nome Completo -->
            <div class="campo">
                <label for="nome-completo"><strong>Nome completo</strong></label>
                <input type="text" name="nome-completo" id="nome-completo" required>
            </div>

            <!-- Telefone -->
            <div class="campo">
                <label for="telefone"><strong>Telefone</strong></label>
                <input type="tel" name="telefone" id="telefone" required>
            </div>

            <!-- Email -->
            <div class="campo">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" required>
            </div>

            <!-- Objetivos do Usuário -->
            <div class="campo">
                <label><strong>Qual/Quais seus objetivos na Academia?</strong></label>
                <label><input type="radio" name="objetivo" value="saude"> Saúde</label>
                <label><input type="radio" name="objetivo" value="perder-peso"> Perder Peso</label>
                <label><input type="radio" name="objetivo" value="ambos"> Ambos</label>
                <label><input type="radio" name="objetivo" value="outros"> Outros</label>
            </div>

            <!-- Frequência na Academia -->
            <fieldset class="grupo">
                <legend><strong>Frequência na Academia</strong></legend>
                <div id="check">
                    <label><input type="checkbox" name="frequencia[]" value="1x por semana"> 1x por semana</label><br>
                    <label><input type="checkbox" name="frequencia[]" value="2x por semana"> 2x por semana</label><br>
                    <label><input type="checkbox" name="frequencia[]" value="3x por semana"> 3x por semana</label><br>
                    <label><input type="checkbox" name="frequencia[]" value="4x por semana"> 4x por semana</label><br>
                    <label><input type="checkbox" name="frequencia[]" value="5x por semana"> 5x por semana</label><br>
                    <label><input type="checkbox" name="frequencia[]" value="livre"> Livre</label>
                </div>
            </fieldset>

            <!-- Botão para Enviar Cadastro -->
            <button class="button" type="submit">Concluído</button>
        </form>
    </div>

