<?php


namespace App;

/**
 * @Annotation
 */
class RouteAnnotation {
	public $parent;
	public $title;
	public $slug;
    public $order = 999;

}