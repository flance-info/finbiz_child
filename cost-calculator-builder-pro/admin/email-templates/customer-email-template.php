<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="x-apple-disable-message-reformatting">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="telephone=no" name="format-detection">
	<title>Order</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			text-indent: 0;
		}

		.s1 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 32px; /* 21px * 1.5 */
		}

		p {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11px; /* 7px * 1.5 */
			margin: 0px;
		}

		.s2 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11px; /* 7px * 1.5 */
		}

		a {
			color: #467785;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: underline;
			font-size: 11px; /* 7px * 1.5 */
		}

		.s3 {
			color: #467785;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11px; /* 7px * 1.5 */
		}

		.s4 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: italic;
			font-weight: normal;
			text-decoration: none;
			font-size: 8px; /* 5px * 1.5 */
		}

		.s5 {
			color: #F00;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 12px; /* 8px * 1.5 */
		}

		.s7 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11px; /* 7px * 1.5 */
		}

		.s8 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: italic;
			font-weight: normal;
			text-decoration: none;
			font-size: 11px; /* 7px * 1.5 */
		}

		.s9 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: italic;
			font-weight: normal;
			text-decoration: none;
			font-size: 8px; /* 5px * 1.5 */
		}

		.s10 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11px; /* 7px * 1.5 */
		}

		.s11 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11px; /* 7px * 1.5 */
		}

		.s12 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 8px; /* 5px * 1.5 */
		}

		.s13 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 13.5px; /* 9px * 1.5 */
		}

		.s14 {
			color: black;
			font-family: "Century Gothic", sans-serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11px; /* 7px * 1.5 */
		}

		table, tbody {
			vertical-align: top;
			overflow: visible;
		}

		.sth_left {
			padding-top: 1px;
			padding-left: 1px;
			text-indent: 0px;
			text-align: left;
		}

		.sth_right {
			padding-top: 1px;
			padding-right: 12px;
			text-indent: 0px;
			text-align: right;
		}

		.stl {
			text-indent: 0px;
			text-align: left;
		}

		.stb {
			border-bottom-style: dotted;
			border-bottom-width: 1px;
			color: #000000;
		}

		.stbt {
			border-top-width: 1px
		}

		.stbtl {
			padding-top: 1px;
			padding-left: 17px;
			text-indent: 0px;
			text-align: left;
		}

		.stbot {
			border-bottom-style: solid;
			border-bottom-width: 1px
		}

		.stbold {
			font-weight: bold;
		}

		.stn {
			font-weight: normal
		}


		.cont {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
		}

		.col {
			margin-bottom: 20px;
		}

		.c4 {
			flex: 1;
		}

		.logo-col {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.logo-col img {
			max-width: 100px;
			height: auto;
		}

		.comp-name {
			margin-top: 10px;
		}

		.content-col {
			max-width: 600px;
		}

		.details {
			display: flex;
			justify-content: space-between;
			margin: 20px 0;
		}

		.details p {
			margin: 0;
		}


		.cont {
			flex-direction: row;
			justify-content: space-between;
			text-align: center;
		}

		.logo-col {
			flex: 1;
		}

		.content-col {
			flex: 3;
			max-width: 100%;
		}

		.details p {
			margin-right: 20px;
		}

		.cn {
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 20px;
			text-align: left;
		}

		.cl {
			width: 100%;
			margin-bottom: 20px;
		}


		.cn {
			flex-direction: row;
			justify-content: space-between;
		}

		.cl {
			width: 45%;
		}

		a {
			color: #007bff;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

	</style>
</head>

<body width="100%" class="body">
<div class="cont">
	<div class="col logo-col">

		<?php
		if ( ! empty( $email_settings['logo'] ) ) {
			$header_logo = '<div class="header__logo ' . esc_attr( $email_settings['logo_position'] ) . '">
					<img style="' . apply_filters( 'ccb_email_logo_style', $calc_id ) . '" src="' . esc_url( $email_settings['logo'] ) . '" alt="Email Logo">
				</div>';
			echo wp_kses_post( apply_filters( 'ccb_email_logo_html', $header_logo, $calc_id ) );
		}
		?>
	</div>
	<div class="col content-col">
		<h2>OFFERT</h2>
		<div class="details">
			<?php if ( ! empty( getValueByName( $send_fields, 'staffname' ) ) ): ?>
				<p><strong>Utförd av:</strong> Anställd: <?php echo getValueByName( $send_fields, 'staffname' ) ?></p>
			<?php else : ?>
				<p><strong>Utförd av:</strong> <?php echo getValueByName( $send_fields, 'name' ) ?>  <?php echo getValueByName( $send_fields, 'lastname' ) ?> </p>
			<?php endif ?>
			<p><strong>Datum:</strong> <?php echo date( 'F j, Y' ); ?></p>
			<p><strong>Offertnummer:</strong> <?php if ( ! empty( $order_id ) ) {
					echo esc_html( $order_id );
				} ?></p>
		</div>
		<p>
			Detta dokument utgör en offert för de specificerade tjänster och behov som anges nedan,
			Detaljspecifikation. Om behov av ytterligare tjänster tillkommer vid ett senare tillfälle,
			eller om behovet av de angivna tjänsterna förändras,
			kan priset justeras i enlighet med dessa ändringar.</p>
	</div>
	<div class="col c4"></div>
</div>

<div class="cont">
	<div class="col c4"></div>
	<div class="cn content-col">
		<div class="cl">
			<p><strong>KUND (Uppdragsgivare)</strong></p>
			<p>Företag: <?php echo getValueByName( $send_fields, 'companyname' ) ?><br>
				Org.nr: <?php echo getValueByName( $send_fields, 'orgnumber' ) ?><br>
				Kontakt person: <?php echo getValueByName( $send_fields, 'name' ) ?>  <?php echo getValueByName( $send_fields, 'lastname' ) ?><br>
				Telefon: <?php echo getValueByName( $send_fields, 'phone' ) ?><br>
				E-post: <a href="mailto: <?php echo getValueByName( $send_fields, 'email' ) ?>"> <?php echo getValueByName( $send_fields, 'email' ) ?></a></p>
		</div>
		<div class="cl">
			<p><strong>Leverantör (Uppdragstagare)</strong></p>
			<p>Företag: BokföringsKompaniet Sverige AB<br>
				Org.nummer: 559475-9366<br>
				Kontakt person: Johan Ekman<br>
				Telefon: 010 280 48 90<br>
				E-post: <a href="mailto:support@bokforingskompaniet.se">support@bokforingskompaniet.se</a></p>
		</div>
	</div>
	<div class="col c4"></div>
</div>

<p style="text-indent: 0px;text-align: left;"><br/></p>
<p class="s4" style="padding-bottom: 1px;padding-left: 1px;text-indent: 0px;text-align: left;">(Exklusive moms)</p>
<div class="textbox" style="border:1px solid #000000;display:block;left:0px;min-height:14px;top:0px;width:auto;"><p style="text-indent: 0px;text-align: center;">
	<span style="color: black; font-family:'Century Gothic', sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10px;">
	PROGNOSTISERAD MÅNATLIG KOSTNAD:</span>
	</p>
</div>
<div class="textbox" style="background:#DAF2CF;border:1px solid #000000;display:block;left:13px;min-height:16px;top:0px;width:auto;">
	<p class="s13 stbold" style="padding-top: 1px;text-indent: 0px;text-align: center;"><?php echo getValueByTitle( $other_totals, 'PROGNOSTISERAD MÅNADS KOSTNAD: (Inklusive Årsavslutet)' ); ?> SEK</p></div>

<p style="padding-left: 6px;text-indent: 0px;text-align: left;"/>
<p style="text-indent: 0px;text-align: left;"><br/></p>
<p class="s5 stb" style="padding-bottom: 1px;padding-left: 1px;text-indent: 0px;text-align: center;">*<span style="color: #000;">PRISPLANER</span></p>
<table style="border-collapse:collapse;margin-left:8px; width: 100%;" cellspacing="0">
	<tr style="height:12px">
		<td colspan="4" class="stbt">
			<p class="s7 stbold">Vid val av rörligt pris:</p>
			<p class="s8">Fakturering sker endast för de tjänster och den omfattning</p>
			<p class="s8" style="padding-left: 1px;text-indent: 0px;text-align: left;">som faktiskt utförs under den aktuella månaden.</p>
		</td>
		<td colspan="2" class="stbt"><p class="s7 stbold">Vid val av fast pris:</p>
			<p class="s8">Låses det månatliga snittet, ovan, i 12 månader.</p></td>
	</tr>

	<tr style="height:13px;border:solid 2px #000">
		<td colspan="6" style="width:auto; " class="stbot">
			<p class="s7" style="text-indent: 0px;text-align: center;">DETALJSPECIFIKATION</p>
		</td>
	</tr>
	<tr style="height:23px">
		<td colspan="6" style="border-top-style:solid;border-top-width:1px"><p style="text-indent: 0px;text-align: left;"><br/></p>
			<p class="s9" style="padding-left: 1px;text-indent: 0px;text-align: left;">(Exklusive moms)</p></td>

	</tr>
</table>

<table style="border-collapse:collapse;margin-left:8px;  width: 100%;" cellspacing="0">
	<tr style="height:12px">
		<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold">Tjänst </p></td>
		<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold">Innehåll per enhet</p></td>
		<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold">Enhet </p></td>
		<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"> Enhetspris </p></td>
		<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold">Antal enheter</p></td>
		<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold">Månadskostnad*</p></td>
		<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold">Årskostnad**</p></td>
	</tr>

	<tr style="height:12px">
		<td style="width:20%"><p class="s8 sth_left"></p></td>
		<td style="width:20%"><p class="s8 sth_left stl">(Upp till)</p></td>
		<td style="width:17.5%"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%"><p class="s8 sth_right "> (SEK) </p></td>
		<td style="width:17.5%"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%"><p class="s8 sth_right"></p></td>
		<td style="width:7.5%"><p style=""><br/></p></td>
	</tr>
	<!-- MÅNADSVIS  !-->
	<manadsvis>
		<tr style="height:12px" class="stbot">
			<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold">MÅNADSVIS </p></td>
			<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
		</tr>
		<!-- REDOVISNING !-->
		<tbody>
		<tr style="height:12px">
			<td style="width:20%" class="stb"><p class="s7 sth_left stbold">REDOVISNING </p></td>
			<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, 'REDOVISNING' ); ?> <span class="s8 stn"></span></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, 'REDOVISNING (Annual)' ); ?> <span class="s8 stn">SEK</span></p></td>

		</tr>

		<?php $field_value = getValueAndSlideValueByLabel( $fields, 'Löpande Bokföring', 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl">Löpande Bokföring </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">15 Verifikat (affärshändelser)</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Löpande Bokföring' ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo $fv = getValueAndSlideValueByLabel( $fields, 'Löpande Bokföring', 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo $fv * 12; ?></p></td>
			</tr>
		<?php endif; ?>

		<?php $field_name = 'SKV: Momsdeklaration (Månadsvis)' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' );; ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<?php endif; ?>

		<?php $field_name = 'SKV: Momsdeklaration (Kvartalsvis)' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<?php endif; ?>
		<?php $field_name = 'SKV: Momsdeklaration (Årsvis)' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<?php endif; ?>
		<?php $field_name = 'SKV: Punktskattedeklaration' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl">SKV: Punktskattedeklaration </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right "> 250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'SKV: Punktskattedeklaration' ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'SKV: Punktskattedeklaration', 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, 'SKV: Punktskattedeklaration (Annual)' ); ?></p></td>
			</tr>
		<?php endif; ?>


		<?php $field_name = 'Rapporter & Uppföljning' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl">Rapporter &amp; Uppföljning </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right "> 250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Rapporter & Uppföljning' ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Rapporter & Uppföljning', 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, 'Rapporter & Uppföljning (Annual)' ); ?></p></td>
			</tr>
		<?php endif; ?>
		</tbody>
		<!-- anstallte !-->
		<tbody>
		<tr style="height:12px">
			<td style="width:20%" class="stb"><p class="s7 sth_left stbold">ANSTÄLLDA </p></td>
			<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, 'ANSTÄLLDA' ); ?> <span class="s8 stn"></span></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, 'ANSTÄLLDA (Annual)' ); ?> <span class="s8 stn">SEK</span></p></td>

		</tr>
		<?php $field_name = 'Lönehantering' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl">Lönehantering </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">2 Anställda</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Lönehantering' ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Lönehantering', 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, 'Lönehantering (Annual)' ); ?></p></td>
			</tr>
		<?php endif; ?>

		<?php $field_name = 'Utlägg & Förmåner' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl">Utlägg & Förmåner </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">4 Utlägg</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right "> 250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Utlägg & Förmåner' ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Utlägg & Förmåner', 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, 'Utlägg & Förmåner (Annual)' ); ?></p></td>
			</tr>
		<?php endif; ?>

		<?php $field_name = 'Hantering: Tjänstepension' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">2 Anställda</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<?php endif; ?>

		<?php $field_name = 'SKV: Arbetsgivardeklaration' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl">SKV: Arbetsgivardeklaration </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">2 Anställda</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'SKV: Arbetsgivardeklaration' ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'SKV: Arbetsgivardeklaration', 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, 'SKV: Arbetsgivardeklaration' ); ?></p></td>
			</tr>
		<?php endif; ?>
		</tbody>
		<!-- Bank -->
		<tbody>
		<tr style="height:12px">
			<?php $field_name = 'BANK' ?>
			<td style="width:20%" class="stb"><p class="s7 sth_left stbold"><?php echo $field_name ?></p></td>
			<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn"></span></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn">SEK</span></p></td>

		</tr>
		<?php $field_name = 'Utbetalningar & Avstämningar' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">5 Utbetalningar</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<?php endif; ?>
		</tbody>
		<!-- IMPORT & EXPORT (Försäljning Utomlands) !-->
		<tbody>
		<tr style="height:12px">
			<td style="width:20%" class="stb"><p class="s7 sth_left stbold">IMPORT & EXPORT (Försäljning Utomlands) </p></td>
			<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, 'IMPORT & EXPORT (Försäljning Utomlands)' ); ?> <span class="s8 stn"></span></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, 'IMPORT & EXPORT (Försäljning Utomlands) (Annual)' ); ?> <span class="s8 stn">SEK</span></p></td>

		</tr>
		<?php $field_name = 'Tulldeklaration' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl">Tulldeklaration </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Tulldeklaration' ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'Tulldeklaration', 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, 'Tulldeklaration (Annual)' ); ?></p></td>
			</tr>
		<?php endif; ?>
		<?php $field_name = 'SKV: Periodiskavstämning' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl">SKV: Periodiskavstämning </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right "> 250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'SKV: Periodiskavstämning' ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, 'SKV: Periodiskavstämning', 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, 'SKV: Periodiskavstämning' ); ?></p></td>
			</tr>
		<?php endif; ?>
		</tbody>
		<!-- LAGERHÅLLNING !-->

		<tbody>
		<?php $field_name = 'LAGERHÅLLNING'; ?>
		<tr style="height:12px">
			<td style="width:20%" class="stb"><p class="s7 sth_left stbold"><?php echo $field_name ?> </p></td>
			<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn"></span></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn">SEK</span></p></td>
		</tr>

		<tr style="height:12px">
			<?php $field_name = 'Lagersaldon' ?>
			<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
			<td style="width:20%" class="stbt"><p class="s7 sth_left stl"></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php //echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
			<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php // echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
			<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php //echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
		</tr>
		</tbody>
		<!-- KUNDFAKTURERING -->
		<tbody>
		<tr style="height:12px">
			<?php $field_name = 'KUNDFAKTURERING' ?>
			<td style="width:20%" class="stb"><p class="s7 sth_left stbold"> <?php echo $field_name ?> </p></td>
			<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn"></span></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?> <span class="s8 stn">SEK</span></p></td>
		</tr>
		<?php $field_name = 'Kund- & Kreditfakturering (Regelbundna)' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">10 Kunder</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<? endif; ?>
		<?php $field_name = 'Kund- & Kreditfakturering (Projekt)' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">1 Kunder</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<? endif; ?>

		<?php $field_name = 'SKV: Rot & Rut-arbete' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">
				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">2 Kunder</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>

		<?php endif; ?>

		<?php $field_name = 'SKV: Grönteknik-arbete' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">2 Kunder</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<?php endif; ?>
		</tbody>
		<!-- KUNDFODRAN SERVICE -->
		<tbody>
		<tr style="height:12px">
			<?php $field_name = 'KUNDFODRAN SERVICE'; ?>
			<td style="width:20%" class="stb"><p class="s7 sth_left stbold"><?php echo $field_name ?> </p></td>
			<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn"></span></p></td>
			<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn">SEK</span></p></td>
		</tr>
		<?php $field_name = 'Kundkreditkontroller' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 Minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<?php endif ?>

		<?php $field_name = 'Kundpåminnelser' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 Minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>

		<?php endif ?>

		<?php $field_name = 'Inkasso' ?>
		<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
		<?php if ( $field_value > 0 ) : ?>
			<tr style="height:12px">

				<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 Minuter</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
				<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
				<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
				<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
			</tr>
		<?php endif ?>
		</tbody>

	</manadsvis>

	<!-- ÅRSVIS !-->
	<arsvis>
		<tr style="height:12px" class="stbot">
			<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold">ÅRSVIS </p></td>
			<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
		</tr>

		<!-- RÅKENSKAPSÅR!-->
		<RaKENSKAPSaR>
			<tr style="height:12px">
				<?php $field_name = 'RÅKENSKAPSÅR' ?>
				<td style="width:20%" class="stb"><p class="s7 sth_left stbold"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
				<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn"></span></p></td>
				<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?> <span class="s8 stn">SEK</span></p></td>

			</tr>
			<?php $field_name = 'Årsbokslut & Årsredovisning' ?>
			<?php $field_value = getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?>
			<?php if ( $field_value > 0 ) : ?>
				<tr style="height:12px">

					<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
					<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
					<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
					<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?></p></td>
				</tr>
			<?php endif; ?>
			<?php $field_name = 'SKV: Inkomstdeklaration 2' ?>
			<?php $field_value = getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?>
			<?php if ( $field_value > 0 ) : ?>
				<tr style="height:12px">

					<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
					<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
					<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
					<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?></p></td>
				</tr>

			<?php endif; ?>

			<?php $field_name = 'Hållbarhetsrapport' ?>
			<?php $field_value = getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?>
			<?php if ( $field_value > 0 ) : ?>
				<tr style="height:12px">

					<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
					<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
					<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
					<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?></p></td>
				</tr>
			<?php endif; ?>
		</RaKENSKAPSaR>
		<!-- BUDGET & PROGNOS !-->
		<BUDGETPROGNOS>
			<tr style="height:12px">
				<?php $field_name = 'BUDGET & PROGNOS' ?>
				<td style="width:20%" class="stb"><p class="s7 sth_left stbold"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
				<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn"></span></p></td>
				<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?> <span class="s8 stn">SEK</span></p></td>

			</tr>
			<?php $field_name = 'Preliminärskatten (Optimering)' ?>
			<?php $field_value = getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?>
			<?php if ( $field_value > 0 ) : ?>
				<tr style="height:12px">

					<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
					<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
					<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
					<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
				</tr>
			<?php endif; ?>
		</BUDGETPROGNOS>
	</arsvis>

	<!-- ANDRA VÄRDETJÄNSTER !-->

	<andravardetjanser>
		<tr style="height:12px" class="stbot">
			<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold">ANDRA VÄRDETJÄNSTER</p></td>
			<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
		</tr>

		<!-- DEKLARATION: UTDELNING FÖR ÄGARE !-->
		<DEKLARATION>
			<tr style="height:12px">
				<?php $field_name = 'DEKLARATION: UTDELNING FÖR ÄGARE' ?>
				<td style="width:20%" class="stb"><p class="s7 sth_left stbold"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
				<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn"></span></p></td>
				<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?> <span class="s8 stn">SEK</span></p></td>

			</tr>
			<?php $field_name = 'Ägardeklarationer: Kontrolluppgifter & Utdelnings' ?>
			<?php $field_value = getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?>
			<?php if ( $field_value > 0 ) : ?>
				<tr style="height:12px">
					<?php $field_name = 'Ägardeklarationer: Kontrolluppgifter & Utdelnings' ?>
					<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
					<td style="width:20%" class="stbt"><p class="s7 sth_left stl"></p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right"></p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right "></p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
					<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
					<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, "$field_name (Annual)", 'value' ); ?></p></td>
				</tr>
			<?php endif; ?>

		</DEKLARATION>
		<!-- AFFÄRSRÅDGIVNING !-->
		<AFFARSRADGIVNING>
			<tr style="height:12px">
				<?php $field_name = 'AFFÄRSRÅDGIVNING' ?>
				<td style="width:20%" class="stb"><p class="s7 sth_left stbold"><?php echo $field_name ?> </p></td>
				<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
				<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
				<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, $field_name ); ?> <span class="s8 stn"></span></p></td>
				<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> <?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?> <span class="s8 stn">SEK</span></p></td>

			</tr>
			<?php $field_name = 'Rådgivning för Startups' ?>
			<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
			<?php if ( $field_value > 0 ) : ?>
				<tr style="height:12px">

					<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
					<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
					<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
					<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
				</tr>
			<?php endif; ?>

			<?php $field_name = 'Strategisk Affärsrådgivning' ?>
			<?php $field_value = getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?>
			<?php if ( $field_value > 0 ) : ?>
				<tr style="height:12px">

					<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
					<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right ">250</p></td>
					<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
					<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
					<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
				</tr>

			<?php endif; ?>

		</AFFARSRADGIVNING>
	</andravardetjanser>

	<!-- GRATIS !-->
	<gratis>
		<tr style="height:12px" class="stbot">
			<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold">GRATIS</p></td>
			<td style="width:20%" bgcolor="#CAEDFB"><p class="s7 sth_left stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
			<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold"></p></td>
		</tr>

		<tr style="height:12px">
			<?php $field_name = '100 Mallar & protokoll' ?>
			<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
			<td style="width:20%" class="stbt"><p class="s7 sth_left stl"></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
			<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
			<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
		</tr>

		<tr style="height:12px">
			<?php $field_name = 'Support (Telefon/Mail/Möte)' ?>
			<td style="width:20%" class="stbt"><p class="s7  stbtl"><?php echo $field_name ?> </p></td>
			<td style="width:20%" class="stbt"><p class="s7 sth_left stl"></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right"></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right "></p></td>
			<td style="width:17.5%" class="stbt"><p class="s8 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name ); ?></p></td>
			<td style="width:17.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueAndSlideValueByLabel( $fields, $field_name, 'value' ); ?></p></td>
			<td style="width:7.5%" class="stbt"><p class="s10 sth_right"><?php echo getValueByTitle( $other_totals, "$field_name (Annual)" ); ?></p></td>
		</tr>

	</gratis>
	<!-- >PROGNOSTISERAD MÅNADS KOSTNAD !-->
	<tbody>
	<tr style="height:15px" bgcolor="#DAF2CF">
		<td style="width:20%;border-top-style:solid;border-top-width:1px;border-left-style:solid;border-left-width:1px;" class="stbot">
			<p class="s7 stbold" style="padding-top: 6px;padding-left: 1px;text-indent: 0px;text-align: left;">* PROGNOSTISERAD MÅNADS KOSTNAD:</p>
		</td>
		<td style="width:20%;" class="stbot"><p class="s7 sth_left stl"></p></td>
		<td style="width:17.5%;" class="stbot"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%;" class="stbot"><p class="s8 sth_right "></p></td>
		<td style="width:17.5%;" class="stbot"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%;" class="stbot"><p class="s13 sth_right stbold"><?php echo getValueByTitle( $other_totals, 'PROGNOSTISERAD MÅNADS KOSTNAD: (Inklusive Årsavslutet)' ); ?> <span class="s14 stbold"></span></p></td>
		<td style="width:17.5%" class="stbot"><p class="s10 sth_right stbold"><?php echo getValueByTitle( $other_totals, 'PROGNOSTISERAD TOTAL ÅRSKOSTNAD' ); ?> SEK</p></td>
	</tr>
	<tr style="height:13px">
		<td style="width:20%" class="stbot"><p class="s7 " style="padding-top: 6px;padding-left: 1px;text-indent: 0px;text-align: left;">** PROGNOSTISERAD TOTAL ÅRSKOSTNAD</p></td>
		<td style="width:20%" class="stbot"><p class="s7 sth_left stl"></p></td>
		<td style="width:17.5%" class="stbot"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%" class="stbot"><p class="s8 sth_right "></p></td>
		<td style="width:17.5%" class="stbot"><p class="s8 sth_right"></p></td>
		<td style="width:7.5%" class="stbot"><p class="s10"></p></td>
		<td style="width:17.5%" class="stbot"><p class="s10 sth_right stbold"><?php echo getValueByTitle( $other_totals, 'PROGNOSTISERAD TOTAL ÅRSKOSTNAD' ); ?> SEK</p></td>
	</tr>
	</tbody>

</table>

<div class="s8">Kostnaderna är preliminära uppskattningar.</div>
<div class="s8">Den slutliga kostnaden kan bli lägre om vissa redovisningstjänster inte behövs varje månad eller om omfattningen av vissa tjänster minskar.</div>
<div class="stbold">Använd gärna denna offert som underlag i kommande möte med oss eller vid jämförelse med konkurrenter!
	Vi har prisgaranti som minst matchar priset!
	Boka möte?
	Kontakta: Support@Bokforingskompaniet.se
</div>
<?php
//dsp($totals, $other_totals, $fields)
?>
</body>

</html>
