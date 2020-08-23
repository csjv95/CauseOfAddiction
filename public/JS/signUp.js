$(document).ready( function(){ 	

	//아이디 체크 
	$("#id").blur(function() {

		var idJ = /^[a-z]+[a-z0-9]{5,19}$/g;
	
		var user_id = $('#id').val();

		$.ajax({
			url : '/idCheck/'+ user_id,
			type : 'get',
			success : function(data) {
				if (data == '중복') {
						$("#id_check").text("사용중인 아이디입니다.");
						$("#id_check").css("color", "red");		
					} else if (data == '중복되지않음'){
						if(idJ.test(String(user_id))){		
							//성공					
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

	//패스워드 체크
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
	    	//성공
	    	$("#password_check").text("");
	    }
	});  

	//이메일 체크
	$('#email').blur(function(){
		var obEmail = document.getElementById("email");
		var reg_email = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;

		if (!obEmail.value) {           
			$('#email_check').text('이메일을 입력해주세요. :)');
			$('#email_check').css('color', 'red');	
		}  else if(!reg_email.test(obEmail.value))  {      
			$('#email_check').text('이메일 형식이 잘못되었습니다 :)');
			$('#email_check').css('color', 'red');      
		}else{
			//성공
			$('#email_check').text("");
		}    

	});

	//리캡차 V3
	grecaptcha.ready(function() {
		  grecaptcha.execute('6Lc2QsIZAAAAAKcXEzdJuLd6zfmFVPR3FhSvBJtl', {action: 'homepage'}).then(function(token) {
		    // 토큰을 받아다가 g-recaptcha 에다가 값을 넣어준다.
		    document.getElementById('g-recaptcha').value = token;
	  	});
	});
});