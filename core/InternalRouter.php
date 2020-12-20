<?php


namespace App;


use App\Controller\Cat_Controller;
use App\Helper\Wp_Helper;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use HaydenPierce\ClassFinder\ClassFinder;

class InternalRouter {
	public function loadInternalRoutes() {
		AnnotationRegistry::registerLoader( 'class_exists' );

		$classes  = ClassFinder::getClassesInNamespace( 'App\Controller' );
		$wpHelper = new Wp_Helper();
		$wpHelper->addMenu( "TijaraShop", "manage_options", "TijaraShop", "Admin", "index", "", 50.5 );
		$wpHelper->addSubMenu("TijaraShop", "Logs", "manage_options", "TijaraShop/logs","Admin", "adminLogs");

		foreach ( $classes as $class ) {
			$reflectionClass = new \ReflectionClass( $class );

			$methods = get_class_methods( $class );
			foreach ( $methods as $method ) {
				$property = $reflectionClass->getMethod( $method );

				$reader       = new AnnotationReader();
				$myAnnotation = $reader->getMethodAnnotation(
					$property,
					RouteAnnotation::class
				);
				if ( $myAnnotation != null ) {
					$str = str_replace( "App\Controller\\", "", $class );
					$str = str_replace( "_Controller", "", $str );
					//echo "$myAnnotation->parent $myAnnotation->title $myAnnotation->slug $str $method";
					$wpHelper->addSubMenu( $myAnnotation->parent,
						$myAnnotation->title,
						"manage_options",
						"TijaraShop/" . $myAnnotation->slug,
						$str,
						$method
					);
				}
			}
		}


		//r( $myAnnotation );
		//r( $reflectionClass->getMethods() );

	}
}