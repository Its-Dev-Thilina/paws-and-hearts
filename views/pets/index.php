<?php include_once BASE_PATH . 'components/sidenav.php' ?>

<div class="layout-container">
    <div class="p-5">
        <h1>Manage Pets</h1>

        <div class="row">
            <div class="col-8 p-2">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                        <h5 class="m-0">pet names and data</h5>
                        <a href="/pets/new" class="btn btn-sm btn-primary">
                            <i class="bi bi-plus"></i>
                            New
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Pet Specie</th>
                                        <th>Breed</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Caretaker</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 0 ?>
                                    <?php foreach($pets as $pet): ?>
                                    
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= $pet['name'] ?></td>
                                        <td><?= $pet['specie'] ?></td>
                                        <td><?= $pet['breed'] ?></td>
                                        <td><?= $pet['dob'] ?></td>
                                        <td><?= $pet['gender'] ?></td>
                                        <td><?= $pet['caretaker'] ?></td>
                                        <td><span class="badge bg-success"><?= $pet['status'] ?></span></td>
                                        <td class="d-flex gap-1">
                                            <a href="/pets/edit?id=do3^&j" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="/pets/delete" method="post">
                                                <input type="hidden" name="id" value="<?= $pet['id'] ?>">
                                                <button type="submit" name="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $index++ ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                        <h5 class="m-0">Pet Species</h5>
                        <a href="pets/new-specie" class="btn btn-sm btn-primary">
                            <i class="bi bi-plus"></i>
                            New
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pet Specie</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 0 ?>
                                    <?php foreach($pet_species as $specie): ?>

                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= $specie["specie"] ?></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <!-- <a href="#" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a> -->
                                        </td>
                                    </tr>
                                    
                                    <?php $index++ ?>

                                    <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>