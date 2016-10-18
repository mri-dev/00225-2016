<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
	<link rel="SHORTCUT ICON" href="http://www.softswot.com/favicon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="Copyright" content="Copyright www.softswot.com">
    <title>
      MailMailer
    </title>
		 		
<!--

	This is the Registered Version of MailMailer. The specific suitability of this software must be independently assessed.
	Software is provided as is, use is entirely at the users risk, and use acknowledges that softSWOT and all associated parties are held harmless from any claims or losses relating to software provided.
	Registered software can be run on internet or intranet servers and can be freely used within your business, however you may not distribute registered software in any form. 
-->

<?php 
//#############################################################################
//Begin User Configuration Settings.
//Adjust as required but only the contents between " ".


//Default Mailing List File Name
$user_ml_file = "MailList.txt";
//Default Email Body File Name
$user_body_file = "Body.txt";
$user_body_filef = "Body.txt";
//Default From Email Address
$user_from_email = "";
//Default From Name
$user_from_name = "";
//Default Email Subject
$user_subject = "";

//End User Configuration Settings.
//#############################################################################

if(!isset($_POST)){$_POST=$HTTP_POST_VARS;}
if(!isset($_SERVER)){$_SERVER=$HTTP_SERVER_VARS;}
$PHP_SELF=$_SERVER['PHP_SELF'];

foreach($_POST as $PName=>$PValue)
{
    if (get_magic_quotes_gpc())
    {
      $PValue=stripslashes($PValue);
    }
    $PValue=trim($PValue);
		$$PName=trim($PValue);
}

 ?>
  </head>
  <body>

<!-- The following message is only applicable when displayed in your browser by a web page on your web server  -->
<?php echo"<!--"; ?>
		<h2>Sorry php does not appear to be available on the server your MailMailer file is running on. Without php MailMailer will not function.  For more information visit <a href="">What is php?</a></h2><br><br><br><br><br><br><br><br><br><br>
