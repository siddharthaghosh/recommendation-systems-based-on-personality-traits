<?php if(!isset($user)){
	?>
	
           <h2>Admin <span>login</span></h2>
  		    <table>
			<form action="<?php echo base_url(); echo index_page() ?>/cadmin/login" method="post">
              
			  <tr>
			  <td>Username</td>
              <td><input type="text" name="username" id="username"/></td>
              </tr>
			<tr>		
			 <td>Password</td>
              
			  
               <td> <input class="fieldpadding" type="password" name="password" id="password"/></td>
				 </tr> 
				<tr>
			  <td> <input type="submit" name="submitlogin" value="submit" /></td>
              </tr>
              <p>&nbsp;</p>
            
  		    </form>
			</table>
  		    <?php if(isset($error)) echo "<b><span style='color:red;'>$error</span></b>";
if(isset($logout)) echo "<b><span style='color:red;'>$logout</span></b>";
if(isset($welcome)) echo "<h2><span style='color:red;'>$welcome</span></h2>";?>
<?php }?>