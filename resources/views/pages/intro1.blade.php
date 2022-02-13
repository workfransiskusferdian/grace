<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="{{ asset('css/intro/style.css') }}">

    <title>Home</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 text-center intro intro-parent">
            <h1 class="intro">Hi Grace</h1>
            <p class="intro">Terima kasih sudah menigkuti permainan ini</p>
            <p class="intro">Jika ingin mengganti feedback (form alamat pengiriman, dll klik tombol dibawah)</p>
            <a  id="start" href="{{url('/form')}}" class="btn btn-lg btn-outline-light intro mt-5">Update Form</a>
        </div>
        
    </div>
</div>
{{-- <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script> --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>