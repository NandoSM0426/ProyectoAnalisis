Hola soy el create y estoy list
<form action="{{url('/tag')}}" method="post" enctype="multipart/form-data" > 
@csrf
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" id="Nombre" >
 <br>
 <label for= "Tipo"> Tipo </label>
<input type= "text" name= "Tipo" id= "Tipo" > 
<br>
 <input type="submit" value="Guardar" >
 <br>
</form>
