//jQuery(function ($) {
	var iskillspcModule = {};
	(function() {
	console.log("init 0");
	console.log(tinymce);
	tinymce.create('tinymce.plugins.iskillspc_ce_popup_plugin', {
		//url argument holds the absolute url of our plugin directory		
		init: function (ed, url) {
			console.log("init 11");
			console.log(ed);
			//add new button
			ed.addButton('iskillspc_ce_popup_button', {
				title: 'iskills Affiliate Box',
				cmd: 'iskillspc_ce_popup_shortcode_command',
				image: url + '/../img/Favicon.png',
			});

			//button functionality.
			ed.addCommand('iskillspc_ce_popup_shortcode_command', function (ui, v) {
				// console.log(ui);
				// console.log(v);
				//console.log(tinyMCE.activeEditor.selection.getContent());
				var content = tinyMCE.activeEditor.selection.getContent();
				//console.log(content);
				//console.log(wp.shortcode.regexp('iskillspc').test(content));
				// console.log(wp.shortcode.next('iskillspc', content, 0));
				var attrs = wp.shortcode.attrs(content).named;
				console.log(attrs);
				iskillspcModule.iskillspc_show_popup(attrs,content);

			});
		},

		getInfo: function () {
			return {
				longname: 'iskills Pros & Cons Popup',
				author: 'Bitsoft Solutions',
				version: '1'
			};
		}
	});

	tinymce.PluginManager.add('iskillspc_ce_popup_button', tinymce.plugins.iskillspc_ce_popup_plugin);
})();




