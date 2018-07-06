
var time = new Date().getTime();
//Detecte les mouvements de l'utilisateurs
$(document.body).bind("mousemove keypress", function(e) {
	time = new Date().getTime();
});

//Changer le nb de minutes voulu ici
var nbMin = 30;
//Condition pour afficher la popup ou poursuivre le timer
function refresh() {
	//Affiche le message, 60000 correspond à 1min
	if (new Date().getTime() - time >= 60000*nbMin){
		clearTimeout(popupAFK);
		alert("Vous êtes absent depuis plus de " + nbMin + "min, une longue absence peut provoquer des erreurs. \n" +
				"Nous vous conseillons de sauvegarder votre progression et de rafraîchir la page. \n \n" +
				"You've been away for " + nbMin + "min, a long break could create some problems. \n" +
				"It is recommended that you save your progress and refresh the page.");
	}
	else{
		clearTimeout(popupAFK);
		var popupAFK = setTimeout(refresh, 10000); //Continue le timer
	}
}
var popupAFK = setTimeout(refresh, 10000); //Lance le timer
