<?php

require_once('includes/configpdo.php');

//set query
$result = $mysqli->query("SELECT * from hmsg order by time desc");

//get the results as row
$row = $result->fetch_assoc();

?>





<!DOCTYPE Html>
<html>
<head>
<title>
Co-curricular 
</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="Author" content="Mohammad Mahbub Talukder">

<link rel="stylesheet" type="text/css" href="html.css">

</head>
<body>

<table class="table" align="center" border="0" cellspacing="5" cellpadding="10px" width="100%">


        
            
            <td colspan="8" height="150px" width="100%" class="banner"> <img src="logo.png" width="150px" height="150px" align="left"> <h1>
                <font  size="36" style="padding-left: 200px;"> M.A. GONY BHUYAIN HIGH SCHOOL </font> </h1> 
                <h2>
                <font color="black" size="5"  style="padding-left: 200px;">ATPASHA,MITHAMAIN,KISHOREGANJ || EIIN: 110514 </font> </h2>
            </td>
        



        <tr >

            
                
        <td width="100px" class="box"  > <a href="student_home.php"> Home</a></td>
        <td width="100px" class="box" ><a href="co_curricular.php"> Co-curricular</a></td>


        <td width="100px" class="box"  > <a href="attendance.php">Attendance</a></td>
        <td width="100px" class="box" ><a href="routin.php"> Class Routin </a></td>
        <td width="100px" class="box" ><a href="find-result.php">Results</a></td>
        <td width="100px" class="box" ><a href="TeachersInfo.php">Teacher's Info </a> </td>
        <td width="100px" class="box" ><a href="gellery.php">Gallery</a></td>

        <td width="100px" class="box" ><a href="contact.php"> Contact </a></td>



   

       </tr>



    <tr>
        <td colspan="2" valign="top" width="25%" >

            <table border="0" class="adm" cellspacing="10" cellpadding="5">
                <tr>
                    <td height="25px" width="285px" class="adminbar" style="color:Green; text-transform: uppercase;"><b>Letest News</b></td>

                </tr>
                <tr>  
                <td height="150px" width="285px" valign="top" class="admin" >
              <br> 
               
          
                
                <br>
                <br>
                <marquee direction="left" Scrolldelay="150" ><strong>

                    <?php
        echo htmlentities($row['msg']);
        ?>
               
                </strong>
               </marquee>
             
                  

                         </td>  
                      </tr>

                 </table>
                 <br>

            <table class="left_sidebar" width="100%" height="500px" text-align="top" >
             <td valign="top">  
            <li class="lli" type="none" style="text-align:center;font-size:20px;"><b><i>Important Links</i></b></li>
            <br>
            <li class="lli" type="none"><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">Dhaka Education Board</a></li>
            <li class="lli" type="none"><a href="http://www.eboardresults.com" target="_blank" >E-board Results</a></li>
            <li class="lli" type="none"><a href="http://www.educationboard.gov.bd" target="_blank" >Directory of Secondery &amp; Higher Education Board </a></li>
            <li class="lli" type="none"><a href="http://www.xiclassadmission.gov.bd" target="_blank" >College Admission</a></li>
            <li class="lli" type="none" fa fa-book><a href="http://www.nctb.gov.bd" target="_blank" >NCTB</a></li>
           
            <li class="lli" type="none"><a href="http://www.bpsc" target="_blank" >Directory of Primary Education board</a></li>
            
            <li class="lli" type="none"><a href="http://www.bpsc.gov.bd" target="_blank" >Bangladesh Job Portal</a></li>
            <li class="lli" type="none"><a href="http://www.bangladesh.gov.bd" target="_blank" >Bangladesh National Website</a></li>
            <li class="lli" type="none"><a href="http://www.bteb.gov.bd" target="_blank" >Bangladesh Technical Education board</a></li>
            
            </td> 
            </table>
            <br>

            


        </td>
    




    <td colspan="4" height="1000px" width="50%" valign="top" class="main_content">
        
            <!-- content area-->

              <style type="text/css">

                .co_curricular
                {
                    border-collapse: collapse;
                    font-size: 20px;
                    text-align: center;
                    width: 100%;
                    box-shadow: 0px 2px 6px 2px #CCC;

                }
                .co_curricular a
                {
                    text-decoration: none;

                }

                .co_curricular caption
                {
                    text-shadow: 0px 3px 6px #CCC;
                    
                    font-size: 25px;
                }


            </style>
            <br>

        <table border="1" class="co_curricular" cellspacing="5" cellpadding="10" >
            <caption> Student Attendance</caption>

        <thead>
            <th>Student Name</th>
            <th>Class Name</th>
            <th>Attendance of this week</th>
            
          </thead>
            <?php
        
        
        //MySQLi Procedural
        //$query=mysqli_query($conn,"select * from sales left join product on product.productid=sales.productid order by product.product_name asc");
        //while($row=mysqli_fetch_array($query)){
        /*  ?>
                <tr>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['sales_qty']; ?></td>
                </tr>
                
            <?php */
        //  $total_qty += $row['sales_qty'];
        //}
        
        //MySQLi OOP
        $query=$mysqli->query("select * from tblstudents left join tblclasses on tblstudents.ClassId=tblclasses.id order by tblclasses.ClassNameNumeric asc");

        while($row=$query->fetch_array())
        {
            ?>
                <tr>
                   <td ><?php echo $row['StudentName']; ?></td> </input>
                    <td><?php echo $row['ClassName']; ?>(<?php echo $row['Section']; ?>)</td>


                    <?php 
            $attn = $row['ClassId'];
        
                 ?>
                    <td><?php echo $attn;?></td>
                </tr>
                <?php } ?>    

   
    </table>
                
           
            
        
        

        
                




            <!-- content area end-->


                          
                       

            </td>



