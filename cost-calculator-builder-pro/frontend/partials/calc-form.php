<?php

use cBuilder\Classes\CCBSettingsData;

$general_settings = CCBSettingsData::get_calc_global_settings();
?>
<div class="calc-form-wrapper <?php echo esc_attr( apply_filters( 'ccb_contact_form_style_class', '', $settings ) ); ?>">
	<div v-show="!open && formData.accessEmail && !close" class="calc-buttons <?php echo $general_settings['invoice']['emailButton'] && ! $general_settings['invoice']['showAfterPayment'] && $general_settings['invoice']['use_in_all'] ? esc_attr( 'pdf-enable' ) : ''; ?>">
		<button @click.prevent="toggleOpen" class="calc-btn-action ispro-wrapper success">
			<span v-if="formData.openModalBtnText">{{ formData.openModalBtnText | to-short }}</span>
			<span v-else="formData.openModalBtnText"><?php esc_html_e( 'Make order', 'cost-calculator-builder-pro' ); ?></span>
			<span class="is-pro">
				<span class="pro-tooltip">
					pro
					<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
				</span>
			</span>
		</button>
		<?php if ( isset( $general_settings['invoice']['showAfterPayment'] ) && ! $general_settings['invoice']['showAfterPayment'] && $general_settings['invoice']['use_in_all'] ) : ?>
			<button class="calc-btn-action" @click="getInvoice">
				<span class="ccb-ellipsis"><?php echo isset( $general_settings['invoice']['buttonText'] ) && ! empty( $general_settings['invoice']['buttonText'] ) ? esc_html( ccb_truncate_string( $general_settings['invoice']['buttonText'] ) )
							: esc_html__( 'PDF Download', 'cost-calculator-builder-pro' ); ?></span>
				<div class="invoice-btn-loader"></div>
				<span class="is-pro">
					<span class="pro-tooltip">
						pro
						<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
					</span>
				</span>
			</button>
			<?php if ( isset( $general_settings['invoice']['emailButton'] ) && $general_settings['invoice']['emailButton'] ) : ?>
				<button class="calc-btn-action" @click="showSendPdf">
					<span class="ccb-ellipsis"><?php echo isset( $general_settings['invoice']['btnText'] ) && ! empty( $general_settings['invoice']['btnText'] ) ? esc_html( ccb_truncate_string( $general_settings['invoice']['btnText'] ) )
								: esc_html__( 'Send Quote', 'cost-calculator-builder-pro' ); ?></span>
					<span class="is-pro">
						<span class="pro-tooltip">
								pro
							<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
						</span>
					</span>
				</button>
			<?php endif; ?>

		<?php endif; ?>
	</div>

	<div :class="['ccb-cf-wrap', {'disabled': loader}]" v-show="open && formData.accessEmail" style="position: relative">
		<div class="pro-border"></div>
		<span class="is-pro">
			<span class="pro-tooltip">
				pro
				<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
			</span>
		</span>

		<div class="ccb-contact-form7" v-show="formData.contactFormId && !showPayments" :class="{'calc-cf7-disabled': ['finish', 'show_summary'].includes(getStep)}">
			<?php
			echo do_shortcode( '[contact-form-7 id="' . $settings['formFields']['contactFormId'] . '"]' );
			?>
			<div class="ccb-btn-container calc-buttons <?php echo ! empty( $general_settings['invoice']['emailButton'] ) && ! empty( $general_settings['invoice']['use_in_all'] ) ? esc_attr( 'pdf-enable' ) : ''; ?>" v-if="!stripe && !loader">
				<?php if ( isset( $general_settings['invoice']['showAfterPayment'] ) && ! empty( $general_settings['invoice']['use_in_all'] ) ) : ?>
					<template v-if="getInvoiceBtnStatuses">
						<button class="calc-btn-action invoice-button ispro-wrapper" style="width: <?php echo esc_attr( empty( $general_settings['invoice']['emailButton'] ) ? '100%' : '48.5%' ); ?>" @click="getInvoice">
							<span class="ccb-ellipsis"><?php echo isset( $general_settings['invoice']['buttonText'] ) && ! empty( $general_settings['invoice']['buttonText'] ) ? esc_html( ccb_truncate_string( $general_settings['invoice']['buttonText'] ) )
										: esc_html__( 'PDF Download', 'cost-calculator-builder-pro' ); ?></span>
							<div class="invoice-btn-loader"></div>
							<span class="is-pro">
								<span class="pro-tooltip">
									pro
									<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
								</span>
							</span>
						</button>

						<?php if ( ! empty( $general_settings['invoice']['emailButton'] ) ) : ?>
							<button class="calc-btn-action ispro-wrapper" @click="showSendPdf">
								<span class="ccb-ellipsis"><?php echo isset( $general_settings['invoice']['btnText'] ) && ! empty( $general_settings['invoice']['btnText'] ) ? esc_html( ccb_truncate_string( $general_settings['invoice']['btnText'] ) )
											: esc_html__( 'Send Quote', 'cost-calculator-builder-pro' ); ?></span>
								<span class="is-pro">
								<span class="pro-tooltip">
									pro
									<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
								</span>
							</span>
							</button>
						<?php endif; ?>
					</template>
				<?php endif; ?>
			</div>
		</div>

		<div class="calc-form-wrapper" v-if="!formData.contactFormId && !showPayments">
			<div class="calc-default-form">
				<template v-if="!getHideCalc">
					<div class="calc-item ccb-field ccb-field-quantity" :class="{required: getRequiredMessage('staff_field'), 'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<span :class="{active: getRequiredMessage('staff_field')}" class="ccb-error-tip front default" v-text="getRequiredMessage('staff_field')"></span>
						<div class="calc-item__title">
							<span><?php esc_html_e( 'Utfärdare', 'cost-calculator-builder-pro' ); ?></span>
							<span class="ccb-required-mark"></span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<select name="select_filed" v-model="sendFields[4].value" :disabled="loader" class="calc-input ccb-field ccb-appearance-field">
								<option selected value="customer"> Kunde</option>
								<option value="staff"> Anställd</option>
							</select>
						</div>
					</div>
					<div v-if="sendFields[4].value == 'staff'" class="calc-item ccb-field ccb-field-quantity" :class="{required: getRequiredMessage('staffname_field'), 'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<span :class="{active: getRequiredMessage('staffname_field')}" class="ccb-error-tip front default" v-text="getRequiredMessage('staffname_field')"></span>
						<div class="calc-item__title">
							<span><?php esc_html_e( 'Anställd Name', 'cost-calculator-builder-pro' ); ?></span>
							<span class="ccb-required-mark"></span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<input type="text" v-model="sendFields[9].value" @input="clearRequired('staffname_field')" :disabled="loader" class="calc-input ccb-field ccb-appearance-field">
						</div>
					</div>

					<div class="calc-item ccb-field ccb-field-quantity" :class="{required: getRequiredMessage('name_field'), 'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<span :class="{active: getRequiredMessage('name_field')}" class="ccb-error-tip front default" v-text="getRequiredMessage('name_field')"></span>
						<div class="calc-item__title">
							<span><?php esc_html_e( 'Ditt namn', 'cost-calculator-builder-pro' ); ?></span>
							<span class="ccb-required-mark">*</span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<input type="text" v-model="sendFields[0].value" @input="clearRequired('name_field')" :disabled="loader" class="calc-input ccb-field ccb-appearance-field">
						</div>
					</div>
		<!--
					<div class="calc-item ccb-field ccb-field-quantity" :class="{required: getRequiredMessage('lastname'), 'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<span :class="{active: getRequiredMessage('lastname')}" class="ccb-error-tip front default" v-text="getRequiredMessage('lastname')"></span>
						<div class="calc-item__title">
							<span><?php esc_html_e( 'Efternamn', 'cost-calculator-builder-pro' ); ?></span>
							<span class="ccb-required-mark">*</span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<input type="text" v-model="sendFields[7].value" @input="clearRequired('lastname')" :disabled="loader" class="calc-input ccb-field ccb-appearance-field">
						</div>
					</div>
		!-->
					<div class="calc-item ccb-field ccb-field-quantity" :class="{required: getRequiredMessage('companyname_field'), 'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<span :class="{active: getRequiredMessage('companyname_field')}" class="ccb-error-tip front default" v-text="getRequiredMessage('companyname_field')"></span>
						<div class="calc-item__title">
							<span><?php esc_html_e( 'Företagsnamn', 'cost-calculator-builder-pro' ); ?></span>
							<span class="ccb-required-mark">*</span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<input type="text" v-model="sendFields[5].value" @input="clearRequired('companyname_field')" :disabled="loader" class="calc-input ccb-field ccb-appearance-field">
						</div>
					</div>

					<div class="calc-item ccb-field ccb-field-quantity" :class="{required: getRequiredMessage('orgnumber'), 'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<span :class="{active: getRequiredMessage('orgnumber')}" class="ccb-error-tip front default" v-text="getRequiredMessage('orgnumber')"></span>
						<div class="calc-item__title">
							<span><?php esc_html_e( 'Org.nr', 'cost-calculator-builder-pro' ); ?></span>
							<span class="ccb-required-mark">*</span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<input type="text" v-model="sendFields[6].value" @input="clearRequired('orgnumber')" :disabled="loader" class="calc-input ccb-field ccb-appearance-field">
						</div>
					</div>

					<div class="calc-item ccb-field ccb-field-quantity" :class="{required: getRequiredMessage('email_field'), 'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<span :class="{active: getRequiredMessage('email_field')}" class="ccb-error-tip front default" v-text="getRequiredMessage('email_field')"></span>
						<div class="calc-item__title">
							<span><?php esc_html_e( 'E-post', 'cost-calculator-builder-pro' ); ?></span>
							<span class="ccb-required-mark">*</span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<input type="email" v-model="sendFields[1].value" @input="clearRequired('email_field')" :disabled="loader" class="calc-input ccb-field ccb-appearance-field">
						</div>
					</div>

					<div class="calc-item ccb-field ccb-field-quantity" :class="{required: getRequiredMessage('phone_field'), 'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<span :class="{active: getRequiredMessage('phone_field')}" class="ccb-error-tip front default" v-text="getRequiredMessage('phone_field')"></span>
						<div class="calc-item__title">
							<span><?php esc_html_e( 'Telefon', 'cost-calculator-builder-pro' ); ?></span>
							<span class="ccb-required-mark">*</span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<input type="number" :disabled="loader" v-model="sendFields[2].value" @input="clearRequired('phone_field')" class="calc-input ccb-field ccb-appearance-field">
						</div>
					</div>


					<div class="calc-item ccb-field ccb-field-quantity" :class="{'calc-disabled': ['finish', 'show_summary'].includes(getStep)}">
						<div class="calc-item__title">
							<span :class="{'require-fields': requires[3].required}"><?php esc_html_e( 'Meddelande', 'cost-calculator-builder-pro' ); ?></span>
						</div>
						<div class="calc-input-wrapper ccb-field">
							<textarea v-model="sendFields[3].value" :disabled="loader" class="calc-input ccb-field ccb-appearance-field"></textarea>
						</div>
					</div>
					<?php do_action( 'ccb_contact_form_add_fields', $settings ); ?>
				</template>
				<div :class="{requiredterms: getRequiredMessage('terms_and_conditions_field')}" class="calc-item ccb-terms-wrapper" v-if="formData.accessTermsEmail">
					<span :class="{active: getRequiredMessage('terms_and_conditions_field')}" class="ccb-error-tip front default-terms" v-text="getRequiredMessage('terms_and_conditions_field')"></span>
					<div class="ccb-terms calc-checkbox calc-is-vertical default">
						<div class="ccb-input-wrapper ccb-terms-check calc-checkbox-item">
							<input type="checkbox" :disabled="loader" @input="clearRequired('terms_and_conditions_field')" v-model="formData.terms_and_conditions.checkbox" :id="checkTermsLabel">
							<label :for="checkTermsLabel">
								<span class="calc-checkbox-title">{{ formData.terms_and_conditions.text }}</span>
								<a class="calc-terms-link" :href="formData.terms_and_conditions.link" target="_blank">{{ formData.terms_and_conditions.link_text }} <i class="ccb-icon-click-out"></i></a>
							</label>
						</div>
					</div>
				</div>
				<div :id="getSettings.calc_id" class="g-rec" v-if="getSettings.recaptcha.enable"></div>

				<div v-if="loader" style="position: relative; min-height: 50px">
					<loader-wrapper :form="true" :idx="getPreloaderIdx" width="60px" height="60px" scale="0.8" :front="true"></loader-wrapper>
				</div>
				<div class="ccb-btn-container calc-buttons <?php echo ! empty( $general_settings['invoice']['emailButton'] ) && ! empty( $general_settings['invoice']['use_in_all'] ) ? esc_attr( 'pdf-enable' ) : ''; ?>" v-else-if="!stripe && !loader">
					<?php do_action( 'ccb_contact_form_submit_action', $settings ); ?>
					<button class="calc-btn-action ispro-wrapper success <?php echo esc_attr( apply_filters( 'ccb_contact_form_submit_class', '', $settings ) ); ?>" :disabled="loader" @click.prevent="sendData">
						<span v-if="formData.summary_display.enable">{{ formData.summary_display?.submit_btn_text | to-short }}</span>
						<span v-else-if="formData.submitBtnText">{{ formData.submitBtnText | to-short }}</span>
						<span v-else><?php esc_html_e( 'Submit order', 'cost-calculator-builder-pro' ); ?></span>
						<span class="is-pro">
							<span class="pro-tooltip">
								pro
								<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
							</span>
						</span>
					</button>

					<?php if ( isset( $general_settings['invoice']['showAfterPayment'] ) && ! empty( $general_settings['invoice']['use_in_all'] ) ) : ?>
						<template v-if="getInvoiceBtnStatuses">
							<button class="calc-btn-action invoice-button ispro-wrapper" @click="getInvoice">
								<span class="ccb-ellipsis"><?php echo isset( $general_settings['invoice']['buttonText'] ) && ! empty( $general_settings['invoice']['buttonText'] ) ? esc_html( ccb_truncate_string( $general_settings['invoice']['buttonText'] ) )
											: esc_html__( 'PDF Download', 'cost-calculator-builder-pro' ); ?></span>
								<div class="invoice-btn-loader"></div>
								<span class="is-pro">
									<span class="pro-tooltip">
										pro
										<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
									</span>
								</span>
							</button>

							<?php if ( ! empty( $general_settings['invoice']['emailButton'] ) ) : ?>
								<button class="calc-btn-action ispro-wrapper" @click="showSendPdf">
									<span class="ccb-ellipsis"><?php echo isset( $general_settings['invoice']['btnText'] ) && ! empty( $general_settings['invoice']['btnText'] ) ? esc_html( ccb_truncate_string( $general_settings['invoice']['btnText'] ) )
												: esc_html__( 'Send Quote', 'cost-calculator-builder-pro' ); ?></span>
									<span class="is-pro">
										<span class="pro-tooltip">
											pro
											<span style="visibility: hidden;" class="pro-tooltiptext">Feature Available <br> in Pro Version</span>
										</span>
									</span>
								</button>
							<?php endif; ?>
						</template>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<form-payments v-if="showPayments"></form-payments>
	</div>
</div>
