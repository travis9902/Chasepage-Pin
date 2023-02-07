<?php


function validateCard($number, $extra_check = false){
    $cards = array(
        "visa" => "(4\d{12}(?:\d{3})?)",
        "mastercard" => "(5[1-5]\d{14})",
        "amex" => "(3[47]\d{13})",
        "maestro" => "((?:5020|5038|6304|6579|6761)\d{12}(?:\d\d)?)",
        "dinersclub" => "(3(?:0[0-5]|[68][0-9])[0-9]{11})",
        "discover" => "(6(?:011|5[0-9]{2})[0-9]{12})",
        "jcb" => "(35[2-8][89]\d\d\d{10})",

    );
    $names = array("Visa", "Mastercard","American Express","Maestro", "Diners Club", "Discover", "JCB");
    $matches = array();
    $pattern = "#^(?:".implode("|", $cards).")$#";
    $result = preg_match($pattern, str_replace(" ", "", $number), $matches);
    if($extra_check && $result > 0){
        $result = (validateCard($number))?1:0;
    }
    if($result==0)
       return false;     
    else
    return ($result>0)?$names[sizeof($matches)-2]:false;
}

function is_valid_card($number) 
{
    // Remove Spaces and hyphens for some credit cards
    $number=preg_replace('/\D/', '', $number);

    // Set the string length and parity
    $number_length=strlen($number);
    $parity=$number_length % 2;    
    // Apply Luhn's algorthm for the number
    $total=0;
    for ($i=0; $i<$number_length; $i++) 
    {
        $digit=$number[$i];
        if ($i % 2 == $parity) 
        {
            $digit*=2;
            // If the sum is two digits, add them together (in effect)
            if ($digit > 9) 
            {
                $digit-=9;
            }
        }
        // Add all the digits
        $total+=$digit;
    }
    // If the modulo 10 equals 0, then number is valid
    if($total % 10 == 0)
    {   
        return validateCard($number);
    }    
    else 
        return false;
}
?>