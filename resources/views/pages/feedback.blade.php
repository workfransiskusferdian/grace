<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">


    <title>Form</title>
        @livewireStyles

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <livewire:feedback></livewire:feedback>

    </div>
</div>
{{-- <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script> --}}
<script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    @livewireScripts


        <script type="text/javascript">
         window.livewire.on('submitAnswer', () => {
           Swal.fire({
              icon: 'success',
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              title: 'Thank You, your answer submited!'
            })
         });
    </script>
</body>
</html>