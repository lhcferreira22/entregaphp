<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Nossas lojas - Full Stack Eletro</title>
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
        <H2>NOSSAS LOJAS</H2>
    </header>
    <hr>

    <section class="lojas">
        <div class="rj">
            <h3>
                Rio de Janeiro
            </h3>
            <p>
                Avenida Presidente Vargas, 5000
            </p>
            <p>
                10 &ordm; andar
            </p>
            <p>
                Centro
            </p>
            <p>
                (21) 3333-3333
            </p>
        </div>

        <div class="sp">
            <h3>
               São Paulo
            </h3>
            <p>
                Avenida Paulista, 985
            </p>
            <p>
                3 &ordm; andar
            </p>
            <p>
                Jardins
            </p>
            <p>
                (11) 4444-4444
            </p>
        </div>

        <div class="sc">
            <h3>
                Santa Catarina
            </h3>
            <p>
                Rua Major &Aacute;vila, 370
            </p>
            <p>
                Vila Mariana
            </p>
            <p>
                (47) 5555-5555
            </p>
        </div>
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