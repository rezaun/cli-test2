<?php

$number = rand(1, 100);
while (true){
    $user_input = (int) readline( prompt:"Enter a number: ");

    if($user_input > $number) {
        printf(format: "Try a lower number.\n");
    } else if ($user_input < $number){
        printf(format: "Try a bigger number. \n");
    } else{
        printf(format: "Congrates! You guessed it right!");
        break;
    }
}

