<h1>Inserção de Restaurante</h1>
<hr>
{{-- {{var_dump($errors->all())}} --}}

<form action="{{route('restaurant.store')}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Nome do Restaurante</label><br>
        <input type="text" name="name" value="{{old('name')}}">
        @if($errors->has('name'))
            {{$errors->first('name')}}
        @endif
    </p>

    <p>
        <label>Endereço</label><br>
        <input type="text" name="address" value="{{old('address')}}">
        @if($errors->has('address'))
            {{$errors->first('address')}}
        @endif
    </p>

    <p>
        <label>Fale sobre o Restaurante</label><br>
        <textarea name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
        @if($errors->has('description'))
            {{$errors->first('description')}}
        @endif
    </p>

    <input type="submit" value="Cadastrar">

</form>