<?php

/**
 * Defines customizer options
 *
 * @package Customizer Library Elation
 */
function elation_customizer_library_options()
{
    $primary_color = '#4e87d8';
    $secondary_color = '#0b53b9';
    $fontweight_choices = array(
        '200' => __( '200', 'elation' ),
        '300' => __( '300', 'elation' ),
        '400' => __( '400', 'elation' ),
        '500' => __( '500', 'elation' ),
        '600' => __( '600', 'elation' ),
        '700' => __( '700', 'elation' ),
        '900' => __( '900', 'elation' ),
    );
    $seo_element_choices = array(
        'h1'   => __( 'H1', 'elation' ),
        'h2'   => __( 'H2', 'elation' ),
        'h3'   => __( 'H3', 'elation' ),
        'h4'   => __( 'H4', 'elation' ),
        'h5'   => __( 'H5', 'elation' ),
        'h6'   => __( 'H6', 'elation' ),
        'div'  => __( 'div', 'elation' ),
        'span' => __( 'span', 'elation' ),
        'p'    => __( 'P', 'elation' ),
    );
    // Stores all the controls that will be added
    $options = array();
    // Stores all the sections to be added
    $sections = array();
    // Stores all the panels to be added
    $panels = array();
    // Adds the sections to the $options array
    $options['sections'] = $sections;
    // ------------------------------------------------------------------------------------------- title_tagline
    $section = 'title_tagline';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Site Identity', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
    );
    $options['elation-uploaded-logo'] = array(
        'id'          => 'elation-uploaded-logo',
        'label'       => __( 'Elation Logo Settings', 'elation' ),
        'section'     => $section,
        'type'        => 'checkbox',
        'default'     => 0,
        'description' => __( 'Enable only once a logo is uploaded', 'elation' ),
    );
    $options['elation-logo-max-width'] = array(
        'id'      => 'elation-logo-max-width',
        'label'   => __( 'Set a max-width for the logo', 'elation' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['elation-add-back-title'] = array(
        'id'      => 'elation-add-back-title',
        'label'   => __( 'Add the Site Title', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-add-back-tagline'] = array(
        'id'      => 'elation-add-back-tagline',
        'label'   => __( 'Add the Site Tagline', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-logo-align-side'] = array(
        'id'      => 'elation-logo-align-side',
        'label'   => __( 'Align the Logo and Titles Side by Side', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'top'    => __( 'Top', 'elation' ),
        'middle' => __( 'Middle', 'elation' ),
        'bottom' => __( 'Bottom', 'elation' ),
    );
    $options['elation-logo-alignment'] = array(
        'id'      => 'elation-logo-alignment',
        'label'   => __( 'Logo Alignment', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'middle',
    );
    $rangedefault = get_theme_mod( 'elation-logo-title-spacing', 15 );
    $options['elation-logo-title-spacing'] = array(
        'id'          => 'elation-logo-title-spacing',
        'label'       => __( 'Logo & Site Title Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 80,
        'step' => 1,
    ),
        'default'     => 15,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">80</span>',
    );
    // ------------------------------------------------------------------------------------------- title_tagline
    // ---------------- PANEL - Theme Settings
    $panel = 'elation-panel-settings';
    $panels[] = array(
        'id'       => $panel,
        'title'    => __( 'Elation Theme Settings', 'elation' ),
        'priority' => '30',
    );
    // ------------------------------------------------------------------------------------------- Site Breakpoints
    $section = 'elation-panel-settings-breakpoints';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Site Breakpoints', 'elation' ),
        'priority'    => '10',
        'panel'       => $panel,
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
    );
    $options['elation-responsive-disable'] = array(
        'id'      => 'elation-responsive-disable',
        'label'   => __( 'Disable Responsiveness', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-tablet-breakat'] = array(
        'id'      => 'elation-tablet-breakat',
        'label'   => __( 'Tablet Breakpoint', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => '980',
    );
    $options['elation-mobile-breakat'] = array(
        'id'      => 'elation-mobile-breakat',
        'label'   => __( 'Mobile Breakpoint', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => '782',
    );
    $choices = array(
        'always' => __( 'Always On', 'elation' ),
        'tablet' => __( 'Tablet', 'elation' ),
        'mobile' => __( 'Mobile', 'elation' ),
        'custom' => __( 'Custom', 'elation' ),
    );
    $options['elation-menu-breakat'] = array(
        'id'      => 'elation-menu-breakat',
        'label'   => __( 'Menu Breakpoint', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'tablet',
    );
    $options['elation-menu-custom-breakat'] = array(
        'id'      => 'elation-menu-custom-breakat',
        'label'   => __( 'Enter the breakpoint size for mobile menu', 'elation' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 782,
    );
    $options['elation-note-toedit-mobile'] = array(
        'id'          => 'elation-note-toedit-mobile',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Edit Elation <a href="#elation-panel-mobile-settings" rel="tc-panel" class="el-interlink">Mobile Settings</a>', 'elation' ),
    );
    // ------------------------------------------------------------------------------------------- Site Breakpoints
    // ------------------------------------------------------------------------------------------- SEO Extra
    $section = 'elation-panel-settings-seo';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Search Engine Optimization (SEO)', 'elation' ),
        'priority'    => '10',
        'panel'       => $panel,
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
    );
    $options['elation-noteon-seo'] = array(
        'id'          => 'elation-noteon-seo',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Select what HTML tag you want the following elements to be.', 'elation' ),
    );
    $options['elation-seo-site-title'] = array(
        'id'      => 'elation-seo-site-title',
        'label'   => __( 'Site Title', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $seo_element_choices,
        'default' => 'p',
    );
    $options['elation-seo-site-tagline'] = array(
        'id'      => 'elation-seo-site-tagline',
        'label'   => __( 'Site Tagline', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $seo_element_choices,
        'default' => 'p',
    );
    $options['elation-seo-page-title'] = array(
        'id'      => 'elation-seo-page-title',
        'label'   => __( 'Page Titles', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $seo_element_choices,
        'default' => 'h3',
    );
    $options['elation-seo-bloglist-title'] = array(
        'id'      => 'elation-seo-bloglist-title',
        'label'   => __( 'Blog List Titles', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $seo_element_choices,
        'default' => 'h3',
    );
    $options['elation-seo-widget-title'] = array(
        'id'      => 'elation-seo-widget-title',
        'label'   => __( 'Sidebar & Footer - Widget Titles', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $seo_element_choices,
        'default' => 'h4',
    );
    // ------------------------------------------------------------------------------------------- SEO Extra
    // ------------------------------------------------------------------------------------------- Page Templates
    $section = 'elation-panel-settings-section-pages';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Page Templates', 'elation' ),
        'priority'    => '10',
        'panel'       => $panel,
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
    );
    $options['elation-layout-heading-page'] = array(
        'id'          => 'elation-layout-heading-page',
        'label'       => __( 'Pages', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Content Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
    );
    $choices = array(
        'elation-page-rs'  => __( 'Right Sidebar', 'elation' ),
        'elation-page-ls'  => __( 'Left Sidebar', 'elation' ),
        'elation-page-fw'  => __( 'Full Width', 'elation' ),
        'elation-page-frs' => __( 'Floating Right Sidebar', 'elation' ),
        'elation-page-fls' => __( 'Floating Left Sidebar', 'elation' ),
    );
    $options['elation-page-layout'] = array(
        'id'      => 'elation-page-layout',
        'label'   => __( 'New Page - Default Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-page-rs',
    );
    $options['elation-site-remove-editlink'] = array(
        'id'      => 'elation-site-remove-editlink',
        'label'   => __( 'Remove Edit Links on Posts & Pages', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-layout-heading-blog'] = array(
        'id'          => 'elation-layout-heading-blog',
        'label'       => __( 'Blog Pages', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-admin-generic el-settings"></a>',
    );
    $choices = array(
        'elation-blog-rs'  => __( 'Right Sidebar', 'elation' ),
        'elation-blog-ls'  => __( 'Left Sidebar', 'elation' ),
        'elation-blog-fw'  => __( 'Full Width', 'elation' ),
        'elation-blog-frs' => __( 'Floating Right Sidebar', 'elation' ),
        'elation-blog-fls' => __( 'Floating Left Sidebar', 'elation' ),
    );
    $options['elation-blog-layout'] = array(
        'id'      => 'elation-blog-layout',
        'label'   => __( 'List / Archives Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-blog-rs',
    );
    $choices = array(
        'elation-blog-post-rs'  => __( 'Right Sidebar', 'elation' ),
        'elation-blog-post-ls'  => __( 'Left Sidebar', 'elation' ),
        'elation-blog-post-fw'  => __( 'Full Width', 'elation' ),
        'elation-blog-post-frs' => __( 'Floating Right Sidebar', 'elation' ),
        'elation-blog-post-fls' => __( 'Floating Left Sidebar', 'elation' ),
    );
    $options['elation-blog-post-layout'] = array(
        'id'      => 'elation-blog-post-layout',
        'label'   => __( 'Single Post - Default Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-blog-post-rs',
    );
    $choices = array(
        'elation-blog-search-rs'  => __( 'Right Sidebar', 'elation' ),
        'elation-blog-search-ls'  => __( 'Left Sidebar', 'elation' ),
        'elation-blog-search-fw'  => __( 'Full Width', 'elation' ),
        'elation-blog-search-frs' => __( 'Floating Right Sidebar', 'elation' ),
        'elation-blog-search-fls' => __( 'Floating Left Sidebar', 'elation' ),
    );
    $options['elation-blog-search-layout'] = array(
        'id'      => 'elation-blog-search-layout',
        'label'   => __( 'Search Results Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-blog-search-rs',
    );
    // ------------------------------------------------------------------------------------------- Page Templates
    // ------------------------------------------------------------------------------------------- Site Layout
    $section = 'elation-panel-settings-section-site';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Site Layout', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
        'panel'       => $panel,
    );
    $rangedefault = get_theme_mod( 'elation-site-container-width', 1200 );
    $options['elation-site-container-width'] = array(
        'id'          => 'elation-site-container-width',
        'label'       => __( 'Website Width', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 900,
        'max'  => 1400,
        'step' => 1,
    ),
        'default'     => 1200,
        'description' => '<span class="fst">900</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">1400</span>',
    );
    $choices = array(
        'elation-site-boxed'              => __( 'Boxed Layout', 'elation' ),
        'elation-site-full-width'         => __( 'Full Width Layout', 'elation' ),
        'elation-site-full-width-blocked' => __( 'Full Width Blocked Layout', 'elation' ),
    );
    $options['elation-site-layout'] = array(
        'id'      => 'elation-site-layout',
        'label'   => __( 'Site Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-site-full-width',
    );
    $choices = array(
        'elation-shadow-default' => __( 'Default / Large', 'elation' ),
        'elation-shadow-one'     => __( 'Medium', 'elation' ),
        'elation-shadow-two'     => __( 'Small', 'elation' ),
        'elation-shadow-three'   => __( 'Smaller', 'elation' ),
        'elation-shadow-border'  => __( 'Borders', 'elation' ),
        'elation-shadow-none'    => __( 'None', 'elation' ),
    );
    $options['elation-site-shadows'] = array(
        'id'      => 'elation-site-shadows',
        'label'   => __( 'Site Shadows', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-shadow-default',
    );
    $options['elation-break-content'] = array(
        'id'      => 'elation-break-content',
        'label'   => __( 'Break Content & Widget areas apart', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-break-widgets'] = array(
        'id'      => 'elation-break-widgets',
        'label'   => __( 'Break Widgets apart', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-set-topbar-fullwidth'] = array(
        'id'      => 'elation-set-topbar-fullwidth',
        'label'   => __( 'Set Top Bar to Full Width', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-set-header-fullwidth'] = array(
        'id'      => 'elation-set-header-fullwidth',
        'label'   => __( 'Set Header to Full Width', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-set-content-fullwidth'] = array(
        'id'      => 'elation-set-content-fullwidth',
        'label'   => __( 'Set All Content Areas to Full Width', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-set-footer-fullwidth'] = array(
        'id'      => 'elation-set-footer-fullwidth',
        'label'   => __( 'Set Footer to Full Width', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-set-bottombar-fullwidth'] = array(
        'id'      => 'elation-set-bottombar-fullwidth',
        'label'   => __( 'Set Bottom Bar to Full Width', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Site Layout
    // ------------------------------------------------------------------------------------------- Header
    $section = 'elation-panel-settings-section-header';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Header', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
        'panel'       => $panel,
    );
    $options['elation-note-edit-mobile'] = array(
        'id'          => 'elation-note-edit-mobile',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Ajust the following header settings, then <a href="#elation-panel-mobile-settings" rel="tc-panel" class="el-interlink">Edit the Mobile Settings</a> <a href="#elation-panel-social-section-links" rel="tc-section" class="el-interlink">Add Social Links</a>', 'elation' ),
    );
    $options['elation-add-topbar'] = array(
        'id'          => 'elation-add-topbar',
        'label'       => __( 'Header Top Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'checkbox',
        'description' => '<a href="#elation-panel-font-settings-section-header" rel="tc-section" title="Edit Top Bar Font Settings" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-topbar" rel="tc-section" title="Edit Top Bar Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-header" rel="tc-section" title="Edit Header Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
        'default'     => 0,
    );
    $options['elation-topbar-switch'] = array(
        'id'      => 'elation-topbar-switch',
        'label'   => __( 'Switch Top Bar', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-topbar-centered'] = array(
        'id'      => 'elation-topbar-centered',
        'label'   => __( 'Center Top Bar Items', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-note-topbar-turnon'] = array(
        'id'          => 'elation-note-topbar-turnon',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Turn on the Header Top Bar for extra <a href="#elation-panel-edit-text-section-topbar" rel="tc-section">header details</a>, <a href="#elation-panel-social-section-links" rel="tc-section">Social Links</a> and menus.', 'elation' ),
    );
    $options['elation-header-remove-social'] = array(
        'id'      => 'elation-header-remove-social',
        'label'   => __( 'Remove Social Icons', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-header-remove-number'] = array(
        'id'      => 'elation-header-remove-number',
        'label'   => __( 'Remove Phone Number', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-header-remove-address'] = array(
        'id'      => 'elation-header-remove-address',
        'label'   => __( 'Remove Address', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-add-topbar-search'] = array(
        'id'      => 'elation-add-topbar-search',
        'label'   => __( 'Add Top Bar Search', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    if ( class_exists( 'WooCommerce' ) ) {
        $options['elation-header-add-topcart'] = array(
            'id'      => 'elation-header-add-topcart',
            'label'   => __( 'Add WooCommerce Cart', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
    }
    $rangedefault = get_theme_mod( 'elation-topbar-spacing-top', 5 );
    $options['elation-topbar-spacing-top'] = array(
        'id'          => 'elation-topbar-spacing-top',
        'label'       => __( 'Spacing above Top Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1,
        'max'  => 100,
        'step' => 1,
    ),
        'default'     => 5,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>',
    );
    $rangedefault = get_theme_mod( 'elation-topbar-spacing-bottom', 5 );
    $options['elation-topbar-spacing-bottom'] = array(
        'id'          => 'elation-topbar-spacing-bottom',
        'label'       => __( 'Spacing below Top Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1,
        'max'  => 100,
        'step' => 1,
    ),
        'default'     => 5,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>',
    );
    $options['elation-layout-heading-header'] = array(
        'id'          => 'elation-layout-heading-header',
        'label'       => __( 'Header', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-header" rel="tc-section" title="Edit Header Font Settings" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-topbar" rel="tc-section" title="Edit Header Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-header" rel="tc-section" title="Edit Header Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
    );
    $options['elation-note-header-logo'] = array(
        'id'          => 'elation-note-header-logo',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Upload a Site Logo under <a href="#title_tagline" rel="tc-section" class="el-interlink">Site Identity</a>', 'elation' ),
    );
    $options['elation-header-centered-layout'] = array(
        'id'      => 'elation-header-centered-layout',
        'label'   => __( 'Change to Centered Layout', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'align-center' => __( 'Center Aligned', 'elation' ),
        'align-left'   => __( 'Left Aligned', 'elation' ),
        'align-right'  => __( 'Right Aligned', 'elation' ),
    );
    $options['elation-header-align'] = array(
        'id'      => 'elation-header-align',
        'label'   => __( 'Header Alignment', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'align-center',
    );
    $choices = array(
        'elation-search-slide'            => __( 'Search Button - Slide Down', 'elation' ),
        'elation-search-fade'             => __( 'Search Button - Fade In', 'elation' ),
        'elation-search-always'           => __( 'Always Showing', 'elation' ),
        'elation-search-full'             => __( 'Overlay on Site', 'elation' ),
        'elation-search-full-txt'         => __( 'Text overlay on Site', 'elation' ),
        'elation-search-plugin-shortcode' => __( 'Plugin Shortcode', 'elation' ),
    );
    $options['elation-header-search-type'] = array(
        'id'      => 'elation-header-search-type',
        'label'   => __( 'Search Type', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-search-slide',
    );
    $options['elation-search-shortcode'] = array(
        'id'      => 'elation-search-shortcode',
        'label'   => __( 'Shortcode', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-search-shortcode-help'] = array(
        'id'          => 'elation-search-shortcode-help',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Enter the shortcode provided by a more advanced search plugin of your choice.', 'elation' ),
    );
    
    if ( class_exists( 'WooCommerce' ) ) {
        $choices = array(
            'total-items' => __( '$20.00 (4 items)', 'elation' ),
            'total-count' => __( '$20.00 (4)', 'elation' ),
            'only-total'  => __( '$20.00', 'elation' ),
            'only-items'  => __( '5 items', 'elation' ),
            'count-only'  => __( '(5)', 'elation' ),
        );
        $options['elation-wc-cart'] = array(
            'id'      => 'elation-wc-cart',
            'label'   => __( 'Cart Design', 'elation' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'total-items',
        );
    }
    
    $rangedefault = get_theme_mod( 'elation-header-spacing-top', 5 );
    $options['elation-header-spacing-top'] = array(
        'id'          => 'elation-header-spacing-top',
        'label'       => __( 'Header Inner Top Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 120,
        'step' => 1,
    ),
        'default'     => 5,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">120</span>',
    );
    $rangedefault = get_theme_mod( 'elation-header-spacing-bottom', 5 );
    $options['elation-header-spacing-bottom'] = array(
        'id'          => 'elation-header-spacing-bottom',
        'label'       => __( 'Header Inner Bottom Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 120,
        'step' => 1,
    ),
        'default'     => 5,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">120</span>',
    );
    $rangedefault = get_theme_mod( 'elation-content-spacing-top', 60 );
    $options['elation-content-spacing-top'] = array(
        'id'          => 'elation-content-spacing-top',
        'label'       => __( 'Spacing Below Header', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1,
    ),
        'default'     => 60,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>',
    );
    // Header Background Image
    $options['elation-add-header-bgimg'] = array(
        'id'      => 'elation-add-header-bgimg',
        'label'   => __( 'Header Background Image', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-header-bgimg'] = array(
        'id'          => 'elation-header-bgimg',
        'label'       => __( 'Header Background Image', 'elation' ),
        'section'     => $section,
        'type'        => 'image',
        'description' => __( 'Note this works better as a long horizontal image.', 'elation' ),
    );
    $choices = array(
        'no-repeat' => __( 'No Repeat', 'elation' ),
        'repeat-x'  => __( 'Repeat Horizonally', 'elation' ),
        'repeat-y'  => __( 'Repeat Vertically', 'elation' ),
        'repeat'    => __( 'Repeat Both', 'elation' ),
    );
    $options['elation-header-bgimg-repeat'] = array(
        'id'      => 'elation-header-bgimg-repeat',
        'label'   => __( 'Repeat Image', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'no-repeat',
    );
    $choices = array(
        'top left'      => __( 'Top Left', 'elation' ),
        'top center'    => __( 'Top Center', 'elation' ),
        'top right'     => __( 'Top Right', 'elation' ),
        'center left'   => __( 'Center Left', 'elation' ),
        'center center' => __( 'Center Center', 'elation' ),
        'center right'  => __( 'Center Right', 'elation' ),
        'bottom left'   => __( 'Bottom Left', 'elation' ),
        'bottom center' => __( 'Bottom Center', 'elation' ),
        'bottom right'  => __( 'Bottom Right', 'elation' ),
    );
    $options['elation-header-bgimg-align'] = array(
        'id'      => 'elation-header-bgimg-align',
        'label'   => __( 'Align Image', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'center center',
    );
    $options['elation-header-topbar-clear'] = array(
        'id'      => 'elation-header-topbar-clear',
        'label'   => __( 'Make Top Bar Transparent', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-heading-mainnav'] = array(
        'id'          => 'elation-heading-mainnav',
        'label'       => __( 'Main Navigation', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-header" rel="tc-section" title="Edit Main Navigation Font Settings" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-topbar" rel="tc-section" title="Edit Navigation Mobile Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-header" rel="tc-section" title="Edit Header Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
    );
    $options['elation-note-mainnav-mm'] = array(
        'id'          => 'elation-note-mainnav-mm',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Are you using <a href="https://wordpress.org/plugins/megamenu/" target="_blank">Mega Menu</a> instead? Then simply <a href="#elation-section-plugin-support" rel="tc-section" class="el-interlink">Enable Mega Menu here</a>', 'elation' ),
    );
    $options['elation-remove-main-nav'] = array(
        'id'      => 'elation-remove-main-nav',
        'label'   => __( 'Remove Main Navigation', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'elation-nav-plain'     => __( 'Plain', 'elation' ),
        'elation-nav-solid'     => __( 'Solid', 'elation' ),
        'elation-nav-underline' => __( 'Underlined', 'elation' ),
        'elation-nav-block'     => __( 'Blocks', 'elation' ),
    );
    $options['elation-header-nav-style'] = array(
        'id'      => 'elation-header-nav-style',
        'label'   => __( 'Navigation Style', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-nav-plain',
    );
    $options['elation-align-nav-full-width'] = array(
        'id'      => 'elation-align-nav-full-width',
        'label'   => __( 'Align Items to Full Width', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    if ( class_exists( 'WooCommerce' ) ) {
        $options['elation-add-menu-cart'] = array(
            'id'      => 'elation-add-menu-cart',
            'label'   => __( 'Add WooCommerce Cart', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
    }
    $options['elation-add-nav-search'] = array(
        'id'      => 'elation-add-nav-search',
        'label'   => __( 'Add Search to Navigation', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-nav-advanced-set'] = array(
        'id'      => 'elation-nav-advanced-set',
        'label'   => __( 'Advanced Navigation Settings', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-header-nav-spacing-top', 12 );
    $options['elation-header-nav-spacing-top'] = array(
        'id'          => 'elation-header-nav-spacing-top',
        'label'       => __( 'Top Level Items - Top Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 60,
        'step' => 1,
    ),
        'default'     => 12,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>',
    );
    $rangedefault = get_theme_mod( 'elation-header-nav-spacing-bottom', 12 );
    $options['elation-header-nav-spacing-bottom'] = array(
        'id'          => 'elation-header-nav-spacing-bottom',
        'label'       => __( 'Top Level Items - Bottom Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 60,
        'step' => 1,
    ),
        'default'     => 12,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>',
    );
    $rangedefault = get_theme_mod( 'elation-header-nav-spacing-side', 18 );
    $options['elation-header-nav-spacing-side'] = array(
        'id'          => 'elation-header-nav-spacing-side',
        'label'       => __( 'Top Level Items - Side Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 50,
        'step' => 1,
    ),
        'default'     => 18,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">50</span>',
    );
    $rangedefault = get_theme_mod( 'elation-header-nav-item-spacing', 0 );
    $options['elation-header-nav-item-spacing'] = array(
        'id'          => 'elation-header-nav-item-spacing',
        'label'       => __( 'Top Level Items - Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 40,
        'step' => 1,
    ),
        'default'     => 0,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>',
    );
    $rangedefault = get_theme_mod( 'elation-header-nav-drop-side-pad', 18 );
    $options['elation-header-nav-drop-side-pad'] = array(
        'id'          => 'elation-header-nav-drop-side-pad',
        'label'       => __( 'Drop Down Items - Side Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 7,
        'max'  => 60,
        'step' => 1,
    ),
        'default'     => 18,
        'description' => '<span class="fst">7</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>',
    );
    $rangedefault = get_theme_mod( 'elation-header-nav-drop-topbot-pad', 12 );
    $options['elation-header-nav-drop-topbot-pad'] = array(
        'id'          => 'elation-header-nav-drop-topbot-pad',
        'label'       => __( 'Drop Down Items - Top/Bottom Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 40,
        'step' => 1,
    ),
        'default'     => 12,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>',
    );
    $rangedefault = get_theme_mod( 'elation-nav-drop-minwidth', 200 );
    $options['elation-nav-drop-minwidth'] = array(
        'id'          => 'elation-nav-drop-minwidth',
        'label'       => __( 'Drop Down Items - Min-Width', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 120,
        'max'  => 400,
        'step' => 1,
    ),
        'default'     => 200,
        'description' => '<span class="fst">120</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">400</span>',
    );
    $options['elation-nav-drop-center'] = array(
        'id'      => 'elation-nav-drop-center',
        'label'   => __( 'Drop Down - Center Align Items', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-nav-drop-negmargin'] = array(
        'id'          => 'elation-nav-drop-negmargin',
        'label'       => __( 'Drop Down - Negative Margin', 'elation' ),
        'section'     => $section,
        'type'        => 'number',
        'description' => __( 'This is a manual setting to position the first dropdown to be centered to the top level item.', 'elation' ),
        'default'     => 0,
    );
    $options['elation-note-goedit-mobile'] = array(
        'id'          => 'elation-note-goedit-mobile',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Edit Elation <a href="#elation-panel-mobile-section-colors" rel="tc-section" class="el-interlink">Mobile Navigation Settings</a>', 'elation' ),
    );
    // ------------------------------------------------------------------------------------------- Main Navigation
    // ------------------------------------------------------------------------------------------- Home Slider / Custom Header
    $section = 'elation-panel-settings-section-header-media';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Home Slider / Custom Header', 'elation' ),
        'priority'    => '10',
        'panel'       => $panel,
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
    );
    $choices = array(
        'elation-site-media-none'      => __( 'None', 'elation' ),
        'elation-site-media-media'     => __( 'Custom Header', 'elation' ),
        'elation-site-media-fimage'    => __( 'Page Featured Image', 'elation' ),
        'elation-site-media-shortcode' => __( 'Slider Shortcode', 'elation' ),
    );
    $options['elation-site-media-type'] = array(
        'id'      => 'elation-site-media-type',
        'label'   => __( 'Media Type', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-site-media-none',
    );
    // None
    $options['elation-noteon-media-none'] = array(
        'id'          => 'elation-noteon-media-none',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'No media is shown in the header<br /><br />You can select between using:<br />- A Custom Header<br />- The Page Featured Image<br />- The Elation Basic Slider', 'elation' ),
    );
    // Custom Header
    $options['elation-noteon-media-cheader'] = array(
        'id'          => 'elation-noteon-media-cheader',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'You can now <a href="header_image" rel="tc-section">add a Custom Header or Video here</a>', 'elation' ),
    );
    // Page Featured Image
    $options['elation-noteon-media-fimage'] = array(
        'id'          => 'elation-noteon-media-fimage',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Go to each page in your dashboard to add a Featured Image which will display at the top of each page.', 'elation' ),
    );
    $choices = array(
        'elation-media-fimage-actual' => __( 'Actual Image', 'elation' ),
        'elation-media-fimage-small'  => __( 'Small Banner', 'elation' ),
        'elation-media-fimage-medium' => __( 'Medium Banner', 'elation' ),
        'elation-media-fimage-large'  => __( 'Large Banner', 'elation' ),
    );
    $options['elation-site-media-fimage-size'] = array(
        'id'      => 'elation-site-media-fimage-size',
        'label'   => __( 'Featured Image Proportions', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-media-fimage-actual',
    );
    // Basic Slider / Slider Shortcode
    $options['elation-noteon-media-shortcode'] = array(
        'id'          => 'elation-noteon-media-shortcode',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Enter any shortcode provided by the slider plugin of your choice.', 'elation' ),
    );
    $options['elation-sitemedia-shortcode'] = array(
        'id'      => 'elation-sitemedia-shortcode',
        'label'   => __( 'Shortcode', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-sitemedia-display-all'] = array(
        'id'          => 'elation-sitemedia-display-all',
        'label'       => __( 'Display on All Pages', 'elation' ),
        'section'     => $section,
        'type'        => 'checkbox',
        'default'     => 0,
        'description' => __( 'By default it only displays on the Home Page', 'elation' ),
    );
    $options['elation-noteon-all-pages-slider'] = array(
        'id'          => 'elation-noteon-all-pages-slider',
        'section'     => $section,
        'type'        => 'help',
        'description' => sprintf( __( 'Turn on Elation Sliders at the top.<br /><br />You can now %1$s and enter a separate shortcode when editing each page.<br /><br />Add a slider shortcode to the input above to set a default slider for if a page does not have a slider added. Leave it blank for no slider to show by default.', 'elation' ), '<a href="' . esc_url( admin_url( 'edit.php?post_type=elation-slider' ) ) . '" target="_blank">create Basic Sliders here</a>' ),
    );
    $options['elation-sitemedia-fullwidth'] = array(
        'id'      => 'elation-sitemedia-fullwidth',
        'label'   => __( 'Set Media to Full Width', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-sitemedia-add-elation'] = array(
        'id'      => 'elation-sitemedia-add-elation',
        'label'   => __( 'Add Image Overlay', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-sitemedia-elation-color'] = array(
        'id'      => 'elation-sitemedia-elation-color',
        'label'   => __( 'Elation Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#000000',
    );
    $rangedefault = get_theme_mod( 'elation-sitemedia-elation-opacity', 0.3 );
    $options['elation-sitemedia-elation-opacity'] = array(
        'id'          => 'elation-sitemedia-elation-opacity',
        'label'       => __( 'Elation Opacity', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 1,
        'step' => 0.1,
    ),
        'default'     => 0.3,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">1</span>',
    );
    // ------------------------------------------------------------------------------------------- Home Slider / Custom Header
    // ------------------------------------------------------------------------------------------- Content Area
    $section = 'elation-panel-settings-section-title';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Content Area', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
        'panel'       => $panel,
    );
    $options['elation-heading-pagetitles'] = array(
        'id'          => 'elation-heading-pagetitles',
        'label'       => __( 'Page Title(s)', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-title" rel="tc-section" title="Edit Page Title Font Settings" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-colors-section-content" rel="tc-section" title="Edit Page Title Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
    );
    $options['elation-remove-pagetitles'] = array(
        'id'      => 'elation-remove-pagetitles',
        'label'   => __( 'Remove All Page Titles', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'elation-pagetitle-default' => __( 'Default / Basic Page Header', 'elation' ),
        'elation-pagetitle-other'   => __( 'Basic Page Header 2', 'elation' ),
        'elation-pagetitle-banner'  => __( 'Banner Header Page Title', 'elation' ),
        'elation-pagetitle-cheader' => __( 'Featured Image with Title Overlay', 'elation' ),
    );
    $options['elation-pagetitle-layout'] = array(
        'id'      => 'elation-pagetitle-layout',
        'label'   => __( 'Page Title Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-pagetitle-default',
    );
    $options['elation-noteon-pagetitle-cheader'] = array(
        'id'          => 'elation-noteon-pagetitle-cheader',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'You need to <a href="#elation-panel-settings-section-header-media" rel="tc-section">Use a Custom Header or Page Featured Image here</a> to see the page titles... And add an <a href="#elation-panel-settings-section-header-media" rel="tc-section">Image Overlay here</a>', 'elation' ),
    );
    $options['elation-notefor-breadcrumb'] = array(
        'id'          => 'elation-notefor-breadcrumb',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'You can add a site BreadCrumbs anywhere by using the shortcode:<br /><b>[elation_breadcrumb fontsize="14"]</b><br />Requires the Breadcrumb NavXT plugin.', 'elation' ),
    );
    $options['elation-noteon-title-size'] = array(
        'id'          => 'elation-noteon-title-size',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Edit <a href="#elation-panel-font-settings-section-title" rel="tc-section">Page Title Font Sizes</a>', 'elation' ),
    );
    $options['elation-heading-contentareas'] = array(
        'id'          => 'elation-heading-contentareas',
        'label'       => __( 'Content Area', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-content" rel="tc-section" title="Edit Page Content Font Settings" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-colors-section-content" rel="tc-section" title="Edit Page Content Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
    );
    $options['elation-content-divider-line'] = array(
        'id'      => 'elation-content-divider-line',
        'label'   => __( 'Remove Content/Widget Divider Line', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-content-margin-top', 0 );
    $options['elation-content-margin-top'] = array(
        'id'          => 'elation-content-margin-top',
        'label'       => __( 'Top Margin', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1,
    ),
        'default'     => 0,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>',
    );
    $rangedefault = get_theme_mod( 'elation-content-padding-top', 25 );
    $options['elation-content-padding-top'] = array(
        'id'          => 'elation-content-padding-top',
        'label'       => __( 'Top Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>',
    );
    $rangedefault = get_theme_mod( 'elation-content-padding-left', 25 );
    $options['elation-content-padding-left'] = array(
        'id'          => 'elation-content-padding-left',
        'label'       => __( 'Left Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>',
    );
    $rangedefault = get_theme_mod( 'elation-content-padding-right', 25 );
    $options['elation-content-padding-right'] = array(
        'id'          => 'elation-content-padding-right',
        'label'       => __( 'Right Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>',
    );
    $rangedefault = get_theme_mod( 'elation-content-padding-bottom', 25 );
    $options['elation-content-padding-bottom'] = array(
        'id'          => 'elation-content-padding-bottom',
        'label'       => __( 'Bottom Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>',
    );
    // ------------------------------------------------------------------------------------------- Content Area
    // ------------------------------------------------------------------------------------------- Widget Area
    $section = 'elation-panel-settings-section-widget';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Widget Area', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
        'panel'       => $panel,
    );
    $rangedefault = get_theme_mod( 'elation-widget-area-size', 25 );
    $options['elation-widget-area-size'] = array(
        'id'          => 'elation-widget-area-size',
        'label'       => __( 'Widget Area Width', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 10,
        'max'  => 45,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">10</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>%</span><span class="lst">45</span>',
    );
    // Widget Area Top Margin
    $rangedefault = get_theme_mod( 'elation-widget-margin-top', 0 );
    $options['elation-widget-margin-top'] = array(
        'id'          => 'elation-widget-margin-top',
        'label'       => __( 'Widget Area Top Margin', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1,
    ),
        'default'     => 0,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>',
    );
    // Widget Area Padding
    $rangedefault = get_theme_mod( 'elation-widget-padding-top', 25 );
    $options['elation-widget-padding-top'] = array(
        'id'          => 'elation-widget-padding-top',
        'label'       => __( 'Top Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>',
    );
    $rangedefault = get_theme_mod( 'elation-widget-padding-left', 25 );
    $options['elation-widget-padding-left'] = array(
        'id'          => 'elation-widget-padding-left',
        'label'       => __( 'Left Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>',
    );
    $rangedefault = get_theme_mod( 'elation-widget-padding-right', 25 );
    $options['elation-widget-padding-right'] = array(
        'id'          => 'elation-widget-padding-right',
        'label'       => __( 'Right Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>',
    );
    $rangedefault = get_theme_mod( 'elation-widget-padding-bottom', 1 );
    $options['elation-widget-padding-bottom'] = array(
        'id'          => 'elation-widget-padding-bottom',
        'label'       => __( 'Bottom Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>',
    );
    $options['elation-heading-widget-widgets'] = array(
        'id'          => 'elation-heading-widget-widgets',
        'label'       => __( 'Widgets', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-content" rel="tc-section" title="Edit Footer Font Settings" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-colors-section-content" rel="tc-section" title="Edit Header Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
    );
    $rangedefault = get_theme_mod( 'elation-widget-spacing-bottom', 50 );
    $options['elation-widget-spacing-bottom'] = array(
        'id'          => 'elation-widget-spacing-bottom',
        'label'       => __( 'Widgets Bottom Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 5,
        'max'  => 200,
        'step' => 1,
    ),
        'default'     => 50,
        'description' => '<span class="fst">5</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>',
    );
    $choices = array(
        'elation-widget-basic'     => __( 'Default / Basic', 'elation' ),
        'elation-widget-underline' => __( 'Underlined Title', 'elation' ),
        'elation-widget-dotline'   => __( 'Dotted Underline Title', 'elation' ),
        'elation-widget-shortline' => __( 'Short Underlined Title', 'elation' ),
        'elation-widget-sideline'  => __( 'Sidelined Title', 'elation' ),
        'elation-widget-boxed'     => __( 'Border Outlined Title', 'elation' ),
    );
    $options['elation-widget-title-style'] = array(
        'id'      => 'elation-widget-title-style',
        'label'   => __( 'Widget Title Styling', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-widget-basic',
    );
    $options['elation-widget-center-align'] = array(
        'id'      => 'elation-widget-center-align',
        'label'   => __( 'Center Align Widgets', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Widget Area
    // ------------------------------------------------------------------------------------------- Footer
    $section = 'elation-panel-settings-section-footer';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Footer', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
        'panel'       => $panel,
    );
    $options['elation-heading-settings-footer'] = array(
        'id'          => 'elation-heading-settings-footer',
        'label'       => __( 'Footer', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-footer" rel="tc-section" title="Edit Footer Font Settings" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-bottombar" rel="tc-section" title="Edit Footer Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-footer" rel="tc-section" title="Edit Header Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
    );
    $choices = array(
        'footer-default'    => __( 'Custom/Widgets Footer', 'elation' ),
        'footer-social'     => __( 'Social Icons Footer', 'elation' ),
        'footer-social-two' => __( 'Menu & Social Footer', 'elation' ),
        'footer-basic'      => __( 'Basic Footer', 'elation' ),
        'footer-split'      => __( 'Widget Split Layout Footer', 'elation' ),
        'footer-none'       => __( 'Remove Footer', 'elation' ),
    );
    $options['elation-footer-layout'] = array(
        'id'      => 'elation-footer-layout',
        'label'   => __( 'Footer Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'footer-default',
    );
    // Default/Custom Footer Layout
    $options['elation-noteon-footer-default'] = array(
        'id'          => 'elation-noteon-footer-default',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'The Custom Footer is built with <i><a href="#widgets" rel="tc-panel">Widgets</a></i>, or go to Dashboard -> Appearance -> Widgets', 'elation' ),
    );
    $choices = array(
        'elation-footer-custom-cols-1' => __( '1 Column', 'elation' ),
        'elation-footer-custom-cols-2' => __( '2 Columns', 'elation' ),
        'elation-footer-custom-cols-3' => __( '3 Columns', 'elation' ),
        'elation-footer-custom-cols-4' => __( '4 Columns', 'elation' ),
        'elation-footer-custom-cols-5' => __( '5 Columns', 'elation' ),
    );
    $options['elation-footer-custom-cols'] = array(
        'id'      => 'elation-footer-custom-cols',
        'label'   => __( 'Columns', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-footer-custom-cols-3',
    );
    $options['elation-footer-customize'] = array(
        'id'          => 'elation-footer-customize',
        'label'       => __( 'Custom Widths', 'elation' ),
        'section'     => $section,
        'type'        => 'checkbox',
        'description' => __( 'Select this box to manually adjust the columns widths by percentage ( % )', 'elation' ),
        'default'     => 0,
    );
    $options['elation-footer-customize-col-1'] = array(
        'id'      => 'elation-footer-customize-col-1',
        'label'   => __( 'Column 1 %', 'elation' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['elation-center-col-1'] = array(
        'id'          => 'elation-center-col-1',
        'label'       => __( 'Center Column', 'elation' ),
        'section'     => $section,
        'type'        => 'checkbox',
        'description' => __( 'Reduce the width of the column to center it', 'elation' ),
        'default'     => 0,
    );
    $options['elation-footer-customize-col-2'] = array(
        'id'      => 'elation-footer-customize-col-2',
        'label'   => __( 'Column 2 %', 'elation' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['elation-footer-customize-col-3'] = array(
        'id'      => 'elation-footer-customize-col-3',
        'label'   => __( 'Column 3 %', 'elation' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['elation-footer-customize-col-4'] = array(
        'id'      => 'elation-footer-customize-col-4',
        'label'   => __( 'Column 4 %', 'elation' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['elation-footer-customize-col-5'] = array(
        'id'      => 'elation-footer-customize-col-5',
        'label'   => __( 'Column 5 %', 'elation' ),
        'section' => $section,
        'type'    => 'number',
    );
    // Social Footer Layout
    $options['elation-noteon-footer-social'] = array(
        'id'          => 'elation-noteon-footer-social',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Add your <a href="#elation-panel-social-section-links" rel="tc-section">Social links</a> to the footer', 'elation' ),
    );
    $options['elation-footer-social-menuitems-one'] = array(
        'id'      => 'elation-footer-social-menuitems-one',
        'label'   => __( 'Footer Navigation Vertical', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-footer-remove-social'] = array(
        'id'      => 'elation-footer-remove-social',
        'label'   => __( 'Remove Social Icons', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'elation-footicon-plain'   => __( 'Plain', 'elation' ),
        'elation-footicon-round'   => __( 'Round', 'elation' ),
        'elation-footicon-rounded' => __( 'Rounded', 'elation' ),
        'elation-footicon-square'  => __( 'Square', 'elation' ),
        'elation-footicon-circled' => __( 'Circled', 'elation' ),
    );
    $options['elation-footer-icon-style'] = array(
        'id'      => 'elation-footer-icon-style',
        'label'   => __( 'Social Icons Style', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-footicon-plain',
    );
    $rangedefault = get_theme_mod( 'elation-footer-icon-size', 44 );
    $options['elation-footer-icon-size'] = array(
        'id'          => 'elation-footer-icon-size',
        'label'       => __( 'Social Icons Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 22,
        'max'  => 68,
        'step' => 1,
    ),
        'default'     => 44,
        'description' => '<span class="fst">22</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">68</span>',
    );
    $rangedefault = get_theme_mod( 'elation-footer-icon-space', 10 );
    $options['elation-footer-icon-space'] = array(
        'id'          => 'elation-footer-icon-space',
        'label'       => __( 'Social Icons Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 80,
        'step' => 1,
    ),
        'default'     => 10,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">80</span>',
    );
    // Widget Split Footer Layout
    $options['elation-noteon-footer-split'] = array(
        'id'          => 'elation-noteon-footer-split',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'This Footer layout is divided into columns by the amount of widgets that are added under<br /><i>Dashboard -> Appearance -> <a href="#widgets" rel="tc-panel">Widgets</a></i>', 'elation' ),
    );
    // Footer Settings
    $rangedefault = get_theme_mod( 'elation-footer-widget-space', 40 );
    $options['elation-footer-widget-space'] = array(
        'id'          => 'elation-footer-widget-space',
        'label'       => __( 'Widget Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 180,
        'step' => 1,
    ),
        'default'     => 40,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">180</span>',
    );
    $rangedefault = get_theme_mod( 'elation-footer-widget-botspace', 15 );
    $options['elation-footer-widget-botspace'] = array(
        'id'          => 'elation-footer-widget-botspace',
        'label'       => __( 'Widget Bottom Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1,
    ),
        'default'     => 15,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>',
    );
    $choices = array(
        'elation-footalign-top'     => __( 'Top', 'elation' ),
        'elation-footalign-middle'  => __( 'Middle', 'elation' ),
        'elation-footalign-bottom'  => __( 'Bottom', 'elation' ),
        'elation-footalign-stretch' => __( 'Stretch', 'elation' ),
    );
    $options['elation-footalign'] = array(
        'id'      => 'elation-footalign',
        'label'   => __( 'Vertically Align Footer Widgets', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-footalign-top',
    );
    $choices = array(
        'elation-footdivide-none'      => __( 'None', 'elation' ),
        'elation-footdivide-line'      => __( 'Line', 'elation' ),
        'elation-footdivide-shortline' => __( 'Short Line', 'elation' ),
        'elation-footdivide-shortdots' => __( 'Short Dotted Line', 'elation' ),
    );
    $options['elation-footdivide-style'] = array(
        'id'      => 'elation-footdivide-style',
        'label'   => __( 'Footer Widgets Divider', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-footdivide-none',
    );
    $rangedefault = get_theme_mod( 'elation-content-spacing-bottom', 75 );
    $options['elation-content-spacing-bottom'] = array(
        'id'          => 'elation-content-spacing-bottom',
        'label'       => __( 'Footer Top Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1,
    ),
        'default'     => 75,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>',
    );
    $rangedefault = get_theme_mod( 'elation-footer-top-pad', 25 );
    $options['elation-footer-top-pad'] = array(
        'id'          => 'elation-footer-top-pad',
        'label'       => __( 'Footer Inner Top Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 250,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">250</span>',
    );
    $rangedefault = get_theme_mod( 'elation-footer-bottom-pad', 25 );
    $options['elation-footer-bottom-pad'] = array(
        'id'          => 'elation-footer-bottom-pad',
        'label'       => __( 'Footer Inner Bottom Padding', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 250,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">250</span>',
    );
    // Footer Background Image
    $options['elation-add-footer-bgimg'] = array(
        'id'      => 'elation-add-footer-bgimg',
        'label'   => __( 'Add a Footer Background Image', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-footer-bgimg'] = array(
        'id'          => 'elation-footer-bgimg',
        'label'       => __( 'Footer Background Image', 'elation' ),
        'section'     => $section,
        'type'        => 'image',
        'description' => __( 'Note this works better as a long horizontal image.', 'elation' ),
    );
    $choices = array(
        'no-repeat' => __( 'No Repeat', 'elation' ),
        'repeat-x'  => __( 'Repeat Horizonally', 'elation' ),
        'repeat-y'  => __( 'Repeat Vertically', 'elation' ),
        'repeat'    => __( 'Repeat Both', 'elation' ),
    );
    $options['elation-footer-bgimg-repeat'] = array(
        'id'      => 'elation-footer-bgimg-repeat',
        'label'   => __( 'Repeat Image', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'no-repeat',
    );
    $choices = array(
        'top left'      => __( 'Top Left', 'elation' ),
        'top center'    => __( 'Top Center', 'elation' ),
        'top right'     => __( 'Top Right', 'elation' ),
        'center left'   => __( 'Center Left', 'elation' ),
        'center center' => __( 'Center Center', 'elation' ),
        'center right'  => __( 'Center Right', 'elation' ),
        'bottom left'   => __( 'Bottom Left', 'elation' ),
        'bottom center' => __( 'Bottom Center', 'elation' ),
        'bottom right'  => __( 'Bottom Right', 'elation' ),
    );
    $options['elation-footer-bgimg-align'] = array(
        'id'      => 'elation-footer-bgimg-align',
        'label'   => __( 'Align Image', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'center center',
    );
    $options['elation-footer-botbar-clear'] = array(
        'id'      => 'elation-footer-botbar-clear',
        'label'   => __( 'Make Bottom Bar Transparent', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // Bottom Bar
    $options['elation-heading-settings-bottombar'] = array(
        'id'          => 'elation-heading-settings-bottombar',
        'label'       => __( 'Footer Bottom Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-footer" rel="tc-section" title="Edit Footer Font Settings" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-bottombar" rel="tc-section" title="Edit Footer Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-footer" rel="tc-section" title="Edit Header Colors" class="dashicons dashicons-admin-appearance el-color"></a>',
    );
    $choices = array(
        'bottombar-default' => __( 'Default Bottom Bar', 'elation' ),
        'bottombar-one'     => __( 'Centered Social Icons Bottom Bar', 'elation' ),
        'bottombar-two'     => __( 'Centered Menu Bottom Bar', 'elation' ),
    );
    $options['elation-bottombar-layout'] = array(
        'id'      => 'elation-bottombar-layout',
        'label'   => __( 'Bottom Bar Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'bottombar-default',
    );
    if ( class_exists( 'WooCommerce' ) ) {
        $options['elation-add-botbar-cart'] = array(
            'id'      => 'elation-add-botbar-cart',
            'label'   => __( 'Add WooCommerce Cart', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
    }
    $options['elation-remove-botbar-social'] = array(
        'id'      => 'elation-remove-botbar-social',
        'label'   => __( 'Remove Social Icons', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-remove-botbar-address'] = array(
        'id'      => 'elation-remove-botbar-address',
        'label'   => __( 'Remove Address', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-bottombar-switch'] = array(
        'id'      => 'elation-bottombar-switch',
        'label'   => __( 'Switch Bottom Bar', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-bottombar-spacing-top', 5 );
    $options['elation-bottombar-spacing-top'] = array(
        'id'          => 'elation-bottombar-spacing-top',
        'label'       => __( 'Spacing above Bottom Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1,
        'max'  => 100,
        'step' => 1,
    ),
        'default'     => 5,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>',
    );
    $rangedefault = get_theme_mod( 'elation-bottombar-spacing-bottom', 5 );
    $options['elation-bottombar-spacing-bottom'] = array(
        'id'          => 'elation-bottombar-spacing-bottom',
        'label'       => __( 'Spacing below Bottom Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1,
        'max'  => 100,
        'step' => 1,
    ),
        'default'     => 5,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>',
    );
    $options['elation-center-all-bottombar'] = array(
        'id'      => 'elation-center-all-bottombar',
        'label'   => __( 'Center the bottom bar contents', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Footer
    // ------------------------------------------------------------------------------------------- 404 Error Page
    $section = 'elation-panel-settings-section-error';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( '404 Error Page', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a></div>',
        'panel'       => $panel,
    );
    $choices = array(
        'elation-error-style-default' => __( 'Default - Image/Ban Sign on Top', 'elation' ),
        'elation-error-style-one'     => __( 'Image/Ban Sign at the Bottom', 'elation' ),
        'elation-error-style-two'     => __( 'Image/Ban Sign in Center', 'elation' ),
    );
    $options['elation-error-page-style'] = array(
        'id'      => 'elation-error-page-style',
        'label'   => __( '404 Page Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-error-style-default',
    );
    $options['elation-error-img'] = array(
        'id'          => 'elation-error-img',
        'label'       => __( 'Upload Error Image', 'elation' ),
        'section'     => $section,
        'type'        => 'image',
        'description' => __( 'This will replace the circle "ban" sign', 'elation' ),
    );
    $options['elation-error-remove-title'] = array(
        'id'      => 'elation-error-remove-title',
        'label'   => __( 'Remove 404 Title', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-error-remove-img'] = array(
        'id'      => 'elation-error-remove-img',
        'label'   => __( 'Remove Image / Ban Sign', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-error-remove-text'] = array(
        'id'      => 'elation-error-remove-text',
        'label'   => __( 'Remove 404 Text', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-error-remove-search'] = array(
        'id'      => 'elation-error-remove-search',
        'label'   => __( 'Remove Search', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-error-remove-btn'] = array(
        'id'      => 'elation-error-remove-btn',
        'label'   => __( 'Remove Home Button', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-error-title'] = array(
        'id'      => 'elation-error-title',
        'label'   => __( 'Page Title', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Oops! That page can&rsquo;t be found.', 'elation' ),
    );
    $options['elation-error-text'] = array(
        'id'      => 'elation-error-text',
        'label'   => __( 'Page Text', 'elation' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'It looks like nothing was found at this location. Maybe try a search below, or return to home.', 'elation' ),
    );
    // ------------------------------------------------------------------------------------------- 404 Error Page
    // ---------------- PANEL - Blog Settings
    $panel = 'elation-panel-blog-settings';
    $panels[] = array(
        'id'       => $panel,
        'title'    => __( 'Elation Blog Settings', 'elation' ),
        'priority' => '30',
    );
    // ------------------------------------------------------------------------------------------- Blog List Settings
    $section = 'elation-panel-blog-settings-list';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Blog List', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $choices = array(
        'elation-blog-left'  => __( 'Left Layout', 'elation' ),
        'elation-blog-right' => __( 'Right Layout', 'elation' ),
        'elation-blog-alt'   => __( 'Alternate Layout', 'elation' ),
        'elation-blog-top'   => __( 'Top Layout', 'elation' ),
        'elation-blog-grid'  => __( 'Grid Layout', 'elation' ),
        'elation-blog-tile'  => __( 'Tiled Blocks Layout', 'elation' ),
    );
    $options['elation-blog-list-layout'] = array(
        'id'      => 'elation-blog-list-layout',
        'label'   => __( 'Blog Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-blog-left',
    );
    $options['elation-blog-break'] = array(
        'id'      => 'elation-blog-break',
        'label'   => __( 'Break out of the content', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-vert-center-items'] = array(
        'id'      => 'elation-blog-vert-center-items',
        'label'   => __( 'Vertically Center Image & Content', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-top-center'] = array(
        'id'      => 'elation-blog-top-center',
        'label'   => __( 'Center Align Post Content', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-blog-list-post-space', 25 );
    $options['elation-blog-list-post-space'] = array(
        'id'          => 'elation-blog-list-post-space',
        'label'       => __( 'Post Bottom Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 15,
        'max'  => 120,
        'step' => 1,
    ),
        'default'     => 25,
        'description' => '<span class="fst">15</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">120</span>',
    );
    $options['elation-blog-grid-cols'] = array(
        'id'          => 'elation-blog-grid-cols',
        'label'       => __( 'Grid Columns', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 2,
        'max'  => 5,
        'step' => 1,
    ),
        'description' => __( '2 <b>|</b> 3 <b>|</b> 4 <b>|</b> 5', 'elation' ),
        'default'     => 3,
    );
    $rangedefault = get_theme_mod( 'elation-blog-grid-space', 8 );
    $options['elation-blog-grid-space'] = array(
        'id'          => 'elation-blog-grid-space',
        'label'       => __( 'Grid Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 4,
        'max'  => 40,
        'step' => 1,
    ),
        'default'     => 8,
        'description' => '<span class="fst">4</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>',
    );
    $choices = array(
        'post-thumbnail' => __( 'Post Thumbnail', 'elation' ),
        'actual'         => __( 'Actual Image / Image Cut', 'elation' ),
        '1-1'            => __( 'Square Image (1:1)', 'elation' ),
        '3-2'            => __( 'Standard (3:2)', 'elation' ),
        '4-3'            => __( 'Micro Four-Thirds (4:3)', 'elation' ),
        'round'          => __( 'Round Image', 'elation' ),
    );
    $options['elation-blog-list-img-prop'] = array(
        'id'      => 'elation-blog-list-img-prop',
        'label'   => __( 'Image Proportion', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'post-thumbnail',
    );
    $options['elation-blog-list-img-cut'] = array(
        'id'          => 'elation-blog-list-img-cut',
        'label'       => __( 'Image Cut to use', 'elation' ),
        'section'     => $section,
        'type'        => 'imageselect',
        'description' => __( 'Select which cut the Blog list uses<br />Recommended: Optimize images before upload', 'elation' ),
        'default'     => 'large',
    );
    $options['elation-blog-content-off'] = array(
        'id'      => 'elation-blog-content-off',
        'label'   => __( 'Turn off Post Content', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'elation-listlay-default' => __( 'Default Layout', 'elation' ),
        'elation-listlay-one'     => __( 'Display Meta at the Top', 'elation' ),
        'elation-listlay-two'     => __( 'Display Meta at the Bottom', 'elation' ),
    );
    $options['elation-bloglist-postlay'] = array(
        'id'      => 'elation-bloglist-postlay',
        'label'   => __( 'Post Meta Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-listlay-default',
    );
    $options['elation-bloglist-post-meta-italic'] = array(
        'id'      => 'elation-bloglist-post-meta-italic',
        'label'   => __( 'Post Meta - Italics', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-bloglist-post-meta-icons'] = array(
        'id'      => 'elation-bloglist-post-meta-icons',
        'label'   => __( 'Post Meta - Icons', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-remove-list-title'] = array(
        'id'      => 'elation-blog-remove-list-title',
        'label'   => __( 'Remove Title', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-remove-list-date'] = array(
        'id'      => 'elation-blog-remove-list-date',
        'label'   => __( 'Remove Posted Date', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-remove-list-auth'] = array(
        'id'      => 'elation-blog-remove-list-auth',
        'label'   => __( 'Remove Author', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-remove-list-cont'] = array(
        'id'      => 'elation-blog-remove-list-cont',
        'label'   => __( 'Remove Excerpt', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-remove-list-cats'] = array(
        'id'      => 'elation-blog-remove-list-cats',
        'label'   => __( 'Remove Post Categories', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-remove-list-tags'] = array(
        'id'      => 'elation-blog-remove-list-tags',
        'label'   => __( 'Remove Post Tags', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-remove-list-com'] = array(
        'id'      => 'elation-blog-remove-list-com',
        'label'   => __( 'Remove Comments', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'elation-tile-slide-bottom' => __( 'Slide In - Bottom', 'elation' ),
        'elation-tile-slide-left'   => __( 'Slide In - Left', 'elation' ),
        'elation-tile-slide-right'  => __( 'Slide In - Right', 'elation' ),
        'elation-tile-fade'         => __( 'Fade In', 'elation' ),
        'elation-tile-grow'         => __( 'Grow In', 'elation' ),
        'elation-tile-grow-out'     => __( 'Zoom Out', 'elation' ),
    );
    $options['elation-blog-tile-anim'] = array(
        'id'      => 'elation-blog-tile-anim',
        'label'   => __( 'Post Content Animation', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-tile-slide-bottom',
    );
    $choices = array(
        'elation-imgstyle-none'   => __( 'None / Normal', 'elation' ),
        'elation-imgstyle-bw'     => __( 'Black & White | Color on hover', 'elation' ),
        'elation-imgstyle-bg'     => __( 'Blur & Grayscale on hover', 'elation' ),
        'elation-imgstyle-flash'  => __( 'Flash on hover', 'elation' ),
        'elation-imgstyle-shine'  => __( 'Shine on hover', 'elation' ),
        'elation-imgstyle-circle' => __( 'Circle on hover', 'elation' ),
    );
    $options['elation-blog-img-style-anim'] = array(
        'id'      => 'elation-blog-img-style-anim',
        'label'   => __( 'Post Image Style/Animation', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-imgstyle-none',
    );
    // Blog Excerpt
    $options['elation-blog-heading-excerpt'] = array(
        'id'      => 'elation-blog-heading-excerpt',
        'label'   => __( 'Blog Excerpt / Shortened Content', 'elation' ),
        'section' => $section,
        'type'    => 'heading',
    );
    // Post Excerpt note
    $options['elation-noteon-blog-exc'] = array(
        'id'          => 'elation-noteon-blog-exc',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'The Blog will use the Post Excerpt if one is set, if not, then it uses the full post.<br /><a href="https://kairaweb.com/documentation/using-the-wordpress-post-excerpt/" target="_blank">Read More here</a>', 'elation' ),
    );
    $options['elation-blog-heading-cats'] = array(
        'id'      => 'elation-blog-heading-cats',
        'label'   => __( 'Archives / Categories List', 'elation' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['elation-blog-cats-remove-pretext'] = array(
        'id'      => 'elation-blog-cats-remove-pretext',
        'label'   => __( 'Remove text before Archive Title', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-noteon-cat-pretxt'] = array(
        'id'          => 'elation-noteon-cat-pretxt',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'This will remove the Pre-Title text when on a category/tag archive page', 'elation' ),
    );
    // Advanced Settings
    $options['elation-blog-advanced-set'] = array(
        'id'      => 'elation-blog-advanced-set',
        'label'   => __( 'Blog List Advanced Settings', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-blog-list-title-font-size', 28 );
    $options['elation-blog-list-title-font-size'] = array(
        'id'          => 'elation-blog-list-title-font-size',
        'label'       => __( 'Blog Title Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 18,
        'max'  => 44,
        'step' => 1,
    ),
        'default'     => 28,
        'description' => '<span class="fst">18</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">44</span>',
    );
    $options['elation-blog-list-title-fweight'] = array(
        'id'      => 'elation-blog-list-title-fweight',
        'label'   => __( 'Blog Title - Font Weight', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '500',
    );
    $rangedefault = get_theme_mod( 'elation-blog-list-title-space', 22 );
    $options['elation-blog-list-title-space'] = array(
        'id'          => 'elation-blog-list-title-space',
        'label'       => __( 'Blog Title Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 50,
        'step' => 1,
    ),
        'default'     => 22,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">50</span>',
    );
    $rangedefault = get_theme_mod( 'elation-blog-list-font-size', 16 );
    $options['elation-blog-list-font-size'] = array(
        'id'          => 'elation-blog-list-font-size',
        'label'       => __( 'Blog Post Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 12,
        'max'  => 28,
        'step' => 1,
    ),
        'default'     => 16,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>',
    );
    $options['elation-blog-list-imgcont-size'] = array(
        'id'          => 'elation-blog-list-imgcont-size',
        'label'       => __( 'Image / Content Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'description' => __( 'This only applies to Left, Right & Alternate layouts', 'elation' ),
        'input_attrs' => array(
        'min'  => 15,
        'max'  => 60,
        'step' => 1,
    ),
        'default'     => 30,
    );
    // ------------------------------------------------------------------------------------------- Blog List Settings
    // ------------------------------------------------------------------------------------------- Blog Single Post Settings
    $section = 'elation-panel-blog-settings-single-post';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Blog Single Post', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $choices = array(
        'elation-fimage-default' => __( 'Below Title', 'elation' ),
        'elation-fimage-top'     => __( 'Above Title', 'elation' ),
        'elation-fimage-none'    => __( 'Remove Featured Image', 'elation' ),
    );
    $options['elation-blog-post-fimage'] = array(
        'id'      => 'elation-blog-post-fimage',
        'label'   => __( 'Featured Image Location', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-fimage-default',
    );
    $choices = array(
        'elation-postlay-default' => __( 'Default Layout', 'elation' ),
        'elation-postlay-one'     => __( 'Display Meta at the Top', 'elation' ),
        'elation-postlay-two'     => __( 'Display Meta at the Bottom', 'elation' ),
    );
    $options['elation-blog-postlay'] = array(
        'id'      => 'elation-blog-postlay',
        'label'   => __( 'Post Meta Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-postlay-default',
    );
    $options['elation-blog-post-meta-inline'] = array(
        'id'      => 'elation-blog-post-meta-inline',
        'label'   => __( 'Side align Post Meta', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-post-meta-italic'] = array(
        'id'      => 'elation-blog-post-meta-italic',
        'label'   => __( 'Post Meta - Italics', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-post-meta-icons'] = array(
        'id'      => 'elation-blog-post-meta-icons',
        'label'   => __( 'Post Meta - Icons', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-post-remove-date'] = array(
        'id'      => 'elation-blog-post-remove-date',
        'label'   => __( 'Remove Posted Date', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-post-remove-auth'] = array(
        'id'      => 'elation-blog-post-remove-auth',
        'label'   => __( 'Remove Author', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-post-remove-cats'] = array(
        'id'      => 'elation-blog-post-remove-cats',
        'label'   => __( 'Remove Post Categories', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-blog-post-remove-tags'] = array(
        'id'      => 'elation-blog-post-remove-tags',
        'label'   => __( 'Remove Post Tags', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'elation-postnav-default' => __( 'Default / Basic Layout', 'elation' ),
        'elation-postnav-barrows' => __( 'Browser Arrows Layout', 'elation' ),
        'elation-postnav-none'    => __( 'None', 'elation' ),
    );
    $options['elation-blog-post-nav-layout'] = array(
        'id'      => 'elation-blog-post-nav-layout',
        'label'   => __( 'Post Navigation Layout', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-postnav-default',
    );
    $choices = array(
        'elation-comments-default' => __( 'Default / Basic Layout', 'elation' ),
        'elation-comments-bubble'  => __( 'Bubble Layout', 'elation' ),
    );
    $options['elation-blog-comments-layout'] = array(
        'id'      => 'elation-blog-comments-layout',
        'label'   => __( 'Comments Style', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-comments-default',
    );
    // ------------------------------------------------------------------------------------------- Blog Single Post Settings
    // ---------------- PANEL - Font Settings
    $panel = 'elation-panel-font-settings';
    $panels[] = array(
        'id'       => $panel,
        'title'    => __( 'Elation Font Settings', 'elation' ),
        'priority' => '30',
    );
    // ------------------------------------------------------------------------------------------- Default Site Fonts
    $section = 'elation-panel-font-settings-default';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Default Site Fonts', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-disable-google-font'] = array(
        'id'          => 'elation-disable-google-font',
        'label'       => __( 'Disable Google Fonts', 'elation' ),
        'section'     => $section,
        'type'        => 'checkbox',
        'description' => __( 'This will remove the connection to Google Fonts and let you select only web-safe fonts', 'elation' ),
        'default'     => 0,
    );
    $font_websafe_choices = array(
        'Arial'           => 'Arial',
        'Arial Black'     => 'Arial Black',
        'Helvetica'       => 'Helvetica',
        'Verdana'         => 'Verdana',
        'Georgia'         => 'Georgia',
        'Palatino'        => 'Palatino',
        'Garamond'        => 'Garamond',
        'Bookman'         => 'Bookman',
        'Courier'         => 'Courier',
        'Courier New'     => 'Courier New',
        'Times New Roman' => 'Times New Roman',
        'Times'           => 'Times',
    );
    $font_google_choices = customizer_library_get_font_choices();
    $options['elation-body-font'] = array(
        'id'      => 'elation-body-font',
        'label'   => __( 'Body Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Nunito Sans',
    );
    $options['elation-body-font-websafe'] = array(
        'id'      => 'elation-body-font-websafe',
        'label'   => __( 'Body Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Arial',
    );
    $options['elation-body-fonts-size'] = array(
        'id'          => 'elation-body-fonts-size',
        'label'       => __( 'Body Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1,
        'max'  => 6,
        'step' => 1,
    ),
        'description' => __( 'Smaller <b>|</b> Small <b>|</b> Normal <b>|</b> Medium <b>|</b> Large <b>|</b> Larger', 'elation' ),
        'default'     => 3,
    );
    $rangedefault = get_theme_mod( 'elation-body-font-lheight', 1.5 );
    $options['elation-body-font-lheight'] = array(
        'id'          => 'elation-body-font-lheight',
        'label'       => __( 'Body Font Line Height', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1.2,
        'max'  => 2.8,
        'step' => 0.1,
    ),
        'default'     => 1.5,
        'description' => '<span class="fst">1.2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">2.8</span>',
    );
    $options['elation-heading-font'] = array(
        'id'      => 'elation-heading-font',
        'label'   => __( 'Heading Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Crimson Text',
    );
    $options['elation-heading-font-websafe'] = array(
        'id'      => 'elation-heading-font-websafe',
        'label'   => __( 'Heading Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Verdana',
    );
    $options['elation-heading-fonts-size'] = array(
        'id'          => 'elation-heading-fonts-size',
        'label'       => __( 'Heading Size Proportions', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1,
        'max'  => 4,
        'step' => 1,
    ),
        'description' => __( 'Small <b>|</b> Normal <b>|</b> Medium <b>|</b> Large', 'elation' ),
        'default'     => 2,
    );
    // ------------------------------------------------------------------------------------------- Default Site Fonts
    // ------------------------------------------------------------------------------------------- Title / Tagline Fonts
    $section = 'elation-panel-font-settings-title-tagline';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Title / Tagline Fonts', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-title-font'] = array(
        'id'      => 'elation-title-font',
        'label'   => __( 'Site Title Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Crimson Text',
    );
    $options['elation-title-font-uppercase'] = array(
        'id'      => 'elation-title-font-uppercase',
        'label'   => __( 'Font Style - Uppercase', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-title-font-websafe'] = array(
        'id'      => 'elation-title-font-websafe',
        'label'   => __( 'Site Title Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Verdana',
    );
    $rangedefault = get_theme_mod( 'elation-title-size', 64 );
    $options['elation-title-size'] = array(
        'id'          => 'elation-title-size',
        'label'       => __( 'Site Title Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 12,
        'max'  => 120,
        'step' => 1,
    ),
        'default'     => 64,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">120</span>',
    );
    $options['elation-title-fweight'] = array(
        'id'      => 'elation-title-fweight',
        'label'   => __( 'Site Title - Font Weight', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '400',
    );
    $options['elation-tagline-font'] = array(
        'id'      => 'elation-tagline-font',
        'label'   => __( 'Site Tagline Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Crimson Text',
    );
    $options['elation-tagline-font-uppercase'] = array(
        'id'      => 'elation-tagline-font-uppercase',
        'label'   => __( 'Font Style - Uppercase', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-tagline-font-websafe'] = array(
        'id'      => 'elation-tagline-font-websafe',
        'label'   => __( 'Site Tagline Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Arial',
    );
    $rangedefault = get_theme_mod( 'elation-tagline-size', 14 );
    $options['elation-tagline-size'] = array(
        'id'          => 'elation-tagline-size',
        'label'       => __( 'Site Tagline Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 32,
        'step' => 1,
    ),
        'default'     => 14,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">32</span>',
    );
    $options['elation-tagline-fweight'] = array(
        'id'      => 'elation-tagline-fweight',
        'label'   => __( 'Site Tagline - Font Weight', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '300',
    );
    // ------------------------------------------------------------------------------------------- Title / Tagline Fonts
    // ------------------------------------------------------------------------------------------- Header
    $section = 'elation-panel-font-settings-section-header';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Header', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-font-heading-header'] = array(
        'id'          => 'elation-font-heading-header',
        'label'       => __( 'Top Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-edit-text-section-topbar" rel="tc-section" title="Edit Header Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-header" rel="tc-section" title="Edit Header Colors" class="dashicons dashicons-admin-appearance el-color"></a><a href="#elation-panel-settings-section-header" rel="tc-section" title="Edit Header Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $rangedefault = get_theme_mod( 'elation-topbar-font-size', 13 );
    $options['elation-topbar-font-size'] = array(
        'id'          => 'elation-topbar-font-size',
        'label'       => __( 'Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 28,
        'step' => 1,
    ),
        'default'     => 13,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>',
    );
    $rangedefault = get_theme_mod( 'elation-topbar-social-size', 15 );
    $options['elation-topbar-social-size'] = array(
        'id'          => 'elation-topbar-social-size',
        'label'       => __( 'Social Icons Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 40,
        'step' => 1,
    ),
        'default'     => 15,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>',
    );
    $options['elation-font-heading-nav'] = array(
        'id'          => 'elation-font-heading-nav',
        'label'       => __( 'Main Navigation', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-edit-text-section-topbar" rel="tc-section" title="Edit Navigation Mobile Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-header" rel="tc-section" title="Edit Header Colors" class="dashicons dashicons-admin-appearance el-color"></a><a href="#elation-panel-settings-section-header" rel="tc-section" title="Edit Header Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $options['elation-main-nav-font'] = array(
        'id'      => 'elation-main-nav-font',
        'label'   => __( 'Main Navigation Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Nunito Sans',
    );
    $options['elation-nav-uppercase'] = array(
        'id'      => 'elation-nav-uppercase',
        'label'   => __( 'Font Style - Uppercase', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-main-nav-font-websafe'] = array(
        'id'      => 'elation-main-nav-font-websafe',
        'label'   => __( 'Main Navigation Font', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Verdana',
    );
    $rangedefault = get_theme_mod( 'elation-nav-font-size', 16 );
    $options['elation-nav-font-size'] = array(
        'id'          => 'elation-nav-font-size',
        'label'       => __( 'Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 34,
        'step' => 1,
    ),
        'default'     => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">34</span>',
    );
    $rangedefault = get_theme_mod( 'elation-nav-drop-down-font-size', 16 );
    $options['elation-nav-drop-down-font-size'] = array(
        'id'          => 'elation-nav-drop-down-font-size',
        'label'       => __( 'Drop Down Items - Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 34,
        'step' => 1,
    ),
        'default'     => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">34</span>',
    );
    // ------------------------------------------------------------------------------------------- Header
    // ------------------------------------------------------------------------------------------- Page Title
    $section = 'elation-panel-font-settings-section-title';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Page Title', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $rangedefault = get_theme_mod( 'elation-page-title-font-size', 34 );
    $options['elation-page-title-font-size'] = array(
        'id'          => 'elation-page-title-font-size',
        'label'       => __( 'Page Title - Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 18,
        'max'  => 82,
        'step' => 1,
    ),
        'default'     => 34,
        'description' => '<span class="fst">18</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">82</span>',
    );
    // Uses the font-weight choices at the top
    $options['elation-page-title-font-weight'] = array(
        'id'      => 'elation-page-title-font-weight',
        'label'   => __( 'Title - Font Weight', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '600',
    );
    $options['elation-page-title-upper'] = array(
        'id'      => 'elation-page-title-upper',
        'label'   => __( 'Page Title - Uppercase', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-page-title-spacing', 20 );
    $options['elation-page-title-spacing'] = array(
        'id'          => 'elation-page-title-spacing',
        'label'       => __( 'Title Bottom Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ),
        'default'     => 20,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>',
    );
    $rangedefault = get_theme_mod( 'elation-breadcrumbs-font-size', 13 );
    $options['elation-breadcrumbs-font-size'] = array(
        'id'          => 'elation-breadcrumbs-font-size',
        'label'       => __( 'Breadcrumbs - Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 10,
        'max'  => 22,
        'step' => 1,
    ),
        'default'     => 13,
        'description' => '<span class="fst">10</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">22</span>',
    );
    $options['elation-breadcrumbs-upper'] = array(
        'id'      => 'elation-breadcrumbs-upper',
        'label'   => __( 'Breadcrumbs - Uppercase', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-breadcrumbs-spacing', 0 );
    $options['elation-breadcrumbs-spacing'] = array(
        'id'          => 'elation-breadcrumbs-spacing',
        'label'       => __( 'Breadcrumbs Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 30,
        'step' => 1,
    ),
        'default'     => 0,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">30</span>',
    );
    $options['elation-noteon-title-sett'] = array(
        'id'          => 'elation-noteon-title-sett',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Edit <a href="#elation-panel-settings-section-title" rel="tc-section">Page Title Settings</a>', 'elation' ),
    );
    // ------------------------------------------------------------------------------------------- Page Title
    // ------------------------------------------------------------------------------------------- Content
    $section = 'elation-panel-font-settings-section-content';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Content', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-font-heading-content'] = array(
        'id'          => 'elation-font-heading-content',
        'label'       => __( 'Content Area', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-colors-section-content" rel="tc-section" title="Edit Content Area Colors" class="dashicons dashicons-admin-appearance el-color"></a><a href="#elation-panel-settings-section-title" rel="tc-section" title="Edit Content Area Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $rangedefault = get_theme_mod( 'elation-content-font-size', 16 );
    $options['elation-content-font-size'] = array(
        'id'          => 'elation-content-font-size',
        'label'       => __( 'Content - Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 28,
        'step' => 1,
    ),
        'default'     => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>',
    );
    $rangedefault = get_theme_mod( 'elation-content-lheight', 1.5 );
    $options['elation-content-lheight'] = array(
        'id'          => 'elation-content-lheight',
        'label'       => __( 'Content - Line Height', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1.2,
        'max'  => 2.8,
        'step' => 0.1,
    ),
        'default'     => 1.5,
        'description' => '<span class="fst">1.2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">2.8</span>',
    );
    $options['elation-font-heading-widget'] = array(
        'id'          => 'elation-font-heading-widget',
        'label'       => __( 'Widget Area', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-colors-section-content" rel="tc-section" title="Edit Widget Area Colors" class="dashicons dashicons-admin-appearance el-color"></a><a href="#elation-panel-settings-section-widget" rel="tc-section" title="Edit Widget Area Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $rangedefault = get_theme_mod( 'elation-widget-font-title', 26 );
    $options['elation-widget-font-title'] = array(
        'id'          => 'elation-widget-font-title',
        'label'       => __( 'Widget Title Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 12,
        'max'  => 34,
        'step' => 1,
    ),
        'default'     => 26,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">34</span>',
    );
    $options['elation-widget-title-fweight'] = array(
        'id'      => 'elation-widget-title-fweight',
        'label'   => __( 'Title - Font Weight', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '600',
    );
    $rangedefault = get_theme_mod( 'elation-widget-title-spacing', 10 );
    $options['elation-widget-title-spacing'] = array(
        'id'          => 'elation-widget-title-spacing',
        'label'       => __( 'Widgets Title - Bottom Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1,
        'max'  => 60,
        'step' => 1,
    ),
        'default'     => 10,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>',
    );
    $rangedefault = get_theme_mod( 'elation-widget-font-size', 16 );
    $options['elation-widget-font-size'] = array(
        'id'          => 'elation-widget-font-size',
        'label'       => __( 'Widgets - Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 28,
        'step' => 1,
    ),
        'default'     => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>',
    );
    $rangedefault = get_theme_mod( 'elation-widget-lheight', 1.5 );
    $options['elation-widget-lheight'] = array(
        'id'          => 'elation-widget-lheight',
        'label'       => __( 'Widgets - Line Height', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1.2,
        'max'  => 2.8,
        'step' => 0.1,
    ),
        'default'     => 1.5,
        'description' => '<span class="fst">1.2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">2.8</span>',
    );
    // ------------------------------------------------------------------------------------------- Content
    // ------------------------------------------------------------------------------------------- Footer
    $section = 'elation-panel-font-settings-section-footer';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Footer', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-font-heading-footer'] = array(
        'id'          => 'elation-font-heading-footer',
        'label'       => __( 'Footer', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-edit-text-section-bottombar" rel="tc-section" title="Edit Footer Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-footer" rel="tc-section" title="Edit Footer Colors" class="dashicons dashicons-admin-appearance el-color"></a><a href="#elation-panel-settings-section-footer" rel="tc-section" title="Edit Footer Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $rangedefault = get_theme_mod( 'elation-footer-title-size', 26 );
    $options['elation-footer-title-size'] = array(
        'id'          => 'elation-footer-title-size',
        'label'       => __( 'Widget Title Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 12,
        'max'  => 44,
        'step' => 1,
    ),
        'default'     => 26,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">44</span>',
    );
    // Uses the font-weight choices at the top
    $options['elation-footer-title-weight'] = array(
        'id'      => 'elation-footer-title-weight',
        'label'   => __( 'Title - Font Weight', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '600',
    );
    $options['elation-footer-title-uc'] = array(
        'id'      => 'elation-footer-title-uc',
        'label'   => __( 'Title - Uppercase', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-footer-title-space', 10 );
    $options['elation-footer-title-space'] = array(
        'id'          => 'elation-footer-title-space',
        'label'       => __( 'Title Bottom Spacing', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0,
        'max'  => 60,
        'step' => 1,
    ),
        'default'     => 10,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>',
    );
    $rangedefault = get_theme_mod( 'elation-footer-font-size', 16 );
    $options['elation-footer-font-size'] = array(
        'id'          => 'elation-footer-font-size',
        'label'       => __( 'Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 24,
        'step' => 1,
    ),
        'default'     => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">24</span>',
    );
    $rangedefault = get_theme_mod( 'elation-footer-lheight', 1.5 );
    $options['elation-footer-lheight'] = array(
        'id'          => 'elation-footer-lheight',
        'label'       => __( 'Line Height', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 1.2,
        'max'  => 2.6,
        'step' => 0.1,
    ),
        'default'     => 1.5,
        'description' => '<span class="fst">1.2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">2.8</span>',
    );
    $options['elation-font-heading-bottombar'] = array(
        'id'          => 'elation-font-heading-bottombar',
        'label'       => __( 'Bottom Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-edit-text-section-bottombar" rel="tc-section" title="Edit Footer Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-colors-section-footer" rel="tc-section" title="Edit Footer Colors" class="dashicons dashicons-admin-appearance el-color"></a><a href="#elation-panel-settings-section-footer" rel="tc-section" title="Edit Footer Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $rangedefault = get_theme_mod( 'elation-bottombar-font-size', 13 );
    $options['elation-bottombar-font-size'] = array(
        'id'          => 'elation-bottombar-font-size',
        'label'       => __( 'Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 18,
        'step' => 1,
    ),
        'default'     => 13,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">18</span>',
    );
    $rangedefault = get_theme_mod( 'elation-bottombar-social-size', 15 );
    $options['elation-bottombar-social-size'] = array(
        'id'          => 'elation-bottombar-social-size',
        'label'       => __( 'Social Icons Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 40,
        'step' => 1,
    ),
        'default'     => 15,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>',
    );
    $options['elation-footer-menu-uppercase'] = array(
        'id'      => 'elation-footer-menu-uppercase',
        'label'   => __( 'Footer Menu - Uppercase', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Footer
    // ---------------- PANEL - Edit Text
    $panel = 'elation-panel-edit-text';
    $panels[] = array(
        'id'       => $panel,
        'title'    => __( 'Elation Edit Text', 'elation' ),
        'priority' => '30',
    );
    // ------------------------------------------------------------------------------------------- Header
    $section = 'elation-panel-edit-text-section-topbar';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Header', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-edit-text-help'] = array(
        'id'          => 'elation-edit-text-help',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Use your own icon by adding "fa-" and the corrent <a href="https://fontawesome.com/icons?d=gallery&c=buildings,business,chat,code,date-time,design,editors,maps,marketing,shapes,travel,writing&m=free" target="_blank">Font Awesome</a> class name. Eg: "fa-phone"<br /><br />Or remove the icon by saving an empty input.', 'elation' ),
    );
    $options['elation-edit-text-phone-icon'] = array(
        'id'      => 'elation-edit-text-phone-icon',
        'label'   => __( 'Phone Number Icon', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'fa-phone', 'elation' ),
    );
    $options['elation-edit-text-phone'] = array(
        'id'      => 'elation-edit-text-phone',
        'label'   => __( 'Phone Number', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Call Us: +2782 444 YEAH', 'elation' ),
    );
    $options['elation-edit-text-address-icon'] = array(
        'id'      => 'elation-edit-text-address-icon',
        'label'   => __( 'Address Icon', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'fa-map-marker-alt', 'elation' ),
    );
    $options['elation-edit-text-address'] = array(
        'id'      => 'elation-edit-text-address',
        'label'   => __( 'Address', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'elation' ),
    );
    // ------------------------------------------------------------------------------------------- Header
    // ------------------------------------------------------------------------------------------- Footer
    $section = 'elation-panel-edit-text-section-bottombar';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Footer', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-edit-text-foot-help'] = array(
        'id'          => 'elation-edit-text-foot-help',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Use your own icon by adding "fa-" and the corrent <a href="https://fontawesome.com/icons?d=gallery&c=buildings,business,chat,code,date-time,design,editors,maps,marketing,shapes,travel,writing&m=free" target="_blank">Font Awesome</a> class name. Eg: "fa-phone"<br /><br />Or remove the icon by saving an empty input.', 'elation' ),
    );
    $options['elation-edit-text-footer-address-icon'] = array(
        'id'      => 'elation-edit-text-footer-address-icon',
        'label'   => __( 'Address Icon', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'fa-map-marker-alt', 'elation' ),
    );
    $options['elation-edit-text-footer-address'] = array(
        'id'      => 'elation-edit-text-footer-address',
        'label'   => __( 'Address', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'elation' ),
    );
    // ------------------------------------------------------------------------------------------- Footer
    // ---------------- PANEL - Color Settings
    $panel = 'elation-panel-colors';
    $panels[] = array(
        'id'       => $panel,
        'title'    => __( 'Elation Color Settings', 'elation' ),
        'priority' => '70',
    );
    // ------------------------------------------------------------------------------------------- Default Colors
    $section = 'colors';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Default Colors', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-boxed-bg-color'] = array(
        'id'      => 'elation-boxed-bg-color',
        'label'   => __( 'Site Boxed/blocks Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['elation-color-head-default'] = array(
        'id'          => 'elation-color-head-default',
        'label'       => __( 'Theme Colors', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-default" rel="tc-section" title="Edit Theme Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-settings"></a>',
    );
    $options['elation-primary-color'] = array(
        'id'      => 'elation-primary-color',
        'label'   => __( 'Primary Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-secondary-color'] = array(
        'id'      => 'elation-secondary-color',
        'label'   => __( 'Secondary Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    // ------------------------------------------------------------------------------------------- Default Colors
    // ------------------------------------------------------------------------------------------- Header
    $section = 'elation-panel-colors-section-header';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Header', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-color-head-header-topbar'] = array(
        'id'          => 'elation-color-head-header-topbar',
        'label'       => __( 'Top Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-header" rel="tc-section" title="Edit Header Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-topbar" rel="tc-section" title="Edit Header Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-settings-section-header" rel="tc-section" title="Edit Header Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $options['elation-topbar-bg-color'] = array(
        'id'      => 'elation-topbar-bg-color',
        'label'   => __( 'Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['elation-topbar-font-color'] = array(
        'id'      => 'elation-topbar-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-color-head-header-header'] = array(
        'id'          => 'elation-color-head-header-header',
        'label'       => __( 'Header', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-header" rel="tc-section" title="Edit Header Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-topbar" rel="tc-section" title="Edit Mobile Navigation Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-settings-section-header" rel="tc-section" title="Edit Navigation Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $options['elation-header-bg-color'] = array(
        'id'      => 'elation-header-bg-color',
        'label'   => __( 'Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['elation-header-font-color'] = array(
        'id'      => 'elation-header-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-site-title-color'] = array(
        'id'      => 'elation-site-title-color',
        'label'   => __( 'Site Title Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-site-tagline-color'] = array(
        'id'      => 'elation-site-tagline-color',
        'label'   => __( 'Site Tagline Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-color-head-header-nav'] = array(
        'id'          => 'elation-color-head-header-nav',
        'label'       => __( 'Navigation', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-header" rel="tc-section" title="Edit Header Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-topbar" rel="tc-section" title="Edit Mobile Navigation Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-settings-section-header" rel="tc-section" title="Edit Navigation Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $options['elation-nav-bg-color'] = array(
        'id'      => 'elation-nav-bg-color',
        'label'   => __( 'Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['elation-nav-font-color'] = array(
        'id'      => 'elation-nav-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-nav-drop-bg-color'] = array(
        'id'      => 'elation-nav-drop-bg-color',
        'label'   => __( 'Drop Down - Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $rangedefault = get_theme_mod( 'elation-nav-drop-opacity', 1 );
    $options['elation-nav-drop-opacity'] = array(
        'id'          => 'elation-nav-drop-opacity',
        'label'       => __( 'Drop Down - Opacity', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 0.4,
        'max'  => 1,
        'step' => 0.1,
    ),
        'default'     => 1,
        'description' => '<span class="fst">0.4</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">1</span>',
    );
    $options['elation-nav-drop-font-color'] = array(
        'id'      => 'elation-nav-drop-font-color',
        'label'   => __( 'Drop Down - Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-nav-selected-color'] = array(
        'id'      => 'elation-nav-selected-color',
        'label'   => __( 'Selected / Highlight Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-nav-selected-font-color'] = array(
        'id'      => 'elation-nav-selected-font-color',
        'label'   => __( 'Selected / Highlight Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    // ------------------------------------------------------------------------------------------- Header
    // ------------------------------------------------------------------------------------------- Content
    $section = 'elation-panel-colors-section-content';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Content Area', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-color-head-content-title'] = array(
        'id'          => 'elation-color-head-content-title',
        'label'       => __( 'Page Title', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-title" rel="tc-section" title="Edit Page Title Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-settings-section-title" rel="tc-section" title="Edit Page Title Settings" class="dashicons dashicons-admin-generic el-settings"></a>',
    );
    $options['elation-content-title-bg-color'] = array(
        'id'      => 'elation-content-title-bg-color',
        'label'   => __( 'Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f6f6f6',
    );
    $options['elation-content-title-font-color'] = array(
        'id'      => 'elation-content-title-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-content-bc-font-color'] = array(
        'id'      => 'elation-content-bc-font-color',
        'label'   => __( 'Breadcrumbs Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-color-head-content-txt'] = array(
        'id'          => 'elation-color-head-content-txt',
        'label'       => __( 'Content Area', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-content" rel="tc-section" title="Edit Content Area Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-settings-section-title" rel="tc-section" title="Edit Page Title Settings" class="dashicons dashicons-admin-generic el-settings"></a>',
    );
    $options['elation-content-head-font-color'] = array(
        'id'      => 'elation-content-head-font-color',
        'label'   => __( 'Headings Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-content-font-color'] = array(
        'id'      => 'elation-content-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-content-link-color'] = array(
        'id'      => 'elation-content-link-color',
        'label'   => __( 'Link Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-content-link-hover-color'] = array(
        'id'      => 'elation-content-link-hover-color',
        'label'   => __( 'Link Hover Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    $options['elation-color-head-widget-area'] = array(
        'id'          => 'elation-color-head-widget-area',
        'label'       => __( 'Widget Area', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-content" rel="tc-section" title="Edit Widget Area Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-settings-section-widget" rel="tc-section" title="Edit Widget Area Settings" class="dashicons dashicons-admin-generic el-settings"></a>',
    );
    $options['elation-widget-head-font-color'] = array(
        'id'      => 'elation-widget-head-font-color',
        'label'   => __( 'Widget Title Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-widget-font-color'] = array(
        'id'      => 'elation-widget-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-widgets-link-color'] = array(
        'id'      => 'elation-widgets-link-color',
        'label'   => __( 'Link Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-widgets-link-hover-color'] = array(
        'id'      => 'elation-widgets-link-hover-color',
        'label'   => __( 'Link Hover Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    $options['elation-color-head-blog-list'] = array(
        'id'          => 'elation-color-head-blog-list',
        'label'       => __( 'Blog List', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-admin-generic el-settings"></a>',
    );
    $options['elation-blog-pagination-color'] = array(
        'id'      => 'elation-blog-pagination-color',
        'label'   => __( 'Pagination Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-blog-pagination-hover-color'] = array(
        'id'      => 'elation-blog-pagination-hover-color',
        'label'   => __( 'Pagination Hover Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    // ------------------------------------------------------------------------------------------- Content
    // ------------------------------------------------------------------------------------------- Footer
    $section = 'elation-panel-colors-section-footer';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Footer', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-color-footer-head'] = array(
        'id'          => 'elation-color-footer-head',
        'label'       => __( 'Footer', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-footer" rel="tc-section" title="Edit Footer Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-bottombar" rel="tc-section" title="Edit Footer Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-settings-section-footer" rel="tc-section" title="Edit Footer Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $options['elation-footer-bg-color'] = array(
        'id'      => 'elation-footer-bg-color',
        'label'   => __( 'Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['elation-footer-title-font-color'] = array(
        'id'      => 'elation-footer-title-font-color',
        'label'   => __( 'Widgets Title Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-footer-font-color'] = array(
        'id'      => 'elation-footer-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-footer-social-icons-color'] = array(
        'id'      => 'elation-footer-social-icons-color',
        'label'   => __( 'Social Icons Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-footer-link-color'] = array(
        'id'      => 'elation-footer-link-color',
        'label'   => __( 'Link Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-footer-link-hover-color'] = array(
        'id'      => 'elation-footer-link-hover-color',
        'label'   => __( 'Link Hover Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    $options['elation-color-bottombar-head'] = array(
        'id'          => 'elation-color-bottombar-head',
        'label'       => __( 'Bottom Bar', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-font-settings-section-footer" rel="tc-section" title="Edit Footer Fonts" class="dashicons dashicons-editor-textcolor el-font"></a><a href="#elation-panel-edit-text-section-bottombar" rel="tc-section" title="Edit Footer Text" class="dashicons dashicons-edit-large el-design"></a><a href="#elation-panel-settings-section-footer" rel="tc-section" title="Edit Footer Settings" class="dashicons dashicons-admin-generic el-color"></a>',
    );
    $options['elation-bottombar-bg-color'] = array(
        'id'      => 'elation-bottombar-bg-color',
        'label'   => __( 'Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['elation-bottombar-font-color'] = array(
        'id'      => 'elation-bottombar-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['elation-bottombar-link-color'] = array(
        'id'      => 'elation-bottombar-link-color',
        'label'   => __( 'Link Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-bottombar-link-hover-color'] = array(
        'id'      => 'elation-bottombar-link-hover-color',
        'label'   => __( 'Link Hover Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    // ------------------------------------------------------------------------------------------- Footer
    // ---------------- PANEL - Social Links
    $panel = 'elation-panel-social';
    $panels[] = array(
        'id'       => $panel,
        'title'    => __( 'Elation Social Links', 'elation' ),
        'priority' => '70',
    );
    // ------------------------------------------------------------------------------------------- Social Links Settings
    $section = 'elation-panel-social-section-links-settings';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Social Links Settings', 'elation' ),
        'priority'    => '10',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-social-add-sideicons'] = array(
        'id'          => 'elation-social-add-sideicons',
        'label'       => __( 'Add Side Aligned Social Icons', 'elation' ),
        'section'     => $section,
        'type'        => 'checkbox',
        'description' => __( 'Add <a href="#elation-panel-social-section-links" rel="tc-section">Social Links</a> for this to show', 'elation' ),
        'default'     => 0,
    );
    $options['elation-social-set-sideicons-left'] = array(
        'id'      => 'elation-social-set-sideicons-left',
        'label'   => __( 'Switch the icons to the left', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-social-let-scroll'] = array(
        'id'      => 'elation-social-let-scroll',
        'label'   => __( 'Scroll Icons with the Site', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-site-side-social-top'] = array(
        'id'      => 'elation-site-side-social-top',
        'label'   => __( 'Position from Top', 'elation' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 233,
    );
    // ------------------------------------------------------------------------------------------- Social Links Settings
    // ------------------------------------------------------------------------------------------- Social Links
    $section = 'elation-panel-social-section-links';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Social Links', 'elation' ),
        'priority'    => '20',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-social-set-edit'] = array(
        'id'          => 'elation-social-set-edit',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Edit Elation <a href="#elation-panel-social-section-links-settings" rel="tc-section" class="el-interlink">Social Links Settings</a>', 'elation' ),
    );
    $options['elation-social-email'] = array(
        'id'      => 'elation-social-email',
        'label'   => __( 'Email Address', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-skype'] = array(
        'id'      => 'elation-social-skype',
        'label'   => __( 'Skype Name', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-phone'] = array(
        'id'      => 'elation-social-phone',
        'label'   => __( 'Phone Number', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-whatsapp'] = array(
        'id'          => 'elation-social-whatsapp',
        'label'       => __( 'WhatsApp', 'elation' ),
        'section'     => $section,
        'type'        => 'text',
        'description' => __( 'Enter your area code & WhatsApp number', 'elation' ),
    );
    $options['elation-social-head-social'] = array(
        'id'      => 'elation-social-head-social',
        'label'   => __( 'Social Profiles', 'elation' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['elation-social-facebook'] = array(
        'id'      => 'elation-social-facebook',
        'label'   => __( 'Facebook', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-twitter'] = array(
        'id'      => 'elation-social-twitter',
        'label'   => __( 'Twitter', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-google-plus'] = array(
        'id'      => 'elation-social-google-plus',
        'label'   => __( 'Google Plus', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-snapchat'] = array(
        'id'      => 'elation-social-snapchat',
        'label'   => __( 'SnapChat', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-amazon'] = array(
        'id'      => 'elation-social-amazon',
        'label'   => __( 'Amazon', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-etsy'] = array(
        'id'      => 'elation-social-etsy',
        'label'   => __( 'Etsy', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-yelp'] = array(
        'id'      => 'elation-social-yelp',
        'label'   => __( 'Yelp', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-youtube'] = array(
        'id'      => 'elation-social-youtube',
        'label'   => __( 'YouTube', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-vimeo'] = array(
        'id'      => 'elation-social-vimeo',
        'label'   => __( 'Vimeo', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-instagram'] = array(
        'id'      => 'elation-social-instagram',
        'label'   => __( 'Instagram', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-strava'] = array(
        'id'      => 'elation-social-strava',
        'label'   => __( 'Strava', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-airbnb'] = array(
        'id'      => 'elation-social-airbnb',
        'label'   => __( 'Airbnb', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-pinterest'] = array(
        'id'      => 'elation-social-pinterest',
        'label'   => __( 'Pinterest', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-medium'] = array(
        'id'      => 'elation-social-medium',
        'label'   => __( 'Medium', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-blogger'] = array(
        'id'      => 'elation-social-blogger',
        'label'   => __( 'Blogger', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-behance'] = array(
        'id'      => 'elation-social-behance',
        'label'   => __( 'Behance', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-soundcloud'] = array(
        'id'      => 'elation-social-soundcloud',
        'label'   => __( 'SoundCloud', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-spotify'] = array(
        'id'      => 'elation-social-spotify',
        'label'   => __( 'Spotify', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-product-hunt'] = array(
        'id'      => 'elation-social-product-hunt',
        'label'   => __( 'Product Hunt', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-kickstarter'] = array(
        'id'      => 'elation-social-kickstarter',
        'label'   => __( 'Kickstarter', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-slack'] = array(
        'id'      => 'elation-social-slack',
        'label'   => __( 'Slack', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-linkedin'] = array(
        'id'      => 'elation-social-linkedin',
        'label'   => __( 'LinkedIn', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-tumblr'] = array(
        'id'      => 'elation-social-tumblr',
        'label'   => __( 'Tumblr', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-digg'] = array(
        'id'      => 'elation-social-digg',
        'label'   => __( 'Digg', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-flickr'] = array(
        'id'      => 'elation-social-flickr',
        'label'   => __( 'Flickr', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-houzz'] = array(
        'id'      => 'elation-social-houzz',
        'label'   => __( 'Houzz', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-vine'] = array(
        'id'      => 'elation-social-vine',
        'label'   => __( 'Vine', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-vk'] = array(
        'id'      => 'elation-social-vk',
        'label'   => __( 'VK', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-xing'] = array(
        'id'      => 'elation-social-xing',
        'label'   => __( 'Xing', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-stumbleupon'] = array(
        'id'      => 'elation-social-stumbleupon',
        'label'   => __( 'StumbleUpon', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-tripadvisor'] = array(
        'id'      => 'elation-social-tripadvisor',
        'label'   => __( 'TripAdvisor', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-500px'] = array(
        'id'      => 'elation-social-500px',
        'label'   => __( '500px', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-odnoklassniki'] = array(
        'id'      => 'elation-social-odnoklassniki',
        'label'   => __( 'Odnoklassniki', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-github'] = array(
        'id'      => 'elation-social-github',
        'label'   => __( 'GitHub', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-head-custom'] = array(
        'id'      => 'elation-social-head-custom',
        'label'   => __( 'Custom Brand Icons', 'elation' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['elation-social-icon-help'] = array(
        'id'          => 'elation-social-icon-help',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Use any other brand icon by adding the corrent <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank">Font Awesome</a> class name. Eg: "fa-facebook"<br /><br />This only uses brand icons.', 'elation' ),
    );
    $options['elation-social-custom-class'] = array(
        'id'      => 'elation-social-custom-class',
        'label'   => __( 'Add a Custom Social Link', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-custom-url'] = array(
        'id'      => 'elation-social-custom-url',
        'label'   => __( 'Add the URL', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-custom-class-two'] = array(
        'id'      => 'elation-social-custom-class-two',
        'label'   => __( 'Add another Custom Social Link', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-custom-url-two'] = array(
        'id'      => 'elation-social-custom-url-two',
        'label'   => __( 'Add the URL', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-head-custom-nonbrand'] = array(
        'id'      => 'elation-social-head-custom-nonbrand',
        'label'   => __( 'Custom NON Brand Icon', 'elation' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['elation-social-icon-help-nobrand'] = array(
        'id'          => 'elation-social-icon-help-nobrand',
        'section'     => $section,
        'type'        => 'help',
        'description' => __( 'Use any non-brand <a href="https://fontawesome.com/icons?d=gallery&c=buildings,business,chat,code,date-time,design,editors,maps,marketing,shapes,travel,writing&m=free" target="_blank">Font Awesome</a> icon.<br />Eg: "fa-bed"<br /><br />This will not take brand icons.', 'elation' ),
    );
    $options['elation-social-custom-class-nobrand'] = array(
        'id'      => 'elation-social-custom-class-nobrand',
        'label'   => __( 'Add a Custom Social Link', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['elation-social-custom-url-nobrand'] = array(
        'id'      => 'elation-social-custom-url-nobrand',
        'label'   => __( 'Add the URL', 'elation' ),
        'section' => $section,
        'type'    => 'text',
    );
    // ------------------------------------------------------------------------------------------- Social Links
    $section = 'header_image';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Header Media', 'elation' ),
        'priority'    => '70',
        'description' => __( '<a href="#elation-panel-settings-section-header-media" rel="tc-section">Select the Custom Header option here</a> to use this Header Media on your home page or all pages.', 'elation' ),
    );
    
    if ( class_exists( 'WooCommerce' ) ) {
        // ---------------- PANEL - WooCommerce Settings
        $panel = 'woocommerce';
        $panels[] = array(
            'id'       => $panel,
            'title'    => __( 'WooCommerce', 'elation' ),
            'priority' => '110',
        );
        // ------------------------------------------------------------------------------------------- WooCommerce
        $section = 'elation-woocommerce-settings';
        $sections[] = array(
            'id'          => $section,
            'title'       => __( 'Elation Catalogue Settings', 'elation' ),
            'priority'    => '120',
            'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
            'panel'       => $panel,
        );
        $rangedefault = get_theme_mod( 'elation-wc-product-col-space', 10 );
        $options['elation-wc-product-col-space'] = array(
            'id'          => 'elation-wc-product-col-space',
            'label'       => __( 'Column Spacing', 'elation' ),
            'section'     => $section,
            'type'        => 'range',
            'input_attrs' => array(
            'min'  => 0,
            'max'  => 60,
            'step' => 1,
        ),
            'default'     => 10,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>',
        );
        $rangedefault = get_theme_mod( 'elation-wc-product-bottom-space', 20 );
        $options['elation-wc-product-bottom-space'] = array(
            'id'          => 'elation-wc-product-bottom-space',
            'label'       => __( 'Products Bottom Spacing', 'elation' ),
            'section'     => $section,
            'type'        => 'range',
            'input_attrs' => array(
            'min'  => 0,
            'max'  => 100,
            'step' => 1,
        ),
            'default'     => 20,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>',
        );
        $options['elation-wc-remove-bcrumbs'] = array(
            'id'      => 'elation-wc-remove-bcrumbs',
            'label'   => __( 'Remove Breadcrumbs', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['elation-wc-remove-title'] = array(
            'id'      => 'elation-wc-remove-title',
            'label'   => __( 'Remove Default Shop Title', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['elation-wc-remove-result-sort'] = array(
            'id'      => 'elation-wc-remove-result-sort',
            'label'   => __( 'Remove Product Results & Sorting', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $rangedefault = get_theme_mod( 'elation-wc-list-title-size', 18 );
        $options['elation-wc-list-title-size'] = array(
            'id'          => 'elation-wc-list-title-size',
            'label'       => __( 'Products Title Size', 'elation' ),
            'section'     => $section,
            'type'        => 'range',
            'input_attrs' => array(
            'min'  => 12,
            'max'  => 38,
            'step' => 1,
        ),
            'default'     => 18,
            'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">38</span>',
        );
        $options['elation-wc-list-title-height'] = array(
            'id'          => 'elation-wc-list-title-height',
            'label'       => __( 'Products Title Height', 'elation' ),
            'section'     => $section,
            'type'        => 'range',
            'input_attrs' => array(
            'min'  => 30,
            'max'  => 150,
            'step' => 1,
        ),
            'description' => __( 'This adjusts the product title height to align the items with short and long titles', 'elation' ),
            'default'     => 46,
        );
        $options['elation-wc-mobile-onecol'] = array(
            'id'      => 'elation-wc-mobile-onecol',
            'label'   => __( 'Set Products to single column on Mobile', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $section = 'elation-woocommerce-product-settings';
        $sections[] = array(
            'id'          => $section,
            'title'       => __( 'Elation Product Page Settings', 'elation' ),
            'priority'    => '120',
            'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
            'panel'       => $panel,
        );
        $rangedefault = get_theme_mod( 'elation-wcproduct-img-sum-size', 48 );
        $options['elation-wcproduct-img-sum-size'] = array(
            'id'          => 'elation-wcproduct-img-sum-size',
            'label'       => __( 'Product Details Column Sizing', 'elation' ),
            'section'     => $section,
            'type'        => 'range',
            'input_attrs' => array(
            'min'  => 20,
            'max'  => 60,
            'step' => 1,
        ),
            'default'     => 48,
            'description' => '<span class="fst">20</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>%</span><span class="lst">60</span>',
        );
        $section = 'elation-woocommerce-account-settings';
        $sections[] = array(
            'id'          => $section,
            'title'       => __( 'Elation My Account Page Settings', 'elation' ),
            'priority'    => '120',
            'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
            'panel'       => $panel,
        );
        $choices = array(
            'elation-wcaccount-style-default' => __( 'Default Design', 'elation' ),
            'elation-wcaccount-style-top'     => __( 'Top Tabs Layout', 'elation' ),
        );
        $options['elation-wc-account-style'] = array(
            'id'      => 'elation-wc-account-style',
            'label'   => __( 'My Account Page Layout', 'elation' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'elation-wcaccount-style-default',
        );
        $section = 'elation-woocommerce-cart-settings';
        $sections[] = array(
            'id'          => $section,
            'title'       => __( 'Elation Cart Page Settings', 'elation' ),
            'priority'    => '120',
            'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
            'panel'       => $panel,
        );
        $choices = array(
            'elation-wccart-style-default' => __( 'Default Design', 'elation' ),
            'elation-wccart-style-two'     => __( 'Design Two', 'elation' ),
        );
        $options['elation-wc-cartpage-style'] = array(
            'id'      => 'elation-wc-cartpage-style',
            'label'   => __( 'Cart Page Layout', 'elation' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'elation-wccart-style-default',
        );
        $options['elation-wccart-center-totals'] = array(
            'id'      => 'elation-wccart-center-totals',
            'label'   => __( 'Center Cart Totals', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $section = 'elation-woocommerce-checkout-settings';
        $sections[] = array(
            'id'          => $section,
            'title'       => __( 'Elation Checkout Page Settings', 'elation' ),
            'priority'    => '120',
            'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
            'panel'       => $panel,
        );
        $choices = array(
            'elation-wccheckout-style-default' => __( 'Default 2 Column Layout', 'elation' ),
            'elation-wccheckout-style-two'     => __( 'Full Width Layout', 'elation' ),
        );
        $options['elation-wc-checkout-style'] = array(
            'id'      => 'elation-wc-checkout-style',
            'label'   => __( 'Checkout Page Design', 'elation' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'elation-wccheckout-style-default',
        );
        $options['elation-wccheckout-label-upper'] = array(
            'id'      => 'elation-wccheckout-label-upper',
            'label'   => __( 'Make Labels Uppercase', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $section = 'elation-woocommerce-color-settings';
        $sections[] = array(
            'id'          => $section,
            'title'       => __( 'Elation WC Color Settings', 'elation' ),
            'priority'    => '120',
            'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
            'panel'       => $panel,
        );
        $options['elation-btn-takeon-primary'] = array(
            'id'      => 'elation-btn-takeon-primary',
            'label'   => __( 'Buttons Take On Primary Color', 'elation' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        // ------------------------------------------------------------------------------------------- WooCommerce
    }
    
    // ---------------- PANEL - Mobile Settings
    $panel = 'elation-panel-mobile-settings';
    $panels[] = array(
        'id'       => $panel,
        'title'    => __( 'Elation Mobile Settings', 'elation' ),
        'priority' => '80',
    );
    // ------------------------------------------------------------------------------------------- Header
    $section = 'elation-panel-mobile-section-header';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Header', 'elation' ),
        'priority'    => '20',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-onmobile-heading-topbar'] = array(
        'id'          => 'elation-onmobile-heading-topbar',
        'label'       => __( 'Header', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-settings-section-header" rel="tc-section" title="Edit Header Settings" class="dashicons dashicons-admin-generic el-settings"></a>',
    );
    $options['elation-onmobile-remove-topbar'] = array(
        'id'      => 'elation-onmobile-remove-topbar',
        'label'   => __( 'Remove Site Top Bar', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-onmobile-remove-headsearch'] = array(
        'id'      => 'elation-onmobile-remove-headsearch',
        'label'   => __( 'Remove Search', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-onmobile-remove-header-bgimg'] = array(
        'id'      => 'elation-onmobile-remove-header-bgimg',
        'label'   => __( 'Remove Header Background Image', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-onmobile-remove-logo'] = array(
        'id'      => 'elation-onmobile-remove-logo',
        'label'   => __( 'Remove Site Logo', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'elation-mobile-title-size', 54 );
    $options['elation-mobile-title-size'] = array(
        'id'          => 'elation-mobile-title-size',
        'label'       => __( 'Site Title Mobile Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 20,
        'max'  => 66,
        'step' => 1,
    ),
        'default'     => 54,
        'description' => '<span class="fst">20</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">66</span>',
    );
    $rangedefault = get_theme_mod( 'elation-mobile-tagline-size', 12 );
    $options['elation-mobile-tagline-size'] = array(
        'id'          => 'elation-mobile-tagline-size',
        'label'       => __( 'Site Tagline Mobile Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 12,
        'max'  => 36,
        'step' => 1,
    ),
        'default'     => 12,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">36</span>',
    );
    // ------------------------------------------------------------------------------------------- Header
    // ------------------------------------------------------------------------------------------- Footer
    $section = 'elation-panel-mobile-section-footer';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Footer', 'elation' ),
        'priority'    => '20',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $options['elation-onmobile-remove-footer-bgimg'] = array(
        'id'      => 'elation-onmobile-remove-footer-bgimg',
        'label'   => __( 'Remove Footer Background Image', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-onmobile-remove-sidesocial'] = array(
        'id'      => 'elation-onmobile-remove-sidesocial',
        'label'   => __( 'Remove Side Aligned Social Icons', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-onmobile-remove-bottombar'] = array(
        'id'      => 'elation-onmobile-remove-bottombar',
        'label'   => __( 'Remove Footer Bottom Bar', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Extras
    // ------------------------------------------------------------------------------------------- Mobile Menu Colors
    $section = 'elation-panel-mobile-section-colors';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Mobile Menu Settings', 'elation' ),
        'priority'    => '20',
        'description' => '<div class="el-top-controls"><a href="#elation-panel-edit-text" rel="tc-panel" title="Edit Theme Text" class="dashicons dashicons-editor-textcolor el-font">Text</a><a href="#elation-panel-font-settings" rel="tc-panel" title="Edit Theme Fonts" class="dashicons dashicons-edit-large el-font">Fonts</a><a href="#elation-panel-colors" rel="tc-panel" title="Edit Theme Colors" class="dashicons dashicons-admin-appearance el-font">Colors</a><a href="#elation-panel-blog-settings" rel="tc-panel" title="Edit Blog Settings" class="dashicons dashicons-list-view el-blog">Blog</a><a href="#elation-panel-settings" rel="tc-panel" title="Edit Theme Settings" class="dashicons dashicons-admin-generic el-font">Settings</a></div>',
        'panel'       => $panel,
    );
    $choices = array(
        'elation-menu-rightside' => __( 'Slide from Right', 'elation' ),
        'elation-menu-leftside'  => __( 'Slide from Left', 'elation' ),
        'elation-menu-dropdown'  => __( 'Drop Down', 'elation' ),
    );
    $options['elation-menu-position'] = array(
        'id'      => 'elation-menu-position',
        'label'   => __( 'Mobile Menu Display', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-menu-rightside',
    );
    $options['elation-text-heading-nav-btn'] = array(
        'id'          => 'elation-text-heading-nav-btn',
        'label'       => __( 'Navigation / Button', 'elation' ),
        'section'     => $section,
        'type'        => 'heading',
        'description' => '<a href="#elation-panel-settings-section-header" rel="tc-section" title="Edit Header Settings" class="dashicons dashicons-admin-generic el-settings"></a>',
    );
    $options['elation-mobile-menu-addicon'] = array(
        'id'      => 'elation-mobile-menu-addicon',
        'label'   => __( 'Remove Mobile Menu Icon', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-mobile-menu-text'] = array(
        'id'      => 'elation-mobile-menu-text',
        'label'   => __( 'Mobile Navigation - Menu Button Text', 'elation' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Menu', 'elation' ),
    );
    $rangedefault = get_theme_mod( 'elation-mobilemenu-btn-size', 16 );
    $options['elation-mobilemenu-btn-size'] = array(
        'id'          => 'elation-mobilemenu-btn-size',
        'label'       => __( 'Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 28,
        'step' => 1,
    ),
        'default'     => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>',
    );
    $options['elation-mobile-menu-icon'] = array(
        'id'          => 'elation-mobile-menu-icon',
        'label'       => __( 'Mobile Menu Icon', 'elation' ),
        'section'     => $section,
        'type'        => 'text',
        'default'     => __( 'fa-bars', 'elation' ),
        'description' => __( 'Use any of the <a href="https://fontawesome.com/icons?d=gallery&s=solid&m=free" target="_blank">Free, Solid Icons</a> here', 'elation' ),
    );
    $rangedefault = get_theme_mod( 'elation-mobilemenu-btn-icon-size', 14 );
    $options['elation-mobilemenu-btn-icon-size'] = array(
        'id'          => 'elation-mobilemenu-btn-icon-size',
        'label'       => __( 'Icon Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 28,
        'step' => 1,
    ),
        'default'     => 14,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>',
    );
    $options['elation-text-heading-nav'] = array(
        'id'      => 'elation-text-heading-nav',
        'label'   => __( 'Navigation Menu', 'elation' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $choices = array(
        'elation-dd-style-button' => __( 'Button', 'elation' ),
        'elation-dd-style-arrow'  => __( 'Plain Arrow', 'elation' ),
    );
    $options['elation-dd-style'] = array(
        'id'      => 'elation-dd-style',
        'label'   => __( 'Drop Down Toggle Style', 'elation' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'elation-dd-style-button',
    );
    $options['elation-mobilemenu-bg-color'] = array(
        'id'      => 'elation-mobilemenu-bg-color',
        'label'   => __( 'Background Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#000000',
    );
    $rangedefault = get_theme_mod( 'elation-mobilemenu-item-font-size', 14 );
    $options['elation-mobilemenu-item-font-size'] = array(
        'id'          => 'elation-mobilemenu-item-font-size',
        'label'       => __( 'Items Font Size', 'elation' ),
        'section'     => $section,
        'type'        => 'range',
        'input_attrs' => array(
        'min'  => 11,
        'max'  => 22,
        'step' => 1,
    ),
        'default'     => 14,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">22</span>',
    );
    $options['elation-mobilemenu-font-color'] = array(
        'id'      => 'elation-mobilemenu-font-color',
        'label'   => __( 'Font Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#828282',
    );
    $options['elation-mobilemenu-font-hover-color'] = array(
        'id'      => 'elation-mobilemenu-font-hover-color',
        'label'   => __( 'Font Hover / Page Selected Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['elation-mobilemenu-arrow-color'] = array(
        'id'      => 'elation-mobilemenu-arrow-color',
        'label'   => __( 'Sub Menu Arrow Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#828282',
    );
    $options['elation-mobilemenu-sub-dark'] = array(
        'id'      => 'elation-mobilemenu-sub-dark',
        'label'   => __( 'Sub Menu Shade Darker', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-mobilemenu-x-color'] = array(
        'id'      => 'elation-mobilemenu-x-color',
        'label'   => __( 'Close X Color', 'elation' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#828282',
    );
    // ------------------------------------------------------------------------------------------- Mobile Menu Colors
    // ------------------------------------------------------------------------------------------- Background Image
    $section = 'background_image';
    $sections[] = array(
        'id'       => $section,
        'title'    => __( 'Background Image', 'elation' ),
        'priority' => '80',
    );
    $options['elation-bg-image-header-clear'] = array(
        'id'      => 'elation-bg-image-header-clear',
        'label'   => __( 'Make Header Transparent', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-bg-image-footer-clear'] = array(
        'id'      => 'elation-bg-image-footer-clear',
        'label'   => __( 'Make Footer Transparent', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Background Image
    // ------------------------------------------------------------------------------------------- Plugin Support
    $section = 'elation-section-plugin-support';
    $sections[] = array(
        'id'          => $section,
        'title'       => __( 'Plugin Support', 'elation' ),
        'priority'    => '150',
        'description' => __( 'Elation adds/removes custom styling to be more compatible with external plugins', 'elation' ),
    );
    $options['elation-plugin-edd-style'] = array(
        'id'      => 'elation-plugin-edd-style',
        'label'   => __( 'Easy Digital Downloads', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['elation-plugin-fix-mega-menu'] = array(
        'id'      => 'elation-plugin-fix-mega-menu',
        'label'   => __( 'Mega Menu', 'elation' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Plugin Support
    // Adds the sections to the $options array
    $options['sections'] = $sections;
    // Adds the panels to the $options array
    $options['panels'] = $panels;
    $customizer_library = Customizer_Library::Instance();
    $customizer_library->add_options( $options );
    // To delete custom mods use: customizer_library_remove_theme_mods();
}

add_action( 'init', 'elation_customizer_library_options' );