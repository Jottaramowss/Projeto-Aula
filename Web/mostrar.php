<?php include_once"config.php"; ?>
<?php
echo $nome = $_POST['nome'] ;
echo $celular = $_POST['celular'] ;
echo $email = $_POST['email'] ;
echo $cpf = $_POST['cpf'] ;
echo $cnpj = $_POST['cnpj'] ;
echo $estado = $_POST['estado'] ;
echo $endereco = $_POST['endereco'] ;
echo $numero = $_POST['tel'] ;
echo $complemento = $_POST['complemento'] ;
echo $obs = $_POST['obs'] ;

$sql = "INSERT INTO tb_clientes(nome, celular, email, cpf, cnpj, estado, endereco, numero, complemento, obs)VALUES('$nome', '$celular', '$email', '$cpf', '$cnpj', '$estado', '$endereco', '$numero', '$complemento', '$obs')";

        if (mysqli_query($conn,$sql)){
           header("Location: cadastro.php");
        }else{
           echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
        }
           mysqli_close($conn);

?>