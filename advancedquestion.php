<?php
$result_sunday = 0;
$first_Janof1900 = "Mon";
$start_Year = 1900;
$first_Jan = "";
$leap_Months = ["Jan"=>31,"Feb"=>29,"Mar"=>31,"Apr"=>30,"May"=>31,"Jun"=>30,"Jul"=>31,"Aug"=>31,"Sep"=>30,"Oct"=>31,"Nov"=>30,"Dec"=>31];
$not_LeapMonths = ["Jan"=>31,"Feb"=>28,"Mar"=>31,"Apr"=>30,"May"=>31,"Jun"=>30,"Jul"=>31,"Aug"=>31,"Sep"=>30,"Oct"=>31,"Nov"=>30,"Dec"=>31];
$desire_Output;
//echo century_Leapyear($start_Year);
while($start_Year<2001){
    if(century_Year($start_Year)){
        if(century_Leapyear($start_Year)){            
            foreach ($leap_Months as $month => $day){
                //echo $first_Janof1900;
                if($month === "Jan"){
                    $first_Jan = first_Day_EachMonth($month,$day,$first_Janof1900);
                    $first_Janof1900 = $first_Jan;
                    //echo $first_Jan;
                    /*$result_sunday = how_many_sunday($day,$first_Jan);   
                    $desire_Output[$start_Year] = $result_sunday;    */                               

                }
                else{
                    $first_Jan = first_Day_EachMonth($month,$day,$first_Janof1900);
                    $first_Janof1900 = $first_Jan;
                   // echo $first_Janof1900;
                }
                //echo $first_Jan;
            }
            //$first_Janof1900 = $first_Jan;
            //echo $first_Janof1900;  
            //$desire_Output[$start_Year] = $result_sunday;           
            $start_Year++; 
                      

        }
        else{
            foreach($not_LeapMonths as $month => $day){
                
                if($month === "Jan"){                   
                    $first_Jan = first_Day_EachMonth($month,$day,$first_Janof1900);
                    $first_Janof1900 = $first_Jan;
                   // echo $first_Janof1900;
                   /* $result_sunday = how_many_sunday($day,$first_Jan); 
                    $desire_Output[$start_Year] = $result_sunday; */                  

                }
                else{
                    $first_Jan = first_Day_EachMonth($month,$day,$first_Janof1900);
                    $first_Janof1900 = $first_Jan;
                    //echo $first_Janof1900;
                }
               // echo $first_Jan;
            }
            //$first_Janof1900 = $first_Jan; 
            //echo $first_Janof1900; 
            //$desire_Output[$start_Year] = $result_sunday;           
            $start_Year++;
            
        }
    }
    else{
        if(leap_Year($start_Year)){
            foreach($leap_Months as $month => $day){
                //echo $first_Janof1900;
                if($month === "Jan"){                   
                    $first_Jan = first_Day_EachMonth($month,$day,$first_Janof1900);
                    $first_Janof1900 = $first_Jan;
                    //echo $first_Janof1900;
                   /* $result_sunday = how_many_sunday($day,$first_Jan);
                    $desire_Output[$start_Year] = $result_sunday;   */                 

                }
                else{
                    $first_Jan = first_Day_EachMonth($month,$day,$first_Janof1900);
                    $first_Janof1900 = $first_Jan;
                    //echo $first_Janof1900;
                }
                //echo $first_Jan;
            }
           // $first_Janof1900 = $first_Jan;
            //echo $first_Janof1900; 
            //$desire_Output[$start_Year] = $result_sunday;            
            $start_Year++;
            

        }
        else{
            foreach($not_LeapMonths as $month => $day){
                if($month === "Jan"){                
                    $first_Jan = first_Day_EachMonth($month,$day,$first_Janof1900);
                    $first_Janof1900 = $first_Jan;
                    //echo $first_Janof1900;
                    /*$result_sunday = how_many_sunday($day,$first_Jan);  
                    $desire_Output[$start_Year] = $result_sunday;    */         
                }
                else{
                    $first_Jan = first_Day_EachMonth($month,$day,$first_Janof1900);
                    $first_Janof1900 = $first_Jan;
                   // echo $first_Janof1900;
                }
                //echo $first_Jan;
            }
            //$first_Janof1900 = $first_Jan; 
            //echo $first_Janof1900; 
           // $desire_Output[$start_Year] = $result_sunday;          
            $start_Year++;
            
        }

    }
    echo "In ".$start_Year.", The first Day of January is ".$first_Janof1900.".";
    $result_sunday = how_many_sunday(31,$first_Janof1900);  
    $desire_Output[$start_Year] = $result_sunday;
    //printf("\n");
   echo("\n");
   
    
    



}
//print_r($desire_Output);
foreach ($desire_Output as $year => $total_sunday){
    if($year!=1900 and $year!=2001){
        echo $total_sunday." Sundays fall on the first of the month of ".$year.". ";
        echo("\n");
    }
    else{
        continue;
    }
    
}


