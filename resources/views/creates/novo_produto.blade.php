@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome Produto:</label>
                    <input type="text" name="nomeProduto" placeholder="Produto" class="form-control input-sm" id="nomeProduto" required />
                </div>                
                <div class="form-group">
                    <label for="estoqueProduto">Estoque:</label>
                    <input type="text" name="estoqueProduto" placeholder="Estoque" class="form-control input-sm" id="estoqueProduto" required />
                </div>       
                <div class="form-group">
                    <label for="precoProduto">Preço:</label>
                    <input type="text" name="precoProduto" placeholder="Preço" class="form-control input-sm" id="precoProduto" required />
                </div>  
                <div class="form-group">
                    <label for="categoriaProduto">Categorias:</label>
                    <select name="categoriaProduto" class="form-control input-sm" id="categoriaProduto" required>
                        <option value="">Selecione uma categoria</option>
                        
                        @foreach ($cat as $cats)
                            <option value="{{ $cats->id }}">{{ $cats->nome }}</option>
                        @endforeach
                    </select>
                </div>



                <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@endsection
