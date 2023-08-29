<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./assests/calc.css">
    <title>Calcular imposto de renda</title>
</head>

<!--Navbar-->

<body>

    <header class="header">
        <img src="./assests/image/logo1.png" width="80" height="80">
        <nav class="navbar">
            <a href="index.php">Início</a>
            <a href="calc.php">Calcular imposto de renda</a>
            <a href="sobre.html">Sobre o imposto de renda</a>
            <a href="carousel.html">Faça seu pagamento</a>
        </nav>
    </header>


    <!--Tabela-->
    <div class="tabela">
        <form action="" name="calculoir" method="POST">
            <fieldset>
                <legend><b>Cálculo imposto de renda</b></legend>
                <br>
                <div class="inputBox">
                    <label for="salario">Digite seu salário: </label>
                    <input type="text" name="salario" id="salario" class="inputUser" required placeholder="Salário">
                    <br>
                    &nbsp; &nbsp;
                    <button type="submit" class="botao" name="calcular">Calcular</button>

                    &nbsp; &#124; &nbsp;
                    <button type="" class="botao">Limpar</button>

                </div>

                <hr>
                <br>
                <!--Calculo-->

                <?php

                $salario = 0;

                if (isset($_POST["calcular"])) {
                    $salario = $_POST["salario"];
                }

                ?>
                <?php
                if ($salario <= 1908.98) {
                ?>
                    <p>Alíquota:</p>
                    <p class="num">Isento</p>
                    <p>Valor do imposto a ser pago:</p>
                    <p class="imp">
                        <?php echo ("R$ 00.0"); ?>
                    </p>

                <?php
                } else if ($salario <= 2826.65) {
                    $imposto = (7.5 * $salario) / 100;
                ?>
                    <p>Alíquota:</p>
                    <p class="num"> 7.5%</p>
                    <p>Valor do imposto a ser pago:</p>
                    <p class="imp">
                        <?php echo ("R$" . $imposto); ?>
                    </p>
                <?php
                } else if ($salario <= 3751.05) {
                    $imposto = (15 * $salario) / 100;
                ?>
                    <p>Alíquota:</p>
                    <p class="num"> 15%</p>
                    <p>Valor do imposto a ser pago:</p>
                    <p class="imp">
                        <?php echo ("R$" . $imposto); ?>
                    </p>
                <?php

                } else if ($salario <= 4664.68) {
                    $imposto = (22.5 * $salario) / 100;
                ?>
                    <p>Alíquota:</p>
                    <p class="num"> 22.5%</p>
                    <p>Valor do imposto a ser pago:</p>
                    <p class="imp">
                        <?php echo ("R$" . $imposto); ?>
                    </p>
                <?php
                } else {
                    $imposto = (27.5 * $salario) / 100;
                ?>
                    <p>Alíquota:</p>
                    <p class="num"> 27.5%</p>
                    <p>Valor do imposto a ser pago:</p>
                    <p class="imp">
                        <?php echo ("R$" . $imposto); ?>
                    </p>
                <?php
                }

                ?>

            </fieldset>
        </form>
    </div>

    <div class="linkbanco">
        <a href="./carousel.html">Pague agora!</a>
    </div>


     <!----Rodapé-->
     
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Informações</h4>
                        <ul>
                            <li><a href="#">contato</a></li>
                            <li><a href="#">sobre</a></li>
                            <li><a href="#">política de privacidade</a></li>
                            <li><a href="#">quem somos</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>ajuda</h4>
                        <ul>
                            <li><a href="#">Mais informações</a></li>
                            <li><a href="#">O que é imposto de renda?</a></li>
                            <li><a href="#">como calcular meu imposto de renda?</a></li>

                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>Créditos</h4>
                        <ul>
                            <li><a href="#">fonte de pesquisa</a></li>
                            <li><a href="#">www.abracadabra.com</a></li>
                            <li><a href="#">www.o que é imposto de renda</a></li>
                            <li><a href="#">www.imagedoleão.com</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>Redes Socias</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/facebook/?locale=pt_BR"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/?lang=pt-br"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/instagram/"><i class="fab fa-instagram"></i></a>
                            <a href="https://br.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



</body>

</html>