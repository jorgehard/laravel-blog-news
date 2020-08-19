@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categorias/{{$cat->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria:</label>
                    <input type="text" name="nomeCategoria" value="{{$cat->nome}}" placeholder="Categoria" class="form-control input-sm" id="nomeCategoria" required />
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                <button type="reset" class="btn btn-sm btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
