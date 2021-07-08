<?php

namespace App\Controller;

use App\Entity\Foto;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FotosController
{

   /**
    * @Route("/addfoto", methods=["POST"])
    */
   public function addFoto(Request $request) : Response
   {
      $dados = json_decode($request->getContent());
      $foto = new Foto();
      $foto->name = $dados->name;
      $foto->src = $dados->src;

      $this->entityManager->persist($foto);
      $this->entityManager->flush();

      return new JsonResponse($foto);
   }

}