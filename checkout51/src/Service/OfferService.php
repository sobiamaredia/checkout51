<?php


namespace App\Service;


use App\Repository\OfferRepository;
use Doctrine\ORM\EntityManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class OfferService
{
    /** @var EntityManager $em */
    private $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @return \Doctrine\ORM\Query
     */
    public function getAllOffers()
    {
        /** @var OfferRepository $offerRepository */
        $offerRepository = $this->em->getRepository('App:Offer');
        $query = $offerRepository->getAllOffersSQL();
        return $query;
    }
}
