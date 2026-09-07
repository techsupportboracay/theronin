<?php require_once __DIR__ . '/config/env.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11"> 
	<title>The Ronin Siargao</title>
<meta name='robots' content='max-image-preview:large' />
<link rel="icon" href="assets/img/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
<link rel='stylesheet' href='assets/css/custom.css?v=3a91c02' media='all' />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  // Preflight is disabled because it globally resets margins/headings/lists,
  // which would clash with the mirrored Elementor/Astra CSS used everywhere
  // else on this page. Tailwind utility classes still work as normal.
  tailwind.config = { corePlugins: { preflight: false } };
</script>
<style id="wp-img-auto-sizes-contain-inline-css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
<link rel='stylesheet' id='formidable-css' href='wp-content/plugins/formidable/css/formidableforms.css?ver=71215' media='all' />
<link rel='stylesheet' id='astra-theme-css-css' href='wp-content/themes/astra/assets/css/minified/main.min.css?ver=4.13.4' media='all' />
<style id="astra-theme-css-inline-css">
:root{--ast-post-nav-space:0;--ast-container-default-xlg-padding:2.5em;--ast-container-default-lg-padding:2.5em;--ast-container-default-slg-padding:2em;--ast-container-default-md-padding:2.5em;--ast-container-default-sm-padding:2.5em;--ast-container-default-xs-padding:2.4em;--ast-container-default-xxs-padding:1.8em;--ast-code-block-background:#ECEFF3;--ast-comment-inputs-background:#F9FAFB;--ast-normal-container-width:1200px;--ast-narrow-container-width:750px;--ast-blog-title-font-weight:600;--ast-blog-meta-weight:600;--ast-global-color-primary:var(--ast-global-color-4);--ast-global-color-secondary:var(--ast-global-color-5);--ast-global-color-alternate-background:var(--ast-global-color-6);--ast-global-color-subtle-background:var(--ast-global-color-7);--ast-bg-style-guide:var( --ast-global-color-secondary,var(--ast-global-color-5) );--ast-shadow-style-guide:0px 0px 4px 0 #00000057;--ast-global-dark-bg-style:#fff;--ast-global-dark-lfs:#fbfbfb;--ast-widget-bg-color:#fafafa;--ast-wc-container-head-bg-color:#fbfbfb;--ast-title-layout-bg:#eeeeee;--ast-search-border-color:#e7e7e7;--ast-lifter-hover-bg:#e6e6e6;--ast-gallery-block-color:#000;--srfm-color-input-label:var(--ast-global-color-2);}html{font-size:100%;}a{color:var(--ast-global-color-0);}a:hover,a:focus{color:var(--ast-global-color-1);}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;font-weight:400;font-size:16px;font-size:1rem;line-height:var(--ast-body-line-height,1.65);}blockquote{color:var(--ast-global-color-3);}h1,h2,h3,h4,h5,h6,.entry-content :where(h1,h2,h3,h4,h5,h6),.site-title,.site-title a{font-weight:600;}.ast-site-identity .site-title a{color:var(--ast-global-color-2);}.site-title{font-size:26px;font-size:1.625rem;display:block;}.site-header .site-description{font-size:15px;font-size:0.9375rem;display:none;}.entry-title{font-size:20px;font-size:1.25rem;}.ast-blog-single-element.ast-taxonomy-container a{font-size:14px;font-size:0.875rem;}.ast-blog-meta-container{font-size:13px;font-size:0.8125rem;}.archive .ast-article-post .ast-article-inner,.blog .ast-article-post .ast-article-inner,.archive .ast-article-post .ast-article-inner:hover,.blog .ast-article-post .ast-article-inner:hover{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;overflow:hidden;}h1,.entry-content :where(h1){font-size:36px;font-size:2.25rem;font-weight:600;line-height:1.4em;}h2,.entry-content :where(h2){font-size:30px;font-size:1.875rem;font-weight:600;line-height:1.3em;}h3,.entry-content :where(h3){font-size:24px;font-size:1.5rem;font-weight:600;line-height:1.3em;}h4,.entry-content :where(h4){font-size:20px;font-size:1.25rem;line-height:1.2em;font-weight:600;}h5,.entry-content :where(h5){font-size:18px;font-size:1.125rem;line-height:1.2em;font-weight:600;}h6,.entry-content :where(h6){font-size:16px;font-size:1rem;line-height:1.25em;font-weight:600;}::selection{background-color:var(--ast-global-color-0);color:#ffffff;}body,h1,h2,h3,h4,h5,h6,.entry-title a,.entry-content :where(h1,h2,h3,h4,h5,h6){color:var(--ast-global-color-3);}.tagcloud a:hover,.tagcloud a:focus,.tagcloud a.current-item{color:#ffffff;border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus{border-color:var(--ast-global-color-0);}input[type="radio"]:checked,input[type=reset],input[type="checkbox"]:checked,input[type="checkbox"]:hover:checked,input[type="checkbox"]:focus:checked,input[type=range]::-webkit-slider-thumb{border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);box-shadow:none;}.site-footer a:hover + .post-count,.site-footer a:focus + .post-count{background:var(--ast-global-color-0);border-color:var(--ast-global-color-0);}.single .nav-links .nav-previous,.single .nav-links .nav-next{color:var(--ast-global-color-0);}.entry-meta,.entry-meta *{line-height:1.45;color:var(--ast-global-color-0);font-weight:600;}.entry-meta a:not(.ast-button):hover,.entry-meta a:not(.ast-button):hover *,.entry-meta a:not(.ast-button):focus,.entry-meta a:not(.ast-button):focus *,.page-links > .page-link,.page-links .page-link:hover,.post-navigation a:hover{color:var(--ast-global-color-1);}#cat option,.secondary .calendar_wrap thead a,.secondary .calendar_wrap thead a:visited{color:var(--ast-global-color-0);}.secondary .calendar_wrap #today,.ast-progress-val span{background:var(--ast-global-color-0);}.secondary a:hover + .post-count,.secondary a:focus + .post-count{background:var(--ast-global-color-0);border-color:var(--ast-global-color-0);}.calendar_wrap #today > a{color:#ffffff;}.page-links .page-link,.single .post-navigation a{color:var(--ast-global-color-3);}.ast-search-menu-icon .search-form button.search-submit{padding:0 4px;}.ast-search-menu-icon form.search-form{padding-right:0;}.ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-form,.ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-field:focus{transition:all 0.2s;}.search-form input.search-field:focus{outline:none;}.ast-mobile-header-content .ast-builder-layout-element:not(.ast-builder-menu):not(.ast-header-divider-element),.ast-mobile-popup-content .ast-builder-layout-element:not(.ast-builder-menu):not(.ast-header-divider-element){padding:15px 20px;}.ast-search-menu-icon .search-form button.search-submit:focus,.ast-theme-transparent-header .ast-header-search .ast-dropdown-active .ast-icon,.ast-theme-transparent-header .ast-inline-search .search-field:focus .ast-icon{color:var(--ast-global-color-1);}.ast-desktop .ast-header-search .slide-search .search-form{border:2px solid var(--ast-global-color-0);}.ast-header-search .slide-search .search-field{background-color:var(--ast-global-dark-bg-style);}.ast-archive-title{color:var(--ast-global-color-2);}.widget-title{font-size:22px;font-size:1.375rem;color:var(--ast-global-color-2);}.ast-single-post .entry-content a,.ast-comment-content a:not(.ast-comment-edit-reply-wrap a){text-decoration:underline;}.ast-single-post .elementor-widget-button .elementor-button,.ast-single-post .entry-content .uagb-tab a,.ast-single-post .entry-content .uagb-ifb-cta a,.ast-single-post .entry-content .uabb-module-content a,.ast-single-post .entry-content .uagb-post-grid a,.ast-single-post .entry-content .uagb-timeline a,.ast-single-post .entry-content .uagb-toc__wrap a,.ast-single-post .entry-content .uagb-taxomony-box a,.entry-content .wp-block-latest-posts > li > a,.ast-single-post .entry-content .wp-block-file__button,a.ast-post-filter-single,.ast-single-post .ast-comment-content .comment-reply-link,.ast-single-post .ast-comment-content .comment-edit-link{text-decoration:none;}.ast-search-menu-icon.slide-search a:focus-visible:focus-visible,.astra-search-icon:focus-visible,#close:focus-visible,a:focus-visible,.ast-menu-toggle:focus-visible,.site .skip-link:focus-visible,.wp-block-loginout input:focus-visible,.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,.ast-header-navigation-arrow:focus-visible,.ast-orders-table__row .ast-orders-table__cell:focus-visible,a#ast-apply-coupon:focus-visible,#ast-apply-coupon:focus-visible,#close:focus-visible,.button.search-submit:focus-visible,#search_submit:focus,.normal-search:focus-visible,.ast-header-account-wrap:focus-visible,.astra-cart-drawer-close:focus,.ast-single-variation:focus,.ast-button:focus,.ast-builder-button-wrap:has(.ast-custom-button-link:focus),.ast-builder-button-wrap .ast-custom-button-link:focus{outline-style:dotted;outline-color:inherit;outline-width:thin;}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,input[type="number"]:focus,textarea:focus,.wp-block-search__input:focus,[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal:focus,.ast-mobile-popup-drawer.active .menu-toggle-close:focus,#ast-scroll-top:focus,#coupon_code:focus,#ast-coupon-code:focus{border-style:dotted;border-color:inherit;border-width:thin;}input{outline:none;}.ast-logo-title-inline .site-logo-img{padding-right:1em;}body .ast-oembed-container *{position:absolute;top:0;width:100%;height:100%;left:0;}body .wp-block-embed-pocket-casts .ast-oembed-container *{position:unset;}.ast-single-post-featured-section + article {margin-top: 2em;}.site-content .ast-single-post-featured-section img {width: 100%;overflow: hidden;object-fit: cover;}.ast-separate-container .site-content .ast-single-post-featured-section + article {margin-top: -80px;z-index: 9;position: relative;border-radius: 4px;}@media (min-width: 922px) {.ast-no-sidebar .site-content .ast-article-image-container--wide {margin-left: -120px;margin-right: -120px;max-width: unset;width: unset;}.ast-left-sidebar .site-content .ast-article-image-container--wide,.ast-right-sidebar .site-content .ast-article-image-container--wide {margin-left: -10px;margin-right: -10px;}.site-content .ast-article-image-container--full {margin-left: calc( -50vw + 50%);margin-right: calc( -50vw + 50%);max-width: 100vw;width: 100vw;}.ast-left-sidebar .site-content .ast-article-image-container--full,.ast-right-sidebar .site-content .ast-article-image-container--full {margin-left: -10px;margin-right: -10px;max-width: inherit;width: auto;}}.site > .ast-single-related-posts-container {margin-top: 0;}@media (min-width: 922px) {.ast-desktop .ast-container--narrow {max-width: var(--ast-narrow-container-width);margin: 0 auto;}}.ast-page-builder-template .hentry {margin: 0;}.ast-page-builder-template .site-content > .ast-container {max-width: 100%;padding: 0;}.ast-page-builder-template .site .site-content #primary {padding: 0;margin: 0;}.ast-page-builder-template .no-results {text-align: center;margin: 4em auto;}.ast-page-builder-template .ast-pagination {padding: 2em;}.ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {margin-top: 0;}.ast-page-builder-template .entry-header.ast-header-without-markup {margin-top: 0;margin-bottom: 0;}.ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {margin-bottom: 0;}.ast-page-builder-template.single .post-navigation {padding-bottom: 2em;}.ast-page-builder-template.single-post .site-content > .ast-container {max-width: 100%;}.ast-page-builder-template .entry-header {margin-top: 2em;margin-left: auto;margin-right: auto;}.ast-page-builder-template .ast-archive-description {margin: 2em auto 0;padding-left: 20px;padding-right: 20px;}.ast-page-builder-template .ast-row {margin-left: 0;margin-right: 0;}.single.ast-page-builder-template .entry-header + .entry-content,.single.ast-page-builder-template .ast-single-entry-banner + .site-content article .entry-content {margin-bottom: 2em;}@media(min-width: 921px) {.ast-page-builder-template.archive.ast-right-sidebar .ast-row article,.ast-page-builder-template.archive.ast-left-sidebar .ast-row article {padding-left: 0;padding-right: 0;}}input[type="text"],input[type="number"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],input[type=reset],input[type=tel],input[type=date],select,textarea{font-size:16px;font-style:normal;font-weight:400;line-height:24px;width:100%;padding:12px 16px;border-radius:4px;box-shadow:0px 1px 2px 0px rgba(0,0,0,0.05);color:var(--ast-form-input-text,#475569);}input[type="text"],input[type="number"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],input[type=reset],input[type=tel],input[type=date],select{height:40px;}input[type="date"]{border-width:1px;border-style:solid;border-color:var(--ast-border-color);background:var( --ast-global-color-secondary,var(--ast-global-color-5) );}input[type="text"]:focus,input[type="number"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="search"]:focus,input[type=reset]:focus,input[type="tel"]:focus,input[type="date"]:focus,select:focus,textarea:focus{border-color:#046BD2;box-shadow:none;outline:none;color:var(--ast-form-input-focus-text,#475569);}label,legend{color:var(--ast-global-color-2,#111827 );font-size:14px;font-style:normal;font-weight:500;line-height:20px;}select{padding:6px 10px;}fieldset{padding:30px;border-radius:4px;}button,.ast-button,.button,input[type="button"],input[type="reset"],input[type="submit"],a:where(.wp-block-button__link){border-radius:4px;box-shadow:0px 1px 2px 0px rgba(0,0,0,0.05);}:root{--ast-comment-inputs-background:#FFF;}::placeholder{color:var(--ast-form-field-color,#9CA3AF);}::-ms-input-placeholder{color:var(--ast-form-field-color,#9CA3AF);}@media (max-width:921.99px){#ast-desktop-header{display:none;}}@media (min-width:922px){#ast-mobile-header{display:none;}}.wp-block-buttons.aligncenter{justify-content:center;}@media (max-width:921px){.ast-theme-transparent-header #primary,.ast-theme-transparent-header #secondary{padding:0;}}@media (max-width:921px){.ast-plain-container.ast-no-sidebar #primary{padding:0;}}.ast-plain-container.ast-no-sidebar #primary{margin-top:0;margin-bottom:0;}.wp-block-button.is-style-outline .wp-block-button__link{border-color:var(--ast-global-color-0);}div.wp-block-button.is-style-outline > .wp-block-button__link:not(.has-text-color),div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color){color:var(--ast-global-color-0);}.wp-block-button.is-style-outline .wp-block-button__link:hover,.wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link:focus,.wp-block-buttons .wp-block-button.is-style-outline > .wp-block-button__link:not(.has-text-color):hover,.wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}.post-page-numbers.current .page-link,.ast-pagination .page-numbers.current{color:#ffffff;border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);}.wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,.ast-outline-button,.wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button{border-color:var(--ast-global-color-0);border-top-width:2px;border-right-width:2px;border-bottom-width:2px;border-left-width:2px;font-family:inherit;font-weight:500;font-size:16px;font-size:1rem;line-height:1em;padding-top:13px;padding-right:30px;padding-bottom:13px;padding-left:30px;}.wp-block-buttons .wp-block-button.is-style-outline > .wp-block-button__link:not(.has-text-color),.wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color),.ast-outline-button{color:var(--ast-global-color-0);}.wp-block-button.is-style-outline .wp-block-button__link:hover,.wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link:focus,.wp-block-buttons .wp-block-button.is-style-outline > .wp-block-button__link:not(.has-text-color):hover,.wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover,.ast-outline-button:hover,.ast-outline-button:focus,.wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button:hover,.wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button:focus{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}.ast-single-post .entry-content a.ast-outline-button,.ast-single-post .entry-content .is-style-outline>.wp-block-button__link{text-decoration:none;}.wp-block-button .wp-block-button__link.wp-element-button.is-style-outline:not(.has-background),.wp-block-button.is-style-outline>.wp-block-button__link.wp-element-button:not(.has-background),.ast-outline-button{background-color:transparent;}.uagb-buttons-repeater.ast-outline-button{border-radius:9999px;}@media (max-width:921px){.wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,.ast-outline-button,.wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button{padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px;}}@media (max-width:544px){.wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,.ast-outline-button,.wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button{padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px;}}.entry-content[data-ast-blocks-layout] > figure{margin-bottom:1em;}h1.widget-title{font-weight:600;}h2.widget-title{font-weight:600;}h3.widget-title{font-weight:600;}.elementor-widget-container .elementor-loop-container .e-loop-item[data-elementor-type="loop-item"]{width:100%;} .content-area .elementor-widget-theme-post-content h1,.content-area .elementor-widget-theme-post-content h2,.content-area .elementor-widget-theme-post-content h3,.content-area .elementor-widget-theme-post-content h4,.content-area .elementor-widget-theme-post-content h5,.content-area .elementor-widget-theme-post-content h6{margin-top:1.5em;margin-bottom:calc(0.3em + 10px);}#page{display:flex;flex-direction:column;min-height:100vh;}.ast-404-layout-1 h1.page-title{color:var(--ast-global-color-2);}.single .post-navigation a{line-height:1em;height:inherit;}.error-404 .page-sub-title{font-size:1.5rem;font-weight:inherit;}.search .site-content .content-area .search-form{margin-bottom:0;}#page .site-content{flex-grow:1;}.widget{margin-bottom:1.25em;}#secondary li{line-height:1.5em;}#secondary .wp-block-group h2{margin-bottom:0.7em;}#secondary h2{font-size:1.7rem;}.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single,.ast-separate-container .comment-respond{padding:3em;}.ast-separate-container .ast-article-single .ast-article-single{padding:0;}.ast-article-single .wp-block-post-template-is-layout-grid{padding-left:0;}.ast-separate-container .comments-title,.ast-narrow-container .comments-title{padding:1.5em 2em;}.ast-page-builder-template .comment-form-textarea,.ast-comment-formwrap .ast-grid-common-col{padding:0;}.ast-comment-formwrap{padding:0;display:inline-flex;column-gap:20px;width:100%;margin-left:0;margin-right:0;}.comments-area textarea#comment:focus,.comments-area textarea#comment:active,.comments-area .ast-comment-formwrap input[type="text"]:focus,.comments-area .ast-comment-formwrap input[type="text"]:active {box-shadow:none;outline:none;}.archive.ast-page-builder-template .entry-header{margin-top:2em;}.ast-page-builder-template .ast-comment-formwrap{width:100%;}.entry-title{margin-bottom:0.6em;}.ast-archive-description p{font-size:inherit;font-weight:inherit;line-height:inherit;}.ast-separate-container .ast-comment-list li.depth-1,.hentry{margin-bottom:1.5em;}.site-content section.ast-archive-description{margin-bottom:2em;}@media (min-width:921px){.ast-left-sidebar.ast-page-builder-template #secondary,.archive.ast-right-sidebar.ast-page-builder-template .site-main{padding-left:20px;padding-right:20px;}}@media (max-width:544px){.ast-comment-formwrap.ast-row{column-gap:10px;display:inline-block;}#ast-commentform .ast-grid-common-col{position:relative;width:100%;}}@media (min-width:1201px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single,.ast-separate-container .ast-author-box,.ast-separate-container .ast-404-layout-1,.ast-separate-container .no-results{padding:3em;}} .content-area .elementor-widget-theme-post-content h1,.content-area .elementor-widget-theme-post-content h2,.content-area .elementor-widget-theme-post-content h3,.content-area .elementor-widget-theme-post-content h4,.content-area .elementor-widget-theme-post-content h5,.content-area .elementor-widget-theme-post-content h6{margin-top:1.5em;margin-bottom:calc(0.3em + 10px);}.elementor-loop-container .e-loop-item,.elementor-loop-container .ast-separate-container .ast-article-post,.elementor-loop-container .ast-separate-container .ast-article-single,.elementor-loop-container .ast-separate-container .comment-respond{padding:0px;}@media (max-width:921px){.ast-left-sidebar #content > .ast-container{display:flex;flex-direction:column-reverse;width:100%;}}@media (min-width:922px){.ast-separate-container.ast-right-sidebar #primary,.ast-separate-container.ast-left-sidebar #primary{border:0;}.search-no-results.ast-separate-container #primary{margin-bottom:4em;}}.wp-block-button .wp-block-button__link{color:#ffffff;}.wp-block-button .wp-block-button__link:hover,.wp-block-button .wp-block-button__link:focus{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}.elementor-widget-heading h1.elementor-heading-title{line-height:1.4em;}.elementor-widget-heading h2.elementor-heading-title{line-height:1.3em;}.elementor-widget-heading h3.elementor-heading-title{line-height:1.3em;}.elementor-widget-heading h4.elementor-heading-title{line-height:1.2em;}.elementor-widget-heading h5.elementor-heading-title{line-height:1.2em;}.elementor-widget-heading h6.elementor-heading-title{line-height:1.25em;}.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);color:#ffffff;font-family:inherit;font-weight:500;line-height:1em;font-size:16px;font-size:1rem;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;}.ast-single-post .entry-content .wp-block-button .wp-block-button__link,.ast-single-post .entry-content .wp-block-search .wp-block-search__button,body .entry-content .wp-block-file .wp-block-file__button{text-decoration:none;}@media (max-width:921px){.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px;}}@media (max-width:544px){.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px;}}.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],#comments .submit,.search .search-submit,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.search .search-submit{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;color:#ffffff;border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-family:inherit;font-weight:500;font-size:16px;font-size:1rem;line-height:1em;}button:focus,.menu-toggle:hover,button:hover,.ast-button:hover,.ast-custom-button:hover .button:hover,.ast-custom-button:hover ,input[type=reset]:hover,input[type=reset]:focus,input#submit:hover,input#submit:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus,body .wp-block-file .wp-block-file__button:hover,body .wp-block-file .wp-block-file__button:focus{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button.has-icon{padding-top:calc(15px - 3px);padding-right:calc(30px - 3px);padding-bottom:calc(15px - 3px);padding-left:calc(30px - 3px);}@media (max-width:921px){.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],#comments .submit,.search .search-submit,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.search .search-submit{padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px;}}@media (max-width:544px){.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],#comments .submit,.search .search-submit,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.search .search-submit{padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px;}}@media (max-width:921px){.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon{display:inline-block;}.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon{margin:0;}.ast-comment-avatar-wrap img{max-width:2.5em;}.ast-comment-meta{padding:0 1.8888em 1.3333em;}}@media (min-width:544px){.ast-container{max-width:100%;}}@media (max-width:544px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single,.ast-separate-container .comments-title,.ast-separate-container .ast-archive-description{padding:1.5em 1em;}.ast-separate-container #content .ast-container{padding-left:0.54em;padding-right:0.54em;}.ast-separate-container .ast-comment-list .bypostauthor{padding:.5em;}.ast-search-menu-icon.ast-dropdown-active .search-field{width:170px;}} #ast-mobile-header .ast-site-header-cart-li a{pointer-events:none;}.ast-separate-container{background-color:var(--ast-global-color-5);}@media (max-width:921px){.site-title{display:block;}.site-header .site-description{display:none;}h1,.entry-content :where(h1){font-size:30px;font-size:1.875rem;}h2,.entry-content :where(h2){font-size:25px;font-size:1.5625rem;}h3,.entry-content :where(h3){font-size:20px;font-size:1.25rem;}}@media (max-width:544px){.site-title{display:block;}.site-header .site-description{display:none;}h1,.entry-content :where(h1){font-size:30px;font-size:1.875rem;}h2,.entry-content :where(h2){font-size:25px;font-size:1.5625rem;}h3,.entry-content :where(h3){font-size:20px;font-size:1.25rem;}}@media (max-width:921px){html{font-size:91.2%;}}@media (max-width:544px){html{font-size:91.2%;}}@media (min-width:922px){.ast-container{max-width:1240px;}}@media (min-width:922px){.site-content .ast-container{display:flex;}}@media (max-width:921px){.site-content .ast-container{flex-direction:column;}}.entry-content :where(h1,h2,h3,h4,h5,h6){clear:none;}@media (min-width:922px){.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover > .sub-menu,.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus > .sub-menu{margin-left:-0px;}}.entry-content li > p{margin-bottom:0;}.site .comments-area{padding-bottom:2em;margin-top:2em;}.wp-block-file {display: flex;align-items: center;flex-wrap: wrap;justify-content: space-between;}.wp-block-pullquote {border: none;}.wp-block-pullquote blockquote::before {content: "\201D";font-family: "Helvetica",sans-serif;display: flex;transform: rotate( 180deg );font-size: 6rem;font-style: normal;line-height: 1;font-weight: bold;align-items: center;justify-content: center;}.has-text-align-right > blockquote::before {justify-content: flex-start;}.has-text-align-left > blockquote::before {justify-content: flex-end;}figure.wp-block-pullquote.is-style-solid-color blockquote {max-width: 100%;text-align: inherit;}:root {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 3em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 3em;--wp--custom--ast-container-width: 1200px;--wp--custom--ast-content-width-size: 1200px;--wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding));}.ast-narrow-container {--wp--custom--ast-content-width-size: 750px;--wp--custom--ast-wide-width-size: 750px;}@media(max-width: 921px) {:root {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 2em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 2em;}}@media(max-width: 544px) {:root {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 1.5em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 1.5em;}}.entry-content > .wp-block-group,.entry-content > .wp-block-cover,.entry-content > .wp-block-columns {padding-top: var(--wp--custom--ast-default-block-top-padding);padding-right: var(--wp--custom--ast-default-block-right-padding);padding-bottom: var(--wp--custom--ast-default-block-bottom-padding);padding-left: var(--wp--custom--ast-default-block-left-padding);}.ast-plain-container.ast-no-sidebar .entry-content > .alignfull,.ast-page-builder-template .ast-no-sidebar .entry-content > .alignfull {margin-left: calc( -50vw + 50%);margin-right: calc( -50vw + 50%);max-width: 100vw;width: 100vw;}.ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignwide,.ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignwide,.ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignwide {margin-left: auto;margin-right: auto;width: 100%;}[data-ast-blocks-layout] .wp-block-separator:not(.is-style-dots) {height: 0;}[data-ast-blocks-layout] .wp-block-separator {margin: 20px auto;}[data-ast-blocks-layout] .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {max-width: 100px;}[data-ast-blocks-layout] .wp-block-separator.has-background {padding: 0;}.entry-content[data-ast-blocks-layout] > * {max-width: var(--wp--custom--ast-content-width-size);margin-left: auto;margin-right: auto;}.entry-content[data-ast-blocks-layout] > .alignwide {max-width: var(--wp--custom--ast-wide-width-size);}.entry-content[data-ast-blocks-layout] .alignfull {max-width: none;}.entry-content .wp-block-columns {margin-bottom: 0;}blockquote {margin: 1.5em;border-color: rgba(0,0,0,0.05);}.wp-block-quote:not(.has-text-align-right):not(.has-text-align-center) {border-left: 5px solid rgba(0,0,0,0.05);}.has-text-align-right > blockquote,blockquote.has-text-align-right {border-right: 5px solid rgba(0,0,0,0.05);}.has-text-align-left > blockquote,blockquote.has-text-align-left {border-left: 5px solid rgba(0,0,0,0.05);}.wp-block-site-tagline,.wp-block-latest-posts .read-more {margin-top: 15px;}.wp-block-loginout p label {display: block;}.wp-block-loginout p:not(.login-remember):not(.login-submit) input {width: 100%;}.wp-block-loginout input:focus {border-color: transparent;}.wp-block-loginout input:focus {outline: thin dotted;}.entry-content .wp-block-media-text .wp-block-media-text__content {padding: 0 0 0 8%;}.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {padding: 0 8% 0 0;}.entry-content .wp-block-media-text.has-background .wp-block-media-text__content {padding: 8%;}.entry-content .wp-block-cover:not([class*="background-color"]):not(.has-text-color.has-link-color) .wp-block-cover__inner-container,.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text {color: var(--ast-global-color-primary,var(--ast-global-color-5));}.wp-block-loginout .login-remember input {width: 1.1rem;height: 1.1rem;margin: 0 5px 4px 0;vertical-align: middle;}.wp-block-latest-posts > li > *:first-child,.wp-block-latest-posts:not(.is-grid) > li:first-child {margin-top: 0;}.entry-content > .wp-block-buttons,.entry-content > .wp-block-uagb-buttons {margin-bottom: 1.5em;}.wp-block-search__inside-wrapper .wp-block-search__input {padding: 0 10px;color: var(--ast-global-color-3);background: var(--ast-global-color-primary,var(--ast-global-color-5));border-color: var(--ast-border-color);}.wp-block-latest-posts .read-more {margin-bottom: 1.5em;}.wp-block-search__no-button .wp-block-search__inside-wrapper .wp-block-search__input {padding-top: 5px;padding-bottom: 5px;}.wp-block-latest-posts .wp-block-latest-posts__post-date,.wp-block-latest-posts .wp-block-latest-posts__post-author {font-size: 1rem;}.wp-block-latest-posts > li > *,.wp-block-latest-posts:not(.is-grid) > li {margin-top: 12px;margin-bottom: 12px;}.ast-page-builder-template .entry-content[data-ast-blocks-layout] > .alignwide:where(:not(.uagb-is-root-container):not(.spectra-is-root-container)) > * {max-width: var(--wp--custom--ast-wide-width-size);}.ast-page-builder-template .entry-content[data-ast-blocks-layout] > .inherit-container-width > *,.ast-page-builder-template .entry-content[data-ast-blocks-layout] > *:not(.wp-block-group):where(:not(.uagb-is-root-container):not(.spectra-is-root-container)) > *,.entry-content[data-ast-blocks-layout] > .wp-block-cover .wp-block-cover__inner-container {max-width: none ;margin-left: auto;margin-right: auto;}.ast-page-builder-template .entry-content[data-ast-blocks-layout] > *,.ast-page-builder-template .entry-content[data-ast-blocks-layout] > .alignfull:where(:not(.wp-block-group):not(.uagb-is-root-container):not(.spectra-is-root-container)) > * {max-width: none;}.entry-content[data-ast-blocks-layout] .wp-block-cover:not(.alignleft):not(.alignright) {width: auto;}@media(max-width: 1200px) {.ast-separate-container .entry-content > .alignfull,.ast-separate-container .entry-content[data-ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content[data-ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content .alignfull {margin-left: calc(-1 * min(var(--ast-container-default-xlg-padding),20px)) ;margin-right: calc(-1 * min(var(--ast-container-default-xlg-padding),20px));}}@media(min-width: 1201px) {.ast-separate-container .entry-content > .alignfull {margin-left: calc(-1 * var(--ast-container-default-xlg-padding) );margin-right: calc(-1 * var(--ast-container-default-xlg-padding) );}.ast-separate-container .entry-content[data-ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content[data-ast-blocks-layout] > .alignwide {margin-left: auto;margin-right: auto;}}@media(min-width: 921px) {.ast-separate-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width) > :where(:not(.alignleft):not(.alignright)),.ast-plain-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width) > :where(:not(.alignleft):not(.alignright)) {max-width: calc( var(--wp--custom--ast-content-width-size) + 80px );}.ast-plain-container.ast-right-sidebar .entry-content[data-ast-blocks-layout] .alignfull,.ast-plain-container.ast-left-sidebar .entry-content[data-ast-blocks-layout] .alignfull {margin-left: -60px;margin-right: -60px;}}@media(min-width: 544px) {.entry-content > .alignleft {margin-right: 20px;}.entry-content > .alignright {margin-left: 20px;}}@media (max-width:544px){.wp-block-columns .wp-block-column:not(:last-child){margin-bottom:20px;}.wp-block-latest-posts{margin:0;}}@media( max-width: 600px ) {.entry-content .wp-block-media-text .wp-block-media-text__content,.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {padding: 8% 0 0;}.entry-content .wp-block-media-text.has-background .wp-block-media-text__content {padding: 8%;}}.ast-page-builder-template .entry-header {padding-left: 0;}.ast-narrow-container .site-content .wp-block-uagb-image--align-full .wp-block-uagb-image__figure {max-width: 100%;margin-left: auto;margin-right: auto;}.entry-content ul,.entry-content ol {padding: revert;margin: revert;padding-left: 20px;}.entry-content ul.wc-block-product-template{padding: 0;}:root .has-ast-global-color-0-color{color:var(--ast-global-color-0);}:root .has-ast-global-color-0-background-color{background-color:var(--ast-global-color-0);}:root .wp-block-button .has-ast-global-color-0-color{color:var(--ast-global-color-0);}:root .wp-block-button .has-ast-global-color-0-background-color{background-color:var(--ast-global-color-0);}:root .has-ast-global-color-1-color{color:var(--ast-global-color-1);}:root .has-ast-global-color-1-background-color{background-color:var(--ast-global-color-1);}:root .wp-block-button .has-ast-global-color-1-color{color:var(--ast-global-color-1);}:root .wp-block-button .has-ast-global-color-1-background-color{background-color:var(--ast-global-color-1);}:root .has-ast-global-color-2-color{color:var(--ast-global-color-2);}:root .has-ast-global-color-2-background-color{background-color:var(--ast-global-color-2);}:root .wp-block-button .has-ast-global-color-2-color{color:var(--ast-global-color-2);}:root .wp-block-button .has-ast-global-color-2-background-color{background-color:var(--ast-global-color-2);}:root .has-ast-global-color-3-color{color:var(--ast-global-color-3);}:root .has-ast-global-color-3-background-color{background-color:var(--ast-global-color-3);}:root .wp-block-button .has-ast-global-color-3-color{color:var(--ast-global-color-3);}:root .wp-block-button .has-ast-global-color-3-background-color{background-color:var(--ast-global-color-3);}:root .has-ast-global-color-4-color{color:var(--ast-global-color-4);}:root .has-ast-global-color-4-background-color{background-color:var(--ast-global-color-4);}:root .wp-block-button .has-ast-global-color-4-color{color:var(--ast-global-color-4);}:root .wp-block-button .has-ast-global-color-4-background-color{background-color:var(--ast-global-color-4);}:root .has-ast-global-color-5-color{color:var(--ast-global-color-5);}:root .has-ast-global-color-5-background-color{background-color:var(--ast-global-color-5);}:root .wp-block-button .has-ast-global-color-5-color{color:var(--ast-global-color-5);}:root .wp-block-button .has-ast-global-color-5-background-color{background-color:var(--ast-global-color-5);}:root .has-ast-global-color-6-color{color:var(--ast-global-color-6);}:root .has-ast-global-color-6-background-color{background-color:var(--ast-global-color-6);}:root .wp-block-button .has-ast-global-color-6-color{color:var(--ast-global-color-6);}:root .wp-block-button .has-ast-global-color-6-background-color{background-color:var(--ast-global-color-6);}:root .has-ast-global-color-7-color{color:var(--ast-global-color-7);}:root .has-ast-global-color-7-background-color{background-color:var(--ast-global-color-7);}:root .wp-block-button .has-ast-global-color-7-color{color:var(--ast-global-color-7);}:root .wp-block-button .has-ast-global-color-7-background-color{background-color:var(--ast-global-color-7);}:root .has-ast-global-color-8-color{color:var(--ast-global-color-8);}:root .has-ast-global-color-8-background-color{background-color:var(--ast-global-color-8);}:root .wp-block-button .has-ast-global-color-8-color{color:var(--ast-global-color-8);}:root .wp-block-button .has-ast-global-color-8-background-color{background-color:var(--ast-global-color-8);}:root{--ast-global-color-0:#046bd2;--ast-global-color-1:#045cb4;--ast-global-color-2:#1e293b;--ast-global-color-3:#334155;--ast-global-color-4:#FFFFFF;--ast-global-color-5:#F0F5FA;--ast-global-color-6:#111111;--ast-global-color-7:#D1D5DB;--ast-global-color-8:#111111;}:root {--ast-border-color : var(--ast-global-color-7);}.ast-single-entry-banner {-js-display: flex;display: flex;flex-direction: column;justify-content: center;text-align: center;position: relative;background: var(--ast-title-layout-bg);}.ast-single-entry-banner[data-banner-layout="layout-1"] {max-width: 1200px;background: inherit;padding: 20px 0;}.ast-single-entry-banner[data-banner-width-type="custom"] {margin: 0 auto;width: 100%;}.ast-single-entry-banner + .site-content .entry-header {margin-bottom: 0;}.site .ast-author-avatar {--ast-author-avatar-size: ;}a.ast-underline-text {text-decoration: underline;}.ast-container > .ast-terms-link {position: relative;display: block;}a.ast-button.ast-badge-tax {padding: 4px 8px;border-radius: 3px;font-size: inherit;}header.entry-header{text-align:left;}header.entry-header .entry-title{font-weight:600;font-size:32px;font-size:2rem;}header.entry-header > *:not(:last-child){margin-bottom:10px;}header.entry-header .post-thumb-img-content{text-align:center;}header.entry-header .post-thumb img,.ast-single-post-featured-section.post-thumb img{aspect-ratio:16/9;width:100%;height:100%;}@media (max-width:921px){header.entry-header{text-align:left;}}@media (max-width:544px){header.entry-header{text-align:left;}}.ast-archive-entry-banner {-js-display: flex;display: flex;flex-direction: column;justify-content: center;text-align: center;position: relative;background: var(--ast-title-layout-bg);}.ast-archive-entry-banner[data-banner-width-type="custom"] {margin: 0 auto;width: 100%;}.ast-archive-entry-banner[data-banner-layout="layout-1"] {background: inherit;padding: 20px 0;text-align: left;}body.archive .ast-archive-description{max-width:1200px;width:100%;text-align:left;padding-top:3em;padding-right:3em;padding-bottom:3em;padding-left:3em;}body.archive .ast-archive-description .ast-archive-title,body.archive .ast-archive-description .ast-archive-title *{font-weight:600;font-size:32px;font-size:2rem;}body.archive .ast-archive-description > *:not(:last-child){margin-bottom:10px;}@media (max-width:921px){body.archive .ast-archive-description{text-align:left;}}@media (max-width:544px){body.archive .ast-archive-description{text-align:left;}}.ast-breadcrumbs .trail-browse,.ast-breadcrumbs .trail-items,.ast-breadcrumbs .trail-items li{display:inline-block;margin:0;padding:0;border:none;background:inherit;text-indent:0;text-decoration:none;}.ast-breadcrumbs .trail-browse{font-size:inherit;font-style:inherit;font-weight:inherit;color:inherit;}.ast-breadcrumbs .trail-items{list-style:none;}.trail-items li::after{padding:0 0.3em;content:"\00bb";}.trail-items li:last-of-type::after{display:none;}h1,h2,h3,h4,h5,h6,.entry-content :where(h1,h2,h3,h4,h5,h6){color:var(--ast-global-color-2);}.entry-title a{color:var(--ast-global-color-2);}@media (max-width:921px){.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row > *:first-child,.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row > *:last-child{grid-column:1 / -1;}}@media (max-width:544px){.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row > *:first-child,.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row > *:last-child{grid-column:1 / -1;}}.ast-builder-layout-element[data-section="title_tagline"]{display:flex;}@media (max-width:921.99px){.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"]{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"]{display:flex;}}.ast-builder-menu-1{font-family:inherit;font-weight:inherit;}.ast-builder-menu-1 .menu-item > .menu-link{color:var(--ast-global-color-3);}.ast-builder-menu-1 .menu-item > .ast-menu-toggle{color:var(--ast-global-color-3);}.ast-builder-menu-1 .menu-link:hover,.ast-builder-menu-1 .main-header-menu > .menu-item:hover > .menu-link,.ast-builder-menu-1 .inline-on-mobile .ast-menu-toggle:hover,.ast-builder-menu-1 .inline-on-mobile .main-header-menu > .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-1 .ast-menu-toggle:hover,.ast-builder-menu-1 .main-header-menu > .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-1 .menu-item.current-menu-item > .menu-link,.ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item > .ast-menu-toggle,.ast-builder-menu-1 .current-menu-ancestor > .menu-link{color:var(--ast-global-color-1);}.ast-builder-menu-1 .menu-item.current-menu-item > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-1 .sub-menu,.ast-builder-menu-1 .inline-on-mobile .sub-menu{border-top-width:2px;border-bottom-width:0px;border-right-width:0px;border-left-width:0px;border-color:var(--ast-global-color-0);border-style:solid;}.ast-builder-menu-1 .sub-menu .sub-menu{top:-2px;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0px;}.ast-desktop .ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu:before,.ast-desktop .ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper:before{height:calc( 0px + 2px + 5px );}.ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link{border-style:none;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-1 .inline-on-mobile .menu-item.menu-item-has-children > .ast-menu-toggle{right:-15px;}.ast-builder-menu-1 .menu-item-has-children > .menu-link:after{content:unset;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}}.ast-builder-menu-1{display:flex;}@media (max-width:921.99px){.ast-header-break-point .ast-builder-menu-1{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-1{display:flex;}}.site-below-footer-wrap{padding-top:20px;padding-bottom:20px;}.site-below-footer-wrap[data-section="section-below-footer-builder"]{background-color:var(--ast-global-color-4 );min-height:60px;border-style:solid;border-width:0px;border-top-width:1px;border-top-color:var( --ast-global-color-subtle-background,var(--ast-global-color-7) );}.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row{max-width:1200px;min-height:60px;margin-left:auto;margin-right:auto;}.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,.site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section{align-items:center;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section{display:flex;margin-bottom:0;}.ast-builder-grid-row-full .ast-builder-grid-row{grid-template-columns:1fr;}@media (max-width:921px){.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section{display:flex;margin-bottom:0;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row{grid-template-columns:1fr;}}@media (max-width:544px){.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section{display:flex;margin-bottom:0;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row{grid-template-columns:1fr;}}.site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}@media (max-width:921.99px){.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}}@media (max-width:544px){.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}}.ast-footer-copyright{text-align:center;}.ast-footer-copyright.site-footer-focus-item {color:var(--ast-global-color-3);}@media (max-width:921px){.ast-footer-copyright{text-align:center;}}@media (max-width:544px){.ast-footer-copyright{text-align:center;}}.ast-footer-copyright.site-footer-focus-item {font-size:16px;font-size:1rem;}.ast-footer-copyright.ast-builder-layout-element{display:flex;}@media (max-width:921.99px){.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element{display:flex;}}.footer-widget-area.widget-area.site-footer-focus-item{width:auto;}.ast-footer-row-inline .footer-widget-area.widget-area.site-footer-focus-item{width:100%;}.elementor-widget-heading .elementor-heading-title{margin:0;}.elementor-page .ast-menu-toggle{color:unset;background:unset;}.elementor-post.elementor-grid-item.hentry{margin-bottom:0;}.woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,.elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product{width:auto;margin:0;float:none;}.elementor-toc__list-wrapper{margin:0;}body .elementor hr{background-color:#ccc;margin:0;}.ast-left-sidebar .elementor-section.elementor-section-stretched,.ast-right-sidebar .elementor-section.elementor-section-stretched{max-width:100%;left:0 !important;}.elementor-posts-container [CLASS*="ast-width-"]{width:100%;}.elementor-template-full-width .ast-container{display:block;}.elementor-screen-only,.screen-reader-text,.screen-reader-text span,.ui-helper-hidden-accessible{top:0 !important;}@media (max-width:544px){.elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product{width:auto;margin:0;}.elementor-element .woocommerce .woocommerce-result-count{float:none;}}.ast-header-break-point .main-header-bar{border-bottom-width:1px;}@media (min-width:922px){.main-header-bar{border-bottom-width:1px;}}.main-header-menu .menu-item, #astra-footer-menu .menu-item, .main-header-bar .ast-masthead-custom-menu-items{-js-display:flex;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-moz-box-orient:vertical;-moz-box-direction:normal;-ms-flex-direction:column;flex-direction:column;}.main-header-menu > .menu-item > .menu-link, #astra-footer-menu > .menu-item > .menu-link{height:100%;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;-js-display:flex;display:flex;}.ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg{top:.2em;margin-top:0px;margin-left:0px;width:.65em;transform:translate(0, -2px) rotateZ(270deg);}.ast-mobile-popup-content .ast-submenu-expanded > .ast-menu-toggle{transform:rotateX(180deg);overflow-y:auto;}@media (min-width:922px){.ast-builder-menu .main-navigation > ul > li:last-child a{margin-right:0;}}.ast-separate-container .ast-article-inner{background-color:var(--ast-global-color-4);}@media (max-width:921px){.ast-separate-container .ast-article-inner{background-color:var(--ast-global-color-4);}}@media (max-width:544px){.ast-separate-container .ast-article-inner{background-color:var(--ast-global-color-4);}}.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .site-main .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content, .ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .ast-archive-description, .ast-separate-container .comments-area{background-color:var(--ast-global-color-4);}@media (max-width:921px){.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .site-main .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content, .ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .ast-archive-description{background-color:var(--ast-global-color-4);}}@media (max-width:544px){.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .site-main .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content, .ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .ast-archive-description{background-color:var(--ast-global-color-4);}}.ast-separate-container.ast-two-container #secondary .widget{background-color:var(--ast-global-color-4);}@media (max-width:921px){.ast-separate-container.ast-two-container #secondary .widget{background-color:var(--ast-global-color-4);}}@media (max-width:544px){.ast-separate-container.ast-two-container #secondary .widget{background-color:var(--ast-global-color-4);}}.ast-plain-container, .ast-page-builder-template{background-color:var(--ast-global-color-4);}@media (max-width:921px){.ast-plain-container, .ast-page-builder-template{background-color:var(--ast-global-color-4);}}@media (max-width:544px){.ast-plain-container, .ast-page-builder-template{background-color:var(--ast-global-color-4);}}
		#ast-scroll-top {
			display: none;
			position: fixed;
			text-align: center;
			cursor: pointer;
			z-index: 99;
			width: 2.1em;
			height: 2.1em;
			line-height: 2.1;
			color: #ffffff;
			border-radius: 2px;
			content: "";
			outline: inherit;
		}
		@media (min-width: 769px) {
			#ast-scroll-top {
				content: "769";
			}
		}
		#ast-scroll-top .ast-icon.icon-arrow svg {
			margin-left: 0px;
			vertical-align: middle;
			transform: translate(0, -20%) rotate(180deg);
			width: 1.6em;
		}
		.ast-scroll-to-top-right {
			right: 30px;
			bottom: 30px;
		}
		.ast-scroll-to-top-left {
			left: 30px;
			bottom: 30px;
		}
	#ast-scroll-top{background-color:var(--ast-global-color-0);font-size:15px;}@media (max-width:921px){#ast-scroll-top .ast-icon.icon-arrow svg{width:1em;}}.ast-mobile-header-content > *,.ast-desktop-header-content > * {padding: 10px 0;height: auto;}.ast-mobile-header-content > *:first-child,.ast-desktop-header-content > *:first-child {padding-top: 10px;}.ast-mobile-header-content > .ast-builder-menu,.ast-desktop-header-content > .ast-builder-menu {padding-top: 0;}.ast-mobile-header-content > *:last-child,.ast-desktop-header-content > *:last-child {padding-bottom: 0;}.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {width: 100%;}.ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded > .ast-menu-toggle::before {transform: rotateX(180deg);}#ast-desktop-header .ast-desktop-header-content,.ast-mobile-header-content .ast-search-icon,.ast-desktop-header-content .ast-search-icon,.ast-mobile-header-wrap .ast-mobile-header-content,.ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,.ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {display: none;}.ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,.ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {display: block;}.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up > .menu-item .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down > .menu-item .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade > .menu-item .menu-item > .sub-menu {opacity: 1;visibility: visible;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {width: unset;margin: unset;}.ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle,.ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle {left: calc( 20px - 0.907em);right: auto;}.ast-mobile-header-content .ast-search-menu-icon,.ast-mobile-header-content .ast-search-menu-icon.slide-search,.ast-desktop-header-content .ast-search-menu-icon,.ast-desktop-header-content .ast-search-menu-icon.slide-search {width: 100%;position: relative;display: block;right: auto;transform: none;}.ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,.ast-mobile-header-content .ast-search-menu-icon .search-form,.ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,.ast-desktop-header-content .ast-search-menu-icon .search-form {right: 0;visibility: visible;opacity: 1;position: relative;top: auto;transform: none;padding: 0;display: block;overflow: hidden;}.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,.ast-mobile-header-content .ast-search-menu-icon .search-field,.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,.ast-desktop-header-content .ast-search-menu-icon .search-field {width: 100%;padding-right: 5.5em;}.ast-mobile-header-content .ast-search-menu-icon .search-submit,.ast-desktop-header-content .ast-search-menu-icon .search-submit {display: block;position: absolute;height: 100%;top: 0;right: 0;padding: 0 1em;border-radius: 0;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {padding-left: 30px;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {padding-left: 40px;}.ast-mobile-popup-drawer.active .ast-mobile-popup-inner{background-color:#ffffff;;}.ast-mobile-header-wrap .ast-mobile-header-content, .ast-desktop-header-content{background-color:#ffffff;;}.ast-mobile-popup-content > *, .ast-mobile-header-content > *, .ast-desktop-popup-content > *, .ast-desktop-header-content > *{padding-top:0px;padding-bottom:0px;}.content-align-flex-start .ast-builder-layout-element{justify-content:flex-start;}.content-align-flex-start .main-header-menu{text-align:left;}.ast-desktop-header-content, .ast-mobile-header-content{position:absolute;width:100%;}.ast-mobile-popup-drawer.active .menu-toggle-close{color:#3a3a3a;}.ast-mobile-header-wrap .ast-primary-header-bar,.ast-primary-header-bar .site-primary-header-wrap{min-height:80px;}.ast-desktop:not(:has(.ast-header-sticked)) .ast-primary-header-bar .main-header-menu > .menu-item{line-height:80px;}.ast-header-break-point #masthead .ast-mobile-header-wrap .ast-primary-header-bar,.ast-header-break-point #masthead .ast-mobile-header-wrap .ast-below-header-bar,.ast-header-break-point #masthead .ast-mobile-header-wrap .ast-above-header-bar{padding-left:20px;padding-right:20px;}.ast-header-break-point .ast-primary-header-bar{border-bottom-width:1px;border-bottom-color:var( --ast-global-color-subtle-background,var(--ast-global-color-7) );border-bottom-style:solid;}@media (min-width:922px){.ast-primary-header-bar{border-bottom-width:1px;border-bottom-color:var( --ast-global-color-subtle-background,var(--ast-global-color-7) );border-bottom-style:solid;}}.ast-primary-header-bar{background-color:var( --ast-global-color-primary,var(--ast-global-color-4) );}.ast-primary-header-bar{display:block;}@media (max-width:921.99px){.ast-header-break-point .ast-primary-header-bar{display:grid;}}@media (max-width:544px){.ast-header-break-point .ast-primary-header-bar{display:grid;}}[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal{color:var(--ast-global-color-0);border:none;background:transparent;}[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg{width:20px;height:20px;fill:var(--ast-global-color-0);}[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu{color:var(--ast-global-color-0);}.ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item > .menu-link{color:var(--ast-global-color-3);}.ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item > .ast-menu-toggle{color:var(--ast-global-color-3);}.ast-builder-menu-mobile .main-navigation .menu-link:hover, .ast-builder-menu-mobile .main-navigation .main-header-menu > .menu-item:hover > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .ast-menu-toggle:hover, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .main-header-menu > .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .menu-link:hover, .ast-builder-menu-mobile .main-header-menu > .menu-item:hover > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .ast-menu-toggle:hover, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .main-header-menu > .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .ast-menu-toggle:hover, .ast-builder-menu-mobile .main-navigation .main-header-menu > .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item > .ast-menu-toggle, .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor > .menu-link, .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-mobile .main-navigation .menu-item-has-children > .menu-link:after{content:unset;}.ast-hfb-header .ast-builder-menu-mobile .main-header-menu, .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link, .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link{border-style:none;}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}@media (max-width:921px){.ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item > .menu-link{color:var(--ast-global-color-3);}.ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item > .ast-menu-toggle{color:var(--ast-global-color-3);}.ast-builder-menu-mobile .main-navigation .menu-link:hover, .ast-builder-menu-mobile .main-navigation .main-header-menu > .menu-item:hover > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .ast-menu-toggle:hover, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .main-header-menu > .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);background:var(--ast-global-color-5);}.ast-builder-menu-mobile .main-navigation .ast-menu-toggle:hover, .ast-builder-menu-mobile .main-navigation .main-header-menu > .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item > .ast-menu-toggle, .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor > .menu-link, .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor > .ast-menu-toggle{color:var(--ast-global-color-1);background:var(--ast-global-color-5);}.ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-mobile .main-navigation .menu-item-has-children > .menu-link:after{content:unset;}.ast-builder-menu-mobile .main-navigation .main-header-menu , .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-link, .ast-builder-menu-mobile .main-navigation .main-header-menu .sub-menu{background-color:var(--ast-global-color-4);}}@media (max-width:544px){.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}}.ast-builder-menu-mobile .main-navigation{display:block;}@media (max-width:921.99px){.ast-header-break-point .ast-builder-menu-mobile .main-navigation{display:block;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-mobile .main-navigation{display:block;}}:root{--e-global-color-astglobalcolor0:#046bd2;--e-global-color-astglobalcolor1:#045cb4;--e-global-color-astglobalcolor2:#1e293b;--e-global-color-astglobalcolor3:#334155;--e-global-color-astglobalcolor4:#FFFFFF;--e-global-color-astglobalcolor5:#F0F5FA;--e-global-color-astglobalcolor6:#111111;--e-global-color-astglobalcolor7:#D1D5DB;--e-global-color-astglobalcolor8:#111111;}
