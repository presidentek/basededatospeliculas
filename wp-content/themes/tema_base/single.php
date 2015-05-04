<?php get_header(); the_post(); 
  $postype = get_post

?>
      <div class='lista'>
      <h3>?php the_title(); ?</h3>
       <p><?php the_content(); ?><p>
      </div>
  
<?php  endwhile; endif; ?>
<?php get_footer(); ?>