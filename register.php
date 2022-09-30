<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Register</title>
</head>

<body>
    <div class="container p-5 mt-5">
        <!-- FORM START HERE -->
        <form action="#" method="POST">
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
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="address" class="form-control" placeholder="Enter Full Address">
                    </div>
                </div>
                <!-- address ens here -->

                <div class="col">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-phone"></i></span>
                        <input type="tel" class="form-control" placeholder="Enter Phone number">
                        <span class="input-group-text">Sex</span>
                        <div class="radio-input border rounded-end" style="padding:6px 12px;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="#" value="male">
                                <label class="form-check-label" for="male">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="#" value="female">
                                <label class="form-check-label" for="female">F</label>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- phone num ends here -->
            </div>
        </form>
        <!-- FORM ENDS HERE -->
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>