<?php

function makeHeader($array){
    foreach($array as $elem){
        echo '<li class="our-hotel"><a href=" '.$elem['link'] . ' " class="nav-link"> '.$elem['text'] . ' </a>
        <nav>
            <ul class="inside-nav" id="inside-nav">';
        foreach ($elem['nav'] as $elem1){
            echo '<li><a href="#" class="nav-link">'.$elem1.'</a></li>';
    
        }
        echo '</ul>
        </nav>
    </li>' ;
    }
}

function makeCards($array){
    foreach($array as $variable){
                        
        echo '<div class="card">
           <img src="' . $variable['img'] . '" alt="' . $variable['img_alt'] . '">
           <div class="overlay"></div>
           <div class="card-content">
               <h3 class="card-title">' . $variable['card-title'] .  '</h3>
               <a href="#" class="button button-small">'. $variable['button-small'] . '</a>
           </div>
       </div>' ;
    }
}