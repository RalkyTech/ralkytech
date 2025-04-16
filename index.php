<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./ASSETS/CSS/estilos.css">
        <!-- CDN Font Awesome -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fim CDN -->
        <title>Ralky Tech</title>
    </head>

    <body>
        <!-- Cabeçalho -->
        <header>
            <div class="interface">
                <div class="logo">
                    <img src="./ASSETS/IMG/logo2_ralky_semfundo.png"
                        alt="Logo EMPRESA">
                </div> <!-- fim log-->
                <nav class="menu-desktop">
                    <ul>
                        <li> <a href="#">Inicio</a></li>
                        <li> <a href="#">Especialidade</a></li>
                        <li> <a href="#">Sobre</a></li>
                        <li> <a href="#">Projetos</a></li>
                    </ul>
                </nav> <!-- fim menu desktop -->
                <div class="btn-laranja">
                    <a href="#">
                        <button>Contato</button>
                    </a>
                </div> <!-- Fim Botão Laranja-->
                <div class="btn-verde">
                    <a href="#">
                        <button>Login</button>
                    </a>
                </div> <!-- Fim Botão Verde -->

            </div> <!-- fim interface header -->
            <!-- <div class="btn-abrir-menu" id="btn-menu">
            <i class="fa-solid fa-bars"></i>         
        </div> -->
            <!--Fim Menu Sanduiche-->
        </header>
        <div class="overlay-menu" id="overlay-menu"></div>
        <!-- 2 Parte - Topo da Página -->
        <main>
            <!-- Adição da seção de feedback -->
            <?php if (isset($_GET['status'])): ?>
            <div class="feedback-mensagem">
                <?php if ($_GET['status'] == 'sucesso'): ?>
                <p class="sucesso">Mensagem enviada com sucesso!</p>
                <?php elseif ($_GET['status'] == 'erro'): ?>
                <p class="erro">
                    <?php 
                    echo isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : 
                        'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.';
                    ?>
                </p>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <section class="topo-do-site">
                <div class="interface">
                    <div class="flex">
                        <div class="txt-topo-site">
                            <h1>Transformando Necessidades em Soluções
                                Tecnológicas.</h1>

                            <p>
                                Na era digital, as soluções tecnológicas são
                                fundamentais para impulsionar negócios e inovar
                                no mercado. Na Ralk Tech, unimos criatividade e
                                inovação para transformar suas ideias em
                                realidade.
                            </p>

                            <p>
                                Com um portfólio diversificado de aplicações
                                personalizadas, estamos sempre prontos para
                                atender às suas necessidades e auxiliar no
                                crescimento da sua empresa.
                            </p>

                            <h2>Ralk Tech: Sua parceira em tecnologia.</h2>
                            <div class="btn-laranja">
                                <!-- <button>
                                <a href="#"></a>
                                Entrar em contato
                            </button> -->
                            </div> <!-- Fim BTN Laranja 2 parte-->
                        </div> <!-- Fim Txt Topo -->
                        <div class="img-topo-site">
                            <img src="./ASSETS/IMG/imgDev1.png">
                        </div><!-- Fim IMG Topo-->
                    </div> <!-- Fim Flex 2 Parte -->
                </div> <!-- Fim Interface 2 Parte -->
            </section> <!-- Fim Section Topo -->
            <section class="especialidades">
                <div class="interface">
                    <h2>NOSSAS <span>ESPECIALIDADES </span></h2>
                    <div class="flex">
                        <div class="especialidades-box">
                            <img
                                src="./ASSETS/IMG/network-user-interface-in-web-design.png">
                            <h3>Web Site</h3>
                            <p>Um <strong>website</strong> é a vitrine digital
                                de uma empresa, onde clientes podem conhecer
                                seus produtos e serviços. Ele proporciona uma
                                presença online essencial, aumentando a
                                visibilidade e facilitando a comunicação com o
                                público.</p>
                        </div> <!-- Fim especilidades Box 1 -->

                        <div class="especialidades-box">
                            <img
                                src="./ASSETS/IMG/simplistic-mobile-app-development-and-coding-1.png">
                            <h3>Prototipação</h3>
                            <p>A <strong>prototipação</strong> é uma fase
                                fundamental no desenvolvimento de produtos,
                                permitindo testar e validar ideias antes da
                                criação final. Com protótipos, as empresas podem
                                identificar melhorias e garantir que o produto
                                atenda às necessidades dos usuários.</p>
                        </div> <!-- Fim especilidades Box 2 -->

                        <div class="especialidades-box">
                            <img
                                src="./ASSETS/IMG/memphis-mobile-app-development-and-application-programming.png">
                            <h3>Aplicações Web e Mobiles</h3>
                            <p>As <strong>aplicações web e mobile</strong>
                                oferecem acesso a serviços e informações de
                                forma prática e rápida, a qualquer hora e lugar.
                                Elas proporcionam uma experiência interativa e
                                personalizada para os usuários, aumentando a
                                eficácia e a satisfação.</p>
                        </div> <!-- Fim especilidades Box 3 -->

                        <div class="especialidades-box">
                            <img
                                src="./ASSETS/IMG/techny-interface-with-a-blog-on-youtube.png">
                            <h3>Blogs e Redes Sociais</h3>
                            <p><strong>Blogs e redes sociais</strong> são
                                ferramentas poderosas para criar interação e
                                engajamento com o público. Eles ajudam a
                                compartilhar conteúdo relevante, fortalecer a
                                marca e construir relacionamentos duradouros com
                                os clientes.</p>
                        </div> <!-- Fim especilidades Box 4 -->
                    </div> <!-- Fim Flex Especialidades -->
                </div> <!-- Fim Interface Especialidades -->
            </section> <!-- Fim Section Especialidades-->
            <!-- Quarta Parte do Projeto -->
            <section class="sobre">
                <div class="interface">
                    <div class="flex">
                        <div class="img-sobre">
                            <img src="./ASSETS/IMG/imgDev2.png">
                        </div><!-- Fim Imagem -->
                        <div class="txt-sobre">
                            <h2>MUITO PRAZER,<strong> SOMOS A RALKY
                                    TECH</strong></h2>
                            <p>
                                A <strong>RALKY Tech</strong>, é formada por uma
                                equipe talentosa de desenvolvedores
                                especializados em tecnologia da informação.
                            </p>

                            <p>
                                Desde nossa fundação em janeiro de 2024, temos
                                nos dedicado ao <strong>DESENVOLVIMENTO
                                    WEB</strong>, aplicando técnicas avançadas e
                                <strong>PRÁTICAS</strong> para criar aplicações
                                web criativas e inovadoras.
                            </p>
                            <div class="btn-social">
                                <a href="#"><button><i
                                            class="fa-brands fa-facebook"></i></button></a>

                                <a href="#"><button><i
                                            class="fa-brands fa-instagram"></i></button></a>

                                <a href="#"><button><i
                                            class="fa-brands fa-linkedin"></i></button></a>

                                <a href="#"><button><i
                                            class="fa-brands fa-youtube"></i></button></a>

                                <a href="#"><button><i
                                            class="fa-brands fa-github"></i></button></a>
                            </div> <!-- Fim btn-social -->
                        </div><!-- Fim Texto Sobre -->
                    </div> <!-- Fim Flex -->
                </div> <!-- Fim Interface -->
            </section> <!-- Fim Section Sobre -->

            <section class="portifolio">
                <div class="interface">
                    <h2>MEU <span> PORTIFOLIO</span></h2>
                    <div class="flex">
                        <div class="img-port" id="prj01"
                            style="background-image: url(./ASSETS/IMG/Projeto01.png);">
                            <div class="overlay">
                                PROJETO 01
                            </div>
                        </div>

                        <div class="img-port"
                            style="background-image: url(./ASSETS/IMG/Projeto02.png);">
                            <div class="overlay">
                                PROJETO 02
                            </div>
                        </div>

                        <div class="img-port"
                            style="background-image: url(./ASSETS/IMG/Projeto03.png);">
                            <div class="overlay">
                                PROJETO 03
                            </div>
                        </div>

                    </div><!--Fim Flex-->
                </div><!--Fim Interface-->
            </section> <!-- Fim Portifolio-->

            <section class="fale-conosco">
                <div class="interface">
                    <h2>FALE <span>CONOSCO</span></h2>
                    <form action="enviar.php" method="POST">
                        <input type="text" name="nome" id="cNome"
                            placeholder="Seu Nome Completo" required>
                        <input type="email" name="email" id="cEmail"
                            placeholder="Seu Email" required>
                        <input type="text" name="celular" id="cCel"
                            placeholder="Seu Celular">
                        <textarea name="mensagem" id="cTxtMsg"
                            placeholder="Digite sua mensagem"
                            required></textarea>
                        <div class="btn-enviar">
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </section>
        </main> <!-- Fim Main -->

        <footer>
            <div class="interface">
                <div class="line-footer">
                    <div class="flex">
                        <div class="logo-footer">
                            <img src="./ASSETS/IMG/logo2_ralky_semfundo.png">
                        </div> <!--Fim logo-footer-->
                        <div class="btn-social">
                            <a href="#"><button><i
                                        class="fa-brands fa-facebook"></i></button></a>

                            <a href="#"><button><i
                                        class="fa-brands fa-instagram"></i></button></a>

                            <a href="#"><button><i
                                        class="fa-brands fa-linkedin"></i></button></a>

                            <a href="#"><button><i
                                        class="fa-brands fa-youtube"></i></button></a>

                            <a href="#"><button><i
                                        class="fa-brands fa-github"></i></button></a>
                        </div> <!--Fim btn-social-->
                    </div><!--Fim Flex-->
                    <div class="line-footer borda">
                        <p>
                            <i class="fa-solid fa-envelope" id="faleicon"></i>
                            <a id="falecom"
                                href="mailto:falecom@developersrgt.com.br">falecom@developersrgt.com.br</a>
                        </p>

                        <p class="designby">
                            Design By <span>Dev</span>elopers <span>RGT</span>
                        </p>
                    </div><!--Fim Line-Footer Borda-->
                </div><!--Fim Line-footer-->
            </div><!--Fim Interface-->
        </footer><!--Fim Footer-->
        <!-- Nona Parte Projeto - Menu Mobile -->
        <div class="menu-mobile" id="menu-mobile">
            <div class="btn-fechar">
                <i class="fa-solid fa-x"></i>
            </div><!--Fim btn-fechar-->
            <nav>
                <ul>
                    <li> <a href="#">Inicio</a></li>
                    <li> <a href="#">Especialidade</a></li>
                    <li> <a href="#">Sobre</a></li>
                    <li> <a href="#">Projetos</a></li>
                </ul>
            </nav><!--Fim menu nav-->
        </div><!--Fim Menu Mobile-->
        <script src="./ASSETS/JS/scripts.js"></script>
    </body>

</html>