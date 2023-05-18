<nav class="navbar fixed-top navbar-expand-lg navbar-styles">
    <div class="container-fluid">
        <a class="navbar-brand ms-3" href="<?php echo ROOT?>">
        <div class="logo-container">
            <img src="<?= APPPATH . "/resources/logorecon.png" ?>" class="d-inline-block align-top add-shadow" alt="">
        </div>
          
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse d-xxl-inline-flex justify-content-between navbar-toggleable-sm list-border collaps-nav" id="navbarSupportedContent">
            <ul class="navbar-nav flex-grow-1 justify-content-end" style="font-size: 18px;">
                <li class="nav-item me-1">
                    <a class="nav-link p-3 text-center text-lg-start fw-bold" href="<?php echo ROOT."#ourcompany"?>">FIRMA</a>
                </li>
                <li class="nav-item me-1">
                    <a class="nav-link p-3 text-center text-lg-start fw-bold" href="<?php echo ROOT."#aboutus"?>">O NAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 text-center text-lg-start fw-bold" href="<?php echo ROOT."#offer"?>">OFERTA</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link p-3 text-center text-lg-start fw-bold" href="<?php echo ROOT."#footer"?>">KONTAKT</a>
                </li>  
            </ul>
        </div>
    </div>
</nav>