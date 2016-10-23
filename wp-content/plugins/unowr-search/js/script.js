var unowr_form = {
	init: function () {
		if (document.querySelector('[data-unowr-form]').length > 0) {
			this._pos = 0;
			this._inputsWrapper = document.querySelectorAll('[data-unowr-form-wrapper]');
			this._selects = document.querySelectorAll('[data-unowr-taxonomy]');
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
			this._ajax(select.value, response)
		}
	},
	_ajax: function (val, output) {
		var data = {
			"action": "unowr_search"
		}
		Array.prototype.forEach.call(this._selects, function(select) {
			var type = select.getAttribute('data-unowr-taxonomy');
			data[type] = select.value
		})

		jQuery.ajax({type: 'POST',
			url: unowr_config.ajax_url,
			data: data,
			success: function(response) {
				output.innerHTML = response.length + ' found'
				this._next();
			}.bind(this)
		});
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