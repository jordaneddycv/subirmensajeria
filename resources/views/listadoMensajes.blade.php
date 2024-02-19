@php
  $session = Session();
  $nombre = $session->get('nombre');
@endphp
<script src="{{url('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{url('js/scripts.js')}}"></script>
<div>
    <h1>mensajes del chat {{ $nombre }}</h1>
    <div id="contenedor">

    </div>
    <input type="text" id="textoUsuario" name="textoUsuario">
    <button onclick="enviarMensaje()">enviar</button>
</div>