<!-- Right side bar start-->

    <td colspan="2" valign="top" width="25%" class="rightbar" >


            <table border="0" class="adm" cellspacing="3" cellpadding="5">
                <tr>
                    <td height="25px" width="285px" class="adminbar"><b>User Panel</b></td>

                </tr>
                <tr>  
                <td height="150px" width="285px" valign="top" class="admin" >
                <br> 
                <li ><a href="admin.php"><strong>Admin LogIn</strong></a> </li>
                
             
                    <dfn>[Plz collect your user_name &amp; password from Authorised group before Admin login]</dfn>

            </td>  
                </tr>

            </table>
                        <br>    
                        <br>    
            <table border="0" class="adm" cellspacing="3" cellpadding="5">
                <tr>
                    <td height="25px" width="285px" class="adminbar" style="color:Green"><b>Head-Master Messages</b></td>

                </tr>
                <tr>  
                <td height="460px" width="285px" valign="top" class="admin" >
              
                    <h1 align="center"><img src="images/head_teacher.png"></h1>
                <marquee direction="up" Scrolldelay="200"> 
                    <p style="text-align: justify;" ><strong> 
                We are provide to learn everything by teching carefully,so that the students learn properly;We not only tech from the curriculam text-book,also we tech more important things out of text-books. Our the school website,there we provide a lot of information in digital way.such as you can see your result from at home when result publish also you can download &amp; print your results.Student gairdeant can see their student's daily,weekly,monthly attendance on it.</strong></p>
               </marquee>
                <br>
             
                  

                         </td>  
                      </tr>

                 </table>

             </td> <!-- right side bar end -->



        </tr> 
          
        

 <tr><!-- footer tr start -->

                 <td colspan="8" height="100px" class="footer"  >
				 
				   <table style="width: 100%; color: #222222;">
                     <tr>
                        <td style="text-align: left;padding-left: 15px;">Copyright 2018 @ <a style="text-decoration: none" href="http://dhakaeducationboard.gov.bd/" target="_blank">PHP "Student Management System" Project Group &trade;</a>. All Rights Reserved.</td>
                        <td style="text-align: right;padding-right:15px;"><a href=" https://www.facebook.com/mohammadmahbub.talukder" style="   text-decoration: none; a:hover:red;" > <dfn> Developed by S.Kabir</a></dfn></td>
                    </tr>
                 </table>
				 
                 </td>
 </tr><!-- footer tr end -->

        


</table><!--main table end -->
</body>




</html>