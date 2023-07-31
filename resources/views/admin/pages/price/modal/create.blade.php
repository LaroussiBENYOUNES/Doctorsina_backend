<form action="{{route('admin.prices.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add new Price ') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Catégorie :') }}:</strong>
                                <select class="form-control" name="category_name"  required>
                                    <option value="">Sélectionner une catégorie</option>
                                    <option value="free">Free</option>
                                    <option value="silver">Silver</option>
                                    <option value="gold">Gold</option>
                                    <option value="premium">Premium</option>
                                 </select>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="option_price">Prix de l'option :</label>
                            <input type="text" class="form-control" name="option_price" value="{{ old('option_price') }}" required>
                                @if ($errors->has('option_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option_price') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
              
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <button type="button" class="btn grey btn-outline-secondary" data-bs-dismiss="modal">{{ __('Back') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>