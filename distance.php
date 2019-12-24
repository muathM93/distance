<?php

private function distance($user_lat, $user_long, $location_lat, $location_long)
    {
      $theta = $user_long - $location_long;
      $dist = sin(deg2rad($user_lat)) * sin(deg2rad($location_lat)) +  cos(deg2rad($user_lat)) * cos(deg2rad($location_lat)) * cos(deg2rad($theta));
      $dist = acos($dist);
      $dist = rad2deg($dist);
      $dis_format = $dist * 60 * 1.1515 * 1.609344;

      return number_format($dis_format,2);
    }
    ?>
