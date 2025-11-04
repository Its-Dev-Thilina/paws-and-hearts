<?php include_once BASE_PATH . 'components/sidenav.php' ?>

<div class="layout-container">
    <div class="p-5">
        <h1>Register a Adopter</h1>

        <form method="post" class="form-control p-4">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input type="text" name="pet_name" id="" class="form-control" placeholder="e.g: Jone Doe">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                <input type="email" name="email" id="" class="form-control" placeholder="e.g: jonedoe@gmail.com">
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
                    <label for="exampleFormControlInput1" class="form-label">Occupation</label>
                    <input type="text" name="occupation" id="" class="form-control" placeholder="e.g: student">
                </div>

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Prefer Pet Type</label>
                    <select name="prefer_type" id="" class="form-control">
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="parrot">Parrot</option>
                    </select>
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Has Other Pets ?
                    </label>
                </div>
            </div>

            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</div>