function actionState(state, room, action)
{
   
	$.ajax({
		url    : 'ajax/room_ajax.php',
		type   : "POST",
		dataType:"JSON",
		data   :{state: state, room: room, action: action},
		success :function (response){		
				if(response['state'] == 0)
				{
					$('#'+response['action']).attr('src','/darius/images/'+response['action']+response['state']+'.png');	
				}
				else
				{
					$('#'+response['action']).attr('src','/darius/images/'+response['action']+response['state']+'.png');	
				}
			}
		
	});

}