<?php

function getValueByTitle( $array, $title ) {
	$cleanTitle = preg_replace( '/^\*+\s*|\s*\*+$/', '', $title );
	foreach ( $array as $item ) {
		if ( preg_replace( '/^\*+\s*|\s*\*+$/', '', $item['title'] ) === $cleanTitle ) {
			return $item['total'];
		}
	}

	return null;
}

function getValueByName( $array, $name ) {
	foreach ( $array as $item ) {
		if ( $item['name'] === $name ) {
			return $item['value'];
		}
	}

	return null; // Return null if the name is not found
}

function getValueAndSlideValueByLabel( $array, $label, $key = 'slideValue' ) {
	foreach ( $array as $item ) {
		if ( isset( $item['label'] ) && $item['label'] === $label ) {
			$specificValue = $item[ $key ] ?? 'null';

			return $specificValue;
		}
	}

	return null; // Return null if the label is not found
}

function dsp($totals, $other_totals, $fields){
		?>
	total: <pre><?php // print_r($totals ) ?> </pre>

	other total:  <pre><?php  print_r($other_totals  ) ?> </pre>

		$fields:  <pre><?php  print_r(	$fields  ) ?> </pre>	<hr />
<?php
}
