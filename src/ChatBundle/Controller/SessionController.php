<?php

namespace ChatBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class SessionController extends Controller
{
    /**
     * @Route("/session", "name="session")
     */

    public function indexAction(Request $request)
    {
        $session = new Session();
        $session->start();

        // set and get session attributes
        $session->set('name', 'roxanne');
        $user = $session->get('name');

        // set flash messages
        $session->getFlashBag()->add('notice', 'Profile updated');

        // retrieve messages
        foreach ($session->getFlashBag()->get('notice', array()) as $message) {
            echo '<div class="flash-notice">'.$message.'</div>';
        }

        return $this->render('@Chat/Default/index.html.twig', array('name' => $name));
    }
}
