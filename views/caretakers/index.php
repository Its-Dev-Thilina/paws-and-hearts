<?php include_once BASE_PATH . 'components/sidenav.php' ?>

<div class="layout-container">
    <div class="p-5">
        <h1>Caretakers</h1>
        <!-- Inside Content -->
        <div class="card">
            <div class="card-header p-3 d-flex justify-content-end">
                <a href="/caretakers/new" class="btn btn-sm btn-primary">
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
                                <th>Experience (years)</th>
                                <th>Specialization</th>
                                <th>Join Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $index = 0; ?>
                            <?php foreach($caretakers as $caretaker): ?>

                            <tr>
                                <td><?= $index+1 ?></td>
                                <td><?= $caretaker['name'] ?></td>
                                <td><?= $caretaker['gender'] ?></td>
                                <td><?= $caretaker['dob'] ?></td>
                                <td>
                                    <?= $caretaker['contact'] ?>
                                </td>
                                <td><?= $caretaker['address'] ?></td>
                                <td><?= $caretaker['experience'] ?></td>
                                <td><?= $caretaker['special'] ?></td>
                                <td><?= $caretaker['join_date'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>

                            <?php $index++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>