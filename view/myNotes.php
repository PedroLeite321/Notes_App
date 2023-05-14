<?php require("./view/html/htmlHead.view.php")?>
<?php require("./view/html/navBar.view.php")?>
<?php require("./view/modals/modal.php")?>
<?php require("./view/modals/filterModal.php")?>
<?php require("./view/modals/definePriority.php")?>
<main>
  <div class="d-flex  align-items-center justify-content-center align-content mt-4 w-100">
    <?php require("./view/html/noteRow.view.php") ?>
    <div class="bg-light align-items-center justify-content-center align-content-center flex-column " id="filterBtn">
        <button class="btn mb-5 bg-dark text-light border border-dark" id="myButton" data-bs-toggle="modal" data-bs-target="#myModal">Add Note</button>
        <button class="btn mt-5 bg-dark  text-light border border-dark" id="myButton1"
        data-bs-toggle="modal" data-bs-target="#filterModal">Filter</button>
    </div>
  </div>
</main>
<?php require("./view/html/htmlFoot.view.php")?>