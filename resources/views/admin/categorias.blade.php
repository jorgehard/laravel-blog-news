@extends('layout.admin')

@section('title', 'Categorias')

@section('content')

<div class="container p-4">
  <h2 class="title_dash">Lista de Categorias   <button data-toggle="modal" data-target="#postModal" class="btn btn-xs btn-new btn-primary float-right d-flex align-items-center">Cadastrar Novo <span class="material-icons">add</span></button></h2>
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
              <td width="5%">
                <button href="#" class="btn btn-xs btn-size btn-info"><span class="material-icons">create</span></button>
              </td>
              <td width="5%">
                <form method="POST" action="/admin/categorias/{{ $c->id }}">
                  @csrf
                  @method('DELETE')
                  <div class="form-group">
                    <button id="delete-category" class="btn btn-xs btn-size btn-danger">
                      <span class="material-icons">delete</span>
                    </button>
                  </div>
                </form>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>

<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalLabel">Cadastrar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/categorias">
           @csrf
          <div class="form-group">
            <label for="category">Nome:</label>
            <input type="text" name="category" class="@error('category') is-invalid @enderror form-control input-sm" id="category" value="{{ old('category') }}" placeholder="Nome da Categoria">
            @error('category')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">

            <label for="keywords">KeyWords:</label>

            <input 
              type="text" 
              name="keywords" 
              id="keywords"
              class="@error('category') is-invalid @enderror form-control input-sm" 
              value="{{ old('category') }}" 
              placeholder="Palavras chaves separadas por virgula"
            />
            @error('keywords')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="row d-flex justify-content-center m-4 pt-4">
            <button type="submit" class="btn btn-submit btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@if (count($errors) > 0)
    @section('javascript')
      <script type="text/javascript">
        $(document).ready(function () {
            $('#postModal').modal('show');
        });
      </script>
    @endsection
{{--  @else
  @section('javascript')
    <script type="text/javascript">
      $(document).ready(function () {
          console.log('ok');
      });
    </script>
  @endsection  --}}
@endif
