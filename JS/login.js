
// Login user
let essaie = 3;
function connecter() {
  let mail = document.getElementById("mail_user").value;
  let pass = document.getElementById("pass_user").value;
  var mail_user = "rcrecordZ310@gmail.com";
  var pass_user = 2013;
  let message = document.getElementById("message_alert");

  if (mail == "" || pass == "") {
    message.innerText = "Les deux champ sont obligatoire";
    message.style.color = "red";
    return;
  }

  pass = parseInt(pass);
  if (mail == mail_user && pass == pass_user) {
    message.innerText = "Bienvenue";
    message.style.color = "black";
    console.log(message);
    return;
  }
  else {
    essaie--;
    if (essaie>0) {
      message.innerText = `ID ou mdp incorrect , Tentative ${essaie}`;
      message.style.color = "red";
      console.log(message);
    } else {
      message.innerText = "Trop de tentative, réanitiliser votre mot de passe";
      message.style.color = "red";
      console.log(message);
    }
  }
}
// Login user