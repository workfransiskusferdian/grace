<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('before-style')
    @include('includes.admin.style')
    @stack('after-style')
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @stack('alert')
    {{-- sidebar --}}
    @include('includes.admin.sidebar')
    {{-- navbar --}}
    @include('includes.admin.navbar')
    <!-- Content -->       
    {{-- content --}}
    @yield('content')
    <!-- /.content -->

    @include('includes.admin.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    @stack('before-script')
    @include('includes.admin.script')
    @stack('after-script')
  </div>
    @livewireScripts
    @stack('after-livewire')
</body>
</html>
