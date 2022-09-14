<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Register as Recruiter | Hirebox</title>

    <!-- App favicon -->

    <?php include 'includes/headerlink.php'; ?>

</head>

<body data-topbar="dark">


    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-12 col-md-12">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100 login-f">
                            <div class="d-flex flex-column">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="<?= base_url('recruiter-dashboard') ?>" class="d-block auth-logo">
                                        <img src="<?= base_url() ?>assets/images/logo.png" alt="Hirbox">
                                    </a>
                                </div>
                                <div class="auth-content my-auto container">
                                    <div class="text-center">
                                        <h5 class="mb-0">Register as Recruiter</h5>

                                    </div>
                                    <form class="needs-validation mt-4 pt-2 row" novalidate action="<?= base_url('recruiter-dashboard') ?>">
                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" id="input-username" placeholder="Enter Recruiter Name" value="Anu Thakur" required>
                                            <div class="invalid-feedback">
                                                Please Enter Recruiter Name
                                            </div>
                                            <label for="input-number">Full Name</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" id="input-username" placeholder="Enter Company Name" value="Web Group Pvt LTD" required>
                                            <div class="invalid-feedback">
                                                Please Enter Company Name
                                            </div>
                                            <label for="input-number">Company Name</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="users"></i>
                                            </div>
                                        </div>



                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="email" class="form-control" id="input-email" placeholder="Enter Email" value="anu@gmail.com" required>
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" id="input-username" placeholder="Enter Number" value="9090909090" required>
                                            <div class="invalid-feedback">
                                                Please Enter Number
                                            </div>
                                            <label for="input-number">Phone no</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>

                                        <!-- <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="password" class="form-control" id="input-password" placeholder="Enter Password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div> -->

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <select class="form-control select2 form-select regis-select" required>
                                                <option>Select Company Size</option>
                                                <option value="1-5" selected>1-5</option>
                                                <option value="5-20">5-20</option>
                                                <option value="20-100">20-100</option>
                                            </select>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" placeholder="Enter Designation" value="HR Management" required>
                                            <div class="invalid-feedback">
                                                Please Enter Designation
                                            </div>
                                            <label for="input-password">Designation</label>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-12">
                                            <select class="form-control select2 form-select regis-select" required>
                                                <option>Select Country</option>
                                                <option value="" selected>India</option>
                                                <option value="">USA</option>
                                                <option value="">UK</option>
                                            </select>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <select class="form-control select2 form-select regis-select" required>
                                                <option>Select State</option>
                                                <option value="" selected>Mumbai</option>
                                                <option value="">Madhaya Pradesh</option>
                                                <option value="">Delhi</option>
                                            </select>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" placeholder="Enter City" value="Mumbai" required>
                                            <div class="invalid-feedback">
                                                Please Enter City
                                            </div>
                                            <label for="input-password">City</label>

                                        </div>

                                        <div class="form-floating-custom col-md-12 mb-1">
                                            <label for="input-password"><b>Firm Type :</b></label>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-2 col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck1" checked>
                                                <label class="form-check-label" for="formCheck1">
                                                    Permanent Hiring
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-floating form-floating-custom mb-2 col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                <label class="form-check-label" for="formCheck1">
                                                    Contract Staffing
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-floating form-floating-custom mb-2 col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                <label class="form-check-label" for="formCheck1">
                                                    Executive Search
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-floating form-floating-custom mb-2 col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                <label class="form-check-label" for="formCheck1">
                                                    Only Payrolling
                                                </label>
                                            </div>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-12">
                                            <input type="text" class="form-control" placeholder="Enter Designation" value="https://linkedin.com" required>
                                            <div class="invalid-feedback">
                                                Linkedin Company Profile URL
                                            </div>
                                            <label for="input-password">Linkedin Company Profile URL</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="linkedin"></i>
                                            </div>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-12">
                                            <select class="form-control select2 form-select regis-select" required>
                                                <option>Domain (Choose a max of 10 Domains )</option>
                                                <option value="">Accounting / Corporate Finance</option>
                                                <option value="">Administrative / Generalist</option>
                                                <option value="">Advertising / Event Management / PR</option>
                                                <option value="">Aerospace</option>
                                                <option value="">Agriculture / Dairy / Fishing</option>
                                                <option value="">Architecture / Interior Design</option>
                                                <option value="">Automotive / ancillaries</option>
                                                <option value="">Banking / Financial Services / Insurance </option>
                                                <option value="">BPO / KPO / ITES / CRM / Transcription</option>
                                                <option value="">Broadcasting</option>
                                                <option value="">Chemical / Polymer / Plastic / Rubber</option>
                                                <option value="" selected>E-commerce</option>
                                                <option value="">Education</option>
                                                <option value="">Data Entry</option>
                                            </select>

                                        </div>



                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                        </div>
                                    </form>



                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Already have an account ? <a href="<?= base_url('recruiter-login') ?>" class="fw-semibold"> Login </a> </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>






    <!-- JAVASCRIPT -->
    <?php include 'includes/footerlink.php'; ?>

</body>



</html>