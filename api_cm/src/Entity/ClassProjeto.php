<?php

namespace App\Entity;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClassProjeto
{
   public function cadastra(Request $request): Response
   {
      $dados = $request->getRequestUri();

   }
}
