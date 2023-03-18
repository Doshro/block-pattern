<?php
/*
Plugin Name:    My WP Custom Block Patterns
Description:    Adds a custom block pattern to the Gutenberg block editor.
Version:        1.0
Author:         Ruku 
Author URI:     https://www.google.com
*/

function ruku_block_patterns() {
    // Registers category
    register_block_pattern_category(
		'Hero',
		array(
			'label'		=> __( 'Hero', 'block-pattern' )
		)
	);

    // Registers Hero  Cover Image first block
     register_block_pattern(
         'block-pattern/hero-cover-image',
        array(
            'title'       => __( 'Hero Cover Image', 'block-pattern' ),
            
            'description' => _x( 'This is the cover image for hero section', 'block-pattern' ),
            
            'content'     => "<!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/ef4c9950da35a93f9de166211f6d4418.jpeg\",\"id\":96,\"dimRatio\":50,\"isDark\":false} -->\r\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-96\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/ef4c9950da35a93f9de166211f6d4418.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\r\n<p class=\"has-text-align-center has-large-font-size\"></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"textColor\":\"background\"} -->\r\n<h2 class=\"has-background-color has-text-color\">At Home On All Roads</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"level\":6,\"textColor\":\"background\"} -->\r\n<h6 class=\"has-background-color has-text-color\">TRANSPORT COMPANY, SINCE 1925</h6>\r\n<!-- /wp:heading --></div></div>\r\n<!-- /wp:cover -->",
            
            'categories'  => array( 'Hero' ),
        )
    );

    
    // Registers block two cover image
    
    // register_block_pattern(
    //     'block-pattern/block-two',
    //     array(
    //         'title'       => __( 'Block2 ', 'block-pattern' ),
            
    //         'description' => _x( 'Nicepage block two cover image', 'block-pattern' ),
            
    //         'content'     => "<!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/f9510e97b7aed1551a0c6f2601cd044f.jpeg\",\"id\":112,\"dimRatio\":50,\"isDark\":false} -->\r\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-112\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/f9510e97b7aed1551a0c6f2601cd044f.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"className\":\"block2-coverimg\",\"fontSize\":\"large\"} -->\r\n<p class=\"has-text-align-center block2-coverimg has-large-font-size\"></p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:cover -->",
            
    //         'categories'  => array( 'Block2 Cover' ),
    //     )
    // );

    // Registers block two (column with cover image not included)

    register_block_pattern_category(
		'Block2',
		array(
			'label'		=> __( 'Block2', 'block-pattern' )
		)
	);
    register_block_pattern(
        'block-pattern/second-block',
        array(
            'title'       => __( 'nicepage second block ', 'block-pattern' ),
            
            'description' => _x( 'This is the second block', 'block-pattern' ),
            
            'content'     => "<!-- wp:media-text {\"className\":\"block2-container\"} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile block2-container\"><figure class=\"wp-block-media-text__media\"></figure><div class=\"wp-block-media-text__content\"><!-- wp:heading {\"level\":1,\"className\":\"block2-main-heading\"} -->\r\n<h1 class=\"block2-main-heading\">About Hermes</h1>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"level\":4,\"className\":\"block2-heading\"} -->\r\n<h4 class=\"block2-heading\">HERMES COMPANY<br>DELIVERS THE GOODS</h4>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>We are best known for our scheduled. We specialize in the shipment of dry goods. We price by the hundredweight or by the skid and deliver industry-leading transit times to and from the USA... including Alaska. It’s how our business started… and we do so much more!<br>Making life easier for the shipping community is a core company value. Polaris has developed complementary transportation services including</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#ff5126\"},\"border\":{\"radius\":\"0px\"}},\"className\":\"block2-button\"} -->\r\n<div class=\"wp-block-button block2-button\"><a class=\"wp-block-button__link has-background\" style=\"border-radius:0px;background-color:#ff5126\">READ MORE</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div></div>\r\n<!-- /wp:media-text -->",
            
            'categories'  => array( 'Block2' ),
        )
    );


    // Registers block3

    register_block_pattern_category(
		'Block3',
		array(
			'label'		=> __( 'Block3', 'block-pattern' )
		)
	);

    register_block_pattern(
        'block-pattern/third-block',
        array(
            'title'       => __( 'nicepage third block ', 'block-pattern' ),
            
            'description' => _x( 'This is the third block', 'block-pattern' ),
            
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/0e84c55db0cfa48d54fec9b7fed46a6a.jpeg\",\"id\":139,\"dimRatio\":50,\"minHeight\":440,\"minHeightUnit\":\"px\",\"isDark\":false} -->\r\n<div class=\"wp-block-cover is-light\" style=\"min-height:440px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-139\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/0e84c55db0cfa48d54fec9b7fed46a6a.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":4,\"textColor\":\"white\",\"className\":\"block3-heading1\",\"fontSize\":\"large\"} -->\r\n<h4 class=\"block3-heading1 has-white-color has-text-color has-large-font-size\">Ocean Freight</h4>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"textColor\":\"white\",\"className\":\"block3-para1\"} -->\r\n<p class=\"block3-para1 has-white-color has-text-color\">We treat our customers, employees and business partners with respect and our relationship with them is based on an open dialogue.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group --></div></div>\r\n<!-- /wp:cover --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/0b0a266ea58bfc89515d5362f1ec8320.jpeg\",\"id\":138,\"dimRatio\":50,\"isDark\":false} -->\r\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-138\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/0b0a266ea58bfc89515d5362f1ec8320.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:group {\"layout\":{\"type\":\"default\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"textColor\":\"white\",\"className\":\"block3-heading2\",\"fontSize\":\"large\"} -->\r\n<h2 class=\"block3-heading2 has-white-color has-text-color has-large-font-size\">Logistics</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"textColor\":\"white\",\"className\":\"block3-para2\"} -->\r\n<p class=\"block3-para2 has-white-color has-text-color\">We treat our customers, employees and business partners with respect and our relationship with them is based on an open dialogue.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group --></div></div>\r\n<!-- /wp:cover --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/b44e708bef1568a61a506283bd57bb10.jpeg\",\"id\":140,\"dimRatio\":50,\"isDark\":false} -->\r\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-140\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/b44e708bef1568a61a506283bd57bb10.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"textColor\":\"white\",\"className\":\"block3-heading3\",\"fontSize\":\"large\"} -->\r\n<h2 class=\"block3-heading3 has-white-color has-text-color has-large-font-size\">Air Freight</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"textColor\":\"white\",\"className\":\"block3-para3\"} -->\r\n<p class=\"block3-para3 has-white-color has-text-color\">We treat our customers, employees and business partners with respect and our relationship with them is based on an open dialogue.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group --></div></div>\r\n<!-- /wp:cover --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
            
            'categories'  => array( 'Block3' ),
        )
    );


    // Registers block4


    register_block_pattern_category(
		'Block4',
		array(
			'label'		=> __( 'Block4', 'block-pattern' )
		)
	);

    register_block_pattern(
        'block-pattern/fourth-block',
        array(
            'title'       => __( 'nicepage fourth block ', 'block-pattern' ),
            
            'description' => _x( 'This is the fourth block', 'block-pattern' ),
            
            'content'     => "<!-- wp:group {\"style\":{\"color\":{\"background\":\"#f2f2f2\"}},\"className\":\"block4-container\"} -->\r\n<div class=\"wp-block-group block4-container has-background\" style=\"background-color:#f2f2f2\"><!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"fontSize\":\"x-large\"} -->\r\n<h1 class=\"has-text-align-center has-x-large-font-size\">Why Choose Us</h1>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"21px\"}}} -->\r\n<p class=\"has-text-align-center\" style=\"font-size:21px\">OUR CORPORATE VALUES FORM THE BASIS <br>OF EVERYTHING WE DO.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:columns {\"className\":\"block4-first-row\"} -->\r\n<div class=\"wp-block-columns block4-first-row\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:media-text {\"mediaId\":163,\"mediaLink\":\"http://blockpattern.local/bookicon/\",\"mediaType\":\"image\",\"mediaWidth\":15,\"mediaSizeSlug\":\"thumbnail\"} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/bookicon-150x150.png\" alt=\"\" class=\"wp-image-163 size-thumbnail\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"style\":{\"typography\":{\"fontSize\":\"30px\"}}} -->\r\n<p style=\"font-size:30px\"><strong>Respectful</strong></p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:media-text -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\r\n<p style=\"font-size:15px\">We treat our customers, employees and business partners with respect and our relationship with them is based on an open dialogue. We keep our word and our promises. For us, respect and trust form the basis for working successfully with others.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:media-text {\"mediaId\":160,\"mediaLink\":\"http://blockpattern.local/paperplane/\",\"mediaType\":\"image\",\"mediaWidth\":15} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/paperplane.png\" alt=\"\" class=\"wp-image-160 size-full\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"style\":{\"typography\":{\"fontSize\":\"30px\"}}} -->\r\n<p style=\"font-size:30px\"><strong>Independent</strong></p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:media-text -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\r\n<p style=\"font-size:15px\">Through our entrepreneurial independence, we develop transparent, honest and optimal solutions for our customers.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:media-text {\"mediaId\":162,\"mediaLink\":\"http://blockpattern.local/headicon/\",\"mediaType\":\"image\",\"mediaWidth\":15} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/headicon.png\" alt=\"\" class=\"wp-image-162 size-full\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"style\":{\"typography\":{\"fontSize\":\"30px\"}}} -->\r\n<p style=\"font-size:30px\"><strong>Personal</strong></p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:media-text -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\r\n<p style=\"font-size:15px\">With energy, enthusiasm and expertise, we work hard every day on our customers behalf. For us, being close to our customers is an essential aspect of providing outstanding services.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:media-text {\"mediaId\":161,\"mediaLink\":\"http://blockpattern.local/clock/\",\"mediaType\":\"image\",\"mediaWidth\":15} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/clock.png\" alt=\"\" class=\"wp-image-161 size-full\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"style\":{\"typography\":{\"fontSize\":\"30px\"}}} -->\r\n<p style=\"font-size:30px\"><strong>Sustainable</strong></p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:media-text -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\r\n<p style=\"font-size:15px\">On all levels of our organization and business units, our aim is to add value and act responsibly. We work towards sustainable success and treat our company and its resources with care.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:group -->",
            
            'categories'  => array( 'Block4' ),
        )
    );


    // Registers block five

    register_block_pattern_category(
		'Block5',
		array(
			'label'		=> __( 'Block5', 'block-pattern' )
		)
	);

    register_block_pattern(
        'block-pattern/fifth-block',
        array(
            'title'       => __( 'nicepage fifth block ', 'block-pattern' ),
            
            'description' => _x( 'This is the fifth block', 'block-pattern' ),
            
            'content'     => "<!-- wp:columns {\"className\":\"Block5-container\"} -->\r\n<div class=\"wp-block-columns Block5-container\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/7c1a2e5da573a56185ec4d928a48e6aa.jpeg\",\"id\":172,\"dimRatio\":50} -->\r\n<div class=\"wp-block-cover\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-172\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/7c1a2e5da573a56185ec4d928a48e6aa.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\r\n<p class=\"has-text-align-center has-large-font-size\">Service With a Smile</p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:cover --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/6fe01550f9d5634d63cc3fb22568de2d.jpeg\",\"id\":171,\"dimRatio\":50,\"isDark\":false} -->\r\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-171\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/6fe01550f9d5634d63cc3fb22568de2d.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"textColor\":\"white\",\"fontSize\":\"large\"} -->\r\n<p class=\"has-text-align-center has-white-color has-text-color has-large-font-size\">Land Delivery by Truck</p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:cover --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/7f947c6e014d9fa4e9d4e57fb191bb29.jpeg\",\"id\":173,\"dimRatio\":50,\"isDark\":false} -->\r\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-173\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/7f947c6e014d9fa4e9d4e57fb191bb29.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"textColor\":\"white\",\"fontSize\":\"large\"} -->\r\n<p class=\"has-text-align-center has-white-color has-text-color has-large-font-size\">Land Delivery by Train</p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:cover --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
            
            'categories'  => array( 'Block5' ),
        )
    );


    // Registers block six

    register_block_pattern_category(
		'Block6',
		array(
			'label'		=> __( 'Block6', 'block-pattern' )
		)
	);

    register_block_pattern(
        'block-pattern/sixth-block',
        array(
            'title'       => __( 'nicepage sixth block ', 'block-pattern' ),
            
            'description' => _x( 'This is the sixth block', 'block-pattern' ),
            
            'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/6ae1441cba54f895e7522d4e1ccd0b5b.jpeg\",\"id\":189,\"dimRatio\":50,\"isDark\":false} -->\r\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-189\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/6ae1441cba54f895e7522d4e1ccd0b5b.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\r\n<p class=\"has-text-align-center has-large-font-size\"></p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:cover --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":191,\"sizeSlug\":\"thumbnail\",\"linkDestination\":\"none\",\"className\":\"is-style-rounded\"} -->\r\n<figure class=\"wp-block-image size-thumbnail is-style-rounded\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/quote-150x150.png\" alt=\"\" class=\"wp-image-191\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Hermes has proven to be a very dependable trucking company. This is highlighted by their excellent communication and sense of urgency on every shipment. Their dispatchers and customer service reps have proven to be very trustworthy and customer oriented. Bottom line I would recommend them to anybody looking for great rates and no excuses get it done service.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>NICK ANDERSON<br>B4 LOGISTICS, INC.</h2>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:group -->",
            
            'categories'  => array( 'Block6' ),
        )
    );

    // Registers block seven

    register_block_pattern_category(
		'Block7',
		array(
			'label'		=> __( 'Block7', 'block-pattern' )
		)
	);

    register_block_pattern(
        'block-pattern/seventh-block',
        array(
            'title'       => __( 'nicepage seventh block ', 'block-pattern' ),
            
            'description' => _x( 'This is the seventh block', 'block-pattern' ),
            
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"100%\",\"style\":{\"color\":{\"background\":\"#f1f1f1\"}}} -->\r\n<div class=\"wp-block-column has-background\" style=\"background-color:#f1f1f1;flex-basis:100%\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\",\"justifyContent\":\"space-between\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":187,\"width\":51,\"height\":29,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/882603788c2762c154bdd314c2f03288.png\" alt=\"\" class=\"wp-image-187\" width=\"51\" height=\"29\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":190,\"width\":35,\"height\":33,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/95703ed71a07b4386b41f598e167d03f.png\" alt=\"\" class=\"wp-image-190\" width=\"35\" height=\"33\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":186,\"width\":48,\"height\":27,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/310713b9e02d2e900505ef624d7e29ed.png\" alt=\"\" class=\"wp-image-186\" width=\"48\" height=\"27\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":185,\"width\":40,\"height\":37,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/2958df0add82c86901ed8826b021e199.png\" alt=\"\" class=\"wp-image-185\" width=\"40\" height=\"37\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":188,\"width\":67,\"height\":30,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/e38ce17501beb387e92c2414651650ce.png\" alt=\"\" class=\"wp-image-188\" width=\"67\" height=\"30\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":197,\"width\":37,\"height\":36,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/89c4eac27392b14b83e6b0037c64454e.png\" alt=\"\" class=\"wp-image-197\" width=\"37\" height=\"36\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
            
            'categories'  => array( 'Block7' ),
        )
    );




    register_block_pattern_category(
		'Block8',
		array(
			'label'		=> __( 'Block8', 'block-pattern' )
		)
	);

    register_block_pattern(
        'block-pattern/eighth-block',
        array(
            'title'       => __( 'nicepage eighth block ', 'block-pattern' ),
            
            'description' => _x( 'This is the eighth block', 'block-pattern' ),
            
            'content'     => "<!-- wp:group {\"layout\":{\"type\":\"flex\",\"orientation\":\"vertical\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1} -->\r\n<h1 class=\"has-text-align-center\">Contact Us Now To Get Quote For All Your </h1>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":1} -->\r\n<h1 class=\"has-text-align-center\">Global Shipping Needs</h1>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button {\"width\":100,\"style\":{\"color\":{\"background\":\"#ff5126\"},\"border\":{\"radius\":\"0px\"},\"typography\":{\"fontSize\":\"17px\"}},\"className\":\"is-style-fill\"} -->\r\n<div class=\"wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill\" style=\"font-size:17px\"><a class=\"wp-block-button__link has-background\" style=\"border-radius:0px;background-color:#ff5126\">READ MORE</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:group -->",
            
            'categories'  => array( 'Block8' ),
        )
    );


    register_block_pattern_category(
		'Block9',
		array(
			'label'		=> __( 'Block9', 'block-pattern' )
		)
	);

    register_block_pattern(
        'block-pattern/ninth-block',
        array(
            'title'       => __( 'nicepage ninth block ', 'block-pattern' ),
            
            'description' => _x( 'This is the ninth block', 'block-pattern' ),
            
            'content'     => "<!-- wp:cover {\"url\":\"http://blockpattern.local/wp-content/uploads/2022/10/c0a78be8f70644202aa35c1e30709754.jpeg\",\"id\":201,\"dimRatio\":50,\"customOverlayColor\":\"#111d27\"} -->\r\n<div class=\"wp-block-cover\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\" style=\"background-color:#111d27\"></span><img class=\"wp-block-cover__image-background wp-image-201\" alt=\"\" src=\"http://blockpattern.local/wp-content/uploads/2022/10/c0a78be8f70644202aa35c1e30709754.jpeg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"textColor\":\"white\"} -->\r\n<h1 class=\"has-text-align-center has-white-color has-text-color\">Staff Directory</h1>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"white\"} -->\r\n<h3 class=\"has-text-align-center has-white-color has-text-color\">WHO GIVES IT\'S PERSONALITY?<br></h3>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\"} -->\r\n<p class=\"has-text-align-center\">When we say we provide “worry-free transportation with personality,” we mean it—and these<br> are the people who provide it! We work hard every day to be the most personable and<br> responsive logistics provider in the transportation industry.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:group {\"textColor\":\"white\",\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\",\"justifyContent\":\"space-between\"}} -->\r\n<div class=\"wp-block-group has-white-color has-text-color\"><!-- wp:image {\"id\":199,\"sizeSlug\":\"thumbnail\",\"linkDestination\":\"none\",\"className\":\"is-style-rounded\"} -->\r\n<figure class=\"wp-block-image size-thumbnail is-style-rounded\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/017d071ec905c8b59b07af2bb8e28311-150x150.jpeg\" alt=\"\" class=\"wp-image-199\"/><figcaption>BRIAN WOLF<br>Dispatch</figcaption></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image {\"id\":198,\"sizeSlug\":\"thumbnail\",\"linkDestination\":\"none\",\"className\":\"is-style-rounded\"} -->\r\n<figure class=\"wp-block-image size-thumbnail is-style-rounded\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/02a1c2efb69157b671fe250415edf429-150x150.jpeg\" alt=\"\" class=\"wp-image-198\"/><figcaption>KATE JHONSON<br>Director</figcaption></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image {\"id\":202,\"sizeSlug\":\"thumbnail\",\"linkDestination\":\"none\",\"className\":\"is-style-rounded\"} -->\r\n<figure class=\"wp-block-image size-thumbnail is-style-rounded\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/de509627afec3e8283d150634a74395c-150x150.jpeg\" alt=\"\" class=\"wp-image-202\"/><figcaption>MIKE SCAVO<br>Director</figcaption></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image {\"id\":200,\"sizeSlug\":\"thumbnail\",\"linkDestination\":\"none\",\"className\":\"is-style-rounded\"} -->\r\n<figure class=\"wp-block-image size-thumbnail is-style-rounded\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/bded043ad44af2687e14a2c7fd95c98a-150x150.jpeg\" alt=\"\" class=\"wp-image-200\"/><figcaption>LINDA HUDSON<br>Manager</figcaption></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:group --></div></div>\r\n<!-- /wp:cover -->",
            
            'categories'  => array( 'Block9' ),
        )
    );


    register_block_pattern_category(
		'Block10',
		array(
			'label'		=> __( 'Block10', 'block-pattern' )
		)
	);


    register_block_pattern(
        'block-pattern/tenth-block',
        array(
            'title'       => __( 'nicepage tenth block ', 'block-pattern' ),
            
            'description' => _x( 'This is the tenth block', 'block-pattern' ),
            
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"66.66%\"} -->\r\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:image {\"id\":265,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-large\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/6b54f76614e4fde2dd479b578c3f8611-1024x576.jpeg\" alt=\"\" class=\"wp-image-265\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"width\":\"33.33%\"} -->\r\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:heading {\"level\":1} -->\r\n<h1>We Are Hermes</h1>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>A FORWARD-LOOKING APPROACH TO BUSINESS</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Corporate social responsibility is important to us. We believe that taking economic, environmental and social factors into consideration leads to long-term business success. This approach has a long history at Schneider, as we have more than 150 years of experience.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button {\"width\":75,\"style\":{\"color\":{\"background\":\"#ff5126\"},\"border\":{\"radius\":\"0px\"},\"typography\":{\"fontSize\":\"14px\"}},\"className\":\"is-style-fill\"} -->\r\n<div class=\"wp-block-button has-custom-width wp-block-button__width-75 has-custom-font-size is-style-fill\" style=\"font-size:14px\"><a class=\"wp-block-button__link has-background\" style=\"border-radius:0px;background-color:#ff5126\">READ MORE</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
            
            'categories'  => array( 'Block10' ),
        )
    );


    register_block_pattern_category(
		'Block11',
		array(
			'label'		=> __( 'Block11', 'block-pattern' )
		)
	);


    register_block_pattern(
        'block-pattern/eleventh-block',
        array(
            'title'       => __( 'nicepage  block eleven ', 'block-pattern' ),
            
            'description' => _x( 'This is the eleventh block', 'block-pattern' ),
            
            'content'     => "<!-- wp:group {\"style\":{\"color\":{\"background\":\"#f2f2f2\"}}} -->\r\n<div class=\"wp-block-group has-background\" style=\"background-color:#f2f2f2\"><!-- wp:group {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"background\":\"#f2f2f2\"}}} -->\r\n<div class=\"wp-block-group has-background\" style=\"background-color:#f2f2f2;font-size:15px\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"fontSize\":\"large\"} -->\r\n<h1 class=\"has-text-align-center has-large-font-size\">Contact Us</h1>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"medium\"} -->\r\n<p class=\"has-text-align-center has-medium-font-size\">OUR CORPORATE VALUES FORM THE BASIS<br> OF EVERYTHING WE DO.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:columns {\"style\":{\"color\":{\"background\":\"#f2f2f2\"}}} -->\r\n<div class=\"wp-block-columns has-background\" style=\"background-color:#f2f2f2\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":269,\"width\":57,\"height\":57,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/location-pin.png\" alt=\"\" class=\"wp-image-269\" width=\"57\" height=\"57\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":5} -->\r\n<h5>BASEL<br></h5>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Schneider + Cie AG\&nbsp;<br>Solothurnerstrasse 48\&nbsp;<br>Postfach 4273\&nbsp;<br>CH-4002 Basel<br>Tel\&nbsp; +41 61 365 96 90<br>Fax +41 61 365 97 86</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":269,\"width\":59,\"height\":59,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/location-pin.png\" alt=\"\" class=\"wp-image-269\" width=\"59\" height=\"59\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":5} -->\r\n<h5>BASEL CUSTOMS</h5>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"}}} -->\r\n<p style=\"font-size:12px\">Schneider + Cie AG<br>Neudorfstrasse<br>Parking Tir<br>CH-4056 Basel<br>Tel. +41 61 322 72 22    <br>Fax +41 61 322 72 30</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":269,\"width\":55,\"height\":55,\"sizeSlug\":\"thumbnail\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-thumbnail is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/location-pin-150x150.png\" alt=\"\" class=\"wp-image-269\" width=\"55\" height=\"55\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":5} -->\r\n<h5>GENEVA</h5>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Schneider + Cie SA\&nbsp;<br>Route des Moulières 5\&nbsp;\&nbsp;<br>CH-1242\&nbsp;Satigny<br>Tel. +41 22 989 10 50\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>Fax +41 22 782 51 62</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":269,\"width\":58,\"height\":58,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/location-pin.png\" alt=\"\" class=\"wp-image-269\" width=\"58\" height=\"58\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":5} -->\r\n<h5>ZURICH</h5>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Schneider + Cie AG<br>Hermetschloostrasse 77\&nbsp;\&nbsp;\&nbsp;<br>CH - 8048 Zürich<br>Tel. +41 44 405 27 27\&nbsp;\&nbsp;\&nbsp;<br>Fax +41 44 492 01 67</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:columns {\"style\":{\"color\":{\"background\":\"#f2f2f2\"}}} -->\r\n<div class=\"wp-block-columns has-background\" style=\"background-color:#f2f2f2\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":269,\"width\":61,\"height\":61,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/location-pin.png\" alt=\"\" class=\"wp-image-269\" width=\"61\" height=\"61\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":5} -->\r\n<h5>ZURICH AIRPORT</h5>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Schneider + Cie AG\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>Oberfeldstr. 12c\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>Postfach\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>CH- 8302 Kloten<br>Tel. +41 44 800 17 17\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>Fax +41 44 800 17 18</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":269,\"width\":64,\"height\":64,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/location-pin.png\" alt=\"\" class=\"wp-image-269\" width=\"64\" height=\"64\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"level\":5} -->\r\n<h5>ZURICH COURIER</h5>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Schneider + Cie AG\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>Zürich-Kurier /OCS<br>Fracht West, Büro 3-375\&nbsp;\&nbsp;\&nbsp;<br>Postfach\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>CH- 8058 Zürich-Flughafen<br>Tel. +41 43 816 29 37\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>Fax +41 43 816 40 20</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":269,\"width\":62,\"height\":62,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/location-pin.png\" alt=\"\" class=\"wp-image-269\" width=\"62\" height=\"62\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"level\":5} -->\r\n<h5>WEIL AM RHEIN</h5>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Schneider + Cie AG\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>Autobahnzollamt<br>3. Stock Zi 311<br>Im Kränzliacker 22\&nbsp;\&nbsp;\&nbsp; \&nbsp;\&nbsp;\&nbsp;<br>D-79576 Weil am Rhein<br>Tel. +41 61 638 88 44\&nbsp;\&nbsp;\&nbsp;\&nbsp;<br>Fax +41 61 631 55 09</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":269,\"width\":60,\"height\":60,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://blockpattern.local/wp-content/uploads/2022/10/location-pin.png\" alt=\"\" class=\"wp-image-269\" width=\"60\" height=\"60\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"level\":5} -->\r\n<h5>PRATTELN</h5>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:group -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Schneider + Cie AG\&nbsp;Güterstrasse 59CH-4133 Pratteln<br>Tel. +41 61 827 44 20<br>Fax +41 61 827 44 34</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:group -->",
            
            'categories'  => array( 'Block11' ),
        )
    );



   

    

    // register_block_pattern_category(
	// 	'Block4',
	// 	array(
	// 		'label'		=> __( 'Block4', 'block-pattern' )
	// 	)
	// );


    // register_block_pattern(
    //     'block-pattern/fourth-block',
    //     array(
    //         'title'       => __( 'nicepage fourth block ', 'block-pattern' ),
            
    //         'description' => _x( 'This is the fourth block', 'block-pattern' ),
            
    //         'content'     => "",
            
    //         'categories'  => array( 'Block4' ),
    //     )
    // );


    
}    

add_action( 'init', 'ruku_block_patterns' );