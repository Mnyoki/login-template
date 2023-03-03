var loginButton = document.getElementById('login');
var modalLogin = document.getElementById('modal--login');
var closeModalLog = document.getElementById('button--closeLog');

var registerButton = document.getElementById('register');
var closeModalReg = document.getElementById('button--closeReg');
var modalRegister = document.getElementById('modal--register');


registerButton.addEventListener('click', function
  (event) {
  event.preventDefault();
  modalRegister.style.display = 'block';
  console.log("clicked")
})

closeModalReg.addEventListener('click', function
  (event) {
  event.preventDefault();
  modalRegister.style.display = 'none';
})

loginButton.addEventListener('click', function
  (event) {
  event.preventDefault();
  modalLogin.style.display = 'block';
  console.log("clicked")
})

closeModalLog.addEventListener('click', function
  (event) {
  event.preventDefault();
  modalLogin.style.display = 'none';
  console.log('close');
})


/*var buttonSpinReg = document.
getElementById('button--spinreg');

buttonSpinReg.addEventListener('click', 
function (event)
{
  event.preventDefault();
  buttonSpinReg.classList.add
('is-loading');
})

var buttonSpinLog = document.
getElementById('button--spinlog');

buttonSpinLog.addEventListener('click', 
function (event) {
  event.preventDefault();
  buttonSpinLog.classList.add
('is-loading');
})

*/