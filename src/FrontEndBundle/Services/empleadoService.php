<?php

namespace FrontEndBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class empleadoService{

	protected $datos;

	public function __construct(Container $c){

		
		$this->c = $c;

	}

	public function getDatos(){

		$emr = $this->c->get('doctrine')->getEntityManager();
		$conexion = $emr->getConnection();
		$sql = "
				SELECT *

				FROM empleado

				WHERE id

				";

		$resultado = $conexion->executeQuery($sql)->fetchAll();


     	$this->datos["empleado"] = $resultado;


		return $this->datos;
	}

public function getTwig(){

		
		return "FrontEndBundle:Default:empleado.html.twig";
	}


}