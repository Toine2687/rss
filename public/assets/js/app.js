// ====DARK MODE ====
const darkBtn = document.getElementById('darkBtn')
darkBtn.addEventListener('click', () => {
	document.body.classList.toggle('darkMode')
})

const checkboxArray = document.querySelectorAll("[type=checkbox]");

checkboxArray.forEach(checkbox => {
	checkbox.addEventListener("change", (event) => {
		console.log(document.querySelectorAll("[type=checkbox]:checked"))

		if (document.querySelectorAll("[type=checkbox]:checked").length > 3) {
			checkbox.checked = false

		} else  {
			console.log('bob')
		}
	})
})
