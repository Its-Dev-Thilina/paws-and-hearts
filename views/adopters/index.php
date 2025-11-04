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
                            <tr>
                                <td>1</td>
                                <td>John Miller</td>
                                <td>Male</td>
                                <td>1985-07-09</td>
                                <td>
                                    <a href="mailto:john.miller@email.com">john.miller@email.com</a>
                                </td>
                                <td>500 Cedar St, Dallas, TX 75201</td>
                                <td>Engineer</td>
                                <td>✅</td>
                                <td>Dog</td>
                                <td>2023-05-14</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ana Lopez</td>
                                <td>Female</td>
                                <td>1992-11-22</td>
                                <td>
                                    <a href="mailto:ana.lopez@gmail.com">ana.lopez@gmail.com</a>
                                </td>
                                <td>89 Lakeview Blvd, Orlando, FL 32801</td>
                                <td>Nurse</td>
                                <td>❌</td>
                                <td>Cat</td>
                                <td>2024-01-08</td>
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