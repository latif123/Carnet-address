<?php

namespace RAFA\carnetAddressBundle\Controller;

use RAFA\carnetAddressBundle\Entity\Info;
use RAFA\carnetAddressBundle\Form\EInfoType;
use RAFA\carnetAddressBundle\Form\InfoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $info = $em->getRepository('RAFAcarnetAddressBundle:Info')->findBy(array('user' => $user));
        return $this->render('RAFAcarnetAddressBundle:dashboard:index.html.twig', compact('info'));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        //$session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $info = new Info();
        $form =  $this->get('form.factory')->create(new InfoType($user), $info);

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->persist($info);
                $em->flush();
                return $this->redirect($this->generateUrl('raf_acarnet_address_dashboard'));
            }
        }

        $info = $em->getRepository('RAFAcarnetAddressBundle:Info')->findBy(array('user' => $user));
        return $this->render('RAFAcarnetAddressBundle:Dashboard:create.html.twig', array(
            'form'=> $form->createView(),
            'info'=>$info,
        ));


    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        $info = $em->getRepository('RAFAcarnetAddressBundle:Info')->find($id);
        $form =  $this->get('form.factory')->create(new EInfoType(), $info);
            if($request->isMethod('POST')) {
                $form->handleRequest($request);
                if($form->isValid()){
                    $info = $form->getData();
                    $em->persist($info);
                    $em->flush();
                    $session->getFlashBag()->add('edit', 'Votre données bien modifiée !');
                    return $this->redirect($this->generateUrl('raf_acarnet_address_dashboard_edit', array(
                            'id' => $info->getId(),)
                    ));
                }
            }

        return $this->render('RAFAcarnetAddressBundle:dashboard:edit.html.twig', array(
            'form'=> $form->createView()
        ));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function destroyAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $info = $em->getRepository('RAFAcarnetAddressBundle:Info')->find($id);

        $em->remove($info);
        $em->flush();

        return $this->redirect($this->generateUrl('raf_acarnet_address_dashboard'));
    }


}
