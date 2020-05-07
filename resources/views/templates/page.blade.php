<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="60x60" href={{ asset("assets/images/ico/apple-icon-60.png")}}>
    <link rel="apple-touch-icon" sizes="76x76" href={{ asset("assets/images/ico/apple-icon-76.png")}}>
    <link rel="apple-touch-icon" sizes="120x120" href={{ asset("assets/images/ico/apple-icon-120.png")}}>
    <link rel="apple-touch-icon" sizes="152x152" href={{ asset("assets/images/ico/apple-icon-152.png")}}>
    <link rel="shortcut icon" type="image/x-icon" href={{ asset("assets/images/ico/favicon.ico")}}>
    <link rel="shortcut icon" type="image/png" href={{ asset("assets/images/ico/favicon-32.png")}}>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/bootstrap.css")}}>
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/fonts/icomoon.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/fonts/flag-icon-css/css/flag-icon.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendors/css/extensions/pace.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/fontawesome.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/fontawesome.min.css")}}>


    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/bootstrap-extended.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/app.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/colors.css")}}>
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/core/menu/menu-types/vertical-menu.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/core/menu/menu-types/vertical-overlay-menu.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/core/colors/palette-gradient.css")}}>
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/style.css")}}>
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>

            <!-- PAge Icon Area-->

            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>

            </ul>
            <ul class="nav navbar-nav float-xs-right">

              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">You have new order!</h6>
                          <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading red darken-1">99% Server load</h6>
                          <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                          <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Complete the task</h6><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Generate monthly report</h6><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src={{ asset("assets/images/portrait/small/avatar-s-1.png")}} alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src={{ asset("assets/images/portrait/small/avatar-s-2.png")}} alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src={{ asset("assets/images/portrait/small/avatar-s-3.png")}} alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src={{ asset("assets/images/portrait/small/avatar-s-6.png")}} alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src={{ asset("assets/images/portrait/small/avatar-s-1.png")}} alt="avatar"><i></i></span><span class="user-name"> {{ Auth::user()->name }}</span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-head"></i> Perfil</a>
                        <a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Tasks</a>
                        <div class="dropdown-divider"></div><a href="{{ route('logout') }}" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <li class=" nav-item"><a href="{{route('home')}}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>

          <!-- Cliente Space -->
          </li>
        <li class=" nav-item"><a href="{{route('admin.cliente')}}"><i class="icon-users"></i><span data-i18n="nav.page_layouts.main" class="menu-title">
            Clientes
          </span></a>
          </li>
          <!-- end Cliente Space -->



          <!-- Entrada Space -->
          <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Entradas</span></a>
            <ul class="menu-content">
              <li><a href="invoice-template.html" data-i18n="nav.invoice.invoice_template" class="menu-item"><i class="icon-plus"></i>Adicionar</a>
              </li>
                <li><a href="{{route("admin.entrada")}}" data-i18n="nav.gallery_pages.gallery_grid" class="menu-item"><i class="icon-list"></i>Listar</a>
              </li>
            </ul>
          </li>
          <!--end Entrada Space -->


          <!-- Encomendas Space -->
          <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Encomendas</span></a>
          </li>
          <!--end Encomendas Space -->

          <!-- Produto Space -->
        <li class=" nav-item"><a href="{{route('admin.produto')}}"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Produtos</span></a>
          </li>
          <!-- end Produto Space -->



          <!-- Stock Space -->
          <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Stock</span></a>
          </li>
          <!-- end Stock Space -->

          <!-- Venda Space -->
          <li class=" nav-item"><a href="#"><i class="icon-whatshot"></i><span data-i18n="nav.advance_cards.main" class="menu-title">
            Vendas
          </span></a>
            <ul class="menu-content">
                <li><a href="{{route('venda.create')}}" data-i18n="nav.invoice.invoice_template" class="menu-item">Adicionar</a>
              </li>
              <li><a href="{{route('admin.venda')}} data-i18n="nav.gallery_pages.gallery_grid" class="menu-item">Listar</a>
              </li>
            </ul>
          </li>
          <!-- end Venda Space -->


          <!-- Suporte Space -->
          <li class=" navigation-header"><span data-i18n="nav.category.support">Suporte</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="https://github.com/pixinvent/robust-free-bootstrap-admin-template/issues"><i class="icon-support"></i><span data-i18n="nav.support_raise_support.main" class="menu-title">Reportar Erro</span></a>
          </li>
          <li class=" nav-item"><a href="https://pixinvent.com/free-bootstrap-template/robust-lite/documentation"><i class="icon-document-text"></i><span data-i18n="nav.support_documentation.main" class="menu-title">Como Usar?</span></a>
          </li>
          <!-- end Suporte Space -->

        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->




    <!-- Content ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">

        <div class="content-body content-wrapper"><!-- stats -->

        <!-- Cabecalho da Conteudo -->
           <div class="container">

                    @yield('header')


           </div>
        <!-- end Cabecalho da Conteudo -->


        <!-- Corpo do Conteudo -->

           <div class="container">

                    @yield('content')


           </div>
        <!-- end Corpo do Conteudo -->






        </div>
      </div>
    </div>
    <!-- end Content////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2020 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">VendasJ </a>, All rights reserved. </span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src={{ asset("assets/js/core/libraries/jquery.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/vendors/js/ui/tether.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/js/core/libraries/bootstrap.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/vendors/js/ui/perfect-scrollbar.jquery.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/vendors/js/ui/unison.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/vendors/js/ui/blockUI.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/vendors/js/ui/jquery.matchHeight-min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/vendors/js/ui/screenfull.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/vendors/js/extensions/pace.min.js")}} type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src={{ asset("assets/vendors/js/charts/chart.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/js/fontawesome.min.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/js/fontawesome.js")}} type="text/javascript"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src={{ asset("assets/js/core/app-menu.js")}} type="text/javascript"></script>
    <script src={{ asset("assets/js/core/app.js")}} type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src={{ asset("assets/js/scripts/pages/dashboard-lite.js")}} type="text/javascript"></script>

    <Script>
        function getdate(){
            var time = date.year;
            return time;
        }
    </Script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
