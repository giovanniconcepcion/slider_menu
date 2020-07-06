<!-- Insert into PHPCode Snippets or header.php of your theme -->
<div class="custom-nav-container">
    <div class="row">
        <div class="col nav-logo align-self-center">
            <nav class="mainnav">
            <div class="navigationcontain"></div>
                <div class="menu-button">
                    <img src="<?php echo wp_get_attachment_url($id) ?>" class="menu-logo" alt="">
                    <i class="fas fa-bars nav-bars"></i>
                </div>
                <div class="nav-container">
                    <?php wp_nav_menu( array(
                        'menu' => 'NAME_OF_MENU'
                    )); ?>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Insert in the footer -->
<script>
jQuery(function($) {
$('.menu-button').on('click', function() {
        var menu = $('.mainnav');
        var image = $('.menu-logo');
        
        if (menu.hasClass('open')) { 
          menu.removeClass('open'); 
          image.attr("src", "CLOSED-MENU-LOGO-LINK");
        }
        else { 
          menu.addClass('open'); 
          image.attr("src", "OPEN-MENU-LOGO-LINK");
        }   
        
    });
});
</script>
