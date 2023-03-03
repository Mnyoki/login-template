var logoutButton = document.
  getElementById('profile')
var modalProfile = document.
  getElementById('modal--profile');
var closeModalProfile = document.
  getElementById('button--closeProfile');

logoutButton.addEventListener
  ('click', function
    (event) {
    event.preventDefault();
    modalProfile.style.display =
      'block';
    console.log("clicked");
  })

closeModalProfile.addEventListener
  ('click',
    function
      (event) {
      event.preventDefault();
      modalProfile.style.display = 'none';
    })