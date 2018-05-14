<?php 
	include("../smtp_mail/config_smtp.php");
	$mail->addAddress($emailmember, $orderemailmemberRedeem); 
	$mail->addBCC($emailconfig,$orderemailmemberRedeem);	
	
	ob_start(); //Turn on output buffering
	?>
	
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
		
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $nameconfig ;?></title>
	<style type="text/css"> 
	
	    /* Client-specific Styles */
        #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
        body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
        body{-webkit-text-size-adjust:none; -ms-text-size-adjust:none;} /* Prevent Webkit and Windows Mobile platforms from changing default font sizes. */

        /* Reset Styles */
        body{margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#333;}
        img{height:auto; line-height:100%; outline:none; text-decoration:none;}
        #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

	   
	   p {
	       margin: 1em 0;
	   }
	      
	   
	   h1, h2, h3, h4, h5, h6 {
	       color: #555 !important;
	       line-height: 100% !important;
	   }
	   
	   h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
	       color: #1694B9 !important;
	   }
	   
	   h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
   	       color: #1694B9 !important; /* Preferably not the same color as the normal header link color.  There is limited support for psuedo classes in email clients, this was added just for good measure. */
   	   }
	   
	   h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
	       color: #1694B9 !important; /* Preferably not the same color as the normal header link color. There is limited support for psuedo classes in email clients, this was added just for good measure. */
	   }
	   
	   
       table td {
           border-collapse:collapse;
       }
       
       .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span { color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;} /* Body text color for the New Yahoo.  This example sets the font of Yahoo's Shortcuts to black. */
	   
	   
	   /* ADDED BY NUKEGRAPHIC */
	   #grey-wrap {}
	   #grey-wrap h1 {font-size:18px; text-shadow:0 1px 1px #fff; color:#1694B9 !important;}
	   #grey-wrap p {line-height:1.5em; margin:0; margin-bottom:10px;}
	   #white-wrap {background:#fff; border:1px solid #ddd; margin-bottom:10px;}
	   .nuke-table {margin-bottom:10px; font-weight:normal;}
	   .small {font-size:10px; color:#555;}

	    /* GENERAL TABLE */
		table.general-table {}
		table.general-table td {border:1px solid #a8a7a5; padding:5px;}
		table.general-table thead {text-transform:capitalize; font-weight:600; font-size:13px;}
		table.general-table thead td {background:#f3f3f3; vertical-align:top; padding-left:6px;}
		table.general-table tbody td {font-size:12px; vertical-align:top; padding-left:6px;}
		table.general-table a {color:#2387bc; font-weight:bold;}
		table.general-table a:hover {text-decoration:underline;}	   
       </style>
</head>
<body> <!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
    	<tr>
        	<td style="padding:10px;">
            
            	<table width="100%">
                    <tr>
                        <td width="100%" style="padding-left:23px;">
                               <a href="<?php echo $GLOBALS['WEBSITE_NAME'];?>" title="" target="_blank">
								<img src="<?php echo $GLOBALS['UPLOAD_FOLDER'];?><?php echo $picconfig;?>" alt="<?php echo $nameconfig;?>" style="display:block; margin-bottom:1px;" width="200" title="<?php echo $nameconfig;?>" /></a>     
                        </td>
                    </tr>
                </table>
            
                <table cellpadding="0" cellspacing="0" border="0" id="grey-wrap" style="margin-bottom:10px; background-repeat:repeat-x;" width="990">
                    <tr>
                        <td style="padding:20px 25px 25px 25px;">
							 <h1 style="color:#1694B9;">Redeeem Summary</h1>
							
							 <table cellpadding="0" cellspacing="0" border="0" id="white-wrap" bgcolor="#ffffff" style="margin-bottom:10px;" width="100%">
                                <tr>
                                    <td style="padding:20px;">   


                                         <p>Hi! <strong><?php echo $membername;?></strong>,</p>
                                      	 <p style="font-size:22px;"><?php getorderidmemberredeem($tokenpaymntid);?></p>
                                         <p>This is the receipt of your order.<br /><br />
                                            Redeeem Detail:
                                         </p>
                                
                                                 <table width="100%" class="general-table" style="font-family:calibri; font-size:13px;">
                                                     <thead>
                                                         <tr>
                                                           <td width="3%" align="center">#</th>
                                                           <td width="45%" align="left">Item Name</th>
                                                           <td width="15%" align="left">Point</th>
                                                           <td width="5%" align="center">Qty</th>
                                                           <td width="15%" align="right">Total</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody> 
                                
                                                    <?php
															echo'<tr>';
															echo'<td align="center">1 .</td>';
															echo'<td><strong>'.$Skuprod.'</strong> - '.$itemnamelist.'</td>';
															echo'<td align="left">'.number_format($totalpointreward).' Point</td>';
															echo'<td align="center">1</td>';
															echo'<td align="right">';
																echo number_format($totalpointreward).' Point'; 
															echo'</td>';
															echo'</tr>';  

                                                    ?>  
                                
                                                    </tbody> 
                                                    <tfoot> 
                                                    <tr>
                                                        <td colspan="2" align="left"> </td>
                                                        <td colspan="2" align="right"><strong>Total Redeem</strong></td>
                                                        <td align="right"><strong><span><?php echo number_format($totalpointreward);?> Point</span></strong>
                                                        </td>
                                                    </tr>

                                                  
                                                    </tfoot>    
                                          </table>	
                                           
                                            <p><strong>Shipping Address:</strong></p>
                                            <?php echo $alamatKirim;?>
                                            
                                            <p>&nbsp;</p>
                                            <p>Best Regards,<br /></p>
                                            <p><strong><?php echo ucwords($companyconfig);?></strong></p>
                                        
                                                                                                            
                                    </td>
                                </tr>
                            </table><!-- #white-wrap -->  
                        </td>
                    </tr>
                </table>
    		</td>
    	</tr>
    </table>
    <!-- End of wrapper table -->
</body>
</html>
<?php
		$message = ob_get_clean();
		$mail->isHTML(true);
		$mail->Subject = $orderemailmemberRedeem;
		$mail->msgHTML($message);

		if(!$mail->send()) {
			//echo 'Message could not be sent.';
			//echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			//echo 'Message has been sent';
		}				
 ?>