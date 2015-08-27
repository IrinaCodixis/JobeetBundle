<?php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
 
class JobControllerTest extends WebTestCase
{
  public function testIndex()
  {
    $client = static::createClient();
 
    $crawler = $client->request('GET', '/');
    $this->assertEquals('Ens\JobeetBundle\Controller\JobController::indexAction', $client->getRequest()->attributes->get('_controller'));
    $this->assertTrue($crawler->filter('.jobs td.position:contains("Expired")')->count() == 0);
  
  $kernel = static::createKernel();
  $kernel->boot();
  $max_jobs_on_homepage = $kernel->getContainer()->getParameter('max_jobs_on_homepage');
  $this->assertTrue($crawler->filter('.category_programming tr')->count() 
  }
}
?>