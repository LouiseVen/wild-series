<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use SYmfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;
use App\Repository\SeasonRepository;

#[Route('/program', name: 'program_')]
class ProgramController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(ProgramRepository $programRepository): Response
    {
        $program = $programRepository->findAll();
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Series',
            'programs' => $program,
        ]);
    }


    #[Route('/{id}', methods:['GET'], requirements: ['id'=>'\d+'], name: 'show')]
    public function show(int $id, ProgramRepository $programRepository, SeasonRepository $seasonRepository): Response
    {
        $program = $programRepository->FindOneBy(['id'=>$id]);
        $seasons = $seasonRepository;

        if (!$program) {
            throw $this->createNotFoundException(
                'No program with id : '.$id.' found in program\'s table.'
            );
        }
        return $this->render('program/show.html.twig', [
            'program' => $program,
            'seasons' => $seasons,
            'id' => $id,
        ]);
    }

    #[Route('/{programId}/seasons/{seasonId}', methods:['GET'], requirements: ['programId'=>'\d+', 'seasonId'=>'\d+'], name:'season_show')]
    public function showSeason(int $programId, int $seasonId, Programrepository $programRepository, SeasonRepository $seasonRepository): Response
    {
        $program = $programRepository->FindOneBy(['id'=>$programId]);
        $seasons = $seasonRepository->FindOneBy(['id'=>$seasonId]);

        if (!$program) {
            throw $this->createNotFoundException(
                'No program with id : '.$programId.' found in program\'s table.'
            );
        } if (!$seasons) {
            throw $this->createNotFoundException(
                'No season with id : '.$seasonId.' found in program\'s table.'
            );
        }
        return $this->render('program/season_show.html.twig', [
            'program' => $program,
            'seasons' => $seasons,
            'programId' => $programId,
            'seasonId' => $seasonId,
        ]);
    }
}
