<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cargos" class="form-label">{{ __('Cargos') }}</label>
            <input type="text" name="cargos" class="form-control @error('cargos') is-invalid @enderror" value="{{ old('cargos', $cargo?->cargos) }}" id="cargos" placeholder="Cargos">
            {!! $errors->first('cargos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>