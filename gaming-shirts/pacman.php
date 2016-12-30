<?php 
$title = '<title>Pacman Shirt by Espada Limited</title>';
$meta_description = '<META name="description" content="Minimalist and Vintage Pacman T Shirt | Iconically simple t-shirt designs that every gamer can relate to">';
$meta_keywords = '<META name="keywords" content="design, espada limited, michael plater II, mike plater, gaming,gaming clothes, gaming shirts, t-shirt, shirts, pacman">';
include_once('../header.html'); 

?>
<h1>Pacman Shirt</h1>
		<div class="shirts_images_container">
			<table border="0">
				<tr>
					<td width="125"></td>
					<td width="500">
						<img border="0" alt="Pacman T Shirt" title="Pacman T Shirt" src="../images/pacmanjpg.jpg">
					</td>
					<td width="225">
						<h2>$24</h2>
						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="_gaq.push(['_trackPageview','/paypal'])">
							 <input type="hidden" name="cmd" value="_cart" />
							 <input type="hidden" name="add" value="1" />
							 <input type="hidden" name="business" value="GUKKL97LA25EU" />
							 <input type="hidden" name="item_name" value="Pacman Shirt" />
							 <input type="hidden" name="amount" value="24" />
							 <input type="hidden" name="button_subtype" value="products" />
							 <input type="hidden" name="shipping" value="2.5" />
							 <input type="hidden" name="shipping2" value="2.5" />
							 <table>
							<tr><td><input type="hidden" name="on0" value="Sizes">Sizes</td></tr><tr><td><select name="os0">
								<option value="Male S">Male S </option>
								<option value="Male M">Male M </option>
								<option value="Male L">Male L </option>
								<option value="Male XL">Male XL </option>
								<option value="Male XXL">Male XXL </option>
								<option value="Female S">Female S </option>
								<option value="Female M">Female M </option>
								<option value="Female L">Female L </option>
								<option value="Female XL">Female XL </option>
								<option value="Female XXL">Female XXL </option>
							</select> </td></tr>
										</table>
							 <input type="hidden" name="return" value="http://www.espadalimited.com/success.php?utm_nooverride=1" />
							 <input type="hidden" name="cancel_return" value="http://www.espadalimited.com" />
							 <?php
								if(!empty($_SESSION['item']) && !empty($_SESSION['discount']) && $_SESSION['item'] == "shirt"){
									echo "
										<input type=\"hidden\" name=\"discount_rate\" value=\"". $_SESSION['discount'] . "\">
										<input type=\"hidden\" name=\"discount_rate2\" value=\"". $_SESSION['discount'] . "\">
									";
									
								}
							?>
							 <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" />
							</form>
						<br/>
						<b>Mens:</b> <br/>
						Has a seamless rib collar with double-needle cover-stitching, shoulder-to-shoulder taping, double-needle sleeve and bottom hem. The shirt is made from 100% pre-shrunk cotton and has a relatively light fabric weight of 5.3 oz.
						<br/><br/>
						<b>Womens:</b> <br/>
						Has a narrow neck rib, tailored sleeves and a redesigned cut for a better ladies fit. With plenty of extra room, this shirt is ideal for most body types. The fabric is made from 100% pre-shrunk cotton and has a fabric weight of 5.4 oz.
					
					</td>
				</tr>
				
			</table>
		
		</div>
<?php include_once('../footer.html'); ?>