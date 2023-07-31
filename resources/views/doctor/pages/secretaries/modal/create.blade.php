<form action="{{route('secreatries.index')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add new Secretary') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                  <div class="form-group">
                        <label for="picture">Avatar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="picture" name="picture" accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="picture">Choose file</label>
                        </div>
                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle">
                            <div class="kt-avatar__holder" style="background-image: url('{{ isset($patient) ? asset('storage/' . $patient->picture) : 'http://keenthemes.com/metronic/preview/default/custom/user/assets/media/users/300_20.jpg' }}')"></div>
                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen"></i>
                            </label>
                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                <i class="fa fa-times"></i>
                            </span>
                        </div>
                    </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('First Name') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter first name" name="first_name">
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                                
                            
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Last Name') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter last name" name="last_name">
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('National ID Number') }}:</strong>
                            <input type="number" class="form-control" placeholder="enter national_id" name="national_id">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Address') }}:</strong>
                            <input type="text" class="form-control" name="address" placeholder="enter your adress">
                        </div>
                </div>
              
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Email') }}:</strong>
                            <input type="email" class="form-control" placeholder="enter your Email" name="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Password') }}:</strong>
                            <input type="password" class="form-control" placeholder="enter password" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Birth Date') }}:</strong>
                            <input type="date" class="form-control" placeholder="" name="birth_date">
                        </div>
                </div>
                 <div class="form-group">
                                    <label>Gender</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-venus-mars"></i></span></div>
                                        <select class="form-control" name="gender" id="gender">
                                            <option>Select Gender</option>
                                            <option
                                                value="male">
                                                male
                                            </option>
                                            <option
                                                value="female" >
                                                female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                 <div class="form-group">
                                    <label>LandLine Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                                        <input id="phone" class="form-control" type="number" name="phone_number" >
                                            @if ($errors->has('phone_number'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                                </span>
                                             @endif
                                               

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile"></i></span></div>
                                        <input id="mobile" class="form-control" type="number" name="mobile">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Emergency Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-h-square"></i></span></div>
                                        <input id="emergency" class="form-control" type="number" name="emergency">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-first-aid"></i></span></div>
                                        <input id="blood_group" class="form-control" type="text" name="blood_group">
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