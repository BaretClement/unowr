var unowr_form = {
	init: function () {
		if (document.querySelectorAll('[data-unowr-form]').length > 0) {

			this._choices = document.querySelectorAll('[data-unowr-choice]');
			this._taxonomies = document.querySelectorAll('[data-unowr-taxonomy]');

			this._resto = [];
			this._pos = 0;
			this._resultWrapper = document.querySelector('[data-unowr-result-wrapper]');

			this._bindEvents();
		}
	},
	_bindEvents: function () {
		Array.prototype.forEach.call(this._choices, function(choice) {
			choice.addEventListener('click', this._next.bind(this));			
		}.bind(this))
	},
	_ajax: function (val, output) {
		var data = {
			"action": "unowr_search"
		};
		var selects = document.querySelectorAll('.active[data-unowr-choice]');
		Array.prototype.forEach.call(selects, function(select) {
			var type = select.getAttribute('data-unowr-taxonomy');
			data[type] = select.getAttribute('data-value');
		});

		jQuery.ajax({
			type: 'POST',
			url: unowr_config.ajax_url,
			data: data,
			success: function(response) {
				var json = JSON.parse(response);
				if (json.length < 3) {
					this._resto = json.concat(this._resto.slice(0, 3-json.length));
					this._finish();
				}else if (json.length === 3) {
					this._resto = json;
					this._finish();
				}else {
					this._resto = json
					this._showNext();
				}
			}.bind(this)
		});
	},
	_showChildren: function (id) {
		var children = document.querySelector('[data-parent="' + id + '"]');
		if (children != null) {
			children.classList.remove('unowr-hidden')
			return true
		}
		return false
	},
	_showNext: function (e) {
		var nextTaxo = document.querySelector('.unowr-taxonomy:not(.unowr-done)');
		if (nextTaxo != null) {
			nextTaxo.classList.remove('unowr-hidden')
		}else {
			this.finish_()
		}
	},
	_next: function (e) {
		var target = e.currentTarget

		var taxo = target.getAttribute('data-unowr-taxonomy')
		var parent = target.getAttribute('data-parent')
		var parentNode = document.querySelector('[data-unowr-taxonomy="' + taxo + '"]')
		var otherChoices = target.parentNode.querySelectorAll('.unowr-choice')
		Array.prototype.forEach.call(otherChoices, (other) => {
			other.classList.remove('active')
		})
		target.classList.add('active')
		var childrens = target.parentNode.querySelectorAll('.children')
		Array.prototype.forEach.call(childrens, function(children) {
			children.classList.add('unowr-hidden')
		})

		if (parent === "true") {
			if (!this._showChildren(e.currentTarget.getAttribute('data-value'))) {
				parentNode.classList.add('unowr-done')
				this._ajax()
			}
		}else {
			parentNode.classList.add('unowr-done')
			this._ajax()
		}
	},
	_finish: function () {
		var html = "<div class='title'>Resultats:</div>";
		Array.prototype.forEach.call(this._resto, (resto) => {
			html += "<div class='unowr_result'>";
			html += "	<span>" + resto.title + "</span>";
			html += "</div>";
		})

		this._resultWrapper.innerHTML = html
	}
}

jQuery(document).ready(function() {
  unowr_form.init();
});