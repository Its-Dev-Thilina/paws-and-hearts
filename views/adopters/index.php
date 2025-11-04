<?php include_once BASE_PATH . 'components/sidenav.php' ?>

<div class="layout-container">
    <div class="p-5">
        <h1>Adopters</h1>
        <!-- Inside Content -->
        <div class="card">
            <div class="card-header p-3 d-flex justify-content-end">
                <a href="/adopters/new" class="btn btn-sm btn-primary">
                    <i class="bi bi-plus"></i> New
                </a>
            </div>
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Date Of Birth</th>
                                <th>Phone / Email</th>
                                <th>Address</th>
                                <th>Occupation</th>
                                <th>Has Other Pets</th>
                                <th>Prefer Pet Species</th>
                                <th>Register Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $index = 0 ?>
                            <?php foreach($adopters as $adopter): ?>

                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $adopter['name'] ?></td>
                                <td><?= $adopter['gender'] ?></td>
                                <td><?= $adopter['dob'] ?></td>
                                <td>
                                    <?= $adopter['contact'] ?>
                                </td>
                                <td><?= $adopter['address'] ?></td>
                                <td><?= $adopter['occupation'] ?></td>
                                <td><?= $adopter['is_other_pets'] ?></td>
                                <td> <?= $adopter['pet_type'] ?> </td>
                                <td><?= $adopter['register_date'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
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