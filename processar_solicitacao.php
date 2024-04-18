<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $movie_name = $_POST["movie_name"];
    $release_year = $_POST["release_year"];

    // Aqui você pode adicionar o código para armazenar os dados em um banco de dados
    // Por exemplo, você pode executar uma consulta SQL para inserir os dados em uma tabela no banco de dados
    // Certifique-se de configurar a conexão com o banco de dados antes de executar a consulta

    // Exemplo simples de inserção no banco de dados
    // Conexão com o banco de dados (substitua as credenciais e o nome do banco de dados conforme necessário)
    $servername = "localhost";
    $username = "usuario";
    $password = "senha";
    $dbname = "nome_do_banco_de_dados";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Preparar a consulta SQL
    $sql = "INSERT INTO filmes (nome, ano) VALUES ('$movie_name', '$release_year')";

    // Executar a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "A solicitação foi enviada com sucesso.";
    } else {
        echo "Erro ao enviar a solicitação: " . $conn->error;
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
}
?>

