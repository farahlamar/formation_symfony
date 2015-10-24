<?php

namespace formation\AnnonceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Farah ! ');

        $this->assertTrue($crawler->filter('html:contains("Hello Farah !")')->count() > 0);
    }
}
