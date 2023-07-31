<form action="{{route('patient.edit',$patient->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="modal fade text-left" id="ModalEdit{{$patient->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('edit Patient member') }}</h4>
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
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Last Name') }}:</strong>
                            <input type="text" class="form-control" placeholder="enter last name" name="last_name">
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
                            <input type="text" class="form-control" name="address">
                        </div>
                </div>
              
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Email') }}:</strong>
                            <input type="email" class="form-control" placeholder="enter your Email" name="email">
                        </div>
                </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Password') }}:</strong>
                            <input type="password" class="form-control" placeholder="enter password" name="password">
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
                                                value="male" @if(isset($patient)) {{$patient->gender == 'male' ? 'selected' : ''}} @endif>
                                                male
                                            </option>
                                            <option
                                                value="female" @if(isset($patient)) {{$patient->gender == 'female' ? 'selected' : ''}} @endif>
                                                female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                 <div class="form-group">
                                    <label>LandLine Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                                        <input id="phone" class="form-control" type="number" name="phone_number"
                                               value="{{isset($patient) ? $patient->phone_number : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile"></i></span></div>
                                        <input id="mobile" class="form-control" type="number" name="mobile"
                                               value="{{isset($patient) ? $patient->mobile : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Emergency Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-h-square"></i></span></div>
                                        <input id="emergency" class="form-control" type="number" name="emergency"
                                               value="{{isset($patient) ? $patient->emergency : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-first-aid"></i></span></div>
                                        <input id="blood_group" class="form-control" type="text" name="blood_group"
                                               value="{{isset($patient) ? $patient->blood_group : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Departments</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-h-square"></i></span></div>
                                        <select id="kt_select2_3" class="kt-select2 form-control" name="departments[]" id="departments" multiple>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}" @if(isset($patient)) {{$patient->hasDepartment($department->id) ? 'selected' : ''}} @endif>
                                                    {{$department->name}}
                                                </option>
                                            @endforeach
                                        </select>
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