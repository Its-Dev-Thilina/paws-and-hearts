<?php include_once BASE_PATH . 'components/sidenav.php' ?>

<div class="layout-container">
    <div class="p-5">
        <h1>Add New Pet</h1>

        <form method="post" class="form-control p-4">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name of Pet</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Kitty, Tommy, ...">
            </div>

            <div class="mb-3 row">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Select Specie</label>
                    <select name="specie" id="" class="form-control">
                        <option value="1">Dog</option>
                        <option value="2">Cat</option>
                        <option value="3">Parrot</option>
                    </select>
                </div>

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Select Breed</label>
                    <select name="breed" id="" class="form-control">
                        <option value="Golden Retriever">Golden Retriever</option>
                        <option value="Poodle">Poodle</option>
                    </select>
                </div>

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Select Caretaker</label>
                    <select name="caretaker" id="" class="form-control">
                        <option value="1">Mr. Sampson</option>
                        <option value="2">Jhon Doe</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Pet Date of Birth</label>
                    <input type="date" name="dob" id="" class="form-control">
                </div>

                <div class="col">
                    <!-- Empty Space -->
                </div>

                <div class="col">
                    <!-- Empty Space -->
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Gender of Pet</label>
                <div class="d-flex gap-2">
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">About Pet</label>
                <textarea name="note" id="" rows="5" class="form-control" placeholder="e.g: She like to play with whool balls ..."></textarea>
            </div>

            <input type="submit" value="Save" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>