<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oah";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

   $sql = "SELECT * FROM `mini_form_data`;";
	$result = $conn->query($sql);
	
	$call_sql = "SELECT * FROM `callback_form_data`;";
   $call_result = $conn->query($call_sql);
   
   $reg_sql = "SELECT * FROM `register_form_data`;";
	$reg_result = $conn->query($reg_sql);
	
	$ord_sql = "SELECT * FROM `order_form_data`;";
	$ord_result = $conn->query($ord_sql);
	
	$sub_sql = "SELECT * FROM `order_form_data`;";
	$sub_result = $conn->query($sub_sql);
	
	if(!$result OR !$call_result OR !$reg_result OR !$ord_result OR !$sub_result){
		die ('SQL Error: ' . mysql_error($conn));
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>OnlineAssignmenthelp.com -How it works </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Want to place your order with the best assignment writing service? Find out how to order your essays, dissertation and thesis to assignment experts here.">
    <link rel="stylesheet" type="text/css" href="./assets/css/admindashboard.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animated.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/scrollanimations.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="site-wrapper active" id="target">
        <div class="site-wrapper_left-col">
            <a href="#" class="logo dashboard-design">
                <img src="./assets/images/OAH Logo.png"/>          
            </a>
            <span class="toggles">
                <a href="#" id="toggle"><i class="fa fa-bars"></i></a>
            </span>
            <div class="left-nav">
                <a href="#" class="op1"  data-modl="profile-details"    id="profile" ><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                <a href="#" class="op1"  data-modl="order-details"       id="order1" ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Order Details</a>
                <a href="#" class="op1"  data-modl="mini-order-details" id="mini1" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>Mini Order Details</a>
                <a href="#" class="op1"  data-modl="registered-user-details" id="register-user" ><i class="fa fa-user"></i>Registered User</a>
                <a href="#" class="op1"  data-modl="call-back-details"   id="call-back-deatils" ><i class="fa fa-phone" aria-hidden="true"></i>Call Back Details</a>
                <a href="#" class="op1"  data-modl="subscribers-details" id="subscribers" ><i class="fa fa-newspaper-o" aria-hidden="true"></i>Subscribers List</a>
            </div>
        </div>
        <div class="site-wrapper_top-bar">
           <div class="popover__wrapper">
                     <a href="#" class="user-images">
                        <span class="popover__title">
                               <img src="./assets/images/profile-pic.jpg"/>
                              
                        </span>
                        <span class="admin-name">
                               <span class="online">
                               </span>
                                <span>
                                    Pritam kumar Soni
                                </span>
                        </span>
                        
                     </a>
                    <div class="push popover__content">
                             <ul>
                                  <li>
                                      <a href="javascript:void(0)" class="user-details-view">
                                        <i class="fa fa-user user-icns" aria-hidden="true"></i>
                                          <span class="profiles">
                                            Profile 
                                          </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:void(0)" class="user-details-view">
                                       <i class="fa fa-sign-out user-icns" aria-hidden="true"></i>
                                        <span class="profiles">
                                            Logout 
                                        </span>   
                                      </a>
                                  </li>
                             </ul>                       
                    </div>                  
            </div>
        </div>
        
		   <div class="wrapper hide" id="profile-details">
            <div class="wrapper_container">
                   <div class="order-details-sec">
                        <span class="order-details-headings">
                              Admin Profile Information
                        <span>
                   </div>
                   <div class="profile-inner-sections">
                   <div class="profile-user-details-info">
                            <span class="usser-profiles-details-items">
                                <span class="usr-info-icons">
                                    <img src="./assets/images/profile-pic.jpg">
                                    <span class="changes-profiles-sec">
                                        <i aria-hidden="true" class="fa fa-pencil edd"></i>Change
                                    </span>
                                </span>
                            </span>
                            <div class="form-sections-profiles">
                                <div class="form-inner-sections-profiles">
                                    <div class="each-rows-inputs">
                                        <input type="text" value="Pritam Kumar Soni">
                                        <span class="users-pp">
                                            <i class="fa fa-user" aria-hidden="true"></i>

                                        </span>
                                        <span class="edit-data">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="each-rows-inputs">
                                        <input type="email" value="pritamsoni5555@gmail.com">
                                        <span class="users-pp">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>

                                        </span>
                                        <span class="edit-data">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="each-rows-inputs">
                                        <input type="text" value="xyz">
                                        <span class="users-pp">
                                            <i class="fa fa-file" aria-hidden="true"></i>

                                        </span>
                                        <span class="edit-data">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="each-rows-inputs">
                                        <input type="number" value="9056186602">
                                        <span class="users-pp">
                                             <i class="fa fa-phone" aria-hidden="true"></i>

                                        </span>
                                        <span class="edit-data">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="each-rows-inputs">
                                        <input type="text" value="Punjab">
                                        <span class="users-pp">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                        </span>
                                        <span class="edit-data">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="submit-buttin-sections">
                                        <button type="submit" class="save">
                                            Save
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        
		   <div class="wrapper" id="order-details">
            <div class="wrapper_container">
                 <div class="order-details-sec">
                        <span class="order-details-headings">
                              Order Details
                        <span>
                 </div>
                 <div class="order-details-sec-history">
                        <span class="order-details-headings">
                            History Of  Order Details
                        <span>
                        <span class="exports-files">
                           <button type="submit" id="ord_excel" class="exports">
                             <span class="exp">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                             </span>
                             Export</button>
                        <span>
                 </div>
                 <div class="common-table-details-sections">
                    <table id="order_data" cellspacing="0" class="deatils-tables">
                        <tr class="table-headings">
                            <th>Unique Order Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Deadline Date</th>
                            <th>Study level</th>
                            <th>Number of Pages</th>    
                            <th>Email Id</th>    
                            <th>Style</th>    
                            <th>Description</th>  
                            <th>Uploaded File</th>  
                            <th>Creation Date</th>  
                        </tr>
						
						      <tbody class="tbodys">
                          <?php
									while ($row = mysqli_fetch_array($ord_result))
									{
										$files_field= $row['filepath'];
										$files_show= "Uploads/$files_field";	
										echo '<tr class="each-rows-secss">
													<td>'.$row['orderid'].'</td>
													<td>'.$row['name'].'</td>
													<td>'.$row['phone'].'</td>
													<td>'.date('F d, Y',strtotime($row['deadline'])).'</td>
													<td>'.$row['study_level'].'</td>
													<td>'.$row['page_count'].'</td>
													<td>'.$row['email'].'</td>
													<td>'.$row['style'].'</td>
													<td>'.$row['description'].'</td>
													<td><a href='.$files_show.'>'.$files_field.'</td>
													<td>'.$row['timestamp'].'</td>
											   </tr>';
									}
							    ?>
                        </tbody>
						
                    </table>
                 </div>
            </div>
        </div>
		
        <div class="wrapper hide" id="mini-order-details">
            <div class="wrapper_container">
                 <div class="order-details-sec">
                        <span class="order-details-headings">
                           Mini Order Details
                        <span>
                 </div>
                 <div class="order-details-sec-history">
                        <span class="order-details-headings">
                            History Of  Mini Order Details
                        <span>
                        <span class="exports-files">
                           <button type="submit" id="miniorder_excel" class="exports">
                             <span class="exp">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                             </span>
                             Export</button>
                        <span>
                 </div>
                 <div class="common-table-details-sections">
                    <table id="mini_order_data" cellspacing="0" class="deatils-tables">
						     <tr class="table-headings">
                            <th>Unique Id</th>
                            <th>E-Mail</th>
                            <th>Subject</th>
                            <th>Deadline Date</th>
                            <th>No of Pages</th>    
                            <th>Creation Date</th>    
                        </tr>
						     <tbody class="tbodys">
                         <?php
									while ($row = mysqli_fetch_array($result))
									{
										echo '<tr class="each-rows-secss">
												<td>'.$row['id'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['subject'].'</td>
												<td>'.date('F d, Y',strtotime($row['date'])).'</td>
                                     <td>'.$row['page_count'].'</td>
                                     <td>'.$row['timestamp'].'</td>
											   </tr>';
									}
							   ?>
                        </tbody>
                    </table>
                 </div>
            </div>
        </div>
       
 	   <div class="wrapper hide" id="call-back-details">
            <div class="wrapper_container">
                 <div class="order-details-sec">
                        <span class="order-details-headings">
                           Call Back Details
                        <span>
                 </div>
                 <div class="order-details-sec-history">
                        <span class="order-details-headings">
                            History Of  Call Back Details
                        <span>
                        <span class="exports-files">
                           <button type="submit" id="callback_excel" class="exports">
                             <span class="exp">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                             </span>
                             Export</button>
                        <span>
                 </div>
                 <div class="common-table-details-sections">
                    <table id="callback_form_data" cellspacing="0" class="deatils-tables">
                        <tr class="table-headings">
                            <th>Unique Id</th>
                            <th>Phone Number</th>
                            <th>Order Type</th>
                            <th>Reason For Call Back</th>
                            <th>Suitable Time</th>
                            <th>Created Timestamp</th>
                        </tr>
                        
						     <tbody class="tbodys">
                         <?php
									while ($row = mysqli_fetch_array($call_result))
									{
										echo '<tr class="each-rows-secss">
												<td>'.$row['id'].'</td>
												<td>'.$row['phone'].'</td>
												<td>'.$row['order_type'].'</td>
												<td>'.$row['reason'].'</td>
                                     <td>'.$row['contact_time'].'</td>
                                     <td>'.$row['timestamp'].'</td>
											   </tr>';
									}
							   ?>
                        </tbody> 
			           </table>
                 </div>
            </div>
        </div>
		
        <div class="wrapper hide" id="registered-user-details">
            <div class="wrapper_container">
                 <div class="order-details-sec">
                        <span class="order-details-headings">
                           Registered User Details
                        <span>
                 </div>
                 <div class="order-details-sec-history">
                        <span class="order-details-headings">
                            History Of Registered User Details
                        <span>
                        <span class="exports-files">
                           <button type="submit" id="reg_excel" class="exports">
                             <span class="exp">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                             </span>
                             Export</button>
                        <span>
                 </div>
                 <div class="common-table-details-sections">
                    <table id="reg_form_data" cellspacing="0" class="deatils-tables">
                        <tr class="table-headings">
                            <th>Unique Id</th>
							      <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Education lebel</th>
                            <th>Creation Date</th>
                        </tr>
                        <tbody class="tbodys">
                         <?php
									while ($row = mysqli_fetch_array($reg_result))
									{
										echo '<tr class="each-rows-secss">
												<td>'.$row['id'].'</td>
												<td>'.$row['name'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['phone'].'</td>
                                     <td>'.$row['education'].'</td>
                                     <td>'.$row['timestamp'].'</td>
											   </tr>';
									}
							   ?>
                        </tbody> 
                    </table>
                 </div>
            </div>
        </div> 
        
		  <div class="wrapper hide" id="mini-order-details">
            <div class="wrapper_container">
                 <div class="order-details-sec">
                        <span class="order-details-headings">
                           Mini Order Details
                        <span>
                 </div>
                 <div class="order-details-sec-history">
                        <span class="order-details-headings">
                            History Of  Mini Order Details
                        <span>
                        <span class="exports-files">
                           <button type="submit" id="miniorder_excel" class="exports">
                             <span class="exp">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                             </span>
                             Export</button>
                        <span>
                 </div>
                 <div class="common-table-details-sections">
                    <table id="mini_order_data" cellspacing="0" class="deatils-tables">
                        
						     <tr class="table-headings">
                            <th>Unique Id</th>
                            <th>E-Mail</th>
                            <th>Subject</th>
                            <th>Deadline Date</th>
                            <th>No of Pages</th>    
                            <th>Creation Date</th>    
                        </tr>
                        
						     <tbody class="tbodys">
                         <?php
									while ($row = mysqli_fetch_array($result))
									{
										echo '<tr class="each-rows-secss">
												<td>'.$row['id'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['subject'].'</td>
												<td>'.date('F d, Y',strtotime($row['date'])).'</td>
                                     <td>'.$row['page_count'].'</td>
                                     <td>'.$row['timestamp'].'</td>
											   </tr>';
									}
							   ?>
                        </tbody>
                    </table>
                 </div>
            </div>
        </div>
       
 	   <div class="wrapper hide" id="subscribers-details">
            <div class="wrapper_container">
                 <div class="order-details-sec">
                        <span class="order-details-headings">
                           Subscribers List
                        <span>
                 </div>
                 <div class="order-details-sec-history">
                        <span class="order-details-headings">
                            Here are the Subscribers of Online Asssignment Help!
                        <span>
                        <span class="exports-files">
                           <button type="submit" id="subscriber_excel" class="exports">
                             <span class="exp">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                             </span>
                             Export</button>
                        <span>
                 </div>
                 <div class="common-table-details-sections">
                    <table id="subscriber_data" cellspacing="0" class="deatils-tables">
                        <tr class="table-headings">
                            <th>Subscribers Email id</th>
                        </tr>
                        
						     <tbody class="tbodys">
                         <?php
									while ($row = mysqli_fetch_array($sub_result))
									{
										echo '<tr class="each-rows-secss">
												<td>'.$row['email'].'</td>
											   </tr>';
									}
							   ?>
                        </tbody> 
			           </table>
                 </div>
            </div>
        </div>

   </div>
<div class="footer-sec">
        Online Assignment Help
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="./assets/js/scrollanimations.js"></script>


<script>
    
    $(function () {
        $('#toggle').click(function () {
            $('#target').toggleClass('active');
        });
    });

    $('.op1').click(function () {
        $(".op1").each(function() {
           let tt =  $(this).data('modl');

            $('#'+tt).addClass("hide").removeClass("active-components");
        });
           let tt =  $(this).data('modl');
          console.log('tt',tt);
          if(tt){
              $('#'+tt).addClass("active-components").removeClass("hide");
          }
        });
		
</script>

<script type="text/javascript" src="assets/js/tableExport.js"></script>
<script type="text/javascript" src="assets/js/jquery.base64.js"></script>

<script type="text/javascript">

        $(document).ready(function(e){
			$("#miniorder_excel").click(function(e){
				$("#mini_order_data").tableExport({
					type: 'excel',
					escape: 'false'
				});
			});
		});
		
	    $(document).ready(function(e){
			$("#callback_excel").click(function(e){
				$("#callback_form_data").tableExport({
					type: 'excel',
					escape: 'false'
				});
			});
		});
		
		$(document).ready(function(e){
			$("#reg_excel").click(function(e){
				$("#reg_form_data").tableExport({
					type: 'excel',
					escape: 'false'
				});
			});
		});
		
		$(document).ready(function(e){
			$("#ord_excel").click(function(e){
				$("#order_data").tableExport({
					type: 'excel',
					escape: 'false'
				});
			});
		});
		
		$(document).ready(function(e){
			$("#subscriber_excel").click(function(e){
				$("#subscriber_data").tableExport({
					type: 'excel',
					escape: 'false'
				});
			});
		});
	
</script>

</html>