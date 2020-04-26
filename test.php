<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>



<a class="nav-link active" href="#"><button class="btn btn-outline-primary" data-toggle="modal" data-target="#signup" type="button">Log In</button></a></li>
           
        <div class="modal fade" role="dialog" tabindex="-1" id="signup">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Log In</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form action="login_process.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="text-primary input-group-text"><i class="fa fa-user"></i></i></span></div>
                                      <input class="form-control" type="text" required="" placeholder="Username" name="username" id="username">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div>
                                      <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-lg text-white"  href="#" type="submit" id="addarts" name="addarts" style="width: 100%;" type="button">Log in</button></div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
       

    <script src="assets/js//jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>