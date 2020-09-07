<?php
$host="localhost";
  $user="root";
  $pass="";
  $db="monit paper sales agency";

$conn=mysqli_connect($host,$user,$pass,$db) or die("Connection Failed");
echo"Connection Succesfull";
if(isset($_POST["sub"]))
{
  $RefNo.=$_POST["Ref No."];
  $Date=$_POST["Date"];
  $Address=$_POST["Address"];
  $Quality=array("--Select Quality","H.W.C Grey Back","White Back","H.W.C Natural","L.W.C");
  $select_key=$_POST["Quality"];
  $select_val=$Quality[$_POST["Quality"]]; 
  $SNo=$_POST["S.No."];
  $Size=$_POST["Size"];
  $GSM=$_POST["GSM"];
  $Quantity=$_POST["Quantity"];
  $Grain=$_POST["Grain"];
  $Billing=$_POST["Billing Rate"];
  $DeliveryType=$_POST["Delivery Type"];
  $dateee=$_POST["DeliveryDate"];
  $Place=$_POST["Place Of Delivery"];
  $sql = "INSERT INTO tablename(Username,Password) VALUES('$uname','$pass')";
  if(mysqli_connect($conn,$sql))
  {
    echo"New Record Created Successfully";
  }
  else
  {
    echo"Connection Unseccessfull";
  }

mysqli_close($conn);
}
?>
<!DOCTYPE html>

?>
<html>
   GST:-23ABZPJ9570A1ZE
   <head><center><h1>MONIT PAPER ASSOCIATES</h1>
     <p>S G K House, 14 B,Kailash Park, Near Geeta Bhawan Mandir, INDORE-452001</p>
     <p>PH.: 0731-4973 485(office), MOB.:9425053841 ,9827030841</p>
     <p>E-Mail:monitpaper12@rediffmail.com</p>
  <p>H.O.:J-6,CHETAKPURI,LASHKAR,GWALIOR(MP)</p>
   <h2><u>PURCHASE ORDER</u></h2>
  
</center>   
   </head>
   <body>
     <form>
     Ref No. MPA/DPO/<input type="number" name="RefNo.">
       <div align="right">Date:<input type="date" name="Date"></div><br>
       Address:<input type="text" name="Address"><br><br>
       Sir,<br>
         Please dispatch the following materials as per the instuctions given below:
       <br><br>
       Quality:<select size="1" id="Quality" name="Quality">
        <option value="">-Select One-</option>
        <option value="H.W.C GREY BACK">H.W.C GREY BACK</option>
        <option value="WHITE BACK">WHITE BACK</option>
        <option value="H.W.C NATURAL">H.W.C NATURAL</option>
       <option value="L.W.C">L.W.C</option>
       </select><br><br>
 <table border="1">
            <tr>
                <th>S.No</th>
                <th>size</th>
                <th>GSM</th> 
                <th>Quantity</th>
                <th>Grain</th>
                <th>Billing Rate</th>
            </tr>
   <tr>
     <td><input type="number" name="SNo"></td>
     <td><input type="text" name="Size"></td>
     <td><input type="number" name="GSM"></td>
     <td><input type="number" name="Quantity"></td>
     <td><select size="1"><input name="Grain" type="text" >
        <option>LONG</option>
       <option>SHORT</option></select></td>
       <td><input type="number" name="Billing"></td>
   </tr>
        </table>
     
      <h4>Terms of payment        :AS AGREED</h4><br>
      <h4>Transit Insurance       :ARRANGED BY MONIT PAPER ASSOCIATES(1903002119P100349467)</h4>
      <h4>Delivery Time           :<select><input type="text" name="DeliverType">
                  <option>URGENT</option>
                 <option><input type="date" name="dateee"></option></select></h4>
      <h4>Place of Delivery:<select><input type="text" name="Place">
                  <option>INDORE</option>
                  <option>UJJAIN</option>
        <option>RATLAM</option>
        <option>BHOPAL</option>
        <option>PITHAMPUR</option></select></h4>
      <h4>Billing(Shift to)<br>        MONIT PAPER ASSOCTIATES INDORE
        (NAME/GST NO./PIN CODE) </h4> Godown Address:LAXMI BAI NAGAR,KILA MAIDAN
      <h4>                         INDORE</h4>
      <h4>                         452006</h4>
      <h4>DISCOUNT                :AS AGREED</h4>
      <h4>L.R.                    :1.KINDLY SEND Q.C. REPORT ALONG WITH THE DISPATCHED MATERIAL</h4>
      <h4>                         2.GOOD COATING,HIGH STIFFNESS AND DUST FREE</h4>
      <h4>Yours faithlully,</h4>
      <h4>For Monit Paper Associates</h4>
  
     </form></body>
</html>