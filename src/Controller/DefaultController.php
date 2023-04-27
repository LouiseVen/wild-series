<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use SYmfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/app_index/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'website' => 'Wild Series',
         ]);
    }
}