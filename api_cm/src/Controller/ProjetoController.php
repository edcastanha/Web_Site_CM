<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetoController
{
   /**
    * @Route("/projeto", methods={"GET"})
    */
   public function Projeto(Request $request):Response
   {
      $dados = $request->getContent();

      return new JsonResponse($dados);
   }

}
