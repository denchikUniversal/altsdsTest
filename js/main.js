$(function(){

	$('#calendar').fullCalendar({
		dayClick: function(date, jsEvent, view){
			var clickDate = date.format();
			$('#start').val(clickDate);
			$('#dialog').dialog('open');
			$.ajax({
				url: 'index.php',
				type: 'POST',
				data: {clickDate: clickDate},
				success: function(res){
					console.log(res);
				},
				error: function(){
					alert('Error!');
				}
			});
		}
		eventSources: [
			'file.json',
			{
				color: '#0EB6A2',
				textColor: '#fff'
			}
		]
	});

	$('#dialog').dialog({
		autoOpen: false,
		show: {
			effect: 'clip',
			duration: 300
		},
		hide: {
			effect: 'clip',
			duration: 300
		}
	});

	$('.datepicker').datepicker();

});