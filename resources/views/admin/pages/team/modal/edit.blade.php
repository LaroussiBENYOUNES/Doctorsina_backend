<form action="{{route('team.edit',$team->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="modal fade text-left" id="ModalEdit{{$team->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('edit team member') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('First Name') }}:</strong>
                            <input type="text" value="{{$team->first_name}}" class="form-control" placeholder="enter first name" name="first_name">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Last Name') }}:</strong>
                            <input type="text" value="{{$team->last_name}}" class="form-control" placeholder="enter last name" name="last_name">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Job Name') }}:</strong>
                            <input type="text" value="{{$team->job_name}}" class="form-control" placeholder="enter job name" name="job_name">
                        </div>
                </div>
                <input type="hidden" name="old_picture" value="{{$team->picture}}">
                <input type="hidden" name="id" value="{{$team->id}}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Picture') }}:</strong>
                            <input type="file" class="form-control" value="{{$team->picture}}" name="picture">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Twitter link') }}:</strong>
                            <input type="text" value="{{$team->twitter_url}}" class="form-control" placeholder="enter twitter link" name="twitter_url">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Facebook link') }}:</strong>
                            <input type="text" value="{{$team->facebook_url}}" class="form-control" placeholder="enter facebook link" name="facebook_url">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Instagram link') }}:</strong>
                            <input type="text" value="{{$team->instagram_url}}" class="form-control" placeholder="enter instagram link" name="instagram_url">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Linkedin link') }}:</strong>
                            <input type="text" value="{{$team->linkedin_url}}" class="form-control" placeholder="enter linkedin link" name="linkedin_url">
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