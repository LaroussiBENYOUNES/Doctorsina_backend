<form action="{{route('contacts.edit',$contact->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="modal fade text-left" id="ModalShow{{$contact->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Message Content') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <Strong>Content</Strong>
                            <p> {{$contact->Message}} </p>
                        </div>
                        <div class="form-group mt-2">
                        <input type="checkbox" name="is_checked" > resolved
                        </div>
                        <input type="hidden" name="id" value="{{$contact->id}}">
                               
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <button type="button" class="btn grey btn-outline-secondary" data-bs-dismiss="modal">{{ __('Back') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>