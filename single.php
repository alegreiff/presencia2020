<?php

if(get_field('jdg_ciudad')){
    the_field('jdg_ciudad');
}else{
    echo 'matanga';
}

genesis();
