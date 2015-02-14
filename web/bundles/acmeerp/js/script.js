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

			document.getElementById('empresa').onclick=function(event)
			{
				perfilAjax();
			}

			document.getElementById('perfil').onclick=function(event)
			{
				tableroJson();
			}

			function perfilAjax()
			{
				//parametros
				ins=document.getElementById('empresa');
				empId=ins.options[ins.selectedIndex].value;

				//peticion ajax
				var request = $.ajax(
				{
					url: "../perfilAjax/",
					type: "POST",
					data: {empId:empId},
					dataType: "html"
				});
				
				request.done(function(msg) 
				{
					$("#perfil").html( msg );
				});
				
				request.fail(function(jqXHR, textStatus) 
				{
					alert( "Request failed: " + textStatus );
				});
			}

			
			function tableroJson()
			{
				//vars
				insPerf=document.getElementById('perfil');
				perfId=insPerf.options[insPerf.selectedIndex].value;

				//instance
				insTable=document.permiso.tablero;
			    insTam=insTable.length;
			    $('#tabla input[type=checkbox]').attr('checked',false);

				//peticion json
				$.ajax({

				    type:"POST",
				    url: '../tableroJson/',
				    data:{perfId:perfId},
				    dataType: 'json',
				    success: function(data) 
				    {
				    	for(i=0;i<insTam;i++)
				    	{
				    		insTable[i].checked=false;

				    		for(j=0;j<data.length;j++)
				    		{
				    			//console.log(data[j]);
				    			if(insTable[i].value==data[j]['tablero_id'])
				    			{
				    				insTable[i].checked=true;
				    			}
				    		}
				    	}
					}

			    });
			}
			


		break;

		default:
		break;
	}
}