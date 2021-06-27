<h3>Clientes</h3>
<a href="{{route('clientes.create')}}"> Novo Cliente
<ol>
    @foreach ($clientes as $c)
    <li>
        {{$c['nome']}} | 
        <a href="{{route('clientes.edit', $c['id'])}}"> Editar |
        <a href="{{route('clientes.show', $c['id'])}}"> Info
        </a>
    
    </li>
        
    @endforeach
</ol>