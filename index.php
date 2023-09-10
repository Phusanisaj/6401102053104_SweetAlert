<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6401102053104 SweetAlert</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="container p-5 bg-danger text-light my-2" style="text-align: center;">
        <h1>SweetAlert</h1>
        <h2>Miss Phusanisa Jamrat</h2>
    </div>

    <div class="container">
        <div class="mb-2">
            <button class="btn btn-info" onclick="sw0()"> A basic message</button>
        </div>


        <div class="mb-2">
            <button class="btn" style="background-color:aquamarine" onclick="sw1()">1.A title with a text under</button>
        </div>

        <div class="mb-2">
            <button class="btn" style="background-color :bisque" onclick="sw2()">2.A modal with a title, an error icon, a text, and a footer</button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color:aquamarine" onclick="sw3()">3.A dialog with three buttons</button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color :bisque" onclick="sw4()">4.A custom positioned dialog</button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color:aquamarine" onclick="sw5()">5.Custom animation with Animate.css </button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color :bisque" onclick="sw6()">6.A confirm dialog, with a function attached to the "Confirm"-button</button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color :aquamarine" onclick="sw7()">7.... and by passing a parameter, you can execute something else for "Cancel"</button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color :beige" onclick="sw8()">8.A message with a custom image</button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color :aquamarine" onclick="sw9()">9.A message with auto close timer</button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color :bisque" onclick="sw10()">10.AJAX request example</button>
        </div>
        <div class="mb-2">
            <button class="btn" style="background-color :aquamarine" onclick="sw11()">11.จากข้อที่ 7</button>
        </div>
    </div>


    <script>
        function sw0() {
            Swal.fire('Hello Phusanisa')
        }

        function sw1() {
            Swal.fire(
                'Miss Phusanisa Jamrat',
                'That thing is still around?',
                'warning'
            )
        }

        function sw2() {
            Swal.fire({
                icon: 'question',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="https://www.youtube.com/watch?v=S9EQvgy8hRo">Mark Tuan - Everyone Else Fades</a>'
            })
        }

        function sw3() {
            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'error')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'warning')
                }
            })
        }

        function sw4() {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        }

        function sw5() {
            Swal.fire({
                title: 'Custom animation with Animate.css',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        }

        function sw6() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }

        function sw7() {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        }

        function sw8() {
            Swal.fire({
                title: 'Sweet!',
                text: 'Modal with a custom image.',
                imageUrl: 'img.png',
                imageWidth: 'auto',
                imageHeight: 'auto',
                imageAlt: 'Custom image',
            })
        }

        function sw9() {
            let timerInterval
            Swal.fire({
                title: 'Auto close alert!',
                html: 'I will close in <b></b> milliseconds.',
                timer: 5000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        }

        function sw10() {
            Swal.fire({
                title: 'Submit your Github username',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Look up',
                showLoaderOnConfirm: true,
                preConfirm: (login) => {
                    return fetch(`//api.github.com/users/${login}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: `${result.value.login}'s avatar`,
                        imageUrl: result.value.avatar_url
                    })
                }
            })
        }
        function sw11(){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sweet Image',
                cancelButtonText: 'นับถอยหลัง 5 วินาที',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                title: 'Sweet!',
                text: 'Modal with a custom image.',
                imageUrl: 'img.png',
                imageWidth: 'auto',
                imageHeight: 'auto',
                imageAlt: 'Custom image',
            })
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    let timerInterval
            Swal.fire({
                title: 'Auto close alert!',
                html: 'I will close in <b></b> milliseconds.',
                timer: 5000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
                }
            })
        }
    </script>
</body>

</html>