/*# sourceURL=astra-theme-css-inline-css */
</style>
<link rel='stylesheet' id='hfe-widgets-style-css' href='wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=2.8.8' media='all' />
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
/*# sourceURL=wp-emoji-styles-inline-css */
</style>
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--ast-global-color-0: var(--ast-global-color-0);--wp--preset--color--ast-global-color-1: var(--ast-global-color-1);--wp--preset--color--ast-global-color-2: var(--ast-global-color-2);--wp--preset--color--ast-global-color-3: var(--ast-global-color-3);--wp--preset--color--ast-global-color-4: var(--ast-global-color-4);--wp--preset--color--ast-global-color-5: var(--ast-global-color-5);--wp--preset--color--ast-global-color-6: var(--ast-global-color-6);--wp--preset--color--ast-global-color-7: var(--ast-global-color-7);--wp--preset--color--ast-global-color-8: var(--ast-global-color-8);--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}.wp-block-button{--wp--preset--dimension--25: 25%;--wp--preset--dimension--50: 50%;--wp--preset--dimension--75: 75%;--wp--preset--dimension--100: 100%;}:root { --wp--style--global--content-size: var(--wp--custom--ast-content-width-size);--wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size); }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 24px; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 24px; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 24px;}:root :where(.is-layout-grid){gap: 24px;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}a:where(:not(.wp-element-button)){text-decoration: none;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;font-style: inherit;font-weight: inherit;letter-spacing: inherit;line-height: inherit;padding-top: calc(0.667em + 2px);padding-right: calc(1.333em + 2px);padding-bottom: calc(0.667em + 2px);padding-left: calc(1.333em + 2px);text-decoration: none;text-transform: inherit;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-color{color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-color{color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-color{color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-color{color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-color{color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-color{color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-color{color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-color{color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-color{color: var(--wp--preset--color--ast-global-color-8) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-background-color{background-color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-background-color{background-color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-background-color{background-color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-background-color{background-color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-background-color{background-color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-background-color{background-color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-background-color{background-color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-background-color{background-color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-background-color{background-color: var(--wp--preset--color--ast-global-color-8) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-border-color{border-color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-border-color{border-color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-border-color{border-color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-border-color{border-color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-border-color{border-color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-border-color{border-color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-border-color{border-color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-border-color{border-color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-border-color{border-color: var(--wp--preset--color--ast-global-color-8) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:root :where(.wp-block-icon svg){width: 24px;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
/*# sourceURL=global-styles-inline-css */
</style>
<link rel='stylesheet' id='hfe-style-css' href='wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=2.8.8' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min.css?ver=4.1.3' media='all' />
<style id="elementor-frontend-inline-css">
.e-heading-base a, .e-paragraph-base a { all: unset; cursor: pointer; }form[data-element_type="e-form"].form-state-success [data-element_type="e-form-success-message"],form[data-element_type="e-form"].form-state-error [data-element_type="e-form-error-message"]{ display: block; }
.e-form-textarea-base:not([data-resizable]) { resize: none; } .e-form-submit-button-base { cursor: pointer; box-sizing: border-box; }
/*# sourceURL=elementor-frontend-inline-css */
</style>
<link rel='stylesheet' id='elementor-post-16-css' href='wp-content/uploads/elementor/css/post-16.css?ver=1787191315' media='all' />
<link rel='stylesheet' id='widget-heading-css' href='wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.1.3' media='all' />
<link rel='stylesheet' id='widget-divider-css' href='wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=4.1.3' media='all' />
<link rel='stylesheet' id='widget-image-css' href='wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.1.3' media='all' />
<link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=4.1.3' media='all' />
<link rel='stylesheet' id='widget-media-carousel-css' href='wp-content/plugins/elementor-pro/assets/css/widget-media-carousel.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='widget-carousel-module-base-css' href='wp-content/plugins/elementor-pro/assets/css/widget-carousel-module-base.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='widget-spacer-css' href='wp-content/plugins/elementor/assets/css/widget-spacer.min.css?ver=4.1.3' media='all' />
<link rel='stylesheet' id='widget-gallery-css' href='wp-content/plugins/elementor-pro/assets/css/widget-gallery.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='elementor-gallery-css' href='wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0' media='all' />
<link rel='stylesheet' id='e-transitions-css' href='wp-content/plugins/elementor-pro/assets/css/conditionals/transitions.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='widget-icon-box-css' href='wp-content/plugins/elementor/assets/css/widget-icon-box.min.css?ver=4.1.3' media='all' />
<link rel='stylesheet' id='widget-google_maps-css' href='wp-content/plugins/elementor/assets/css/widget-google_maps.min.css?ver=4.1.3' media='all' />
<link rel='stylesheet' id='widget-accordion-css' href='wp-content/plugins/elementor/assets/css/widget-accordion.min.css?ver=4.1.3' media='all' />
<link rel='stylesheet' id='elementor-post-2-css' href='wp-content/uploads/elementor/css/post-2.css?ver=1787191316' media='all' />
<link rel='stylesheet' id='base-desktop-css' href='wp-content/uploads/elementor/css/base-desktop.css?ver=6a8660142bcd0' media='all' />
<link rel='stylesheet' id='elementor-post-42-css' href='wp-content/uploads/elementor/css/post-42.css?ver=1787191316' media='all' />
<link rel='stylesheet' id='elementor-post-86-css' href='wp-content/uploads/elementor/css/post-86.css?ver=1787191316' media='all' />
<link rel='stylesheet' id='chld_thm_cfg_child-css' href='wp-content/themes/astra-child/style.css?ver=4.13.4.1781763590' media='all' />
<link rel='stylesheet' id='hfe-elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.34.0' media='all' />
<link rel='stylesheet' id='hfe-icons-list-css' href='wp-content/plugins/elementor/assets/css/widget-icon-list.min.css?ver=3.24.3' media='all' />
<link rel='stylesheet' id='hfe-social-icons-css' href='wp-content/plugins/elementor/assets/css/widget-social-icons.min.css?ver=3.24.0' media='all' />
<link rel='stylesheet' id='hfe-social-share-icons-brands-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='hfe-social-share-icons-fontawesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='hfe-nav-menu-icons-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='hfe-widget-blockquote-css' href='wp-content/plugins/elementor-pro/assets/css/widget-blockquote.min.css?ver=3.25.0' media='all' />
<link rel='stylesheet' id='hfe-mega-menu-css' href='wp-content/plugins/elementor-pro/assets/css/widget-mega-menu.min.css?ver=3.26.2' media='all' />
<link rel='stylesheet' id='hfe-nav-menu-widget-css' href='wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css?ver=3.26.0' media='all' />
<link rel='stylesheet' id='elementor-gf-roboto-css' href='https://fonts.googleapis.com/css?family=Roboto:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;display=swap' media='all' />
<link rel='stylesheet' id='elementor-gf-robotoslab-css' href='https://fonts.googleapis.com/css?family=Roboto+Slab:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;display=swap' media='all' />
<link rel='stylesheet' id='elementor-gf-redhatdisplay-css' href='https://fonts.googleapis.com/css?family=Red+Hat+Display:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;display=swap' media='all' />
<link rel='stylesheet' id='elementor-gf-nanummyeongjo-css' href='https://fonts.googleapis.com/css?family=Nanum+Myeongjo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;display=swap' media='all' />
<link rel='stylesheet' id='elementor-gf-ibmplexsanshebrew-css' href='https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Hebrew:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;display=swap' media='all' />
<script id="jquery-core-js" src="wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script id="jquery-migrate-js" src="wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<script id="jquery-js-after">
!function($){"use strict";$(document).ready(function(){$(this).scrollTop()>100&&$(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"),$(window).scroll(function(){$(this).scrollTop()<100?$(".hfe-scroll-to-top-wrap").fadeOut(300):$(".hfe-scroll-to-top-wrap").fadeIn(300)}),$(".hfe-scroll-to-top-wrap").on("click",function(){$("html, body").animate({scrollTop:0},300);return!1})})}(jQuery);
!function($){'use strict';$(document).ready(function(){var bar=$('.hfe-reading-progress-bar');if(!bar.length)return;$(window).on('scroll',function(){var s=$(window).scrollTop(),d=$(document).height()-$(window).height(),p=d? s/d*100:0;bar.css('width',p+'%')});});}(jQuery);
//# sourceURL=jquery-js-after
</script>
<link rel="canonical" href="https://theroninsiargao.com/" />
			<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
			</head>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="home wp-singular page-template-default page page-id-2 wp-embed-responsive wp-theme-astra wp-child-theme-astra-child ehf-header ehf-footer ehf-template-astra ehf-stylesheet-astra-child ast-desktop ast-page-builder-template ast-no-sidebar astra-4.13.4 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header elementor-default elementor-kit-16 elementor-page elementor-page-2">
			<script>
			(function(){if(window.matchMedia('(max-width:921.99px)').matches){document.body.classList.add('ast-header-break-point');document.body.classList.remove('ast-desktop');}})();
			</script>
			
<a
	class="skip-link screen-reader-text"
	href="#content">
		Skip to content</a>

<div
class="hfeed site" id="page">
		<header class="site-header" id="masthead">
			<div class="site-header__row">
				<a href="https://theroninsiargao.com" class="site-header__logo">
					<img fetchpriority="high" width="1957" height="557" src="wp-content/uploads/2026/06/Logo-Updated.png" srcset="wp-content/uploads/2026/06/Logo-Updated.png 1957w, wp-content/uploads/2026/06/Logo-Updated-300x85.png 300w, wp-content/uploads/2026/06/Logo-Updated-1024x291.png 1024w, wp-content/uploads/2026/06/Logo-Updated-768x219.png 768w, wp-content/uploads/2026/06/Logo-Updated-1536x437.png 1536w" sizes="(max-width: 1957px) 100vw, 1957px" alt="The Ronin Siargao">
				</a>
				<nav class="site-nav" aria-label="Primary">
					<a href="#about" class="site-nav__link">About</a>
					<a href="#rooms" class="site-nav__link">Room</a>
					<a href="#amenities" class="site-nav__link">Amenities</a>
					<a href="#gallery" class="site-nav__link">Gallery</a>
					<a href="#faqs" class="site-nav__link">FAQ&#8217;S</a>
				</nav>
				<div class="site-header__actions">
					<button type="button" class="js-book-now site-header__cta">Book now</button>
					<button type="button" class="nav-toggle" aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu">
						<span class="nav-toggle__bars"></span>
					</button>
				</div>
			</div>
			<nav id="mobile-nav" class="mobile-nav" aria-label="Mobile" hidden>
				<a href="#about" class="mobile-nav__link">About</a>
				<a href="#rooms" class="mobile-nav__link">Room</a>
				<a href="#amenities" class="mobile-nav__link">Amenities</a>
				<a href="#gallery" class="mobile-nav__link">Gallery</a>
				<a href="#faqs" class="mobile-nav__link">FAQ&#8217;S</a>
			</nav>
		</header>

		<div id="content" class="site-content">
		<div class="ast-container">


	<div id="primary" class="content-area primary">


					<main id="main" class="site-main">
				<article
class="post-2 page type-page status-publish ast-article-single" id="post-2" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">

				<header class="entry-header ast-no-thumbnail ast-no-title ast-header-without-markup">
							</header> <!-- .entry-header -->

<div class="entry-content clear"
	itemprop="text">


			<div data-elementor-type="wp-page" data-elementor-id="2" class="elementor elementor-2" data-elementor-post-type="page">
		<section id="hero">
			<div class="hero__inner">
				<p class="hero__eyebrow">General Luna &middot; Siargao Island, Philippines</p>
				<h1 class="hero__title">
					<span class="hero__title-line hero__title-line--bold">The Ronin</span>
					<span class="hero__title-line hero__title-line--light">Siargao</span>
				</h1>
				<p class="hero__tagline">Your place to pause between island adventures.</p>
			</div>
		</section>
				<section id="about" class="site-section">
					<div class="site-section__row about__row">
						<div class="about__content">
							<p class="section-label">01 / About</p>
							<h2 class="section-heading">Stay Close to Everything, Away from the Noise.</h2>
							<span class="section-divider"></span>
							<div class="about__copy">
								<p>The Ronin Siargao offers a peaceful place to stay while keeping you close to the island&rsquo;s most popular attractions. Located in Catangnan, General Luna, the property provides easy access to Cloud 9, surf spots, restaurants, caf&eacute;s, and local lifestyle destinations.</p>
								<p>After a day of exploring, guests can return to a calm and comfortable space designed for rest, simplicity, and easy island living. It is the ideal base for travelers who want convenience without giving up peace and privacy.</p>
							</div>
						</div>
						<div class="about__media">
							<img decoding="async" loading="lazy" width="1024" height="768" src="wp-content/uploads/2026/06/Property-Photo.webp" srcset="wp-content/uploads/2026/06/Property-Photo.webp 1024w, wp-content/uploads/2026/06/Property-Photo-300x225.webp 300w, wp-content/uploads/2026/06/Property-Photo-768x576.webp 768w" sizes="(max-width: 1024px) 100vw, 1024px" alt="The Ronin Siargao property exterior">
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-a3cee83 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a3cee83" data-element_type="section" data-e-type="section" id="rooms" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-643d296b" data-id="643d296b" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-7dbaf6f e-flex e-con-boxed e-con e-parent" data-id="7dbaf6f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-3ae8c51 elementor-widget elementor-widget-text-editor" data-id="3ae8c51" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>02 / The Room</p>								</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-15cb227e elementor-widget elementor-widget-heading" data-id="15cb227e" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default">Double Room</h2>				</div>
				<div class="elementor-element elementor-element-2884d150 elementor-widget elementor-widget-html" data-id="2884d150" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<p style="font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:#8a7760;font-family:'DM Sans',sans-serif;font-weight:400;margin-bottom:16px;">Up to 2 Guests</p>				</div>
				<div class="elementor-element elementor-element-7743415d elementor-widget elementor-widget-text-editor" data-id="7743415d" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>The Ronin Siargao is more than a place to stay. It is a base for living, working, and exploring the island your way.</p><p>Designed for digital nomads, independent travelers, surfers, and long-stay guests, our rooms combine comfort, convenience, and flexibility. Our location puts you within easy reach of Siargao’s dining, surfing, and social destinations, making it simple to balance focused work with relaxed island living.</p><p>Inspired by the freedom and self-direction of the ronin, The Ronin is for travelers who choose their own path and move at their own pace.</p>								</div>
		<div class="elementor-element elementor-element-61ed787 e-flex e-con-boxed e-con e-parent" data-id="61ed787" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-8da483d elementor-widget elementor-widget-text-editor" data-id="8da483d" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Room Amenities </p>								</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-6d2f569 e-flex e-con-boxed e-con e-parent" data-id="6d2f569" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-53171d6 e-con-full e-flex e-con e-child" data-id="53171d6" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-751f6ed elementor-widget elementor-widget-text-editor" data-id="751f6ed" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Air conditioning</p>								</div>
				<div class="elementor-element elementor-element-e6f868d elementor-widget elementor-widget-text-editor" data-id="e6f868d" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Private bathroom</p>								</div>
				<div class="elementor-element elementor-element-5669e19 elementor-widget elementor-widget-text-editor" data-id="5669e19" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Flat-screen TV</p>								</div>
				<div class="elementor-element elementor-element-d095c34 elementor-widget elementor-widget-text-editor" data-id="d095c34" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Fresh towels provided</p>								</div>
				</div>
		<div class="elementor-element elementor-element-b1412b7 e-con-full e-flex e-con e-child" data-id="b1412b7" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-4fd080f elementor-widget elementor-widget-text-editor" data-id="4fd080f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Cozy seating area</p>								</div>
				<div class="elementor-element elementor-element-ffb7938 elementor-widget elementor-widget-text-editor" data-id="ffb7938" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Free Wi-Fi </p>								</div>
				<div class="elementor-element elementor-element-2f5eb21 elementor-widget elementor-widget-text-editor" data-id="2f5eb21" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Hot and cold shower</p>								</div>
				<div class="elementor-element elementor-element-27b0005 elementor-widget elementor-widget-text-editor" data-id="27b0005" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>Clothing Storage</p>								</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-ffa5f83 e-flex e-con-boxed e-con e-parent" data-id="ffa5f83" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-a3b36b0 e-con-full e-flex e-con e-child" data-id="a3b36b0" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-4850778 elementor-widget elementor-widget-button js-book-now" data-id="4850778" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#contact">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book Now</span>
					</span>
					</a>
								</div>
				</div>
		<div class="elementor-element elementor-element-523d4bd e-con-full e-flex e-con e-child" data-id="523d4bd" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-bd77b11 elementor-align-left elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="bd77b11" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#contact">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">INQUIRE</span>
					</span>
					</a>
								</div>
				</div>
					</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-31f37c47" data-id="31f37c47" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-bad1fc7 elementor-widget" data-id="bad1fc7">
							<div id="room-carousel" class="relative w-full h-[400px] sm:h-[500px] lg:h-[613px] overflow-hidden mb-2.5 group">
								<div class="room-carousel__track flex h-full transition-transform duration-500 ease-out">
									<a href="wp-content/uploads/2026/06/10RoninRoom1.webp" class="js-lightbox flex-none w-full h-full" data-group="room" data-title="Double Room">
										<img src="wp-content/uploads/2026/06/10RoninRoom1.webp" alt="Double Room" class="w-full h-full object-cover">
									</a>
									<a href="wp-content/uploads/2026/06/20RoninRoom1.webp" class="js-lightbox flex-none w-full h-full" data-group="room" data-title="Double Room">
										<img src="wp-content/uploads/2026/06/20RoninRoom1.webp" alt="Double Room" class="w-full h-full object-cover">
									</a>
									<a href="wp-content/uploads/2026/06/30RoninRoom1.webp" class="js-lightbox flex-none w-full h-full" data-group="room" data-title="Double Room">
										<img src="wp-content/uploads/2026/06/30RoninRoom1.webp" alt="Double Room" class="w-full h-full object-cover">
									</a>
									<a href="wp-content/uploads/2026/06/40RoninRoom1.webp" class="js-lightbox flex-none w-full h-full" data-group="room" data-title="Double Room">
										<img src="wp-content/uploads/2026/06/40RoninRoom1.webp" alt="Double Room" class="w-full h-full object-cover">
									</a>
									<a href="wp-content/uploads/2026/06/50RoninRoom1.webp" class="js-lightbox flex-none w-full h-full" data-group="room" data-title="Double Room">
										<img src="wp-content/uploads/2026/06/50RoninRoom1.webp" alt="Double Room" class="w-full h-full object-cover">
									</a>
								</div>
								<button type="button" class="room-carousel__prev absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full bg-white/80 text-black opacity-0 group-hover:opacity-100 transition-opacity" aria-label="Previous photo">&#8249;</button>
								<button type="button" class="room-carousel__next absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full bg-white/80 text-black opacity-0 group-hover:opacity-100 transition-opacity" aria-label="Next photo">&#8250;</button>
								<div class="room-carousel__dots absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2">
									<button type="button" class="room-carousel__dot w-2 h-2 rounded-full bg-white/60" data-index="0" aria-label="Photo 1"></button>
									<button type="button" class="room-carousel__dot w-2 h-2 rounded-full bg-white/60" data-index="1" aria-label="Photo 2"></button>
									<button type="button" class="room-carousel__dot w-2 h-2 rounded-full bg-white/60" data-index="2" aria-label="Photo 3"></button>
									<button type="button" class="room-carousel__dot w-2 h-2 rounded-full bg-white/60" data-index="3" aria-label="Photo 4"></button>
									<button type="button" class="room-carousel__dot w-2 h-2 rounded-full bg-white/60" data-index="4" aria-label="Photo 5"></button>
								</div>
							</div>
						</div>
				<div class="elementor-element elementor-element-421da54d elementor-widget elementor-widget-spacer" data-id="421da54d" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-253b16b2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="253b16b2" data-element_type="section" data-e-type="section" id="amenities" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3ff1d7f9" data-id="3ff1d7f9" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-60f029b e-flex e-con-boxed e-con e-parent" data-id="60f029b" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-a1fcb90 elementor-widget elementor-widget-text-editor" data-id="a1fcb90" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>03 / Property &amp; Nearby Attractions</p>								</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-1546df1f elementor-widget elementor-widget-heading" data-id="1546df1f" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default">Everything you need,<br>nothing you don't.</h2>				</div>
				<div class="elementor-element elementor-element-a174c67 elementor-widget elementor-widget-spacer" data-id="a174c67" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
		<div class="elementor-element elementor-element-e5d1a0a e-flex e-con-boxed e-con e-parent" data-id="e5d1a0a" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-6b88401 e-con-full e-flex e-con e-child" data-id="6b88401" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-ca6c86a elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="ca6c86a" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p><strong>On-Site Restaurant</strong></p><p>A dining experience rooted in tradition and inspired by innovation, transforming Siargao’s freshest local harvests into bold, memorable flavors.</p>								</div>
				</div>
		<div class="elementor-element elementor-element-86f1481 e-con-full e-flex e-con e-child" data-id="86f1481" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-c18959e elementor-widget elementor-widget-text-editor" data-id="c18959e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p><strong>On-Site Parking</strong></p><p>Guests can enjoy the convenience of on-site parking, providing easy and secure access to the property throughout their stay.</p>								</div>
				</div>
		<div class="elementor-element elementor-element-4bf0b41 e-con-full e-flex e-con e-child" data-id="4bf0b41" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-b867c9c elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="b867c9c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p><strong>Surfing Beach</strong></p><p>The property is not directly on the beachfront, but it is conveniently located just a 3–5-minute motorbike ride or a pleasant 10-minute walk from the main surf beaches and the famous Cloud 9 surfing spot.</p>								</div>
				</div>
		<div class="elementor-element elementor-element-73253ad e-con-full e-flex e-con e-child" data-id="73253ad" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-24cc03b elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="24cc03b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p><strong data-start="0" data-end="16" data-is-only-node="">Café Hopping</strong></p><p>Explore General Luna’s vibrant café scene, where laid-back coffee shops, stylish brunch spots, and dessert cafés are all just a short distance away.</p>								</div>
				</div>
					</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5ec35fd6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5ec35fd6" data-element_type="section" data-e-type="section" id="gallery" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-576d7764" data-id="576d7764" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b53b2ac elementor-widget elementor-widget-text-editor" data-id="b53b2ac" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>04 / Gallery</p>								</div>
				<div class="elementor-element elementor-element-83180cd elementor-widget elementor-widget-heading" data-id="83180cd" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default">Life at <em>The Ronin</em></h2>				</div>
				<div class="elementor-element elementor-element-32412d21 elementor-widget elementor-widget-spacer" data-id="32412d21" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				<div class="elementor-element elementor-element-b8ccfe7 elementor-widget elementor-widget-gallery" data-id="b8ccfe7" data-element_type="widget" data-e-type="widget" data-settings="{&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:6,&quot;sizes&quot;:[]},&quot;columns&quot;:3,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;columns_tablet&quot;:2,&quot;columns_mobile&quot;:1,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;aspect_ratio&quot;:&quot;3:2&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}" data-widget_type="gallery.default">
							<div class="simple-gallery">
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/06/Property-Photo.webp" data-group="life" data-title="Property Photo">
								<img src="wp-content/uploads/2026/06/Property-Photo.webp" loading="lazy" alt="Property Photo">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Siargao-Island-Cloud-9.webp" data-group="life" data-title="Siargao Island Cloud 9">
								<img src="wp-content/uploads/2026/07/Siargao-Island-Cloud-9.webp" loading="lazy" alt="Siargao Island Cloud 9">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Surfing.webp" data-group="life" data-title="Surfing">
								<img src="wp-content/uploads/2026/07/Surfing.webp" loading="lazy" alt="Surfing">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Siargao-Island-A-beautiful-beach.webp" data-group="life" data-title="Siargao Island - A beautiful beach">
								<img src="wp-content/uploads/2026/07/Siargao-Island-A-beautiful-beach.webp" loading="lazy" alt="Siargao Island - A beautiful beach">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Siargao-Island-Naked-island.webp" data-group="life" data-title="Siargao Island - Naked Island">
								<img src="wp-content/uploads/2026/07/Siargao-Island-Naked-island.webp" loading="lazy" alt="Siargao Island - Naked Island">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Siargao-Island-Palm-tree-road.webp" data-group="life" data-title="Siargao Island - Palm tree road">
								<img src="wp-content/uploads/2026/07/Siargao-Island-Palm-tree-road.webp" loading="lazy" alt="Siargao Island - Palm tree road">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Wild-Dishes.webp" data-group="life" data-title="Wild Dishes">
								<img src="wp-content/uploads/2026/07/Wild-Dishes.webp" loading="lazy" alt="Wild Dishes">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Dine-1.webp" data-group="life" data-title="Dine">
								<img src="wp-content/uploads/2026/07/Dine-1.webp" loading="lazy" alt="Dine">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Dining-Table.webp" data-group="life" data-title="Dining Table">
								<img src="wp-content/uploads/2026/07/Dining-Table.webp" loading="lazy" alt="Dining Table">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Dining.webp" data-group="life" data-title="Dining">
								<img src="wp-content/uploads/2026/07/Dining.webp" loading="lazy" alt="Dining">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Restaurant.webp" data-group="life" data-title="Restaurant">
								<img src="wp-content/uploads/2026/07/Restaurant.webp" loading="lazy" alt="Restaurant">
							</a>
							<a class="simple-gallery__item js-lightbox" href="wp-content/uploads/2026/07/Dish.webp" data-group="life" data-title="Dish">
								<img src="wp-content/uploads/2026/07/Dish.webp" loading="lazy" alt="Dish">
							</a>
					</div>
					</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3e0fb250 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3e0fb250" data-element_type="section" data-e-type="section" id="contact" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<?php if (($_GET['sent'] ?? '') === '1'): ?><div class="site-notice site-notice--success">Thanks — your message has been sent. We will get back to you shortly.</div><?php endif; ?>
<?php if (($_GET['sent'] ?? '') === '0'): ?><div class="site-notice site-notice--error">Sorry, something went wrong sending your message. Please try WhatsApp instead.</div><?php endif; ?>
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-62dac6" data-id="62dac6" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-0562180 e-flex e-con-boxed e-con e-parent" data-id="0562180" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-8e3bd55 elementor-widget elementor-widget-text-editor" data-id="8e3bd55" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>05 / Book Your Stay</p>								</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-c46c599 elementor-widget elementor-widget-heading" data-id="c46c599" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default">A quiet stay is waiting.</h2>				</div>
				<div class="elementor-element elementor-element-5756483 elementor-widget elementor-widget-formidable" data-id="5756483" data-element_type="widget" data-e-type="widget" data-widget_type="formidable.default">
				<div class="elementor-widget-container">
					<div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_1_container" >
<form method="post" action="api/contact.php" class="frm-show-form " id="form_contact-form">
<div class="frm_form_fields ">
<fieldset>
<legend class="frm_screen_reader">Contact Us</legend>

<div class="frm_fields_container">
<div id="frm_field_1_container" class="frm_form_field form-field  frm_required_field frm_top_container frm_first frm_half">
	<label for="field_qh4icy" id="field_qh4icy_label" class="frm_primary_label">Name
		<span class="frm_required" aria-hidden="true">*</span>
	</label>
	<input type="text" id="field_qh4icy" name="first_name" required value=""  data-reqmsg="Name cannot be blank." aria-required="true" data-invmsg="Name is invalid" aria-invalid="false" aria-describedby="frm_desc_field_qh4icy"  />
	<div class="frm_description" id="frm_desc_field_qh4icy">First</div>
	
</div>
<div id="frm_field_2_container" class="frm_form_field form-field  frm_required_field frm_hidden_container frm_half">
	<label for="field_ocfup1" id="field_ocfup1_label" class="frm_primary_label">Last
		<span class="frm_required" aria-hidden="true">*</span>
	</label>
	<input type="text" id="field_ocfup1" name="last_name" required value=""  data-reqmsg="Last cannot be blank." aria-required="true" data-invmsg="Last is invalid" aria-invalid="false" aria-describedby="frm_desc_field_ocfup1"  />
	<div class="frm_description" id="frm_desc_field_ocfup1">Last</div>
	
</div>
<div id="frm_field_3_container" class="frm_form_field form-field  frm_required_field frm_top_container frm_full">
	<label for="field_29yf4d" id="field_29yf4d_label" class="frm_primary_label">Email
		<span class="frm_required" aria-hidden="true">*</span>
	</label>
	<input type="email" id="field_29yf4d" name="email" required value=""  data-reqmsg="Email cannot be blank." aria-required="true" data-invmsg="Please enter a valid email address" aria-invalid="false"  />
	
	
</div>
<div id="frm_field_4_container" class="frm_form_field form-field  frm_required_field frm_top_container frm_full">
	<label for="field_e6lis6" id="field_e6lis6_label" class="frm_primary_label">Subject
		<span class="frm_required" aria-hidden="true">*</span>
	</label>
	<input type="text" id="field_e6lis6" name="subject" required value=""  data-reqmsg="Subject cannot be blank." aria-required="true" data-invmsg="Subject is invalid" aria-invalid="false"  />
	
	
</div>
<div id="frm_field_5_container" class="frm_form_field form-field  frm_required_field frm_top_container frm_full">
	<label for="field_9jv0r1" id="field_9jv0r1_label" class="frm_primary_label">Message
		<span class="frm_required" aria-hidden="true">*</span>
	</label>
	<textarea name="message" required id="field_9jv0r1" rows="5"  data-reqmsg="Message cannot be blank." aria-required="true" data-invmsg="Message is invalid" aria-invalid="false"  ></textarea>
	
	
</div>
				<div id="frm_field_6_container">
			<label for="field_nfaqi" >
				If you are human, leave this field blank.			</label>
			<input  id="field_nfaqi" type="text" class="frm_form_field form-field frm_verify" name="website" tabindex="-1" autocomplete="off" value=""  />
		</div>
		<div class="frm_submit frm_flex">
<button class="frm_button_submit" type="submit"  >Submit</button>



</div></div>
</fieldset>
</div>

</form>
</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-51c6f731" data-id="51c6f731" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6b117a0 elementor-widget elementor-widget-spacer" data-id="6b117a0" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				<div class="elementor-element elementor-element-25df520 elementor-widget__width-initial elementor-widget elementor-widget-icon-box" data-id="25df520" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
							<div class="elementor-icon-box-wrapper">

			
						<div class="elementor-icon-box-content">

									<h3 class="elementor-icon-box-title">
						<span  >
							Address						</span>
					</h3>
				
									<p class="elementor-icon-box-description">
						Tourism Road Catangnan<br>General Luna, Siargao Island<br>Surigao Del Norte, Philippines					</p>
				
			</div>
			
		</div>
						</div>
				<div class="elementor-element elementor-element-747d68b elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="747d68b" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				<div class="elementor-element elementor-element-f91b84c elementor-widget elementor-widget-icon-box" data-id="f91b84c" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
							<div class="elementor-icon-box-wrapper">

			
						<div class="elementor-icon-box-content">

									<h3 class="elementor-icon-box-title">
						<span  >
							Phone / WhatsApp						</span>
					</h3>
				
									<p class="elementor-icon-box-description">
						+63 906 399 4675					</p>
				
			</div>
			
		</div>
						</div>
				<div class="elementor-element elementor-element-318808f elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="318808f" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				<div class="elementor-element elementor-element-cf4282a elementor-widget elementor-widget-icon-box" data-id="cf4282a" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
							<div class="elementor-icon-box-wrapper">

			
						<div class="elementor-icon-box-content">

									<h3 class="elementor-icon-box-title">
						<span  >
							Email						</span>
					</h3>
				
									<p class="elementor-icon-box-description">
						<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cba2a5ada48bbfa3aeb9a4a5a2a5b8a2aab9acaaa4e5a8a4a6">[email&#160;protected]</a>					</p>
				
			</div>
			
		</div>
						</div>
				<div class="elementor-element elementor-element-5457f4a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5457f4a" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				<div class="elementor-element elementor-element-4a4b556 elementor-widget elementor-widget-icon-box" data-id="4a4b556" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
							<div class="elementor-icon-box-wrapper">

			
						<div class="elementor-icon-box-content">

									<h3 class="elementor-icon-box-title">
						<span  >
							Check-in / Check-out						</span>
					</h3>
				
									<p class="elementor-icon-box-description">
						Check-in: 3:00 PM<br>Check-out: 12:00 PM					</p>
				
			</div>
			
		</div>
						</div>
					</div>
		</div>
					</div>
		</section>
		<div class="elementor-element elementor-element-ecf85fe e-flex e-con-boxed e-con e-parent" data-id="ecf85fe" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-85b1aab elementor-widget elementor-widget-text-editor" data-id="85b1aab" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>06 / Find Us</p>								</div>
		<div class="elementor-element elementor-element-2506d06 e-con-full e-flex e-con e-child" data-id="2506d06" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-de1e3bd elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="de1e3bd" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default">Getting to The Ronin</h2>				</div>
				</div>
					</div>
				</div>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6388e116 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6388e116" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-282f41d0" data-id="282f41d0" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-64a33071 elementor-widget elementor-widget-google_maps" data-id="64a33071" data-element_type="widget" data-e-type="widget" data-widget_type="google_maps.default">
							<div class="elementor-custom-embed">
			<iframe loading="lazy"
					src="https://maps.google.com/maps?q=Wild%20Siargao%20Restaurant%2C%20Tourism%20Road%20Catangnan%20General%20Luna%20Siargao%20Surigao%20Del%20Norte%20Philippines&#038;t=m&#038;z=15&#038;output=embed&#038;iwloc=near"
					title="Wild Siargao Restaurant, Tourism Road Catangnan General Luna Siargao Surigao Del Norte Philippines"
					aria-label="Wild Siargao Restaurant, Tourism Road Catangnan General Luna Siargao Surigao Del Norte Philippines"
			></iframe>
		</div>
						</div>
				<div class="elementor-element elementor-element-a8537d5 elementor-widget elementor-widget-spacer" data-id="a8537d5" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
					</div>
		</div>
					</div>
		</section>
		<div class="elementor-element elementor-element-c4e4db2 e-flex e-con-boxed e-con e-parent" data-id="c4e4db2" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-8c7c195 e-con-full e-flex e-con e-child" data-id="8c7c195" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-18a7f50 elementor-widget__width-initial elementor-widget elementor-widget-icon-box" data-id="18a7f50" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
							<div class="elementor-icon-box-wrapper">

			
						<div class="elementor-icon-box-content">

									<h3 class="elementor-icon-box-title">
						<span  >
							FROM THE AIRPORT						</span>
					</h3>
				
									<p class="elementor-icon-box-description">
						Siargao Airport (IAO) is approximately 45 minutes from the property. Shared vans are available outside the airport, with fares typically ranging from PHP 350 to PHP 400 per person.					</p>
				
			</div>
			
		</div>
						</div>
				</div>
		<div class="elementor-element elementor-element-98e8808 e-con-full e-flex e-con e-child" data-id="98e8808" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-c1ceb1e elementor-widget elementor-widget-icon-box" data-id="c1ceb1e" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
							<div class="elementor-icon-box-wrapper">

			
						<div class="elementor-icon-box-content">

									<h3 class="elementor-icon-box-title">
						<span  >
							LOCAL TRANSPORT						</span>
					</h3>
				
									<p class="elementor-icon-box-description">
						Habal-habal and tuk-tuks are readily available throughout General Luna. Fares typically range from PHP 30 to PHP 50, depending on your destination. Please note that rates may vary.					</p>
				
			</div>
			
		</div>
						</div>
				</div>
		<div class="elementor-element elementor-element-b0f48e3 e-con-full e-flex e-con e-child" data-id="b0f48e3" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-97431ed elementor-widget elementor-widget-icon-box" data-id="97431ed" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
							<div class="elementor-icon-box-wrapper">

			
						<div class="elementor-icon-box-content">

									<h3 class="elementor-icon-box-title">
						<span  >
							AIRPORT TRANSFERS						</span>
					</h3>
				
									<p class="elementor-icon-box-description">
						For a smooth and convenient arrival, you may arrange your airport transfer in advance through Klook or KKday.

We recommend booking ahead, particularly during weekends, holidays, and peak travel periods.					</p>
				
			</div>
			
		</div>
						</div>
				</div>
					</div>
				</div>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6a42da53 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6a42da53" data-element_type="section" data-e-type="section" id="faqs" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b797293" data-id="6b797293" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-80ad3ea elementor-widget elementor-widget-text-editor" data-id="80ad3ea" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>07 / FAQS</p>								</div>
				<div class="elementor-element elementor-element-290d8f9c elementor-widget elementor-widget-heading" data-id="290d8f9c" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default">Common questions.</h2>				</div>
				<div class="elementor-element elementor-element-11689e7 elementor-widget elementor-widget-spacer" data-id="11689e7" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				<div class="elementor-element elementor-element-19d5b72e elementor-widget elementor-widget-accordion" data-id="19d5b72e" data-element_type="widget" data-e-type="widget" data-widget_type="accordion.default">
							<div class="elementor-accordion">
							<div class="elementor-accordion-item">
					<p id="elementor-tab-title-4331" class="elementor-tab-title" data-tab="1" role="button" aria-controls="elementor-tab-content-4331" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0">Is early check-in or late check-out possible?</a>
					</p>
					<div id="elementor-tab-content-4331" class="elementor-tab-content elementor-clearfix" data-tab="1" role="region" aria-labelledby="elementor-tab-title-4331"><p class="isSelectedEnd">Early check-in and late check-out are subject to room availability and cannot be guaranteed. Should your room not be ready upon arrival, you may leave your luggage with our staff while the room is being prepared.</p></div>
				</div>
							<div class="elementor-accordion-item">
					<p id="elementor-tab-title-4332" class="elementor-tab-title" data-tab="2" role="button" aria-controls="elementor-tab-content-4332" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0">Does breakfast included in the room rate?</a>
					</p>
					<div id="elementor-tab-content-4332" class="elementor-tab-content elementor-clearfix" data-tab="2" role="region" aria-labelledby="elementor-tab-title-4332"><p>Breakfast is not included in the room rate. However, we have an on-site restaurant where guests may order breakfast, drinks, and other meals during their stay. Menu items and operating hours may vary.</p></div>
				</div>
							<div class="elementor-accordion-item">
					<p id="elementor-tab-title-4333" class="elementor-tab-title" data-tab="3" role="button" aria-controls="elementor-tab-content-4333" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0">Is there a minimum stay requirement?</a>
					</p>
					<div id="elementor-tab-content-4333" class="elementor-tab-content elementor-clearfix" data-tab="3" role="region" aria-labelledby="elementor-tab-title-4333"><p>No, there is no minimum stay requirement. Guests may book for one night or longer, subject to room availability.</p></div>
				</div>
							<div class="elementor-accordion-item">
					<p id="elementor-tab-title-4334" class="elementor-tab-title" data-tab="4" role="button" aria-controls="elementor-tab-content-4334" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0">How close are you to Cloud 9?</a>
					</p>
					<div id="elementor-tab-content-4334" class="elementor-tab-content elementor-clearfix" data-tab="4" role="region" aria-labelledby="elementor-tab-title-4334"><p>The property is approximately <strong>1.6 kilometers from Cloud 9</strong>, or around a <strong>4-minute drive via Tourism Road</strong>, depending on traffic conditions.</p></div>
				</div>
							<div class="elementor-accordion-item">
					<p id="elementor-tab-title-4335" class="elementor-tab-title" data-tab="5" role="button" aria-controls="elementor-tab-content-4335" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0">Is full payment required to confirm the booking?</a>
					</p>
					<div id="elementor-tab-content-4335" class="elementor-tab-content elementor-clearfix" data-tab="5" role="region" aria-labelledby="elementor-tab-title-4335"><p>Full payment is required to secure and confirm your room reservation.</p></div>
				</div>
							<div class="elementor-accordion-item">
					<p id="elementor-tab-title-4336" class="elementor-tab-title" data-tab="6" role="button" aria-controls="elementor-tab-content-4336" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0">What is your cancellation and refund policy?</a>
					</p>
					<div id="elementor-tab-content-4336" class="elementor-tab-content elementor-clearfix" data-tab="6" role="region" aria-labelledby="elementor-tab-title-4336"><p>Guests may cancel their reservation free of charge up to one day before the scheduled check-in date.</p></div>
				</div>
								</div>
						</div>
					</div>
		</div>
					</div>
		</section>
				</div>
		
	
	
</div><!-- .entry-content .clear -->

	
	
</article><!-- #post-## -->

			</main><!-- #main -->
			
		
	</div><!-- #primary -->


	</div> <!-- ast-container -->
	</div><!-- #content -->
		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class='footer-width-fixer'><style>.elementor-86 .elementor-element.elementor-element-b9989d3:not(.elementor-motion-effects-element-type-background), .elementor-86 .elementor-element.elementor-element-b9989d3 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#1a1008;}.elementor-86 .elementor-element.elementor-element-b9989d3{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:72px 48px 48px 48px;}.elementor-86 .elementor-element.elementor-element-b9989d3 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-86 .elementor-element.elementor-element-4c801d1{--display:flex;}.elementor-86 .elementor-element.elementor-element-4dadb92{--display:flex;}.elementor-widget-image .widget-image-caption{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-86 .elementor-element.elementor-element-dc34360{text-align:start;}.elementor-86 .elementor-element.elementor-element-dc34360 img{width:55%;}.elementor-widget-text-editor{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );color:var( --e-global-color-text );}.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:var( --e-global-color-primary );}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap, .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap{color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-86 .elementor-element.elementor-element-06cf062{width:auto;max-width:auto;text-align:start;font-family:"IBM Plex Sans Hebrew", Sans-serif;font-size:15px;font-weight:400;letter-spacing:-0.6px;color:var( --e-global-color-text );}.elementor-86 .elementor-element.elementor-element-06cf062.elementor-element{--align-self:flex-start;}.elementor-86 .elementor-element.elementor-element-06cf062 p{margin-block-end:0px;}.elementor-86 .elementor-element.elementor-element-6ad87d5:not(.elementor-motion-effects-element-type-background), .elementor-86 .elementor-element.elementor-element-6ad87d5 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#1a1008;}.elementor-86 .elementor-element.elementor-element-6ad87d5{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:0px 48px 40px 48px;}.elementor-86 .elementor-element.elementor-element-6ad87d5 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}@media(max-width:767px){.elementor-86 .elementor-element.elementor-element-b9989d3{padding:48px 20px 40px 20px;}}</style>		<div data-elementor-type="wp-post" data-elementor-id="86" class="elementor elementor-86" data-elementor-post-type="elementor-hf">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-b9989d3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b9989d3" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-40 elementor-top-column elementor-element elementor-element-7a82d59c" data-id="7a82d59c" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-4c801d1 e-flex e-con-boxed e-con e-parent" data-id="4c801d1" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-4dadb92 e-con-full e-flex e-con e-child" data-id="4dadb92" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-dc34360 elementor-widget elementor-widget-image" data-id="dc34360" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
															<img width="1957" height="557" src="wp-content/uploads/2026/06/Logo-Updated.png" class="attachment-full size-full wp-image-374" alt="" srcset="wp-content/uploads/2026/06/Logo-Updated.png 1957w, wp-content/uploads/2026/06/Logo-Updated-300x85.png 300w, wp-content/uploads/2026/06/Logo-Updated-1024x291.png 1024w, wp-content/uploads/2026/06/Logo-Updated-768x219.png 768w, wp-content/uploads/2026/06/Logo-Updated-1536x437.png 1536w" sizes="(max-width: 1957px) 100vw, 1957px" />															</div>
				<div class="elementor-element elementor-element-06cf062 elementor-widget__width-auto elementor-widget elementor-widget-text-editor" data-id="06cf062" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
									<p>A sanctuary at the edge of the ocean. </p><p>General Luna, Siargao Island, Philippines.</p>								</div>
				</div>
					</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-2bf489d" data-id="2bf489d" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-34366b28 elementor-widget elementor-widget-html" data-id="34366b28" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<p style="font-size:10px;letter-spacing:.22em;text-transform:uppercase;color:#c0795a;margin-bottom:20px;font-family:'DM Sans',sans-serif;font-weight:400;">Explore</p>
  <div style="display:flex;flex-direction:column;gap:12px;">
    <a href="#about" style="text-decoration:none;font-size:13px;color:rgba(250,248,244,.6);font-family:'DM Sans',sans-serif;">About</a>
    <a href="#rooms" style="text-decoration:none;font-size:13px;color:rgba(250,248,244,.6);font-family:'DM Sans',sans-serif;">The Room</a>
    <a href="#amenities" style="text-decoration:none;font-size:13px;color:rgba(250,248,244,.6);font-family:'DM Sans',sans-serif;">Amenities</a>
    <a href="#gallery" style="text-decoration:none;font-size:13px;color:rgba(250,248,244,.6);font-family:'DM Sans',sans-serif;">Gallery</a>
    <a href="#faqs" style="text-decoration:none;font-size:13px;color:rgba(250,248,244,.6);font-family:'DM Sans',sans-serif;">FAQs</a>
  </div>				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-5e0eeff2" data-id="5e0eeff2" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-105cb89b elementor-widget elementor-widget-html" data-id="105cb89b" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<p style="font-size:10px;letter-spacing:.22em;text-transform:uppercase;color:#c0795a;margin-bottom:20px;font-family:'DM Sans',sans-serif;font-weight:400;">Contact</p>
  <div style="display:flex;flex-direction:column;gap:12px;">
    <a href="https://wa.me/639063994675" target="_blank" style="text-decoration:none;font-size:13px;color:rgba(250,248,244,.6);font-family:'DM Sans',sans-serif;">+63 906 399 4675</a>
    <a href="/cdn-cgi/l/email-protection#71181f171e31051914031e1f181f0218100316101e5f121e1c" style="text-decoration:none;font-size:13px;color:rgba(250,248,244,.6);font-family:'DM Sans',sans-serif;word-break:break-all;"><span class="__cf_email__" data-cfemail="721b1c141d32061a17001d1c1b1c011b130015131d5c111d1f">[email&#160;protected]</span></a>
    <a href="https://wa.me/639063994675" target="_blank" style="text-decoration:none;font-size:13px;color:rgba(250,248,244,.6);font-family:'DM Sans',sans-serif;">WhatsApp Us</a>
  </div>				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-2c03305" data-id="2c03305" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7d7b341f elementor-widget elementor-widget-html" data-id="7d7b341f" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<p style="font-size:10px;letter-spacing:.22em;text-transform:uppercase;color:#c0795a;margin-bottom:20px;font-family:'DM Sans',sans-serif;font-weight:400;">Location</p>
  <p style="font-size:13px;line-height:1.9;color:rgba(250,248,244,.55);font-family:'DM Sans',sans-serif;font-weight:300;">Tourism Road Catangnan<br>General Luna<br>Siargao Island<br>Surigao Del Norte</p>				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6ad87d5 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6ad87d5" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cac20aa" data-id="cac20aa" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-41ebafa elementor-widget elementor-widget-html" data-id="41ebafa" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<div style="border-top:1px solid rgba(250,248,244,.08);padding-top:24px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:8px;">
    <p style="font-size:12px;color:rgba(250,248,244,.3);font-family:'DM Sans',sans-serif;font-weight:300;">© 2026 The Ronin Siargao Resort. All rights reserved.</p>
    <p style="font-size:12px;color:rgba(250,248,244,.3);font-family:'DM Sans',sans-serif;font-weight:300;">General Luna · Siargao Island · Philippines</p>
  </div>				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
		</div>		</footer>
		</div><!-- #page -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
				( function() {
					const style = document.createElement( 'style' );
					style.appendChild( document.createTextNode( '#frm_field_6_container {visibility:hidden;overflow:hidden;width:0;height:0;position:absolute;}' ) );
					document.head.appendChild( style );
					document.currentScript?.remove();
				} )();
			</script>

<div id="ast-scroll-top" tabindex="0" class="ast-scroll-top-icon ast-scroll-to-top-right" data-on-devices="both">
	<span class="ast-icon icon-arrow"><svg class="ast-arrow-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewbox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
                <path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z" />
                </svg></span>	<span class="screen-reader-text">Scroll to Top</span>
</div>
			<script>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
			<link rel='stylesheet' id='widget-nav-menu-css' href='wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css?ver=4.1.1' media='all' />
<script id="astra-theme-js-js-extra">
var astra = {"break_point":"921","isRtl":"","is_scroll_to_id":"1","is_scroll_to_top":"1","is_header_footer_builder_active":"1","responsive_cart_click":"flyout","is_dark_palette":""};
//# sourceURL=astra-theme-js-js-extra
</script>
<script id="astra-theme-js-js" src="wp-content/themes/astra/assets/js/minified/frontend.min.js?ver=4.13.4"></script>
<script id="elementor-webpack-runtime-js" src="wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=4.1.3"></script>
<script id="elementor-frontend-modules-js" src="wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=4.1.3"></script>
<script id="jquery-ui-core-js-before">
jQuery.uiBackCompat = true;
//# sourceURL=jquery-ui-core-js-before
</script>
<script id="jquery-ui-core-js" src="wp-includes/js/jquery/ui/core.min.js?ver=1.14.2"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"4.1.3","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_optimized_markup":true,"theme_builder_v2":true,"e_pro_free_trial_popup":true,"nested-elements":true,"e_atomic_elements":true,"atomic_widgets_should_enforce_capabilities":true,"editor_mcp":true,"e_bc_migrations":true,"e_editor_design_system_panel":true,"e_classes":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"e_variables_manager":true,"e_opt_in_v4_page":true,"e_opt_in_v4":true,"e_components":true,"e_interactions":true,"e_widget_creation":true,"import-export-customization":true,"e_pro_atomic_form":true,"mega-menu":true,"e_pro_variables":true,"e_pro_interactions":true},"urls":{"assets":"wp-content\/plugins\/elementor\/assets\/","ajaxurl":"#","uploadUrl":"wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"afbadcff06","atomicFormsSendForm":"c6c14f734f"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":2,"title":"The%20Ronin%20Siargao","excerpt":"","featuredImage":false}};
//# sourceURL=elementor-frontend-js-before
</script>
<script id="elementor-frontend-js" src="wp-content/plugins/elementor/assets/js/frontend.min.js?ver=4.1.3"></script>
<script id="swiper-js" src="wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5"></script>
<script id="elementor-gallery-js" src="wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0"></script>
<script id="smartmenus-js" src="wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1"></script>
<script id="formidable-js-extra">
var frm_js = {"ajax_url":"https://theroninsiargao.com/wp-admin/admin-ajax.php","images_url":"wp-content/plugins/formidable/images","loading":"Loading\u2026","remove":"Remove","offset":"4","nonce":"fad7ce6648","id":"ID","no_results":"No results match","file_spam":"That file looks like Spam.","calc_error":"There is an error in the calculation in the field with key","empty_fields":"Please complete the preceding required fields before uploading a file.","focus_first_error":"1","include_alert_role":"1","include_resend_email":""};
//# sourceURL=formidable-js-extra
</script>
<script id="formidable-js" src="wp-content/plugins/formidable/js/frm.min.js?ver=6.32.1"></script>
<script id="elementor-pro-webpack-runtime-js" src="wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=4.1.1"></script>
<script id="wp-hooks-js" src="wp-includes/js/dist/hooks.min.js?ver=f0f188028580e8dc1255"></script>
<script id="wp-i18n-js" src="wp-includes/js/dist/i18n.min.js?ver=1dfe7db3940c23ea9216"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
</script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"#","nonce":"cc13d05cf5","urls":{"assets":"wp-content\/plugins\/elementor-pro\/assets\/","rest":"#"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":false},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
//# sourceURL=elementor-pro-frontend-js-before
</script>
<script id="elementor-pro-frontend-js" src="wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=4.1.1"></script>
<script id="pro-elements-handlers-js" src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=4.1.1"></script>
			<script>
			/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
			</script>
			<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"wp-includes/js/wp-emoji-release.min.js?ver=7.1"}}
</script>
<script type="module">
/*! This file is auto-generated */
var e="script#wp-emoji-settings",t=document.querySelector(e);if(!(t instanceof HTMLScriptElement))throw new Error("Element missing: "+e);const r=JSON.parse(t.text),s=(window._wpemojiSettings=r,"wpEmojiSettingsSupports"),o=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(s,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const r=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===r[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,r){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!r(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,r){let a;const s=(a="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),o=(s.textBaseline="top",s.font="600 32px Arial",{});return e.forEach(e=>{o[e]=t(s,e,n,r)}),o}function a(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}r.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(s));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(o),u.toString(),c.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"});const a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=e=>{i(n=e.data),a.terminate(),t(n)})}catch(e){}i(n=f(o,u,c,p))}t(n)}).then(e=>{for(const n in e)r.supports[n]=e[n],r.supports.everything=r.supports.everything&&r.supports[n],"flag"!==n&&(r.supports.everythingExceptFlag=r.supports.everythingExceptFlag&&r.supports[n]);var t;r.supports.everythingExceptFlag=r.supports.everythingExceptFlag&&!r.supports.flag,r.supports.everything||((t=r.source||{}).concatemoji?a(t.concatemoji):t.wpemoji&&t.twemoji&&(a(t.twemoji),a(t.wpemoji)))});
//# sourceURL=wp-includes/js/wp-emoji-loader.min.js
</script>
	<div id="booking-modal" class="booking-modal" hidden>
  <div class="booking-modal__backdrop" data-close></div>
  <div class="booking-modal__panel" role="dialog" aria-modal="true" aria-labelledby="booking-modal-title">
    <button type="button" class="booking-modal__close" data-close aria-label="Close">&times;</button>
    <h2 id="booking-modal-title">Book Your Stay</h2>
    <div id="booking-step-dates">
      <div class="booking-field-row">
        <label>Check-in<input type="date" id="bk-checkin" required></label>
        <label>Check-out<input type="date" id="bk-checkout" required></label>
        <label>Guests<input type="number" id="bk-guests" min="1" max="4" value="2" required></label>
      </div>
      <button type="button" id="bk-check-availability" class="elementor-button">Check Availability</button>
      <div id="bk-availability-result"></div>
    </div>
    <form id="bk-guest-form" hidden>
      <input type="hidden" id="bk-checkin-confirmed">
      <input type="hidden" id="bk-checkout-confirmed">
      <div class="booking-field-row">
        <label>First name<input type="text" id="bk-first-name" required></label>
        <label>Last name<input type="text" id="bk-last-name" required></label>
      </div>
      <div class="booking-field-row">
        <label>Email<input type="email" id="bk-email" required></label>
        <label>Phone<input type="tel" id="bk-phone" required></label>
      </div>
      <label>Notes (optional)<textarea id="bk-notes" rows="3"></textarea></label>
      <div id="bk-payment-instructions" class="booking-payment-note"></div>
      <button type="submit" class="elementor-button">Confirm Booking</button>
    </form>
    <div id="bk-confirmation" hidden></div>
    <div id="bk-error" class="booking-error" hidden></div>
  </div>
</div>
<script src="assets/js/nav.js" defer></script>
<script src="assets/js/booking.js" defer></script>
<script src="assets/js/room-carousel.js" defer></script>
<script src="assets/js/lightbox.js" defer></script>
<script src="assets/js/faq-accordion.js" defer></script>
</body>
</html>
