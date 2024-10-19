<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <pre>
    <form action="formulario.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]+\s?[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]*$"/>

        <label>Digite seu telefone:</label>
        <input type="text" name="telefone" pattern="^\d{2}\s\d{5}-\d{4}$"/>

        <label>Digite seu e-mail:</label>
        <input type="text" name="email"/>

        <input type="submit" value="Enviar para o servidor"/>
    </form>
    </pre>
    <hr/>

    <?php

        $nome = '';

        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
            echo '<p>Olá, '.$nome.'! Seja bem-vindo(a).<p/>';
        }
    ?>
</body>
</html>