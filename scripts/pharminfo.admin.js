(function($){

	function split( val ) {
		return val.split( /,\s*/ );
	}
	function extractLast( term ) {
		return split( term ).pop();
	}

	$(document).ready(function () {
		$('.tinymce textarea').tinymce({
			script_url : '/scripts/tiny_mce/tiny_mce.js',
			theme : "advanced",
			plugins : "preview,searchreplace",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_buttons1 : "bold,italic,underline,|,cut,copy,paste,|,undo,redo,|,code,|,fontselect,fontsizeselect,|,search,replace,|,preview,fullscreen",
			theme_advanced_buttons2 : "",
			theme_advanced_buttons3 : "",
			width : "50%",
			height: "280"
		});

		$('input#formulations').autocomplete({
			source: function( request, response ) {
				$.getJSON('/ajax/formulation', {
					term: extractLast( request.term )
				}, response );
			},
			search: function() {
				// custom minLength
				var term = extractLast( this.value );
				if ( term.length < 2 ) {
					return false;
				}
			},
			focus: function() {
				// prevent value inserted on focus
				return false;
			},
			select: function( event, ui ) {
				var terms = split( this.value );
				// remove the current input
				terms.pop();
				// add the selected item
				terms.push( ui.item.value );
				// add placeholder to get the comma-and-space at the end
				terms.push( "" );
				this.value = terms.join( ", " );
				return false;
			}
		});
	});
})(jQuery);
