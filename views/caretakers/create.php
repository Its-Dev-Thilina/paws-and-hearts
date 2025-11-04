<?php include_once BASE_PATH . 'components/sidenav.php' ?>

<div class="layout-container">
    <div class="p-5">
        <h1>Register a Caretaker</h1>

        <form method="post" class="form-control p-4">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input type="text" name="pet_name" id="" class="form-control" placeholder="e.g: Jone Doe">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                <div class="d-flex gap-2">
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>
            </div>


            <div class="mb-3 row">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" id="" class="form-control">
                </div>

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Specialization</label>
                    <select name="specialization" id="" class="form-control">
                        <option value="*">There is No Specific</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="parrot">Parrot</option>
                    </select>
                </div>

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Years Of Experience</label>
                    <input type="text" name="experience" pattern="\d*" title="Only Numbers Can Enter" id="" class="form-control">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <textarea name="address" id="" rows="5" class="form-control" placeholder="e.g: 123 Maple St, Austin, TX 78701"></textarea>
                </div>
                <div class="col">
                    <!-- Empty Space -->
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">About Caretaker</label>
                <textarea name="note" id="" rows="5" class="form-control" placeholder="e.g: I like to play with dogs and cats ..."></textarea>
            </div>

            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</div>