<?php echo"-->"; ?>		

    <h1>
      
    </h1>
		
		
		<?php $E = "True";?>
		
		<form action="<?php echo "$PHP_SELF"; ?>" method="post" name="form">
		  <p>&nbsp;</p>
		<table width="1647" border="0">
          <tr>
            <td width="816"><table border="0">
              <tr>
                <td colspan="8"><input type="submit" name="Action" value="<?php if ($E){echo"Send";}else{echo"Fail";} ?>" title="Send emails to the addresses in your Mailing List. If this button displays Fail your link to softSWOT is broken, this is required to use the evaluation version.">
                  &nbsp;&nbsp; <a href="<?php echo "$PHP_SELF"; ?>" title="Reset the form to default values."><b>Reset</b></a>&nbsp;&nbsp;
                  <input type="submit" name="Action2" value="Preview" title="Preview the first message that will be sent in a new window.">
                  &nbsp;&nbsp; <a href="http://www.softSWOT.com/MailMailerHelp.php" target="_blank" title="Access the online Help file."><b>Help</b></a>&nbsp;&nbsp;
                  <input type="checkbox" name="ListAll" title="Check to list all sent emails in Status window." checked="checked">
                  <b>Status list all</b>&nbsp;&nbsp;
                  <input type="checkbox" name="NoSend" title="Check to Send without email transmission.">
                  <b>Send without emailing</b></br>
                  <?php 
		
		error_reporting(E_ERROR);
		
		//Form Values
		
		$def_ml = stripslashes($SendList);
		$def_from_email = stripslashes($SendEmail);
		$def_from_name = stripslashes($SendName);
		$def_subject = stripslashes($SendSubject);
		$def_body = stripslashes($SendBody);
		$def_ml_file = stripslashes($ml_file);
				$def_ml_filef = stripslashes($ml_filef);

		$def_body_file = stripslashes($body_file);	
		$def_body_filef = stripslashes($body_filef);
		$body_label = "Email Body";
		$body_title = "Input your email Body. NAME in the Email Body will be replaced with the name in the Mailing List for each email.";
		
		set_time_limit(0);
						
		//Load
		if($Action == "Load")
		{
		 	if (!file_exists($ml_file))
			{ 
		 		$def_ml_file = "File not found";
			
			}
					
			if(!file_exists($body_file)) 
			{
			 	$def_body_file = "File not found";
			}
			  
		}
		if($Action == "Generate")
		{
			  function news()
{

echo '<p>   </p>';
$contents =$html=file_get_contents("http://www.nytimes.com/pages/world/europe/index.html");
$title = explode('<p class="summary">',$contents);
$title = explode("</p>",$title[1]);
echo '<font color="#FFFFFF">'.$title[0].'</font>';
}
		
		function newsbbc()
		{
		echo '<p>   </p>';
$contents =$html=file_get_contents("http://edition.cnn.com/US/");
$title = explode('<a href="/2013/07/20/us/mississippi-murder-mystery/index.html?hpt=us_r1">',$contents);
$title = explode("</span>",$title[1]);
echo '<font color="#FFFFFF">'.$title[0].'</font>';

		}
		function newsbbcsport()
		{
		echo '<p>   </p>';
$contents =$html=file_get_contents("http://www.bbc.co.uk/sport/0/");
$title = explode('<p class="description">',$contents);
$title = explode("</p>",$title[1]);
echo '<font color="#FFFFFF">'.$title[0].'</font>';
		}
		function gardiyan()
		{
		echo '<p>   </p>';
$contents =$html=file_get_contents("http://www.theguardian.com/media/bbc");
$title = explode('<span class="kicker">',$contents);
$title = explode("</div>",$title[1]);
echo '<font color="#FFFFFF">'.$title[0].'</font>';
		}
		function ntimes()
		{
		echo '<p>   </p>';
$contents =$html=file_get_contents("http://www.nytimes.com/");
$title = explode('<p class="summary">',$contents);
$title = explode("</p>",$title[1]);
echo '<font color="#FFFFFF">'.$title[0].'</font>';
		}
			function skynews()
		{
		echo '<p>   </p>';
$contents =$html=file_get_contents("http://news.sky.com/");
$title = explode('<p class="analysisStandfirst">',$contents);
$title = explode('</p>',$title[1]);
echo '<font color="#FFFFFF">'.$title[0].'</font>';
		}
		}
		elseif ($Action == "Save")
		{
				  		
				if (file_exists($ml_file))
				{
				$write_contents = stripslashes($SendList);
				$fp = fopen( $ml_file, "w" );
				fwrite ( $fp, $write_contents); 
     		fclose( $fp );
				echo"
				Mailing List $ml_file <b>Saved</b>-
				";	
				}
				else
				{
				echo"
				Mailing List file $ml_file <b>Not Found</b>-
				";
				}
				
				if(file_exists($body_file))
				{
				$write_contents = stripslashes($SendBody);				
				$fp = fopen( $body_file, "w" ); 
     		fwrite ( $fp, $write_contents); 
     		fclose( $fp );	
							
				echo"
				Body file $body_file <b>Saved</b>
				";
				}
				else
				{
				echo"
				Body file $body_file <b>Not Found</b>
				";
				}
						
		}
					
		//Preview
		elseif ($Action == "Preview")
		{
		 	echo"
			<script language=\"JavaScript\"><!--					
			var scwidth = screen.width;
			var scheight = screen.height;
						
			config='toolbar=no,location=no,directories=no,status=no,menubar=yes,width=500,height=300,scrollbars=yes,resizable=yes';
			preview = window.open (\"\",\"preview\",config);
			preview.document.write('<html><head><meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">');
			preview.document.write('<title>MailMailer Preview</title></head>');
			preview.document.write('<body bgcolor=#c0c0c0>');
			preview.document.write('<h2>MailMailer Preview</h2>');
			preview.document.write('<p>This is the first email that will be sent</p>');
			// --></script>
			";
						
			$SendNameIn = stripslashes($SendName);
			$SendName = ereg_replace("<?","",$SendNameIn);
			$SendName = trim($SendName);
			$SendEmailIn = stripslashes($SendEmail);
			$SendEmail = ereg_replace("<?","",$SendEmailIn);
			$SendEmail = trim($SendEmail);
			$SendSubjectIn = stripslashes($SendSubject);
			$SendSubject = ereg_replace("<?","",$SendSubjectIn); 
			$SendSubject = trim($SendSubject);
						
			$from_email = "\"$SendName\"<$SendEmail>";
			
			$SendBodyIn = stripslashes($SendBody);
			$SendBody = ereg_replace("<","&lt;",$SendBodyIn); 
	
			$ml_lines = explode ( "\n", $SendList ); 			
      list( $email, $name ) = explode( ',', $ml_lines[0] );
			
			$email = trim($email);
			$name = trim($name);				
								
			echo"
			<script language=\"JavaScript\"><!--
			preview.document.write('<table><tr><td><b>From Email:</b></td><td>$SendEmail</td></tr>');
			preview.document.write('<tr><td><b>From Name:</b></td><td>$SendName</td></tr>');
			preview.document.write('<tr><td><b>To Email:</b></td><td>$email</td></tr>');
			preview.document.write('<tr><td><b>To Name:</b></td><td>$name</td></tr>');
			preview.document.write('<tr><td><b>Subject:</b></td><td>$SendSubject</td></tr>');
			preview.document.write('<tr><td><b>Body:</b></td><td></td></tr></table>');
			// --></script>
			";
			
			$SendBodyAdj = str_replace("NAME", $name, $SendBody);		
			$send_lines = explode ( "\n", $SendBodyAdj );
			
			foreach ( $send_lines as $sendline )
      { 
      	
				$sendline = rtrim($sendline);
				 
				echo"
				<script language=\"JavaScript\"><!--
				preview.document.write('$sendline<br>');
				// --></script>
				";  
      } 
			
				echo"
				<script language=\"JavaScript\"><!--
				preview.document.write('<form><input type=\"button\" value=\"Close Window\" onclick=\"window.close()\"></form>');
				preview.document.write('</body></html>');
				preview.document.close();
				preview.focus();
						
				// --></script>
				";
	
				$def_from_email = $SendEmailIn;
				$def_from_name = $SendNameIn;
				$def_subject = $SendSubjectIn;
				$def_body = $SendBodyIn;
			
     	if ($email)
			{
			$ml_num = count($ml_lines);
			}
			else
			{
			$ml_num = 0;
			}
				
			echo"
			<b>Current Mailing List contacts $ml_num</b>
			";
			  
    } 
  	
		//Send Mail		
		elseif ($Action == "Send")
    {
      if ($NoSend)
			{
			echo"<b><font color=\"#ff0000\">Send without Emailing -</font></b>";
			}
			
			echo"
			
			<b>Sending.....</b>
			
			<script language=\"JavaScript\"><!--					
			var scwidth = screen.width;
			var scheight = screen.height;
			config='toolbar=no,location=no,directories=no,status=no,menubar=yes,width=500,height=300,scrollbars=yes,resizable=yes'
			sendstatus = window.open (\"\",\"sendstatus\",config);
			sendstatus.document.write('<html><head><meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">');
			sendstatus.document.write('<title>MailMailer Status</title></head>');
			sendstatus.document.write('<body bgcolor=#c0c0c0>');
			sendstatus.document.write('<h2>MailMailer Status</h2>');
			now = new Date();
			StartTime = now.toLocaleString();
			sendstatus.document.write('Start Time ' + StartTime + '<br>');
			sendstatus.document.write('<b>Sending Email Number....</b><br>');
			// --></script>
			";
			
			$SendNameIn = stripslashes($SendName);
			$SendName = ereg_replace("<?","",$SendNameIn);
			$SendName = trim($SendName);
			$SendEmailIn = stripslashes($SendEmail);
			$SendEmail = ereg_replace("<?","",$SendEmailIn);
			$SendEmail = trim($SendEmail);
			$SendSubjectIn = stripslashes($SendSubject);
			$SendSubject = ereg_replace("<?","",$SendSubjectIn); 
			$SendSubject = trim($SendSubject);
			
     	$from_email = "$SendName<$SendEmail>";
			
			$SendBody = stripslashes($SendBody); 
	
			$count = 0;
			
			$ml_lines = explode ( "\n", $SendList );
     	$ml_num = count($ml_lines);
								
     	foreach ( $ml_lines as $mlline )
      { 
        list( $email, $name ) = explode( ',', $mlline );
				
				$email = trim($email);
				$name = trim($name);
				
				if ($email)
				{				
						$SendBodyAdj = str_replace("NAME", $name, $SendBody);
 
 						set_time_limit ( 30 );
						$count = $count+1;
						
						if($NoSend)
						{
						  if($ListAll)
						  {
						    $sendCk = "$count, OK $email; ";
						  }
						  else
						  {
						    $sendCk = "$count; ";
						  }
						}
						else
						{										  
							$xheaders="Content-Type: text/html;charset='iso-8859-1'\n";
              $xheaders.="From:$from_email\n";
              $xheaders.="Reply-To:$from_email\nReturn-path:$SendEmail\nX-Mailer: PHP/" . phpversion();
		  
							if(mail($email,$SendSubject,$SendBodyAdj,$xheaders))
							{
						    if($ListAll)
						    {
						      $sendCk = "$count, OK $email; ";
						    }
						    else
						    {
						      $sendCk = "$count; ";
						    }
						  }
						  else
						  {
						    $sendCk = "<b>$count, FAIL $email; </b>";
						  }
				    }
						echo"
						<script language=\"JavaScript\"><!--	
						sendstatus.document.write('$sendCk');
						// --></script>
						";
				}		
				
      } 
        echo"
				<script language=\"JavaScript\"><!--	
				sendstatus.document.write('<br><b>Send Complete</b>');
				now = new Date();
				StopTime = now.toLocaleString();
				sendstatus.document.write('<br>Stop Time ' + StopTime);
				sendstatus.document.write('<form><input type=\"button\" value=\"Close Window\" onclick=\"window.close()\"></form>');
				sendstatus.document.write('</body></html>');
				sendstatus.document.close();
				sendstatus.focus();
				// --></script>
				<b>Send Complete. Emails sent $count.</b>
				";
				
				$def_from_email = $SendEmailIn;
				$def_from_name = $SendNameIn;
				$def_subject = $SendSubjectIn;
				$def_body = $SendBodyAdj;
								
				$body_label = "Last Email Body Sent";
				$body_title = "This is the body of the last email sent.";
				
     }
		 //Test
		 elseif ($Action=="Fail")
		 {
		 echo"
		 <b><font color=\"#ff0000\">softSWOT access is broken and is required for evaluation software, <a href=\"http://www.softSWOT.com/MailMailerHelp.php\" target=\"_blank\">click for solutions.</a></font></b></font>
		 ";
		 }
		   
		 //Default Values
		 else
		 {	
		 		$def_ml_file = $user_ml_file;
		 		$def_body_file = $user_body_file;
						 		$def_body_filef = $user_body_filef;

		 		$def_from_email = $user_from_email;
		 		$def_from_name = $user_from_name;
		 		$def_subject = $user_subject;
		 		$def_ml = stripslashes($SendList);
		 		$def_body = stripslashes($SendBody);
				
				
		 }
    ?>                </td>
              </tr>
              <tr>
                <td width="132" title="Input your contact list or Load from a Mailing List File. One contact per line in the form email address,name. If a contacts name is not provided no name will be set for that contact."><font color="#0000ff"><b>Mailing List</b></font></td>
                <td width="666" colspan="7"><textarea name="SendList" rows="3" cols="80" ><?php  if ($Action=="Load" && file_exists($def_ml_file)){readfile($def_ml_file);}else{echo "$def_ml";}?>
            </textarea></td>
              </tr>
              <tr>
                <td title="Input or modify your From Email address and From Name."><b><font color="#0000ff">From</font></b></td>
                <td colspan="7"><font color="#0000ff">Email</font>&nbsp;
                    <input type="text" name="SendEmail" value="<?php echo $def_from_email; ?>" size="30">
                  &nbsp;&nbsp; <font color="#0000ff">Name</font>&nbsp;
                    <input type="text" name="SendName" value="<?php echo $def_from_name; ?>" size="30">                </td>
              </tr>
              <tr>
                <td title="Input or modify your Email Subject."><b><font color="#0000ff">Subject</font></b></td>
                <td colspan="7"><input type="text" name="SendSubject" value="<?php  echo $def_subject; ?>" size="30"></td>
              </tr>
              <tr>
                <td valign="top" title="<?php echo "$body_title"; ?>"><b><font color="#0000ff"><?php echo $body_label; ?></font></b></td>
                <td  colspan="7"><textarea name="SendBody" rows="10" cols="80"  wrap="virtual" >
		<?php  if ($Action=="Generate") {
		
		$my_array = array("news()", "newsbbc()", "newsbbcsport()", "gardiyan()", "ntimes()", "skynews()");
       
            $random = array_rand($my_array);
                       
            $parola .= $my_array[$random];
                        
       
       
		if ( $parola == "news()"){
		echo news();
		} elseif ($parola == "newsbbc()"){
		echo newsbbc();
		} elseif ($parola == "newsbbcsport()"){
		echo newsbbcsport();
		} elseif ($parola == "gardiyan()"){
		echo gardiyan();
		} elseif ($parola == "ntimes()"){
		echo ntimes();
		} elseif ($parola == "skynews()"){
		echo skynews();
		
		}
	
		}?>
            </textarea></td>
              </tr>
              <tr>
                <td title="Load or Save Mailing List and Email Body files."><b><font color="#0000ff">Load File Names</font></b></td>
                <td colspan="7"><font color="#0000ff">Mailing List</font>&nbsp;
                    <input type="text" name="ml_file" value="<?php echo "$def_ml_file"; ?>" size="20">
                  &nbsp;&nbsp; <font color="#0000ff">Email Body</font>&nbsp;
                    <input type="text" name="body_file" value="<?php echo "$def_body_file";?>" size="20">
                  &nbsp;&nbsp;
                    <input type="text" name="body_filef" value="<?php echo $yy;?>" size="20">
                &nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
            </table></td>
            <td width="815" colspan="2">
			
			
     
          </tr>
          <tr>
            <td colspan="3"><input type="submit" name="Action" value="Generate" title="Load Mailing List and Email Body textareas with contents from the named files.">
            <input type="submit" name="Action23" value="Load" title="Load Mailing List and Email Body textareas with contents from the named files.">
            <input type="submit" name="Action24" value="Save" title="Save contents of Mailing List and Email Body textareas to files. If there is no file name or it does not already exist in the current directory on the server contents will not be saved."></td>
          </tr>
        </table>
		<p>&nbsp;</p>
		</form>
		
	</body>
	
</html>

