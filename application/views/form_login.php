<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9 mx-auto">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-primary mb-4">
                                            <div class="sidebar-brand-text mx-3"><i class="fas fa-store"></i><strong> KuyBel!</strong></div>
                                        </h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" class="user" action="<?php echo base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username" autofocus>
                                            <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                            <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block form-control-user">
                                            Login
                                        </button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('registrasi/index') ?>">Belum Punya Akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    </html>