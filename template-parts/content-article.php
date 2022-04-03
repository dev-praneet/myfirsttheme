<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date">
            <?php 
            /**
             * this function returns the date when the post was created.
             * @param parameters can be provided to customize the format in which the date is returned
             */
            the_date(); 
            ?>
            </span>

            <?php
            /**
            * this function returns the tags for the posts.
            * @param <first parameter> - to customize what comes before each tag
            * @param <second parameter> - to customize what comes in between tags
            * @param <third parameter> - to customize what comes after each tag
            */            
            the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>

            <!-- <span class="tag"><i class='fa fa-tag'></i> tag
            </span>
            <span class="tag"><i class='fa fa-tag'></i> category
            </span> -->
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?> </a>
            </span>
        </div>
    </header>

    <?php
    the_content();
    ?>

    <!-- we can do all sorts of logic here to determine for which page we want to show the comments -->
    <?php
    comments_template();
    
    ?>

</div>

