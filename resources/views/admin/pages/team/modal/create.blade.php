<form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add new team member') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
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
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
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
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Job Name') }}:</strong>
                            <input type="text" class="form-control{{ $errors->has('job_name') ? ' is-invalid' : '' }}" placeholder="enter job name" name="job_name" required>
                            @if ($errors->has('job_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('job_name') }}</strong>
                                </span>
                            @else
                                <span class="text-danger">Please enter the job name.</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Picture') }}:</strong>
                            <input type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" required>
                            @if ($errors->has('picture'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('picture') }}</strong>
                                </span>
                            @else
                                <span class="text-danger">Please select a picture.</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Twitter link') }}:</strong>
                            <input type="text" class="form-control{{ $errors->has('twitter_url') ? ' is-invalid' : '' }}" placeholder="enter twitter link" name="twitter_url" >
                           
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Facebook link') }}:</strong>
                         
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Instagram link') }}:</strong>
                            <input type="text" class="form-control{{ $errors->has('instagram_url') ? ' is-invalid' : '' }}" placeholder="enter instagram link" name="instagram_url" >
                            @if ($errors->has('instagram_url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('instagram_url') }}</strong>
                          
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Linkedin link') }}:</strong>
                            <input type="text" class="form-control{{ $errors->has('linkedin_url') ? ' is-invalid' : '' }}" placeholder="enter linkedin link" name="linkedin_url" >
                         
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
