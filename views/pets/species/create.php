<?php include_once BASE_PATH . 'components/sidenav.php' ?>

<div class="layout-container">
    <div class="p-5">
        <h1>Add New species</h1>

        <form method="post" class="form-control p-4">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Specie</label>
                <input type="text" name="pet_name" id="" class="form-control" placeholder="Cat, Dog, Parrot">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">About Specie</label>
                <textarea name="note" id="" rows="5" class="form-control" placeholder="Note about specie"></textarea>
            </div>

            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</div>