<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Maero</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Get the current URL path and query string
        var currentPage = window.location.href;

        // Iterate over each nav-link
        $('.nav-link').each(function() {
            // Check if the href attribute of the nav-link matches the current page
            if (this.href === currentPage) {
                // Add the active class to the matching nav-link
                $(this).addClass('active');
                // Check if this link is inside a nav-treeview
                if ($(this).closest('.nav-treeview').length) {
                    // Add the menu-open class to the parent nav-item
                    $(this).closest('.nav-item').addClass('menu-open');
                    // Add the active class to the parent nav-link
                    $(this).closest('.nav-treeview').prev('.nav-link').addClass('active');
                }
            }
        });
    });
</script>

</head>