<?php

function nvmaw_customize_register($wp_customize) {
    /*
    ====================================================
     ----------------------SLIDESHOW
    ====================================================
    */
    
    $wp_customize->add_panel('slideshow', array(
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Slideshow',
        'description'    => 'Slideshow Section',
    ));
        
    /* /\/\/\/\/\/\/\/\/ SLIDE-1 /\\/\/\/\/\/\//\/\/\/\/\ */

            /* SLIDE-1 section */
            $wp_customize->add_section('slide_one', array(
                'title'         => __('Slide-1', 'nvmaw'),
                'description'   => sprintf(__('Options for the Slide-1', 'nvmaw')),
                'priority'      => 10,
                'panel'         => 'slideshow'
            ));
            /* SLIDE-1 HEADING: setting */
            $wp_customize->add_setting('slide_one_heading', array(
                'default'         => _x('Heading', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-1 HEADING: control */
            $wp_customize->add_control('slide_one_heading', array(
                'label'         => __('Heading', 'nvmaw'),
                'section'       => 'slide_one',
                'priority'      => 20
            ));
            /* SLIDE-1 DESCRIPTION: setting */
            $wp_customize->add_setting('slide_one_description', array(
                'default'         => _x('Description', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-1 DESCRIPTION: control */
            $wp_customize->add_control('slide_one_description', array(
                'label'         => __('Description', 'nvmaw'),
                'section'       => 'slide_one',
                'priority'      => 30
            ));
            /* SLIDE-1 BUTTON TEXT: setting */
            $wp_customize->add_setting('slide_one_button_text', array(
                'default'         => _x('Button Text', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-1 BUTTON TEXT: control */
            $wp_customize->add_control('slide_one_button_text', array(
                'label'         => __('Button URL', 'nvmaw'),
                'section'       => 'slide_one',
                'priority'      => 40
            ));
            /* SLIDE-1 BUTTON URL: setting */
            $wp_customize->add_setting('slide_one_button_url', array(
                'default'         => _x('Button URL', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-1 BUTTON URL: control */
            $wp_customize->add_control('slide_one_button_url', array(
                'label'         => __('Button URL', 'nvmaw'),
                'section'       => 'slide_one',
                'priority'      => 50
            ));
            /* SLIDE-1 IMAGE: setting */
            $wp_customize->add_setting('slide_one_image', array(
                'default'         => _x('URL', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-1 IMAGE: control */
            $wp_customize->add_control('slide_one_image', array(
                'label'         => __('Image URL', 'nvmaw'),
                'section'       => 'slide_one',
                'priority'      => 50
            ));
    /* /\/\/\/\/\/\/\/\/ SLIDE-2 /\\/\/\/\/\/\//\/\/\/\/\ */

            /* section */
            $wp_customize->add_section('slide_two', array(
                'title'         => __('Slide-2', 'nvmaw'),
                'description'   => sprintf(__('Options for Slide-2', 'nvmaw')),
                'priority'      => 20,
                'panel'         => 'slideshow'
            ));
            /* SLIDE-2 HEADING: setting */
            $wp_customize->add_setting('slide_two_heading', array(
                'default'         => _x('Heading', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-2 HEADING: control */
            $wp_customize->add_control('slide_two_heading', array(
                'label'         => __('Heading', 'nvmaw'),
                'section'       => 'slide_two',
                'priority'      => 20
            ));
            /* SLIDE-2 DESCRIPTION: setting */
            $wp_customize->add_setting('slide_two_description', array(
                'default'         => _x('Description', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-2 DESCRIPTION: control */
            $wp_customize->add_control('slide_two_description', array(
                'label'         => __('Description', 'nvmaw'),
                'section'       => 'slide_two',
                'priority'      => 20
            ));
            /* SLIDE-2 BUTTON TEXT: setting */
            $wp_customize->add_setting('slide_two_button_text', array(
                'default'         => _x('Button Text', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-2 BUTTON TEXT: control */
            $wp_customize->add_control('slide_two_button_text', array(
                'label'         => __('Button Text', 'nvmaw'),
                'section'       => 'slide_two',
                'priority'      => 20
            ));
            /* SLIDE-2 BUTTON URL: setting */
            $wp_customize->add_setting('slide_two_button_url', array(
                'default'         => _x('Button URL', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-2 BUTTON URL: control */
            $wp_customize->add_control('slide_two_button_url', array(
                'label'         => __('Button URL', 'nvmaw'),
                'section'       => 'slide_two',
                'priority'      => 20
            ));
            /* SLIDE-2 IMAGE: setting */
            $wp_customize->add_setting('slide_two_image', array(
                'default'         => _x('URL', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-2 IMAGE: control */
            $wp_customize->add_control('slide_two_image', array(
                'label'         => __('Image URL', 'nvmaw'),
                'section'       => 'slide_two',
                'priority'      => 50
            ));
    /* /\/\/\/\/\/\/\/\/ SLIDE-3 /\\/\/\/\/\/\//\/\/\/\/\ */

            /* section */
            $wp_customize->add_section('slide_three', array(
                'title'         => __('Slide-3', 'nvmaw'),
                'description'   => sprintf(__('Options for Slide-3', 'nvmaw')),
                'priority'      => 30,
                'panel'         => 'slideshow'
            ));
            /* SLIDE-3 HEADING: setting */
            $wp_customize->add_setting('slide_three_heading', array(
                'default'         => _x('Heading', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-3 HEADING: control */
            $wp_customize->add_control('slide_three_heading', array(
                'label'         => __('Heading', 'nvmaw'),
                'section'       => 'slide_three',
                'priority'      => 20
            ));
            /* SLIDE-3 DESCRIPTION: setting */
            $wp_customize->add_setting('slide_three_description', array(
                'default'         => _x('Description', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-3 DESCRIPTION: control */
            $wp_customize->add_control('slide_three_description', array(
                'label'         => __('Description', 'nvmaw'),
                'section'       => 'slide_three',
                'priority'      => 20
            ));
            /* SLIDE-3 BUTTON TEXT: setting */
            $wp_customize->add_setting('slide_three_button_text', array(
                'default'         => _x('Button Text', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-3 BUTTON TEXT: control */
            $wp_customize->add_control('slide_three_button_text', array(
                'label'         => __('Button Text', 'nvmaw'),
                'section'       => 'slide_three',
                'priority'      => 20
            ));
            /* SLIDE-3 BUTTON URL: setting */
            $wp_customize->add_setting('slide_three_button_url', array(
                'default'         => _x('Button URL', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-3 BUTTON URL: control */
            $wp_customize->add_control('slide_three_button_url', array(
                'label'         => __('Button URL', 'nvmaw'),
                'section'       => 'slide_three',
                'priority'      => 20
        ));
            /* SLIDE-3 IMAGE: setting */
            $wp_customize->add_setting('slide_three_image', array(
                'default'         => _x('URL', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* SLIDE-3 IMAGE: control */
            $wp_customize->add_control('slide_three_image', array(
                'label'         => __('Image URL', 'nvmaw'),
                'section'       => 'slide_three',
                'priority'      => 50
            ));


    
    /*
    ====================================================
        ----------------------SECTION ONE
    ====================================================
    */
            /* S1: section */
            $wp_customize->add_section('section_one', array(
                'title'         => __('Section One', 'nvmaw'),
                'description'   => sprintf(__('Options for Section One, the first section after the Slideshow', 'nvmaw')),
                'priority'      => 50
            ));
            /* S1: Heading setting */
            $wp_customize->add_setting('section_one_heading', array(
                'default'         => _x('Heading', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* S1: Heading control */
            $wp_customize->add_control('section_one_heading', array(
                'label'         => __('Heading', 'nvmaw'),
                'section'       => 'section_one',
                'priority'      => 20
            ));
            /* S1: Description setting */
            $wp_customize->add_setting('section_one_description', array(
                'default'         => _x('Description', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* S1: Description control */
            $wp_customize->add_control('section_one_description', array(
                'label'         => __('Description', 'nvmaw'),
                'section'       => 'section_one',
                'priority'      => 20
            ));
            /* S1: Image setting */
            $wp_customize->add_setting('section_one_image', array(
                'default'         => _x('Image URL', 'nvmaw'),
                'type'            => 'theme_mod'
            ));
            /* S1: Image control */
            $wp_customize->add_control('section_one_image', array(
                'label'         => __('Image URL', 'nvmaw'),
                'section'       => 'section_one',
                'priority'      => 20
            ));

    /*
    ====================================================
        ----------------------SECTION TWO
    ====================================================
    */
        $wp_customize->add_panel('section_two', array(
            'priority'       => 60,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => 'Section Two',
            'description'    => 'Options for Section Two, the area with the three boxes',
        ));  
    
    /* /\/\\/\/\/\\/\// BLOCK-1 /\/\\/\/\/\/\/\ */
        /* S2: Block-1 section */
        $wp_customize->add_section('block_one', array(
            'title'         => __('Block-1', 'nvmaw'),
            'description'   => sprintf(__('Options for Block-1', 'nvmaw')),
            'priority'      => 10,
            'panel'         => 'section_two'
        ));
        /* S2: Block-1 Heading -- setting */
        $wp_customize->add_setting('block_one_heading', array(
            'default'         => _x('Heading', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-1 Heading -- control */
        $wp_customize->add_control('block_one_heading', array(
            'label'         => __('Heading', 'nvmaw'),
            'section'       => 'block_one',
            'priority'      => 20
        ));
        /* S2: Block-1 Description -- setting */
        $wp_customize->add_setting('block_one_description', array(
            'default'         => _x('Description', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-1 Description -- control */
        $wp_customize->add_control('block_one_description', array(
            'label'         => __('Description', 'nvmaw'),
            'section'       => 'block_one',
            'priority'      => 20
        ));
        /* S2: Block-1 Image -- setting */
        $wp_customize->add_setting('block_one_image', array(
            'default'         => _x('Image URL', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-1 Image -- control */
        $wp_customize->add_control('block_one_image', array(
            'label'         => __('Image URL', 'nvmaw'),
            'section'       => 'block_one',
            'priority'      => 20
        ));
    /* /\/\\/\/\/\\/\// BLOCK-2 /\/\\/\/\/\/\/\ */
        /* S2: Block-2 section */
        $wp_customize->add_section('block_two', array(
            'title'         => __('Block-2', 'nvmaw'),
            'description'   => sprintf(__('Options for Block-2', 'nvmaw')),
            'priority'      => 20,
            'panel'         => 'section_two'
        ));
        /* S2: Block-2 Heading -- setting */
        $wp_customize->add_setting('block_two_heading', array(
            'default'         => _x('Heading', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-2 Heading -- control */
        $wp_customize->add_control('block_two_heading', array(
            'label'         => __('Heading', 'nvmaw'),
            'section'       => 'block_two',
            'priority'      => 20
        ));
        /* S2: Block-2 Description -- setting */
        $wp_customize->add_setting('block_two_description', array(
            'default'         => _x('Description', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-2 Description -- control */
        $wp_customize->add_control('block_two_description', array(
            'label'         => __('Description', 'nvmaw'),
            'section'       => 'block_two',
            'priority'      => 20
        ));
        /* S2: Block-2 Image -- setting */
        $wp_customize->add_setting('block_two_image', array(
            'default'         => _x('Image URL', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-2 Image -- control */
        $wp_customize->add_control('block_two_image', array(
            'label'         => __('Image URL', 'nvmaw'),
            'section'       => 'block_two',
            'priority'      => 20
        ));
    /* /\/\\/\/\/\\/\// BLOCK-3 /\/\\/\/\/\/\/\ */
        /* S2: Block-3 section */
        $wp_customize->add_section('block_three', array(
            'title'         => __('Block-3', 'nvmaw'),
            'description'   => sprintf(__('Options for Block-3', 'nvmaw')),
            'priority'      => 30,
            'panel'         => 'section_two'
        ));
        /* S2: Block-3 Heading -- setting */
        $wp_customize->add_setting('block_three_heading', array(
            'default'         => _x('Heading', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-3 Heading -- control */
        $wp_customize->add_control('block_three_heading', array(
            'label'         => __('Heading', 'nvmaw'),
            'section'       => 'block_three',
            'priority'      => 20
        ));
        /* S2: Block-3 Description -- setting */
        $wp_customize->add_setting('block_three_description', array(
            'default'         => _x('Description', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-3 Description -- control */
        $wp_customize->add_control('block_three_description', array(
            'label'         => __('Description', 'nvmaw'),
            'section'       => 'block_three',
            'priority'      => 20
        ));
        /* S2: Block-3 Image -- setting */
        $wp_customize->add_setting('block_three_image', array(
            'default'         => _x('Image URL', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S2: Block-3 Image -- control */
        $wp_customize->add_control('block_three_image', array(
            'label'         => __('Image URL', 'nvmaw'),
            'section'       => 'block_three',
            'priority'      => 20
        ));

    /*
    ====================================================
        ----------------------SECTION THREE
    ====================================================
    */
        /* S3: section */
        $wp_customize->add_section('section_three', array(
            'title'         => __('Section Three', 'nvmaw'),
            'description'   => sprintf(__('Options for Section Three, the section section with a Large Image', 'nvmaw')),
            'priority'      => 70
        ));
        /* S3: Heading setting */
        $wp_customize->add_setting('section_three_heading', array(
            'default'         => _x('Heading', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S3: Heading control */
        $wp_customize->add_control('section_three_heading', array(
            'label'         => __('Heading', 'nvmaw'),
            'section'       => 'section_three',
            'priority'      => 20
        ));
        /* S3: Description setting */
        $wp_customize->add_setting('section_three_description', array(
            'default'         => _x('Description', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S3: Description control */
        $wp_customize->add_control('section_three_description', array(
            'label'         => __('Description', 'nvmaw'),
            'section'       => 'section_three',
            'priority'      => 20
        ));
        /* S3: Image setting */
        $wp_customize->add_setting('section_three_image', array(
            'default'         => _x('Image URL', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S3: Image control */
        $wp_customize->add_control('section_three_image', array(
            'label'         => __('Image URL', 'nvmaw'),
            'section'       => 'section_three',
            'priority'      => 20
        ));

    /*
    ====================================================
        ----------------------SECTION FOUR
    ====================================================
    */
        /* S4: section */
        $wp_customize->add_section('section_four', array(
            'title'         => __('Section Four', 'nvmaw'),
            'description'   => sprintf(__('Options for Section Four, the first section after the second Large Image', 'nvmaw')),
            'priority'      => 80
        ));
        /* S4: Heading setting */
        $wp_customize->add_setting('section_four_heading', array(
            'default'         => _x('Heading', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S4: Heading control */
        $wp_customize->add_control('section_four_heading', array(
            'label'         => __('Heading', 'nvmaw'),
            'section'       => 'section_four',
            'priority'      => 20
        ));
        /* S4: Description setting */
        $wp_customize->add_setting('section_four_description', array(
            'default'         => _x('Description', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S4: Description control */
        $wp_customize->add_control('section_four_description', array(
            'label'         => __('Description', 'nvmaw'),
            'section'       => 'section_four',
            'priority'      => 20
        ));
        /* S4: Image setting */
        $wp_customize->add_setting('section_four_image', array(
            'default'         => _x('Image URL', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S4: Image control */
        $wp_customize->add_control('section_four_image', array(
            'label'         => __('Image URL', 'nvmaw'),
            'section'       => 'section_four',
            'priority'      => 20
        ));

    /*
    ====================================================
        ----------------------SECTION FIVE
    ====================================================
    */
    /* S5: section */
    $wp_customize->add_section('section_five', array(
        'title'         => __('Section Five', 'nvmaw'),
        'description'   => sprintf(__('Options for Section Five, the third section section with a Large Image', 'nvmaw')),
        'priority'      => 80
    ));
    /* S5: Heading setting */
    $wp_customize->add_setting('section_five_heading', array(
        'default'         => _x('Heading', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* S5: Heading control */
    $wp_customize->add_control('section_five_heading', array(
        'label'         => __('Heading', 'nvmaw'),
        'section'       => 'section_five',
        'priority'      => 20
    ));
    /* S5: Description setting */
    $wp_customize->add_setting('section_five_description', array(
        'default'         => _x('Description', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* S5: Description control */
    $wp_customize->add_control('section_five_description', array(
        'label'         => __('Description', 'nvmaw'),
        'section'       => 'section_five',
        'priority'      => 20
    ));
    /* S5: Image setting */
    $wp_customize->add_setting('section_five_image', array(
        'default'         => _x('Image URL', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* S5: Image control */
    $wp_customize->add_control('section_five_image', array(
        'label'         => __('Image URL', 'nvmaw'),
        'section'       => 'section_five',
        'priority'      => 20
    ));

    /*
    ====================================================
        ----------------------SECTION SIX
    ====================================================
    */
        /* S6: section */
        $wp_customize->add_section('section_six', array(
            'title'         => __('Section Six', 'nvmaw'),
            'description'   => sprintf(__('Options for Section Six, the last two-column section', 'nvmaw')),
            'priority'      => 90
        ));
        /* S6: Heading setting */
        $wp_customize->add_setting('section_six_heading', array(
            'default'         => _x('Heading', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S6: Heading control */
        $wp_customize->add_control('section_six_heading', array(
            'label'         => __('Heading', 'nvmaw'),
            'section'       => 'section_six',
            'priority'      => 20
        ));
        /* S6: Description setting */
        $wp_customize->add_setting('section_six_description', array(
            'default'         => _x('Description', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S6: Description control */
        $wp_customize->add_control('section_six_description', array(
            'label'         => __('Description', 'nvmaw'),
            'section'       => 'section_six',
            'priority'      => 20
        ));
        /* S6: Image setting */
        $wp_customize->add_setting('section_six_image', array(
            'default'         => _x('Image URL', 'nvmaw'),
            'type'            => 'theme_mod'
        ));
        /* S6: Image control */
        $wp_customize->add_control('section_six_image', array(
            'label'         => __('Image URL', 'nvmaw'),
            'section'       => 'section_six',
            'priority'      => 20
        ));

    /*
    ====================================================
        ----------------------SECTION SEVEN
    ====================================================
    */
    /* S7: section */
    $wp_customize->add_section('section_seven', array(
        'title'         => __('Section Seven', 'nvmaw'),
        'description'   => sprintf(__('Options for Section Seven, the Email Form section', 'nvmaw')),
        'priority'      => 92
    ));
    /* S7: Heading setting */
    $wp_customize->add_setting('section_seven_heading', array(
        'default'         => _x('Heading', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* S7: Heading control */
    $wp_customize->add_control('section_seven_heading', array(
        'label'         => __('Heading', 'nvmaw'),
        'section'       => 'section_seven',
        'priority'      => 20
    ));
    /* S7: Description setting */
    $wp_customize->add_setting('section_seven_description', array(
        'default'         => _x('Description', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* S7: Description control */
    $wp_customize->add_control('section_seven_description', array(
        'label'         => __('Description', 'nvmaw'),
        'section'       => 'section_seven',
        'priority'      => 20
    ));
    /* S7: Image setting */
    $wp_customize->add_setting('section_seven_image', array(
        'default'         => _x('Image URL', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* S7: Image control */
    $wp_customize->add_control('section_seven_image', array(
        'label'         => __('Image URL', 'nvmaw'),
        'section'       => 'section_seven',
        'priority'      => 20
    ));

    /*
    ====================================================
        ----------------------FOOTER 2
    ====================================================
    */

    $wp_customize->add_panel('footer_two', array(
        'priority'       => 95,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Footer Blocks',
        'description'    => 'Options for the Footer Blocks Section'
    ));

    /* /\/\/\/\/\/\/\/\/\ BLOCK 1 /\/\/\/\/\/\//\ */
    /* F2: section */
    $wp_customize->add_section('footer_two_block_one', array(
        'title'         => __('Block-1', 'nvmaw'),
        'description'   => sprintf(__('Options for the Footer Block-1', 'nvmaw')),
        'priority'      => 90,
        'panel'         => 'footer_two'
    ));
    /* F2: Block-1 Text setting */
    $wp_customize->add_setting('footer_two_block_one_text', array(
        'default'         => _x('Text', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* F2: Block-1 Text control */
    $wp_customize->add_control('footer_two_block_one_text', array(
        'label'         => __('Block 1', 'nvmaw'),
        'section'       => 'footer_two_block_one',
        'priority'      => 20
    ));
    /* F2: Block-1 Link setting */
    $wp_customize->add_setting('footer_two_block_one_url', array(
        'default'         => _x('URL', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* F2: Block-1 Link control */
    $wp_customize->add_control('footer_two_block_one_url', array(
        'label'         => __('Block 1 URL', 'nvmaw'),
        'section'       => 'footer_two_block_one',
        'priority'      => 20
    ));

    /* /\/\/\/\/\/\/\/\/\ BLOCK 2 /\/\/\/\/\/\//\ */

    /* F2: Block-2 section */
    $wp_customize->add_section('footer_two_block_two', array(
        'title'         => __('Block-2', 'nvmaw'),
        'description'   => sprintf(__('Options for the Footer Block-2', 'nvmaw')),
        'priority'      => 93,
        'panel'         => 'footer_two'
    ));
    /* F2: Block-2 Text setting */
    $wp_customize->add_setting('footer_two_block_two_text', array(
        'default'         => _x('Text', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* F2: Block-2 Text control */
    $wp_customize->add_control('footer_two_block_two_text', array(
        'label'         => __('Block 2', 'nvmaw'),
        'section'       => 'footer_two_block_two',
        'priority'      => 20
    ));
    /* F2: Block-2 Link setting */
    $wp_customize->add_setting('footer_two_block_two_url', array(
        'default'         => _x('URL', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* F2: Block-2 Link control */
    $wp_customize->add_control('footer_two_block_two_url', array(
        'label'         => __('Block 2 URL', 'nvmaw'),
        'section'       => 'footer_two_block_two',
        'priority'      => 30
    ));

    /* /\/\/\/\/\/\/\/\/\ BLOCK 3 /\/\/\/\/\/\//\ */

    /* F2: Block-3 section */
    $wp_customize->add_section('footer_two_block_three', array(
        'title'         => __('Block-3', 'nvmaw'),
        'description'   => sprintf(__('Options for the Footer Block-3', 'nvmaw')),
        'priority'      => 94,
        'panel'         => 'footer_two'
    ));
    /* F2: Block-2 Text setting */
    $wp_customize->add_setting('footer_two_block_three_text', array(
        'default'         => _x('Text', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* F2: Block-2 Text control */
    $wp_customize->add_control('footer_two_block_three_text', array(
        'label'         => __('Block 3', 'nvmaw'),
        'section'       => 'footer_two_block_three',
        'priority'      => 20
    ));
    /* F2: Block-3 Link setting */
    $wp_customize->add_setting('footer_two_block_three_url', array(
        'default'         => _x('URL', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* F2: Block-3 Link control */
    $wp_customize->add_control('footer_two_block_three_url', array(
        'label'         => __('Block 3 URL', 'nvmaw'),
        'section'       => 'footer_two_block_three',
        'priority'      => 40
    ));

    /* /\/\/\/\/\/\/\/\/\ BLOCK 4 /\/\/\/\/\/\//\ */

    /* F2: Block-4 section */
    $wp_customize->add_section('footer_two_block_four', array(
        'title'         => __('Block-4', 'nvmaw'),
        'description'   => sprintf(__('Options for the Footer Block-4', 'nvmaw')),
        'priority'      => 96,
        'panel'         => 'footer_two'
    ));
    /* F2: Block-4 Text setting */
    $wp_customize->add_setting('footer_two_block_four_text', array(
        'default'         => _x('Text', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* F2: Block-4 Text control */
    $wp_customize->add_control('footer_two_block_four_text', array(
        'label'         => __('Block 4', 'nvmaw'),
        'section'       => 'footer_two_block_four',
        'priority'      => 20
    ));
    /* F2: Block-4 Link setting */
    $wp_customize->add_setting('footer_two_block_four_url', array(
        'default'         => _x('URL', 'nvmaw'),
        'type'            => 'theme_mod'
    ));
    /* F2: Block-4 Link control */
    $wp_customize->add_control('footer_two_block_four_url', array(
        'label'         => __('Block 4 URL', 'nvmaw'),
        'section'       => 'footer_two_block_four',
        'priority'      => 50
    ));

}
add_action('customize_register', 'nvmaw_customize_register');