Boton=document.getElementById('btn');

Boton.addEventListener('click',Validar_Registro);

function Validar_Registro()
{
    var Nombre=document.getElementById('N_usuario').value;
    var Contraseña=document.getElementById('Contrasena').value;
    var Contraseña_2=document.getElementById('Contrasena_2').value;

    if((Contraseña.length)<8)
    {

        alert("Lo siento "+Nombre+" la contraseña es demasiado corta, debe tener al menos 8 caracteres");
        document.forms.Formulario.action="#";
    }

    if(Contraseña!=Contraseña_2)
    {
        alert("Verifique que las contraseñas coincidan");
        document.forms.Formulario.action="#";
    }
}
