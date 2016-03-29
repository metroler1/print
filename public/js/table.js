//$(document).ready(function() {
//	$('table').bind('contextmenu',function(e) {
//		// Проверяем нажатие правой кнопки мыши
//		if(e.button === 2) {
//			$('.modalDialog').css({
//				top: e.clientY,
//				left: e.clientX
//			});
//			var id = $(e.target).parent().text();
//
//			var selectId = id[72] + id[73] + id[74] + id[75] + id[76] + id[77] + id[78] + id[79];
//			selectId = parseInt(selectId);
//
//			$.ajax({
//				type: 'POST',
//				url: 'printers/show',
//				data: {selectId: 'selectId'},
//				headers: {
//					'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
//				},
//				success: function(){
//					console.log('dsds');
//				},
//				error: function(msg){
//					console.log(msg);
//				}
//			});
//
//
//			//console.log(selectId);
//
//			location.href = '#openModal';
//			e.preventDefault();
//
//			$(document).bind('click', function(e) {
//				var target = $(e.target);
//				if(target.context.localName != 'li') {
//					location.href = '#close';
//					e.preventDefault();
//				}
//			});
//		}
//	});
//
//
//
//
//
//});
