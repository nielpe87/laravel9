




@extends('app')

@section('content')
<h1>Produtos</h1>
<a href="{{ route('products.create') }}" class="btn btn-success">Novo</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preco</th>
      <th scope="col">Opções</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
   
  <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>
        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('products.destroy', $product->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Excluir</a>
        </form>
      </td>
      
    </tr>
    @endforeach
   
  </tbody>
</table>
    
@endsection
