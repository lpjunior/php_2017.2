<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP com MySQL</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

        <!-- Favicon -->
        <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/32px-PHP-logo.svg.png" />
        
        <style>
            .text-success {
                color: green;
                font-weight: bold;
            }
            
            .text-danger {
                color: red;
                font-weight: bold;
            }
        </style>
       
    </head>
    <body>

        <!-- Header -->
        <header id="header">
            <h1>PHP com MySQL</h1>
            <nav>
                <ul>
                    <li><a href="#intro">Intro</a></li>
                    <li><a href="#one">Por que PHP</a></li>
                    <li><a href="#two">Quais Vantagens</a></li>
                    <li><a href="#work">Como programar</a></li>
                    <li><a href="#contact">Contatos</a></li>
                </ul>
            </nav>
        </header>

        <!-- Intro -->
        <section id="intro" class="main style1 dark fullscreen">
            <div class="content" style="margin-top: 42%">
                <header>
                    <!--						<h2>Olá.</h2>-->
                </header>
                <p>Seja Bem Vindo <strong>Content Manager System - CMS</strong> em PHP do Senac Rio
                    <a href="https://github.com/lpjunior/php_2017.2/?tree=cms" target="_blank">projeto</a> desenvolvido para os alunos da turma 2017.2,
                    modelo de um CMS para entender como funciona um sistema de site informativo.</p>
                <footer>
                    <a href="#one" class="button style2 down" style="margin-top: -3%">More</a>
                </footer>
            </div>
        </section>

        <!-- One -->
        <section id="one" class="main style2 right dark fullscreen">
            <div class="content box style2">
                <header>
                    <h2>Por que PHP?</h2>
                </header>
                <p>PHP é uma linguagem de fácil aprendizagem e simples manipulação. É uma das linguagens mais utilizadas em projetos simples na internet.</p>
            </div>
            <a href="#two" class="button style2 down anchored">Next</a>
        </section>

        <!-- Two -->
        <section id="two" class="main style2 left dark fullscreen">
            <div class="content box style2">
                <header>
                    <h2>Quais vantagens</h2>
                </header>
                <p>O PHP é uma linguagem de custo baixo, logo achamos facilmente hosts com pouco ou nenhum custo para hospedar, também contém inumeras funções em seu <strong>core</strong> que facilita o desenvolvimento das aplicações e deixando a linguagem menos verbosa.</p>
            </div>
            <a href="#work" class="button style2 down anchored">Next</a>
        </section>

        <!-- Work -->
        <section id="work" class="main style3 primary">
            <div class="content">
                <header>
                    <h2>Como programar</h2>
                    <p>Para começar a programar em PHP precisamos de pouca coisa. Com o bloco de notas e um servidor que interprete a linguagem PHP como o <a href="#">Apache</a> já podemos sair em buscar de dominar essa linguagem tão falada.<br>Outros recursos que precisamos são: <br>Se tem a necessidade de armazernas informações, será preciso o uso de um servidor de banco de dados como <a href="#">MySQL</a><br>Se quiser uma ferramenta mais completa para editar seus códigos, Uma IDE para PHP como <a href="#">Netbeans</a></p>
                </header>

                <!-- Gallery  -->
                <div class="gallery">
                    <article class="from-left">
                        <a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a>
                    </article>
                    <article class="from-right">
                        <a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a>
                    </article>
                    <article class="from-left">
                        <a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a>
                    </article>
                    <article class="from-right">
                        <a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a>
                    </article>
                    <article class="from-left">
                        <a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a>
                    </article>
                    <article class="from-right">
                        <a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a>
                    </article>
                </div>

            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="main style3 secondary">
            <div class="content">
                <header>
                    <h2>Nos dê um Oi.</h2>
                    <p>Entre em contato conosco e conheça mais dessa linguagem fabulosa.</p>
                </header>
                <div class="box">
                    <form method="post" action="php/contato.php">
                        <?php
                            if(isset($_SESSION['msg_success'])):
                        ?>
                        <p class="text-success"><?= $_SESSION['msg_success'] ?></p>
                        <?php
                            elseif(isset($_SESSION['msg_fail'])) :
                        ?>
                        <p class="text-danger"><?= $_SESSION['msg_fail'] ?></p>
                        <?php        
                            endif;
                        ?>
                        <div class="field half first">
                            <input type="text" name="name" placeholder="Nome" />
                        </div>
                        <div class="field half">
                            <input type="email" name="email" placeholder="Email" />
                        </div>
                        <div class="field">
                            <textarea name="message" placeholder="Messagem" rows="6"></textarea>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Enviar a Messagem" /></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">

            <!-- Icons -->
            <ul class="actions">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
            </ul>

            <!-- Menu -->
            <ul class="menu">
                <li>&copy; Senac Rio</li><li>Design: <a href="https://github.com/lpjunior?tree=php_2017.2" target="_blank">Turma 2017.2</a></li>
            </ul>

        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>