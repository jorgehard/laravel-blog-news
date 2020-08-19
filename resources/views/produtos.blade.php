@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Pagina de produtos</h5>
                <table id="tabelaProdutos" class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nome Produto</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            <a href="#" onClick="novoProduto()" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                 <form id="formProduto" class="form-horizontal">
                    <div class="modal-header">
                         <h5 class="modal-title">
                             Novo Produto
                         </h5>
                     </div>
                     <div class="modal-body">
                        <input type="hidden" id="id" />
                        <div class="form-group">
                            <label for="nomeProduto" class="control-label">Nome Produto:</label>
                            <div class="input-group">
                                <input type="text" name="nomeProduto" placeholder="Produto" id="nomeProduto" class="form-control input-sm" />
                            </div>
                        </div>                
                        <div class="form-group">
                            <label for="precoProduto" class="control-label">Preço Produto:</label>
                            <div class="input-group">
                                <input type="number" name="precoProduto" placeholder="Preço" id="precoProduto" class="form-control input-sm" />
                            </div>
                        </div>      
                        <div class="form-group">
                            <label for="quantidadeProduto" class="control-label">Quantidade Produto:</label>
                            <div class="input-group">
                                <input type="number" name="quantidadeProduto" placeholder="Quantidade" id="quantidadeProduto" class="form-control input-sm" />
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="categoriaProduto" class="control-label">Categorias:</label>
                            <div class="input-group">
                                <select name="categoriaProduto" id="categoriaProduto" class="form-control input-sm">
                                    
                                </select>
                            </div>
                        </div>  
                     </div>
                     <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                     </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });

        function novoProduto(){
            $('#dlgProdutos').modal('show');
            $('#formProduto input').val("");
        }
        function carregarCategorias(){
            $.getJSON('/api/categorias', function(data){
                data.map((result) => {
                    let opcao = `<option value="${result.id}">${result.nome}</option>`;
                    $('#categoriaProduto').append(opcao);
                })
            });     
        }
        function criarLinha(result){
            let linha = `
                        <tr id="linha${result.id}">
                            <td>${result.id}</td>
                            <td>${result.nome}</td>
                            <td>${result.estoque}</td>
                            <td>${result.preco}</td>
                            <td>${result.categoria_id}</td>
                            <td>
                                <button class="btn btn-sm btn-primary" onClick="editar(${result.id})">Editar</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger" onclick="remover(${result.id})">Excluir</button>
                            </td>
                        </tr>
                    `;
            return linha;
        }
        function carregarProdutos(){
            $('#tabelaProdutos>tbody').html('');
            $.getJSON('/api/produtos', function(data){
                data.map((result) => {
                    linha = criarLinha(result);
                    $('#tabelaProdutos>tbody').append(linha);
                })
            });     
        }
        function editar(id){
            $.getJSON('/api/produtos/'+id, function(data){
                $('#id').val(data.id);
                $('#nomeProduto').val(data.nome);
                $('#precoProduto').val(data.preco);
                $('#quantidadeProduto').val(data.estoque);
                $('#categoriaProduto').val(data.categoria_id);
                $('#dlgProdutos').modal('show');
            }); 
        }
        function remover(id){
            $.ajax({
                type: 'DELETE',
                url: '/api/produtos/' + id,
                context: this,
                success: function(){
                    $('#tabelaProdutos>tbody>#linha'+id).hide();
                },
                error: function(error){
                    console.log(error);
                }

            });
        }
        function salvarProduto(){
            let prods = { 
                id: $('#id').val(),
                nome: $('#nomeProduto').val(), 
                preco: $('#precoProduto').val(), 
                estoque: $('#quantidadeProduto').val(), 
                categoria_id: $('#categoriaProduto').val() 
            }
            $.ajax({
                type: 'PUT',
                url: '/api/produtos/' + prods.id,
                data: prods,
                context: this,
                success: function(){
                    console.log('editado');
                    let linha = $('#tabelaProdutos>tbody>tr#linha'+prods.id);
                    if(linha){
                        linha[0].cells[1].textContent = prods.nome;
                        linha[0].cells[2].textContent = prods.estoque;
                        linha[0].cells[3].textContent = prods.preco;
                        linha[0].cells[4].textContent = prods.categoria_id;
                    }
                },
                error: function(error){
                    console.log(error);
                }

            });
        }
        function criarProduto(){
            let prods = { 
                nome: $('#nomeProduto').val(), 
                preco: $('#precoProduto').val(), 
                estoque: $('#quantidadeProduto').val(), 
                categoria_id: $('#categoriaProduto').val() 
            }
            $.post('/api/produtos', prods, function(data){
                produto = JSON.parse(data);
                linha = criarLinha(produto);
                $('#tabelaProdutos>tbody').prepend(linha);
            });
        }
        $('#formProduto').submit(function(event){
            event.preventDefault();
            if($('#id').val() != ''){
                salvarProduto();
            }else{
                criarProduto();
            }
            $('#dlgProdutos').modal('hide');
        });
        
        $(function(){
            carregarCategorias();
            carregarProdutos();
        });
    </script>   
@endsection