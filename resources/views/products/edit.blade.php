






@extends('app')

@section('content')
<h1>Edição do Produto</h1>

<form action="{{route('products.update', $product->id ) }}" method="post">
  @csrf
  @method('PUT')
<div class="mb-3">
  <label for="" class="form-label">Nome</label>
  <input type="text" class="form-control" id="" name="name" placeholder="" value="{{$product->name}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Preço</label>
  <input type="text" class="form-control" id="" name="price" placeholder="" value="{{$product->price}}">
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-success">Salvar</button>
</div>
</form>
@endsection