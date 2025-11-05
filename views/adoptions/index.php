<?php include_once BASE_PATH . 'components/sidenav.php' ?>

<div class="layout-container">
    <div class="p-5">
        <h1>Pet Adoptions</h1>
        <!-- Inside Content -->

        <div class="mb-4">
            <form method="post" class="form-control p-4">

                <div class="mb-3 row">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Select Caretaker</label>
                        <select name="species" id="" class="form-control">
                            <option value="anna">Anna</option>
                            <option value="yuki">Yuki</option>
                            <option value="max">Max</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Select Pet</label>
                        <select name="breed" id="" class="form-control">
                            <option value="lucky">Lucky</option>
                            <option value="pinkey">Pinkey</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Select Adopter</label>
                        <select name="caretaker" id="" class="form-control">
                            <option value="Mr. Sampson">Mr. Sampson</option>
                            <option value="Jhon Doe">Jhon Doe</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Note</label>
                <textarea name="note" id="" rows="3" class="form-control" placeholder="e.g: She is Healthy and Fluffy as usual"></textarea>
            </div>

                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>

        <div class="card">
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Adopter</th>
                                <th>Pet Name</th>
                                <th>Caretaker</th>
                                <th>Adoption Date</th>
                                <th>Notes</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>1</td>
                                <td>John Miller</td>
                                <td>Buddy (Dog)</td>
                                <td>Sarah Johnson</td>
                                <td>2024-03-21</td>
                                <td>Healthy and well settled</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>