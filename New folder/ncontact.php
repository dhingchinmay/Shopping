<html>
<body>
							
						<a id="contact" class="smooth"></a>
												<div class="container">
													<div class="sc_section_content">
														
														<div class="sc_content content_wrap margin_top_middle">
															<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 custom_columns">
																<div class="column-1_2 sc_column_item sc_column_item_1 odd first">
																	<div  class="bg_tint_dark">
																																				
																		
																		<div class="column-1_2">
																			<p>
																				<strong>EMAIL US:</strong>
																			</p>
																		</div>
																		<div class="column-1_2">
																			
																		</div>
																	</div>
																</div>
																<div class="column-1_2 sc_column_item sc_column_item_2 bg_tint_dark even">
																	<div class="sc_contact_form sc_contact_form_standard contact_form_1">
																	 <form  method="post" action="">
																	        <div class="sc_contact_form_info">
																				<div class="sc_contact_form_item sc_contact_form_field label_over">
																	                <input type="text" name="name" id="contact_form_username" class="contact_input trans_200" placeholder="Name *" required>
																	            </div>
																	            <div class="sc_contact_form_item sc_contact_form_field label_over">
																	                <input type="text" name="email" id="contact_form_email" class="contact_input trans_200" placeholder="Email *" required>
																	            </div>
																	            
																	        </div>
																	        <div class="message sc_contact_form_item sc_contact_form_message label_over">
																				<div class="">
																	                <input type="text" name="message" id="contact_form_username" class="contact_input trans_200" placeholder="Message *" required>
																	                <!-- textarea  id="contact_form_message" class="textAreaSize" name="message" placeholder="message *" required></textarea -->
																	            </div>
																	        </div>
																			<div class="sc_contact_form_item sc_contact_form_button">
																				<div class="squareButton sc_button_size sc_button_style_global global">
																					<button type="submit" name="contact_submit" class="contact_button button" class="contact_form_submit">Send</button>
																				</div>
																			</div>
																	        <div class="result sc_infobox"></div>
																	    </form>
																	</div> 
																</div>
															</div>
														</div>
													</div>
												</div>
										
										</div>
									</div>
								</div>
							</div>
		

				
<?php
if(isset($_POST['contact_submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
$to = "totalbodyequipment@gmail.com";
$txt = $name. "\r\n" .$message;
$headers = $email;

mail($to,$txt,$headers);
echo "<script>
alert('thank you we will back to you soon...');

</script>";	
}
?>
	
		
</body>
</html>