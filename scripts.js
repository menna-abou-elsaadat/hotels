$(document).on('click','.get_rooms_data',function(){
	$("#iframeloading").show(); 
	$.ajax({
        type:'get',
        url:'./roomRouteHandler.php?action=getRoomsData',
        success:function(data) {
        	data = JSON.parse(data);
        	$('.rooms_table_data').empty();
           data.forEach(function(room) {
    			table_row = "<tr><td>Advertiser" +room['advertister_number']+ "</td>"+
						"<td>"+room['hotel_name']+"</td>"+
						"<td>"+room['hotel_stars']+"</td>"+
						"<td>"+room['room_code']+"</td>"+
						"<td>"+room['room_type']+"</td>"+
						"<td>"+room['room_net_price']+"</td>"+
						"<td>"+room['room_taxes']+"</td>"+
						"<td>"+room['room_price']+"</td></tr>";

				$('.rooms_table_data').append(table_row);
			});
           $("#iframeloading").hide(); 
        }
    });
})