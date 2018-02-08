<?php

namespace App\Controller;

use App\Provider\PizzaProviderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FatPizzaController extends Controller
{
    /**
     * @var PizzaProviderInterface
     */
    private $pizzaProvider;

    /**
     * FatPizzaController constructor.
     * @param PizzaProviderInterface $pizzaProvider
     */
    public function __construct(PizzaProviderInterface $pizzaProvider)
    {
        $this->pizzaProvider = $pizzaProvider;
    }

    /**
     * @Route("/fat/pizza", name="fat_pizza")
     */
    public function index()
    {
        dump($this->pizzaProvider->getAll());die;

        return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }
}
