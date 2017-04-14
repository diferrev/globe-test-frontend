<?php get_header();?>

<?php
/* Creando consulta de slides publicados */
$slides = new WP_Query(array(
	'post_type' => 'slides'
));

/* Validando que existan slides */
if ( $slides->have_posts() ) : ?>
    <!-- Slider -->
    <section class="slider">
        <?php 
            /* Recorriendo los slides */
            while ( $slides->have_posts() ) : $slides->the_post(); 
            /* Almacenando variables de los custom types del slide */
            /* Subtítulo */
            $slide_subtitle = get_post_meta($post->ID, 'slide_subtitle', true);
            /* Imagen de apoyo */
            $slide_image_id = get_post_meta($post->ID, 'slide_image', true);
            if($slide_image_id){
                $slide_image = wp_get_attachment_image_src($slide_image_id, 'full');
            }
            /* Imagen de apoyo */
            $slide_background_id = get_post_meta($post->ID, 'slide_background', true);
            if($slide_background_id){
                $slide_background = wp_get_attachment_image_src($slide_background_id, 'full');
            };
            $slide_view_details_url = get_post_meta($post->ID, 'slide_view-details', true);
        ?>
            <article class="slider-item" style="background-image: url(<?php echo $slide_background[0];?>)">
                <div class="container">
                    <div class="slider-item__info">
                        <h1 class="slider-item__title">
                            <?php the_title(); ?>
                        </h2>
                        <h2 class="slider-item__subtitle">
                            <?php echo $slide_subtitle; ?>
                        </h2>
                        <div class="slider-item__content">
                            <?php the_content(); ?>
                        </div>
                        <a href="<?php echo esc_url($slide_view_details_url) ;?>" class="btn btn-default slider-item__cta"><i class="fa fa-chevron-circle-right"></i>View Details</a>
                    </div>
                    <figure class="slider-item__image">
                        <img src="<?php echo $slide_image[0];?>" alt="">
                    </figure> 
                </div>
            </article>
        <?php endwhile;?>
    </section>
<?php
endif; 
wp_reset_postdata(); ?>
    <!-- Plans -->
    <section class="section plans">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <article class="plan">
                        <h3 class="plan__name">Standard Hosting</h3>
                        <span class="plan__price">2.99</span>
                        <ul class="plan__features">
                            <li>500 GB Disk Space</li>
                            <li>100 Databases List</li>
                            <li>Free Domain Registration</li>
                            <li>1 Hosting Space</li>
                            <li>Account Control Panel</li>
                            <li>FREE 24/7 Support</li>
                        </ul>
                        <a href="" class="btn btn-default plan__cta">Sign up now!</a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <article class="plan plan--blue">
                        <h3 class="plan__name">Standard Hosting</h3>
                        <span class="plan__price">2.99</span>
                        <ul class="plan__features">
                            <li>500 GB Disk Space</li>
                            <li>100 Databases List</li>
                            <li>Free Domain Registration</li>
                            <li>1 Hosting Space</li>
                            <li>Account Control Panel</li>
                            <li>FREE 24/7 Support</li>
                        </ul>
                        <a href="" class="btn btn-default plan__cta">Sign up now!</a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <article class="plan">
                        <h3 class="plan__name">Standard Hosting</h3>
                        <span class="plan__price">2.99</span>
                        <ul class="plan__features">
                            <li>500 GB Disk Space</li>
                            <li>100 Databases List</li>
                            <li>Free Domain Registration</li>
                            <li>1 Hosting Space</li>
                            <li>Account Control Panel</li>
                            <li>FREE 24/7 Support</li>
                        </ul>
                        <a href="" class="btn btn-default plan__cta">Sign up now!</a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <article class="plan">
                        <h3 class="plan__name">Standard Hosting</h3>
                        <span class="plan__price">2.99</span>
                        <ul class="plan__features">
                            <li>500 GB Disk Space</li>
                            <li>100 Databases List</li>
                            <li>Free Domain Registration</li>
                            <li>1 Hosting Space</li>
                            <li>Account Control Panel</li>
                            <li>FREE 24/7 Support</li>
                        </ul>
                        <a href="" class="btn btn-default plan__cta">Sign up now!</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="section services">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service">
                        <span class="service__icon">
                            <i class="fa fa-desktop"></i>
                        </span>
                        <div class="service__info">
                            <h3>Web Site Hosting</h3>
                            <p>Many desktop publishing web pages editors now use default model text and a search for will many web sites.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service service--blue">
                        <span class="service__icon">
                            <i class="fa globeicon-palette"></i>
                        </span>
                        <div class="service__info">
                            <h3>Web Site Hosting</h3>
                            <p>Many desktop publishing web pages editors now use default model text and a search for will many web sites.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Build in -->
    <section class="section features">
        <div class="container">
            <h3>NEW <strong>WEBSITE?</strong><span> Build in 3 Easy Steps</span></h3>
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#login" data-toggle="tab">
                            <span class="badge">1</span> <span class="hidden-xs">Login to Site Builder</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#select" data-toggle="tab">
                            <span class="badge">2</span> <span class="hidden-xs">Select a Website</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#publish" aria-controls="publish" role="tab" data-toggle="tab">
                            <span class="badge">3</span> <span class="hidden-xs">Publich & Website Live!</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="login">
                        <div class="feature">
                            <figure class="feature__image">
                                <img src="http://placehold.it/190x200" alt="">
                            </figure>
                            <div class="feature__content">
                                <h4>Login to Ainex SiteBuilder</h4>
                                <p>
                                    First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel. First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel.First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel.First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web
                                </p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="select">
                        <div class="feature">
                            <figure class="feature__image">
                                <img src="http://placehold.it/190x200" alt="">
                            </figure>
                            <div class="feature__content">
                                <h4>Select a Website</h4>
                                <p>
                                    First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel. First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel.First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel.First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web
                                </p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="publish">
                        <div class="feature">
                            <figure class="feature__image">
                                <img src="http://placehold.it/190x200" alt="">
                            </figure>
                            <div class="feature__content">
                                <h4>Publich & Website Live!</h4>
                                <p>
                                    First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel. First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel.First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web hosting control panel.First choose your domain name. It is a unique name what you are calling your website. You have to register the domain name each year for fee. Example: www.example.com is your domain name. To get started with site solution, just visit the create & update tab of your web
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Twitter -->
    <section class="section tweets">
        <div class="container">
            <div class="tweet">
                <div class="twitter-icon">
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-angle-right"></i>
                </div>
                <div class="tweet__info">
                    <p class="tweet__message"><strong>gsrthemes9:</strong> Liva - Responsive Multipurpose Professional Template. Create Outstanding Website in Minutes!.</p>
                    <p class="tweet__meta">
                        9 days ago
                        <a href="">.reply</a>
                        <a href="">.retweet</a>
                        <a href="">.favorite</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>