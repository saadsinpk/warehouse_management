<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <title><?php echo display('admin_login_area'); ?></title>
        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url() ?>assets/bootstrap-4.3.1.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>


    </head>
    <style type="text/css">
        .bg-img {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            /*background-image: url(../img/register-bg.jpg);*/
            background-image: url(<?php echo base_url('assets/dist/img/login-bg.jpg'); ?>);
        }
        .form-input .form-input-group {
            background: #fff;
            padding-top: 14px;
            padding-left: 20px;
            -ms-flex-align: center;
            align-items: center;
            display: -ms-flexbox;
            display: flex;
            border: 1px solid rgba(128, 128, 128, 0.2);
            margin-bottom: 8px;
            margin-right: 8px;
            border-top: 0;
            border-left: 0;
            position: relative;
        }
        .form-input-group .apend-wrap i {
            vertical-align: 12px;
            font-size: 25px;
            opacity: 0.5;
        }
        .form-input .form-input-group .form-group {
            width: 100%;
            margin-bottom: 0;
            margin-left: 15px;
        }
        .form-input .form-input-group .form-group label {
            margin: 0; 
            color: #1a171b;
            font-weight: 600;
        }
        .input-line .form-control{
            border-color: transparent;
            padding-left: 0;
            padding-right: 0;
            background-color: transparent;
            font-size: 15px;

            -webkit-transition: background 0.3s;
            transition: background 0.3s;
        }
        .input-line .form-control:focus + .underline,
        .billing-form .form-control:focus + .underline {
            transform: scale(1);
        }

        .underline {
            background-color: #40844e;
            display: inline-block;
            height: 2px;
            left: 0;
            margin-top: 0;
            position: absolute;
            bottom: 0;
            -webkit-transform: scale(0, 1);
            transform: scale(0, 1);
            -webkit-transition: all 0.1s linear;
            transition: all 0.1s linear;
            width: 100%;
        }
        .input-line .form-control:focus,
        .input-line .form-control.focus,
        .billing-form .form-control:focus,
        .billing-form .form-control.focus {
            -webkit-background-size: 100% 2px, 100% 2px;
            background-size: 100% 2px, 100% 2px;
            border-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .form-input .form-input-group .form-group .form-control {
            margin-top: -0.6rem;
        }
        .h-100vh{
            height: 100vh !important;
        }
    </style>
    <body class="d-flex align-items-center justify-content-center h-100vh bg-light">
        <main class="main-content d-flex align-items-center position-relative h-100vh w-100 bg-light">
            <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-flex bg-img " data-overlay="1">
                <div class="w-100 p-5 text-center h-100vh d-flex align-items-start flex-column">
                    <!--                    <div class="mb-auto">
                                            <a href="#"><img src="assets/img/logo-white.svg" width="150" /></a>
                                        </div>-->
                    <div class="mb-auto text-white position-relative">
                        <h4 class="text-white font-weight-100 fs-30" style="font-size: 26px;">
                            Wholesale Management System
                        </h4>

                    </div>
                    <div class="row w-100">
                        <div class="col-12">
                            <p class="text-white fs-14 mb-0 mt-1">© <span class="o-7">Copyright Bdtask Limited 2019</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-7 col-xl-5 offset-md-2 offset-lg-2 offset-xl-3">
                        <div class="my-4">
                            <div class="mb-6">
                                <h2 class="h3 font-weight-normal mb-1">
                                    Sign in to your account!
                                </h2>
                                <!-- Alert Message -->
                                <?php
                                $message = $this->session->userdata('message');
                                if (isset($message)) {
                                    ?>
                                    <div class="alert alert-info alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $message ?>                    
                                    </div>
                                    <?php
                                    $this->session->unset_userdata('message');
                                }
                                $error_message = $this->session->userdata('error_message');
                                if (isset($error_message)) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $error_message ?>                    
                                    </div>
                                    <?php
                                    $this->session->unset_userdata('error_message');
                                }
                                $CI = & get_instance();
                                $CI->load->model('Web_settings');
                                $setting_detail = $CI->Web_settings->retrieve_setting_editdata();
                                ?>
                            </div>
                            <form action="<?php echo base_url('Admin_dashboard/do_login'); ?>" class="input-line form-input" method="post" role="form"><input name="__RequestVerificationToken" type="hidden" value="taOVCZ8ByZxzwo2EoGgH7a7-RLwDWNwFXER98obdmhtzRJ4NakV7XpOo2ljTKAkfBpwet3E4EUDaAxBeRowl4CjlEbF0Q_XyPeGVZDxAY0Q1" /><div class="validation-summary-valid text-danger" data-valmsg-summary="true"><ul><li style="display:none"></li>
                                    </ul></div>                    <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <div class="form-input-group">
                                            <div class="apend-wrap">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="form-group">
                                                <label class="required" for="username"><?php echo display('email'); ?></label>
                                                <input class="form-control" data-val="true" data-val-required="The UserName field is required." id="username" name="username" placeholder="Your email" type="email" value="" />
                                                <span class="underline"></span>
                                                <input data-val="true" data-val-required="The UserRole field is required." id="UserRole" name="UserRole" type="hidden" value="Member" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <div class="form-input-group">
                                            <div class="apend-wrap">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="form-group">
                                                <label class="required" for="password"><?php echo display('password'); ?></label>
                                                <input class="form-control" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." id="password" name="password" placeholder="Your password" type="password" value="" />
                                                <span class="underline"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 text-right">
                                        <a href="#" class="m-link-muted small" data-toggle="modal" data-target="#passwordrecoverymodal"><b class="text-right"><?php echo display('forgot_password') ?></b></a>
                                    </div>

                                    <div class="col-md-12 center">
                                        <input type="submit" class="btn btn-success btn-block transition-hover mt-4 mb-2" value="Log In">
                                    </div>
                                </div>
                                <div class="text-center">
                                   
                                </div>
                            </form>  
                            <!-- Modal -->
                            <div class="modal fade" id="passwordrecoverymodal" tabindex="-1" role="dialog" aria-labelledby="recoverylabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="recoverylabel" style="float: left;"><?php echo display('password_recovery') ?></h5>
                                            <!--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>-->
                                            <div id="outputPreview" class="alert hide modal-title" role="alert" >
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo form_open('', array('id' => 'passrecoveryform',)) ?>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label"><?php echo display('email') ?> <i class="text-danger">*</i></label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" name ="rec_email" id="email" type="text" placeholder="<?php echo display('email') ?>"  required="">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="button" class="btn btn-success" onclick="sendFunction()"  value="Send">
                                        </div>
                                        <?php echo form_close() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- bootstrap min js -->
        <script src="<?php echo base_url('assets/bootstrap-4.3.1.min.js'); ?>" type="text/javascript"></script>

        <script type="text/javascript">
                                                $(document).ready(function () {
                                                    var info = $('table tbody tr');
                                                    info.click(function () {
                                                        var email = $(this).children().first().text();
                                                        var password = $(this).children().first().next().text();
                                                        var user_role = $(this).attr('data-role');

                                                        $("input[type=email]").val(email);
                                                        $("input[type=password]").val(password);
                                                        $('select option[value=' + user_role + ']').attr("selected", "selected");
                                                    });
                                                });
                                                //    ============ its for sendFunction =============
                                                function sendFunction() {
                                                    var outputPreview = $('#outputPreview');
                                                    var email = $("#email").val();
                                                    $.ajax({
                                                        url: "<?php echo base_url('Admin_dashboard/password_recovery'); ?>",
                                                        type: "POST",
                                                        data: {email: email},
                                                        success: function (data) {
                                                            //                alert(data);
                                                            if (data == 1) {
                                                                $("#recoverylabel").hide();
                                                                outputPreview.removeClass("hide").removeClass("alert-danger").addClass('alert-success').html("Mail send successfully!");
                                                                setTimeout(function () {// wait for 2 secs(2)
                                                                    location.reload();
                                                                }, 3000);
                                                            } else {
                                                                $("#recoverylabel").hide();
                                                                outputPreview.removeClass("hide").removeClass("alert-danger").addClass('alert-danger').html("Please enter valid mail!");
                                                            }
                                                        }
                                                    });
                                                }
        </script>
    </body>
</html>