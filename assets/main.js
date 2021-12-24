
function toggleButton(elem,a){
  var field = document.querySelector("#" + a )
  const type = field.getAttribute('type') === 'password' ? 'text' : 'password';
  field.setAttribute('type',type);
  elem.classList.toggle('bi-eye-slash-fill')
}