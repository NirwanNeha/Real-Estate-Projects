<?php
if(isset($_REQUEST['submit'])){
$to  = 'enquiry@propzilla.in'; // note the comma
// subject 
$subject = 'Mumbai Projects - Birla Niyaara New Design';  
// message
$message = '
<table>    
  <tr>
    <td>Name</td><td>'.$_REQUEST['name'].'</td> 
  </tr>
  <tr>
    <td>Phone</td><td>('.$_REQUEST['countryCode'].')'.$_REQUEST['mobile'].'</td>
  </tr>
  <tr>
    <td>Email</td><td>'.$_REQUEST['email'].'</td>
  </tr>   
  <tr>
      <td>IP Address </td><td>'.$_SERVER['REMOTE_ADDR'].'</td>  
  </tr>
</table> 
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers  
$headers .= 'From: Mumbai Projects - Birla Niyaara New Design<enquiry@propzilla.in>' . "\r\n";
// $headers .= 'Bcc: info.propzilla@gmail.com' . "\r\n";
$headers .= 'Cc: info.propzilla@gmail.com, manish.mishra@propzilla.in' . "\r\n";
// Mail it
 @mail($to, $subject, $message, $headers); 
  /****************** Post data on sell.do *******************/
  if(!empty($_REQUEST['email']) && !empty($_REQUEST['mobile'])){
    if($_REQUEST['email'] != 'propzillatest@propzillatest.com') {
      include('post.php');  
    }
  } 
  /****************** End of post sell.do data **************/
}
?>
<script>
alert('Enquiry has been sent successfully. We will get back to you soon.');
window.location="../thankyou.html";
</script>