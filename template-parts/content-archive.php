<div class="container">
 
    <div class="post mb-5">
        <div class="media">

            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
            <div class="media-body">
                <h3 class="title mb-1">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                            the_title();
                        ?>
                    </a>
                </h3>
                <div class="meta mb-1">
                    <span class="date">
                        <!-- The published date is coming only on the latest post. Need to figure out why. -->
                        <?php
                            the_date();
                        ?>
                    </span>
                    <span class="time">
                        <!-- for now this field will be blank. Either we need to use some plugin for this or need to introduce a custom field. This might be handled in some advanced tutorial -->
                        <!-- 5 min read -->
                    </span>
                    <span class="comment">
                        <a href="#">
                            <?php
                                comments_number();
                            ?>
                        </a>
                    </span>
                </div>
                <div class="intro">
                      <?php
                        the_excerpt();
                        ?>
                </div>
                <a class="more-link" href="<?php the_permalink(); ?>">
                    Read more &rarr;
                </a>
            </div><!--//media-body-->
        </div><!--//media-->
    </div>

  

</div>

