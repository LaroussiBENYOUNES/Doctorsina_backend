<form action="{{route('partner.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add new Partner ') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Partner Name') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter partner name" name="partner_name" required autofocus>
                         @if ($errors->has('partner_name'))
                                <span class="text-danger">{{ $errors->first('partner_name') }}</span>
                                @endif
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Description') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter description" name="desciption" required autofocus>
                                         @if ($errors->has('desciption'))
                                <span class="text-danger">{{ $errors->first('desciption') }}</span>
                                @endif
                        </div>
                </div>
              
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('LOGO') }}:</strong>
                            <input type="file" class="form-control" name="logo">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Web Site LINK') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter Web site link" name="site_web">
                        </div>
                </div>
              
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="button" class="btn grey btn-outline-secondary" data-bs-dismiss="modal">{{ __('Back') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>