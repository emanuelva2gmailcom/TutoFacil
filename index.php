<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TutoFacil - Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/style-home.css" />
    <link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
    <link rel="stylesheet" type="text/css" href="CSS/style-navbar.css" />
    <link rel="stylesheet" type="text/css" href="CSS/style-footer.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <!-- Inicio do menu de navegação  -->
    <div class="arranjo_tecnico"></div>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo">TutoFacil</div>
        <ul class="nav-items">
            <li><a href="index.php">Início</a></li>
            <li><a href="tutoriais.html">Artigos</a></li>
            <li><a href="sobre.html">Sobre</a></li>
        </ul>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>
        <form action="tutoriais.php" method="get">
            <input type="search" name="txtpesquisar" class="search-data" placeholder="Pesquisar" required />
            <button type="submit" class="fas fa-search" name="pesquisar"></button>
        </form>
    </nav>

    <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");
        const navBtn = document.querySelector("nav");

        menuBtn.onclick = () => {
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
            navBtn.classList.add("show");
        };

        cancelBtn.onclick = () => {
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            navBtn.classList.remove("show");
            cancelBtn.style.color = "#57BC90";
        };

        searchBtn.onclick = () => {
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        };
    </script>
    <!-- Término do menu de navegação  -->

    <!-- Início do header -->

    <div class="header" id="home">
        <div class="header__container">
            <h1 class="header__heading">A vida é um <span>Aprendizado</span></h1>
            <p class="header__description">Sua dúvida, nossa solução!</p>
            <button class="main__btn"><a href="#">Leia Agora</a></button>
        </div>
    </div>

    <!-- Fim do header -->

    <!-- Seção Sobre -->

    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card"><i class="fas fa-users"></i></div>
            </div>
            <div class="main__content">
                <h1><span>Lorem ipsum dolor</span></h1>
                <h2>Lorem ipsum dolor sit amet consectetur</h2>
                <button class="main__btn-2"><a href="#">Saiba Mais</a></button>
            </div>
        </div>
    </div>

    <!-- Fim do Sobre -->

    <!-- Seção Artigos Em Destaque  -->

    <article class="article" id="article">
        <h1>Artigos Em Destaque</h1>
        <div class="article__wrapper">
            <div class="article__card">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <div class="article__btn"><button>Ler Mais</button></div>
            </div>
            <div class="article__card">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <div class="article__btn"><button>Ler Mais</button></div>
            </div>
            <div class="article__card">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <div class="article__btn"><button>Ler Mais</button></div>
            </div>
            <div class="article__card">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <div class="article__btn"><button>Ler Mais</button></div>
            </div>
        </div>
    </article>

    <!-- Fim da Seção Artigos Em Destaque  -->

    <!-- Footer -->
    <div class="espacamento"></div>

    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>Considerações</h2>
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab iure
                        quidem voluptas possimus repellat dicta quam pariatur atque enim
                        quod optio libero, ipsa totam ut eaque suscipit fugit numquam
                        perferendis?
                    </p>
                </div>
            </div>

            <div class="center box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span>Fortaleza, Ceará</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span>tutofacil@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Fale Conosco</h2>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" name="email" required />
                        </div>
                        <div class="msg">
                            <div class="text">Menssagem *</div>
                            <textarea name="menssagem" cols="25" rows="7" required></textarea>
                        </div>
                        <div class="send-btn">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <center>
                <span class="credit">Criado por</span> Equipe TutoFacil <span> | </span>
                <span class="far fa-copyright"></span><span> 2020</span>
            </center>
        </div>
    </footer>
</body>

</html>