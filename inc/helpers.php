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

function getValueAndSlideValueByLabel( $array, $label ) {
	foreach ( $array as $item ) {
		if ( isset( $item['label'] ) && $item['label'] === $label ) {
			$value      = $item['value'] ?? null;
			$slideValue = $item['slideValue'] ?? null;

			return [ 'value' => $value, 'slideValue' => $slideValue ];
		}
	}

	return null; // Return null if the label is not found
}