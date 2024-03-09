$(document).ready(function () {
    $("#signin-form").on("submit", function (event) {
        Swal.showLoading();
        event.preventDefault();
        const token = $('meta[name="token"]').attr('content');
        var data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "PHP-REST-API/api/login.php",
            headers: { "token": token },
            data: data,
            success: function (response) {
                if (response.status == "success") {
                    Swal.hideLoading();
                    let timerInterval
                    Swal.fire({
                        title: 'Loged In!',
                        html: 'Welcome Back..!',
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 300)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            window.location.href = "index.php";
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                } else {
                    Swal.hideLoading();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Wrong Mobile & Password.!'
                    })
                }
            }
        });
    });
});