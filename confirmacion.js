function confirmacion(event) {
	if (confirm("Esta Seguro de Eliminar este Registro?")) {
		return true;
	} else {
		event.preventDefault();
	}
}
//evento de javascript para controlar si o no elinina el archivo

let TableDelete = document.querySelectorAll(".table");

for (var i = 0; i < TableDelete.length; i++) {
	TableDelete[i].addEventListener('click', confirmacion);
}
