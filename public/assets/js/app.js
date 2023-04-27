// ====DARK MODE ====
const darkBtn = document.getElementById('darkBtn')
darkBtn.addEventListener('click', () => {
	document.body.classList.toggle('darkMode')
})

//recuper les checkboxs
const checkboxArray = document.querySelectorAll("[type=checkbox]");

//boucler sur les checkboxs
checkboxArray.forEach(checkbox => {

	//Event sur le changement de status des checkbox
	checkbox.addEventListener("change", (event) => {

		//Si plus de 3 checkbox, limiter 
		if (document.querySelectorAll("[type=checkbox]:checked").length > 3) {
			checkbox.checked = false
			document.getElementById("checkboxInfo").innerHTML = "Vous ne pouvez plus choisir de sujet"

			//sinon prévenir
		} else  {
			document.getElementById("checkboxInfo").innerHTML = "Vous devez choisir 3 sujets"
		}
	})
})