jQuery(function ($) {
	iskillspcModule.iskillspc_show_popup  = function (attrs,content){
		console.log("inside dd");
		console.log(attrs);
		
		if (attrs.hasOwnProperty('pros_icon')) {
			$('#pros-icon').val(attrs.pros_icon);
		}
		if (attrs.hasOwnProperty('cons_icon')) {
			$('#cons-icon').val(attrs.cons_icon);
		}
		if (attrs.hasOwnProperty('show_title')) {
			$('#show_title').prop('checked', attrs.show_title == 'true');
			$('#show_title').trigger('change');
		} else {
			$('#show_title').prop('checked', true);
		}
	
		if (attrs.hasOwnProperty('show_button')) {
			$('#show_button').prop('checked', attrs.show_button == 'true');
			$('#show_button').trigger('change');
		} else {
			$('#show_button').trigger('change');
		}
	
		if (attrs.hasOwnProperty('title')) {
			$('#main-title').val(attrs.title);
		}
		if (attrs.hasOwnProperty('use_heading_icon')) {
			$('#use_heading_icon').val(attrs.use_heading_icon);
		}
	
		if (attrs.hasOwnProperty('pros_title')) {
			$('#pros_title').val(attrs.pros_title);
		}
		if (attrs.hasOwnProperty('cons_title')) {
			$('#cons_title').val(attrs.cons_title);
		}
		if (attrs.hasOwnProperty('heading_pros_icon')) {
			$('#heading_pros_icon').val(attrs.heading_pros_icon);
		}
		if (attrs.hasOwnProperty('heading_cons_icon')) {
			$('#heading_cons_icon').val(attrs.heading_cons_icon);
		}
		if (attrs.hasOwnProperty('button_icon')) {
			$('#button_icon').val(attrs.button_icon);
		}
		if (attrs.hasOwnProperty('link_text')) {
			$('#link_text').val(attrs.link_text);
		}
		if (attrs.hasOwnProperty('link')) {
			$('#link').val(attrs.link);
		}
	
		if (wp.shortcode.regexp('iskillspc').test(content)) {
			var iskillspros = content.match(wp.shortcode.regexp('iskillspros'))[0];
			iskillspros = iskillspros.substr(8, iskillspros.length - 17);
			$('#iskillspc_ce_editor_popup #iskillspc-pros').val(iskillspros.replace(/<br\s*[\/]?>/gi, '\n'));
	
			var iskillscons = content.match(wp.shortcode.regexp('iskillscons'))[0];
			iskillscons = iskillscons.substr(8, iskillscons.length - 17);
			$('#iskillspc_ce_editor_popup #iskillspc-cons').val(iskillscons.replace(/<br\s*[\/]?>/gi, '\n'));
		}
	
		//console.log($('#iskillspc_ce_editor_popup').length);
		$('#iskillspc_ce_editor_popup').addClass('iskillspc-ce-popup-display');
		$('body').css('overflow', 'hidden');
	}
	//iskillspcModule.iskillspc_show_popup = iskillspc_show_popup;

	$('#iskillspc-ce-submit').on('click', function (e) {
		e.preventDefault();
		//[iskillspc][iskillspros]Line by line Pros here[/iskillspros][iskillscons]Line by line Cons here [/iskillscons][/iskillspc]
		var content =
			'[iskillspros]' +
			$('#iskillspc-pros').val().replace(/\n/g, '<br />') +
			'[/iskillspros][iskillscons]' +
			$('#iskillspc-cons').val().replace(/\n/g, '<br />') +
			'[/iskillscons]';
		//	console.log(content);
		var attributes = '';
		var pros_icon = $('#pros-icon').val();
		if (!pros_icon.isEmpty()) {
			attributes += 'pros_icon="' + pros_icon + '"';
		}

		var cons_icon = $('#cons-icon').val();
		if (!cons_icon.isEmpty()) {
			attributes += ' cons_icon="' + cons_icon + '"';
		}

		if ($('#show_title:checkbox:checked').length == 1) {
			attributes += ' show_title="true"';
		} else {
			attributes += ' show_title="false"';
		}

		var main_title = $('#main-title').val();
		if (!main_title.isEmpty()) {
			attributes += ' title="' + main_title + '"';
		}

		var use_heading_icon = $('#use_heading_icon').val();
		if (!use_heading_icon.isEmpty()) {
			attributes += ' use_heading_icon="' + use_heading_icon + '"';
		}

		if ($('#show_button:checkbox:checked').length == 1) {
			attributes += ' show_button="true"';
		} else {
			attributes += ' show_button="false"';
		}

		//pros_title cons_title heading_pros_icon heading_cons_icon button_icon link_text link

		var pros_title = $('#pros_title').val();
		if (!pros_title.isEmpty()) {
			attributes += ' pros_title="' + pros_title + '"';
		}
		var cons_title = $('#cons_title').val();
		if (!cons_title.isEmpty()) {
			attributes += ' cons_title="' + cons_title + '"';
		}
		var heading_pros_icon = $('#heading_pros_icon').val();
		if (!heading_pros_icon.isEmpty()) {
			attributes += ' heading_pros_icon="' + heading_pros_icon + '"';
		}
		var heading_cons_icon = $('#heading_cons_icon').val();
		if (!heading_cons_icon.isEmpty()) {
			attributes += ' heading_cons_icon="' + heading_cons_icon + '"';
		}
		var button_icon = $('#button_icon').val();
		if (!button_icon.isEmpty()) {
			attributes += ' button_icon="' + button_icon + '"';
		}
		var link_text = $('#link_text').val();
		if (!link_text.isEmpty()) {
			attributes += ' link_text="' + link_text + '"';
		}
		var link = $('#link').val();
		if (!link.isEmpty()) {
			attributes += ' link="' + link + '"';
		}
		tinymce.execCommand('mceInsertContent', false, '[iskillspc ' + attributes + ' ]' + content + '[/iskillspc]');
		$("#iskillspc-ce-popup").trigger('reset');
		$('.iskillspc-ce-close').trigger('click');
	});

	$('#footer-close, .iskillspc-ce-close').on('click', function (e) {
		e.preventDefault();
		$('#iskillspc_ce_editor_popup').removeClass('iskillspc-ce-popup-display');
		$('body').css('overflow', '');
	});

	$('#show_title').on('change', function () {
		if (this.checked) {
			$('#wr-main-title').stop().slideDown();
		} else {
			$('#wr-main-title').stop().slideUp();
		}
	});
	$('#show_button').on('change', function () {
		console.log(this);
		if (this.checked) {
			$('#iskillspc-wr-btn-amazon').stop().slideDown();
		} else {
			$('#iskillspc-wr-btn-amazon').stop().slideUp();
		}
	});
	String.prototype.isEmpty = function () {
		return this.length === 0 || !this.trim();
	};	
});