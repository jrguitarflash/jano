<?php

	namespace Acme\ErpBundle\Model;

	class Model
	{
		//CONSTRUCTOR Y ATRIBUTO

			protected $conn;

			public function __construct($conn)
			{

				$this->conn=$conn;
			}

		// MODULO SISTEMA

			public function getPerfilxEmp($emp)
			{
				$perfilList="";

				//obtener perfiles
				$perfil=$this->conn->fetchAll("select perfil_nombre as nombre,
													  perfil_id as id
													  from perfil where 
													  bestado=1 and 
													  empresa_id=?",array($emp));
				//concatenar perfil
				foreach($perfil as $data)
				{
					$perfilList.="<option value='".$data['id']."' >".$data['nombre']."</option>";
				}

				return $perfilList;
			}

			public function getEntidad()
			{
				//obtener entidad
				$entidad=$this->conn->fetchAll("select
												e.empresa_id as id,
												e.emp_nombre as empresa
												from empresa as e where e.bestado=1 and e.mi_empresa=1");

				return $entidad;		
			}

			public function getAcceso()
			{

				//acceso lista
				$accesoList="";

				//obtener perfil
				$acceso=$this->conn->fetchAll("select 
												m.menu_nombre as nombre,
												m.menu_id as id 
												from menu as m where 
												m.bestado=1 and
												m.menu_padre_id=0
												order by menu_posicion");
				//concatenar arbol de menu
		        foreach($acceso as $data)
		        {

	                $accesoList.="<li>
	                                <input  type='checkbox' >".$data['nombre']
	                                .$this->getSubAcceso($data['id']).
	                            "</li>";
	            }

	            return $accesoList;
			}

			public function getSubAcceso($menuId)
			{

				//acceso lista
				$accesoSubList="";

				//obtener perfil
				$acceso=$this->conn->fetchAll("select 
												m.menu_nombre as nombre,
												m.menu_id as id 
												from menu as m where 
												m.bestado=1 and
												m.menu_padre_id=?
												order by menu_posicion",array($menuId));
				//concatenar arbol de menu
		        foreach($acceso as $data)
		        {

	                $accesoSubList.="<li>
	                                <input  type='checkbox'  value='".$data['id']."' >".$data['nombre']
	                                .$this->getSubAcceso($data['id']).
	                            "</li>";
	            }

	            $accesoSubList="<ul>
	            					".$accesoSubList."
	            				</ul>";

	            return $accesoSubList;
			}

			public function getMenu($perfilId)
	    	{
		        //menu lista
		        $menuList="";

		        //iniciar conexion a bd
		        #$conn = $this->get('database_connection');
		        
		        //obtener menu padre 
		        $menu= $this->conn->fetchAll("select * from menu as m,
		        											menu_perfil as mf 
		        							  where 
		        							  m.bestado=1 and 
		        							  m.menu_padre_id=0 and
		        							  m.menu_id=mf.menu_id and
		        							  mf.perfil_id=?
		        							  order by menu_posicion",array($perfilId));


		        //concatenar arbol de menu
		        foreach($menu as $data)
		        {

	                $menuList.="<li>
	                                <a href=".$data['menu_url']." >".$data['menu_nombre']."</a>
	                                ".$this->getSubMenu($data['menu_padre_id'],$data['menu_id'],$perfilId)."
	                            </li>";      
		        }

		        return $menuList;
	    	}

	    	public function getSubMenu($menuPadre,$menuId,$perfilId)
	    	{
	    		//menu subList
	    		$menuSubList="";

	    		//obtener menu hijos
	    		$menu=$this->conn->fetchAll("select * from 
	    												menu as m,
	    												menu_perfil as mf 
	    									where 
	    									m.bestado=1 and 
	    									m.menu_padre_id=? and
	    									m.menu_id=mf.menu_id and
	    									mf.perfil_id=?
	    									order by menu_posicion",array($menuId,$perfilId));

	  			//iteramos submenus
	    		foreach($menu as $data)
				{
		    			$menuSubList.="<li>
		                                <a href=".$data['menu_url']." >".$data['menu_nombre']."</a>
		                                ".$this->getSubMenu($data['menu_padre_id'],$data['menu_id'],$perfilId)."
		                            </li>";
	    		}

	    		//iniciar y cerrar menus
	    		if($menuPadre==0)
		    	{
		    		$menuSubList="<ul class='menu-niv menu-tab' >
		    						".$menuSubList."
		    					</ul>";
	    		}
	    		else
	    		{
	    			$menuSubList="<ul class='menu-niv menu-sub' >
		    						".$menuSubList."
		    					</ul>";
	    		}

	    		return $menuSubList;
	    	}

	    	public function getTablero()
	    	{
	    		$tablero=$this->conn->fetchAll("select tablero_id as id,
	    											   tab_titulo as titulo from 
	    											   tablero");
	    		return $tablero;
	    	}

	    	public function getTableroxPerf($perf)
	    	{
	    		$tablero=$this->conn->fetchAll("select tablero_id from perfil_tablero where perfil_id=?",array($perf));

	    		return $tablero;
	    	}

	}