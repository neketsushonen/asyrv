 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyecci�n de Objetos PHP - REST</a></h3>
        
        <p align="justify">
        Aunque PHP Object Injection no es una vulnerabilidad muy com�n y tambi�n dif�cil de explotar, se considera que es una vulnerabilidad realmente peligrosa, ya que podr�a 
		llevar a un atacante a realizar diferentes tipos de ataques maliciosos, como Inyecci�n de c�digo, Inyecci�n SQL, Rutas transversales y Denegaci�n de servicio,
	        seg�n el contexto de la aplicaci�n. La vulnerabilidad de inyecci�n de objetos PHP ocurre cuando las entradas suministradas por el usuario no se sanitizan adecuadamente 
		antes de pasar a la funci�n PHP unserialize () en el servidor. Dado que PHP permite la serializaci�n de objetos, los atacantes podr�an pasar cadenas seriales ad-hoc 
		a las llamadas unserialize() vulnerables, lo que da como resultado una inyecci�n arbitraria de objetos PHP en el alcance de la aplicaci�n.</p><br><br>
         <p>Leer m�s de Inyecci�n de objetos PHP<br><br>
	<strong><a target="_blank"href="http://www.elladodelmal.com/2014/11/ataques-de-php-object-injection-en.html">http://www.elladodelmal.com/2014/11/ataques-de-php-object-injection-en.html</a></p></strong>
        <strong><a target="_blank"href="http://blog.alguien.site/2013/08/php-object-injection.html">http://blog.alguien.site/2013/08/php-object-injection.html</a></p></strong>
	<strong><a target="_blank"href="https://www.owasp.org/index.php/PHP_Object_Injection">https://www.owasp.org/index.php/PHP_Object_Injection</a></p></strong>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Enviar Mensaje al Back-End: 
            <form method='GET' action='#resultado' onSubmit="DeserializarObjeto(); return false;">
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%"  name="msj" id="msj" value='a:2:{i:0;s:5:"ASYRV";i:1;s:17:"Hackeando con PHP";}' ></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Enviar</button></div>
               </div> 
            </form>
        </p>
    </div>

    

<div id="resultado"></div>
</div>
<?php include_once('../../about.html'); ?>

<script>
function DeserializarObjeto() {
  var API = "/asyrv/vuln/obj-inject-rest/api.php/deserializar/"+$.base64.encode($("#msj").val());
  var tabla ="";
    $.ajax({url: API, dataType: "text", success: function(result){
        var myObj = JSON.parse(result);
        
        $("#resultado").html("<h3>Respuesta REST:</h3><pre>"+myObj+"</pre>");
    }});
 }
</script>
