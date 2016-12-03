<?php

namespace AppBundle\Controller;

use AppBundle\Form\SimplestType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @View\Route("/", name="homepage")
     * @View\Template
     */
    public function indexAction(Request $request)
    {
    }

    /** @View\Template */
    public function subAction()
    {
        return ['form' => $this->createForm(SimplestType::class, null, ['action' => ''])->createView()];
    }
}
