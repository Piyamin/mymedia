<body>
    <div class="container">
        <div class="row">
            <div class="col-4 ">
                <div class=".img-fluid. max-width: 100%;">
                    <h1 id="logo"><a href="<?php echo base_url('/main') ?>">MyMedia</a></h1>
                </div>
            </div>
            <div class="col-6"></div>
            <div class="col-2">
                <i class="fas fa-user-circle fa-2x mt-4" id="iconuser" data-toggle="dropdown"></i>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo base_url('account') ?>">Acount</a>
                    <a class="dropdown-item" href="#">help</a>
                    <a class="dropdown-item" href="<?php echo base_url('addmovie') ?>">Add movie</a>
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="<?php echo base_url()?>">LogOut</a>
                </div>
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark h-50 ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url('main') ?>">
                                    HOME<span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    GENRES
                                </a>
        
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($genres as $row) { ?>
                                    <a class="dropdown-item" href="<?php echo base_url('movie/'.$row['_id'])?>"><?php echo $row['genName'] ?></a>
                                <?php } ?>   
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url('comingsoon')?>">
                                    COMING SOON</h1> <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item active">
                                <?php $historyId = '5eaf0005f0656e7d8afe90d6' ?>        
                                <a class="nav-link" href="<?php echo base_url('history/').$historyId?>">
                                    HISTORY<span class="sr-only">(current)</span>
                                </a>
                            
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url('contact')?>">
                                    CONTACT<span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <form class="form-inline my-2 my-lg-0" method="get">
                                <input class="form-control mr-lg-2" id="search" name ="name" type="search" placeholder="Search" aria-label="Search" value="<?php echo $name; ?>">
                                <button class="btn btn-outline-success my-2 my-sm-0" name="search" value="search" type="submit" <?php echo $name; ?>>Search</button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>