<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function calcul_age(){
 
		//calcul pro
	var	n_jour_n = document.getElementById("njour").value;
	var	n_mois_n = document.getElementById("nmois").value;
	var	n_annee_n = document.getElementById("nannee").value;

	var	p_jour_n = document.getElementById("pjour").value;
	var	p_mois_n = document.getElementById("pmois").value;
	var	p_annee_n = document.getElementById("pannee").value;

var age="";
age =  p_annee_n - n_annee_n;
			//calcul pro
 
	//calcul age
	var age="";
 
	if((p_annee_n=="")||(n_annee_n=="") ){
		var age="";
	}else{
		age =  p_annee_n - n_annee_n;
	}
	
	 // on affiche le résultat
	document.getElementById('reponse').innerHTML = age;
	

}
</script>
</head>
<body>
<form name="my_form" method="post" action="">
 <td><label for="regles"> Date de Naissance: </label></td>
	<td><input type="date" name="Naissance" id="Naissance" placeholder="Date de Naissance" onchange="calcul_age();" /></td>
		<td><label for="Prelevement"> Date Consultation:</label></td>
	<td><input type="date" name="Consultation" id="Consultation" placeholder="Consultation" onchange="calcul_age();"/></td>
<p> Date de Naissance:
 
 <select name="njour" id="njour"> 
 <option value="">jour</option>         
 <option value="1">1</option>      
 <option value="2">2</option>       
 <option value="3">3</option>       
 <option value="4">4</option>     
 <option value="5">5</option>     
 <option value="6">6</option>      
 <option value="7">7</option>  
 <option value="8">8 </option>    
 <option value="9">9</option>     
 <option value="10">10 </option>       
 <option value="11">11</option>      
 <option value="12">12</option>  
   
 </select> 
 
 -    
 <select name="nmois" id="nmois">   
 <option value="">mois</option>         
 <option value="01">Janvier</option>      
 <option value="02">Février</option>       
 <option value="03">Mars</option>       
 <option value="04">Avril</option>     
 <option value="05">Mai</option>     
 <option value="06">Juin</option>      
 <option value="07">Juillet</option>  
 <option value="08">Août </option>    
 <option value="09">Septembre</option>     
 <option value="10">Octobre </option>       
 <option value="11">Novembre</option>      
 <option value="12">Décembre</option>    
 </select> 
 
 - 
 
 <select name="nannée" id="nannee" onchange="calcul_age();"> 
 <option value=""></option> 
 <option>1993</option> 
 <option>1994</option>  
 <option>1995</option>  
 <option>1996</option> 
 <option>1997</option>  
 <option>1998</option>  
 <option>1999</option>
 <option>2001</option>  
 <option>2002</option>   
 <option>2003</option>
 <option>2005</option>   
 <option>2006</option>  
 <option>2007</option>  
 <option>2008</option>  
 <option>2009</option> 
 </select> 
 
<br />
<p> Date Consultation:
 
 <select name="pjour" id="pjour"> 
 <option>jour</option>          
 <option>1</option>      
 <option>2</option>       
 <option>3</option>       
 <option>4</option>     
 <option>5</option>     
 <option>6</option>      
 <option>7</option>  
 <option>8 </option>    
 <option>9</option>     
 <option>10 </option>       
 <option>11</option>      
 <option>12</option>    
 </select> 
 
 -    
 <select name="pmois" id="pmois">    
  <option value="">mois</option>        
 <option value="01">Janvier</option>      
 <option value="02">Février</option>       
 <option value="03">Mars</option>       
 <option value="04">Avril</option>     
 <option value="05">Mai</option>     
 <option value="06">Juin</option>      
 <option value="07">Juillet</option>  
 <option value="08">Août </option>    
 <option value="09">Septembre</option>     
 <option value="10">Octobre </option>       
 <option value="11">Novembre</option>      
 <option value="12">Décembre</option>    
 </select> 
 
 - 
 
 <select name="pannée" id="pannee" onchange="calcul_age();">  
 	 <option value="">annee</option> 
 <option>1993</option> 
 <option>1994</option>  
 <option>1995</option>  
 <option>1996</option> 
 <option>1997</option>  
 <option>1998</option>  
 <option>1999</option>
 <option>2001</option>  
 <option>2002</option>   
 <option>2003</option>
 <option>2005</option>   
 <option>2006</option>  
 <option>2007</option>  
 <option>2008</option>  
 <option>2009</option> 
 </select> 
<div id="reponse"><!-- la réponse va s'inscrire ici --></div>
 
	<td><label for="Prelevement"> Age:</label><div id="reponse"><!-- la réponse va s'inscrire ici --></div> </td>
	
</form>
</body>
</html>