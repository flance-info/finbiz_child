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
			<p><strong>Utförd av:</strong> Anställd: Johan Ekman</p>
			<p><strong>Datum:</strong> 2024-07-22</p>
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
			<p>Företag: NELIA Partner AB<br>
				Org.nr: 559487-5303<br>
				Kontakt person: Nermin Imamovic<br>
				Telefon: +46739901073<br>
				E-post: <a href="mailto:nermin@neliapartner.se">nermin@neliapartner.se</a></p>
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
	<p class="s13 stbold" style="padding-top: 1px;text-indent: 0px;text-align: center;">1625 SEK</p></div>

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
		<td style="width:17.5%" bgcolor="#CAEDFB"><p class="s7 sth_right stbold">Total kostnad</p></td>
		<td style="width:7.5%" bgcolor="#CAEDFB"><p><br/></p></td>
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
	<tr style="height:12px">
		<td style="width:20%" class="stb"><p class="s7 sth_left stbold">REDOVISNING </p></td>
		<td style="width:20%" class="stb"><p class="s8 sth_left stl"></p></td>
		<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%" class="stb"><p class="s8 sth_right "></p></td>
		<td style="width:17.5%" class="stb"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%" class="stb"><p class="s10 sth_right stbold"> 375 <span class="s8 stn">SEK</span></p></td>
		<td style="width:7.5%" class="stb"><p class="s10"><br/></p></td>
	</tr>

	<tr style="height:12px">
		<td style="width:20%" class="stbt"><p class="s7  stbtl">Löpande Bokföring </p></td>
		<td style="width:20%" class="stbt"><p class="s7 sth_left stl">15 Verifikat (affärshändelser)</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right "> 250</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right">1</p></td>
		<td style="width:17.5%" class="stbt"><p class="s10 sth_right">250</p></td>
		<td style="width:7.5%" class="stbt"><p class="s10"><br/></p></td>
	</tr>

	<tr style="height:12px">
		<td style="width:20%" class="stbt"><p class="s7  stbtl">SKV: Momsdeklaration </p></td>
		<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right "> 250</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right">0.5</p></td>
		<td style="width:17.5%" class="stbt"><p class="s10 sth_right">125</p></td>
		<td style="width:7.5%" class="stbt"><p class="s10"><br/></p></td>
	</tr>

	<tr style="height:12px">
		<td style="width:20%" class="stbt"><p class="s7  stbtl">SKV: Punktskattedeklaration </p></td>
		<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right "> 250</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right">0</p></td>
		<td style="width:17.5%" class="stbt"><p class="s10 sth_right">0</p></td>
		<td style="width:7.5%" class="stbt"><p class="s10"><br/></p></td>
	</tr>

	<tr style="height:12px">
		<td style="width:20%" class="stbt"><p class="s7  stbtl">Rapporter &amp; Uppföljning </p></td>
		<td style="width:20%" class="stbt"><p class="s7 sth_left stl">30 minuter</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right">Halvtimme</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right "> 250</p></td>
		<td style="width:17.5%" class="stbt"><p class="s8 sth_right">0</p></td>
		<td style="width:17.5%" class="stbt"><p class="s10 sth_right">0</p></td>
		<td style="width:7.5%" class="stbt"><p class="s10"><br/></p></td>
	</tr>

	<tr style="height:13px">
		<td style="width:20%" class="stbot"><p class="s7 " style="padding-top: 6px;padding-left: 1px;text-indent: 0px;text-align: left;">PROGNOSTISERAD TOTAL ÅRSKOSTNAD</p></td>
		<td style="width:20%" class="stbot"><p class="s7 sth_left stl"></p></td>
		<td style="width:17.5%" class="stbot"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%" class="stbot"><p class="s8 sth_right "></p></td>
		<td style="width:17.5%" class="stbot"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%" class="stbot"><p class="s10 sth_right">19 500 SEK</p></td>
		<td style="width:7.5%" class="stbot"><p class="s10"><br/></p></td>
	</tr>

	<tr style="height:15px" bgcolor="#DAF2CF">
		<td style="width:20%;border-top-style:solid;border-top-width:1px;border-left-style:solid;border-left-width:1px;" class="stbot">
			<p class="s7 stbold" style="padding-top: 6px;padding-left: 1px;text-indent: 0px;text-align: left;">PROGNOSTISERAD TOTAL ÅRSKOSTNAD</p>
		</td>
		<td style="width:20%;" class="stbot"><p class="s7 sth_left stl"></p></td>
		<td style="width:17.5%;" class="stbot"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%;" class="stbot"><p class="s8 sth_right "></p></td>
		<td style="width:17.5%;" class="stbot"><p class="s8 sth_right"></p></td>
		<td style="width:17.5%;" class="stbot"><p class="s13 sth_right stbold">1625 <span class="s14 stbold">SEK</span></p></td>
		<td style="width:7.5%;" class="stbot"><p class="s10"><br/></p></td>
	</tr>

