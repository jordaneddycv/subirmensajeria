<div>
    <h1>Acceso a la app de mensajeria</h1>
    <form action="{{url('login')}}" method="post">
        @csrf 
        {{-- eso de arriba es para queno se pueda enviar formularios que no sea de nuestra pagina web es contr ahackers --}}
        <label for="usuario">Nombre de usuario</label>
        <br>
        <input type="text" name="nombre">
        <br>
        <input type="submit" value="acceder"/>
    </form>
</div>