<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses diblock</title>
    <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
    <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid mt-5">
                    <div class="text-center">
                        <div class="error mx-auto" data-text="403">403</div>
                        <p class="lead text-gray-800 mb-5">Aksess tidak diizinkan</p>
                        <p class="text-gray-500 mb-0">Sepertinya kamu megakses halaman yang salah</p> 
                        <a href="<?= base_url('user');?>">&larr; Kembali ke Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top"> 
        <i class="fas fa-angle-up"></i> </a> <!-- Logout Modal--> 
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document"> <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5> 
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"> 
                    <span aria-hidden="true">×</span> 
                </button> 
            </div> 
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div> 
            <div class="modal-footer"> 
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> 
                <a class="btn btn-primary"
                href="login.html">Logout</a> 
            </div> 
        </div> 
    </div>
    <script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script> 
    <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>
</body>
</html>