</table>
	<div class="wrapper-email">
		<div class="table-header">
			<?php
			if ( ! empty( $email_settings['logo'] ) ) {
				$header_logo = '<div class="header__logo ' . esc_attr( $email_settings['logo_position'] ) . '">
					<img style="' . apply_filters( 'ccb_email_logo_style', $calc_id ) . '" src="' . esc_url( $email_settings['logo'] ) . '" alt="Email Logo">
				</div>';
				echo wp_kses_post( apply_filters( 'ccb_email_logo_html', $header_logo, $calc_id ) );
			}
			?>
		</div>
		<table width="100%">
			<tbody class="table-body">
			<tr class="table-body-row">
				<td>
					<div class="summary  <?php $show_unit ? esc_attr_e( 'show-unit' ) : ''; ?>">
						<div class="summary-container">
							<?php if ( ! empty( $order_id ) ) : ?>
								<div class="summary-order">
									<?php esc_html_e( 'Order ID', 'cost-calculator-builder-pro' ); ?>: <?php echo esc_html( $order_id ); ?>
								</div>
							<?php endif; ?>
							<div class="summary-title">
								<span class="title">
								<?php
									$title = $email_settings['title'];
									$title = apply_filters( 'ccb_email_title', $title, $calc_id );
									echo esc_html( $title );
								?>
								</span>
								<span class="date">
								<?php
									$email_date = date_i18n( 'F j Y' );
									$email_date = apply_filters( 'ccb_email_date', $email_date, $calc_id );
									echo esc_html( $email_date );
								?>
								</span>
							</div>
							<?php if ( $show_unit ) : ?>
								<div class="calc-subtotal-list-header">
									<span class="calc-subtotal-list-header__name"><?php esc_html_e( 'Name', 'cost-calculator-builder-pro' ); ?></span>
									<span class="calc-subtotal-list-header__value"><?php esc_html_e( 'Total', 'cost-calculator-builder-pro' ); ?></span>
								</div>
							<?php endif; ?>
							<div class="summary-list">
								<?php
								if ( isset( $fields ) && count( $fields ) > 0 ) {

									foreach ( $fields as $key => $value ) {
										if ( str_contains( $value['alias'], 'repeater' ) ) {
											?>
												<div class="summary-list-group <?php echo ( count( $fields ) - 1 === $key ) ? esc_attr( 'break-border' ) : ''; ?>">
												<?php if ( isset( $value['groupTitle'] ) ) : ?>
														<div class="summary-list-group-title"><?php echo esc_html( $value['groupTitle'] ); ?></div>
													<?php else : ?>
														<?php if ( isset( $value['label'] ) ) : ?>
															<div class="summary-list-group-title"><?php echo esc_html( $value['label'] ); ?></div>
														<?php endif; ?>
													<?php endif; ?>
												<?php foreach ( $value['groupElements'] as $child ) : ?>
													<div class="summary-list-item">
														<div class="summary-list-item-name">
															<?php echo isset( $child['label'] ) ? esc_html( ucfirst( $child['label'] ) ) : ''; ?>
														</div>
														<?php if ( isset( $child['summary_view'] ) && 'show_value' !== $child['summary_view'] ) : ?>
															<?php if ( isset( $child['extraViewMultiple'] ) ) : ?>
																<div class="summary-list-item-value">
																	<?php foreach ( $child['extraViewMultiple'] as $extraLabel ) : ?>
																		<?php echo esc_html( $extraLabel ) . '<br>'; ?>
																	<?php endforeach; ?>
																</div>
															<?php else : ?>
																<div class="summary-list-item-value">
																	<?php echo esc_html( $child['extraView'] ); ?>
																</div>
															<?php endif; ?>
														<?php else : ?>
															<div class="summary-list-item-value">
																<?php echo esc_html( $child['converted'] ); ?>
															</div>
														<?php endif; ?>
														<?php if ( isset( $child['option_unit'] ) && ! str_contains( $child['alias'], 'geolocation' ) ) : ?>
															<div class="summary-list-item-unit">
																<?php echo isset( $child['option_unit'] ) ? esc_html( ucfirst( $child['option_unit'] ) ) : ''; ?>
															</div>
														<?php endif; ?>
														<?php if ( isset( $child['userSelectedOptions'] ) ) : ?>
															<ul class="summary-list-sub-items">
																<?php if ( ! isset( $child['userSelectedOptions']['twoPoints'] ) ) : ?>
																	<li>
																		<div class="summary-list-item-name">
																			<a href="<?php echo esc_attr( $child['userSelectedOptions']['addressLink'] ); ?>" target="_blank"><?php echo esc_html( $child['userSelectedOptions']['addressName'] ); ?></a>
																		</div>
																	</li>
																<?php endif; ?>
																<?php if ( isset( $child['userSelectedOptions']['twoPoints'] ) ) : ?>
																	<li class="geolocation-row">
																		<div class="summary-list-item-name">
																			<?php esc_html_e( 'From:', 'cost-calculator-builder-pro' ); ?>
																		</div>
																		<div class="summary-list-item-value" >
																			<a href="<?php echo esc_attr( $child['userSelectedOptions']['twoPoints']['from']['addressLink'] ); ?>" style="margin-left: -5px;" target="_blank">
																				<?php
																					$innerFromAddress = $child['userSelectedOptions']['twoPoints']['from']['addressName'];
																					$innerFromAddress = strlen( $innerFromAddress ) > 35 ? substr( $innerFromAddress, 0, 35 ) . '...' : $innerFromAddress;
																					echo esc_html( $innerFromAddress );
																				?>
																			</a>
																		</div>
																	</li>
																	<li class="geolocation-row">
																		<div class="summary-list-item-name">
																			<?php esc_html_e( 'To:', 'cost-calculator-builder-pro' ); ?>
																		</div>
																		<div class="summary-list-item-value">
																			<a href="<?php echo esc_attr( $child['userSelectedOptions']['twoPoints']['to']['addressLink'] ); ?>" style="margin-left: -5px;" target="_blank">
																				<?php
																					$innerToAddress = $child['userSelectedOptions']['twoPoints']['to']['addressName'];
																					$innerToAddress = strlen( $innerToAddress ) > 35 ? substr( $innerToAddress, 0, 35 ) . '...' : $innerToAddress;
																					echo esc_html( $innerToAddress );
																				?>
																			</a>
																		</div>
																	</li>
																<?php endif ?>
																<?php if ( isset( $child['userSelectedOptions']['distance'] ) ) : ?>
																	<li>
																		<div class="summary-list-item-name">
																			<?php
																				esc_html_e( 'Distance: ', 'cost-calculator-builder-pro' );
																				echo esc_html( $child['userSelectedOptions']['distance_view'] );
																			?>
																		</div>
																	</li>
																<?php endif; ?>
															</ul>
														<?php endif; ?>
														<?php if ( isset( $child['has_options'] ) ) : ?>
															<?php if ( count( $child['options'] ) ) : ?>
																<ul class="summary-list-sub-items">
																	<?php foreach ( $child['options'] as $child_option ) : ?>
																		<li>
																			<?php
																			if ( isset( $child['summary_view'] ) && 'show_value' === $child['summary_view'] ) :
																				?>
																				<div class="summary-list-item-name">
																					<?php echo esc_html( $child_option['label'] ); ?>
																				</div>
																				<div class="summary-list-item-value">
																					<?php
																					if ( count( $child['options'] ) > 1 ) {
																						echo esc_html( $child_option['converted'] );}
																					?>
																				</div>
																			<?php endif; ?>
																		</li>
																	<?php endforeach; ?>
																</ul>
															<?php endif; ?>
														<?php endif; ?>
													</div>
												<?php endforeach; ?>
												</div>
												<?php
											} elseif ( str_contains( $value['alias'], 'file_upload' ) && ! $value['allowPrice'] ) { //phpcs:ignore ?>
											<div class="summary-list-item <?php count( $fields ) - 1 === $key ? esc_attr_e( 'break-border' ) : ''; ?>">
												<div class="summary-list-item-name">
													<?php echo esc_html( ucfirst( $value['label'] ) ); ?>
												</div>
												<?php if ( isset( $value['option_unit'] ) ) { ?>
													<div class="summary-list-item-value">
														<?php echo esc_html( $value['option_unit'] ); ?>
													</div>
												<?php } ?>
											</div>
											<?php

											} elseif ( ! str_contains( $value['alias'], 'total' ) && ( ! isset( $value['hidden'] ) || ! $value['hidden'] ) && ! str_contains( $value['alias'], 'repeater' ) ) { //phpcs:ignore ?>
											<div class="summary-list-item <?php count( $fields ) - 1 === $key ? esc_attr_e( 'break-border' ) : ''; ?>">
												<div class="summary-list-item-name">
													<?php echo esc_html( ucfirst( $value['label'] ) ); ?>
												</div>
												<?php if ( isset( $value['summary_view'] ) && 'show_value' !== $value['summary_view'] ) : ?>
													<?php if ( isset( $value['extraViewMultiple'] ) ) : ?>
														<div class="summary-list-item-value">
															<?php foreach ( $value['extraViewMultiple'] as $extraLabel ) : ?>
																<?php echo esc_html( $extraLabel ) . '<br>'; ?>
															<?php endforeach; ?>
														</div>
													<?php else : ?>
														<div class="summary-list-item-value">
															<?php echo esc_html( $value['extraView'] ); ?>
														</div>
													<?php endif; ?>
												<?php else : ?>
													<?php if ( isset( $value['converted'] ) ) { ?>
														<div class="summary-list-item-value">
															<?php echo esc_html( $value['converted'] ); ?>
														</div>
													<?php } ?>
												<?php endif; ?>
												<?php if ( isset( $value['option_unit'] ) && ! str_contains( $value['alias'], 'geolocation' ) ) : ?>
													<div class="summary-list-item-unit">
														<?php echo isset( $value['option_unit'] ) ? esc_html( ucfirst( $value['option_unit'] ) ) : ''; ?>
													</div>
												<?php endif; ?>

													<?php if ( isset( $value['userSelectedOptions'] ) ) : ?>
													<ul class="summary-list-sub-items">
														<?php if ( ! isset( $value['userSelectedOptions']['twoPoints'] ) ) : ?>
															<li>
																<div class="summary-list-item-name">
																	<a href="<?php echo esc_attr( $value['userSelectedOptions']['addressLink'] ); ?>" target="_blank"><?php echo esc_html( $value['userSelectedOptions']['addressName'] ); ?></a>
																</div>
															</li>
														<?php endif; ?>
														<?php if ( isset( $value['userSelectedOptions']['twoPoints'] ) ) : ?>
															<li class="geolocation-row">
																<div class="summary-list-item-name">
																	<?php esc_html_e( 'From:', 'cost-calculator-builder-pro' ); ?>
																</div>
																<div class="summary-list-item-value">
																	<a href="<?php echo esc_attr( $value['userSelectedOptions']['twoPoints']['from']['addressLink'] ); ?>" style="margin-left: -5px;" target="_blank">
																		<?php
																			$fromAddress = $value['userSelectedOptions']['twoPoints']['from']['addressName'];
																			$fromAddress = strlen( $fromAddress ) > 35 ? substr( $fromAddress, 0, 35 ) . '...' : $fromAddress;
																			echo esc_html( $fromAddress );
																		?>
																	</a>
																</div>
															</li>
															<li class="geolocation-row">
																<div class="summary-list-item-name">
																	<?php esc_html_e( 'To:', 'cost-calculator-builder-pro' ); ?>
																</div>
																<div class="summary-list-item-value">
																	<a href="<?php echo esc_attr( $value['userSelectedOptions']['twoPoints']['to']['addressLink'] ); ?>" style="margin-left: -5px;" target="_blank">
																		<?php
																			$toAddress = $value['userSelectedOptions']['twoPoints']['to']['addressName'];
																			$toAddress = strlen( $toAddress ) > 35 ? substr( $toAddress, 0, 35 ) . '...' : $toAddress;
																			echo esc_html( $toAddress );
																		?>
																	</a>
																</div>
															</li>
														<?php endif ?>
														<?php if ( isset( $value['userSelectedOptions']['distance'] ) ) : ?>
															<li>
																<div class="summary-list-item-name">
																	<?php
																		esc_html_e( 'Distance: ', 'cost-calculator-builder-pro' );
																		echo esc_html( $value['userSelectedOptions']['distance_view'] );
																	?>
																</div>
															</li>
														<?php endif; ?>
													</ul>
												<?php endif; ?>

													<?php if ( isset( $value['has_options'] ) ) : ?>
														<?php if ( count( $value['options'] ) ) : ?>
														<ul class="summary-list-sub-items">
															<?php foreach ( $value['options'] as $option ) : ?>
																<li>
																	<?php
																	if ( isset( $value['summary_view'] ) && 'show_value' === $value['summary_view'] ) :
																		?>
																		<div class="summary-list-item-name">
																			<?php echo esc_html( $option['label'] ); ?>
																		</div>
																		<div class="summary-list-item-value">
																			<?php
																			if ( count( $value['options'] ) > 1 ) {
																				echo esc_html( $option['converted'] );
																			}
																			?>
																		</div>
																	<?php endif; ?>
																</li>
															<?php endforeach; ?>
														</ul>
													<?php endif; ?>
												<?php endif; ?>
											</div>
											<?php
										}
									}
								}
								?>
							</div>

							<div class="summary-total other-totals">
								<?php if ( isset( $other_totals ) && count( $other_totals ) ) : ?>
									<?php foreach ( $other_totals as $tot ) : ?>
										<div class="summary-total-item" style="vertical-align: middle; width: 48%;">
											<?php if ( isset( $tot['label'] ) ) : ?>
												<?php echo esc_html( $tot['label'] ); ?>
											<?php elseif ( isset( $tot['title'] ) ) : ?>
												<?php echo esc_html( $tot['title'] ); ?>
											<?php endif; ?>
										</div>
										<div class="summary-total-item text-right" style="width: 50%;">
											<?php if ( isset( $tot['value'] ) ) : ?>
												<?php echo esc_html( $tot['value'] ); ?>
											<?php elseif ( isset( $tot['converted'] ) ) : ?>
												<?php echo esc_html( $tot['converted'] ); ?>
											<?php endif; ?>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>

							<div class="summary-total">
								<?php if ( isset( $totals ) && count( $totals ) > 0 ) : ?>
									<?php foreach ( $totals as $total ) : ?>
										<?php if ( empty( $total['hasDiscount'] ) ) : ?>
											<div class="summary-total-item" style="width: 48%;">
												<?php if ( isset( $total['label'] ) ) : ?>
													<?php echo esc_html( $total['label'] ); ?>
												<?php elseif ( isset( $total['title'] ) ) : ?>
													<?php echo esc_html( $total['title'] ); ?>
												<?php endif; ?>
											</div>
											<div class="summary-total-item text-right" style="width: 51%;">
												<?php echo esc_html( $total['converted'] ); ?>
											</div>
										<?php else : ?>
											<?php if ( 'show_without_title' === $total['discount']['discountView'] ) : ?>
												<div class="ccb-discount-wrapper ccb-discount-wrapper-left">
													<?php if ( isset( $total['label'] ) ) : ?>
													<div class="summary-total-item" style="vertical-align: middle">
														<?php echo esc_html( $total['label'] ); ?>
													</div>
													<?php elseif ( isset( $total['title'] ) ) : ?>
													<div class="summary-total-item" style="vertical-align: middle">
														<?php echo esc_html( $total['title'] ); ?>
													</div>
													<?php endif; ?>
													<div class="summary-total-item ccb-discount-off">
														<?php
														$discount_amount = '';
														if ( 'percent_of_amount' === $total['discount']['discountType'] ) {
															$discount_amount = intval( $total['discount']['discountAmount'] ) . '%';
														} else {
															$discount_amount = '-' . intval( $total['discount']['discountAmount'] );
														}
														?>
														<?php echo esc_html( $discount_amount ); ?> <?php esc_html_e( 'off', 'cost-calculator-builder-pro' ); ?>
													</div>
												</div>
												<div class="ccb-discount-wrapper ccb-discount-wrapper-right">
													<div class="summary-total-item" style="white-space: nowrap; font-size: 14px; font-weight: 500; text-decoration: line-through;"><?php echo esc_html( $total['discount']['original_converted'] ); ?></div>
													<div class="summary-total-item" style="white-space: nowrap"><?php echo esc_html( $total['converted'] ); ?></div>
												</div>
											<?php else : ?>
												<div class="ccb-discount-wrapper ccb-discount-wrapper-left">
													<div class="summary-total-item" style="vertical-align: middle">
														<?php esc_html_e( 'Discount', 'cost-calculator-builder-pro' ); ?>:
													</div>
													<div class="summary-total-item" style="vertical-align: middle">
														<?php echo esc_html( $total['discount']['discountTitle'] ); ?>
													</div>
												</div>
												<div class="ccb-discount-wrapper ccb-discount-wrapper-right">
													<div class="summary-total-item" style="white-space: nowrap; font-size: 14px; font-weight: 700;"><?php echo esc_html( $total['discount']['discountValue'] ); ?></div>
												</div>

												<div class="ccb-discount-wrapper ccb-discount-wrapper-left">
													<div class="summary-total-item" style="white-space: nowrap">
														<?php if ( isset( $total['label'] ) ) : ?>
															<?php echo esc_html( $total['label'] ); ?>
														<?php elseif ( isset( $total['title'] ) ) : ?>
															<?php echo esc_html( $total['title'] ); ?>
														<?php endif; ?>
													</div>
												</div>
												<div class="ccb-discount-wrapper ccb-discount-wrapper-right">
													<div class="summary-total-item" style="white-space: nowrap; font-weight: 700;"><?php echo esc_html( $total['converted'] ); ?></div>
												</div>

											<?php endif; ?>
										<?php endif; ?>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $files ) ) : ?>
								<div class="summary-files">
									<ul class="summary-files-list">
										<?php foreach ( $files as $file ) : ?>
											<?php if ( ! empty( $file ) ) : ?>
												<?php foreach ( $file as $item ) : ?>
													<li class="summary-files-list-item">
														<div class="summary-files-icon">
															<img src="<?php echo esc_attr( esc_url( CALC_URL . '/frontend/dist/img/file-text.png' ) ); ?>" width="20" alt="Email icon">
														</div>
														<div class="summary-files-info">
															<span class="title">Attach file:</span>
															<span class="filename">
																<?php
																$fileName = strlen( $item['filename'] ) > 25 ? substr( $item['filename'], 0, 25 ) . '...' : $item['filename'];
																echo esc_html( $fileName );
																?>
															</span>
														</div>
														<a href="<?php echo esc_url( $item['url'] ); ?>" class="summary-files-link"><?php esc_html_e( 'Download', 'cost-calculator-builder-pro' ); ?></a>
													</li>
												<?php endforeach; ?>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</td>
			</tr>
			<tr class="table-body-row">
				<td>
					<div class="description ql-editor">
						<?php
						echo apply_filters( 'ccb_email_rich_text', $email_settings['description'], $calc_id );// phpcs:ignore
						?>
					</div>
				</td>
			</tr>
			<?php if ( $email_settings['footer'] ) : ?>
				<?php
				$footer_content = '
				<tr class="table-body-row">
					<td>
						<div class="footer">
							<div class="footer-container">
								<div class="footer-wrapper">
									<span>
										' . esc_html__( 'This service working on:', 'cost-calculator-builder-pro' ) . ' 
									</span>
									<a href="https://stylemixthemes.com/cost-calculator-plugin/">
										<img src="' . esc_attr( CALC_URL . '/frontend/dist/img/email_footer_logo.png' ) . '">
									</a>
								</div>
							</div>
						</div>
					</td>
				</tr>
				';
				$footer_content = apply_filters( 'ccb_email_footer', $footer_content, $calc_id );
				echo wp_kses_post( $footer_content );
				?>
			<?php endif; ?>
			</tbody>
		</table>
	</div>
</body>

</html>
