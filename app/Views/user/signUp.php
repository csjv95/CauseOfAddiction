<div class="wrapper fadeInDown zero-raduis">
      <div id="formContent">
        <!-- Tabs Titles -->  
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="/image/logo.png" alt="logo" class="logo">  
          <h1>회원가입</h1>      
        </div>
        <!-- Login Form -->
        <form action="/save" id="signUp" name="signUp" method="post">
          <input type="text" id="id" class="fadeIn second zero-raduis" name="id" placeholder="아이디">
          <div id="id_check"></div>

          <input type="password" id="password1" class="fadeIn third zero-raduis" name="password1" placeholder="비밀번호">
          <input type="password" id="password2" class="fadeIn third zero-raduis" name="password2" placeholder="비밀번호 확인">
          <div id="password_check"></div>

          <input type="email" id="email" class="fadeIn third zero-raduis" name="email" placeholder="이메일">        
          <div id="email_check"></div>  
          <div id="email_notice">회원가입후 해당 메일로 본인인증후 게시글 작성이 가능하니 올바르게 입력 바랍니다.</div>
          <!-- <div id="formFooter">
            <a class="underlineHover" href="#">휴대폰인증 전송</a>
          </div> -->
          <input type="hidden" id="g-recaptcha" name="g-recaptcha">
          <input type="submit" class="fadeIn fourth zero-raduis" value="회원가입">
        </form>
      </div>
  </div>