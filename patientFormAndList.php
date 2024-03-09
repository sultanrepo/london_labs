<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php
$pageName = "Patient";
$navLavel1 = "Patient";
$navLavel2 = "Patient List";
?>
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
                                <li class="breadcrumb-item active"><?php echo $navLavel2; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="coursesList">
                        <div class="card-body">
                            <div class="row align-items-center g-2">
                                <div class="col-lg-3 me-auto">
                                    <h6 class="card-title mb-0"> <?php echo $navLavel2; ?> <span class="badge bg-primary ms-1 align-baseline">1452</span></h6>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2">
                                    <div class="search-box">
                                        <input type="text" class="form-control search" placeholder="Search for courses, price or something..." />
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-auto">
                                    <div class="hstack flex-wrap gap-2">
                                        <button class="btn btn-subtle-danger d-none" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        <a href="#addCourse" data-bs-toggle="modal" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add <?php echo $pageName; ?></a>
                                        <!-- <div>
                                            <button type="button" class="btn btn-info" data-bs-toggle="offcanvas" data-bs-target="#courseFilters" aria-controls="courseFilters"><i class="bi bi-funnel align-baseline me-1"></i> Filter</button>
                                            <a href="apps-learning-grid.html" class="btn btn-subtle-primary btn-icon"><i class="bi bi-grid"></i></a>
                                            <a href="apps-learning-list.html" class="btn btn-subtle-primary active btn-icon"><i class="bi bi-list-task"></i></a>
                                        </div> -->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                    <thead class="text-muted">
                                    <tr>
                                        <!-- <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th> -->
                                        <th scope="col" class="sort cursor-pointer" data-sort="sno">S No.</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="category">Category</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="course_Name">Course Name</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor">Instructor</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="lessons">Lessons</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="duration">Duration</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="students">Students</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="fees">Fees</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="rating">Rating</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                    <tr>
                                        <!-- <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="chk_child">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td> -->
                                        <td class="id d-none"><a href="javascript:void(0)" class="fw-medium link-primary">#TBS001</a></td>
                                        <td class="sno">1</td>
                                        <td class="category"><a href="apps-learning-grid.html" class="text-reset">React Development</a></td>
                                        <td class="course_Name">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/learning/react.png" alt="" class="avatar-xxs">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-learning-overview.html" class="text-reset">Advanced React and Redux</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="instructor">Themesbrand</td>
                                        <td class="lessons">15</td>
                                        <td class="duration">2 Years</td>
                                        <td class="students">49</td>
                                        <td class="fees"><span class="fw-medium">$278.12</span></td>
                                        <td class="rating"><i class="bi bi-star-fill text-warning align-baseline me-1"></i> <span class="rate-value">4.5</span></td>
                                        <td class="status"><span class="badge bg-info-subtle text-info">Open</span></td>
                                        <td>
                                            <ul class="d-flex gap-2 list-unstyled mb-0">
                                                <li>
                                                    <a href="apps-learning-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#addCourse" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                        </tr>
                                        <tr>
                                            <!-- <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td> -->
                                            <td class="id d-none"><a href="javascript:void(0)" class="fw-medium link-primary">#TBS001</a></td>
                                            <td class="sno">2</td>
                                            <td class="category"><a href="apps-learning-grid.html" class="text-reset">React Development</a></td>
                                            <td class="course_Name">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/learning/react.png" alt="" class="avatar-xxs">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-learning-overview.html" class="text-reset">Advanced React and Redux</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="instructor">Ram</td>
                                            <td class="lessons">15</td>
                                            <td class="duration">2 Years</td>
                                            <td class="students">49</td>
                                            <td class="fees"><span class="fw-medium">$278.12</span></td>
                                            <td class="rating"><i class="bi bi-star-fill text-warning align-baseline me-1"></i> <span class="rate-value">4.5</span></td>
                                            <td class="status"><span class="badge bg-info-subtle text-info">Open</span></td>
                                            <td>
                                                <ul class="d-flex gap-2 list-unstyled mb-0">
                                                    <li>
                                                        <a href="apps-learning-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#addCourse" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td> -->
                                            <td class="id d-none"><a href="javascript:void(0)" class="fw-medium link-primary">#TBS001</a></td>
                                            <td class="sno">3</td>
                                            <td class="category"><a href="apps-learning-grid.html" class="text-reset">React Development</a></td>
                                            <td class="course_Name">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/learning/react.png" alt="" class="avatar-xxs">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-learning-overview.html" class="text-reset">Advanced React and Redux</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="instructor">Rahim</td>
                                            <td class="lessons">15</td>
                                            <td class="duration">2 Years</td>
                                            <td class="students">49</td>
                                            <td class="fees"><span class="fw-medium">$278.12</span></td>
                                            <td class="rating"><i class="bi bi-star-fill text-warning align-baseline me-1"></i> <span class="rate-value">4.5</span></td>
                                            <td class="status"><span class="badge bg-info-subtle text-info">Open</span></td>
                                            <td>
                                                <ul class="d-flex gap-2 list-unstyled mb-0">
                                                    <li>
                                                        <a href="apps-learning-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#addCourse" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- end tbody -->
                                </table>
                                <!-- end table -->
                                <div class="noresult" style="display: none;">
                                    <div class="text-center py-4">
                                        <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Courses We did not find any Courses for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4 pt-2" id="pagination-element">
                                <div class="col-sm">
                                    <div class="text-muted text-center text-sm-start">Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results</div>
                                </div>
                                <!--end col-->
                                <div class="col-sm-auto mt-3 mt-sm-0">
                                    <div class="pagination-wrap hstack gap-2 justify-content-center">
                                        <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="javascript:void(0)">
                                            Next
                                        </a>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include("includes/UIComponent/footerEndingContennt.php"); ?>
    
