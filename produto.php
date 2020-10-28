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
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Produtos - Full Stack Eletro</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <script src="funcoes.js"></script>
</head>

<body>

    <!-- Início do Menu -->
    <?php
        include('menu.html');
    ?>
    <!-- Fim do Menu -->
    <header>
        <H2>PRODUTOS</H2>
    </header>
    <hr>

    <section class="categorias">

        <h3>
            Categorias
        </h3>
        <ul>
            <li onclick="exibir_todos()">Todos (12)</li>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaroupa')">Lavadora de Roupas (2)</li>
            <li onclick="exibir_categoria('lavalouca')">Lava-louças (2)</li>
        </ul>
    </section>

    <section class="produtos">
        <?php
        
            $sql = "select * from produto";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
        ?>

            <div class="box_produto" id="<?php echo $rows['categoria']?>">
                <img src="<?php echo $rows['imagem'];?>" width="120px" onclick="exibir_detalhes_produto(this)">
                <br>
                <div class="descricao"><?php echo $rows['descricao'];?></div>
                <hr>
                <div class="descricao"><strike>R$ <?php echo $rows['preco'];?></strike></div>
                <div class="preco">R$ <?php echo $rows['precofinal'];?></div> 
            </div>

        <?php
        }
         }   else{
                echo "Nenhum produto cadastrado";
    }
        ?>
    </section>

    <footer>

        <div class="forma_pagamento">
            <h4>
                Formas de pagamento
            </h4>
            <img src="./imagens/formadepagamento.jpg" width="300px" height="50px" alt="Formas de pagamento">
        </div>

        &copy;Recode Pro
    </footer>
</body>

</html>