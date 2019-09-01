$(document).ready(function(e) {
	$("#formAcc").validetta({
		bubblePosition: 'bottom', bubbleGapTop: 10, bubbleGapLeft: -5,
		onValid:function(e){
			e.preventDefault();
			$.ajax({
				method:"post",
				url:"php/index_AX.php",
				cache:false,
				data:$("#formAcc").serialize(),
				success: function(respAX){
					if(respAX == 0){
						alert("ERROR");
					}
					if(respAX == 1){
						$(location).attr("href","php/crud.php");
					}
				}
			});
		}
	});	
});