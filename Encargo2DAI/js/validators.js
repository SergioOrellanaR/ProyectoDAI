function validaRut(campo){
	if ( campo.length === 0 ){ return false; }
	if ( campo.length < 8 ){ return false; }

	campo = campo.replace('-','');
	campo = campo.replace(/\./g,'');

	var suma = 0;
	var caracteres = "1234567890kK";
	var contador = 0;    
	for (var i=0; i < campo.length; i++){
		u = campo.substring(i, i + 1);
		if (caracteres.indexOf(u) !== -1)
		contador ++;
	}
	if ( contador===0 ) { return false }
	
	var rut = campo.substring(0,campo.length-1);
	var drut = campo.substring( campo.length-1 );
	var dvr = '0';
	var mul = 2;
	
	for (i= rut.length -1 ; i >= 0; i--) {
		suma = suma + rut.charAt(i) * mul;
                if (mul == 7) 	mul = 2;
		        else	mul++;
	}
	res = suma % 11;
	if (res==1)		dvr = 'k';
                else if (res==0) dvr = '0';
	else {
		dvi = 11-res;
		dvr = dvi + "";
	}
	if ( dvr !== drut.toLowerCase() ) { return false; }
	else { return true; }
}

function validaPassword()
{
    var pass1 = $('#pass1').val();
    var pass2 = $('#pass2').val();
    
    if (pass1 === pass2)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validaInformacionParticular()
{
    if (validaRut($('#Rut').val()) === true && validaPassword() === true)
    {
        $("#frmAvanzarRegistro").attr("action", "controlador/registrarParticular.php");
        $("#frmAvanzarRegistro").attr("method", "post");
        $("#btnSend").attr("type","submit");
    }
    else
    {
        if (validaRut($('#Rut').val()) === false)
        {
            alert("Debe proporcionar un rut válido para continuar");
        }
        else
        {
            if (validaPassword() === false)
            {
                alert("Las contraseñas deben coincidir para poder continuar");
            }
        }
    }
}

function validaInformacionEmpresa()
{
    if (validaRut($('#Rut').val()) === true && validaPassword() === true && validaRut($('#RutContacto').val()) === true)
    {
        $("#frmAvanzarRegistro").attr("action", "controlador/registrarParticular.php");
        $("#frmAvanzarRegistro").attr("method", "post");
        $("#btnSend").attr("type","submit");
    }
    else
    {
        if (validaRut($('#Rut').val()) === false)
        {
            alert("Debe proporcionar un rut válido de empresa para continuar");
        }
        else
        {
            if (validaPassword() === false)
            {
                alert("Las contraseñas deben coincidir para poder continuar");
            }
            else
            {
                if (validaRut($('#RutContacto').val()) === false)
                {
                    alert("Debe proporcionar un rut válido de contacto para continuar");
                }
            }
        }
    }
}
