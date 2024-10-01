<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>

    <!-- HTML Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Marley de S. Santos">

    <!-- OpenGraph Meta Tags -->

    <!-- Twitter/X Meta Tags -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="client/views/assets/css/index.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="client/views/assets/icons/favicon.ico" type="image/x-icon">

    <!-- Title -->
    <title>Green House</title>
</head>

<body>

    <header>

        <nav>
            <div class="logo">
                <a href="#">
                    <img src="client/views/assets/images/logo.png" alt="Logo">
                    <span>Green House</span>
                </a>
            </div>

            <div class="links">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Venda</a></li>
                    <li><a href="#">Locação</a></li>
                    <li><a href="#">Depoimentos</a></li>
                </ul>
            </div>

            <div class="call">
                <a href="#">
                    <img src="client/views/assets/icons/person.svg" alt="">
                    <span>Entrar</span>
                </a>
            </div>

        </nav>



        <div class="box">

            <div class="info">
                <h1>Explore o futuro dos negócios comporativos</h1>
            </div>

            <form action="" method="get">

                <p>Selecione imóveis entre Compra e Aluguel</p>
                <div class="types">
                    <div class="opt" id="optVenda">
                        <label for="venda">Comprar</label>
                        <input type="radio" name="transacao" id="venda" value="venda" checked>
                    </div>

                    <div class="opt">
                        <label for="locacao">Alugar</label>
                        <input type="radio" name="transacao" id="locacao" value="locacao">
                    </div>
                </div>

                <div class="search-box">
                    <input type="search" name="" id="" placeholder="Busque imóveis aqui">
                    <button type="submit">
                        <img src="client/views/assets/icons/search.svg" alt="Buscar">
                        <span>Buscar</span>
                    </button>

                    <button type="button">
                        <img src="client/views/assets/icons/settings.svg" alt="Filtros">
                        <span>Filtrar</span>
                    </button>
                </div>

            </form>
        </div>
    </header>

    <script type="text/javascript" src="client/views/assets/js/colorizeInputRadio.js"></script>
</body>

</html>