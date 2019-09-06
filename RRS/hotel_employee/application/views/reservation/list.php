<style type="text/css">
	.table td{height: 50px; width: 50px;}
	.table{width: 0;}
	.table{margin: 0 auto;}
	.field{margin: 5px 10px; float: left;}
</style>

<div class="main">
	<div class="main-inner">
		<div class="container">
			<form action="<?php echo base_url(); ?>reservation/make" method="post">
			<div class="add-fields">

				<!--div class="field">
					<input type="hidden" id="customer_id" name="customer_id" required readonly value="<?=$customer_id?>"/>
				</div--> <!-- /field -->

				<div class="field">
					<label for="customer_TCno">Customer TC no:</label>
					<input type="text" id="customer_TCno" name="customer_TCno" required readonly value="<?=$customer_TCno?>"/>
				</div> <!-- /field -->
				
<!--
				<div class="field">
					<label for="reservation_type">Reservation Type:</label>
					<input type="text" id="reservation_type" name="reservation_type" required readonly value="<?=$reservation_type?>"/>
				 </select>
				</div> <!-- /field -->

				<div class="field">
					<label for="room_type">Room Type:</label>
					<input type="text" id="room_type" name="room_type" required readonly value="<?=$room_type?>"/>
				 </select>
				</div> <!-- /field -->

				<div class="field">
					<label for="checkin_date">Check-in Date:</label>
					<input type="date" id="checkin_date" name="checkin_date" required readonly value="<?=$checkin_date?>"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="checkout_date">Check-out Date:</label>
					<input type="date" id="checkout_date" name="checkout_date" required readonly value="<?=$checkout_date?>"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="reservation_type">Reservation Type:</label>
					<select id="reservation_type" name="reservation_type" >
					<?
						foreach ($reservation_types as $k=>$rt) {
					?>
						<option value="<?=$rt->reservation_type?>" <? if($k==0) { echo "selected"; } ?>><?=$rt->rType_name?></option>
					<?
					}
					?>
					</select>
				</div> <!-- /field -->

				<div class="field">
					<label for="creditcard_number">Credit Card #:</label>
					<input type="text" pattern= "[0-9]{16}" id="creditcard_number" name="creditcard_number" required value="" placeholder="Credit Card #"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="cvv">CVV:</label>
					<input type="text" pattern= "[0-9]{3}" id="cvv" name="cvv" required value="" placeholder="CVV"/>
				</div> <!-- /field -->
			</div> <!-- /login-fields -->
				<div class="row">
					<div class="span12">
		<?php
			$size = count($rooms);
			$cols = ceil(sqrt($size));
			$rows = ceil($size/$cols);
		?>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th colspan="<?=$cols?>">Available Rooms</th>
							</tr>
						</thead>
						<tbody>
						<? for ($t=0, $i=0; $t<$rows; ++$t) { ?>
							<tr>
								<? for($j=0; $j<$cols && $i<$size; ++$i, ++$j) { ?>
								<td class="td-actions"><button name="room_id" value="<?=$rooms[$i]->room_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-small btn-primary"><?=$rooms[$i]->room_id?><br><i class="btn-icon-only icon-edit"> </i></button></td>
							<? } ?>
							</tr>
						<? } ?>
						</tbody>
					</table>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
