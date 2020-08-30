<?php


namespace App\Tests\Service;


use App\Repository\OfferRepository;
use App\Service\OfferService;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;

class OfferServiceTest extends TestCase
{

    /**
     * @test
     */
    public function testGetAllOffers()
    {
        $abstractQuery = $this
            ->getMockBuilder('Doctrine\ORM\AbstractQuery')
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $offerRepository = $this->createMock(OfferRepository::class);
        $offerRepository->expects($this->once())
            ->method('getAllOffersSQL')
            ->willReturn($abstractQuery);

        $entityManager = $this
            ->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $entityManager->expects($this->any())
            ->method('getRepository')
            ->willReturn($offerRepository);

        $offerService = new OfferService($entityManager);

        $result = $offerService->getAllOffers();

        $this->assertEquals($abstractQuery, $result);
    }
}
