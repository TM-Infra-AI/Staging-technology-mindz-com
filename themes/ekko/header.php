<?php

/**
 * Theme header
 * @package ekko
 * by KeyDesign
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$wrapper_class = $navbar_class = $main_menu_class = $hide_title_section_class = $disable_animations_class = $button_hover_class =
    $nav_full_class = $fixed_menu_class = $enable_topbar_class = $sticky_topbar_class = $secondary_logo_class =
    $trans_sec_logo_class = $main_nav_alignment = $single_post_template = $dropdown_hover_effect = $header_bttns_wrapper = $enable_topbar_mobile = '';

$themetek_page_showhide_title_section = get_post_meta(get_the_ID(), '_themetek_page_showhide_title_section', true);
if ($themetek_page_showhide_title_section && !is_search()) {
    $hide_title_section_class = 'hide-title-section';
}

if (ekko_get_option('tek-disable-animations') == true) {
    $disable_animations_class = 'no-mobile-animation';
}

if ('' != ekko_get_option('tek-btn-effect')) {
    $button_hover_class = ekko_get_option('tek-btn-effect');
}

if (ekko_get_option('tek-menu-style') == '2') {
    $nav_full_class = 'full-width';
}

if (ekko_get_option('tek-menu-behaviour') == '2') {
    $fixed_menu_class = 'fixed-menu';
}

if (ekko_get_option('tek-topbar') == '1') {
    $enable_topbar_class = 'with-topbar';
}

if (ekko_get_option('tek-topbar') == '1' && ekko_get_option('tek-topbar-mobile') == '1') {
    $enable_topbar_mobile = 'with-topbar-mobile';
}

if (ekko_get_option('tek-topbar-sticky') == '1') {
    $sticky_topbar_class = 'with-topbar-sticky';
}

if (ekko_get_option('tek-sticky-nav-logo') == 'nav-secondary-logo') {
    $secondary_logo_class = 'nav-secondary-logo';
}

if (ekko_get_option('tek-transparent-nav-logo') == 'nav-secondary-logo') {
    $trans_sec_logo_class = 'nav-transparent-secondary-logo';
}

if (ekko_get_option('tek-menu-alignment') == 'main-nav-left') {
    $main_nav_alignment = 'main-nav-left';
} elseif (ekko_get_option('tek-menu-alignment') == 'main-nav-center') {
    $main_nav_alignment = 'main-nav-center';
} elseif (ekko_get_option('tek-menu-alignment') == 'main-nav-right') {
    $main_nav_alignment = 'main-nav-right';
} else {
    $main_nav_alignment = 'main-nav-right';
}

if (ekko_get_option('tek-single-post-template') && is_singular('post')) {
    $single_post_template =  ekko_get_option('tek-single-post-template');
}

if ('' != ekko_get_option('tek-dropdown-nav-hover')) {
    $dropdown_hover_effect = ekko_get_option('tek-dropdown-nav-hover');
} else {
    $dropdown_hover_effect = 'default-dropdown-effect';
}

if (ekko_get_option('tek-modal-button') || ekko_get_option('tek-panel-button')) {
    $header_bttns_wrapper = true;
}

$wrapper_class = implode(' ', array($hide_title_section_class, $disable_animations_class, $button_hover_class, $single_post_template));
$navbar_class = implode(' ', array('navbar', 'navbar-default', 'navbar-fixed-top', $button_hover_class, $nav_full_class, $fixed_menu_class, $enable_topbar_class, $enable_topbar_mobile, $sticky_topbar_class, $secondary_logo_class, $trans_sec_logo_class));
$main_menu_class = implode(' ', array('collapse', 'navbar-collapse', $dropdown_hover_effect));
?>
<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>

<head>
	
    <meta charset="<?php echo esc_attr(get_bloginfo('charset')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />
    <meta name="google-site-verification" content="N3rIlUDI3VcNkdb7QNveAYnmu51SswxfLVKwL-Vc_ok" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://staging.technologymindz.com/wp-content/themes/ekko/custom/ai-demo.css">

    <script src="https://staging.technologymindz.com/wp-content/themes/ekko/custom/ai-demo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

		<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/644c114931ebfa0fe7fafc45/1gv4i72rn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->


    <?php wp_head(); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J46903LYE0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-J46903LYE0');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PR5MT8K');</script>
<!-- End Google Tag Manager -->
	<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PR5MT8K');</script> -->
<!-- End Google Tag Manager -->
	<!-- LeadRebel start -->
<script>
//     (function(d, w, b, t){
//         var h = d.getElementsByTagName("head")[0];
//         var s = d.createElement("script");
//         s.src = b + "/t/script.js?c=" + t;
//         h.appendChild(s);
//     })(document, window, "https://app.leadrebel.io", "64535b6e9fb93151c712f702");
</script>
<!-- LeadRebel end -->

</head>

<body <?php body_class(); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR5MT8K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR5MT8K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	
    <?php wp_body_open(); ?>

    <nav class="d-xl-none d-block navbar navbar-default navbar-fixed-top btn-hover-2   with-topbar  nav-transparent-secondary-logo">

        <div class="topbar tb-border-design">
            <div class="container">
                <div class="topbar-left-content ">
                    <div class="topbar-socials">
                        <ul class="redux-social-media-list clearfix">
                            <li style="list-style: none;"><a target='_blank' href='https://www.facebook.com/TechnologyMindzUSA/'><i class="fab fa-facebook-f" style='color:rgb(255, 255, 255);background-color:transparent;' title=""></i></a></li>
                            <li style="list-style: none;"><a target='_blank' href='https://www.instagram.com/technologymindz/'><i class="fab fa-instagram" style='color:rgb(255, 255, 255);background-color:transparent;' title=""></i></a></li>
                            <li style="list-style: none;"><a target='_blank' href='https://www.linkedin.com/company/technology-mindz/mycompany/'><i class="fab fa-linkedin-in" style='color:rgb(255, 255, 255);background-color:transparent;' title=""></i></a></li>
                            <li style="list-style: none;"><a target='_blank' href='https://in.pinterest.com/Technologymindz/'><i class="fab fa-pinterest" style='color:rgb(255, 255, 255);background-color:transparent;' title=""></i></a></li>
<!--                             <li style="list-style: none;"><a target='_blank' href='https://twitter.com/TechnologyMindz'><i class="fab fa-twitter" style='color:rgb(255, 255, 255);background-color:transparent;' title=""></i></a></li> -->
                            <li style="list-style: none;"><a target='_blank' href='https://appexchange.salesforce.com/appxConsultingListingDetail?listingId=a0N3A00000G9IHAUA3'><i class="fab fa-bandcamp" style='color:rgb(255, 255, 255);background-color:transparent;' title=""></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="topbar-right-content ">
                    <div class="topbar-contact"><span class="topbar-phone"><a href="tel:+1 (888) 982-4016"><i class="fas fa-phone-alt"></i><span>+1 (888) 982-4016</span></a></span><span class="topbar-opening-hours"><i class="far fa-clock"></i><span>info@technologymindz.com</span></span></div>
                </div>
                <div class="topbar-extra-content">
                    <div class="topbar-search">
                        <span class="toggle-search fa-search fa"></span>
                        <div class="topbar-search-container">
                            <form role="search" method="get" class="search-form" action="https://staging.technologymindz.com/">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" role="search" /></label>
                                <input type="submit" class="search-submit" value="">
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="menubar main-nav-right">
            <div class="container">
                <div id="logo">
                    <a class="logo" href="https://staging.technologymindz.com">
                        <img class="fixed-logo" src="https://staging.technologymindz.com/wp-content/uploads/2022/09/technologymindz-logo.jpg" width="140" alt="" />

                        <img class="nav-logo" src="https://staging.technologymindz.com/wp-content/uploads/2022/10/tmlogo-white.png" width="140" alt="" />

                    </a>
                </div>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="mobile-cart">
                    </div>
                    <div class="topbar-search mobile-search">
                        <span class="toggle-search fa-search fa"></span>
                        <div class="topbar-search-container">
                            <form role="search" method="get" class="search-form" action="https://staging.technologymindz.com/">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" role="search" /></label>
                                <input type="submit" class="search-submit" value="">
                            </form>
                        </div>
                    </div>
                </div>
                <div id="main-menu" class="collapse navbar-collapse underline-effect">
                    <ul id="menu-header-menu" class="nav navbar-nav ">
                        <li id="menu-item-7523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7523"><a title="About Us" href="https://staging.technologymindz.com/about-us/">About Us</a></li>
                        <li id="menu-item-10593" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10593 dropdown"><a title="Services" href="#">Services</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li id="menu-item-8033" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8033 dropdown"><a title="Salesforce" >Salesforce</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li id="menu-item-8040" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8040"><a title="Overview" href="https://staging.technologymindz.com/salesforce-overview/">Overview</a></li>
                                        <li id="menu-item-8040" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8040"><a title="Consulting" href="https://staging.technologymindz.com/salesforce/salesforce-consulting/">Consulting</a></li>
                                        <li id="menu-item-8042" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8042"><a title="Implementation" href="https://staging.technologymindz.com/salesforce/salesforce-implementation/">Implementation</a></li>
                                        <li id="menu-item-8041" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8041"><a title="Customization" href="https://staging.technologymindz.com/salesforce/salesforce-customization/">Customization</a></li>
                                        <li id="menu-item-8039" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8039"><a title="Audit" href="https://staging.technologymindz.com/salesforce/salesforce-audit/">Audit</a></li>
                                        <li id="menu-item-8036" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8036"><a title="Re-Engineering" href="https://staging.technologymindz.com/salesforce/salesforce-re-engineering/">Re-Engineering</a></li>
                                        <li id="menu-item-8035" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8035"><a title="Managed Services" href="https://staging.technologymindz.com/salesforce/salesforce-managed-services/">Managed Services</a></li>
                                        <li id="menu-item-8034" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8034"><a title="Integration" href="https://staging.technologymindz.com/salesforce/salesforce-integration/">Integration</a></li>
                                        <li id="menu-item-8038" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8038"><a title="Support" href="https://staging.technologymindz.com/salesforce/salesforce-support/">Support</a></li>
                                        <li id="menu-item-8037" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8037"><a title="Report And Dashboard" href="https://staging.technologymindz.com/salesforce/salesforce-report-and-dashboard/">Report And Dashboard</a></li>
                                        <li id="menu-item-10359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10359"><a title="Data Migration" href="https://staging.technologymindz.com/salesforce/salesforce-data-migration/">Data Migration</a></li>
                                        <li id="menu-item-11106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11106"><a title="Appexchange Development" href="https://staging.technologymindz.com/salesforce/appexchange-development/">Appexchange Development</a></li>
                                        <li id="menu-item-11088" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11088"><a title="Lightning" href="https://staging.technologymindz.com/salesforce/salesforce-lightning/">Lightning</a></li>
                                        <li id="menu-item-11107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11107"><a title="DevOps Services" href="https://staging.technologymindz.com/salesforce/salesforce-devops-services/">DevOps</a></li>
                                        <li id="menu-item-11108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11108"><a title="QA Services" href="https://staging.technologymindz.com/salesforce/salesforce-qa-services/">QA </a></li>
                                        <li id="menu-item-11108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11108"><a title="Salesforce Security Services" href="https://staging.technologymindz.com/salesforce-security-services/">Security </a></li>
                                        <li id="menu-item-11108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11108"><a title="Salesforce AgentForce" href="https://staging.technologymindz.com/salesforce-agentforce/">AgentForce </a></li>
                                        <li id="menu-item-11108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11108"><a title="Salesforce Data Services" href="https://staging.technologymindz.com/salesforce-data-management/">Data management</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-8075" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8075 dropdown"><a title="Staff Augmentation" >Staff Augmentation</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li id="menu-item-9252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9252"><a title="Staff Augmentation Overview" href="https://staging.technologymindz.com/staff-augmentation-overview/">Overview</a></li>
                                        <li id="menu-item-9252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9252"><a title="Salesforce Staff Augmentation" href="https://staging.technologymindz.com/salesforce-staff-augmentation/">Salesforce Staff Augmentation</a></li>
                                        <li id="menu-item-9070" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9070"><a title="Java Staff Augmentation" href="https://staging.technologymindz.com/java-staff-augmentation/">Java Staff Augmentation</a></li>
                                        <li id="menu-item-9071" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9071"><a title="DevOps Staff Augmentation" href="https://staging.technologymindz.com/devops-staff-augmentation/">DevOps Staff Augmentation</a></li>
                                        <li id="menu-item-9072" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9072"><a title="Technology Expertise Staff Augmentation" href="https://staging.technologymindz.com/technology-expertise-staff-augmentation/">Technology Expertise Staff Augmentation</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-8571" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8571"><a title="CRM Consulting" href="https://staging.technologymindz.com/crm-consulting/">CRM Consulting</a></li>
                                <li id="menu-item-10594" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10594"><a title="Web Development" href="https://staging.technologymindz.com/web-development/">Web Development</a></li>
                                <li id="menu-item-10696" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10696"><a title="Mobile Application Development" href="https://staging.technologymindz.com/mobile-application-development/">Mobile App Development</a></li>
                                <li id="menu-item-10696" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10696"><a title="Mobile Application Development" href="https://staging.technologymindz.com/managed-it-services/">Managed IT Services</a></li>
								 <li id="menu-item-10681" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10696"><a title="Mobile Application Development" href="https://staging.technologymindz.com/cyber-security/">Cybersecurity</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-866511" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8665 dropdown"><a title="Core+">Core+</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li id="menu-item-871511" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-871511"><a title="Disaster recovery" href="https://staging.technologymindz.com/case-study/">Disaster recovery</a></li>
                                <li id="menu-item-847011" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-847011"><a title="IT security" href="https://staging.technologymindz.com/blog/">IT security</a></li>
                                <!--<li id="menu-item-1127311" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1127311"><a title="Employee productivity tracker" href="https://staging.technologymindz.com/careers/">Employee productivity tracker</a></li>-->
								<li id="menu-item-1127311" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1127311"><a title="Backup and restore" href="https://staging.technologymindz.com/podcast/">Backup and restore</a></li>
								<li id="menu-item-1127311" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1127311"><a title="Fractional CIO" href="https://staging.technologymindz.com/webinars/">Fractional CIO</a></li>
                            </ul>
                        </li>
                        
                        <li id="menu-item-8665" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8665 dropdown"><a title="Industries">Industries</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li id="menu-item-8715" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8715"><a title="Non profit" href="">Non profit</a></li>
                                <li id="menu-item-21273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11273"><a title="Careers" href="">Careers</a></li>
                            </ul>
                        </li>
                        
                        <li id="menu-item-8665" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8665 dropdown"><a title="Insights">Insights</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li id="menu-item-8715" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8715"><a title="Case Study" href="https://staging.technologymindz.com/case-study/">Case Study</a></li>
                                <li id="menu-item-8470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8470"><a title="Blog" href="https://staging.technologymindz.com/blog/">Blog</a></li>
                                <li id="menu-item-11273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11273"><a title="Careers" href="https://staging.technologymindz.com/careers/">Careers</a></li>
								<li id="menu-item-11453" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11273"><a title="PodCast" href="https://staging.technologymindz.com/podcast/">PodCast</a></li>
								<li id="menu-item-114323" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11273"><a title="Webinars" href="https://staging.technologymindz.com/webinars/">Webinars</a></li>
                            </ul>
                        </li>
						<li id="menu-item-8665" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8665 dropdown"><a  href="https://staging.technologymindz.com/resources/">Resources</a>
						</li>
                        <li id="menu-item-7491" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7491"><a title="Contact Us" href="https://staging.technologymindz.com/contact-us/">Contact Us</a></li>

                    </ul>
                </div>
                <div class="main-nav-extra-content">
                    <div class="search-cart-wrapper">
                    </div>
                    <div class="header-bttn-wrapper">

<!--                         <a class="modal-menu-item tt_button tt_primary_button btn_primary_color default_header_btn  panel-trigger-btn">Let&#039;s talk</a> -->
                        <a href="https://tawk.to/chat/644c114931ebfa0fe7fafc45/1gv4i72rn" target="_blank" class="tt_button tt_primary_button btn_primary_color default_header_btn" style="background-color:#0348a8;color:white;">Let&#039;s talk</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="d-xl-block d-none position-fixed w-100 tab-header header1" style="text-align:left!important; background-color:#fff !important;">
        <div id="topbar" class="topbar tb-border-design" style="color:white; background-color:#fff !important;">
            <div class="container">
                <div class="topbar-left-content ">
                    <div class="topbar-socials">
                        <ul class="redux-social-media-list clearfix">
                            <li style="list-style: none;"><a target='_blank' href='https://www.facebook.com/TechnologyMindzUSA/'><i class="fab fa-facebook-f" style='background-color:transparent;color: black !important;' title=""></i></a></li>
                            <li style="list-style: none;"><a target='_blank' href='https://www.instagram.com/technologymindz/'><i class="fab fa-instagram" style='background-color:transparent;color: black !important;' title=""></i></a></li>
                            <li style="list-style: none;"><a target='_blank' href='https://www.linkedin.com/company/technology-mindz/mycompany/'><i class="fab fa-linkedin-in" style='background-color:transparent;color: black !important;' title=""></i></a></li>
                            <li style="list-style: none;"><a target='_blank' href='https://in.pinterest.com/Technologymindz/'><i class="fab fa-pinterest" style='background-color:transparent;color: black !important;' title=""></i></a></li>
<!--                             <li style="list-style: none;"><a target='_blank' href='https://twitter.com/TechnologyMindz'><i class="fab fa-twitter" style='background-color:transparent;color: black !important;' title=""></i></a></li> -->
                            <li style="list-style: none;"><a target='_blank' href='https://appexchange.salesforce.com/appxConsultingListingDetail?listingId=a0N3A00000G9IHAUA3'><i class="fab fa-bandcamp" style='background-color:transparent;color: black !important;' title=""></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="topbar-right-content ">
                    <div class="topbar-contact"><span class="topbar-phone"><a href="tel:+1 (888) 982-4016"><i class="fas fa-phone-alt" style="color: black !important;"></i><span style="color:black;">+1 (888) 982-4016</span></a></span><span class="topbar-opening-hours"><i class="far fa-clock" style="color: black !important;"></i><span style="color:black">info@technologymindz.com</span></span></div>
                </div>
                <div class="topbar-extra-content">
                    <div class="topbar-search">
                        <span class="toggle-search fa-search fa"></span>
                        <div class="topbar-search-container">
                            <form role="search" method="get" class="search-form" action="https://staging.technologymindz.com/">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" role="search" /></label>
                                <input type="submit" class="search-submit" value="">
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg position-relative py-0 set-header-onscroll" style="margin-bottom:0px!important;background-color:#fff !important;">

            <div class="header_rollover position-fixed set-header-onscroll"></div>
            <div class="main-header py-0">
                <a class="navbar-brand position-relative py-0 tcs-right-logo" href="https://staging.technologymindz.com/">
                    
					<!--<img class="brand-logo-img " src="https://staging.technologymindz.com/wp-content/uploads/2022/10/tmlogo-white.png" alt="Technology Mindz" title="Technology Mindz" width="140">-->
					
					<img class="brand-logo-img " src="https://staging.technologymindz.com/wp-content/uploads/2022/09/technologymindz-logo.jpg" alt="Technology Mindz" title="Technology Mindz" width="140">
					
                    <span class="sr-only d-none">Technology Mindz</span></a>
                <span class="seperator"></span>
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="navbar-collapse navbar_links  ">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item nav_item_li d-flex flex-column justify-content-center align-items-center" data-nav="subHeader1" data-nav-link="" id="a1">
                        <a class="nav-link" href="https://staging.technologymindz.com/about-us/">
                            About Us
                        </a>
                        <span class="nav-underline"></span>
                    </li>
                    <li class="nav-item nav_item_li d-flex flex-column justify-content-center align-items-center" data-nav="subHeader2" data-nav-link="">
                        <a class="nav-link">Services</a>
                        <span class="nav-underline"></span>
                    </li>
                    <li class="nav-item nav_item_li d-flex flex-column justify-content-center align-items-center" data-nav="subHeader5" data-nav-link="">
                        <a class="nav-link">Core+</a>
                        <span class="nav-underline"></span>
                    </li>
                    <li class="nav-item nav_item_li d-flex flex-column justify-content-center align-items-center" data-nav="subHeader3" data-nav-link="">
                        <a class="nav-link">Industries</a>
                        <span class="nav-underline"></span>
                    </li>
                    <li class="nav-item nav_item_li d-flex flex-column justify-content-center align-items-center" data-nav="subHeader4" data-nav-link="">
                        <a class="nav-link">Insights</a>
                        <span class="nav-underline"></span>
                    </li>
					<li class="nav-item nav_item_li d-flex flex-column justify-content-center align-items-center" data-nav="subHeader55" data-nav-link="">
                        <a class="nav-link" href="https://staging.technologymindz.com/resources/">Resources</a>
                        <span class="nav-underline"></span>
                    </li>
                    <li class="nav-item nav_item_li d-flex flex-column justify-content-center align-items-center" data-nav="subHeader6" data-nav-link="" id="a2">
                        <a class="nav-link" href="https://staging.technologymindz.com/contact-us/">
                            Contact Us
                        </a>
                        <span class="nav-underline"></span>
                    </li>

                </ul>
                <div class="navbar-nav ml-auto header-bttn-wrapper">
                    <a class="modal-menu-item tt_button tt_primary_button btn_primary_color default_header_btn  panel-trigger-btn" style="background-color:#0348a8;color:white;">Let&#039;s talk</a>
                </div>

            </div>


        </nav>

        <div>





            <div class="mega_menu pt-32 position-absolute set-menu-onscroll" data-nav="subHeader1" aria-hidden="false">
                <div class="submenu_rollover w-100 position-absolute"></div>
                <div class="container menu_container">
                    <div class="row position-relative position-relative">
                        <div class="col-11 mega_menu_internal_div">
                            <div class="header-inner-left">
                                <ul class="inner-ul position-relative pl-0">
                                </ul>
                            </div>
                        </div>

                        <div class="sub-header-right-rollover position-absolute d-none"></div>
                    </div>
                </div>
            </div>

            <div class="mega_menu pt-32 position-absolute set-menu-onscroll" data-nav="subHeader2" aria-hidden="false">
                <div class="submenu_rollover w-100 position-absolute"></div>
                <div class="container menu_container">
                    <div class="row position-relative position-relative">
                        <div class="col-11 mega_menu_internal_div">
                            <div class="header-inner-left">
                                <ul class="inner-ul position-relative pl-0">
                                    <li class="inner-link row" data-id="Topics">
                                        <a class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Salesforce
                                            <div class="d-flex align-items-center">

                                                <span class="header-right-arrow-icon"></span>

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>

                                        <ul class="right-submenu-l3 sub-header-content-link-ul row col-8 position-absolute d-none">
                                             <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce-overview/">Overview</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-consulting/">Consulting</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-implementation/">Implementation</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-customization/">Customization</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-audit/">Audit</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-re-engineering/">RE-Engineering</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-managed-services/">Managed Services</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-integration/">Integration</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-support/">Support</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-report-and-dashboard/">Report &amp; Dashboard</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-data-migration/">Data Migration</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/appexchange-development/">Appexchange Development</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-lightning/">Lightning</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-devops-services/">DevOps</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce/salesforce-qa-services/">QA </a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce-security-services/">Security</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce-agentforce/">AgentForce</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce-data-management/">Data management</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="inner-link row"><a data-nav-id="subHeader2" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Artificial Intelligence
                                            <div class="d-flex align-items-center"><span class="header-right-arrow-icon"></span></div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                        <div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">

                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/artificial-intelligence-services/" class="section-content">Overview</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/use-cases-of-artificial-intelligence/" class="section-content">Use Cases</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/ai-demos/" class="section-content">AI Demos</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/generative-ai-consulting-services/" class="section-content">Generative AI Consulting</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/generative-ai-development-services/" class="section-content">Generative AI Development</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/generative-ai-integration-services/" class="section-content">Generative AI Integration</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/prompt-engineering-services/" class="section-content">Prompt Engineering</a></div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="inner-link row" data-id="Perspectives">
                                        <a href="https://staging.technologymindz.com/managed-it-services/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">IT Managed Services
                                            <div class="d-flex align-items-center">

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>
                                    
                                    <li class="inner-link row" data-id="Perspectives">
                                        <a href="https://staging.technologymindz.com/cyber-security/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Cybersecurity
                                            <div class="d-flex align-items-center">

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>
                                    
                                    <li class="inner-link row"><a data-nav-id="subHeader2" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Microsoft Dynamics 365
                                            <div class="d-flex align-items-center"><span class="header-right-arrow-icon"></span></div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                        <div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/microsoft-dynamics-365-crm-services/" class="section-content">Overview</a></div>
                                            </div>

                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/microsoft-dynamics-365-crm-consulting-services/" class="section-content">Consulting</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/microsoft-dynamics-365-implementation-services/" class="section-content">Implementation</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/ms-dynamics-365-customization-services/" class="section-content">Customization</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/microsoft-dynamics-365-integration/" class="section-content">Integration</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/microsoft-dynamics-365-migration/" class="section-content">Migration</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/microsoft-dynamics-maintenance-and-support-services/" class="section-content">Support</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    
                                    <li class="inner-link row"><a data-nav-id="subHeader2" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Staff Augmentation
                                            <div class="d-flex align-items-center"><span class="header-right-arrow-icon"></span></div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                        <div class="col-12 col-md-6 row pb-5 sub-header-content sub_header_description position-absolute d-none">
                                        </div>
                                        <ul class="right-submenu-l3 sub-header-content-link-ul row col-8 position-absolute d-none">
                                             <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/staff-augmentation-overview/">Overview</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/salesforce-staff-augmentation/">Salesforce Staff Augmentation</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/java-staff-augmentation/">Java Staff Augmentation</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/devops-staff-augmentation/">DevOps Staff Augmentation</a></li>

                                            <li class="l3-li-list"><a class="l3-li-link" href="https://staging.technologymindz.com/technology-expertise-staff-augmentation/">Technology Expertise Staff Augmentation</a></li>
                                        </ul>

                                    </li>    

                                    <li class="inner-link row"><a data-nav-id="subHeader2" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Robotic Process Automation
                                            <div class="d-flex align-items-center"><span class="header-right-arrow-icon"></span></div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                        <div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">

                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/robotic-process-automation-services/" class="section-content">Overview</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/rpa-use-cases/" class="section-content">Use Cases</a></div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/rpa-tools/" class="section-content">Tools</a></div>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- <li class="inner-link row" data-id="Perspectives">
                                        <a href="https://staging.technologymindz.com/service-now/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-2 px-0 position-relative">ServiceNow
                                            <div class="d-flex align-items-center">

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                    </li> -->

                                    
									
									

                                                                   
                                    
                                    <!-- <li class="inner-link row" data-id="Customer Stories">
                                        <a href="https://staging.technologymindz.com/crm-consulting/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-2 px-0 position-relative">CRM Consulting
                                            <div class="d-flex align-items-center">

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                    </li> -->

                                    <li class="inner-link row" data-id="Perspectives">
                                        <a href="https://staging.technologymindz.com/web-development/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Web Development
                                            <div class="d-flex align-items-center">

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>

                                    <li class="inner-link row" data-id="Perspectives">
                                        <a href="https://staging.technologymindz.com/mobile-application-development/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Mobile App Development
                                            <div class="d-flex align-items-center"></div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="sub-header-right-rollover position-absolute d-none"></div>
                    </div>
                </div>
            </div>
            
            <div class="mega_menu pt-32 position-absolute set-menu-onscroll" data-nav="subHeader3" aria-hidden="false">
                <div class="submenu_rollover w-100 position-absolute"></div>
                <div class="container menu_container">
                    <div class="row position-relative position-relative">
                        <div class="col-11 mega_menu_internal_div">
                            <div class="header-inner-left">
                                <ul class="inner-ul position-relative pl-0">
                                    <li class="inner-link row"><a href="https://staging.technologymindz.com/financial-services-industry-solutions/" data-nav-id="subHeader3" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Financial Services</a>
                                        <div class="l3_divinder col-1"></div>                                        
                                    </li>
                                    <li class="inner-link row" data-id="India"><a href="https://staging.technologymindz.com/advisory-consulting-industry-solutions/"  class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Advisory & Consulting</a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>
                                    <li class="inner-link row"><a href="https://staging.technologymindz.com/nonprofit-industry-solutions/" data-nav-id="subHeader3" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Non-Profit</a>
                                        <div class="l3_divinder col-1"></div>                                        
                                    </li>
                                    <li class="inner-link row" data-id="India"><a href="https://staging.technologymindz.com/healthcare-industry-solutions/"  class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Healthcare</a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>
                                    <li class="inner-link row"><a href="https://staging.technologymindz.com/real-estate-industry-solutions/" data-nav-id="subHeader3" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Real estate</a>
                                        <div class="l3_divinder col-1"></div>                                        
                                    </li>
                                    <li class="inner-link row"><a href="https://staging.technologymindz.com/education-industry-solutions/" data-nav-id="subHeader3" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Education</a>
                                        <div class="l3_divinder col-1"></div>                                        
                                    </li>
                                    <li class="inner-link row" data-id="India"><a href="https://staging.technologymindz.com/e-commerce-industry-solutions/"  class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">E-commerce</a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>
                                    <li class="inner-link row" data-id="India"><a href="https://staging.technologymindz.com/professional-services-industry-solutions/"  class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Professional services</a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>									
                                </ul>
                            </div>
                        </div>

                        <div class="sub-header-right-rollover position-absolute d-none"></div>
                    </div>
                </div>
            </div>
            
            <div class="mega_menu pt-32 position-absolute set-menu-onscroll" data-nav="subHeader4" aria-hidden="false">
                <div class="submenu_rollover w-100 position-absolute"></div>
                <div class="container menu_container">
                    <div class="row position-relative position-relative">
                        <div class="col-11 mega_menu_internal_div">
                            <div class="header-inner-left">
                                <ul class="inner-ul position-relative pl-0">
                                    <li class="inner-link row"><a href="https://staging.technologymindz.com/case-study/" data-nav-id="subHeader4" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Case Study
                                            <div class="d-flex align-items-center"><span class="header-right-arrow-icon"></span></div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                        <div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">

                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/how-a-skincare-brand-enhanced-website-security-speed-and-user-experience-with-a-magento-upgrade/" class="section-content">Work order layout for an international registar</a>

                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/customized-calendar-for-an-international-registrar/" class="section-content">Customized calendar for an international registrar</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/optimizing-salesforce-for-improved-efficiency-and-growth/" class="section-content">Optimizing salesforce for improved efficiency and growth</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/transforming-loan-management-with-financial-services-cloud/" class="section-content">Transforming loan management with financial services cloud</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/efficient-loan-origination-with-salesforce/" class="section-content">Efficient loan origination with salesforce</a>
                                                </div>
                                            </div>
                                            <!-- <button class="btn rounded-pill px-4 w-25" style="background:#0c2c64"> -->
                                                <a href="https://staging.technologymindz.com/case-study/" class="menu-custom-btn tt_button tt_primary_button btn_primary_color button-center button-action-link kd-animated zoomIn kd-animate">View More</a>
                                            <!-- </button> -->

                                        </div>
                                    </li>

                                    <li class="inner-link row" data-id="India">
                                        <a href="https://staging.technologymindz.com/blog/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Blog
                                            <div class="d-flex align-items-center">
                                                <span class="header-right-arrow-icon"></span>
                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>

                                        <div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">
                                            <div class="d-flex flex-column pb-32 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/blog/unleash-the-power-of-salesforce-devops-center/" class="section-content text-white">Unleash the true potential of your business by Salesforce optimization</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-32">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/how-salesforce-latest-tools-can-revolutionize-your-sales-process-with-technology-mindz/" class="section-content text-white">How Salesforce’s Latest Tools Can Revolutionize Your Sales Process?</a>

                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-32 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/blog/unlock-the-power-of-salesforce-with-chatgpt-integration/" class="section-content text-white">Unlock the Power of Salesforce with ChatGPT Integration</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-32 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/get-the-most-out-of-your-salesforce-investment/" class="section-content text-white">Get The Most Out Of Your Salesforce Investment</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-32 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/rebrands-to-support-its-strategic-vision/" class="section-content text-white">Technology Mindz Rebrands to Support its Strategic Vision</a>
                                                </div>
                                            </div>

                                            <!-- <button class="btn rounded-pill px-4 w-25" style="background:#0c2c64"> -->
                                                <a href="https://staging.technologymindz.com/blog/" class="menu-custom-btn tt_button tt_primary_button btn_primary_color button-center button-action-link kd-animated zoomIn kd-animate">View More</a>
                                            <!-- </button> -->
                                        </div>

                                    </li>
                                    
                                    <li class="inner-link row" data-id="India">
                                        <a href="https://staging.technologymindz.com/assets/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Assets
                                            <div class="d-flex align-items-center">
                                                <span class="header-right-arrow-icon"></span>
                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>

                                        <div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">
                                            <div class="d-flex flex-column pb-32 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/streamlining-data-entry-automating-record-creation-with-flows/" class="section-content text-white">Data Entry & Validation with Salesforce Flows</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-32">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/improving-account-record-organization-and-user-experience-with-dynamic-form-layouts/" class="section-content text-white">Account Management with Dynamic Forms in Salesforce</a>

                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-32 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/simplifying-recurring-donations-for-a-non-profit-organization/" class="section-content text-white">Recurring Donation Management with Salesforce NPSP</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-32 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/optimizing-salesforce-to-streamline-operations-and-enhance-efficiency/" class="section-content text-white">Automated Order & Inventory Management with Salesforce</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-32 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/portfolio_ss/streamlining-lead-management-and-contract-signing-with-docusign-integration/" class="section-content text-white">Lead & Contract Management with Salesforce & DocuSign</a>
                                                </div>
                                            </div>

                                            <!-- <button class="btn rounded-pill px-4 w-25" style="background:#0c2c64"> -->
                                                <a href="https://staging.technologymindz.com/assets/" class="menu-custom-btn tt_button tt_primary_button btn_primary_color button-center button-action-link kd-animated zoomIn kd-animate">View More</a>
                                            <!-- </button> -->
                                        </div>

                                    </li>

                                    <li class="inner-link row" data-id="Americas">
                                        <a href="https://staging.technologymindz.com/careers/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Careers
                                            <div class="d-flex align-items-center">

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>

                                    </li>
									
									<li class="inner-link row" data-id="Americas">
                                        <a href="https://staging.technologymindz.com/podcast/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Podcast
                                            <div class="d-flex align-items-center">

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>

                                    </li>
									
									<li class="inner-link row" data-id="Nepal">
                                        <a href="https://staging.technologymindz.com/webinars/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Webinars
                                            <div class="d-flex align-items-center">

                                            </div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>

                                    </li>
									
                                </ul>
                            </div>
                        </div>

                        <div class="sub-header-right-rollover position-absolute d-none"></div>
                    </div>
                </div>
            </div>
            
           <div class="mega_menu pt-32 position-absolute set-menu-onscroll" data-nav="subHeader55" aria-hidden="false" style="height:450px !important;">
                <div class="submenu_rollover w-100 position-absolute"></div>
                <div class="container menu_container">
                    <div class="row position-relative position-relative">
                        <div class="col-11 mega_menu_internal_div">
                            <div class="header-inner-left">
                                <ul class="inner-ul position-relative pl-0">
                                    <li class="inner-link row"><a href="https://staging.technologymindz.com/ai-demos/" data-nav-id="subHeader4" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">AI Demos
                                            <div class="d-flex align-items-center"><span class="header-right-arrow-icon"></span></div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                        <div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">

                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/ai-sdr-for-voice-outreach-solution/" class="section-content">AI SDR for Voice Outreach Solution</a>

                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/ai-sdr-for-email-outreach-solution/" class="section-content">AI SDR for Email Outreach Solution</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/automated-invoice-processing/" class="section-content">Automated Invoice Processing</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/ai-chatbot-dynamic/" class="section-content">AI Chatbot</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column"> 
                                                    <a href="https://staging.technologymindz.com/ai-powered-web-scraping-tool/" class="section-content">AI-Powered Web Scraping Tool</a>
                                                </div>
                                            </div>
                                            <!-- <button class="btn rounded-pill px-4 w-25" style="background:#0c2c64"> -->
                                                <a href="https://staging.technologymindz.com/ai-demos/" class="menu-custom-btn tt_button tt_primary_button btn_primary_color button-center button-action-link kd-animated zoomIn kd-animate">View More</a>
                                            <!-- </button> -->

                                        </div>
                                    </li>
                                    
                                    <li class="inner-link row"><a href="https://staging.technologymindz.com/resources/" data-nav-id="subHeader4" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Guided Tour
                                            <div class="d-flex align-items-center"><span class="header-right-arrow-icon"></span></div>
                                        </a>
                                        <div class="l3_divinder col-1"></div>
                                        <div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">

                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/automated-invoice-creation-process.html" class="section-content">Automated invoice creation</a>

                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/excel-data-analysis.html" class="section-content">Excel data analysis/comparison with RPA</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/email-campaign.php" class="section-content">Unleash Email Marketing Magic</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/build-client-relationships.php" class="section-content">Unlock Customer Loyalty</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pb-36 ">
                                                <div class="d-flex flex-column">
                                                    <a href="https://staging.technologymindz.com/company-tour.html" class="section-content">Unlock Your Business Potential</a>
                                                </div>
                                            </div>
                                            <!-- <button class="btn rounded-pill px-4 w-25" style="background:#0c2c64"> -->
                                                <a href="http://staging.technologymindz.com/resources/" class="menu-custom-btn tt_button tt_primary_button btn_primary_color button-center button-action-link kd-animated zoomIn kd-animate">View More</a>
                                            <!-- </button> -->

                                        </div>
                                    </li>								
                                    <li class="inner-link row"><a href="https://staging.technologymindz.com/whitepapers/" data-nav-id="subHeader4" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Whitepapers
                                            <!--<div class="d-flex align-items-center"><span class="header-right-arrow-icon"></span></div>-->
                                        </a>
                                        <!--<div class="l3_divinder col-1"></div>-->
                                        <!--<div class="right-submenu-l3 non-list-div row col-8 position-absolute level3_container flex-column d-flex">-->

                                        <!--    <div class="d-flex flex-column pb-36 ">-->
                                        <!--        <div class="d-flex flex-column">-->
                                        <!--            <a href="https://staging.technologymindz.com/automated-invoice-creation-process.html" class="section-content">Automated invoice creation</a>-->

                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="d-flex flex-column pb-36">-->
                                        <!--        <div class="d-flex flex-column">-->
                                        <!--            <a href="https://staging.technologymindz.com/excel-data-analysis.html" class="section-content">Excel data analysis/comparison with RPA</a>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="d-flex flex-column pb-36 ">-->
                                        <!--        <div class="d-flex flex-column">-->
                                        <!--            <a href="https://staging.technologymindz.com/email-campaign.php" class="section-content">Unleash Email Marketing Magic</a>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="d-flex flex-column pb-36 ">-->
                                        <!--        <div class="d-flex flex-column">-->
                                        <!--            <a href="https://staging.technologymindz.com/build-client-relationships.php" class="section-content">Unlock Customer Loyalty</a>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="d-flex flex-column pb-36 ">-->
                                        <!--        <div class="d-flex flex-column">-->
                                        <!--            <a href="https://staging.technologymindz.com/company-tour.html" class="section-content">Unlock Your Business Potential</a>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                            <!-- <button class="btn rounded-pill px-4 w-25" style="background:#0c2c64"> -->
                                        <!--        <a href="http://staging.technologymindz.com/resources/" class="menu-custom-btn tt_button tt_primary_button btn_primary_color button-center button-action-link kd-animated zoomIn kd-animate">View More</a>-->
                                            <!-- </button> -->

                                        <!--</div>-->
                                    </li>								
                                </ul>
                            </div>
                        </div>
                        <div class="sub-header-right-rollover position-absolute d-none"></div>
                    </div>
                </div>
            </div>

            <div class="mega_menu pt-32 position-absolute set-menu-onscroll" data-nav="subHeader5" aria-hidden="false" >
                <div class="submenu_rollover w-100 position-absolute"></div>
                <div class="container menu_container">
                    <div class="row position-relative position-relative">
                        <div class="col-11 mega_menu_internal_div">
                            <div class="header-inner-left">
                                <ul class="inner-ul position-relative pl-0">
                                    <li class="inner-link row" data-id="subHeader5"><a href="https://staging.technologymindz.com/disaster-management/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Disaster recovery</a>
                                        <div class="l3_divinder col-1"></div>                                        
                                    </li>
                                    <li class="inner-link row" data-id="subHeader5">
                                        <a href="https://staging.technologymindz.com/it-security/" class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">IT security</a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>
                                    <!--<li class="inner-link row" data-id="subHeader5">-->
                                    <!--    <a href="https://staging.technologymindz.com/employee-productivity-tracker/"  class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Employee productivity tracker</a>-->
                                    <!--    <div class="l3_divinder col-1"></div>-->
                                    <!--</li>-->
                                    <li class="inner-link row" data-id="subHeader5">
                                        <a href="https://staging.technologymindz.com/backup-restore/"  class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Backup and restore</a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>
                                    <li class="inner-link row" data-id="subHeader5">
                                        <a href="https://staging.technologymindz.com/fractional-cio/"  class="d-flex justify-content-between align-items-center col-3 l2_link non-overview_link py-3 px-0 position-relative">Fractional CIO</a>
                                        <div class="l3_divinder col-1"></div>
                                    </li>									
                                </ul>
                            </div>
                        </div>
                        <div class="sub-header-right-rollover position-absolute d-none"></div>
                    </div>
                </div>
            </div>


            <div class="mega_menu pt-32 position-absolute set-menu-onscroll" data-nav="subHeader6" aria-hidden="false">
                <div class="submenu_rollover w-100 position-absolute"></div>
                <div class="container menu_container">
                    <div class="row position-relative position-relative">
                        <div class="col-11 mega_menu_internal_div">
                            <div class="header-inner-left">
                                <ul class="inner-ul position-relative pl-0">
                                </ul>

                            </div>
                        </div>

                        <div class="sub-header-right-rollover position-absolute d-none"></div>
                    </div>
                </div>
            </div>

    </header>


    <!---- wrapper ---->
    <div id="wrapper" class="<?php echo esc_attr(trim($wrapper_class)); ?>">
        <?php if (is_home() && ekko_get_option('tek-blog-header-template') == 'blog-header-revslider') {
            if ('' != ekko_get_option('tek-blog-header-slider-alias')) : ?>
                <div id="kd-blog-slider" class="container">
                    <?php echo do_shortcode('[rev_slider alias="' . esc_attr(ekko_get_option('tek-blog-header-slider-alias')) . '"]'); ?>
                </div>
            <?php endif; ?>
        <?php } else {
            get_template_part('core/templates/header/content', 'title-bar');
        }
        ?>