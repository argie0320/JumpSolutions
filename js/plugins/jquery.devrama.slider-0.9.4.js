/**
 * DrSlider Version 0.9.4
 * Developed by devrama.com
 * 
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/mit-license.php
 * 
 */

(function($){
	var DrSlider = function(element, options){
		this.width = undefined,
		this.height = undefined,
		this.parent_width = undefined,
		this.num_slides = 0;
		this.current_slide = undefined;
		this.$sliders = undefined;
		this.$very_current_slide = undefined; //This is very close current slide, it is the one before transitioning, and the moment when user click 'next', 'prev' or 'navigations'.
		this.is_pause = false;
		this.play_timer = true;
		this.active_timer = false;
		this.on_transition = false;
		this._$progress_bar = undefined;
		this.all_transitions = ['slide-left', 'slide-right', 'slide-top', 'slide-bottom', 'fade', 'split', 'split3d', 'door', 'wave-left', 'wave-right', 'wave-top', 'wave-bottom'];
		
		this.requestFrame = window.requestAnimationFrame || 
							window.webkitRequestAnimationFrame || 
							window.mozRequestAnimationFrame || 
							window.oRequestAnimationFrame || 
							window.msRequestAnimationFrame ||
							func