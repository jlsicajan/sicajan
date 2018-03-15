<!-- Modal to show page information -->
<div class="modal fade" id="page_info_modal" tabindex="-1" role="dialog" aria-labelledby="modal_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title page-modal-title page-modal-info" id="modal_label"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="page-modal-description page-modal-info"></p>
                <span class="page-modal-developer-experience page-modal-info text-muted"></span>
                <hr>
                <ul class="list-group page-modal-technologies-list">

                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Ok</button>
                {{--<button type="button" class="btn btn-outline-success" data-dismiss="modal">Next (to move to other project like a slide)</button>--}}
            </div>
        </div>
    </div>
</div>