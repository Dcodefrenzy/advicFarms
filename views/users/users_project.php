
<?php 
ob_start();
$page_title = "project";
  include "includes/header.php";
  
   $recent = recentProjectPost($conn);

  $row = showProject($conn);


 ?>

      <section class="section-md bg-white blog-wrap">
        <div class="shell">
          <div class="range range-30 range-center">
            <div class="cell-lg-6">
              <h2>Project</h2>
            </div>
          </div>
          <div class="range range-50 range-center range-sm-left">
            <div class="cell-lg-3 cell-md-7 cell-sm-10 cell-xs-10 order-md-last">
              <div class="blog-item">
                <h3>Search</h3>
                <!-- RD Search Form-->
                <form class="form-search rd-search" action="https://livedemo00.template-help.com/wt_prod-3849/search-results.html" method="GET">
                  <div class="form-wrap">
                    <label class="form-label" for="search-form">Search</label>
                    <input class="form-input form-search-input form-control" id="search-form" type="text" name="s" autocomplete="off">
                    <button class="icon fa-search text-primary" type="submit"></button>
                  </div>
                </form>
              </div>
              <div class="blog-item">
              </div>
            </div>
           
            <div class="cell-lg-6 cell-md-7 cell-sm-8 cell-xs-12 order-first">
                <?php foreach ($row as $rows => $value) {
                      extract($value);                                        
                    
                     ?>
              <div class="post post-classic-sec">
                <div class="post-classic-body">
                  <div class="unit unit-vertival unit-sm-horizontal unit-middle unit-sm-top-custom">
                    <div class="unit__left text-left text-sm-center">
                      <div class="unit unit-horizontal unit-middle unit-sm-vertical unit-spacing-xs">
                        <div class="unit__left"><a href=<?php echo "projectView?hid=$id"; ?>><div class="image-circles" style="background:url(<?php echo $image_1 ?>); height:100px; width: 100px; background-size: cover; background-position: center; background-repeat: no-repeat;" class=""> </div></a>
                        </div>
                      </div>
                    </div>
              
                    <div class="unit__body">
                      <time datetime="2018-03-31"><?php echo $date_created; ?></time>
                      <h6><a href=<?php echo "projectView?hid=$id"; ?>><?php echo $project_name; ?></a></h6>
                      <h6><a href=<?php echo "projectView?hid=$id"; ?>><?php echo $project_location; ?></a></h6>
                      <p><?php $bd = previewBody($about, 20); echo $bd; ?><a class="link-posts" href=<?php echo "projectView?hid=$id"; ?>>Read more<span class="icon-arrow icon-rotate-180 material-icons-keyboard_backspace"></span></a></p>
                    </div>
                  </div>
                </div>
              </div>
                 <?php } ?>
              
              <div class="pagination-wrap text-center">
                <!-- Bootstrap Pagination-->
                <nav>
                  <ul class="pagination-custom">
                    <li class="disabled"><span aria-label="Previous"><span class="arrow-left" aria-hidden="true">
                          <!--Created by ragnar on 8/22/2018.
                          --><span class="icon-arrow material-icons-keyboard_backspace"></span></span></span></li>
                    <li class="active"><span>/</span></li>
                    <li><span>/</span></li>
                    <li><span>/</span></li>
                    <li><a href="#" aria-label="Next"><span class="arrow-right" aria-hidden="true">
                          <!--Created by ragnar on 8/22/2018.
                          --><span class="icon-arrow material-icons-keyboard_backspace"></span></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>         
            <div class="cell-lg-3 cell-sm-4 cell-xs-10 order-sec">
              <div class="blog-item text-left">
                <h3>Recent posts</h3>
                  <?php foreach ($recent as $key => $value) {
                      extract($value);
                 ?>
                <div class="unit unit-spacing-sm unit-middle unit-horizontal">
                  <div class="unit__left"><a href=<?php echo "projectView?hid=$id"; ?>><div class="image-circles" style="background:url(<?php echo $image_1 ?>); height:80px; width: 80px; background-size: cover; background-position: center; background-repeat: no-repeat;" class=""> </div></a>
                  </div>
                  <div class="unit__body">
                    <time datetime="2018-03-31"><?php echo $date_created ?></time>
                    <p><a href=<?php echo "projectView?hid=$id"; ?>><?php echo $project_name; ?></a></p>
                  </div>
                </div>
              <?php } ?>
              </div>
              <div class="blog-item text-left">
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- Page Footer-->
     <?php 
      include "includes/footer.php";
      ?>