<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->Url->build('/admin/users/dashboard'); ?>">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-palette menu-icon"></i>
              <span class="menu-title"> Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/categories'); ?>">Categories List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="mdi mdi-layers menu-icon"></i>
              <span class="menu-title">Sub Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/sub-categories'); ?>">SubCategories List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Sub SubCategories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/sub-sub-categories'); ?>">Sub SubCategories List</a></li>     
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="mdi mdi-pencil-box-outline menu-icon"></i>
              <span class="menu-title">Consultant</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?php echo $this->Url->build('/admin/customers'); ?>">Consultant List</a></li>
              </ul>
            </div>
          </li> 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/siteSettings'); ?>">Site Settings</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/aboutPages'); ?>">About Us</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/bookAppointments'); ?>">Appointment List</a></li>

                <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/customerQueries'); ?>">Customer Queries List</a></li>

                 <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/socialLinks'); ?>">Social List</a></li>

                 <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/enquiries'); ?>">Enquiry List</a></li> -->

                 <li class="nav-item"> <a class="nav-link" href="<?php echo $this->Url->build('/admin/homePages'); ?>">Home Page List</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/popups.html">
              <i class="mdi mdi-comment-alert menu-icon"></i>
              <span class="menu-title">Popups</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/notifications.html">
              <i class="mdi mdi-bell menu-icon"></i>
              <span class="menu-title">Notifications</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
              <i class="mdi mdi-map menu-icon"></i>
              <span class="menu-title">Maps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="mdi mdi-alert-circle menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <i class="mdi mdi-file menu-icon"></i>
              <span class="menu-title">General Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
              <i class="mdi mdi-basket menu-icon"></i>
              <span class="menu-title">E-commerce</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/apps/email.html">
              <i class="mdi mdi-email menu-icon"></i>
              <span class="menu-title">E-mail</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/apps/calendar.html">
              <i class="mdi mdi-calendar-range menu-icon"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li> -->
        </ul>
      </nav>