function guessing_NextDay($leaveday){
    $first_Day = "";
    switch($leaveday){
        case 0:
            $first_Day = "Mon";
            break;
        case 1:
            $first_Day = "Tue";
            break;
        case 2:
            $first_Day = "Wed";
            break;
        case 3:
            $first_Day = "Thu";
            break;
        case 4:
            $first_Day = "Fri";
            break;
        case 5:
            $first_Day = "Sat";
            break;
        case 6:
            $first_Day = "Sun";
            break;
    }
    return $first_Day;
}
function first_Day_EachMonth($month,$day,$f_Jan){
    
    $sunday_Count = 0;
    //echo($month.$day.$f_Jan);
    switch($f_Jan){
        case "Mon":
            $guess = $day%7;
            //echo($guess);
            $first_Day = guessing_NextDay($guess);
            break;
        case "Tue":
            $guess = ($day-6)%7;
            //echo($guess);
            $first_Day = guessing_NextDay($guess);
            break;
        case "Wed":
            $guess = ($day-5)%7;
            //echo($guess);
            $first_Day = guessing_NextDay($guess);
            break;
        case "Thu":
            $guess = ($day-4)%7;
            //echo($guess);
            $first_Day = guessing_NextDay($guess);
            break;
        case "Fri":
            $guess = ($day-3)%7;
           // echo($guess);
            $first_Day = guessing_NextDay($guess);
            break;
        case "Sat":
            $guess = ($day-2)%7;
            //echo($guess);
            $first_Day = guessing_NextDay($guess);
            break;
        case "Sun":
            $guess = ($day-1)%7;
            //echo($guess);
            $first_Day = guessing_NextDay($guess);
            break;
    }
    
    return $first_Day;
    
}
function century_Leapyear($year){
    if((($year%4)==0) and (($year%400)==0)){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
function leap_Year($year){
    if(($year%4)===0){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
function century_Year($year){
    if(($year%100)==0){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
function how_many_sunday($day,$f_Jan){
    //echo($f_Jan." and ".$day);
    $sunday_Count = 0;
        switch($f_Jan){
            case "Mon":                
                $sunday_Count = floor(($day/7));
                //echo($sunday_Count);                
                break;
            case "Tue":
                $sunday_Count =floor((($day-6)/7)+1);
                //echo($sunday_Count);
                break;
            case "Wed":               
                $sunday_Count = floor((($day-5)/7)+1);
                //echo($sunday_Count);
                break;
            case "Thu":                
                $sunday_Count = floor((($day-4)/7)+1);
                //echo($sunday_Count);
                break;
            case "Fri":               
                $sunday_Count = floor((($day-3)/7)+1);
                //echo($sunday_Count);
                break;
            case "Sat":               
                $sunday_Count = floor((($day-2)/7)+1);
                //echo($sunday_Count);
                break;
            case "Sun":               
                $sunday_Count = floor((($day-1)/7)+1);
                //echo($sunday_Count);
                break;
        }
    return $sunday_Count;


}
