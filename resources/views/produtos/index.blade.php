@extends('layouts.app')

@section('content')
    @if (session('mensagem_sucesso'))
        <div class="alert alert-success">
            {{ session('mensagem_sucesso') }}
        </div>
    @endif
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}} </li>
                @endforeach
            </ul>
        </div>
    @endif
<table class= "table table-striped" >
    <thead>
        <tr>
            <th scope= "col" > # </th>
            <th scope= "col" > Nome </th>
            <th scope= "col" > Valor Unitário </th>
            <th scope= "col" > situação </th>
            <th scope= "col" > Quantidade </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>  {{ $product->id }} </td>
                <td > {{ $product->nome }} </td>
                <td>  {{ $product->valor_unitario }}  </td>
                <td>  {{ $product->quantidade }}  </td>
                <td>  {{ $product->situacao }}  </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection