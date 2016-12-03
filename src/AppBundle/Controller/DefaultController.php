<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Test;
use AppBundle\Form\TestType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $test = new Test();
        $form = $this->createForm(TestType::class, $test,['csrf_protection'=>false]);
        $form->submit(['url'=>'http://symfony.com']);
        dump($form->isSubmitted());
        dump($form->isValid());
        dump($form->getErrors(true));

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);

    }
}
