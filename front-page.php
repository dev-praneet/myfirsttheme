
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
     * grabs the content of the post
     */
    the_content();
}

}
?>
	    </article>

    
    <?php
    get_footer();
    ?>

