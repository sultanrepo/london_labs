<?php
$pageName = "Patient";
$navLavel1 = "Patient";
$navLavel2 = "Patient List";
?>

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
                        <h4 class="mb-sm-0"><?php echo $pageName; ?></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $navLavel1; ?></a></li>
                                <li class="breadcrumb-item active"><?php echo $navLavel2 ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1"><u><?php echo $navLavel2; ?></u></h4><br>
                            <a href="#addCourse" data-bs-toggle="modal" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add <?php echo $pageName; ?></a>
                        </div>
                        <!-- end card header -->

                        <div class="card-body">
                            <div id="table-gridjs"></div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



    <!-- Modal -->
<div class="modal fade" id="addCourse" tabindex="-1" aria-labelledby="addCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header bg-danger p-3">
                <h5 class="modal-title text-white" id="addCourseModalLabel">New Patient</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="close-addCourseModal"></button>
            </div>

            <form method="post" id="patient_form">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <!-- <input type="hidden" id="id-field" />

                    <input type="hidden" id="rating-field" /> -->
                    <div class="mb-3">
                        <label for="course-title-input" class="form-label">Patient Name<span class="text-danger">*</span></label>
                        <input type="text" id="patient-name" class="form-control" placeholder="Enter Patient Name" required />
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Age<span class="text-danger">*</span></label>
                                <input type="number" id="patient-age" class="form-control" placeholder="Enter Age" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="course-category-input" class="form-label">Sex<span class="text-danger">*</span></label>
                                <select class="form-select" id="patient-sex">
                                    <option value="0">Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Mobile<span class="text-danger">*</span></label>
                                <input type="number" id="patient-mobile" class="form-control" placeholder="Enter Mobile No" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Emial</label>
                                <input type="text" id="patient-email" class="form-control" placeholder="Enter Email" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="course-title-input" class="form-label">Select Patient Refrance<span class="text-danger">*</span></label>
                            <select class="form-select" id="patient-ref" required>
                                <option value="0">Select Refrance</option>
                                <option value="self-ref">Self Refrance</option>
                                <option value="doctor-ref">Doctor Refrance</option>
                            </select>
                        </div>

                        <!-- <div id="hospital-doctor"> -->
                            <div class="col-lg-6 hospital-doctor">
                                <div class="mb-3">
                                    <label for="course-category-input" class="form-label">Hospital<span class="text-danger">*</span></label>
                                    <select class="form-select" id="patient-hospital">
                                        <option value="0">Select Hospital</option>
                                    <?php 
                                    $res0 = mysqli_query($conn, "SELECT * FROM `hospitals` ORDER BY hospital_name ASC;");
                                    while( $rows0 = mysqli_fetch_array($res0) ) {
                                        $hospital_id = $rows0['hospital_id'];
                                        $hospital_name = $rows0['hospital_name'];
                                        ?>
                                        <option value="<?php echo $hospital_id ?>"><?php echo $hospital_name; ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                    <!-- <label for="test_ids" class="control-label">Test</label>
                                    <select name="test_ids[]" id="test_ids" class="form-control form-control-border select2" placeholder="Enter appointment Name" multiple required>
                                        <option value="0">Select Hospital</option>
                                        <option value="0001">Sufia Memorial</option>
                                        <option value="0002">Faiz Hospital</option>
                                    </select> -->
                                </div>
                            </div>
                            <div class="col-lg-6 hospital-doctor">
                                <div class="mb-3">
                                    <label for="course-category-input" class="form-label">Doctor<span class="text-danger">*</span></label>
                                    <select class="form-select" id="patient-doctor">
                                        <option value="0">First Select Hospital</option>
                                    </select>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <!--end row-->

                    <div class="mb-3">
                        <h5 class="fs-md mb-1">Select Tests</h5>
                        <p class="text-muted">You can Multi Select Tests</p>
                            <select multiple="multiple" name="favorite_cars" id="multiselect-optiongroup">
                                <?php
                                $res1 = mysqli_query($conn,"SELECT * FROM `tests_categories`");
                                while( $rows1 = mysqli_fetch_array($res1) ) {
                                    $id       = $rows1['id'];
                                    $cat_name = $rows1['cat_name'];
                                    ?>
                                    <optgroup label="<?php echo $cat_name; ?>">
                                    <?php
                                    $res2 = mysqli_query($conn, "SELECT * FROM `tests` WHERE category_id='$id'");
                                    while( $rows2 = mysqli_fetch_array($res2) ) {
                                        $test_id = $rows2['id'];
                                        $test_name = $rows2['test_name'];
                                        ?>
                                        <option value="<?php echo $test_id; ?>"><?php echo $test_name; ?></option> 
                                        <?php
                                    }
                                    ?>
                                </optgroup>
                                    <?php
                                }
                                ?>
                            </select>
                    </div>
                       
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Discount(%)</label>
                                <input type="text" id="patient-discount" class="form-control" placeholder="Enter Discount Percentage" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="course-category-input" class="form-label">Status<span class="text-danger">*</span></label>

                                <select class="form-select" id="patient-status">
                                    <option value="0">Select Status</option>
                                    <option value="collected">Sample Collected</option>
                                    <option value="yetTocollected">Yet To Collect Sample</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                        <button type="submit" name="submit" class="btn btn-primary" id="add-btn">Add Patient</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- modal-content -->
    </div>
</div>
<!-- end add Property modal -->

<!-- Update Modal -->
<div class="modal fade" id="updatePatient" tabindex="-1" aria-labelledby="updatePatientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header bg-danger p-3">
                <h5 class="modal-title text-white" id="updatePatientModalLabel">Update Patient</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="close-updatePatientModal"></button>
            </div>

            <form method="post" id="patient_form_update">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <!-- <input type="hidden" id="id-field" />

                    <input type="hidden" id="rating-field" /> -->
                    
                    <div class="mb-3">
                        <input type="text" id="patient-id-for-update" name="patient-id-for-update" hidden>
                        <label for="course-title-input" class="form-label">Patient Name<span class="text-danger">*</span></label>
                        <input type="text" id="patient-name-update" class="form-control" placeholder="Enter Patient Name" required />
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Age<span class="text-danger">*</span></label>
                                <input type="number" id="patient-age-update" class="form-control" placeholder="Enter Age" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="course-category-input" class="form-label">Sex<span class="text-danger">*</span></label>
                                <select class="form-select" id="patient-sex-update">
                                    <option value="0">Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Mobile<span class="text-danger">*</span></label>
                                <input type="number" id="patient-mobile-update" class="form-control" placeholder="Enter Mobile No" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Emial</label>
                                <input type="text" id="patient-email-update" class="form-control" placeholder="Enter Email" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="course-title-input" class="form-label">Select Patient Refrance<span class="text-danger">*</span></label>
                            <select class="form-select" id="patient-ref-update" required>
                                <option value="0">Select Refrance</option>
                                <option value="self-ref">Self Refrance</option>
                                <option value="doctor-ref">Doctor Refrance</option>
                            </select>
                        </div>

                        <!-- <div id="hospital-doctor"> -->
                            <div class="col-lg-6 hospital-doctor">
                                <div class="mb-3">
                                    <label for="course-category-input" class="form-label">Hospital<span class="text-danger">*</span></label>
                                    <select class="form-select" id="patient-hospital-update">
                                        <option value="0">Select Hospital</option>
                                    <?php 
                                    $res0 = mysqli_query($conn, "SELECT * FROM `hospitals` ORDER BY hospital_name ASC;");
                                    while( $rows0 = mysqli_fetch_array($res0) ) {
                                        $hospital_id = $rows0['hospital_id'];
                                        $hospital_name = $rows0['hospital_name'];
                                        ?>
                                        <option value="<?php echo $hospital_id ?>"><?php echo $hospital_name; ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                    <!-- <label for="test_ids" class="control-label">Test</label>
                                    <select name="test_ids[]" id="test_ids" class="form-control form-control-border select2" placeholder="Enter appointment Name" multiple required>
                                        <option value="0">Select Hospital</option>
                                        <option value="0001">Sufia Memorial</option>
                                        <option value="0002">Faiz Hospital</option>
                                    </select> -->
                                </div>
                            </div>
                            <div class="col-lg-6 hospital-doctor">
                                <div class="mb-3">
                                    <label for="course-category-input" class="form-label">Doctor<span class="text-danger">*</span></label>
                                    <select class="form-select" id="patient-doctor-update">
                                        <option value="0">First Select Hospital</option>
                                    </select>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <!--end row-->

                    <div class="mb-3">
                        <h5 class="fs-md mb-1">Select Tests</h5>
                        <p class="text-muted">You can Multi Select Tests</p>
                            <select multiple="multiple" name="favorite_cars" id="multiselect-optiongroup-abc">
                                <?php
                                $res1 = mysqli_query($conn,"SELECT * FROM `tests_categories`");
                                while( $rows1 = mysqli_fetch_array($res1) ) {
                                    $id       = $rows1['id'];
                                    $cat_name = $rows1['cat_name'];
                                    ?>
                                    <optgroup label="<?php echo $cat_name; ?>">
                                    <?php
                                    $res2 = mysqli_query($conn, "SELECT * FROM `tests` WHERE category_id='$id'");
                                    while( $rows2 = mysqli_fetch_array($res2) ) {
                                        $test_id = $rows2['id'];
                                        $test_name = $rows2['test_name'];
                                        ?>
                                        <option value="<?php echo $test_id; ?>"><?php echo $test_name; ?></option> 
                                        <?php
                                    }
                                    ?>
                                </optgroup>
                                    <?php
                                }
                                ?>
                            </select>
                    </div>
                       
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Discount(%)</label>
                                <input type="text" id="patient-discount-update" class="form-control" placeholder="Enter Discount Percentage" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="course-category-input" class="form-label">Status<span class="text-danger">*</span></label>

                                <select class="form-select" id="patient-status-update">
                                    <option value="0">Select Status</option>
                                    <option value="collected">Sample Collected</option>
                                    <option value="yetTocollected">Yet To Collect Sample</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                        <button type="submit" name="submit" class="btn btn-primary" id="add-btn">Update Patient</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- modal-content -->
    </div>
</div>
<!--end add Property modal-->

    <!--Update Modal -->
<div class="modal fade" id="viewTests" tabindex="-1" aria-labelledby="viewTestsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header bg-danger p-3">
                <h5 class="modal-title text-white" id="viewTeststModalLabel">Tests List with Amount</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="close-viewTestsModal"></button>
            </div>
            <!-- Table Foot -->
            <table class="table table-nowrap" id="patientTestsList">
                <thead class="table-light ">
                    <tr>
                        <th scope="col">S No.</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Test Category</th>
                        <th scope="col">Test Name</th>
                        <th scope="col">Payment</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <!-- <tfoot class="table-light">
                    <tr>
                        <td colspan="4">Total</td>
                        <td>₹6890</td>
                    </tr>
                </tfoot> -->
            </table>
        </div>
        <!-- modal-content -->
    </div>
</div>
<!--end add Property modal-->

<!-- deleteRecordModal -->
<div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-md-5">
                <div class="text-center">
                    <div class="text-danger">
                        <i class="bi bi-trash display-5"></i>
                    </div>
                    <div class="mt-4">
                        <h4 class="mb-2">Are you sure ?</h4>
                        <p class="text-muted mx-3 mb-0">Are you sure you want to remove this record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                    <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete It!</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /deleteRecordModal -->

    <?php include("includes/UIComponent/footerEndingContennt.php") ?>
</div>
<!-- end main content-->

 <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <!-- gridjs js -->
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>
    <!-- gridjs init -->
    <script src="assets/js/js/gridjs.js"></script>

    <!-- multi.js -->
    <script src="assets/libs/multi.js/multi.min.js"></script>
    <!-- autocomplete js -->
    <script src="assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>

    <!-- input flag init -->
    <script src="assets/js/pages/flag-input.init.js"></script>


    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/steex/layouts/tables-gridjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 05:45:09 GMT -->
</html>