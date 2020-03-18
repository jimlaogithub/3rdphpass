<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <img src="img/logo.png" alt="jimlao" width="15%" class="mt-0 mr-5 pb-0">
        </div>
        
        <div class="col-md-4">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mt-0">
                    <form class="form-inline" action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
                        <div class="form-group mb-2">
                            <input type="text" class="form-control form-control-sm" placeholder="Search" name="searchkey">
                        </div>
                        <button class="btn btn-primary btn-sm mb-2">Search</button>
                    </form>
                </li>
            </ul>
        </div>
        
        <div class="col-md-4">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">List</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                
            </ul>
        </div>
    
    </div>
</div>