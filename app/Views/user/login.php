<!-- <header>
    <nav>
      <ul class="nav">
        <li><button></button></li>
        <li><button></button></li>
      </ul>
    </nav>
  </header>

  <main>
    <img src="/image/logo.png" alt="logo" class="logo">
    <h1 class="login__title">login</h1>
  <form action="post" class="form__login">
    <fieldset class="fieldset__login">

      <label for="id" class="login__id">ID</label>
      <input type="text" id="id">
    
      <label for="pw" class="login__pw">PW</label>
      <input type="password" id="pw">

      <button class="login__btn">로그인</button>

      <div class="check__box">
        <div class="check__left">
          <label>
            <input type="checkbox" class="login__status"><span class="login__status">로그인 상태유지</span> 
          </label>
        </div>

        <div class="check__right">
          <button class="check__btn">비밀번호 찾기</button>
          <button class="check__btn">회원가입</button>
        </div>
      </div>
    </fieldset>
  </form>
</main> -->
<div class="wrapper fadeInDown zero-raduis">
      <div id="formContent">
        <!-- Tabs Titles -->
  
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="/image/logo.png" alt="logo" class="logo">
          <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
          
        </div>

        <!-- Login Form -->
        <form>
          <input type="id" id="id" class="fadeIn second zero-raduis" name="id" placeholder="id">
          <input type="text" id="password" class="fadeIn third zero-raduis" name="login" placeholder="password">
          <div id="formFooter">
            <a class="underlineHover" href="#">비밀번호 찾기</a>
          </div>
          <input type="submit" class="fadeIn fourth zero-raduis" value="로그인">
          <h2>아직 회원가입을 하지 않으셨나요?</h2>
          <input type="button" class="fadeIn fourth zero-raduis pc" value="회원가입">
        </form>
        

      </div>
  </div>