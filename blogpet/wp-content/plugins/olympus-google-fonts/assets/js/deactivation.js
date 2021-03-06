/* global ajaxurl */
jQuery( document ).ready(
	function() {
		'use strict';
		const form =
		'<form id="deactivation-form" method="post">' +
		'<h1>Help Us Do Better</h1>' +
		'<p>We\'re sorry our Google Fonts plugin didn\'t work for you. Would you mind letting us know where we went wrong so we can fix it?</p>' +
		'<ul class="reasons" style="padding: 0">' +
		'<p><strong>Why you are deactivating this plugin?</strong></p>' +
		'	<li><label class="reason expand"><input type="radio" name="reason" value="missing-feature" /> The plugin is great, but I need specific feature that you don\'t support</label><textarea placeholder="Which feature do you need?"></textarea></li>' +
		'<li><label class="reason expand"><input type="radio" name="reason" value="not-working"> The plugin is not working</label><textarea placeholder="Please clarify which part of the plugin isn\'t working so we can try and fix it..."></textarea></li>' +
		'<li><label class="reason expand"><input type="radio" name="reason" value="other-plugin"> I found a better plugin</label><textarea placeholder="What\'s the plugin name?"></textarea></li>' +
		'<li><label class="reason expand"><input type="radio" name="reason" value="user-stuck"> I couldn\'t understand how to make it work</label><textarea placeholder="Where did you get stuck?"></textarea></li>' +
		'<li><label class="reason"><input type="radio" name="reason" value="debugging"> It\'s a temporary deactivation. I\'m just debugging an issue.</label></li>' +
		'<li><label class="reason expand"><input type="radio" name="reason" value="other"> Other</label><textarea placeholder="Please explain your reason for deactivation..."></textarea></li></ul>' +
		'<div class="bottom-row">' +
		'<label><input type="checkbox" name="anon" class="anonymous-feedback" value="1"> Submit feedback annoymously</label>' +
		'<div class="buttons"><input type="button" class="button button-secondary button-close" value="Cancel" /><input type="button" name="deactivate" class="button button-primary button-deactivate allow-deactivate" value="Skip and Deactivate" /></div>' +
		'</div>' +
		'</form>';

		jQuery( form ).appendTo( jQuery( 'body' ) );
		const deactivateLink = jQuery( '#the-list [data-slug="olympus-google-fonts"] .deactivate a' );

		jQuery( '.reason' ).click(
			function() {
				jQuery( '.reasons textarea' ).hide();
				jQuery( this ).next( 'textarea' ).css( 'display', 'block' );
				jQuery( '.button-deactivate' ).val( 'Submit & Deactivate' );
			}
		);

		deactivateLink.click(
			function( e ) {
				e.preventDefault();
				jQuery( '.reasons textarea' ).hide();
				jQuery.featherlight( '#deactivation-form' );
			}
		);

		jQuery( '#deactivation-form .button-close' ).click(
			function( e ) {
				e.preventDefault();
				jQuery.featherlight.current().close();
			}
		);

		jQuery( '.button-deactivate' ).click(
			function() {
				const anon = jQuery( '#deactivation-form .anonymous-feedback' ).is( ':checked' );
				const reason = jQuery( '.reason input[type=radio]:checked' ).first();
				const explanation = reason.parent().next( 'textarea' );

				const data = {
					action: 'ogf_submit_feedback',
					reason: reason.val(),
					explanation: explanation.val(),
					anon: anon,
				};

				jQuery.post(
					ajaxurl,
					data,
					function() {
						window.location = jQuery( deactivateLink ).attr( 'href' );
					}
				);
			}
		);
	}
);
