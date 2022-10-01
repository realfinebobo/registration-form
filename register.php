<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container large-screen-up my-2">
        <!-- FORM START HERE -->
        <form action="#" method="POST">
            <div class="p-3 mb-2 bg-info text-white">Student Information</div>
            <div class="row">
                <!-- first and last name -->
                <div class="col mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="First Name">
                        <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <!-- first and last name end -->

                <!-- address here -->
                <div class="col-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-house-fill"></i></span>
                        <input type="address" class="form-control" placeholder="Enter Full Address">
                    </div>
                </div>
                <!-- address end here -->

                <!-- phone num and gender -->
                <div class="col mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                        <input type="tel" class="form-control" placeholder="Phone number">
                        <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
                        <div class="radio-input border rounded-end" style="padding:5px 10px;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="#" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="#" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- phone num and gender ends here -->

                <!-- email address here -->
                <div class="col-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" class="form-control" placeholder="Enter valid email address">
                    </div>
                </div>
                <!-- email address here -->

                <!-- Date of Birth and state of origin-->
                <div class="col-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-calendar-fill"></i></span>
                        <input type="date" class="form-control" />
                        <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                        <input type="text" class="form-control" placeholder="State of Origin">
                    </div>
                </div>
                <!-- Date of Birth and state of origin ends-->

                <!-- intended class -->
                <div class="col-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text">Intended Class</span>
                        <div class="radio-input border rounded-end p-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="#" value="a1">
                                <label class="form-check-label" for="male">A1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="#" value="a2">
                                <label class="form-check-label" for="female">A2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="#" value="b1">
                                <label class="form-check-label" for="female">B1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="#" value="b2">
                                <label class="form-check-label" for="female">B2</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- intended class -->
            </div>
            <!-- 1st row ends here -->

            <!-- 2nd row starts -->
            <div class="p-3 mb-2 bg-info text-white">Guardian Information</div>
            <div class="row">

                <!-- guardian first and last name -->
                <div class="col mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="First Name">
                        <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <!-- guardian first and last name end -->

                <!-- Guardian phone number -->
                <div class="col-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                        <input type="tel" class="form-control" placeholder="Phone number">
                    </div>
                </div>
                <!-- phone number ends here -->

                <!-- relationship to student -->
                <div class="col mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Relationship to student">
                    </div>
                </div>
                <!-- relationship to student -->

                <!-- Address -->
                <div class="col-12">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-house-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                </div>
                <!-- address -->
            </div>
        </form>
        <!-- FORM ENDS HERE -->
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>