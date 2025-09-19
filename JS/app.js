function toggleMenu() {
  document.querySelector(".menu_responsive").classList.toggle("show");
  console.log("Souris cliqué");
}
//Chargement de page login
document.getElementById('connecter').addEventListener('click', function () {
  window.location.href = '/Mon-projet/login_form.html';
})
