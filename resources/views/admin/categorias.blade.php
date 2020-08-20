@extends('layout.admin')

@section('content')

<div class="container p-4">
<h2>Lista de Categorias</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">N</th>
          <th scope="col">Nome</th>
          <th scope="col">Keywords</th>
          <th scope="col">Editar</th>
          <th scope="col">Excluir</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categ as $c)
         
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $c['name'] }}</td>
              <td>{{ $c['keywords'] }}</td>
              <td>Editar</td>
              <td>Excluir</td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
