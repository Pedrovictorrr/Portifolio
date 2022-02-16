<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Portifolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>
 
<body>
        <nav class="navbar navbar-expand-sm  navbar-dark nav-bar1 " >
          <a class="navbar-brand roxo hover-color-white" href="\index">Home</a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="navbar-brand hover-color-roxo" href="\skill">Skill</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand hover-color-roxo" href="\" >Projetos</a>
            </li>
            </ul> 
            <ul id="contato" class="navbar-nav">
          <li class="nav-item">
                <a class="navbar-brand hover-color-roxo" href="\contato" id="contato">Contato</a>
              </li>
            </ul>
        </nav>
        
        <div class="container" id="text1">
            <div class="row my-5">
                <div class="col-sm-6 my-5 py-5">
                    <p id="size60"><span class="roxo">Olá,</span> Seja muito bem vindo!!!</p>
                    <div class="row">
                        <div class="col-md-5 p-2">
                            <a href="https://www.linkedin.com/in/pedro-victor-fernandes-de-abreu-98411816a" target="_blank"  class="btn btn-secondary btn-lg btn-block btn-roxo">Linkedin</a>
                        </div>                      
                        <div class="col-md-5 offset-md-1 p-2">
                            <a href="https://drive.google.com/file/d/1K3MfkjW88K4kBUJ7fjom4WCQA73pfCs1/view?usp=sharing" target="_blank" download class="btn btn-secondary btn-lg btn-block btn-roxo">Donwload CV</a>
                        </div>
                    </div>
                </div>
              <div class="col-sm-6 ">
                <img src="{{asset('img/quadradin.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        
</body>
</html>