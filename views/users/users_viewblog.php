<?php 
ob_start();
$page_title = "Main Blog";
  include "includes/header.php";
  if (isset($_GET['hid'])) {
      $blog = viewBlog($conn, $_GET['hid']);
  extract($blog);

  }else{
   header("Location:blog");
  }

 ?>

      <section class="section-md bg-white">
        <div class="shell">
          <div class="range range-30 range-center range-md-right">
            <div class="cell-md-8 cell-sm-6">
              <h2>Blog post</h2>
            </div>
          </div>
          <div class="range range-50 range-center">
            <div class="cell-md-4 cell-sm-6 cell-xs-8"><div style="background:url(<?php echo $image_1 ?>); height:300px; width: 300px; background-size: cover; background-position: center; background-repeat: no-repeat;" class=""> </div>
              <div class="post-big-aside">
                <div class="post-autor-wrap">
                  <ul class="list-inline">
                    <li><a class="fa fa-facebook text-primary fa-xs" href="#"></a></li>
                    <li><a class="fa fa-google-plus text-primary fa-xs" href="#"></a></li>
                    <li><a class="fa fa-linkedin text-primary fa-xs" href="#"></a></li>
                    <li><a class="fa fa-twitter text-primary fa-xs" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-md-8 post-big">
              <div class="post-meta-default group-post-meta">
                <time datetime="2018-03-05"><span class="mdi mdi-xsm mdi-clock text-primary"></span><span><?php echo $date_created; ?></span></time>
                <a><b><span>Author-</span><b/></span></a> <span><?php echo $author; ?></span>
              </div>
              <h3><?php echo $title; ?></h3>
              <p class="big"><?php echo $body; ?></p>
            </div>
          </div>
        </div>
      </section>
      <!-- Material Parallax-->
      <section class="parallax-container" data-parallax-img="images/parallax-6-1920x1100.jpg">
        <div class="parallax-content">
          <div style="min-height: 160px; padding-bottom: 39.45%;"></div>
        </div>
      </section>
      <section class="section-md bg-white single-post-wrap">
        <div class="shell">
          <div class="range range-30 range-right">
            <div class="cell-lg-8 cell-md-10">
              <div class="blog-item">
                <ul class="group-xs">
                  <li><a class="button button-steel-blue button-icon button-icon-left" href="#"><span class="icon icon-social fa fa-facebook"></span><span class="button-text">Facebook</span></a></li>
                  <li><a class="button button-cerulean button-icon button-icon-left" href="#"><span class="icon icon-social fa fa-twitter"></span><span class="button-text">Twitter</span></a></li>
                  <li><a class="button button-mandy button-icon button-icon-left" href="#"><span class="icon icon-social fa fa-google-plus"></span><span class="button-text">Google</span></a></li>
                </ul>
              </div>
              <div class="blog-item text-left">
                <h3>Related posts</h3>
                <div class="range range-10">
                  <div class="cell-md-6 cell-sm-6 cell-xs-12">
                    <div class="unit unit-spacing-sm unit-middle unit-horizontal">
                      <div class="unit__left"><img class="image-circles" src="images/user-1-70x70.jpg" alt="" width="70" height="70"/>
                      </div>
                      <div class="unit__body">
                        <time datetime="2018-03-31">March 31, 2018</time>
                        <p><a class="text-bold" href="#">Do you love to make people smile?</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="cell-md-6 cell-sm-6 cell-xs-12">
                    <div class="unit unit-spacing-sm unit-middle unit-horizontal">
                      <div class="unit__left"><img class="image-circles" src="images/user-3-70x70.jpg" alt="" width="70" height="70"/>
                      </div>
                      <div class="unit__body">
                        <time datetime="2018-03-15">March 15, 2018</time>
                        <p><a class="text-bold" href="#">Fertilizing</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="cell-md-6 cell-sm-6 cell-xs-12">
                    <div class="unit unit-spacing-sm unit-middle unit-horizontal">
                      <div class="unit__left"><img class="image-circles" src="images/user-2-70x70.jpg" alt="" width="70" height="70"/>
                      </div>
                      <div class="unit__body">
                        <time datetime="2018-03-25">March 25, 2018</time>
                        <p><a class="text-bold" href="#">How to Mow Your Lawn</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="cell-md-6 cell-sm-6 cell-xs-12">
                    <div class="unit unit-spacing-sm unit-middle unit-horizontal">
                      <div class="unit__left"><img class="image-circles" src="images/user-2-70x70.jpg" alt="" width="70" height="70"/>
                      </div>
                      <div class="unit__body">
                        <time datetime="2018-03-25">March 25, 2018</time>
                        <p><a class="text-bold" href="#">Weed Wipeout</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <h3>Comments</h3>
                <div class="box-comment text-xs-left">
                  <div class="unit unit-xs-horizontal unit-spacing-md">
                    <div class="unit__left">
                      <div class="wrap-img img-circle img-70"><img class="image-circles" src="images/user-1-70x70.jpg" alt="" width="70" height="70"/>
                      </div>
                    </div>
                    <div class="unit__body">
                      <div class="unit unit-sm-horizontal unit-box-comment">
                        <div class="unit__left">
                          <p class="text-primary text-bold">Alicia Hagen</p>
                        </div>
                        <div class="unit__body">
                          <div class="post-meta-default post-meta-inline">
                            <time datetime="2018-03-07"><span class="mdi mdi-sm mdi-clock text-primary"></span>March 7, 9:14</time><a href="#"><span class="mdi mdi-sm mdi-thumb-up-outline"></span><span class="quantity">like</span></a><a href="#"><span class="mdi mdi-sm mdi-comment-multiple-outline"></span><span class="quantity">reply</span></a>
                          </div>
                        </div>
                      </div>
                      <p>The topic you describe here is really important. I think it may be useful and interesting to many beginners in this sphere.</p>
                      <p>Keep up going this way!</p>
                    </div>
                  </div>
                  <div class="divider"></div>
                  <div class="box-comment">
                    <div class="unit unit-xs-horizontal unit-spacing-md">
                      <div class="unit__left">
                        <div class="wrap-img img-circle img-70"><img class="image-circles" src="images/user-3-70x70.jpg" alt="" width="70" height="70"/>
                        </div>
                      </div>
                      <div class="unit__body">
                        <div class="unit unit-sm-horizontal unit-box-comment">
                          <div class="unit__left">
                            <p class="text-primary text-bold">John Nesh</p>
                          </div>
                          <div class="unit__body">
                            <div class="post-meta-default post-meta-inline">
                              <time datetime="2018-03-07"><span class="mdi mdi-sm mdi-clock text-primary"></span>March 7, 9:14</time><a href="#"><span class="mdi mdi-sm mdi-thumb-up-outline"></span><span class="quantity">like</span></a><a href="#"><span class="mdi mdi-sm mdi-comment-multiple-outline"></span><span class="quantity">reply</span></a>
                            </div>
                          </div>
                        </div>
                        <p>Thank you for your opinion! I'm glad that you found this article interesting, and we will continue this topic in further publications.</p>
                      </div>
                    </div>
                  </div>
                  <div class="box-comment">
                    <div class="unit unit-xs-horizontal unit-spacing-md">
                      <div class="unit__left">
                        <div class="wrap-img img-circle img-70"><img class="image-circles" src="images/user-2-70x70.jpg" alt="" width="70" height="70"/>
                        </div>
                      </div>
                      <div class="unit__body">
                        <div class="unit unit-sm-horizontal unit-box-comment">
                          <div class="unit__left">
                            <p class="text-primary text-bold">Andrew Wagstaff</p>
                          </div>
                          <div class="unit__body">
                            <div class="post-meta-default post-meta-inline">
                              <time datetime="2018-03-07"><span class="mdi mdi-sm mdi-clock text-primary"></span>March 7, 9:14</time><a href="#"><span class="mdi mdi-sm mdi-thumb-up-outline"></span><span class="quantity">like</span></a><a href="#"><span class="mdi mdi-sm mdi-comment-multiple-outline"></span><span class="quantity">reply</span></a>
                            </div>
                          </div>
                        </div>
                        <p>Very useful post! Thanks for sharing! Now I’ll be planning my visit to your company to try my luck in becoming a part of your amazing and friendly team.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="divider"></div>
                <div class="box-comment text-xs-left">
                  <div class="unit unit-xs-horizontal unit-spacing-md">
                    <div class="unit__left">
                      <div class="wrap-img img-circle img-70"><img class="image-circles" src="images/user-1-70x70.jpg" alt="" width="70" height="70"/>
                      </div>
                    </div>
                    <div class="unit__body">
                      <div class="unit unit-sm-horizontal unit-box-comment">
                        <div class="unit__left">
                          <p class="text-primary text-bold">Alicia Hagen</p>
                        </div>
                        <div class="unit__body">
                          <div class="post-meta-default post-meta-inline">
                            <time datetime="2018-03-07"><span class="mdi mdi-sm mdi-clock text-primary"></span>March 7, 9:14</time><a href="#"><span class="mdi mdi-sm mdi-thumb-up-outline"></span><span class="quantity">like</span></a><a href="#"><span class="mdi mdi-sm mdi-comment-multiple-outline"></span><span class="quantity">reply</span></a>
                          </div>
                        </div>
                      </div>
                      <p>I would like to add that this post is not just great; it is also very informative to the newcomers of your company. You have gathered a team of friendly and experienced lawn care specialists and don’t stop to extend it as well as train your younger employees to become better experts in what they do. Thank you for everything!</p>
                    </div>
                  </div>
                  <div class="divider"></div>
                </div>
              </div>
              <div class="blog-item">
                <h3>Leave a comment</h3>
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="https://livedemo00.template-help.com/wt_prod-3849/bat/rd-mailform.php">
                  <div class="range range-spacing-10 range-10">
                    <div class="cell-sm-12">
                      <div class="form-wrap form-wrap-validation">
                        <label class="form-label" for="forms-message">Message</label>
                        <textarea class="form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                    <div class="cell-sm-12">
                      <div class="group-post-comment">
                        <div class="group-post-meta">
                          <p class="text-bold">Sign in with</p>
                          <ul class="list-inline">
                            <li><a class="fa fa-facebook text-primary" href="#"></a></li>
                            <li><a class="fa fa-twitter text-primary" href="#"></a></li>
                            <li><a class="fa fa-google-plus text-primary" href="#"></a></li>
                          </ul>
                        </div>
                        <div class="button-wrap text-center">
                          <button class="button button-xs button-primary" type="submit">Submit<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
   <?php 
    include "includes/footer.php";
    ?>