<div class="row" style="padding: 20px">
    <div class="col-sm-9">
        <p>Campos com <font color="red">*</font> são obrigatórios!</p>
    </div>
    <div class="col-sm-1">
        <label>Publicado?</label>
    </div>
    <div class="col-sm-2">
        <select class="selectpicker" name="publicar">
            <option value="nao" {{(isset($registro->publicar) && $registro->publicar == 'nao' ? 'selected' : "")}}>Não
            </option>
            <option value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim' ? 'selected' : "")}}>Sim
            </option>
        </select>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Título: *</label>
                    <input type="text" class="form-control" name="titulo" required
                           value="{{ isset($registro->titulo)? $registro->titulo : ''  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Data:</label>
                    <input type="text" class="form-control" name="data" required
                           value="{{ (isset($registro->data)? $registro->data : '')  }}">
                </div>
            </div>
        </div>
    </div>

    <div class="input-field">
        <div class="form-group fg-line">
            <label>Texto:</label>
            <textarea name="texto" class="form-control" rows="5">
        {{ isset($registro->texto)? $registro->texto : '' }}
    </textarea>
        </div>
    </div>
</div>
