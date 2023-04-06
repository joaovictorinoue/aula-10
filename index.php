<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>

<body>
    <h1>Cadastro de Clientes</h1>
    <form action="salvar.php" method="post">
        Nome: <input type="text" maxlength="50" name="nome" required><br>
        Telefone: <input type="tel" maxlength="15" name="telefone" required><br>
        Cidade: <input type="text" maxlength="40" name="cidade"><br>
        E-mail: <input type="email" maxlength="50" name="email"><br>
        Estado: <select name="estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select><br>
        <button type="submit">Salvar Cliente</button>
    </form>
    <?php
    $msg = $_GET['mensagem'] ?? "";

    if ($msg == "salvo") {
        echo "<script>alert('Cadastro Salvo Com Sucesso!')</script>";
    }
    ?>
</body>

</html>