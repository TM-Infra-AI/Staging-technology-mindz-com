<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ekko
 * by KeyDesign
 */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  get_header();
  $kd_post_content = $blog_template_class = $page_layout = $section_style = $sticky_sidebar = $style_escaped = $blog_active_widgets = $blog_sidebar = $blog_template = '';

  $themetek_page_top_padding = get_post_meta( get_the_ID(), '_themetek_page_top_padding', true );
  $themetek_page_bottom_padding = get_post_meta( get_the_ID(), '_themetek_page_bottom_padding', true );
  $page_bgcolor = get_post_meta( get_the_ID(), '_themetek_page_bgcolor', true );

  if ( '' !== $themetek_page_top_padding ) {
    $section_style .= 'padding-top:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $themetek_page_top_padding ) ? $themetek_page_top_padding : $themetek_page_top_padding . 'px' ) . ';';
  }
  if ( '' !== $themetek_page_bottom_padding ) {
    $section_style .= 'padding-bottom:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $themetek_page_bottom_padding ) ? $themetek_page_bottom_padding : $themetek_page_bottom_padding . 'px' ) . ';';
  }
  if ( '' !== $page_bgcolor ) {
    $section_style .= 'background-color:'.$page_bgcolor.';';
  }
  $style_escaped = $section_style ? 'style="' . esc_attr( $section_style ) . '"' : '';

  $blog_sidebar = ekko_get_option ( 'tek-blog-sidebar' );
  $blog_template = ekko_get_option( 'tek-blog-template' );

  if ('' == $blog_sidebar) {
    $blog_sidebar = 1;
  }

  if( !class_exists( 'ReduxFramework' ) ) {
    $kd_post_content .= "img-top-list";
    $blog_template_class .= "blog-img-top-list";
  } elseif ( '' != $blog_template ) {
    $kd_post_content .= $blog_template;
    $blog_template_class .= 'blog-'.$blog_template;
  }

  if ( $blog_sidebar ) {
    $page_layout .= "use-sidebar";
  }

  if ( ekko_get_option( 'tek-blog-listing-sticky-sidebar' ) ) {
    $sticky_sidebar = 'post-sticky-sidebar';
  }

  $blog_active_widgets = is_active_sidebar( 'blog-sidebar' );

  if ( is_home() ) : ?>
	<div id="posts-content" class="container <?php echo esc_attr( $page_layout ); ?> <?php echo esc_attr( $blog_template_class ); ?>" >
	<?php if ( $blog_sidebar && $blog_active_widgets ) { ?>
		<div class="col-xs-12 col-sm-12 col-lg-8">
	<?php } else { ?>
		<div class="col-xs-12 col-sm-12 col-lg-8 BlogFullWidth">
	<?php } ?>
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'core/templates/post/blog', $kd_post_content );
			endwhile;

      /* Numeric posts pagination */
			ekko_numeric_posts_nav();

		else :
			get_template_part( 'core/templates/post/content', 'none' );
		endif;
	?>
	</div>
	<?php if ( $blog_sidebar && $blog_active_widgets ) { ?>
		<div class="col-xs-12 col-sm-12 col-lg-4 <?php echo esc_attr( $sticky_sidebar ); ?>">
      <div class="right-sidebar">
		     <?php get_sidebar(); ?>
      </div>
		</div>
	<?php } ?>
	</div>
<?php else : ?>
  <?php
  // This variable ($style_escaped) has been safely escaped in the following file: ekko/front-page.php Line: 29
  ?>
	<div id="primary" class="content-area" <?php echo $style_escaped; ?>>
		<main id="main" class="site-main" role="main">

			<?php // Show the selected frontpage content.
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'core/templates/page/content', 'front-page' );
				endwhile;
			else :
				get_template_part( 'core/templates/post/content', 'none' );
			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php endif; ?>



<div class="chatbot-footer" style="    position: fixed;z-index: 99;">
        <div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
        <i class="material-icons type1 for-closed active" style="color: rgb(255, 255, 255);">
            <svg id="ic_bubble" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"></path>
                <path d="M0 0h24v24H0z" fill="none"></path>
            </svg>
        </i>
    </div>

    <div class="chat-box">
        <section class="msger">
            <header class="msger-header">
                <div class="msger-header-title">
                    <img src="/img/TM-Logo-white-Primary-new.png" alt="" style="width:40px;">
                </div>
                <div class="msger-header-options">
                    <span class="chat-box-toggle"><i class="fa-solid fa-xmark"></i></span>
                </div>
            </header>

            <main class="msger-chat">
                <div class="msg left-msg">
                    <div class="msg-img" style="background-image: url(https://cdn-icons-png.flaticon.com/512/10479/10479785.png)">
                    </div>

                    <div class="msg-bubble">
                        <div class="msg-info">
                            <div class="msg-info-name">Technology Mindz</div>
                            <div class="msg-info-time" id="time"></div>
                        </div>

                        <div class="msg-text">
                            Hi, welcome to Technology Mindz! Go ahead and send me a message.
                        </div>
                        <div class="speack speak" id="speakButton"><img
                                src="https://cdn-icons-png.flaticon.com/512/6996/6996058.png"></div>
                    </div>
                </div>

            </main>

            <form class="msger-inputarea">
                <input type="text" name="text" class="msger-input" placeholder="Type your message">
                <label class="filelabel" id="filelabel">
                    <i class="fa fa-paperclip" id="mycls"></i>
                    <input class="FileUpload1" id="FileInput" name="attachment" type="file"/>
                </label>
                <input type="hidden" name="guid" class="guid" value="">
                <button type="button" class="mic" id="speakButton"><i class="fa fa-microphone"></i></button>
                <button type="submit" name="submit" class="msger-send-btn"><img src="/img/api-send.png"
                        style="width:45px;"></button>
            </form>
        </section>
    </div>
    </div>

<?php get_footer(); ?>
