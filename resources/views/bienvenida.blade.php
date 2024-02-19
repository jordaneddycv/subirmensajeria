<h1>hola</h1>

<form action="{{url('login')}}" method="get">
    @csrf
    <p>Escribe tu nombre</p>
    <input type="text" name="nombre">
    <input type="submit" value="acceder">

</form>