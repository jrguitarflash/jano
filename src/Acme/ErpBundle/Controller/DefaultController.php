<?php

namespace Acme\ErpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
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
                    session_start();
                    foreach($user as $data)
                    {
                        $_SESSION['SIS']['user']=$data['trab_usuario'];
                        $_SESSION['SIS']['clave']=$data['trab_clave'];
                        $_SESSION['SIS']['empresa']=$data['empresa_id'];
                        $_SESSION['SIS']['perfil']=$data['perfil_id'];
                    }
                    header('Location: ../home');
                    exit;
                }
                else
                {
                    $msj="Datos de usuario incorrecto...!";
                }

            }
        }

    	return $this->render('AcmeErpBundle:Default:login.html.twig',array('users'=>$users,'mensaje'=>$msj,'view'=>$view));
    }

    public function homeAction()
    {

        //vars por defecto
        $view="home";

         //iniciar conexion a bd
        $conn = $this->get('database_connection');

        //iniciar sesion
        session_start();

        if(isset($_SESSION['SIS']))
        {         

            $user=$_SESSION['SIS']['user'];
            $clave=$_SESSION['SIS']['clave'];
            $empresa=$_SESSION['SIS']['empresa'];
            $perfil=$_SESSION['SIS']['perfil'];
            $perfilDes=$conn->fetchColumn('select perfil_nombre from perfil where perfil_id=?',array($perfil),0);
        }
        else
        {
            header('Location: ../login');
            exit;
        }

        //action home
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if($_POST['accion']=='cerrar')
            {

                //eliminar sesion
                session_unset($_SESSION['SIS']);

                header('Location: ../login');
                exit;
            }
        }

    	return $this->render('AcmeErpBundle:Default:home.html.twig',array('user'=>$user,'view'=>$view,'perfil'=>$perfilDes));
    }

    public function permisoAction()
    {
        //vars por defecto
        $view='permiso';

        //iniciar conexion a bd
        $conn = $this->get('database_connection');

        //iniciar sesion
        session_start();

        if(isset($_SESSION['SIS']))
        {         

            $user=$_SESSION['SIS']['user'];
            $clave=$_SESSION['SIS']['clave'];
            $empresa=$_SESSION['SIS']['empresa'];
            $perfil=$_SESSION['SIS']['perfil'];
            $perfilDes="";
        }
        else
        {
            header('Location: ../login');
            exit;
        }

        //action home
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if($_POST['accion']=='cerrar')
            {

                //eliminar sesion
                session_unset($_SESSION['SIS']);

                header('Location: ../login');
                exit;
            }
        }

        return $this->render('AcmeErpBundle:Default:permiso.html.twig',array('user'=>$user,'view'=>$view,'perfil'=>$perfilDes));
    }

}
