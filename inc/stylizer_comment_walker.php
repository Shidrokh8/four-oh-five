<?php
  class stylizer_comment_walker extends Walker_Comment {
    var $tree_type = 'comment';
    var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );
 
    // constructor – wrapper for the comments list
    function __construct() { ?>

      <section class="comments-list">

    <?php }

    // start_lvl – wrapper for child comments list
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      $GLOBALS['comment_depth'] = $depth + 2; ?>
      
      <section class="child-comments comments-list">

    <?php }
  
    // end_lvl – closing wrapper for child comments list
    function end_lvl( &$output, $depth = 0, $args = array() ) {
      $GLOBALS['comment_depth'] = $depth + 2; ?>

      </section>

    <?php }

    // start_el – HTML for comment template
    function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
      $depth++;
      $GLOBALS['comment_depth'] = $depth;
      $GLOBALS['comment'] = $comment;
      $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); 
  
      if ( 'article' == $args['style'] ) {
        $tag = 'article';
        $add_below = 'comment';
      } else {
        $tag = 'article';
        $add_below = 'comment';
      } ?>

      <article <?php comment_class($class='card mb-4'); ?> id="comment-<?php comment_ID() ?>">
        <div class="card-header d-flex align-items-center">
          <figure class="m-0 mr-3"><?php echo get_avatar( $comment, 48 ); ?></figure>
          <h2 class="h6 card-title m-0">
            <a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a> on <time class="comment-meta-item" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>"><?php comment_date() ?></time>
          </h2>
        </div>
        <div class="card-block">
          <?php if ($comment->comment_approved == '0') : ?>
            <p class="bg-success text-white p-4 rounded">Your comment is awaiting moderation.</p>
          <?php endif; ?>
          <?php comment_text() ?>
        </div>
        <footer class="card-footer">
          <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          <a class="card-link" href="#comment-<?php comment_ID() ?>">Save Link</a>
          <?php edit_comment_link('Edit this comment','',''); ?>
        </footer>

    <?php }

    // end_el – closing HTML for comment template
    function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

      </article>

    <?php }

    // destructor – closing wrapper for the comments list
    function __destruct() { ?>

      </section>
    
    <?php }

  }


// filter to replace class on reply link

//           class name             function name
add_filter('comment_reply_link', 'replace_reply_link_class');


function replace_reply_link_class($class){
    $class = str_replace("class='comment-reply-link", "class='card-link", $class);
    return $class;
}