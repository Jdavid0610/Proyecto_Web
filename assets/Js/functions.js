function CreateCarruselItem(){
	
}

function CreateModals(){

}

function CreatePopUp(){

	var modal = document.getElementById("");
    var btn = document.getElementById("");
    var span = document.getElementById("");

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }
    
    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }
}