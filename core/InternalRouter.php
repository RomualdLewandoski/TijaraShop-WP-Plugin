<?php


namespace App;


use App\Controller\Cat_Controller;
use App\Helper\Wp_Helper;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use HaydenPierce\ClassFinder\ClassFinder;

class InternalRouter
{
    public function loadInternalRoutes()
    {
        AnnotationRegistry::registerLoader('class_exists');

        $classes = ClassFinder::getClassesInNamespace('App\Controller');
        $wpHelper = new Wp_Helper();
        $wpHelper->addMenu("TijaraShop", "manage_options", "TijaraShop", "Main", "index", "", 50.5);

        $arr = [];
        foreach ($classes as $class) {
            $reflectionClass = new \ReflectionClass($class);

            $methods = get_class_methods($class);
            foreach ($methods as $method) {
                $property = $reflectionClass->getMethod($method);

                $reader = new AnnotationReader();
                $myAnnotation = $reader->getMethodAnnotation(
                    $property,
                    RouteAnnotation::class
                );
                if ($myAnnotation != null) {
                    $str = str_replace("App\Controller\\", "", $class);
                    $str = str_replace("_Controller", "", $str);
                    //echo "$myAnnotation->parent $myAnnotation->title $myAnnotation->slug $str $method";
                    $temp = new \stdClass();
                    $temp->parent = $myAnnotation->parent;
                    $temp->title = $myAnnotation->title;
                    $temp->slug = $myAnnotation->slug;
                    $temp->str = $str;
                    $temp->method = $method;
                    $temp->order = $myAnnotation->order;
                    $arr[] = $temp;

                }
            }
        }


        usort($arr, 'self::cmp_obj');

        foreach ($arr as $item) {
            $wpHelper->addSubMenu($item->parent,
                $item->title,
                "manage_options",
                "TijaraShop/" . $item->slug,
                $item->str,
                $item->method
            );
        }

        //r( $myAnnotation );
        //r( $reflectionClass->getMethods() );

    }

    private static function cmp_obj($a, $b)
    {
        $al = strtolower($a->order);
        $bl = strtolower($b->order);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }

}