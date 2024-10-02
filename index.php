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

    <!-- Header -->
    <header>

        <!-- Navbar -->
        <nav>
            <!-- Logo -->
            <div class="logo">
                <a href="#">
                    <img src="client/views/assets/images/logo.png" alt="Logo">
                    <span>Green House</span>
                </a>
            </div>

            <!-- Links -->
            <div class="links">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li class="menu-hover">

                        <span id="click">Imóveis
                            <img src="client/views/assets/icons/next.svg" alt="">
                        </span>

                        <ul class="submenu" id="menu">
                            <li>Venda</li>
                            <li>Locação</li>
                        </ul>
                    </li>
                    <li><a href=" #">Anunciar</a>
                    </li>
                </ul>
            </div>

            <!-- CTA -->
            <div class="call">
                <a href="client/views/pages/login.php">
                    <img src="client/views/assets/icons/person.svg" alt="">
                    <span>Entrar</span>
                </a>
            </div>
        </nav>

        <!-- Search-box -->
        <div class="box">

            <div class="info">
                <h1>Explore o futuro dos negócios comporativos</h1>
            </div>

            <form action="" method="get">

                <p>Selecione imóveis entre Compra e Aluguel</p>

                <!-- Options -->
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

                <!-- Input search -->
                <div class="search-box">

                    <!-- Input -->
                    <input type="search" name="" id="" placeholder="Busque imóveis aqui">

                    <!-- Filters -->
                    <button type="button">
                        <img src="client/views/assets/icons/settings.svg" alt="Filtros">
                        <span>Filtrar</span>
                    </button>

                    <button type="submit">
                        <img src="client/views/assets/icons/search.svg" alt="Buscar">
                        <span>Buscar</span>
                    </button>

                </div>

            </form>
        </div>
    </header>

    <main>
        <section class="about">

            <div class="title-about">
                <h2>Sobre nós</h2>
            </div>

            <div class="image-about">
                <img src="client/views/assets/images/fachada.avif" alt="">
            </div>

            <div class="text-about">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus delectus amet fugiat maiores autem eos quo quaerat adipisci, sapiente eveniet veritatis magnam debitis totam repudiandae a, doloremque iure, itaque explicabo.</p>
            </div>
        </section>
    </main>


    <!-- Submenu -->
    <script type="text/javascript" src="client/views/assets/js/subMenuNav.js"></script>

    <script type="text/javascript" src="client/views/assets/js/colorizeInputRadio.js"></script>
</body>

</html>