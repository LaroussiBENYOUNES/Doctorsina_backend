
<form action="{{route('temperature.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreateTemperature" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add Temperature Value ') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Temperature Value (c°) ') }}:</strong>
                            <input type="number" class="form-control measurement-date" placeholder="enter your temperature" name="value">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Mesaurement Date') }}:</strong>
                            <input type="date" id="added_at" class="form-control measurement-date" required name="added_at">
                        </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-1">
                        <button type="button" class="btn grey btn-outline-secondary" data-bs-dismiss="modal">{{ __('Back') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


