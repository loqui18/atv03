<?php
// Verifica se os dados foram submetidos via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos obrigatórios foram preenchidos
    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["data_nascimento"]) && isset($_POST["sexo"]) && isset($_POST["estado"])) {
        // Captura os valores dos campos do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nascimento = $_POST["data_nascimento"];
        $sexo = $_POST["sexo"];
        $estado = $_POST["estado"];

        // Aqui você pode adicionar código para validar os dados, como verificar se o e-mail é válido, se a senha tem um formato específico, etc.

        // Conexão com o banco de dados (substitua as credenciais e o nome do banco de dados de acordo com o seu ambiente)
        $servername = "localhost";
        $username = "seu_usuario";
        $password = "sua_senha";
        $dbname = "seu_banco_de_dados";

        // Cria uma conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Prepara a consulta SQL para inserir os dados na tabela de usuários
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento, sexo, estado) VALUES ('$nome', '$email', '$senha', '$data_nascimento', '$sexo', '$estado')";

        // Executa a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário: " . $conn->error;
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    } else {
        echo "Todos os campos são obrigatórios!";
    }
}
?>
