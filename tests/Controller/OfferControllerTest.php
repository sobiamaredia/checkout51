<?php


namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OfferControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/offers');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertStringContainsString(
            'Buy 2: Select TRISCUIT Crackers',
            $client->getResponse()->getContent()
        );
    }

    /**
     * @test
     */
    public function testIndex_fail()
    {
        $client = static::createClient();

        $client->request('POST', '/offers');

        $this->assertEquals(405, $client->getResponse()->getStatusCode());
    }
}