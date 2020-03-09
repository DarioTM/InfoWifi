<nav>
    
    <div class="header-menu">
        <ul>
            <li class="active"><a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a></li>
            <li><a href="<?php echo get_page_link(get_page_by_title('About')->ID)?>">About us</a></li>
            <!--He añadido la ruta que va hacia laravel en el nav ESTO HAY QUE QUITARLO Y PONER UNA RUTA DE WORDPRESS Alex-->
            <li><a href="<?php echo get_page_link(get_page_by_title('Points')->ID)?>">Access Points</a></li> 
            <li><a href="<?php echo get_page_link(get_page_by_title('Contact')->ID)?>">Contact</a></li>
            
        </ul>
    </div>
    
</nav>
