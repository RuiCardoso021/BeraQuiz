<header class="header-menu">
    <!--imports-->
    <link rel="stylesheet" href="assents/css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assents/js/menu.js" async defer></script>       
        
            <!--Mobile Menu Top-->
            <nav class="navbar navbar-expand-md navbar-light navbar-fixed-top text-center" id="menu-top">
              <div class="container-fluid container-menu">
                <div class="col-xl-3 adaptar-col">
                  <div class="container container-img-menu">
                      <a class="nav-link a-logo" href="#">
                          <div class="logo-border"></div>
                          <img class="img img-logo" src="img/logo.PNG" alt="Bera Quiz">
                      </a>
                  </div>
                </div>
                <div class="col-xl-9">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="nav-item item-home active-nav" id="item-home">
                        <a class="nav-link" href="index.php">Home</a>
                      </li>
                      <!--<li class="nav-item item-search" id="item-search">
                        <a class="nav-link" href="#">Search </a>
                      </li>-->
                      <li class="nav-item item-profile" id="item-profile">
                        <a class="nav-link" href="profile.php">Profile </a>
                      </li>
                      <!--<li class="nav-item item-settings" id="item-settings">
                        <a class="nav-link" href="#">Settings </a>
                      </li>-->
                    </ul>
                  </div>
                </div>
              </div>
            </nav>



            <!--Mobile Menu Button-->
            <ul class="nav mobile-footer" id="menu-mobile">
                <li class="menu-mobile nav-item item-home" id="item-home">
                    <a href="#" class="nav-link">
                        <span>
                            <svg class="svg bi bi-list-ul" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm-3 1a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <!--<li class="nav-item item-search" id="item-search">
                    <a href="#" class="nav-link"> 
                        <span>
                            <svg class="svg bi bi-search" id="Layer_1" data-name="Layer 1" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </a>
                </li>-->
                <li class="nav-item item-profile" id="item-profile">
                    <a href="profile.php" class="nav-link">
                        <span>
                            <svg class="svg bi bi-person" id="Layer_1" data-name="Layer 1"  viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <!--<li class="nav-item item-settings" id="item-settings">
                    <a href="#" class="nav-link">
                        <span>
                            <svg class="svg bi bi-gear" id="Layer_1" data-name="Layer 1"  viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 014.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 01-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 011.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 012.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 012.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 011.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 01-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 018.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 001.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 00.52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 00-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 00-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 00-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 00-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 00.52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 001.255-.52l.094-.319z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 100 4.492 2.246 2.246 0 000-4.492zM4.754 8a3.246 3.246 0 116.492 0 3.246 3.246 0 01-6.492 0z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </a>
                </li>-->
            </ul>


            <!--button go to top-->
            <button onclick="topFunction()" id="top-auto" title="Go to top">
              <svg class="bi bi-chevron-double-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l6 6a.5.5 0 01-.708.708L8 3.707 2.354 9.354a.5.5 0 11-.708-.708l6-6z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 01.708 0l6 6a.5.5 0 01-.708.708L8 7.707l-5.646 5.647a.5.5 0 01-.708-.708l6-6z" clip-rule="evenodd"/>
              </svg>
            </button>

            <!--search modal-->
            <div id="myOverlay" class="overlay">
              <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
              <div class="overlay-content">
                  <input id="search" type="text" name="search" value="" class="input-text form-control" maxlength="128" placeholder="Search..." role="combobox" aria-expanded="true" aria-haspopup="false" aria-autocomplete="both" autocomplete="off">
              </div>
            </div>
</header>