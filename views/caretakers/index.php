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
                            <tr>
                                <td>1</td>
                                <td>Sarah Johnson</td>
                                <td>Female</td>
                                <td>1990-03-15</td>
                                <td>
                                    +1 555-234-8765
                                </td>
                                <td>123 Maple St, Austin, TX 78701</td>
                                <td>5</td>
                                <td>Dogs</td>
                                <td>2021-06-10</td>
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
                                <td>Michael Lee</td>
                                <td>Male</td>
                                <td>1987-09-02</td>
                                <td>
                                    <a href="mailto:mlee@petcare.org">mlee@petcare.org</a>
                                </td>
                                <td>45 Elm Ave, Denver, CO 80203</td>
                                <td>8</td>
                                <td>Cats</td>
                                <td>2020-01-22</td>
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