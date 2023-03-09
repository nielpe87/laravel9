






@extends('app')

@section('content')
<h1>Edição do Usuário</h1>

<form action="" method="post">
  @csrf
  @method('PUT')
<div class="mb-3">
  <label for="" class="form-label">Nome</label>
  <input type="text" class="form-control" id="" name="name" placeholder="" value="{{$user->name}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Email</label>
  <input type="email" class="form-control" id="" name="email" placeholder="name@example.com" value="{{$user->email}}">
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-success">Salvar</button>
</div>
</form>
@endsection