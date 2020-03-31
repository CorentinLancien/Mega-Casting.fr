/*************************************
	* A propos de la captcha *
 * ***********************************/

var submit = document.getElementById('Send');
var error_captcha = document.getElementById('error_captcha');

// bouton désactivé au chargement de la page .
submit.disabled = true;

//On vérifie que la case est cochée et que l'utilisateur n'est pas un robot .
var imNotARobot = function() {
	if(grecaptcha.getResponse().lenght != 0){
		submit.disabled = false;
		submit.style.backgroundColor = '#4CAF50';
		error_captcha.style.display = 'none';

	}
};
