<?php
/**
 * Created by PhpStorm.
 * User: mateusz
 * Date: 30.12.18
 * Time: 21:26
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index")
     */
    public function index()
    {
        return new JsonResponse([
            'action' => 'index',
            'time' => time(),
            'test' => 'test'
        ]);
    }
}