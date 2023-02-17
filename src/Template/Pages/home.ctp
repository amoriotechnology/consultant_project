<!-- ============================ Page Title Start================================== -->
<!-- ============================ Hero Banner  Start================================== -->
      <div class="image-cover hero-banner" style="background-image: url('<?php echo $this->Url->build('/frontend/assets/img/people.jpg'); ?>');" data-overlay="6">
        <div class="container">

          <h1 class="big-header-capt mb-0">Yes, Artitecture is for all!!</h1>
          <!-- <p class="text-center mb-5">From as low as $10 per day with limited time offer</p> -->
          <br>
          <div class="full-search-2 eclip-search italian-search hero-search-radius shadow">
            <div class="hero-search-content">
              
              <div class="row">
              
                <div class="row">
                    <div class="col-lg-10 col-md-5 col-sm-12">
                      <div class="form-group">
                        <div class="input-with-icon">
                          <input type="text" class="form-control" placeholder="Search for legal consultant name">
                          <img src="<?php echo $this->Url->build('/frontend/assets/img/search.png'); ?>" width="20">
                        </div>
                      </div>
                    </div>
                    

                    <div class="col-lg-2 col-md-3 col-sm-12">
                      <div class="form-group">
                        
                        <button class="btn search-btn black">Search</button>
                      </div>
                    </div>

                  </div>
                
              </div>
              
            </div>
          </div>
            
        </div>
      </div>
      <!-- ============================ Hero Banner End ================================== -->
      <!-- ============================ Page Title End ================================== -->
      
      <!-- ============================ Search Form End ================================== -->
     <!--  <section class="gray-simple p-0">
        <div class="container">
         
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
              <div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard overlio-40">
                <form>
                <div class="hero-search-content">
                  <div class="row">
                    <div class="col-lg-10 col-md-5 col-sm-12">
                      <div class="form-group">
                        <div class="input-with-icon">
                          <input type="text" class="form-control" placeholder="Search for legal consultant name">
                          <img src="<?php echo $this->Url->build('/frontend/assets/img/search.png'); ?>" width="20">
                        </div>
                      </div>
                    </div>
                    

                    <div class="col-lg-2 col-md-3 col-sm-12">
                      <div class="form-group">
                        
                        <button class="btn search-btn black">Search</button>
                      </div>
                    </div>

                    
                        
                  </div>
                </div>
              <form>
              </div>
            </div>
          </div>
         
        </div>
      </section> -->
      <!-- ============================ Search Form End ================================== -->
      
      <!-- ============================ Agent List Start ================================== -->
      <section class="gray-simple">
      
        <div class="container">
          <div class="row">
            <h2 class="text-white mb-4" style="text-transform: none; text-align: center;">Let's build together!</h2>
            <p class="text-white text-center">Find your best professional from the construction field.</p>
             <?php foreach ($home_pages as $key => $page) { ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
              <div class="hovereffect">
                  <a href="#drop">
                   <img src="<?php echo $this->Url->build('/webroot/uploads/home_banner/'.$page['image']); ?>" class="img-fluid mx-auto" alt="" />
                  </a>
                  <div class="overlay">
                     <h2><a href="#drop" class="text-white"><?php echo $page['title']; ?></a></h2>
                  </div>
              </div>
            </div>
            <?php  } ?>
            <!-- Single Agent -->
            <!-- <?php foreach ($home_pages as $key => $page) { ?> -->
           <!--  <div class="col-md-6 col-sm-12">
              <div class="agents-grid">
                
                <div class="agents-grid-wrap">
                  
                  <div class="fr-grid-thumb">
                    <a href="#drop">
                      <img src="<?php echo $this->Url->build('/webroot/uploads/home_banner/'.$page['image']); ?>" class="img-fluid mx-auto" alt="" />
                    </a>
                  </div>
              
                  <div class="fr-grid-deatil">
                    <div class="fr-grid-deatil-flex">
                      <h5 class="fr-can-name text-center"><a href="#drop"><?php echo $page['title']; ?></a></h5>
                    </div>
                    <br><br>
                    
                  </div>
                  
                </div>
                
              </div>
            </div> -->
            <!-- <?php  } ?> -->
          
            
            <!-- Single Agent -->
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="hovereffect">
                  <a href="<?php echo $this->Url->build('/book-appointment'); ?>">
                   <img src="<?php echo $this->Url->build('/frontend/assets/img/view/4.png'); ?>" class="img-fluid mx-auto" alt="" />
                  </a>
                  <div class="overlay">
                     <h2><a href="<?php echo $this->Url->build('/book-appointment'); ?>" class="text-white">Book An Appointment</a></h2>
                  </div>
              </div>
            </div>
            <!-- <div class="col-md-6 col-sm-12">
              <div class="agents-grid">
                
                <div class="agents-grid-wrap">
                  
                  <div class="fr-grid-thumb">
                    <a href="<?php echo $this->Url->build('/book-appointment'); ?>">
                      <img src="<?php echo $this->Url->build('/frontend/assets/img/view/4.png'); ?>" class="img-fluid mx-auto" alt="" />
                    </a>
                  </div>
              
                  <div class="fr-grid-deatil">
                    <div class="fr-grid-deatil-flex">
                      <h5 class="fr-can-name text-center"><a href="<?php echo $this->Url->build('/book-appointment'); ?>">Book An Appointment</a></h5>
                    </div>
                    <br><br>
                    
                  </div>
                  
                </div>
              
              </div>
            </div> -->
          </div>
          
          <!-- <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
              <a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Load More Agents</a>
            </div>
          </div> -->
          
        </div>
        <br>  
        <div class="container">
          <div class="row">
            <h2 class="text-white text-center mb-4" style="text-transform: none;">Connect With us!!</h2>
             <p class="text-white text-center">A team of construction experts are ready to hear from you</p>
            <!-- Single Agent -->
            <div class="col-md-4 col-sm-12">
            <h4 style="color: #fff; position: relative; top: 110px; left: 107px; display: flex; justify-content: flex-start;">Architect</h4>
              <div id="rcorners1"></div>
                            <!-- <input type="text" class="form-control rem_text" id="text_view" /> -->
              <br>
              <p style="margin-left: 55px; color: #fff;">eminent practicing architects <br> fordesign consultation</p>
              <div id="bottom1"></div>
              <a href="<?php echo $this->Url->build('/pages/allProfession'); ?>"><p style="color: #fff; position: relative; left: 108px;display: flex;justify-content: flex-start;bottom: 95px;">Consult Now ></p></a>
            </div>

            <div class="col-md-4 col-sm-12">
              <h4 style="color: #fff; position: relative; top: 110px; left: 92px; display: flex; justify-content: flex-start;">Civil Engineers</h4>
  
              <div id="rcorners2"></div>
                            <!-- <input type="text" class="form-control rem_text" /> -->
              <br>
              <p style="margin-left: 55px; color: #fff;">experienced professionals in the <br> field of construction and details</p>
              <div id="bottom2"></div>
              <a href="<?php echo $this->Url->build('/pages/allProfession'); ?>"><p style="color: #fff; position: relative; left: 113px;display: flex;justify-content: flex-start;bottom: 95px;">Consult Now ></p></a>
            </div>

            <div class="col-md-4 col-sm-12">
            <h4 style="color: #fff; position: relative; top: 135px; left: 70px; display: flex; justify-content: flex-start;">Structural Engineers</h4>
              <div id="rcorners3"></div>
                            <!-- <input type="text" class="form-control rem_text" /> -->
              <br>
              <p style="margin-left: 98px; color: #fff;">experts in structural <br> safety and stability</p>
              <div id="bottom3"></div>
              <a href="<?php echo $this->Url->build('/pages/allProfession'); ?>"><p style="color: #fff; position: relative; left: 118px;display: flex;justify-content: flex-start;bottom: 95px;">Consult Now ></p></a>
            </div>
          </div>
        </div>  

        <br>  
        <div class="container" id="drop">
           <div class="row">
            <h2 class="text-white text-center mb-4" style="text-transform: none;">Creating Opportunities!</h2>
            <p class="text-white text-center">Ask us anything on design & construction. <br>We are just a dial away!</p>

            <!-- Single Agent -->
             <?php $i = 1; foreach ($all_customers as $key => $value) { ?>
            <div class="col-md-6 col-sm-12">
            <a href="<?php echo $this->Url->build('/pages/profession/'.$value['id']); ?>">
             <div class="view_1">
              <div class="row" style="width: 100%;">
                <div class="col-md-8">
                      <h4 style="font-size: 22px; margin-top: 17px; margin-left: 30px; color: #fff; font-weight: 400;"><?php echo $value['name']; ?></h4>
                 </div>
                 <div class="col-md-4">
                      <p class="viewer"><b><?php echo $i; ?></b></p>
                 </div>
               <!--   <div class="col-md-3">
                      <div id="circle"><p class="price">Rs.500/-</p></div>
                 </div> -->
              </div>
             </div>
            </a>
            </div>
             <?php $i++; } ?>
          </div>

          <!-- <div class="row">
            <h2 class="text-dark mb-4" style="text-transform: none;">Ask the<span style="color: #947b2a;"> experts</span> </h2>
           
            <?php $i = 1; foreach ($all_customers as $key => $value) { ?>
            <div class="col-md-6 col-sm-12">
            <a href="<?php echo $this->Url->build('/pages/profession/'.$value['id']); ?>">
             <div class="view_1">
              <div class="row" style="width: 100%;">
                               <div class="col-md-3">
                      <h4 style="font-size: 25px; margin-top: 30px;"><b><?php echo $i; ?></b></h4>
                 </div>
                 <div class="col-md-6">
                      <p class="viewer"><?php echo $value['name']; ?></p>
                 </div>
                 <div class="col-md-3">
                      <div id="circle"><p class="price">Rs.<?php echo $value['customer']['price']; ?>/-</p></div>
                 </div>
              </div>
             </div>
            </a>
            </div>
            <?php $i++; } ?>

          </div> -->
        </div>  

        <br>  
        <div class="container">
          <div class="row">
            <h2 class="text-white text-center mb-4" style="text-transform: none;">Design Package</h2>
            <p class="text-white text-center">Comprehensive design package exclusively<br>for spacial understanding and structural safety.</p>
            <a href="<?php echo $this->Url->build('/enquiry'); ?>">
            <div class="col-md-12 col-sm-12">
               <div id="box_1">
                <div class="row" style="width: 100%;">
                <div class="col-md-4">
                       <h4 class="text-white text-center" style="position: relative;top: 110px; border-right: 4px solid #ffff;">2D Floor Plan<br>& 3D Elevation</h4>
                 </div>
                 <div class="col-md-8">
                      <p style="text-align: center; position: relative; top: 73px; font-size: 17px; color: #fff;">2D floor plan is the first step in the design process.<br>This simplified 2D drawing allows you to understand the<br>room space with respect to the site area.layout will be <br>designed as per TNCDB Rules.</p>
                 </div>
               <!--   <div class="col-md-3">
                      <div id="circle"><p class="price">Rs.500/-</p></div>
                 </div> -->
              </div>
               </div>
          </div>
        </a>

         <a href="<?php echo $this->Url->build('/enquiry'); ?>">
            <div class="col-md-12 col-sm-12 mt-4">
               <div id="box_1">
                <div class="row" style="width: 100%;">
                <div class="col-md-4">
                       <h4 class="text-white text-center" style="position: relative;top: 110px; border-right: 4px solid #ffff;">2D Floor Plan<br>& 3D Perspective Drawing</h4>
                 </div>
                 <div class="col-md-8">
                      <p style="text-align: center; position: relative; top: 73px; font-size: 17px; color: #fff;">2D floor plan is the first step in the design process.<br>This simplified 2D drawing allows you to understand the<br>room space with respect to the site area. This drawing<br>shows the walls, windows, doors and other<br> features such as stairs and even furniture.</p>
                 </div>
               <!--   <div class="col-md-3">
                      <div id="circle"><p class="price">Rs.500/-</p></div>
                 </div> -->
              </div>
               </div>
          </div>
        </a>

        <a href="<?php echo $this->Url->build('/enquiry'); ?>">
            <div class="col-md-12 col-sm-12 mt-4">
               <div id="box_1">
                <div class="row" style="width: 100%;">
                <div class="col-md-4">
                       <h4 class="text-white text-center" style="position: relative;top: 110px; border-right: 4px solid #ffff;">3D Floor Plan & <br>3D Prespective Drawing</h4>
                 </div>
                 <div class="col-md-8">
                      <p style="text-align: center; position: relative; top: 73px; font-size: 17px; color: #fff;">Floor plans are made in 3D where one can see how the<br>interior space looks with furniture from above, giving<br>you away to see not only how objects fit in the space,<br>but how specific furniture pieces look together.</p>
                 </div>
               <!--   <div class="col-md-3">
                      <div id="circle"><p class="price">Rs.500/-</p></div>
                 </div> -->
              </div>
               </div>
          </div>
        </a>

        <a href="<?php echo $this->Url->build('/enquiry'); ?>">
            <div class="col-md-12 col-sm-12 mt-4">
               <div id="box_1">
                <div class="row" style="width: 100%;">
                <div class="col-md-4">
                       <h4 class="text-white text-center" style="position: relative;top: 110px; border-right: 4px solid #ffff;">2D Construction <br> Drawings & <br> 3D Perspective Drawing</h4>
                 </div>
                 <div class="col-md-8">
                      <p style="text-align: center; position: relative; top: 73px; font-size: 17px; color: #fff;">2D construction drawings include a set of drawings<br>that are much needed at the construction stage. These<br>drawings help the Civil Engineers / Civil Contractors<br>to provide estimation of the project and construct <br> the building that is free from errors and delays.</p>
                 </div>
               <!--   <div class="col-md-3">
                      <div id="circle"><p class="price">Rs.500/-</p></div>
                 </div> -->
              </div>
               </div>
          </div>
        </a>

         <a href="<?php echo $this->Url->build('/enquiry'); ?>">
            <div class="col-md-12 col-sm-12 mt-4">
               <div id="box_1">
                <div class="row" style="width: 100%;">
                <div class="col-md-4">
                       <h4 class="text-white text-center" style="position: relative;top: 110px; border-right: 4px solid #ffff;">MEP Design <br> & Drawings</h4>
                 </div>
                 <div class="col-md-8">
                      <p style="text-align: center; position: relative; top: 73px; font-size: 17px; color: #fff;">The Mechanical, Electrical and Plumbing drawings are<br>essential to the smooth operation of any building and<br>can have impact on energy efficiency and operating costs.<br>This package includes Detailed design for electrical<br>HVAC, Fire fighting, solar and plumbing.</p>
                 </div>
               <!--   <div class="col-md-3">
                      <div id="circle"><p class="price">Rs.500/-</p></div>
                 </div> -->
              </div>
               </div>
          </div>
        </a>

        <a href="<?php echo $this->Url->build('/enquiry'); ?>">
            <div class="col-md-12 col-sm-12 mt-4">
               <div id="box_1">
                <div class="row" style="width: 100%;">
                <div class="col-md-4">
                       <h4 class="text-white text-center" style="position: relative;top: 110px; border-right: 4px solid #ffff;">MEP Design <br> & Drawings</h4>
                 </div>
                 <div class="col-md-8">
                      <p style="text-align: center; position: relative; top: 73px; font-size: 17px; color: #fff;">The Mechanical, Electrical and Plumbing drawings are<br>essential to the smooth operation of any building and<br>can have impact on energy efficiency and operating costs.<br>This package includes Detailed design for electrical<br>HVAC, Fire fighting, solar and plumbing.</p>
                 </div>
               <!--   <div class="col-md-3">
                      <div id="circle"><p class="price">Rs.500/-</p></div>
                 </div> -->
              </div>
               </div>
          </div>
        </a>
        </div>  













        <!-- <div class="container">
          <div class="row">
            <h2 class="text-white text-center mb-4" style="text-transform: none;">Design Package</h2>
            <p class="text-white text-center">Comprehensive design package exclusively<br>for spacial understanding and structural safety.</p>
            <a href="<?php echo $this->Url->build('/enquiry'); ?>">
            <div class="col-md-6 col-sm-12">
               <div id="box_1">
                <h2 class="text-dark text-center" style="position: relative;top: 50px;">2D Floor Plan<br>& 3D Elevation</h2>
                <p style="text-align: center; position: relative;top: 60px; font-size: 17px; color: #fff;">This Package include <br> schematic 2d Floor Plans<br> and Elevation based on your<br> requirement.</p>
               </div>
               </a>
            </div>

            <div class="col-md-6 col-sm-12">
              <a href="<?php echo $this->Url->build('/enquiry'); ?>">
                <div id="box_2">
                  <h2 class="text-dark text-center" style="position: relative;top: 50px;">2D Construction Plan <br>& 3D Elevation</h2>
                    <p style="text-align: center; position: relative;top: 60px; font-size: 17px; color: #fff;">This This package includes<br>Scheme and construction<br>drawings of 2d Floor Plans,<br>3D perspective view of<br>the building from road side.</p>
                </div>
                </a>
            </div>
                        
                        <div class="col-md-6 col-sm-12">
                          <a href="<?php echo $this->Url->build('/enquiry'); ?>">
               <div id="box_3">
                    <h2 class="text-dark text-center" style="position: relative;top: 50px;">Structural drawing <br>for Rcc buildings</h2>
                    <p style="text-align: center; position: relative;top: 60px; font-size: 17px; color: #fff;">This package includes<br>foundation and plinth team<br>drawings, columns,bears and<br>roof slab details, Staircase and<br>other structural details.</p>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-sm-12">
              <a href="<?php echo $this->Url->build('/enquiry'); ?>">
                <div id="box_4">
                  <h2 class="text-dark text-center" style="position: relative;top: 50px;">Electrical & Plumbing <br>drawings</h2>
                    <p style="text-align: center; position: relative;top: 60px; font-size: 17px; color: #fff;">This package includes<br>conteputal internal & external<br>plumbing layout,<br>point requirement, lighting<br>and looping drawing for<br>ceilings & walls.</p>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-sm-12">
              <a href="<?php echo $this->Url->build('/enquiry'); ?>">
               <div id="box_5">
                    <h2 class="text-dark text-center" style="position: relative;top: 50px;">Interior Measured<br>drawing</h2>
                    <p style="text-align: center; position: relative;top: 60px; font-size: 17px; color: #fff;">This Package includes<br>visiting the site and taking<br>measurements of the interior<br>space and furnish the<br>2d drawing.</p>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-sm-12">
              <a href="<?php echo $this->Url->build('/enquiry'); ?>">
                <div id="box_6">
                  <h2 class="text-dark text-center" style="position: relative;top: 50px;">Interior Furniture<br> drawing</h2>
                    <p style="text-align: center; position: relative;top: 60px; font-size: 17px; color: #fff;">This package includes<br>furniture layout if only the<br>floor plan is available.This is<br>to give an understanding<br>of the room space available<br>in your building.</p>
                </div>
                </a>
            </div>
          </div>
        </div>  
                --> 
      </section>
      <!-- ============================ Agent List End ================================== -->

