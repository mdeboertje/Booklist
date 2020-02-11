<?php

namespace App\Controller;

use App\Repository\ReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(BookRepository $bookRepository, ReviewRepository $reviewRepository )
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'books' => $bookRepository->findAll(),


        ]);
    }


}
