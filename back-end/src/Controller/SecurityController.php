<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SecurityController extends AbstractController {
  /**
   * @Route("/login", name="login")
   */
  public function login(Request $request)
  {
    return new Response('<html><body>Admin page!</body></html>');
  }
}