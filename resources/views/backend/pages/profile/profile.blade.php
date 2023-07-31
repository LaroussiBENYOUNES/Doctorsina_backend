<form action="{{url('profileEdit',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="modal fade text-left" id="ModalCreate{{Auth::user()->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Edit Profile') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('First Name') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter first name" name="first_name" value="{{Auth::user()->first_name}}">
                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Last Name') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter last name" name="last_name" value="{{Auth::user()->last_name}}">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Email') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter email" name="email" value="{{Auth::user()->email}}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Picture') }}:</strong>
                            <input type="file" class="form-control" name="picture" ">
                            @if ($errors->has('picture'))
                                <span class="text-danger">{{ $errors->first('picture') }}</span>
                            @endif
                        </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Phone number') }}:</strong>
                            <input type="number" class="form-control" placeholder="enter your phone number" name="phone_number" value="{{Auth::user()->phone_number}}">
                            @if ($errors->has('phone_number'))
                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                            @endif
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
