<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Portifolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!--navbar-->
<div id="home"></div>
    <br><br><br>
    <nav class="navbar navbar-expand-sm fixed-top  navbar-dark nav-bar1 " id="myNavbar">
        <a class="navbar-brand roxo hover-color-white" href="#home">Home</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand hover-color-roxo" href="#skill">Skill</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand hover-color-roxo" href="#Sobre">Sobre</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand hover-color-roxo" href="#contato" >Contato</a>
            </li>
        </ul>
    </nav>
<!--home-->
    <div class="container-fluid" id="text1">
        <div class="row my-5">
            <div class="offset-md-1 col-md-5 my-5 py-5">
                <p></p><br>
                <p id="size60"><span class="roxo">Olá,</span> Seja muito bem vindo!!!</p>
                <p class="text2">Me chamo Pedro Victor Fernandes de Abreu esse é meu portifolio pessoal.</p>
                <div class="row">
                    <div class="col-md-5 p-2">
                        <a href="https://www.linkedin.com/in/pedro-victor-fernandes-de-abreu-98411816a" target="_blank"
                            class="btn btn-secondary btn-lg btn-block btn-roxo">Linkedin</a>
                    </div>
                    <div class="col-md-5 offset-md-1 p-2">
                        <a href="https://drive.google.com/file/d/1K3MfkjW88K4kBUJ7fjom4WCQA73pfCs1/view?usp=sharing"
                            target="_blank" download class="btn btn-secondary btn-lg btn-block btn-roxo">Donwload CV</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <img src="{{asset('img/quadradin.png')}}" alt="" class="img-fluid">
            </div>
        </div>
<div id="skill"><br><br><br><br><br></div>
<!--skill-->
        <div  class="container" style="max-width: 90% !important;" >
            <div class="row" style="margin: 0 auto !important;">
                <div class="col-md-6" >
                    <div class="p-5 rounded text-muted bg-color-gray">
                        <p><span class="text2 btn btn-secondary btn-lg btn-block btn-roxo">Histórico
                                Profissional</span><br>
                        <p><span class="text2 ">Auxiliar / Suporte Técnico em Informatica</span><br>
                            <span class="text3  "> Empresa: Techbit Informática</span> <br>
                            <span class="text4 ">- Manutenção de microcomputadores</span>
                        </p>
                        <p><span class="text2 "> Aprendiz Administrativo informática</span><br>
                            <span class="text3 ">Empresa: Colégio La Salle Abel</span> <br>
                            <span class="text4">- Aprendiz de suporte técnico em informática e atendimento ao
                                usuário.</span>
                        </p>
                        <p><span class="text2 ">Auxiliar Administrativo em informática</span><br>
                            <span class="text3 ">Empresa: Colégio La Salle Abel</span><br>
                            <span class="text4 "> - Suporte técnico em informática e atendimento ao usuário.<br>
                                - Operador audiovisual.<br>
                                - Infraestrutura de informática em geral.<br>
                                - Rede e cabeamento.<br>
                                - Sistemas Operacionais (Linux,Mac Osx,Windows)<br>
                                - Noções basicas de programação (C, Javascript, HTML/CSS, Bootstrap, php, Laravel)<br> </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-5 rounded text-muted bg-color-gray">
                        <p><span class="text2 btn btn-secondary btn-lg btn-block btn-roxo">Histórico
                                Academico</span><br>
                        <p><span class="text2 ">Faculdade Sistema de informação 3º período</span><br>
                            <span class="text3  "> Cursando (2021 a 2025)</span> <br>
                            <span class="text4 ">- Unilasalle RJ</span>
                        </p>
                        <p><span class="text2 "> Ensino Médio</span><br>
                            <span class="text3 ">Formado em 2019</span> <br>
                            <span class="text4">- Colégio Vital Brasil</span>
                        </p>
                        <p><span class="text2 ">Curso Javascript (Udemy)</span><br>
                            <span class="text3 ">Cursando (90 horas)</span><br>
                            <span class="text4 "> - Curso Web Moderno Completo com JavaScript 2021 + Projetos<br>
                                - Javascript <br>
                                - Angular <br>
                                - React <br>
                                - Next<br>
                                - HTML CSS<br>
                            </span>
                        </p>
                    </div>
                </div>
                <
            </div>
        </div>
    </div>
    <div id="Sobre"></div>
