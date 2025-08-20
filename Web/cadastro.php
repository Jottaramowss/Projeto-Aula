<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Cadastro de Cliente </title>
    </head>
    <body>
        <form method="post" name="cliente" action="mostrar.php">
            <label> Nome </label>
            <input type="text" name="nome" maxlength="150">

            <label> Celular </label>
            <input type="text" name="celular" maxlength="150">

            <label> Email </label>
            <input type="text" name="email" maxlength="150">

            <label> CPF </label>
            <input type="text" name="cpf" maxlength="11">

            <label> CNPJ </label>
            <input type="text" name="cnpj" maxlength="15">

            <label> ESTADO </label>
            <input type="text" name="estado" maxlength="150">

            <label> ENDEREÇO  </label>
            <input type="text" name="endereco" maxlength="45">

            <label> NÚMERO </label>
            <input type="text" name="numero" maxlength="15">

            <label> COMPLEMENTO </label>
            <input type="text" name="complemento" maxlength="30">

            <label> Observação </label>
            <input type="text" name="obs" maxlength="150">

            <input type="submit" name="enviar" value="Enviar">

        </form>
    </body>
    </html>