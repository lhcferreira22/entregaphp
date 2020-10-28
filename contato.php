
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    //criando a conexão

    $conn = mysqli_connect($servername, $username, $password, $database);

    //verificando a conexão

    if (!$conn){
        die("Falha na conexão" .mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];
   

    $sql = "insert into comentario (nome, msg) values ('$nome','$msg')";
    $resut = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>FALE CONOSCO - Full Stack Eletro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>

     <!-- Início do Menu -->
    <?php
        include('menu.html');
    ?>
    <!-- Fim do Menu -->


        <header>
            <H2>FALE CONOSCO</H2>
        </header>
        <hr>
        
            <section class="contato">

                <div class="mail">
                    <img src="./imagens/email-logo.jpg" width="40px">contato@fullstackeletro.com 
                </div>

                 <div class="wpp">
                    <img src="./imagens/wapp-logo.jpg" width="40px">(11) 99999-9999
                </div>
            </section>

        <section class="form"> 
        
        <form method="post" action="">
        Nome:<br>
            <input type="text" name="nome" style="width: 500px;"><br>
        Mensagem:<br>
            <input type="text" name="msg" style="width: 500px;"><br>

            <input type="submit" name="submit" value="Enviar"><br>
        </form>

<?php
        
        $sql = "select * from comentario";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<hr>";
                }
        }  else {
            echo "NENHUM COMENTÁRIO AINDA!";
        }
?>
        </section> 

        <footer>
            &copy;Recode Pro
        </footer>
        
</body>
</html>