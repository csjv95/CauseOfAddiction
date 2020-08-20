const checkBox = document.querySelector('#checkbox');
const checkBtn = document.querySelector('.check__btn');


checkBtn.addEventListener('click', () => {
  if(checkBox.checked === true) {
    console.log('체크해제');
    checkBox.checked = false;
  }else if(checkBox.checked === false) {
    console.log('체크온');
    checkBox.checked = true;
  }
});