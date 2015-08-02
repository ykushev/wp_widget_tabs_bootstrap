
<?php if ( is_active_sidebar( 'sidebar-hometabs' ) ) : ?>
    <div class="container">
        <div id="widget-area" class="widget-area" role="complementary">
            <div class="mytabs">
                <?php dynamic_sidebar( 'sidebar-hometabs' );?>
            </div>
        </div><!-- .widget-area -->
    </div>
<?php endif; ?>