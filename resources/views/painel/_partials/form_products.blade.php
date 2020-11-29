@csrf
<input type="hidden" id="product_id" value="{{ $product->id ?? '' }}" />
<div class="card-body">
    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <label for="input--name">Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="input--name"
                    value="{{ $product->name ?? old('name') }}" autocomplete="off">
                <div class="invalid-feedback">
                    name
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="input--description">Descrição</label>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                    id="input--description" value="{{ $product->description ?? old('description') }}"
                    autocomplete="off">
                <div class="invalid-feedback">
                    description
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="input--price">Preço</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                    id="input--price" value="{{ $product->price ?? old('price') }}" autocomplete="off">
                <div class="invalid-feedback">
                    price
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="input--type">Tipo</label>
                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="input--type"
                    value="{{ $product->type ?? old('type') }}" autocomplete="off">
                <div class="invalid-feedback">
                    type
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="input--qnt">Qnt</label>
                <input type="text" name="qnt" class="form-control @error('qnt') is-invalid @enderror" id="input--qnt"
                    value="{{ $product->qnt ?? old('qnt') }}" autocomplete="off">
                <div class="invalid-feedback">
                    qnt
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="input--min_qnt">Quantidade Minima</label>
                <input type="text" name="min_qnt" class="form-control @error('min_qnt') is-invalid @enderror"
                    id="input--min_qnt" value="{{ $product->min_qnt ?? old('min_qnt') }}" autocomplete="off">
                <div class="invalid-feedback">
                    min_qnt
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>* Imagem:</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="img" style="    width: 100px;">
                @if (isset($product->img_url))
                    <img src="{{ asset('storage/' . $product->img_url) }}" alt="" class="img-fluid">
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="input--status">Status</label>
                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror"
                    id="input--status" value="{{ $product->status ?? old('status') }}" autocomplete="off">
                <div class="invalid-feedback">
                    status
                </div>
            </div>
        </div>

    </div>
</div>

<div class="card-footer">
    <input type="submit" class="btn btn-primary"
        onclick="this.disabled = true; this.value = 'Salvando…'; this.form.submit();" value="Salvar">
</div>
