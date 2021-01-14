<h1>Alta </h1>

</div>
</div>


<div class="contenido" align="center">	
<center>
<table>
	<tr>
     <td>Nombre</td>
     <td>@if($errors->first('nombre'))
     <p><i> {{ $errors->first('nombre') }}</i></p>
@endif </td> 
     <td>{{Form::text('nombre',old('nombre'))}}</td>
     </tr>
     <tr>
     <td>Apellidos</td>
     <td>@if($errors->first('apellidos'))
     <p><i> {{ $errors->first('apellidos') }}</i></p>
@endif     </td>               
     <td>{{Form::text('apellidos',old('apellidos'))}}</td>
     </tr>
     <tr>
     <td>email </td>
     <td>@if($errors->first('email'))
     <p><i> {{ $errors->first('email') }}</i></p>
@endif</td>
<td>{{Form::text('email',old('email'))}}</td>
</tr>
<tr>
<td>Telefono</td>
<td>@if($errors->first('telefono'))
<p><i> {{ $errors->first('telefono') }}</i></p>
@endif</td>
<td>{{Form::text('telefono',old('telefono'))}}</td>
</tr>
 
<tr>
<td>Password</td>
<td>@if($errors->first('password'))
<p><i> {{ $errors->first('password') }}</i></p>
@endif</td>
<td>{{Form::text('password',old('password'))}}</td>
</tr>

</table>
</center>

{{Form::submit('Guardar',['class' => 'btn btn-success'])}}
</div>