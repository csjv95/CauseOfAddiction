$(document).ready( function(){ 	

	$("#id").blur(function() {

		var idJ = /^[a-z]+[a-z0-9]{5,19}$/g;
	
		var user_id = $('#id').val();

		$.ajax({
			url : '/idCheck/'+ user_id,
			type : 'get',
			success : function(data) {
				if (data == '중복') {
						// 1 : 아이디가 중복되는 문구
						$("#id_check").text("사용중인 아이디입니다.");
						$("#id_check").css("color", "red");						

					} else if (data == '중복되지않음'){

						if(idJ.test(String(user_id))){
							// 0 : 아이디 길이 / 문자열 검사
							$("#id_check").text("");							
						} else if(user_id == ""){
							$('#id_check').text('아이디를 입력해주세요 :)');
							$('#id_check').css('color', 'red');							
						} else {
							$('#id_check').text("아이디는 영문자로 시작하는 6~20자 영문자 또는 숫자이어야 합니다.");
							$('#id_check').css('color', 'red');							
						}						
					}
			}, error : function() {
						console.log("실패");
			}
		});
	});

	$('#password2').blur(function(){

		var password1=$("#password1").val();
   	 	var password2=$("#password2").val();

	   if($('#password1').val() != $('#password2').val()){
	    	if($('#password2').val()!=''){
                $('#password_check').text('비밀번호가 일치하지 않습니다. :)');
				$('#password_check').css('color', 'red');

	    		$('#password2').val('');
	          	$('#password2').focus();
	       }
	    }else{
	    	$("#password_check").text("");
	    }
	});

});
