<?php



if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Confirm'])){

//mail from customer
            $to_mail = "Fukushima@keal.com.bd";   
            $email_subject="Fukushima Product Inquiry";
            
            $email_message="Sent From   : ".$_POST['mailaddress']."\r\n".$_POST['']."\r".$_POST['']."\r\n".
                   "Address         : ".$_POST['address']."\r\n".
                   "Company         : ".$_POST['company']."\r\n".
                   "Inquired By        : ".$_POST['username']."\r\n".
                   "Phone No           : ".$_POST['phone']."\r\n".
                   "Inquiry Type       : ".$_POST['inquiryType']."\r\n".
                   "Product Type       : ".$_POST['ProductType']."\r\n".
                  
                   
                   
                   
                  "Type of machine: " .$_POST['REQUIREMENT']."\r\n\r\n";
                    
                    
            $headers = 'From: '.$_POST['mailaddress']."\r\n".
                     'Reply-To:'.$_POST['mailaddress'] . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();

            'Reply-To: '.$_POST['mailaddress']."\r\n" .

            'Content-Type: text/html; charset=ISO-8859-1'."\r\n".

            'MIME-Version: 1.0'."\r\n\r\n";

            mail("<$to_mail>", "$email_subject","$email_message", "$headers"); 
}        
?>
<script>
function validateForm() {


    var x = document.forms["inputForm"]["username"].value;
    if (x == null || x == "") {
        alert("please enter valid name");
        return false;
   }
   
 
   
      var x = document.forms["inputForm"]["company"].value;
    if (x == null || x == "") {
        alert("company must be fill out");
        return false;
   }
   
   
     
  
   
   var x = document.forms["inputForm"]["address"].value;
    if (x == null || x == "") {
        alert("please enter valid address");
        return false;
   }
   
   
   var x = document.forms["inputForm"]["phone"].value;
    if (! /^[0-9]{11}$/.test(x)) {
  alert("Please input exactly 11 contact numbers!");
  return false;
}
   
   
   
    var x = document.forms["inputForm"]["mailaddress"].value;
    if (x == null || x == "") {
        alert("Please fill out the email field.");
        return false;
   }

   var x = document.forms["inputForm"]["mailaddress"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    
    

   
 }
</script>
<html>
<!-- Mirrored from www.kawashima-pack.co.jp/inquiry_e_ad/form_kawa_e_ad.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2017 03:14:43 GMT -->

<head>

<title>Thank you for your inquiry.</title>
 <link rel="shortcut icon" href="share_img/logo_icon2.png" />
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<!-- base href="https://maneki.tactnet.co.jp/kawa-e/inquiry/" -->


</head>
<body bgcolor="#FFFFFF" text="#333333">

<form method="post" action="">
<input name="pg" value="2" type="hidden">

<center>

<table border="0" cellpadding="3" cellspacing="0" width="640">
<tbody><tr><td bgcolor="#000066" align="center">
  <font color="#FFFFFF" size="2">
  <b>FUKUSHIMA INDUSTRIES CORP.Contact</b></font></td></tr>
</tbody></table>
<br>

<table border="0" cellpadding="2" cellspacing="0">
<tbody>
<tr>
<td valign="top"><font size="2"><b>(Note)</b></font></td>
    <td>
    <font size="2"><b>Please click "Confirm" button after filling the follwoing columns.</b></font></td></tr>

  <tr><td valign="top" align="right"><font color="#CC0000" size="2"><br></font></td>
    <td><font color="#000000" size="2"> Fields marked  <img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8">  must be completed.</font></td></tr>
</tbody></table>
<br>


<br>



<form action="" method="post">

<table border="0" cellpadding="1" cellspacing="0" width="640">
<tbody><tr><td bgcolor="#3366CC" align="center">
  <table border="0" cellpadding="3" cellspacing="1" width="100%">

  <tbody><tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">Your name</font></td>
      <td bgcolor="#FFFFFF"><input name="username" size="40" type="text"></td></tr>

  <tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">Company</font></td>
      <td bgcolor="#FFFFFF"><input name="company" size="40" type="text"></td></tr>

  <tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">Address</font></td>
      <td bgcolor="#FFFFFF">

      <input name="address" size="20" type="text"></td>

      </tr>

  <tr>

  <td bgcolor="#EBE9E9" nowrap="nowrap">

  <img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> 

  <font size="2">Phone No.</font></td>
      <td bgcolor="#FFFFFF">

      <input name="phone" size="40" type="text">

      </td></tr>

  <tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">E-mail</font></td>
      <td bgcolor="#FFFFFF"><input type="text" name="mailaddress" size="30"><br></td>
      <tr><td bgcolor="#EBE9E9" nowrap="nowrap"><font size="2"> What type of machine you require</font></td>
<td bgcolor="#EBE9E9">
   <select  name="inquiryType">
        <option value="" selected="selected">Please select.</option>
        <option value="PackgingMachine">V.F.F.S Packging Machine</option>
        <option value="FlowWrapper">H.F.F.S Flow Wrapper</option>
        <option value="OverwrappingMachine">Overwrapping Machine</option>
        <option value="CaseErector">Case Erector/Case Sealer</option>
    </select>
    </td>
</tr> 

<tr><td bgcolor="#EBE9E9" nowrap="nowrap"><font size="2"> What is your product</font></td>
<td bgcolor="#EBE9E9">
   <select  name="ProductType">
        <option value="" selected="selected">Please select.</option>
        <option value="Garments">Garments</option>
        <option value="Cosmetics">Cosmetics</option>
        <option value="Beverage">Beverage</option>
        <option value="ProcessedFood">Processed Food</option>
        <option value="RawFood">Raw Food</option>
        <option value="Condiment">Condiment</option>
        <option value="Medicine">Medicine</option>
        <option value="Toys">Toys</option>
        <option value="PlasticProducts">Plastic Products</option>
        <option value="Utensils">Utensils</option>
        <option value="FoodGrains">Food Grains</option>
        <option value="Seeds">Seeds</option>
        <option value="Fertilizer">Fertilizer</option>
        <option value="Others">Others</option>
    </select>
    </td>
</tr>    

     <tr><td bgcolor="#EBE9E9" nowrap="nowrap" valign="top"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">Notes</font></td>
      <td bgcolor="#FFFFFF"><textarea name="REQUIREMENT" rows="5" cols="50"></textarea></td></tr> 



<!--01 option start-->
  

  </tbody></table>
</td></tr>
</tbody></table>
<br>

<table border="0" cellpadding="0" cellspacing="0" width="640">
<tbody><tr><td align="center">
  <input type="submit" name="Confirm"  value="Confirm"> 
  
</td></tr>
</tbody></table>

</form>



<br>

<table border="0" cellpadding="0" cellspacing="0" width="640">
<tbody><tr><td><hr size="1" noshade="noshade"></td></tr>
<tr><td align="center"><font color="#777777" size="2">Copyright (C) Kyoto Engineering & Automation Ltd. All Rights Reserved.</font></td></tr>
</tbody></table>
<br>

</center>
</form>


</body>
<!-- Mirrored from www.kawashima-pack.co.jp/inquiry_e_ad/form_kawa_e_ad.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2017 03:14:43 GMT -->
</html>