<br><br><br><br><br><br><br><br>
<!--sobre-->

    <div  class="container" style="max-width: 90% !important;" >
        <div class="row"  style="margin: 0 auto !important;">
            <div class="col-md-6">
                <div class="row" >
                    <div class="col-md-6">
                        <div class="p-5 rounded text-muted bg-color-gray">
                        <p><span class="text2 btn btn-secondary btn-lg btn-block btn-roxo">Academia</span><br>
                          
                            Pratico academia 5 vezes na semana as vezes 6 para poder manter minha saude, tanto fisica quanto mental. É um hooby que levei para minha vida e que não consigo mais largar!
                            Minha progressão na academia foi muito transformadora, emagreci e mudei totalmente meu lifestyle por isso.
                    <br><br><br>
                        </div>
                </div>
                    <div class="col-md-6">
                        <div class="p-5 rounded text-muted bg-color-gray">
                        <p><span class="text2 btn btn-secondary btn-lg btn-block btn-roxo">Programação </span><br>
                            Em 2021 comecei a faculdade de sistema de informação e tive contato com, HTML/CSS e C logo no primeiro periodo, comecei a me aprofundar mesmo no primeiro periodo e comecei um cursos de javascrypt. Atualmente uso a programação de novas linguagens como um hobby em momentos livres e atualmente meu principal estudo para o futuro.
                    </div>
                </div>
                </div>
            </div>    
            <div class="col-md-6">
                <div class="row" >
                    <div class="col-md-6">
                        <div class="p-5 rounded text-muted bg-color-gray">

                        <p><span class="text2 btn btn-secondary btn-lg btn-block btn-roxo">Social</span><br>
                            Amo sair com meus amigos e familiares nos finais de semana, tenho uma vida social bem ativa, gosto de ir a bares e restaurantes experimentar coisas novas ou ate reunir amigos em casa,  sempre colocar assuntos da semana em dia com meus amigos. Meu momento de distração e muita risada do final de semana.
                            <br>
                            <br>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="p-5 rounded text-muted bg-color-gray">

                        <p><span class="text2 btn btn-secondary btn-lg btn-block btn-roxo">Gastronomia</span><br>
                            Tem coisa melhor que comer? Muito do meu tempo fico pensando no que comer no final de semana, pois a maior parte do tempo da minha semana sigo uma dieta com poucas comidas "gostosas" digamos que sejam comidas saudaveis. Sair pra comer é um dos meus hobbys preferidos, escolher um bom restaurante com uma boa gastronomia em agrada muito!
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><div id="contato"></div><br>
    
<!--Contato-->
    <div  class="container" style="max-width: 90% !important;" id="section2">
        <div class="row" style="margin: 0 auto !important;;">
            <div class="col-md-12">
                <form class="rounded text-muted bg-color-gray p-5" style="margin: 0 auto !important;">
                    <span class="text2 btn btn-secondary btn-lg btn-block btn-roxo ">Contato</span>
                    <br>
                    <div class="form-row">
                        <div class="form-group mr-2">
                            <label for="inputEmail4 " class="text4">Nome</label>
                            <input type="text" class="form-control bg-color-dark" id="inputEmail4" placeholder="Nome">
                        </div>
                        <div class="form-group ">
                            <label for="inputPassword4" class="text4">Sobrenome</label>
                            <input type="text" class="form-control bg-color-dark" id="inputPassword4" placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="inputAddress" class="text4">Email</label>
                        <input type="email" class="form-control bg-color-dark"  id=" inputAddress" placeholder="exemplo@exemplo.com...">
                    </div>
                    <div class="form-group ">
                        <label for="inputAddress2" class="text4">Mensagem</label>
                        <textarea class="form-control bg-color-dark" id=" inputAddress2" placeholder="Digite aqui..." cols="30"
                            rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn text4 btn-secondary  btn-roxo" >Enviar</button>
                </form>
            </div>
        </div>
    </div>

        <br><br><br><br><br>
        <footer class=" bg-color-gray">
            <br>
            <p class="text4">Pedro Victor Fernandes de Abreu <br>
            
            </p>
            <br>
          </footer>
    <script>
        $(document).ready(function () {
            // Add scrollspy to <body>
            $('body').scrollspy({ target: ".navbar", offset: 0 });

            // Add smooth scrolling on all links inside the navbar
            $("#myNavbar a").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                }  // End if
            });
        });
    </script>
</body>

</html>