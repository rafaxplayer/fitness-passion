<?php
/**
 *
 * Admin panel theme
 * 
 * @package fitnes-passion
 */

 /**
 * Add customizer link on admin panel
 */
function fitness_passion_customizer_menu() {

	add_theme_page( __('Fitness Passion Theme','fitness-passion'), __('Fitness Passion Theme','fitness-passion'), 'edit_theme_options','fitness_passion_theme' ,'fitness_passion_admin_panel' );
}

function fitness_passion_admin_panel(){

$theme_info = wp_get_theme();?>
<div class="wrap">
		
    <div class="fp-admin-title">
        <h1><?php echo esc_html__( 'Welcome to Fitness Passion! - Version ', 'fitness-passion' ) . esc_html( $theme_info['Version'] ); ?></h1>
        
    </div>
    <div class="fp-admin-about-text">
        <?php echo esc_html__( 'Thank you for using Fitness Passion !!!, Fitness Passion is a theme designed for gym or fitness site.', 'fitness-passion' ); ?>

    </div>
    <div class="fp-theme-image">
        <img src="<?php echo get_template_directory_uri().'/screenshot.png'; ?>" alt="">
    </div>    
    <div>
        <h2>
        <span class="dashicons dashicons-admin-generic"></span>
        <?php echo esc_html__('Features','fitness-passion'); ?>
        </h2>
    </div>

    <div class="card">
        <h3>
        <span class="dashicons dashicons-buddicons-topics"></span>
        <?php echo esc_html__('Page & Post templates','fitness-passion'); ?>
        </h3>
        <hr>
        <p> <?php echo esc_html__( 'In your page or entry editor, select the template and choose the one you need.', 'fitness-passion' ); ?></p>
        
        <b><?php echo esc_html__( '- Landing Page template', 'fitness-passion' ); ?></b>
        <p>
        <?php esc_html__( 'Use the template "landing page" to create a home page, configure your sections from the customizer', 'fitness-passion'); ?>
        </p>

        <b><?php echo esc_html__( '- Page Full width template', 'fitness-passion' ); ?></b>
        <p>
        <?php echo esc_html__( 'Use the template "Page Full-width" to create pages with full width', 'fitness-passion' ); ?>
        </p>

        <b><?php echo esc_html__( '- Post Full-width template', 'fitness-passion' ); ?></b>
        <p>
        <?php echo esc_html__( 'Use the template "Post Full-width" to create pots with full width', 'fitness-passion' ); ?>
        </p>

    </div>

    <div class="card">
        <h3>
        <span class="dashicons dashicons-editor-code"></span>
        <?php echo esc_html__('Short codes','fitness-passion'); ?>
        </h3>
        <hr>
        <p> 
            <?php echo esc_html__( 'Short codes included', 'fitness-passion' ); ?>
        </p>
        <h4><?php echo esc_html__( '- Buttons', 'fitness-passion' ); ?></h4>
        <p>
            <?php echo esc_html__( 'The buttons have parameters for text, url and color of the button, example :', 'fitness-passion' ); ?>
        </p>
        <p class="fp-code">
            <b>[fp-button url="yoururl" color="blue" text="Button text"]</b><br>
        </p>
        Or
        <p class="fp-code">
            <b>[fp-button url="yoururl" color="blue"]Button text[/fp-button]</b><br>
        </p>
        <
        <p>
            <?php echo esc_html__( 'Available colours : red, blue, orange, black, white', 'fitness-passion' ); ?>
        </p><br>
        <p>
        <?php echo do_shortcode('[fp-button url="your-url" color="blue" text="Button text"]'); ?>
        </p><br>
        <p>
        <?php echo do_shortcode('[fp-button url="yoururl" color="orange" text="Button text"]'); ?>
        </p><br>
        <p>
        <?php echo do_shortcode('[fp-button url="yoururl" color="red" text="Button text"]'); ?>
        </p><br>
        <p>
        <?php echo do_shortcode('[fp-button url="yoururl" color="black" text="Button text"]'); ?>
        </p><br>
        <p>
        <?php echo do_shortcode('[fp-button url="yoururl" color="white" text="Button text"]'); ?>
        </p><br>
        </p>
        
        <br>
        <h4 id="plans"><?php echo esc_html__( '- Price Plans boxes', 'fitness-passion' ); ?></h4>
        <p>
            <?php echo esc_html__( 'Use it to create boxes of training plans or recurring payments', 'fitness-passion' ); ?>
        </p>
        <p>
            <?php echo esc_html__( 'The plannings boxes parameters: title, price, currency, outstanding, button_text, button_link,You can use html to give content to the content. examples :', 'fitness-passion' ); ?>
        </p><br>
        <p class="fp-code fp_content">
            <?php echo htmlspecialchars('[fp-planning title="Bacic Plan" price="20"  recurrent= "Week"  outstanding="false"  currency="€" button_text="Select"  button_link="https://es.wordpress.org/"] 3 Days a week <br>Program Bodybuilding<br>Diet Program Included<br>Yoga<br>Professional Trainers[/fp-planning]');?>
        </p><br>
        <p class="fp-code fp_content">
            <?php echo htmlspecialchars('[fp-planning title="Expert Plan" price="40" recurrent="Mo" outstanding="true" currency="€" button_text="Select"  button_link="https://es.wordpress.org/"] 3 Days a week<br>Program Bodybuilding<br>Diet Program Included<br>Yoga<br>Professional Trainers[/fp-planning]');?>
            </p><br>
        <p class="fp-code fp_content">
            <?php echo htmlspecialchars('[fp-planning title="Premium Plan" price="60" recurrent="Year" outstanding="false" currency="$" button_text="Select" button_link="https://es.wordpress.org/"] 3 Days a week<br>Program Bodybuilding<br>Diet Program Included<br>Yoga<br>Professional Trainers[/fp-planning]');?>
            </p><br>
        <div class="fp_row">
            <div class="fp_col">
                <?php echo do_shortcode('[fp-planning title="Basic Plan" price="20"  recurrent="Week"  outstanding="false"  currency="€" button_text ="Select"  button_link ="https://es.wordpress.org/"] 3 Days a week<br>Program Bodybuilding<br>Diet Program Included<br>Yoga<br>Professional Trainers[/fp-planning]'); ?>
            </div>
                
            <div class="fp_col">
                <?php echo do_shortcode('[fp-planning title="Expert Plan" outstanding="true" price="40"  recurrent="Mo" currency="€" button_text ="Select"  button_link ="https://es.wordpress.org/"] 3 Days a week<br>Program Bodybuilding<br>Diet Program Included<br>Yoga<br> Professional Trainers[/fp-planning]'); ?>
            </div>
            <div class="fp_col">
                <?php echo do_shortcode('[fp-planning title="Premium Plan" price="60"  recurrent="Year"  outstanding="false" currency="$" button_text ="Select"  button_link ="https://es.wordpress.org/"] 3 Days a week<br> Program Bodybuilding<br>Diet Program Included<br>Yoga<br>Professional Trainers[/fp-planning]'); ?>
            </div>
        </div>
               
        <h4 id="text-boxes"><?php echo esc_html__( '- Text boxes', 'fitness-passion' ); ?></h4>
        <p>
            <?php echo esc_html__( 'Use it to create Text messages boxes', 'fitness-passion' ); ?>
        </p>
        <p>
            <?php echo esc_html__( 'Text boxes parameters: type ( info, warning, danger, success), examples :', 'fitness-passion' ); ?>
        </p><br>
        <p class="fp-code fp_content" >
            <b>[fp-text-box type="info"]Lorem ipsum dolor sit amet consectetur adipiscing elit purus cursus, ut fames natoque hendrerit in fermentum condimentum dignissim massa felis, dis aliquam risus ligula vivamus eleifend suscipit torquent. Rutrum faucibus lacinia volutpat himenaeos netus sapien etiam consequat leo, nibh tempor ut vehicula fames torquent ultrices dui. Cras fermentum posuere eu torquent ut rhoncus primis facilisis, [/fp-text-box]</b><br>
        </p><br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-text-box type="info"]Lorem ipsum dolor sit amet consectetur adipiscing elit purus cursus, ut fames natoque hendrerit in fermentum condimentum dignissim massa felis, dis aliquam risus ligula vivamus eleifend suscipit torquent. Rutrum faucibus lacinia volutpat himenaeos netus sapien etiam consequat leo, nibh tempor ut vehicula fames torquent ultrices dui. Cras fermentum posuere eu torquent ut rhoncus primis facilisis, [/fp-text-box]');?>
        </div>
        <br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-text-box type="success"]Lorem ipsum dolor sit amet consectetur adipiscing elit purus cursus, ut fames natoque hendrerit in fermentum condimentum dignissim massa felis, dis aliquam risus ligula vivamus eleifend suscipit torquent. Rutrum faucibus lacinia volutpat himenaeos netus sapien etiam consequat leo, nibh tempor ut vehicula fames torquent ultrices dui. Cras fermentum posuere eu torquent ut rhoncus primis facilisis, [/fp-text-box]');?>
        </div>
        <br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-text-box type="danger"]Lorem ipsum dolor sit amet consectetur adipiscing elit purus cursus, ut fames natoque hendrerit in fermentum condimentum dignissim massa felis, dis aliquam risus ligula vivamus eleifend suscipit torquent. Rutrum faucibus lacinia volutpat himenaeos netus sapien etiam consequat leo, nibh tempor ut vehicula fames torquent ultrices dui. Cras fermentum posuere eu torquent ut rhoncus primis facilisis, [/fp-text-box]');?>
        </div>
        <br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-text-box type="warning"]Lorem ipsum dolor sit amet consectetur adipiscing elit purus cursus, ut fames natoque hendrerit in fermentum condimentum dignissim massa felis, dis aliquam risus ligula vivamus eleifend suscipit torquent. Rutrum faucibus lacinia volutpat himenaeos netus sapien etiam consequat leo, nibh tempor ut vehicula fames torquent ultrices dui. Cras fermentum posuere eu torquent ut rhoncus primis facilisis, [/fp-text-box]');?>
        </div>
        <br>
        
    </div>
	
</div><!--/.wrap.about-wrap-->
        <?php
}

add_action( 'admin_menu', 'fitness_passion_customizer_menu' );