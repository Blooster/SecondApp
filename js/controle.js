function checkAgeLegal() {
	if(form.ageValide.checked==true) {
		return true;
	}

	else if(form.ageValide.checked==false) {
		window.alert("Vous devez confirmer que vous alliez bien l'âge légal.");
		return false;
	}

	else {
		window.alert("Erreur, voir l'administrateur du site web.");
		return false;
	}
}