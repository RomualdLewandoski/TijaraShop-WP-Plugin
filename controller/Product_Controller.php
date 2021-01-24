<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Session_Helper;
use App\Helper\WooCommerce;
use App\Model\Log_Model;
use Entity\Product;
use Entity\Log;
use Form\ProductType;
use App\RouteAnnotation;


class Product_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('install');
        $this->loadModel('cat');

        $this->loadModel("log");
        $this->loadHelper('wp');
        $this->loadHelper('form');
        $this->loadHelper('session');
        $this->loadHelper('url');

        //Chargement des styles
        $this->helper->wp->addStyle('bootstrap');
        $this->helper->wp->addStyle('TijaraShop');
        $this->helper->wp->addStyle('datatables');
        $this->helper->wp->addScript('jquery-3.4.1.min');
        $this->helper->wp->addScript('datatables');
        $this->helper->wp->addScript('bootstrap.bundle.min');
        //Ajout des styles
        $this->helper->wp->getStyle('bootstrap');
        $this->helper->wp->getStyle('TijaraShop');
        $this->helper->wp->getStyle('datatables');
        $this->helper->wp->getScript('jquery-3.4.1.min');
        $this->helper->wp->getScript('datatables');
        $this->helper->wp->getScript('bootstrap.bundle.min');

    }

    /**
     * @RouteAnnotation(parent="TijaraShop", title="Product", slug="product")
     */
    public function index()
    {
        $this->checkInstall();

        $em = $this->getManager()->getRepository(Product::class);

        $this->render('Product/index.html.twig', [
            'Products' => $em->all(),
        ]);
    }

    /**
     * @RouteAnnotation(parent="null", title="addProduct", slug="product/new")
     */
    public function new()
    {
        $Product = new Product();
        $em = $this->getManager()->getRepository(Product::class);
        if (isset($_POST['submit_image_selector']) && isset($_POST['image_attachment_id'])) :
            update_option('media_selector_attachment_id', absint($_POST['image_attachment_id']));
        endif;
        wp_enqueue_media();
        $form = $this->createForm(ProductType::class, $Product);

        $wooCommerce = (new WooCommerce())->getClient();

        $shippingClasses = $wooCommerce->get('products/shipping_classes');

        $arr = [];
        $arr["none"] = "Aucun";

        foreach ($shippingClasses as $shippingClass) {
            $arr[$shippingClasses->slug] = $shippingClass->name;
        }

        $form->add('livraison', "select", [
            'label' => "Classe de livraison",
            'select-label' => "---Choisir la class de livraison---",
            'choice' => $arr,
            'required' => false,
            'attr' => [
                'class' => "w-100"
            ]

        ]);

        $form->handleRequest($this->request());

        if ($form->isSubmitted() && $form->isValid()) {

            if ($em->save($Product)) {
                if ((new Log_Model())
                    ->log(null,
                        "Product",
                        "Create",
                        $Product->id,
                        null,
                        $Product
                    )) {
                    (new Session_Helper())
                        ->set_flashdata("success", "Product a bien été ajoutée");
                    $this->helper->url->redirect($this->getRoute('TijaraShop/product'));

                } else {
                    $em->delete($Product);
                    (new Session_Helper())
                        ->set_flashdata("error", "Erreur lors de la création du log, l'action a été annulée");
                }
            } else {
                (new Session_Helper())
                    ->set_flashdata("error", "Erreur lors de l'action, elle a été annulée");
            }
        }
        $this->render('Product/new.html.twig', [
            'form' => $form
        ]);

    }

    /**
     * @RouteAnnotation(parent="null", title="editProduct", slug="product/edit")
     */
    public function edit()
    {
        $this->checkInstall();
        $em = $this->getManager()->getRepository(Product::class);
        $request = $this->request();
        $id = $request->query->get('id');
        if ($id == null) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown id for this Product");
            $this->helper->url->redirect($this->getRoute('TijaraShop/product'));
        }
        $Product = $em->first(['id' => $id]);
        if ($Product === false) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown Product");
            $this->helper->url->redirect($this->getRoute('TijaraShop/product'));
        } else {
            $form = $this->createForm(ProductType::class, $Product);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $oldProduct = $em->first(['id' => $id]);
                if ($em->save($Product)) {
                    if ((new Log_Model())
                        ->log(null,
                            "Product",
                            "Edit",
                            $Product->id,
                            $oldProduct,
                            $Product
                        )) {
                        (new Session_Helper())
                            ->set_flashdata("success", "Product a bien été modifiée");
                    } else {
                        $em->save($oldProduct);
                        (new Session_Helper())
                            ->set_flashdata("error", "Erreur lors de la création du log, l'action a été annulée");
                    }
                } else {
                    (new Session_Helper())
                        ->set_flashdata("error", "Erreur lors de l'action, elle a été annulée");
                }
            }

            $this->render('Product/edit.html.twig', [
                'form' => $form,
            ]);

        }
    }

    /**
     * @RouteAnnotation(parent="null", title="readProduct", slug="product/read")
     */
    public function read()
    {
        $this->checkInstall();
        $em = $this->getManager()->getRepository(Product::class);
        $request = $this->request();
        $id = $request->query->get('id');
        if ($id == null) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown id for this Product");
            $this->helper->url->redirect($this->getRoute('TijaraShop/product'));
        }
        $Product = $em->first(['id' => $id]);
        if ($Product === false) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown Product");
            $this->helper->url->redirect($this->getRoute('TijaraShop/product'));
        } else {

            $this->render('Product/read.html.twig', [
                'Product' => $Product
            ]);

        }
    }


    /**
     * @RouteAnnotation(parent="null", title="deleteProduct", slug="product/delete")
     */
    public function delete()
    {
        $this->checkInstall();
        $em = $this->getManager()->getRepository(Product::class);
        $request = $this->request();
        $id = $request->query->get('id');
        if ($id == null) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown id for this Product");
            $this->helper->url->redirect($this->getRoute('TijaraShop/product'));
        }
        $Product = $em->first(['id' => $id]);
        if ($Product === false) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown Product");
            $this->helper->url->redirect($this->getRoute('TijaraShop/product'));
        } else {
            $oldProduct = $em->first(['id' => $id]);
            if ($em->delete($Product)) {
                if ((new Log_Model())
                    ->log(null,
                        "Product",
                        "Delete",
                        $oldProduct->id,
                        $oldProduct,
                        null
                    )) {
                    (new Session_Helper())
                        ->set_flashdata("success", "Product a bien été supprimé");
                } else {
                    $em->save($oldProduct);
                    (new Session_Helper())
                        ->set_flashdata("error", "Erreur lors de la création du log, l'action a été annulée");
                }
            } else {
                (new Session_Helper())
                    ->set_flashdata("error", "Erreur lors de l'action, elle a été annulée");
            }
            $this->helper->url->redirect($this->getRoute('TijaraShop/product'));
        }
    }

}