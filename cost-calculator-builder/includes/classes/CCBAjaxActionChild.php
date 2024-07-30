<?php

namespace cBuilder\Classes;

use cBuilder\Classes\CCBAjaxAction;
use cBuilder\Classes\Database\Orders;
use cBuilder\Classes\CCBEmbedCalculator;


class CCBAjaxActionChild extends CCBAjaxAction {

	public static function init() {
		self::addAction( 'create_cc_order', array( CCBOrderControllerChild::class, 'create' ), true );
		self::addAction( 'create_cc_order', array( CCBOrderControllerChild::class, 'create' ) );
	}
}

CCBAjaxActionChild::init();
