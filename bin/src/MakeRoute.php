<?php


namespace Console;


use KHerGe\File\File;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class MakeRoute extends Command {
	public function configure() {
		$this->setName( "make:route" )
		     ->setDescription( "Create a new route" )
		     ->setHelp( "This command allows you to create a new route easily" );
	}

	public function execute( InputInterface $input, OutputInterface $output ) {
		$outputStyle = new OutputFormatterStyle( 'red', '', [ 'bold', 'blink' ] );
		$output->getFormatter()->setStyle( 'fire', $outputStyle );
		$helper = $this->getHelper( 'question' );

		$configFolder = __DIR__ . "/../../config/";
		$routeFile    = new File( $configFolder . "routes.json", "r+" );
		$str          = $routeFile->read();
		$config       = json_decode( $str );
		$menuArr      = [ "null" ];
		foreach ( $config->menu as $menu ) {
			array_push( $menuArr, $menu->name );
		}

		$question = new ChoiceQuestion(
			'<info>Please select the type of the route (defaults to submenu): </info>',
			[ 'menu', 'submenu' ],
			1
		);
		$question->setErrorMessage( '<fire>Type %s is invalid</fire>' );
		$type = $helper->ask( $input, $output, $question );
		$output->writeln( "<info>La nouvelle route serra de type :</info><comment> " . $type . "</comment>" );

		$questionName = new Question( '<info>Please select the name of the new route: </info>' );
		$questionName->setValidator( function ( $answer ) {
			if ( ! is_string( $answer ) || $answer == "" ) {
				throw new \RuntimeException(
					'The name of the route can\'t be empty'
				);
			}

			return $answer;
		} );
		$name = utf8_encode( $helper->ask( $input, $output, $questionName ) );

		$output->writeln( "<info>Le nom de la nouvelle route serra :</info><comment> " . $name . "</comment>" );

		$questionPerms = new ChoiceQuestion(
			'<info>Please select the required permission to access this route (defaults to admin): </info>',
			[ 'admin', 'editeur' ],
			0
		);
		$questionPerms->setErrorMessage( "<fire>Permission %s is invalid</fire>" );
		$perms = $helper->ask( $input, $output, $questionPerms ) == "admin" ? "manage_options" : "moderate_comments";
		$output->writeln( "<info>La permission requise serra :</info><comment> " . $perms . "</comment>" );

		$questionSlug = new Question( "<info>Please type the slug of the route :</info>" );
		$questionSlug->setValidator( function ( $answer ) {
			if ( ! is_string( $answer ) || $answer == "" ) {
				throw new \RuntimeException(
					'The name of the slug can\'t be empty'
				);
			}

			return $answer;
		} );
		$slug = $helper->ask( $input, $output, $questionSlug );
		$output->writeln( "<info>Le slug de la nouvelle route serra :</info><comment> " . $slug . "</comment>" );

		$questionController = new Question( "<info>Please type the name of the Controller of the route :</info>" );
		$questionController->setValidator( function ( $answer ) {
			if ( ! is_string( $answer ) || $answer == "" ) {
				throw new \RuntimeException(
					'The name of the controller can\'t be empty'
				);
			}

			return $answer;
		} );
		$controller = $helper->ask( $input, $output, $questionController );
		$output->writeln( "<info>Le controlleur de la nouvelle route serra :</info><comment> " . $controller . "</comment>" );

		$questionMethod = new Question( "<info>Please type the name of the function of the route :</info>" );
		$questionMethod->setValidator( function ( $answer ) {
			if ( ! is_string( $answer ) || $answer == "" ) {
				throw new \RuntimeException(
					'The name of the method can\'t be empty'
				);
			}

			return $answer;
		} );
		$method = $helper->ask( $input, $output, $questionMethod );
		$output->writeln( "<info>La fonction de la nouvelle route serra :</info><comment> " . $method . "</comment>" );

		if ( $type == "menu" ) {
			$questionIcon = new Question( "<info>Please type the name of the icon of the route :</info>" );
			$icon         = $helper->ask( $input, $output, $questionIcon );
			$output->writeln( "<info>L'icone de la nouvelle route serra :</info><comment> " . $icon . "</comment>" );
			if ( $icon == null ) {
				$icon = "";
			}

			$questionPosition = new Question( "<info>Please type the position of the route :</info>", 50.6 );
			$position         = $helper->ask( $input, $output, $questionPosition );
			$output->writeln( "<info>La position de la nouvelle route serra :</info><comment> " . $position . "</comment>" );
			$position = doubleval( $position );

			$obj             = new \stdClass();
			$obj->name       = $name;
			$obj->perms      = $perms;
			$obj->slug       = $slug;
			$obj->controller = $controller;
			$obj->method     = $method;
			$obj->icon       = $icon;
			$obj->position   = $position;

			array_push( $config->menu, $obj );
			$routeFile->seek( 0 );
			$routeFile->write( json_encode( $config, JSON_PRETTY_PRINT ) );

		} else {
			$questionParent = new ChoiceQuestion(
				'<info>Please select the type of the route (defaults to submenu): </info>',
				$menuArr,
				0
			);
			$questionParent->setErrorMessage( '<fire>Parent %s is invalid</fire>' );
			$parent = $helper->ask( $input, $output, $questionParent );
			$output->writeln( "<info>Le parent du sous menu serra :</info><comment> " . $parent . "</comment>" );


			$obj             = new \stdClass();
			$obj->parent     = $parent;
			$obj->name       = $name;
			$obj->perms      = $perms;
			$obj->slug       = $slug;
			$obj->controller = $controller;
			$obj->method     = $method;


			array_push( $config->subMenu, $obj );
			$routeFile->seek( 0 );
			$routeFile->write( json_encode( $config, JSON_PRETTY_PRINT ) );

		}

		$routeModelFile      = new File( $configFolder . "RouteModel.txt", 'r' );
		$controllerRouteFile = new File( $configFolder . "ControllerRoute.php", 'w' );

		$routeModelStr = $routeModelFile->read();
		$menuStr       = "";
		$menuSub       = "";
		foreach ( $config->menu as $menu ) {
			$menuStr .= '$wpHelper->addMenu("' . $menu->name . '", "' . $menu->perms . '", "' . $menu->slug . '", "' . $menu->controller . '", "' . $menu->method . '", "' . $menu->icon . '", ' . $menu->position . ' );' . "\n";
		}
		$routeModelStr = str_replace( "%Menu%", $menuStr, $routeModelStr );
		foreach ( $config->subMenu as $menu ) {
			$menuSub .= '$wpHelper->addSubMenu("' . $menu->parent . '", "' . $menu->name . '", "' . $menu->perms . '", "' . $menu->slug . '","' . $menu->controller . '", "' . $menu->method . '");' . "\n";
		}
		$routeModelStr = str_replace( "%subMenu%", $menuSub, $routeModelStr );

		$controllerRouteFile->write( $routeModelStr );

		return 1;
	}
}