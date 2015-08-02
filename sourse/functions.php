register_sidebar( array(
        'name'          => __( 'Tabs sidebar', 'ykushev' ),
        'id'            => 'sidebar-hometabs',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'ykushev' ),
        'before_widget' => '<div role="tabpanel" class="tab-pane widget row fade %2$s" id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<li role="presentation"><a href="#" aria-controls="#" role="tab" data-toggle="tab">',
        'after_title'   => '</li>',
    ) );