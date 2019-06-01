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
        <?php printf( __( 'Use the template "landing page" to create a home page, configure your sections from the <a href="%s">customizer</a>', 'fitness-passion' ),esc_url( admin_url( 'customize.php' ) )); ?>
        </p>

        <b><?php echo esc_html__( '- Page Full-width template', 'fitness-passion' ); ?></b>
        <p>
        <?php echo esc_html__( 'Use the template "Page Full-width" to create pages with full-width', 'fitness-passion' ); ?>
        </p>

        <b><?php echo esc_html__( '- Post Full-width template', 'fitness-passion' ); ?></b>
        <p>
        <?php echo esc_html__( 'Use the template "Post Full-width" to create pots with full-width', 'fitness-passion' ); ?>
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
        <p>
            <?php echo esc_html__( 'The buttons have parameters for text, url and color of the button, examples :', 'fitness-passion' ); ?>
        </p>
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
        <h4><?php echo esc_html__( '- Drop Caps', 'fitness-passion' ); ?></h4>
        <p>
            <?php echo esc_html__( 'Use drop caps in your paragraphs', 'fitness-passion' ); ?>
        </p>
        <b><?php echo esc_html__( '- Set colors (Blue, Orange,Black, White, Red), examples:', 'fitness-passion' ); ?></b>  
        <br>   
        <p class="fp-code">
            <b>[fp-drop-caps color="orange" ] Your text [/fp-drop-caps]</b><br>
        </p><br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-drop-caps color="orange" ]dolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quo corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quo [/fp-drop-caps]'); ?>
        </div>
        <br>

        <p class="fp-code">
            <b>[fp-drop-caps color="black" ] Your text [/fp-drop-caps]</b><br>
        </p><br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-drop-caps color="black" ]dolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quo corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quo [/fp-drop-caps]'); ?>
        </div>
        <br>

        <p class="fp-code">
            <b>[fp-drop-caps color="red" ] Your text [/fp-drop-caps]</b><br>
        </p><br>

        <div class="fp_content">
        <?php echo do_shortcode('[fp-drop-caps color="red" ]dolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quo corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quo [/fp-drop-caps]'); ?>
        </div>
        <br>

        <b><?php echo esc_html__( '- Set shadow (true or false)', 'fitness-passion' ); ?></b>
        <br>
        <p class="fp-code " >
            <b>[fp-drop-caps color="red" shadow="true"] Your text [/fp-drop-caps]</b><br>
        </p><br>

        <div class="fp_content" style="background-color:#2b2c5f;; color:white">
        <?php echo do_shortcode('[fp-drop-caps color="red" shadow="true"]dolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quo corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quodolor corporis sint con sequuntur sed. Quasi quo [/fp-drop-caps]'); ?>
        </div>
        <br>
        <h4 id="plans"><?php echo esc_html__( '- Price Plans boxes', 'fitness-passion' ); ?></h4>
        <p>
            <?php echo esc_html__( 'Use it to create boxes of training plans or recurring payments, example :', 'fitness-passion' ); ?>
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
            <b>[fp-text-box type="info"]Aprovecha nuestra instalación de WordPress en 1 clic y nuestro potente y exclusivo WordPress Starter para crear un sitio real y funcional en minutos.[/fp-text-box]</b><br>
        </p><br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-text-box type="info"]Aprovecha nuestra instalación de WordPress en 1 clic y nuestro potente y exclusivo WordPress Starter para crear un sitio real y funcional en minutos.[/fp-text-box]');?>
        </div>
        <br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-text-box type="success"]Aprovecha nuestra instalación de WordPress en 1 clic y nuestro potente y exclusivo WordPress Starter para crear un sitio real y funcional en minutos.[/fp-text-box]');?>
        </div>
        <br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-text-box type="danger"]Aprovecha nuestra instalación de WordPress en 1 clic y nuestro potente y exclusivo WordPress Starter para crear un sitio real y funcional en minutos.[/fp-text-box]');?>
        </div>
        <br>
        <div class="fp_content">
        <?php echo do_shortcode('[fp-text-box type="warning"]Aprovecha nuestra instalación de WordPress en 1 clic y nuestro potente y exclusivo WordPress Starter para crear un sitio real y funcional en minutos.[/fp-text-box]');?>
        </div>
        <br>
        <h4 id="plans"><?php echo esc_html__( '- All short codes available', 'fitness-passion' ); ?></h4>
    <?php global $shortcode_tags;
        echo '<pre style="font-size:1.5em">';
        print_r($shortcode_tags); 
        echo '</pre>';?>
    </div>
	
</div><!--/.wrap.about-wrap-->
        <?php
}

add_action( 'admin_menu', 'fitness_passion_customizer_menu' );