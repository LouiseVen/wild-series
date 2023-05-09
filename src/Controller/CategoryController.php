<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;

#[Route('/category', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll(); 
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'categories' => $categories,
        ]);
    }

    #[Route('/show/{name}', methods: ['GET'], requirements: ['name'=>'\w+'], name: 'show')]
    public function show(string $name, CategoryRepository $categoryRepository, ProgramRepository $programRepository)
    {
        $categories = $categoryRepository->findOneBy(['name'=>$name]);
        $programs = [];
        if (!$categories){
            throw $this->createNotFoundException(
                'No category with name : '.$name.' found in categories\'s table.'
            );
        } else {
            $programs = $programRepository->findBy(['category' => $categories->getId()], ['id'=>'DESC'], 3);
        }
        return $this->render('category/show.html.twig', [
            'categories' => $categories,
            'programs' => $programs,
        ]);

    }
}
