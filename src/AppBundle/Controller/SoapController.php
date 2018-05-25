<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use AppBundle\Service\AnimalsService;
use AppBundle\Service\Hello;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Soap\AutoDiscover;
use Zend\Soap\Client;
use Zend\Soap\Server;
use Zend\Soap\Server\DocumentLiteralWrapper;
use Zend\Soap\Wsdl\ComplexTypeStrategy\ArrayOfTypeComplex;
use Zend\Soap\Wsdl\ComplexTypeStrategy\ArrayOfTypeSequence;

class SoapController extends Controller
{
    /**
     * @Route("/animals-service", name="animals_service_soap_client")
     * @Method({"POST"})
     */
    public function clientAction(Request $request)
    {
        ini_set('soap.wsdl_cache_enabled', '0');
//
        $xml = str_replace('\n', '', $request->getContent());

        $soap = new Server('http://nginx/animals-service' . '?wsdl');
        $soap->setObject(new DocumentLiteralWrapper(new AnimalsService(
            $this->get('validator'),
            $this->get('doctrine.orm.entity_manager'),
            $this->get('eight_points_guzzle.client.tv_api')
        )));
        $content = $soap->handle($xml);

        return new Response($content);


//        $client = new Client('http://nginx/animals-service?wsdl');
//
//        $result = $client->assignProgramToAnimal([
//            'id' => '123',
//            'title' => 'title',
//            'television' => 'television',
//            'startTime' => 'start time', // stop req
//
//            'info' => [
//                'description' => 'description',
//                'legalAge' => '14',
//                'releaseYear' => 'release year',
//                'type' => 'type'
//            ]
//        ]);
//
//        dump($client->getLastRequest()); die;
//
//        return new Response($result->createAnimalResult);
    }
    
    /**
     * @Route("/animals-service", name="animals_service_soap_server")
     * @Method({"GET"})
     */
    public function serverAction()
    {
        ini_set('soap.wsdl_cache_enabled', '0');
        $serverUrl = "http://nginx/animals-service";
        $options = [
            'uri' => $serverUrl,
            'cache_wsdl' => WSDL_CACHE_NONE,
        ];
        $server = new Server(null, $options);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');

        if (isset($_GET['wsdl'])) {
//            $soapAutoDiscover = new AutoDiscover(new ArrayOfTypeSequence());
            $soapAutoDiscover = new AutoDiscover(new ArrayOfTypeComplex());
            $soapAutoDiscover->setBindingStyle(array('style' => 'document'));
            $soapAutoDiscover->setOperationBodyStyle(array('use' => 'literal'));
            $soapAutoDiscover->setClass(AnimalsService::class);
            $soapAutoDiscover->setUri($serverUrl);

            $response->setContent($soapAutoDiscover->generate()->toXml());
        } else {
            $soap = new Server($serverUrl . '?wsdl');
            $soap->setObject(new DocumentLiteralWrapper(new AnimalsService(
                $this->get('validator'),
                $this->get('doctrine.orm.entity_manager'),
                $this->get('eight_points_guzzle.client.tv_api')
            )));
            $soap->handle();
        }

        return $response;
    }
}