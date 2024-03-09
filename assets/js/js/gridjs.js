var jsonObject = {
    id: "",
    name: "",
    age: "",
    sex: "",
    mobile: "",
    email: "",
    hospital: "",
    doctor: "",
    status: "",
    datetime: "",
};
//Hinding 

//Getting Cookies For Test Center ID
let test_center_ID = getCookie("ztxret2twrlab8re");
function getCookie(cookiesName) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${cookiesName}=`);
    if (parts.length === 2) {
        return parts.pop().split(';').shift();
    }
}

$('.hospital-doctor').css('display', 'none');
jsonObject.firstName = "Sultan Ashraf";
// let patientList = [];

//let patientList = array();
//Onload Table Data
// $(window).on("load", function () {
//     $.getJSON('PHP-REST-API/api/getPatientList.php', function (json) {
//         // alert(json.body.length);
//         if (json.status == "success") {
//             console.log(json.body);
//             let jsonData = [];
//             for (var i = 0; i < json.body.length; i++) {
//                 //alert(json.body[i].id);
//                 var id = json.body[i].id;
//                 var dateTime = json.body[i].created_at;
//                 var name = json.body[i].patient_name;
//                 var mobile = json.body[i].patient_mobile_no;
//                 var hospital = json.body[i].hospital_name;
//                 var doctor = json.body[i].doctor_name;
//                 var age = json.body[i].patient_age;
//                 var sex = json.body[i].sex;
//                 var amount = json.body[i].amount;
//                 var status = json.body[i].status;
//                 jsonData.push(id, dateTime, name, mobile, hospital, doctor, age, sex, amount, status);
//                 patientList.push(jsonData);
//             }
//             console.log(patientList);
//         } else {
//             console.log("NA");
//         }
//     });
// });


document.getElementById("table-gridjs") &&
    new gridjs.Grid({
        columns: [
            {
                name: "ID",
                width: "55px",
                formatter: function (e) {
                    return gridjs.html('<span class="fw-semibold">' + e + "</span>");
                },
            },
            { name: "Date Time", width: "100px" },
            { name: "Name", width: "100px" },
            { name: "Mobile", width: "100px" },
            { name: "Hospital", width: "120px" },
            { name: "Doctor", width: "120px" },
            { name: "Age", width: "60px" },
            { name: "Sex", width: "60px" },
            { name: "Amount", width: "85px" },
            // {
            //     name: "Email",
            //     width: "200px",
            //     formatter: function (e) {
            //         return gridjs.html('<a href="">' + e + "</a>");
            //     },
            // },
            {
                name: "Satus",
                width: "80px"
                // formatter: function (e) {
                //     return gridjs.html("<span class='badge bg-info-subtle text-info'></span>");
                // },
            },
            {
                name: "Actions",
                formatter: function (_, row) {
                    return gridjs.html(
                        `<ul class='d-flex gap-2 list-unstyled mb-0'>
                        <li>
                        <div class="viewTestList" onclick="viewTestList(${row.cells[0].data})">
                        <a class='btn btn-icon btn-sm btn-subtle-primary' id="tests" href=#viewTests data-bs-toggle="modal">
                        <i class=ph-eye></i>
                        </a>
                        </div>
                        <li>
                        <div class="updatePatient" onclick="updatePatient(${row.cells[0].data})">
                        <a class='btn btn-icon btn-sm btn-subtle-secondary edit-item-btn'href=#updatePatient data-bs-toggle=modal>
                        <i class=ph-pencil>
                        </i>
                        </a>
                        </div>
                        <li>
                        <div class="deletePatient" hidden>${row.cells[0].data}</div>
                        <a class='btn btn-icon btn-sm btn-subtle-danger remove-item-btn'href=#deleteRecordModal data-bs-toggle=modal>
                        <i class=ph-trash>
                        </i>
                        </a>
                        </ul>`
                    );
                },
                //formatter: (_, row) => html(`<a href='mailto:${row.cells[1].data}'>Email</a>`)
                // formatter: (cell, row) => {
                //     return h('button', {
                //         className: 'py-2 mb-4 px-4 border rounded-md text-white bg-blue-600',
                //         onClick: () => alert(`Editing "${row.cells[0].data}" "${row.cells[1].data}"`)
                //     }, 'Edit');
                // }
                // formatter: function (e) {
                //     return gridjs.html(
                //         "<ul class='d-flex gap-2 list-unstyled mb-0'><li><a class='btn btn-icon btn-sm btn-subtle-primary'href=apps-learning-overview.html><i class=ph-eye></i></a><li><a class='btn btn-icon btn-sm btn-subtle-secondary edit-item-btn'href=#addCourse data-bs-toggle=modal><i class=ph-pencil></i></a><li><a class='btn btn-icon btn-sm btn-subtle-danger remove-item-btn'href=#deleteRecordModal data-bs-toggle=modal><i class=ph-trash></i></a></ul>"
                //     );
                // },
            },
        ],
        pagination: { limit: 3 },
        sort: !0,
        search: !0,
        server: {
            url: 'http://localhost/londonLabs/PHP-REST-API/api/getPatientList.php?labID=' + test_center_ID,
            data: (opts) => {
                return new Promise((resolve, reject) => {
                    // let's implement our own HTTP client
                    const xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4) {
                            if (this.status === 200) {
                                const resp = JSON.parse(this.response);

                                // make sure the output conforms to StorageResponse format: 
                                // https://github.com/grid-js/gridjs/blob/master/src/storage/storage.ts#L21-L24
                                resolve({
                                    data: resp.body.map(patientList => [patientList.id, patientList.created_at, patientList.patient_name, patientList.patient_mobile_no, patientList.hospital_name, patientList.doctor_name, patientList.patient_age, patientList.sex, patientList.patient_test_total_amount, patientList.status]),
                                    total: resp.total_cards,
                                });
                            } else {
                                reject();
                            }
                        }
                    };
                    xhttp.open("GET", opts.url, true);
                    xhttp.send();
                });
            }
        },

        // data: [
        //     ["0001", "06/06/2023", "Aftab Alam", "8978787677", "Sufia Memorial Hospital", "MD Muntazzir", "23", "M", "1000", "Collected"],
        //     ["0002", "06/06/2023", "Shamshad Alam", "8978787677", "Sufia Memorial Hospital", "MD Muntazzir", "23", "M", "1000", "Collected"],
        //     ["0003", "06/06/2023", "Jonathan", "8978787677", "Sufia Memorial Hospital", "MD Muntazzir", "23", "M", "1000", "Collected"],
        //     ["0004", "06/06/2023", "Jonathan", "8978787677", "Sufia Memorial Hospital", "MD Muntazzir", "23", "M", "1000", "Collected"],
        //     ["0005", "06/06/2023", "Jonathan", "8978787677", "Sufia Memorial Hospital", "MD Muntazzir", "23", "M", "1000", "Collected"],
        //     ["0006", "06/06/2023", "Jonathan", "8978787677", "Sufia Memorial Hospital", "MD Muntazzir", "23", "M", "1000", "Collected"],
        // ],
    }).render(document.getElementById("table-gridjs"));

// Swal.hideLoading();

$(document).ready(function () {
    $("#patient-ref").on("change", function () {
        let refrance_type = $(this).val();
        if (refrance_type === "doctor-ref") {
            $('.hospital-doctor').show();
        } else {
            $('.hospital-doctor').css('display', 'none');
        }
    });
});

//For New Patient
$(document).ready(function () {
    $("#patient-hospital").on("change", function () {
        // e.preventDefault();
        var hospital_id = $(this).val();
        if (hospital_id == 0) {
            Swal.hideLoading();
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "OOps! Please Select Hospital",
                showConfirmButton: false,
                timer: 3000,
            });
        } else {
            $.getJSON('PHP-REST-API/api/getDoctorByHospitalForDropdown.php?id=' + hospital_id, function (json) {
                // alert(json.body.length);
                if (json.status == "success") {
                    $("#patient-doctor").empty();
                    var s = '<option value="0">Select Doctor</option>';
                    for (let r of json.body) {
                        s += '<option value="' + r.id + '">' + r.doctor_name + '</option>';
                    }
                    $("#patient-doctor").html(s);
                } else {
                    $("#patient-doctor").empty();
                    var s = '<option value="0">No Doctors Found For Selected Hospital</option>';
                    $("#patient-doctor").html(s);
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "OOps! No Doctors Found",
                        showConfirmButton: false,
                        timer: 3000,
                    });
                }
            });
            /*$.ajax({
            type: "POST",
            url: "PHP-REST-API/api/getDoctorByHospitalForDropdown.php",
            data: {
                hospital_id : hospital_id
            },
            success: function (response) {
                for (let r of response.body) {
                    alert(r.id);
                }
                //console.log(response.body[0]);
                // if (response === "success") {
                //     //Seting Sessions
                //     Swal.hideLoading();
                //     Swal.fire({
                //         position: "top-end",
                //         icon: "success",
                //         title: "Profile Details Updated!",
                //         showConfirmButton: false,
                //         timer: 3000,
                //     });
                //     setTimeout(function () {
                //         window.location.href = "profileMember.php";
                //     }, 3000);
                // } else if (response === "error") {
                //     Swal.hideLoading();
                //     Swal.fire({
                //         position: "top-end",
                //         icon: "error",
                //         title: "OOps! Somthing Went Wrong!",
                //         showConfirmButton: false,
                //         timer: 3000,
                //     });
                // }
            },
        });*/
        }
    });
});

//For Update Patient
$(document).ready(function () {
    $("#patient-hospital-update").on("change", function () {
        // e.preventDefault();
        var hospital_id = $(this).val();
        if (hospital_id == 0) {
            Swal.hideLoading();
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "OOps! Please Select Hospital",
                showConfirmButton: false,
                timer: 3000,
            });
        } else {
            $.getJSON('PHP-REST-API/api/getDoctorByHospitalForDropdown.php?id=' + hospital_id, function (json) {
                // alert(json.body.length);
                if (json.status == "success") {
                    $("#patient-doctor-update").empty();
                    var s = '<option value="0">Select Doctor</option>';
                    for (let r of json.body) {
                        s += '<option value="' + r.id + '">' + r.doctor_name + '</option>';
                    }
                    $("#patient-doctor-update").html(s);
                } else {
                    $("#patient-doctor-update").empty();
                    var s = '<option value="0">No Doctors Found For Selected Hospital</option>';
                    $("#patient-doctor-update").html(s);
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "OOps! No Doctors Found",
                        showConfirmButton: false,
                        timer: 3000,
                    });
                }
            });
        }
    });
});

//Ajax Call On Submit Patient Form...
$(document).ready(function () {
    $("#patient_form").on("submit", function (e) {
        Swal.showLoading();
        e.preventDefault();
        let testArray = new Array();
        var count = $(".selected-wrapper a").length;
        var items = document.getElementsByClassName('item selected');
        for (var i = 0; i < count; i++) {
            testArray.push(items[i].innerHTML);
        }
        var patient_tests = JSON.stringify(testArray);
        //alert(items[i].innerHTML);
        //Validation On Form submission
        const token = $('meta[name="token"]').attr('content');
        var patient_name = $("#patient-name").val();
        var patient_age = $("#patient-age").val();
        var patient_sex = $("#patient-sex").val();
        var patient_mobile = $("#patient-mobile").val();
        var patient_email = $("#patient-email").val();
        var patient_ref = $("#patient-ref").val();
        var patient_hospital = $("#patient-hospital").val();
        var patient_doctor = $("#patient-doctor").val();
        var patient_discount = $("#patient-discount").val();
        var patient_status = $("#patient-status").val();
        if (patient_name == null) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Name.!'
            })
            return;
        }
        if (patient_age == null) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Entre Age.!'
            })
            return;
        }
        if (patient_sex == 0) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Sex.!'
            })
            return;
        }
        if (patient_mobile == null) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Mobile Number.!'
            })
            return;
        }
        if (patient_email == null) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Email.!'
            })
            return;
        }
        if (patient_ref == 0) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Patient Refrance.!'
            })
            return;
        }
        if (patient_ref == "doctor-ref") {
            if (patient_hospital == 0) {
                Swal.hideLoading();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Select Hospital.!'
                })
                return;
            }
            if (patient_doctor == 0) {
                Swal.hideLoading();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Select Doctor.!'
                })
                return;
            }
        }
        if (count == 0) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Tests.!'
            })
            return;
        }
        if (patient_status == 0) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Status.!'
            })
            return;
        }
        $.ajax({
            type: "POST",
            url: "PHP-REST-API/api/addPatient.php",
            headers: { "token": token },
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                "ajax_call": true,
                patient_name: patient_name,
                patient_age: patient_age,
                patient_sex: patient_sex,
                patient_mobile: patient_mobile,
                patient_email: patient_email,
                patient_ref: patient_ref,
                patient_hospital: patient_hospital,
                patient_doctor: patient_doctor,
                patient_discount: patient_discount,
                patient_status: patient_status,
                patient_tests: patient_tests
            }),
            success: function (response) {
                if (response.success == true) {
                    Swal.hideLoading();
                    let timerInterval
                    Swal.fire({
                        title: 'Patient Added..!',
                        html: 'Successfull',
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 400)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            window.location.href = "patient.php";
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                } else if (response.success == false) {
                    Swal.hideLoading();
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Error While Addeding Patient!",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                    });
                }
            }
        });
    });
});

//Update Form AJAX Call
$(document).ready(function () {
    $("#patient_form_update").on("submit", function (e) {
        Swal.showLoading();
        e.preventDefault();
        let testArray = new Array();
        var count = $(".selected-wrapper a").length;
        var items = document.getElementsByClassName('item selected');
        for (var i = 0; i < count; i++) {
            testArray.push(items[i].innerHTML);
        }
        var patient_tests = JSON.stringify(testArray);
        //alert(items[i].innerHTML);
        //Validation On Form submission
        const token = $('meta[name="token"]').attr('content');
        var patient_id_for_update = $("#patient-id-for-update").val();
        var patient_name = $("#patient-name-update").val();
        var patient_age = $("#patient-age-update").val();
        var patient_sex = $("#patient-sex-update").val();
        var patient_mobile = $("#patient-mobile-update").val();
        var patient_email = $("#patient-email-update").val();
        var patient_ref = $("#patient-ref-update").val();
        var patient_hospital = $("#patient-hospital-update").val();
        var patient_doctor = $("#patient-doctor-update").val();
        var patient_discount = $("#patient-discount-update").val();
        var patient_status = $("#patient-status-update").val();
        if (patient_name == null) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Name.!'
            })
            return;
        }
        if (patient_age == null) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Entre Age.!'
            })
            return;
        }
        if (patient_sex == 0) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Sex.!'
            })
            return;
        }
        if (patient_mobile == null) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Mobile Number.!'
            })
            return;
        }
        if (patient_email == null) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Email.!'
            })
            return;
        }
        if (patient_ref == 0) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Patient Refrance.!'
            })
            return;
        }
        if (patient_ref == "doctor-ref") {
            if (patient_hospital == 0) {
                Swal.hideLoading();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Select Hospital.!'
                })
                return;
            }
            if (patient_doctor == 0) {
                Swal.hideLoading();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Select Doctor.!'
                })
                return;
            }
        }
        if (count == 0) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Tests.!'
            })
            return;
        }
        if (patient_status == 0) {
            Swal.hideLoading();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Status.!'
            })
            return;
        }
        $.ajax({
            type: "POST",
            url: "PHP-REST-API/api/updatePatientss.php",
            headers: { "token": token },
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                "ajax_call": true,
                patient_id_for_update: patient_id_for_update,
                patient_name: patient_name,
                patient_age: patient_age,
                patient_sex: patient_sex,
                patient_mobile: patient_mobile,
                patient_email: patient_email,
                patient_ref: patient_ref,
                patient_hospital: patient_hospital,
                patient_doctor: patient_doctor,
                patient_discount: patient_discount,
                patient_status: patient_status,
                patient_tests: patient_tests
            }),
            success: function (response) {
                if (response.success == true) {
                    Swal.hideLoading();
                    let timerInterval
                    Swal.fire({
                        title: 'Patient Added..!',
                        html: 'Successfull',
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 400)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            window.location.href = "patient.php";
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                } else if (response.success == false) {
                    Swal.hideLoading();
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Error While Addeding Patient!",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                    });
                }
            }
        });
    });
});


function viewTestList(patientID) {
    let id = patientID;
    const token = $('meta[name="token"]').attr('content');
    $.ajax({
        type: "POST",
        url: "PHP-REST-API/api/getPatientTestList.php?id=" + id,
        headers: { "token": token },
        success: function (response) {
            $("#patientTestsList").find("tr:gt(0)").remove();
            for (let i = 0; i < response.itemCount; i++) {
                let sno = response.body[i].sno;
                let patientName = response.body[i].patient_name;
                let test_cat_name = response.body[i].test_cat_name;
                let test_name = response.body[i].test_name;
                let amount = response.body[i].amount;

                $('#patientTestsList').append('<tr><td style="font-weight:bold">' + sno + '</td><td>' + patientName + '</td><td>' + test_cat_name + '</td><td>' + test_name + '</td><td>₹' + amount + '</td></tr>');
            }
            var table = document.getElementById("patientTestsList");
            var footer = table.createTFoot();
            var row = footer.insertRow(0);
            var cell = row.insertCell(0);
            cell.innerHTML = '<tfoot class="table - light"><tr><td colspan="4">Total </td><td>₹ ' + response.total_amount + '</td></tr></tfoot>';
        }
    });
}

function updatePatient(patientID) {
    let id = patientID;
    $("#patient-id-for-update").val(id);
    $.ajax({
        type: "POST",
        url: "PHP-REST-API/api/getPatientDataForUpdate.php?id=" + id,
        // headers: { "token": token },
        success: function (response) {
            let id = response.body[0].id;
            let patient_name = response.body[0].patient_name;
            let patient_age = response.body[0].patient_age;
            let sex = response.body[0].sex;
            let patient_mobile_no = response.body[0].patient_mobile_no;
            let patient_email = response.body[0].patient_email;
            let patient_ref = response.body[0].patient_ref
            let hospital = response.body[0].hospital;
            let hospital_name = response.body[0].hospital_name;
            let doctor = response.body[0].doctor;
            let doctor_name = response.body[0].doctor_name;
            let discount_perc = response.body[0].discount_perc;
            let statusValue = response.body[0].status;
            let statusName = '';
            if (statusValue == 'collected') {
                statusName = 'Sample Collected';
            } else if (statusValue == 'yetTocollected') {
                statusName = 'Yet To Collect Sample';
            }

            let test_id = response.tests[0].test_id;
            let test_name = response.tests[0].test_name;

            let self_ref = "Self Refrance";
            let doctor_ref = "Doctor Refrance";

            $("#patient-name-update").val(patient_name);
            $("#patient-age-update").val(patient_age);
            $("option[value='" + sex + "']").remove();
            $('#patient-sex-update').append(`<option value="${sex}" selected>${sex}</option>`);
            $('#patient-sex').append(`<option value="${sex}">${sex}</option>`);
            $('#patient-mobile-update').val(patient_mobile_no);
            $('#patient-email-update').val(patient_email);
            $("option[value='" + patient_ref + "']").remove();
            if (patient_ref == "self-ref") {
                $('#patient-ref-update').append(`<option value="${patient_ref}" selected>${self_ref}</option>`);
                $('#patient-ref').append(`<option value="${patient_ref}">${self_ref}</option>`);
                $('.hospital-doctor').css('display', 'none');
            }
            if (patient_ref == "doctor-ref") {
                $('#patient-ref-update').append(`<option value="${patient_ref}" selected>${doctor_ref}</option>`);
                $('#patient-ref').append(`<option value="${patient_ref}">${doctor_ref}</option>`);
                $('.hospital-doctor').show();
            }
            //
            // var x = document.getElementById("patient-ref-update");
            // if (x.length > 0) {
            //     x.remove(x.length - 1);
            // }
            //$("option[value='" + hospital + "']").remove();
            // Removing Last Item From Dropdown
            var x = document.getElementById("patient-hospital-update");
            if (x.length > 0) {
                x.remove(x.length - 1);
            }


            // JSON Call to get Doctors by Hospital ID
            $.getJSON('PHP-REST-API/api/getDoctorByHospitalForDropdown.php?id=' + hospital, function (json) {
                // alert(json.body.length);
                if (json.status == "success") {
                    $("#patient-doctor-update").empty();
                    var s = '';
                    for (let r of json.body) {
                        s += '<option value="' + r.id + '">' + r.doctor_name + '</option>';
                    }
                    $("#patient-doctor-update").html(s);
                }
            });

            $('#patient-hospital-update').append(`<option value="${hospital}" selected>${hospital_name}</option>`);
            //$("option[value='" + doctor + "']").remove();
            $('#patient-doctor-update').append(`<option value="${doctor}" selected>${doctor_name}</option>`);

            //Tset name
            //alert("Please select :- " + response.tests.length); +
            for (var i = 0; i < response.tests.length; i++) {
                $(".selected-wrapper").append("<a tabindex='0' class='item selected' role='button' data-value='" + i + "' multi-index='0'>" + response.tests[i].test_name + "</a>");
            }
            $("#patient-discount-update").val(discount_perc);
            $("option[value='" + statusValue + "']").remove();
            $('#patient-status-update').append(`<option value="${statusValue}" selected>${statusName}</option>`);
        }
    });
}

$('#updatePatient').on('hidden.bs.modal', function () {
    location.reload();
});

