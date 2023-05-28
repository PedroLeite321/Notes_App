    <!-- Create Note Modal -->
<div class="justify-content-center align-items-center modal modal-xl fade modal-dialog position-absolute vw-100 min-vw-100 min-vh-100 vh-100 mt-0 bg-transparent" data-bs-backdrop="static" data-bs-keyboard='false' id="myModal" tabindex="1" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Create Note</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="d-flex align-text-center flex-column align-items-center" id="modalForm" action="./functions/modalControl/createNote.php" method="POST">
                <input class="mt-2 rounded border border-dark" type="text" name="cardTitle" id="inputModal1" placeholder="Titulo">
                <textarea class="mt-2 rounded border border-dark" name="cardText"  id="inputModal2" cols="30" rows="10"></textarea>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" value="Save changes" class="btn btn-primary"></input>
                    <button type="button" class="btn btn-dark" data-bs-target="#define" data-bs-toggle="modal" data-bs-dismiss="modal">Define priority</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
