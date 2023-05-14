    <!-- Modal -->
    <div class="justify-content-center align-items-center modal modal-xl fade modal-dialog position-absolute vw-100 min-vw-100 min-vh-100 vh-100 mt-0 bg-transparent" data-bs-backdrop="static" data-bs-keyboard='false' id="filterModal" tabindex="1" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Filter note</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="d-flex align-text-center flex-column align-items-center" id="modalForm" action="" method="post">
                <input class="btn btn-primary btn-gradient-dark text-light w-50 mt-2 border border-dark" type="button" value="Low-priority">
                <input class="btn btn-dark btn-gradient-dark text-light w-50 mt-2 border border-dark" type="button" value="Normal-priority">
                <input class="btn btn-danger btn-gradient-dark text-light w-50 mt-2 border border-dark" type="button" value="High-priority">
            </form>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-dark text-light">Filter</button>
        </div>
        </div>
    </div>
</div>
