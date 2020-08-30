<?php

namespace App\Controller;

use App\Repository\OfferRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OfferController extends AbstractController
{
    /** @var EntityManager $em */
    private $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/offer", name="offer")
     */
    public function index()
    {
        /** @var OfferRepository $offers */
        $offerRepository = $this->em->getRepository('App:Offer');
        $offers = $offerRepository->findAll();

        return $this->render('offer/index.html.twig', [
            'listOfOffers' => $offers
        ]);
    }
}
