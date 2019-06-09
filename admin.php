<?php

    $title="Student Registration";
    $body_class = "registration";

?>

<?php require_once 'include/header.php'; ?>

<section class="registration mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">

            <div class="col-12">
                <div class="bg-white py-5">
                    <div class="row">
                        <div class="col-12 m-auto">
                            <div class="form">
                                <form action="./ajax.php" method="POST" id="register-form">

                                <div id="alert" class="alert d-none" role="alert"></div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label class="sr-only" for="fullName">Full Name</label>
                                            <input type="text" name="fullName" class="form-control" id="fullName"
                                                placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="sr-only" for="id">ID</label>
                                            <input type="number" name="id" class="form-control" id="id" placeholder="ID"
                                                required>
                                        </div>
                                    </div>

                                    <ul class="items px-0">
                                        <li class="item form-row">
                                            <div class="form-group col-4 col-md-6">
                                                <label class="sr-only" for="exam">Exam</label>
                                                <input type="text" name="exam[]" class="form-control" id="exam"
                                                    placeholder="Exam" required>
                                            </div>
                                            <div class="form-group col-4">
                                                <label class="sr-only" for="grade">Grade</label>
                                                <input type="number" name="grade[]" class="form-control" id="grade"
                                                    placeholder="Grade" required min="0" max="100">
                                            </div>
                                            <div class="form-group col-2 col-md-1">
                                                <button type="button" class="addItem btn btn-success w-100">+</button>
                                            </div>
                                            <div class="form-group col-2 col-md-1">
                                                <button type="button" disabled
                                                    class="removeItem btn btn-danger w-100">-</button>
                                            </div>
                                        </li>

                                    </ul>



                                    <div class="form-row">
                                        <div class="form-group col-4">
                                            <button type="submit" name="submit"
                                                class="btn btn-primary w-100">Submit</button>
                                        </div>

                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php require_once 'include/footer.php'; ?>