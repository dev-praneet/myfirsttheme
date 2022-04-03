<?php
    get_header();
?>


<article class="content px-3 py-5 p-md-5">

    <?php
        if( have_posts() ){

            while( have_posts() ){
                /**
                 * this function queries the database and fetches out a single post
                 */
                the_post();

                /**
                 * Rather than simply getting the content, the function will look for which template should be used for this post
                 * @param <first parameter> - the first argument is the path to the folder where wordpress will be looking for templates
                 * @param <second parameter> - this is the type of the post -- it is optional -- if the second parameter is not provided the `content.php` file inside template-parts folder is used. If the second parameter is provided as the case is below, the hyphenated version of the file such as `content-article.php` file is used.
                 */
                get_template_part( 'template-parts/content', 'archive' );
            }

        }
    ?>

    <?php
        the_posts_pagination();
    ?>

</article>

    
<?php
get_footer();
?>