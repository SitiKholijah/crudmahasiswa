<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.html"> <h4>Create Account</h4></a>

                                <form class="user" method="POST" action="<?=base_url('index.php/Auth/cek_regis'); ?>">
                                    <div class="form-group">
                                        <input type="text" name="nama" value="<?=set_value('nama'); ?>" class="form-control from-control-user" id="nama" placeholder="Nama Lengkap">
                                        <?=form_error('nama', '<small calss="text-danger pl-3">', '</small>');?>
                                        
                                        <input type="text" class="form-control"  placeholder="nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password1" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="retail password" required>
                                    </div>                                    
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="<?= base_url('index.php/Auth')?>" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url('assets/')?>plugins/common/common.min.js"></script>
    <script src="<?= base_url('assets/')?>js/custom.min.js"></script>
    <script src="<?= base_url('assets/')?>js/settings.js"></script>
    <script src="<?= base_url('assets/')?>js/gleek.js"></script>
    <script src="<?= base_url('assets/')?>js/styleSwitcher.js"></script>
</body>
</html>





