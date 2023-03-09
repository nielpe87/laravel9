




@extends('app')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-success">Novo</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Opções</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
   
  <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('users.destroy', $user->id)}}" method="post">
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
