function calculeimc(form)
{
	var mpeso=0;
	var maltura=0;
	var mimc=0;
	
	mpeso=form.peso.value;
	maltura=form.altura.value;
	
	if ( mpeso > 0 && maltura > 0 )
	{
    mimc = (mpeso / (maltura*maltura) *10000 ); 
    mimc = mimc.toFixed(2);
	
	if (mimc < 18.5)
	  {alert ("Delgadez IMC: " +  mimc);}
	else
	  {
	  if (mimc < 25)		
	    {
		  	alert("Peso Normal IMC: " + mimc);
		}	
	      else
		    {
				alert("Sobrepeso IMC: " + mimc)
			}			  
     	}
     
	}
	else
	{
		alert ("Por favor verifique los datos ingresados");
	}	
	form.imc.value = mimc;
};