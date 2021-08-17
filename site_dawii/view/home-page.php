<?php

require_once("../layout/cabecalho.php");
?>

<!-- BANNER PRINCIPAL -->
<section class="container-first">
    <div class="carrosel">
        <img src="../web/img/itemCarrosel-1.jpg" id="item-carrosel-1" class="item-carrosel show" alt="Item 1">
        <img src="../web/img/itemCarrosel-2.jpg" id="item-carrosel-2" class="item-carrosel" alt="Item 2">
        <img src="../web/img/itemCarrosel-3.jpg" id="item-carrosel-3" class="item-carrosel" alt="Item 3">
    </div>
    <div class="div-banner">
        <span class="banner-tittle">Novo Design de ponta a ponta</span>
        <p class="banner-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper porttitor tortor,
            in varius ex scelerisque sed. Mauris ultricies mollis justo, id porta quam ullamcorper eu.
            Phasellus cursus tempus sem in viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae; Suspendisse dictum,
            dolor a congue dignissim, leo ipsum sagittis purus, sed accumsan neque nulla ut ligula
        </p>
        <a id="btnLinkBanner" href="javascript:void()">
            <button id="btnCadastroBanner" type="button"> Sing Up </button>
        </a>
    </div>
</section>
<!-- BANNER PRINCIPAL -->

<!-- SECTION DOS CARDS -->
<section class="container-cards">
    <h3 class="tittle-container-cards" id="tittle-container-cards">Conheça Nossos Produtos</h3>
    <div class="box-cards">
        <div class="card" id="card-1">
            <img src="../web/img/imgCard-1.jpg" id="imgCard1" alt="Imagem Card 1">
            <div class="card-body">
                <h1 class="card-tittle">Sweet Worms</h1>
                <p class="card-description">Duis pharetra nibh mollis laoreet tincidunt.
                Mauris sapien neque, luctus vel mollis vitae, aliquam et eros. Proin ac erat nec neque mattis mollis</p>
                <h3 class="preco-card">R$ 13,00</h3>
                <a href="javascript:void()"><button class="btnSaibaMais">Ver Produto</button></a>
            </div>
        </div>
        <div class="card" id="card-2">
            <img src="../web/img/imgCard-2.jpg" id="imgCard2" alt="Imagem Card 2">
            <div class="card-body">
                <h1 class="card-tittle">Pão e Café</h1>
                <p class="card-description">Duis pharetra nibh mollis laoreet tincidunt.
                Mauris sapien neque, luctus vel mollis vitae, aliquam et eros. Proin ac erat nec neque mattis mollis</p>
                <h3 class="preco-card">R$ 15,00</h3>
                <a href="javascript:void()"><button class="btnSaibaMais">Ver Produto</button></a>
            </div>
        </div>
        <div class="card" id="card-3">
            <img src="../web/img/imgCard-3.jpg" id="imgCard3" alt="Imagem Card 3">
            <div class="card-body">
                <h1 class="card-tittle">Sorvete de Limão</h1>
                <p class="card-description">Duis pharetra nibh mollis laoreet tincidunt.
                Mauris sapien neque, luctus vel mollis vitae, aliquam et eros. Proin ac erat nec neque mattis mollis</p>
                <h3 class="preco-card">R$ 9,00</h3>
                <a href="javascript:void()"><button class="btnSaibaMais">Ver Produto</button></a>
            </div>
        </div>
    </div>
</section>
<!-- SECTION DOS CARDS -->

<!-- SECTION DE CONVITE -->
<section class="container-invite">
    <div class="body-invite">
        <span class="tittle-invite">Está gostando?</span>
        <p class="text-invite">
            Achou algo interessante ou esta com problemas? Entre em contato conosco pelo e-mail <b>grupovinicius@gmail.com</b>.
        </p>
        <h4>Ou</h4>
        <p class="text-invite">Deixe que nós entramos em contato com você!!!</p>
        <div class="form-group">
            <input type="email" placeholder="Seu melhor e-mail" id="inputEmail">
        </div>
        <button id="btnEnviarContato" class="btn-enviar-contato">Enviar</button>
    </div>
</section>
<!-- SECTION DE CONVITE -->

<!-- SECTION RESULTADOS -->
<section class="container-cursos">
    <h1 class="tittle-cursos" id="tittle-cursos">CONHEÇA NOSSOS CURSOS</h1>
    <div class="body-cursos">
        <div class="curso curso-1">
            <a href="javascript:void()"><div class="img-curso" id="imgCurso1"></div></a>
            <span class="tittle-curso-ind">CONFEITEIRO</span>
            <p class="text-curso"><b>Para você</b> que tem o doce sonho de trabalhar com confeitaria.</p>
        </div>
        <div class="curso curso-2">
            <a href="javascript:void()"><div class="img-curso" id="imgCurso2"></div></a>
            <span class="tittle-curso-ind">CHEFE DE COZINHA</span>
            <p class="text-curso"><b>Para você</b> que sonha em ser um grande chefe de cozinha.</p>
        </div>
        <div class="curso curso-3">
            <a href="javascript:void()"><div class="img-curso" id="imgCurso3"></div></a>
            <span class="tittle-curso-ind">AJUDANTE DE CHEFE</span>
            <p class="text-curso"><b>Para você</b> que sonha em trabalhar em grandes restaurantes.</p>
        </div>
        <div class="curso curso-4">
            <a href="javascript:void()"><div class="img-curso" id="imgCurso4"></div></a>
            <span class="tittle-curso-ind">APRENDIZ DE COZINHEIRO</span>
            <p class="text-curso"><b>Para você</b> que quer começar no mundo da culinaria.</p>
        </div>
        
    </div>
</section>
<!-- SECTION RESULTADOS -->

<!-- SECTION DO VIDEO -->
<section class="container-video">
    <video width="80%" height="auto" controls="controls">
        <source src="../web/img/videoplayback.webm" type="video/mp4">
    </video>
</section>
<!-- SECTION DO VIDEO -->

<!-- SECTION TABLE -->
<!-- <section class="container-tabela">
    <h2>Preços de nossos cursos</h2>
    <table class="tabela-principal tabela-black">
        <thead>
            <th>Nome</th>
            <th>Desc</th>
            <th>Teste</th>
            <th>Teste 2</th>
        </thead>
        <tbody>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>
            <tr>
                <td>Brayan</td>
                <td>É o braya</td>
                <td>Teste</td>
                <td>Teste 2</td>
            </tr>

        </tbody>
    </table>
</section>
SECTION TABLE -->

<!-- RODAPE -->
<?php 
require_once("../layout/rodape.php");