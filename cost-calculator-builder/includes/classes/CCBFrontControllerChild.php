<?php

namespace cBuilder\Classes;

use cBuilder\Classes\Appearance\CCBAppearanceHelper;
use cBuilder\Helpers\CCBFieldsHelper;
use function Clue\StreamFilter\fun;
use cBuilder\Classes\CCBFrontController;

$template_variables = array();

class CCBFrontControllerChild extends CCBFrontController {
	public static function init() {
		add_action(
			'wp_enqueue_scripts',
			function () {
				wp_enqueue_script( 'jquery' );
			}
		);
		add_shortcode( 'stm-calc', array( self::class, 'render_calculator' ) );
		add_action('init', array( self::class, 'override_calculator_handler' ) );

	}

	public static function override_calculator_handler() {
			wp_enqueue_script( 'calc-builder-main-js', CALC_URL_CHILD . '/assets/js/bundle.js', array( 'cbb-sticky-sidebar-js' ), time(), true );
	}

}


CCBFrontControllerChild::init();