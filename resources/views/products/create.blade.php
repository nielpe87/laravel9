






@extends('app')

@section('content')
<h1>Cadastro de Produto</h1>

<form action="{{ route('products.store') }}" method="post">
  @csrf
<div class="mb-3">
  <label for="" class="form-label">Nome</label>
  <input type="text" class="form-control" id="" name="name" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Preço</label>
  <input type="text" class="form-control" id="" name="price" placeholder="">
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-success">Salvar</button>
</div>
</form>
@endsection