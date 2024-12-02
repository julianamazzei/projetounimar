<?php
// Configurações de conexão com o banco de dados
$host = 'localhost'; // ou o IP do seu servidor de banco de dados
$dbname = 'usuario_academia'; // substitua com o nome do seu banco de dados
$username = 'root'; // substitua com seu nome de usuário do banco de dados
$password = ''; // substitua com sua senha do banco de dados

try {
    // Criando uma conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Verifica se os dados foram enviados via POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe os dados do formulário
        $nomeCompleto = isset($_POST['nome-completo']) ? $_POST['nome-completo'] : '';
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $objetivo = isset($_POST['objetivo']) ? $_POST['objetivo'] : '';
        $frequencia = isset($_POST['frequencia']) ? implode(', ', $_POST['frequencia']) : '';

        // Prepara a query de inserção
        $sql = "INSERT INTO minha_tabela (nome, telefone, email, objetivo, frequencia) 
                VALUES (:nome, :telefone, :email, :objetivo, :frequencia)";
        
        // Prepara a declaração
        $stmt = $pdo->prepare($sql);

        // Vincula os parâmetros
        $stmt->bindParam(':nome', $nomeCompleto);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':objetivo', $objetivo);
        $stmt->bindParam(':frequencia', $frequencia);

        // Executa a query
        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao realizar o cadastro.";
        }
    } else {
        echo "Método de requisição inválido.";
    }
} catch (PDOException $e) {
    // Em caso de erro na conexão com o banco
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
