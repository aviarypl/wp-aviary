<?php
/*
Plugin Name: Aviary.pl pressbox widget
Plugin URI: http://www.aviary.pl
Description: Widget displaying press box
Author: Marek Stępień
Version: 2.0
Author URI: http://www.aviary.pl
*/

function pressbox_widget() {
?>
            <table class="presstbl">
            <tr>
                <td><h3><a class="feedlink" href="/category/dla-prasy/feed/" title="RSS dla prasy"><span></span> RSS</a> Informacje prasowe Aviary.pl</h3>
                <ul class="bgul">
                <?php aviarypl_get_recent_pressposts(); ?>
                </ul>
                <p class="more"><a href="/category/dla-prasy/"><span></span>wi&#281;cej</a></p>
                </td>
                <td><h3>Inne zasoby</h3>
                <ul>
                <?php wp_list_bookmarks(array('category_name'=>'Odnośniki dla prasy','categorize'=>0,'title_li'=>0)); ?>
                <!-- aby dodac linki do tego miejsca, dodaj je w wp jako linki-zasoby-prasowe -->
                </ul>
                </td>
            
            </tr>
            </table>
<?php 
}

function init_pressbox(){
    wp_register_sidebar_widget("aviary_pl_pressbox", "Aviary.pl pressbox", "pressbox_widget");
}
add_action("init", "init_pressbox");
?>
