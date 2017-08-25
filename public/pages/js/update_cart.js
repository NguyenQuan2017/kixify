$(document).ready(function(){
	$(".edit-update").click(function(){
		var rowid=$(this).attr('id');
		var qty=$(this).parent().parent().find('.quantity').val();
		var token=$("input[name='_token']").val();
		
		$.ajax({
			url: '/update-cart/'+rowid+'/'+qty,
			type:'GET',
			cache:false,
			data:{"_token":token,"id":rowid,"qty":qty},
			success:function(data){
				if(data== "oke"){
					alert('yes');
				}
			}
		});
	});
});