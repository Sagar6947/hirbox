<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Post a Jobs | Hirebox</title>



    <?php include 'includes/headerlink.php'; ?>

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include 'includes/header.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Job Information</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                        <li class="breadcrumb-item active"><?= $tag ?> Job</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><?= $tag ?> a Job</h4>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if ($this->session->has_userdata('msg')) {
                                        echo $this->session->userdata('msg');
                                        $this->session->unset_userdata('msg');
                                    }
                                    ?>
                                    <form method="POST">
                                        <input type="hidden" name="company_id" value="<?= sessionId('login_company_id') ?>">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="title">Job Title</label>
                                                    <input id="productname" name="job_title" type="text" class="form-control" value="<?= (($tag == 'Edit') ? $job['0']['job_title'] : '') ?>" placeholder="Job Title" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Job Classification</label>
                                                    <select class="form-control select2 form-select" name="classification">

                                                        <?php
                                                        switch ($job[0]['classification']) {
                                                            case "1":
                                                        ?>
                                                                <option>Select Job Classification</option>
                                                                <option value="1" selected>1</option>
                                                                <option value="2">2</option>
                                                            <?php
                                                                break;
                                                            case "2":
                                                            ?>
                                                                <option>Select Job Classification</option>
                                                                <option value="1">1</option>
                                                                <option value="2" selected>2</option>
                                                            <?php
                                                                break;
                                                            default:
                                                            ?>
                                                                <option>Select Job Classification</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Industry</label>
                                                    <select class="form-control select2 form-select" name="industry">
                                                        <option>Select Industry</option>
                                                        <option value="1" <?= (($job['0']['industry'] == '1') ? 'selected' : '') ?>>IT</option>
                                                        <option value="2" <?= (($job['0']['industry'] == '2') ? 'selected' : '') ?>>Education</option>


                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Education Level</label>
                                                    <select class="form-control select2 form-select" name="edu_level">
                                                        <option>Select Education Level</option>
                                                        <option value="1" <?= (($job['0']['edu_level'] == '1') ? 'selected' : '') ?>>High School</option>
                                                        <option value="2" <?= (($job['0']['edu_level'] == '2') ? 'selected' : '') ?>>Graduation</option>
                                                    </select>
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="manufacturerbrand">Manufacturer Brand</label>
                                                    <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="price">Price</label>
                                                    <input id="price" name="price" type="text" class="form-control">
                                                </div> -->
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="productdesc">Total Nomber of Positions </label>
                                                    <input id="price" name="num_of_position" type="text" class="form-control" value="<?= (($tag == 'Edit') ? $job['0']['num_of_position'] : '') ?>" placeholder="Total Nomber of Positions ">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Job Function</label>
                                                    <select class="form-control select2 form-select" name="job_function">
                                                        <?php
                                                        switch ($job[0]['job_function']) {
                                                            case "1":
                                                        ?>
                                                                <option>Select Job Function</option>
                                                                <option value="1" selected>1</option>
                                                                <option value="2">2</option>
                                                            <?php
                                                                break;
                                                            case "2":
                                                            ?>
                                                                <option>Select Job Function</option>
                                                                <option value="1">1</option>
                                                                <option value="2" selected>2</option>
                                                            <?php
                                                                break;
                                                            default:
                                                            ?>
                                                                <option>Select Job Function</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Exprience Level</label>

                                                    <select class="form-control select2 form-select" name="exprience">
                                                        <option value="Fresher">Fresher</option>
                                                        <option value="1 year">1 Year Exprienced</option>
                                                        <option value="3 year">3 Year Exprienced</option>
                                                    </select>

                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Job Type</label>

                                                    <select class="form-control select2 form-select" name="job_type">
                                                        <option>Select Job Type</option>
                                                        <option value="fulltime">Full Time</option>
                                                        <option value="parttime">Part Time</option>
                                                    </select>

                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="control-label">Compensation</label>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <!-- <label class="control-label">Compensation</label> -->
                                                    <select class="form-control select2 form-select" name="compen_from">
                                                        <option>From</option>
                                                        <option value="1" <?= (($job['0']['compen_from'] == '1') ? 'selected' : '') ?>>$1</option>
                                                        <option value="2" <?= (($job['0']['compen_from'] == '2') ? 'selected' : '') ?>>$2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <select class="form-control select2 form-select" name="compen_to">
                                                        <option>To</option>
                                                        <option value="1" <?= (($job['0']['compen_to'] == '1') ? 'selected' : '') ?>>$6</option>
                                                        <option value="2" <?= (($job['0']['compen_to'] == '2') ? 'selected' : '') ?>>$10</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <!-- <label class="control-label">Compensation</label> -->
                                                    <input id="price" name="compen_info" type="text" class="form-control" placeholder="Additional Compensation Information" name="compen_info" value="<?= (($tag == 'Edit') ? $job['0']['compen_info'] : '') ?>">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row gx-3 gy-2 align-items-center mb-3">
                                            <div class="col-sm-4">
                                                <label class="visually-hidden" for="specificSizeInputName">Zip Code</label>
                                                <input type="text" class="form-control" id="specificSizeInputName" placeholder="Zip Code" name="zipcode" value="<?= (($tag == 'Edit') ? $job['0']['zipcode'] : '') ?>">
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                                    <label class="form-check-label" for="autoSizingCheck2">
                                                        Anywhere in US
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="visually-hidden" for="specificSizeInputGroupUsername">City</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="City" name="city" value="<?= (($tag == 'Edit') ? $job['0']['city'] : '') ?>">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <!-- <label class="control-label">Compensation</label> -->
                                                    <input name="" type="text" class="form-control" placeholder="Additional Location Information" name="location_info" value="<?= (($tag == 'Edit') ? $job['0']['location_info'] : '') ?>">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">State</label>
                                                    <select class="form-control select2 form-select" name="state">
                                                        <option>Select State</option>
                                                        <option value="1" <?= (($job['0']['state'] == '1') ? 'selected' : '') ?>>1</option>
                                                        <option value="2" <?= (($job['0']['state'] == '2') ? 'selected' : '') ?>>2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">Country</label>
                                                    <select class="form-control select2 form-select" name="country">
                                                        <option>Select Country</option>
                                                        <option value="1" <?= (($job['0']['country'] == '1') ? 'selected' : '') ?>>US</option>
                                                        <option value="2" <?= (($job['0']['country'] == '2') ? 'selected' : '') ?>>India</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Your Organization's Job Order Number</label>
                                                    <input name="" type="number" class="form-control" placeholder="Your Organization's Job Order Number" name="order_no" value="<?= (($tag == 'Edit') ? $job['0']['order_no'] : '') ?>">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <!-- <label class="control-label">Job Description</label> -->
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Job Description</h4>
                                                                <!-- <p class="card-title-desc">Example of Ckeditor Classic editor</p> -->
                                                            </div>
                                                            <div class="card-body">
                                                                <textarea name="job_description" id="editor"><?= (($tag == 'Edit') ? $job['0']['job_description'] : '') ?></textarea>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Skills</label>
                                                    <input name="" type="text" class="form-control" placeholder="Enter Multiple Skills" name="skills" value="<?= (($tag == 'Edit') ? $job['0']['skills'] : '') ?>">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="control-label">Exprience Required</label>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Year</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Year" name="exp_year" value="<?= (($tag == 'Edit') ? $job['0']['exp_year'] : '') ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Month</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Month" name="exp_month" value="<?= (($tag == 'Edit') ? $job['0']['exp_month'] : '') ?>">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <label class="control-label">Relocation Assistance</label>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <select class="form-control select2 form-select" name="relocation-assist">
                                                        <option>Select Relocation Assistance</option>
                                                        <option value="1" <?= (($job['0']['relocation-assist'] == '1') ? 'selected' : '') ?>>1</option>
                                                        <option value="2" <?= (($job['0']['relocation-assist'] == '2') ? 'selected' : '') ?>>2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Additional Relocation Assistance Information" >
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-md-12">
                                            <label class="control-label">Visa Requirment</label>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <select class="form-control select2 form-select" name="visa_requirement">
                                                        <option>Select Visa Requirment</option>
                                                        <option value="1" <?= (($job['0']['visa_requirement'] == '1') ? 'selected' : '') ?>>1</option>
                                                        <option value="2" <?= (($job['0']['visa_requirement'] == '1') ? 'selected' : '') ?>>2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Additional Information" name="">
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label class="control-label">Pre Screen Questionnaire</label>
                                            <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Add a Question" name="pre_screen_ques" value="<?= (($tag == 'Edit') ? $job['0']['pre_screen_ques'] : '') ?>">
                                        </div>



                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"><?= (($tag == 'Edit') ? 'Update job' : 'Save as Post') ?></button>
                                            <!-- <button type="button" class="btn btn-secondary waves-effect waves-light">Save as Draft</button> -->
                                            <button type="reset" class="btn btn-primary waves-effect waves-light">Cancel</button>

                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include 'includes/footer.php'; ?>
        </div>
        <!-- end main content-->






    </div>
    <!-- END layout-wrapper -->




    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'includes/footerlink.php'; ?>

    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>