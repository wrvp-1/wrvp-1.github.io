function validar(){
	var name, apellido, email, user, password, phone, expresion;
	name = document.getElementById('nombre').value;
	apellido = document.getElementById('apellidos').value;
	email = document.getElementById('correo').value;
	user = document.getElementById('usuario').value;
	password = document.getElementById('clave').value;
	phone = document.getElementById('telefono').value;
	expresion = /\w+@\w+\.+[a-z]/;

	if (name === "" || apellido=== "" || email==="" || user=== "" || password==="" || phone==="") {
		alert("todos los campos son obligatorios");
		return false;
	}
	else if (name.length>30) { 
		alert("EL Nombre es muy largo");
		return false;
	}
	else if (apellido.length>40) { 
		alert("EL apellido es muy largo");
		return false;
	}
	else if (email.length>40) { 
		alert("EL correo  es muy largo");
		return false;
	}
	else if (!expresion.test(email)) { 
		alert("EL correo no es valido");
		return false;
	}
	else if (user.length>10) { 
		alert("EL usuario es muy largo");
		return false;
	}
	else if (password.length>15) { 
		alert("la clave es muy larga");
		return false;
	}
	else if (phone.length>8) { 
		alert("EL telefono es muy largo");
		return false;
	}
	else if(isNaN(phone)){
		alert("El telefono ingresado no es numero");
		return false;
	}
}	