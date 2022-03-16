function Sololetras(e){

	key = e.keyCode || e.wich;
	tecla = String.fromCharCode(key).toString();
	letras = "abcdefghijklmnsñopqrstuvwxyzABCDEFGHIJKLMNSOPQRTUVWXZÁÉÚÓÍáéíóú";

	especiales = [0,13];
	tecla_especial = false

	for (var i in especiales) {
		if (key == especiales[i]) {

			tecla_especial= true;
			break;
		}
		
	}
	if (letras.indexOf(tecla) == -1 && tecla_especial){

		alert("Ingresar solo letras");
		return false;
	}
}