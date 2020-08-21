@extends('layout.admin')

@section('title', 'Categorias')

@section('content')

<div class="container p-4">
  <h2 class="title_dash">Lista de Categorias   <button data-toggle="modal" data-target="#exampleModal" class="btn btn-xs btn-new btn-primary float-right d-flex align-items-center">Cadastrar Novo <span class="material-icons">add</span></button></h2>
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
              <td width="5%"><button class="btn btn-xs btn-size btn-info d-flex align-items-center"><span class="material-icons">create</span></button></td>
              <td width="5%"><button class="btn btn-xs btn-size btn-danger d-flex align-items-center"><span class="material-icons">delete</span></button></td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nameCateg">Nome:</label>
            <input type="text" name="category" class="form-control" id="nameCateg" placeholder="Nome da Categoria">
          </div>
          <div class="form-group">
            <label for="keywordsCateg">KeyWords:</label>
            <input type="text" name="keywords" class="form-control" id="keywordsCateg" placeholder="Palavras chaves separadas por virgula">
          </div>
          <div class="row d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-submit btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
