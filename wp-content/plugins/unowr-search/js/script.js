var unowr_form = {
	init: function () {
		if (document.querySelector('[data-unowr-form]').length > 0) {
			this._pos = 0;
			this._inputsWrapper = document.querySelectorAll('[data-unowr-form-wrapper]');
			this._submit = document.querySelector('[data-unowr-submit]');

			this._bindEvents();
		}
	},
	_bindEvents: function () {
		this._submit.addEventListener('click', this._submitEvent.bind(this));

		Array.prototype.forEach.call(this._inputsWrapper, function(wrapper) {
			
		}.bind(this))
	},
	_submitEvent: function (e) {
		e.preventDefault();
		this._check()
		return false;
	},
	_check: function () {
		var canContinue = false
		var wrapper = document.querySelector('[data-unowr-form-wrapper]:not(.unowr-done)');
		var response = wrapper.querySelector('[data-unowr-response]');
		var select = wrapper.querySelector('select');
		if (select.value === '') {
			select.classList.add('unowr-error')
		}else {
			select.classList.remove('unowr-error')
			wrapper.classList.add('unowr-done')
			response.innerHTML = select.value
			this._ajax(select.value)
		}
	},
	_ajax: function (val) {
		jQuery.post(
			unowr_config.ajax_url,
			{
				'action': 'unowr_search',
				'param': val
			},
			function(response){
				this._next();
			}.bind(this)
		);
	},
	_next: function () {
		var currentPos = 0;
		this._pos++;
		Array.prototype.forEach.call(this._inputsWrapper, function(wrapper) {
			if (currentPos === this._pos) {
				wrapper.classList.remove('unowr-hidden')
			}
			currentPos++;
		}.bind(this))
	}
}

jQuery(document).ready(function() {
  unowr_form.init();
});