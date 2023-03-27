






@extends('app')

@section('content')
<h1>Cadastro de Usuário</h1>

<form action="{{ route('users.store') }}" method="post">
  @csrf
<div class="mb-3">
  <label for="" class="form-label">Nome</label>
  <input type="text" class="form-control" id="" name="name" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Email</label>
  <input type="email" class="form-control" id="" name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Senha</label>
  <input type="password" class="form-control" name="password" id="">
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-success">Salvar</button>
</div>
</form>
@endsection