</div>
<!-- end main content-->

<!-- Modal -->
<div class="modal fade" id="addCourse" tabindex="-1" aria-labelledby="addCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header bg-danger p-3">
                <h5 class="modal-title text-white" id="addCourseModalLabel">Add Course</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="close-addCourseModal"></button>
            </div>

            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <input type="hidden" id="id-field" />

                    <input type="hidden" id="rating-field" />
                    <div class="mb-3">
                        <label class="form-label">Course Image<span class="text-danger">*</span></label>
                        <div class="dropzone course-dropzone border border-1 border-dashed text-center" style="min-height: 80px;">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple" />
                            </div>
                            <div class="dz-message needsclick my-3">
                                <div class="mb-3">
                                    <i class="bi bi-cloud-download fs-1"></i>
                                </div>

                                <h5 class="fs-md mb-0">Drop image here or click to upload.</h5>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
                                    <div class="d-flex flex-wrap gap-2 p-2">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-light rounded p-2">
                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="assets/images/new-document.png" alt="Dropzone-Image" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="pt-1">
                                                <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                                <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-3">
                                            <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- end dropzon-preview -->
                    </div>

                    <div class="mb-3">
                        <label for="course-title-input" class="form-label">Course title<span class="text-danger">*</span></label>
                        <input type="text" id="course-title-input" class="form-control" placeholder="Enter course title" required />
                    </div>

                    <div class="mb-3">
                        <label for="course-category-input" class="form-label">Course Category<span class="text-danger">*</span></label>

                        <select class="form-select" id="course-category-input">
                            <option value="">Select Course Category</option>
                            <option value="Marketing & Management">Marketing & Management</option>
                            <option value="React Development">React Development</option>
                            <option value="Shopify Development">Shopify Development</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Laravel Development">Laravel Development</option>
                            <option value="Flask Development">Flask Development</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Asp.Net Development">Asp.Net Development</option>
                            <option value="PHP Development">PHP Development</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Data Science">Data Science</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instructor-input" class="form-label">Instructor<span class="text-danger">*</span></label>
                                <input type="text" id="instructor-input" class="form-control" placeholder="Enter instructor name" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="lessons-input" class="form-label">Lessons<span class="text-danger">*</span></label>
                                <input type="number" id="lessons-input" class="form-control" placeholder="Lessons" required />
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="students-input" class="form-label">Students</label>
                                <input type="number" id="students-input" class="form-control" placeholder="Students" required />
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="duration-input" class="form-label">Duration Time<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="duration-input" placeholder="Select duration" required />
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="fees-input" class="form-label">Fees<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" id="fees-input" placeholder="0.00" required />
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="status-input" class="form-label">Status<span class="text-danger">*</span></label>
                                <select class="form-select" id="status-input">
                                    <option value="">Select Status</option>
                                    <option value="Open">Open</option>
                                    <option value="Close">Close</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Add Course</button>
                    </div>
                </div>
            </form>
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



 <!-- JAVASCRIPT -->
 <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- nouisliderribute js -->
        <script src="assets/libs/nouislider/nouislider.min.js"></script>
        <script src="assets/libs/wnumb/wNumb.min.js"></script>
        
        <!-- sweetalert2 js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- list.js min js -->
        <script src="assets/libs/list.js/list.min.js"></script>
        <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

        <!-- dropzone js -->
        <script src="assets/libs/dropzone/dropzone-min.js"></script>

        <!--learning list init js -->
        <script src="assets/js/pages/learning-list.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
        </body>

</html>

