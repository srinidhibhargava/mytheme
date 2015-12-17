<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "mytheme";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.
	 $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( $theme->get( 'Name' ), 'redux-framework-demo' ),
        'page_title'           => __( 'Sample Options', 'redux-framework-demo' ),
		'admin_bar_icon'       => 'dashicons-portfolio',
		'dev_mode'             => true,
		'page_parent'          => 'themes.php',
		'page_icon'            => 'icon-themes',
	);
    Redux::setArgs($opt_name,$args);
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Slides', 'redux-framework-demo' ),
        'id'         => 'additional-slides',
        'desc'       => 'Here you can add slides',
        'fields'     => array(
            array(
                'id'          => 'opt-slides',
                'type'        => 'slides',
                'title'       => __( 'Slides Options', 'redux-framework-demo' ),
                'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'redux-framework-demo' ),
                'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo' ),
                'placeholder' => array(
                    'title'       => __( 'This is a title', 'redux-framework-demo' ),
                    'description' => __( 'Description Here', 'redux-framework-demo' ),
                    'url'         => __( 'Give us a link!', 'redux-framework-demo' ),
                ),
            ),
        )
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Multi Text', 'redux-framework-demo' ),
        'id'         => 'basic-Multi Text',
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/multi-text/" target="_blank">docs.reduxframework.com/core/fields/multi-text/</a>',
        'fields'     => array(
            array(
                'id'       => 'opt-multitext',
                'type'     => 'multi_text',
                'title'    => __( 'Multi Text Option', 'redux-framework-demo' ),
                'subtitle' => __( 'Field subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Decription', 'redux-framework-demo' )
            ),
			array(
                'id'       => 'opt-multitext2',
                'type'     => 'multi_text',
                'title'    => __( 'Multi Text Option', 'redux-framework-demo' ),
                'subtitle' => __( 'Field subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Decription', 'redux-framework-demo' )
            ),
        )
    ) );