<?php

function permission($age)
{
    if($age > 18){
        echo "you have a permission";
    } else {
        echo "you can't access";
    }
}
