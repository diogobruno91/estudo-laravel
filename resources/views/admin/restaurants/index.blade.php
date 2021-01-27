<h1>Restaurantes</h1>
<a href="{{route('restaurant.new')}}">Novo</a>
<hr>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Criado em:</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($restaurants as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <a href="{{route('restaurant.edit', ['restaurant' => $item->id])}}">EDITAR</a>
                    <a href="{{route('restaurant.delete', ['id' => $item->id])}}">EXCLUIR</a>
                </td>
            </tr>            
        @endforeach
    </tbody>
</table>