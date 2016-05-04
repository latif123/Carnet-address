<?php

namespace RAFA\carnetAddressBundle\Controller;

use RAFA\carnetAddressBundle\Entity\Users;
use RAFA\carnetAddressBundle\Form\UsersType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    public function loginAction()
    {
        return $this->render('RAFAcarnetAddressBundle:Auth:login.html.twig');
    }

    public function registerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        $users = new Users();
        $form = $this->get('form.factory')->create(new UsersType(), $users);

        if ($form->handleRequest($request)->isValid()){
            $email = $form['email']->getData();
            $test = $em->getRepository('RAFAcarnetAddressBundle:Users')->findOneBy(array('email'=>$email));

            if($test){
                $session->getFlashBag()->add('testmail', 'Cette adresse Email déjà existe !');
                return $this->redirect($this->generateUrl('raf_acarnet_address_register'));
            }

            $em->persist($users);
            $em->flush();

            $session->getFlashBag()->add('info', 'Inscription bien enregistrée');
            return $this->redirect($this->generateUrl('raf_acarnet_address_login'));
        }
        return $this->render('RAFAcarnetAddressBundle:Auth:register.html.twig', array(
            'form' => $form->createView()
        ));

    }

    public function storeAction()
    {

    }

    public function editAction()
    {

    }

    public function updateAction()
    {

    }

    public function destroy()
    {

    }


}
