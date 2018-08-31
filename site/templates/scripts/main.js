// Well hello there. Looks like we don't have any Javascript.
// Maybe you could help a friend out and put some in here?
// Or at least, when ready, this might be a good place for it.
$(function() {

    $("#contact-form").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        form.postform({jsoncallback: true}, function(json) {
            var alertclass = 'alert-success';
            if (json.error) {
            var alertclass = 'alert-danger';
            }
            form.find('.response').removeClass('hidden').addClass(alertclass);
            form.find('.response').find('.alert-text').text(json.msg);
        });
    });
    $('.error').hide();
});

$.fn.extend({
    postform: function(options, callback) { //{formdata: data/false, jsoncallback: true/false, action: true/false}
		var form = $(this);
		console.log('submitting ' + form.attr('id'));
		if (!options.action) {options.action = form.attr('action');}
		if (!options.formdata) {options.formdata = form.serialize();}
		if (options.jsoncallback) {
			$.post(options.action, options.formdata, function(json) {callback(json);});
		} else if (options.html) {
			$.post(options.action, options.formdata, function(html) {callback(html);});
		} else {
			$.post(options.action, options.formdata).done(function() {callback();});
		}
	},
	formiscomplete: function(highightelement) {
		var form = $(this);
		var missingfields = new Array();
		form.find('.has-error').removeClass('has-error');
		form.find('.response').empty();
		form.find('.required').each(function() {
			if ($(this).val() === '') {
				var row = $(this).closest(highightelement);
				row.addClass('has-error');
				missingfields.push(row.find('.control-label').text());
			}
		});

		if (missingfields.length > 0) {
			var message = 'Please Check the following fields: <br>';
			for (var i = 0; i < missingfields.length; i++) {
				message += missingfields[i] + "<br>";
			}
			$('#'+form.attr('id') + ' .response').createalertpanel(message, "<span class='glyphicon glyphicon-warning-sign'></span> Error! ", "danger");
			$('html, body').animate({scrollTop: $('#'+form.attr('id') + ' .response').offset().top - 120}, 1000);
			return false;
		} else {
			return true;
		}
	}

});
