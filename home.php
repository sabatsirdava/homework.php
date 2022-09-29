<?php

function printMyQuote($quote, $number = 1) {
   echo "$number." . $quote["text"] . "\n";
   echo "Author: " . $quote["author"] . "\n";
}

$command = 0;
$Quotes = [];

do {
   echo "-----\n";
   echo "press 0 to exit \n";
   echo "press 1 to add new quote \n";
   echo "press 2 to get list of quotes \n";
   echo "press 3 to random quote \n";


   $command = readline();

   switch ($command) {
      case 1:
         echo "Enter quote: \n";
         $quote["text"] = readline();
         echo "Enter author: \n";
         $quote["author"] = readline();
         $Quotes[] = $quote;
         break;

      case 2:
         foreach ($Quotes as $index => $quote) {
            $number = $index + 1;
            printMyQuote($quote, $number);
            echo "-------- \n";

         }
         break;

      case 3:
         $count = count($Quotes);
         $index = rand(0, $count-1);
         printMyQuote($Quotes[$index], $index+1);
         break;

      case 0:
         echo "Bye \n";
         break;

      default:
      echo "Command not recognized, allowed only 0,1,2, and 3 \n";
      break;



   }
} while ($command != 0);
