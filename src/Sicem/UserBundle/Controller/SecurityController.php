<?php

namespace Sicem\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sicem\UserBundle\Entity\CtlUser as User;

class SecurityController extends Controller {

    public function loginAction() {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();
        
        if ($error){
            $mensaje = 'Datos ingresados son incorrectos';
            $class = 'text-danger';
        } else {
            $mensaje = '';
            $class = 'text-info';
        }
        
        $lastUsername = $authenticationUtils->getLastUsername();

        
        return $this->render('SicemUserBundle:Security:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $mensaje,
                    'class' => $class
        ));
    }

    public function loginCheckAction() {
        
    }

    public function cambiarPasswordAction() {

        return $this->render('SicemUserBundle:Security:cambiarpassword.html.twig', array(
                    'error' => ''
        ));
    }

    public function passwordCheckAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        //obtener los datos ingresados en el formulario
        $oldpassword = $request->get('_oldpassword');
        $old2password = $request->get('_old2password');
        $password = $request->get('_password');

        // la confirmación del password
        if ($oldpassword == $old2password) {


            /* cambiar al nuevo password */

            // id del usuario logueado
            $userId = $this->container->get('security.token_storage')->getToken()->getUser()->getId();

            // obtener passwrod almacenado
            $user = $em->getRepository('SicemUserBundle:CtlUser')->find($userId);
            
            //codificando el passwrod
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $password);
            $encoded_oldpassword = $encoder->encodePassword($user, $oldpassword);

            //echo $encoder_oldpassword.$user->getPassword();
            
            //die();
            
            //verificar el password guardado
            if ($user->getPassword() == $encoded_oldpassword) {
                $user->setPassword($encoded);
                $em->persist($user);
                $em->flush();
                $mensaje = 'El password se ha cambiado correctamente';
                $class = 'text-info';
            } else { // si el password es incorrecto
                $mensaje = 'Passwrod incorrecto, no se pudo cambiar al nuevo password';
                $class = 'text-danger';
            }
        } else {
            $mensaje = 'El password no coincide, no se pudo cambiar al nuevo password';
            $class = 'text-danger';
        }

        return $this->render('SicemUserBundle:Security:cambiarpassword.html.twig', array(
                    'error' => $mensaje,
                    'class' => $class
        ));
    }

}
