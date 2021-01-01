<?php

namespace App;

use App\ControllerRoute;
use App\Migration\Migration;
use stdClass;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


class System {


	public $model;
	public $controller;
	public $helper;
	public $pluginFolder;

	protected static $_instance = null;

	public function __construct( $pluginFolder ) {
		session_start();

		define( 'wpPluginFolder', $pluginFolder );
		$this->pluginFolder = $pluginFolder;

		//require_once $pluginFolder . '/core/Model.php';
		//require_once $pluginFolder . '/core/Controller.php';
		//require_once $pluginFolder . '/core/Helper.php';
		require_once $pluginFolder . "/config/ControllerRoute.php";

		new Model();
		new Controller();
		new Helper();


		if ( ! isset( $this->model ) ) {
			$this->model = new stdClass();
		}
		if ( ! isset( $this->controller ) ) {
			$this->controller = new stdClass();
		}
		if ( ! isset( $this->helper ) ) {
			$this->helper = new stdClass();
		}


		$this->loadHelper( 'wp' );
		add_action( 'admin_menu', array( $this, 'createAdminMenu' ) );
		include_once wpPluginFolder . 'config/route.php';
		require_once wpPluginFolder . 'Routes/route.php';
		$router = new Route();
		$router->loadRoutes( $route );
		require_once wpPluginFolder . 'migration/Migration.php';
		$migration = new Migration();
		$migration->doMigration();



	}

	/**
	 * @return Request
	 */
	public function request() {
		return Request::createFromGlobals();;
	}

	public function install() {
		$this->loadController( 'install' );
		$this->controller->install->install();
	}

	public function createAdminMenu() {
		/*$route = new ControllerRoute();
		$route->generateRoute();*/
		(new InternalRouter())->loadInternalRoutes();

	}

	public function loadController( $controller ) {
		$realController = ucfirst( $controller ) . '_Controller';
		require_once wpPluginFolder . '/controller/' . $realController . '.php';
		if ( ! isset( $this->controller ) ) {
			$this->controller = new stdClass();
		}

		$finalController = "\App\Controller\\" . $realController;


		$this->controller->$controller = new $finalController();

		return $this->controller->$controller;
	}

	public function loadModel( $model ) {
		$realModel = ucfirst( $model ) . '_Model';
		require_once wpPluginFolder . 'model/' . $realModel . '.php';
		if ( ! isset( $this->model ) ) {
			$this->model = new stdClass();
		}
		$finalModel = "\App\Model\\" . $realModel;


		$this->model->$model = new $finalModel();
	}


	public function getRoute( $name ) {
		return $this->getPage( $name );
	}

	function getPage( $menu_slug ) {
		global $_parent_pages;

		if ( isset( $_parent_pages[ $menu_slug ] ) ) {
			$url = admin_url( 'admin.php?page=' . $menu_slug );
		} else {
			$url = '';
		}

		$url = esc_url( $url );


		return $url;
	}

	public function render( $view, $data = [] ) {
		$loader = new FilesystemLoader( __DIR__ . '/../template' );
		$twig   = new Environment( $loader );
		$twig->addExtension( new TwigUrlExtention() );
		$data['error']   = $this->helper->session->flashdata( "error" );
		$data['success'] = $this->helper->session->flashdata( "success" );
		$data['pageUrl'] = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


		echo $twig->render( $view, $data );


	}

	public function loadHelper( $helper ) {
		$realHelper = ucfirst( $helper ) . '_Helper';
		require_once wpPluginFolder . 'helper/' . $realHelper . '.php';
		if ( ! isset( $this->helper ) ) {
			$this->helper = new stdClass();
		}
		$finalHelper = "\App\Helper\\" . $realHelper;

		$this->helper->$helper = new $finalHelper();
	}

	public static function instance( $pluginFolder ) {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self( $pluginFolder );
		}

		return self::$_instance;
	}

	public function getManager() {
		return ( new EntityManager() )->getManager();
	}
}