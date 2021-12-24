<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_profile")
     */
    public function index(): Response
    {
        $user = $this->getUser();



        return $this->render('admin/index.html.twig', [
            'user' => $user,

        ]);
    }
}
