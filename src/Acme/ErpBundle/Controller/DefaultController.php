<?php

namespace Acme\ErpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ErpBundle\Model\Model;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    //MODULO SISTEMA

        public function indexAction($name)
        {

            return $this->render('AcmeErpBundle:Default:index.html.twig', array('name' => $name));   
        }

        public function loginAction()
        {

            //vars por defecto
            $msj="ingresar usuario y clave..!";
            $user=Array();
            $view="login";

            //iniciar conexion a bd
            $conn = $this->get('database_connection');

            $users = $conn->fetchAll('SELECT 
                                        empresa_id,
                                        emp_nombre FROM 
                                        empresa where mi_empresa=1 and bestado=1');
            //iniciar sesion
            session_start();

            //action login
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                if($_POST['accion']=='logear')
                {
                    //validar sesion
                    $user = $conn->fetchAll('select trab_usuario,
                                                      trab_clave,
                                                      empresa_id,
                                                      perfil_id
                                                      from trabajador where
                                                      trab_usuario=? and 
                                                      trab_clave=? and 
                                                      empresa_id=?', array($_POST['user'],$_POST['clave'],$_POST['empresa']));
                   
                    if(count($user)>0)
                    {

                        //iniciar sesion
                        //session_start();
                        foreach($user as $data)
                        {
                            $_SESSION['SIS']['user']=$data['trab_usuario'];
                            $_SESSION['SIS']['clave']=$data['trab_clave'];
                            $_SESSION['SIS']['empresa']=$data['empresa_id'];
                            $_SESSION['SIS']['perfil']=$data['perfil_id'];
                        }

                        //$baseURL = $this->getContainer()->getParameter('acme_erp_home'); 
                        //header('Location: '.$baseURL);
                        //exit;
                        return $this->redirect($this->generateUrl('acme_erp_home'));
                    }
                    else
                    {
                        $msj="Datos de usuario incorrecto...!";
                    }

                }
            }
            else
            {
                if(isset($_SESSION['SIS']))
                {
                   return $this->redirect($this->generateUrl('acme_erp_home')); 
                }
            }

        	return $this->render('AcmeErpBundle:Default:login.html.twig',array('users'=>$users,
                                                                                'mensaje'=>$msj,
                                                                                'view'=>$view));
        }

        public function homeAction()
        {

            //vars por defecto
            $view="home";

             //iniciar conexion a bd
            $conn = $this->get('database_connection');
            $m=new Model($conn);

            //iniciar sesion
            session_start();


            //action home
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                if($_POST['accion']=='cerrar')
                {

                    //eliminar sesion
                    session_unset($_SESSION['SIS']);

                    //header('Location: ../login');
                    //exit;

                    return $this->redirect($this->generateUrl('acme_erp_login'));
                }
            }
            else
            {
                if(isset($_SESSION['SIS']))
                {         
                    $perfil=$_SESSION['SIS']['perfil'];
                    $perfilDes=$conn->fetchColumn('select perfil_nombre from perfil where perfil_id=?',array($perfil),0);
                    $usuario=$_SESSION['SIS']['user'];
                }
                else
                {
                    //$baseURL = $this->getContainer()->getParameter('acme_erp_login'); 
                    //header('Location: ../login');
                    //header('Location '.$baseURL);
                    //exit;

                    return $this->redirect($this->generateUrl('acme_erp_login'));
                }
            }

            //inciar menu
            $menuList=$m->getMenu($perfil);

        	return $this->render('AcmeErpBundle:Default:home.html.twig',array('user'=>$usuario,
                                                                                'view'=>$view,
                                                                                'perfil'=>$perfilDes,
                                                                                'menu'=>$menuList));
        }

        public function permisoAction()
        {
            //vars por defecto
            $view='permiso';

            //iniciar conexion a bd
            $conn = $this->get('database_connection');
            $m=new Model($conn);

            //iniciar sesion
            session_start();

            //action home
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                if($_POST['accion']=='cerrar')
                {

                    //eliminar sesion
                    session_unset($_SESSION['SIS']);

                   //header('Location: ../login');
                   //exit;

                   return $this->redirect($this->generateUrl('acme_erp_login'));
                }
            }
            else
            {
                if(isset($_SESSION['SIS']))
                {         
                    $perfil=$_SESSION['SIS']['perfil'];
                    $perfilDes=$perfilDes=$conn->fetchColumn('select perfil_nombre from perfil where perfil_id=?',array($perfil),0);
                    $usuario=$_SESSION['SIS']['user'];
                }
                else
                {
                    //header('Location: ../login');
                    //exit;

                    return $this->redirect($this->generateUrl('acme_erp_login'));
                }
            }

            //get menu
            $menuList=$m->getMenu($perfil);

            //get entidad
            $entidad=$m->getEntidad();

            //get acceso
            $acceso=$m->getAcceso();

            //get tablero
            $tablero=$m->getTablero();

            return $this->render('AcmeErpBundle:Default:permiso.html.twig',array('user'=>$usuario,
                                                                                'view'=>$view,
                                                                                'perfil'=>$perfilDes,
                                                                                'menu'=>$menuList,
                                                                                'entidad'=>$entidad,
                                                                                'acceso'=>$acceso,
                                                                                'tablero'=>$tablero));
        }

        public function perfilAjaxAction()
        {
            //iniciar conexion bd
            $conn = $this->get('database_connection');
            $m=new Model($conn);
            

            //obtener perfiles
            $perfil=$m->getPerfilxEmp($_POST['empId']);

            $ajaxResponse = new Response($perfil);
            $ajaxResponse->headers->set('Content-Type', 'text/html; Charset=UTF-8');

            return $ajaxResponse;
        }

        public function tableroJsonAction()
        {
            //iniciar conexion bd
            $conn=$this->get('database_connection');
            $m=new Model($conn);

            //obtener tablero
            $tablero=$m->getTableroxPerf($_POST['perfId']);

            $jsonResponse=new Response(json_encode($tablero));
            $jsonResponse->headers->set('Content-Type','application/json;Charset=UTF-8');

            return $jsonResponse;
        }

}
