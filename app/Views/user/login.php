<header>
    <nav>
      <ul class="nav">
        <!-- <li><button></button></li>
        <li><button></button></li> -->
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
</main>