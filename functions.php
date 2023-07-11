<?php

    class Functions{
        public static function calcDays($checkin,$checkout){
            $checkinDate = new DateTime($checkin);
            $checkoutDate = new DateTime($checkout);

            $interval  = $checkinDate->diff($checkoutDate);

          $numOfNights = $interval->days;

            return (int) $numOfNights;
        }

        public static function calcPrice($days,$roomType)
        {
            $price = 0;
            if($roomType == 1){
                //200
                $price =  200 * $days;
            }else if($roomType == 2){
                //400
                $price =  400 * $days;
            }else if($roomType == 3){
                //600
                $price =  600 * $days;
            }else if($roomType == 4){
                //600
                 $price =  600 * $days;
            }else if($roomType == 5){
                //200
                 $price =  200 *  $days;
            }else if($roomType == 6){
                //400
                 $price =  400 *  $days;
            }else{
                $price = false;
            }
            return $price;
        }
    }