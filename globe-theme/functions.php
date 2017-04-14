<?php 
/* Scripts de Globe theme */
function globe_scripts(){

    /* Registrado scripts de Slick Slider */
    wp_register_script(
        'slickjs',
		get_template_directory_uri() . '/assets/js/slick.min.js',
		'',
		'all'
	);
    /* Registrado el bootstrap js y sus dependencias */
    wp_register_script(
		'bootstrapjs', 
		get_template_directory_uri() . '/assets/js/bootstrap.min.js',
		array('jquery'),
		'',
		'all'
	);

    /* Registrando scripts del tema Globe */
    wp_register_script(
        'globe-scripts',
        get_template_directory_uri() . '/assets/js/globe.js',
        array('bootstrapjs', 'slickjs'),
        '1.0.0',
        'all'
    );

	wp_enqueue_script('globe-scripts');
}
add_action('wp_enqueue_scripts', 'globe_scripts');