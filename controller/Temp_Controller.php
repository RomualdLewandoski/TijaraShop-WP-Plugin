<?php


namespace App\Controller;


use App\Components\CheckType;
use App\Components\ColorType;
use App\Components\DateTimeType;
use App\Components\EmailType;
use App\Components\FormComponent;
use App\Components\NumberType;
use App\Components\RadioType;
use App\Components\StringType;
use App\Controller;
use App\Helper\WooCommerce;
use App\RouteAnnotation;
use Form\ProductType;
use HtmlObject\Element;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorSVG;

class Temp_Controller extends Controller
{
    public function __construct()
    {

    }

    /**
     * @RouteAnnotation(parent="TijaraShop", title="Temp_Controller", slug="Temp_Controller")
     */
    public function index()
    {

        /*$wooCommerce = (new WooCommerce())->getClient();

        //r($wooCommerce->get('products/shipping_classes'));
        $generator = new BarcodeGeneratorSVG();
        echo "<br><br>";
        echo $generator->getBarcode('T-123456', $generator::TYPE_CODE_39);


        echo "<br><br>";
        echo "<input type='text'>";
        echo "<br><br>Should output <b>T-123456</b>";

        */


       $form = (new FormComponent(null))
           ->add('test', StringType::class, [
               'label'=>"test",
               'hasLabel'=>true,
               'value' => "Coucou je suis une valeur par defaut",
               'attr'=>[
                    'placeholder'=>"Demo"
               ]
           ])
           ->add('test2', CheckType::class, [
               'hasLabel'=>true,
               'required'=>false,
               'mapped' => false,
               'value' => true,
               'attr'=>[
                   'placeholder'=>"Demo2"
               ]
           ])
       ;


       echo $form->render();


       //r($wooCommerce->get('products/shipping_classes'));




    }

}