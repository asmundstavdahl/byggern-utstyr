
window.addEventListener("load", e => {
	let firstInput = document.querySelector("input[type=text]")
	if(firstInput){
		firstInput.focus()
	}

	/*document.body.addEventListener("keyup", e => {
		let inInput = e.target.tagName == "INPUT"

		switch(e.key){
			case "Escape":
				location.pathname = location.pathname.replace(/\/[^/]*$/, "")
				break
			case "ArrowLeft":
			case "ArrowRight":
				if(inInput) break

				id = parseInt(location.pathname.split("/").pop())

				if(!(id > 0)) break

				if(e.key == "ArrowRight") {
					id++
				} else {
					id--
				}

				location.pathname = location.pathname.replace(/\/[^/]*$/, "/" + id)
		}
	})*/
})
