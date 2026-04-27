<?php
/*
Template Name: Single Whitepaper
*/
get_header();

$banner_image = get_field('banner_image');

if (is_array($banner_image) && isset($banner_image['url'])) {
    $banner_url = $banner_image['url'];
} else {

    $banner_url = !empty($banner_image) ? $banner_image : '';
}
?>

<div class="rs-single-whitepaper-page-wrapper">
     <section class="whitepaper-banner" style="background-image: url('<?php echo esc_url($banner_url); ?>'); background-size: cover;  background-position: center; background-repeat: no-repeat; min-height: 90vh;">
        <div class="banner-container">
            <div class="banner-content">
                <span class="tag-whitepaper"> White paper</span>
                <h1 class="whitepaper-title"><?php the_title(); ?></h1>
                <div class="whitepaper-meta">
                    <span class="publish-date"><?php echo get_the_date('F j, Y'); ?></span>
                    <?php 
                    $author = get_post_meta(get_the_ID(), 'whitepaper_author', true);
                    if ($author) : ?>
                        <span class="author">By: <?php echo esc_html($author); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="whitepaper-content-section">
        <div class="content-container">
            <div class="whitepaper-main-content">
                <div class="content-wrapper">
                    <?php the_content(); ?>
                </div>
                
                <!--<div class="content-actions">-->
                <!--    <a href="<?php echo home_url('/white-paper/'); ?>" class="back-to-whitepapers">-->
                <!--        ← Back to All Whitepapers-->
                <!--    </a>-->
                <!--</div>-->
            </div>
        </div>
        <div class="form-container">
            <div class="banner-form">
                <div class="download-form-container">
                    <h3>Access Now</h3>
                    
                    <!--    <form id="whitepaper-download-form" class="whitepaper-form">-->
                    <!--    <?php wp_nonce_field('whitepaper_download_nonce', 'security'); ?>-->
                    <!--    <input type="hidden" name="whitepaper_id" value="<?php the_ID(); ?>">-->
                    <!--    <input type="hidden" name="action" value="whitepaper_download">-->
                        
                    <!--    <div class="form-group">-->
                    <!--        <input type="text" name="full_name" placeholder="Full Name" required>-->
                    <!--    </div>-->
                        
                    <!--    <div class="form-group">-->
                    <!--        <input type="email" name="email" placeholder="Email Address" required>-->
                    <!--    </div>-->
                        
                    <!--    <div class="form-group">-->
                    <!--        <input type="text" name="company" placeholder="Company Name">-->
                    <!--    </div>-->
                        
                    <!--    <div class="form-group">-->
                    <!--        <input type="tel" name="phone" placeholder="Phone Number">-->
                    <!--    </div>-->
                        
                    <!--    <div class="form-group checkbox-group">-->
                    <!--        <label>-->
                    <!--            <input type="checkbox" name="agree_terms" required>-->
                    <!--            <span>I agree to receive updates and marketing communications</span>-->
                    <!--        </label>-->
                    <!--    </div>-->
                        
                    <!--    <div class="form-group">-->
                    <!--        <button type="submit" class="download-submit-btn">-->
                    <!--            Submit-->
                    <!--        </button>-->
                    <!--    </div>-->
                    <!--</form>-->
                    <?php echo do_shortcode('[contact-form-7 id="6fb58da" title="Whitepaper Form"]'); ?>
                    
                </div>
            </div>
        </div>
    </section>
</div>



<?php 
$pdf_url = get_field('whitepaper_pdf'); // $pdf_url is already a string
if ($pdf_url):
?>
<script>
document.addEventListener('wpcf7mailsent', function(event) {
    window.open('<?php echo esc_url($pdf_url); ?>', '_blank');
}, false);
</script>
<?php endif; ?>


<?php get_footer(); ?>
<!--=======content=====-->


<?php get_footer(); ?>
