// JavaScript Document


//verifica que no se ingresen datos nulos en los campos
function vacio(q)
 {
	 
	for ( i = 0; i < q.length; i++ ) 
	{  
		if ( q.charAt(i) != " " ) 
		{    
			return true			  
		} 
	}
	return false 
}

//valida que se hallan ingresado datos en le login del html centro
function valida_entrada (p_usuario,p_pass)
{
	 	 
	if (vacio(p_usuario.value) && vacio(p_pass.value))
	{
		
		return true;
	} 
	
	return false;	
}


//valida que el valor ingresado solo tenga numeros enteros
function valida_unico(p_valor)
{
	var RegExEntero = /^(?:\+|-?)\d+$/ //expresion regular para numeros enteros
	if(vacio(p_valor) && RegExEntero.test(p_valor))
	{
		return true
	}
		return false
	
}

// valida que el cambio de contraseña los campos no esten vacidos
function valCambioPass(p_usuario,p_pass,p_confirPass)
{
	if (vacio(p_usuario)&& vacio(p_pass) && vacio(p_confirPass))
	{
		return true
	}
	alert("por favor llenar los todos los campos");
	return false
}


function igualPass(p_pass,p_confirma)
{
	if (p_pass == p_confirma)
	{
		return true
	}
	return false
}

//valida que un correo electronico este bien escrito
function valida_correo(p_correo)
{
	var RegExCorreo = /^[\w\.]+@([\w-]+\.)+[\w-]{2,4}$/  //esta expresion regualar nos permite validar que un correo este correto con dominios de menos de dos caracteres y no mayores a cuatro
	if(RegExCorreo.test(p_correo))
		{
			return true
		}
		return false
}

//valida la entrada del comentario verificando que el nombre,correo y asunto no esten vacidos y valida que el correo este escrito correctamente
function valida_comentario(p_nombre,p_correo,p_asunto)
{
	if(vacio(p_nombre)&& vacio (p_correo)&& vacio(p_asunto))
	{
		if(valida_correo(p_correo))
		{
			return true
		}
		else
		{
			alert("por favor escribir correo valido");
			return false
		}
	}
	alert("por favor llenar los campos");
	return false
}

//valida el registro de la empresa en el archivo ("registro.php") verificando que los campos que no esten vacidos y que el chekbox este selecionado
function valida_registro(p_empresa,p_pass,p_confirma,p_propietario,p_cedula,p_nit,p_direccion,p_telefono,p_ciudad,p_correo,p_Ckacepto)
{
	if(vacio(p_empresa)&& vacio(p_pass)&& 
           vacio(p_confirma) && vacio(p_propietario) && 
           vacio(p_cedula) && vacio(p_nit) && 
           vacio(p_direccion) && vacio(p_telefono) && 
           vacio(p_ciudad) && vacio(p_correo))
	{
		if(p_Ckacepto.checked)
		{
			if(valida_unico(p_cedula))
			{

			 if(igualPass(p_pass,p_confirma))
			    {
				if(valida_correo(p_correo))
				{
					return true					
				}else{alert("por favor escribir un correo valido"); return false}
	                   }else{alert("Contraseñas No coinciden. Verifique¡¡¡"); return false}
			}else{alert("por favor digitar la cedula sin puntos ni comas");return false}
		}else{alert("por favor seleccionar la casilla Acepto");return false }
	}
	alert("por favor verificar que todos los campos esten llenos");
	return false;	
}

//vadilida que los campos en el registro del deudor ("registro_deudor.php") no esten vacidos y que el checkbox este selecionado
function valida_registroDeudor(p_nombre,p_identificacion,p_ciudad,p_valordeuda,p_tiempodeuda,p_fecha,p_Ckacepto)
{
	
	if (vacio(p_nombre)&&vacio(p_identificacion)&&vacio(p_ciudad)&&vacio(p_valordeuda)&&vacio(p_tiempodeuda)&&vacio(p_fecha))
	{		
		if (p_Ckacepto.checked)
		{
			if(valida_unico(p_identificacion))
			{
				return true
			}else{alert("verificar que la identificacion no tenga puntos ni comas");return false}
		}else{alert("por favor seleccionar la casilla Acepto");return false}		
	}
	alert("por favor verificar que todos los campos esten llenos");
	return false;
	
}