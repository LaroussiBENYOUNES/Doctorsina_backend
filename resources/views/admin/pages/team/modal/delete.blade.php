<form action="{{ route('team.destroy', $team->id) }}" method="get" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="ModalDelete{{ $team->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Delete team member') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this team member?
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="button" class="btn grey btn-outline-secondary" data-bs-dismiss="modal">{{ __('Back') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('Delete') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
