    <?php $this->load->view('header') ?>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Administrasi UKM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right"> 
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('file/login'); ?>" title="Login"> <i class="fa fa-sign-in fa-lg"></i> Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Administrasi UKM</h1>
                <hr>
                <a href="<?php echo site_url('file/register'); ?>" class="btn btn-primary btn-xl page-scroll"><i class="fa fa-user fa-lg"></i> Daftar Sekarang</a>
            </div>
        </div>
    </header>    
    <?php $this->load->view('footer') ?>