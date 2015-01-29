window.onload=function()
{
	view=document.getElementById('view').value;
	console.log(view);
	
	switch(view)
	{
		case 'login':

			document.getElementById('logear').onclick=function(event)
			{
				console.log("logear");
				document.login.accion.value="logear";
				document.login.submit();
			}

		break;

		case 'home':

			document.getElementById('cerrar').onclick=function(event)
			{
				console.log('cerrar');
				document.home.accion.value="cerrar";
				document.home.submit();
			}

		break;

		case 'permiso':

			document.getElementById('cerrar').onclick=function(event)
			{
				console.log('cerrar');
				document.permiso.accion.value="cerrar";
				document.permiso.submit();
			}

		break;

		default:
		break;
	}
}