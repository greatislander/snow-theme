<?php
/**
 * @package big-idea
 */

$settings = (array) get_option ('a11y-theme-settings');
get_header(); ?>

    <main id="content" class="a11y-site-main small-12 columns">
        <div class="a11y-site-tagline">
            <h1><span>Learning with technology</span><br /> <span class="a11y-tagline-emphasis">since 1998</span></h1>
        </div>

        <div class="snow-container">
            <div class="flc-toc-tocContainer"></div>
        </div>

        <?php

            $sections = array(
                'introduction' => array(
                    'section_class' => 'snow-intro',
                    'widgets' => array(
                        'home' => 'snow-home',
                        'access' => 'access-site'
                    )
                ),
                'panels' => array(
                    'section_class' => 'row a11y-panel-container',
                    'widgets' => array(
                        'panel1' => 'a11y-front-panel1',
                        'panel2' => 'a11y-front-panel2',
                        'panel3' => 'a11y-front-panel3',
                    )
                )
            );
            add_widgets($sections, 'section');
        ?>

    </main>

<?php
get_footer();
