<?php require("./view/html/htmlHead.view.php")?>
<?php require("./view/html/navBar.view.php")?>
<main>
  <div id="pizza" class="d-flex  align-items-center justify-content-center align-content mt-4  w-100">
    <?php require("./view/html/noteRow.view.php") ?>
    <div class="bg-success align-items-center justify-content-center align-content-center flex-column " id="filterBtn">
        <button class="btn mb-5 bg-warning border border-dark" id="myButton">Add Note</button>
        <button class="btn mt-5 bg-warning border border-dark" id="myButton1">Filter</button>
    </div>
  </div>
</main>
<?php require("./view/html/htmlFoot.view.php")?>