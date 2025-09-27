<!-- <div class="col-md-9"> --> 
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="sub-title">
                  <a href="<?php echo PUBLIC_BASE_URL; ?>" title="Go to Home Page">
                    <h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>

                <div class="col-md-12 content-page">
                  <div class="col-md-12 blog-post">
                    <div>
                      <img src="<?php echo PUBLIC_BASE_URL; ?>/images/blog/1.jpg" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="<?php echo $post['title']?>">
                      <h1>
                        <?php echo $post['title']?>
                      </h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                      <span><?php echo \Core\Helpers\formatDateShow($post['created_at'])?></span> | <span><?php echo $post['category_name'] ?></span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                      <?php echo $post['text'] ?>
                    </p>

                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                      <p>
                        <?php echo $post['quote']?>
                      </p>
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                      <a href="form.html" type="button" class="btn btn-primary"
                        >Edit Post</a
                      >
                      <a
                        href="#"
                        type="button"
                        class="btn btn-secondary"
                        role="button"
                        >Delete Post</a
                      >
                    </div>
                    <!-- Post Buttons End -->
                  </div>
                </div>
              </div>
            <!--</div>-->