    <!-- Modal -->
    <div class="justify-content-center align-items-center modal modal-xl fade modal-dialog position-absolute vw-100 min-vw-100 min-vh-100 vh-100 mt-0 bg-transparent" data-bs-backdrop="static" data-bs-keyboard='false' id="define" tabindex="1" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Choose your note priority</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="d-flex align-text-center flex-column align-items-center" id="modalForm" action="./functions/modalControl/createPriority.php" method="post">
                <input name="LowP" class="btn btn-primary btn-gradient-dark text-light w-50 mt-2 border border-dark" type="button" value="Low-priority">
                <input name="NormalP" class="btn btn-dark btn-gradient-dark text-light w-50 mt-2 border border-dark" type="button" value="Normal-priority">
                <input name="highP" class="btn btn-danger btn-gradient-dark text-light w-50 mt-2 border border-dark" type="button" value="High-priority">
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type='submit' name="myPriority" class="btn btn-dark text-light" value="Define"></input>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type='submit' name="myPriority" class="btn btn-dark text-light" value="Define"></input>
        </div>
        </div>
    </div>
</div>
