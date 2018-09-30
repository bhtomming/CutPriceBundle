<?php
/**
 * Created by Drupai.
 * User: 烽行天下
 * Date: 2018\9\28 0028
 * Time: 10:56
 */

namespace Cut\PriceBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cut/price")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(){
        return new Response("主页");
    }

}