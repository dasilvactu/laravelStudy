<h3>NOVO Cliente</h3>

<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <input type="text" name="nome" id="">
    <input type="submit" value="salvar" >
</form>