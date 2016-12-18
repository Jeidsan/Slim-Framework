<?php
  //Importa as interfaces para requisição e resposta de modo que não precisaremos
  //utilizar o caminho completo quando quisermos nos referir a estas classes.
  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  //Informo que é usada a classe autoload do Slim Framework
  require '../vendor/autoload.php';

  //Crio o objeto do aplicativo
  $app = new \Slim\App;

  //Crio um método que aceitará requisições pelo verbo GET.
  $app->get(
    '/hello/{name}',
    function (Request $request, Response $response)
    {
      $name = $request->getAttribute('name');
      $response->getBody()->write("Hello, $name");

      return $response;
    });

  //Inicio a aplicação
  $app->run();
