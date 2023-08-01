<form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add new Doctor') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Section 1: Avatar -->
                            <div class="form-group">
                                <strong>{{ __('Avatar') }}:</strong>
                                <input type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" required>
                                @if ($errors->has('picture'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @else
                                    <span class="text-danger">Please select a picture.</span>
                                @endif
                            </div>

                            <!-- Section 2: First Name -->
                            <div class="form-group">
                                <strong>{{ __('First Name') }}:</strong>
                                <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="enter first name" name="first_name" required>
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @else
                                    <span class="text-danger">Please enter the first name.</span>
                                @endif
                            </div>

                            <!-- Section 3: Last Name -->
                            <div class="form-group">
                                <strong>{{ __('Last Name') }}:</strong>
                                <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="enter last name" name="last_name" required>
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @else
                                    <span class="text-danger">Please enter the last name.</span>
                                @endif
                            </div>

                            <!-- Section 4: National ID Number -->
                            <div class="form-group">
                                <strong>{{ __('National ID Number') }}:</strong>
                                <input type="text" class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}" placeholder="enter national_id" name="national_id" required>
                                @if ($errors->has('national_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('national_id') }}</strong>
                                    </span>
                                @else
                                    <span class="text-danger">Please enter National ID Number</span>
                                @endif
                            </div>

                            <!-- Section 5: Address -->
                            <div class="form-group">
                                <strong>{{ __('Address') }}:</strong>
                                <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="enter address" name="address" required>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @else
                                    <span class="text-danger">Please enter Address</span>
                                @endif
                            </div>

                            <!-- Section 6: Email -->
                            <div class="form-group">
                                <strong>{{ __('Email') }}:</strong>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="enter address" name="email" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @else
                                    <span class="text-danger">Please enter Email</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Section 7: Password -->
                            <div class="form-group">
                                <strong>{{ __('Password') }}:</strong>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="enter password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @else
                                    <span class="text-danger">Please enter password</span>
                                @endif
                            </div>

                            <!-- Section 8: Birth Date -->
                            <div class="form-group">
                                <strong>{{ __('Birth Date') }}:</strong>
                                <input type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" placeholder="enter birth_date" name="birth_date" required>
                                @if ($errors->has('birth_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                @else
                                    <span class="text-danger">Please enter birth_date</span>
                                @endif
                            </div>

                            <!-- Section 9: Gender -->
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-venus-mars"></i></span></div>
                                    <select class="form-control" name="gender" id="gender">
                                        <option>Select Gender</option>
                                        <option value="male" @if(isset($doctor)) {{ $doctor->gender == 'male' ? 'selected' : '' }} @endif>male</option>
                                        <option value="female" @if(isset($doctor)) {{ $doctor->gender == 'female' ? 'selected' : '' }} @endif>female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Departments</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-h-square"></i></span></div>
                            <select id="kt_select2_3" class="kt-select2 form-control" name="departments[]" id="departments" multiple>
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}" @if(isset($doctor)) {{$doctor->hasDepartment($department->id) ? 'selected' : ''}} @endif>
                                        {{$department->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Section 11: Medical Degree -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Medical Degree</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span></div>
                            <textarea class="form-control" name="medical_degree" id="medical_degree" cols="30" rows="5">{{isset($doctor) ? $doctor->medical_degree : ''}}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Section 12: Specialist -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Specialist</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span></div>
                            <textarea class="form-control" name="specialist" id="specialist" cols="30" rows="5">{{isset($doctor) ? $doctor->specialist : ''}}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Section 13: Biography -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Biography</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span></div>
                            <textarea class="form-control" name="biography" id="biography" cols="30" rows="5">{{isset($doctor) ? $doctor->biography : ''}}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Section 14: Educational Qualification -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Educational Qualification</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span></div>
                            <textarea class="form-control" name="educational_qualification" id="educational_qualification" cols="30" rows="5">{{isset($doctor) ? $doctor->educational_qualification : ''}}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Buttons Section -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="button" class="btn grey btn-outline-secondary" data-bs-dismiss="modal">{{ __('Back') }}</button>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>