<style>
  #rcorners1 {
    width: 20rem;
    height: 10rem;
    background-color: #5d38e7;
    border-radius: 10rem 10rem 0 0;
  } 

  #rcorners2 {
  width: 20rem;
    height: 10rem;
    background-color: #f08002;
    border-radius: 10rem 10rem 0 0;
  } 

  #rcorners3 {
  width: 20rem;
    height: 10rem;
    background-color: #f62101;
    border-radius: 10rem 10rem 0 0;
  } 

  #bottom1 {
  width: 20rem;
    height: 10rem;
    background-color: #5d38e7;
    border-radius: 0 0 10rem 10rem;
  } 

  #bottom2 {
  width: 20rem;
    height: 10rem;
    background-color: #f08002;
    border-radius: 0 0 10rem 10rem;
  }

  #bottom3 {
  width: 20rem;
    height: 10rem;
    background-color: #f62101;
    border-radius: 0 0 10rem 10rem;
  }

  .rem_text{
    width: 320px;
    background-color: #f3f7fd;
    border: none;
  }

  .form-control:focus{
    background-color: #f3f7fd;
  }

  .view_1{
    width: 100%;
    display: flex;
    align-items: center;
/*    padding: 2rem 1rem 1.8rem;*/
/*    border: 1px solid #e7eaec;*/
    border-radius: 0.4rem;
    background: #3e3936;
    margin-bottom: 15px;
/*    border-left: 10px solid #b2bebd;*/
/*    border-radius: 0rem 10rem 10rem 0;*/
  }

  #circle{
    background: #e60491;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    float: right;
  }
  .viewer{
        display: flex;
    justify-content: center;
    margin-top: 20px;
    position: relative;
    bottom: 4px;
    color: #fff;
  }

  .price{
    position: relative;
    left: 23px;
    top: 38px;
    color: #fff;
    display: flex;
        justify-content: flex-start;
  }

  #box_1{
        width: 100%;
      height: 270px;
      background-color: #3e3936;
  }

  #box_2{
        width: 100%;
      height: 350px;
      background-color: #bd2be8;
  }

  #box_3{
        width: 100%;
      height: 350px;
      background-color: #fd9001;
      margin-top: 30px
  }

  #box_4{
        width: 100%;
      height: 350px;
      background-color: #39f562;
      margin-top: 30px
  }

  #box_5{
        width: 100%;
      height: 350px;
      background-color: #bd2be8;
      margin-top: 30px
  }

  #box_6{
        width: 100%;
      height: 350px;
      background-color: #71d2f2;
      margin-top: 30px
  }
</style>

<style type="text/css">
  .hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
/*height:100%;*/
position:absolute;
overflow:hidden;
top:100px;
left:0;
opacity:0;
/*background-color:rgba(0,0,0,0.5);*/
border-top: 1px solid #fff;
border-bottom: 1px solid #fff;
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
/*background:rgba(0,0,0,0.6);*/
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}

</style>
