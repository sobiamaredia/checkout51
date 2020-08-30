<?php


namespace App\Tests\Repository;


use App\Entity\Offer;
use App\Repository\OfferRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OfferRepositoryTest extends KernelTestCase
{
    /**
     * @var EntityManager $entityManager
     */
    private $entityManager;


    protected function setUp()
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    /**
     * @test
     */
    public function testGetAllOffersSQL()
    {
        $expected = new Offer();
        $expected->setName('Buy 2: Select TRISCUIT Crackers');
        $expected->setImageUrl('https://d3bx4ud3idzsqf.cloudfront.net/public/production/6840/67561_1535141624.jpg');
        $expected->setCashBack(1.5);

        $expectedSQL = "SELECT offer FROM App:Offer offer";

        /** @var Query $query */
        $query = $this->entityManager
            ->getRepository(Offer::class)
            ->getAllOffersSQL();

        /** @var Offer $result */
        $result = $query->getResult()[0];

        $this->assertEquals($expectedSQL, $query->getDQL());
        $this->assertEquals($expected->getName(), $result->getName());
        $this->assertEquals($expected->getImageUrl(), $result->getImageUrl());
        $this->assertEquals($expected->getCashBack(), $result->getCashBack());
    }
}