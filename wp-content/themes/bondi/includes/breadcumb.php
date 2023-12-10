<?php
$all_cats = get_the_category(); //retrieve all catergories of post


?>


<div  class="breadcrumb-holder" >

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo get_home_url();?>"><?php echo get_bloginfo('name');?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo esc_url (get_category_link($all_cats[0]-> term_id))?>"> <?php echo esc_html($all_cats[0]-> name); ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title();?></li>
  </ol>
</nav>
</div> <!--holder-->