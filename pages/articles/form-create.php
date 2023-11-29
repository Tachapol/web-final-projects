<?php include_once('../authen.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Articles Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- Bootstrap Toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../dist/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Condo Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../articles">Condo Management</a></li>
              <li class="breadcrumb-item active">Create Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Create Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="create.php" method="post" enctype="multipart/form-data">
          <div class="card-body">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name_en">Name (EN)</label>
              <input type="text" class="form-control" id="name_en" name="name_en" placeholder="" required>
            </div>

            <div class="form-group col-md-6">
              <label for="name_th">Name (TH)</label>
              <input type="text" class="form-control" id="name_th" name="name_th" placeholder="" required>
            </div>

            <div class="form-group col-md-6">
              <label for="details_en">Details (EN)</label>
              <input type="text" class="form-control" id="details_en" name="details_en" placeholder="" required>
            </div>

            <div class="form-group col-md-6">
              <label for="details_th">Details (TH)</label>
              <input type="text" class="form-control" id="details_th" name="details_th" placeholder="" required>
            </div>
            <div class="form-group col-md">
              <label for="size">Room Size</label>
              <input type="number" class="form-control" id="size" name="size" placeholder="" required>
            </div>
            <div class="form-group col-md">
              <label for="bedroom">Bedroom</label>
              <input type="number" class="form-control" id="bedroom" name="bedroom" placeholder="" required>
            </div>
            <div class="form-group col-md">
              <label for="bathroom">Bathroom</label>
              <input type="number" class="form-control" id="bathroom" name="bathroom" placeholder="" required>
            </div>
            <div class="form-group col-md">
              <label for="floor">Floor</label>
              <input type="number" class="form-control" id="floor" name="floor" placeholder="" required>
            </div>
            <div class="form-group col-md">
              <label for="price">Price</label>
              <input type="number" class="form-control" id="price" name="price" placeholder="" required>
            </div>
            <div class="form-group col-sm-12">
              <label>Upload Image</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" id="customFile" required>
                  <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              <figure class="figure text-center d-none mt-2">
                  <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
              </figure>
            </div>

            <div class="card card-outline col-md-12 m-0">
              <div class="card-header">
                <h3 class="card-title">Create Contents (EN)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm"
                          data-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <textarea class="d-none" name="text_en" id="editor1" cols="30" rows="10">
                   
                  </textarea>
                </div>
              </div>
            </div>

            <div class="card card-outline col-md-12">
              <div class="card-header">
                <h3 class="card-title">Create Contents (TH)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm"
                          data-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <textarea class="d-none" name="text_th" id="editor1" cols="30" rows="10">
                   
                  </textarea>
                </div>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label>Select a Tags</label>
              <select class="form-control select2" name="tag[]" multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
                <option value="sale">Sale</option>
                <option value="rent">Rent</option>
              </select>
            </div>
          </div>
          
          <input type="checkbox" cheked name="status" data-toggle="toggle" data-on="display" data-off="hidden" data-style="ios" data-onstyle="success">
          
        </div>
        <div class="card-footer">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
        </form>
      </div>    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- CKEditors -->
<script></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- CK Editor -->
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- Bootstrap Toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });

    $('.custom-file-input').on('change', function(){
      var size = this.files[0].size / 1024 / 1024
        if(size.toFixed(2) > 2){
          alert('File too large to upload, Maximum is 2MB')
        } else {
          var fileName = $(this).val().split('\\').pop()
          $(this).siblings('.custom-file-label').html(fileName)
          if (this.files[0]) {
              var reader = new FileReader()
              $('.figure').addClass('d-block')
              reader.onload = function (e) {
                  $('#imgUpload').attr('src', e.target.result);
              }
              reader.readAsDataURL(this.files[0])
        }
      }
    })

    //Initialize Select2 Elements
    $('.select2').select2()

    // CKEDITOR
    CKEDITOR.replace( 'text_en' ,{
      filebrowserBrowseUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
      filebrowserUploadUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
      filebrowserImageBrowseUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });
    CKEDITOR.replace( 'text_th' ,{
        filebrowserBrowseUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });

  });
  
</script>

</body>
</html>
