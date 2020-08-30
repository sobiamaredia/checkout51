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
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return \Knp\Component\Pager\Pagination\PaginationInterface
     */
    public function getAllOffers(Request $request, PaginatorInterface $paginator)
    {
        /** @var OfferRepository $offerRepository */
        $offerRepository = $this->em->getRepository('App:Offer');
        $query = $offerRepository->getAllOffersSQL();
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10
        );
        return $pagination;
    }

}