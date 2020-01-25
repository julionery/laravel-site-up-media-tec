<div class="row" style="padding: 20px">
    <div class="col-sm-9">
        <p>Campos com <font color="red">*</font> são obrigatórios!</p>
    </div>
    <div class="col-sm-1">
        <label>Ativo?</label>
    </div>
    <div class="col-sm-2">
        <select class="selectpicker" name="ativo">
            <option value="nao" {{(isset($registro->ativo) && $registro->ativo == 'nao' ? 'selected' : "")}}>Não
            </option>
            <option value="sim" {{(isset($registro->ativo) && $registro->ativo == 'sim' ? 'selected' : "")}}>Sim
            </option>
        </select>
    </div>
</div>
<div class="container">

    <div class="input-field">
        <div class="form-group fg-line">
            <label>Nome: *</label>
            <input type="text" name="nome" class="form-control input-sm"
                   value="{{ isset($registro->nome)? $registro->nome : ''  }}" required>
        </div>
    </div>
    <div class="row">
    <div class="input-field col-sm-8">
        <div class="form-group fg-line">
            <label>Descrição:</label>
            <input type="text" name="descricao" class="form-control input-sm"
                   value="{{ isset($registro->descricao)? $registro->descricao : ''  }}">
        </div>
    </div>
    <div class="col-sm-4 col-md-4">
        <label>Categoria: *</label>
        <div class="input-field">
            <select class="selectpicker" name="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{(isset($registro->categoria_id) && $registro->categoria_id == $categoria->id ? 'selected' : "") }}> {{$categoria->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <div class="fg-line">
                    <label>Preço: *</label>
                    <input type="number" name="preco" class="form-control input-sm"
                           value="{{ isset($registro->preco)? $registro->preco : ''  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <div class="fg-line">
                    <label>Preço Custo: </label>
                    <input type="number" name="preco_custo" class="form-control input-sm"
                           value="{{ isset($registro->preco_custo)? $registro->preco : ''  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <div class="fg-line">
                    <label>Preço Compra: </label>
                    <input type="number" name="preco_compra" class="form-control input-sm"
                           value="{{ isset($registro->preco_compra)? $registro->preco : ''  }}">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <label>Imagem:</label>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                        <div>
            <span class="btn btn-info btn-file">
            <span class="fileinput-new">Selecione - Trocar</span>
                <span class="fileinput-exists"> a Imagem</span>
                <input type="file" name="imagem" @if(!isset($registro->imagem)) @endif>
            </span>
                            <a href="#" class="btn btn-danger fileinput-exists"
                               data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <label>Imagem Atual:</label>
                    <div class="input-field">
                        <div class="form-group">
                            @if(isset($registro->imagem))
                                <img width="350" src="{{ asset($registro->imagem) }}">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
    </div>
</div>
