<style>
.topnav a:hover {
  background-color: blue;
  padding: 10px;
    background: white;
    color: red;
}

.topnav a.active {
  border-bottom: 2px solid ; 
  text-align: center;
  color: white;
  font-weight: bolder;
}
</style>
</style>
<header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="mailto:info@officemove.uk"> <i class="fa fa-envelope"></i> info@officemove.uk</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i> 1601-609 6780</a></li>
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-lg-block">
                                    <a class="boxed-btn3-line" data-toggle="modal" data-target="#quoteModalCenter" href="#">Get Free Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/log1o.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <div class="topnav">

                                            <ul id="navigation">
                                                
                                                <li><a class="<?=(basename($_SERVER['PHP_SELF']) == "index.php" )? "active":"" ?>" href="index.php">Home</a></li>
                                                <li>|</li> <li><a class="<?=(basename($_SERVER['PHP_SELF']) == "services.php" )? "active":"" ?>" href="services.php">Services <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="sub-pages/office-clearance.php">Office Clearance</a></li>
                                                    <li><a href="sub-pages/clear-relocation.php">Clear Relocation</a></li>
                                                    <li><a href="sub-pages/clear-storage.php">Clear Storage</a></li>
                                                    <li><a href="sub-pages/asset-purchesing.php">Asset Purchesing</a></li>
                                                    <li><a href="sub-pages/recycling-reuse.php">Recycling & Reuse</a></li>
                                                    <li><a href="sub-pages/waste-removal.php">Waste Removal</a></li>
                                                    <li><a href="sub-pages/house-clearance.php">House Clearance</a></li>
                                                </ul></li>
                                             <li>|</li><li><a class="<?=(basename($_SERVER['PHP_SELF']) == "about-us.php" )? "active":"" ?>" href="about-us.php">about</a></li>
                                             <li>|</li><li><a class="<?=(basename($_SERVER['PHP_SELF']) == "blog.php" )? "active":"" ?>" href="blog.php">blog</a></li>
                                             <li>|</li><li><a class="<?=(basename($_SERVER['PHP_SELF']) == "contact.php" )? "active":"" ?>" href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="serch_form">
                    <input type="text" placeholder="Search..." >
                    <button type="submit">search</button>
                </div>
            </form>
        </div>
        </div>
    </div>