<div id="paymentd">

	<div id="onfile" style="display:none;">
			<section id="precontent">
				<h3><img src="../images/lock.png" style="width:20px;">Credit Card on File</h3>
			</section>
			
			
			<div style="height:220px;background:url(../images/cc.png);background-repeat:no-repeat;margin:10px;">
				<div class="ccnumber" style="position:relative;top:40px;left:30px;font-size:26px;color:#FFF;text-shadow: 2px 2px 0px #3f3e3f;">
					<span id="last4oncard"></span>
				</div>
				<div class="ccname" style="position:relative;top:125px;left:25px;font-size:20px;color:#FFF;text-shadow: 2px 2px 0px #3f3e3f;">
					<span id="cardname"></span>
				</div>
				<div class="cclogo">
					<img id="cardlogo" src="" style="position:relative;top:85px;left:225px;"/>
				</div>
			</div>
			<input type="submit" onclick="addnewcard();" data-role="none" class="primarybutton" value="Update Card" />

	</div>
	
	
	<div id="payblock" style="display:none;">
		<iframe src="" id="payifrm" style="height:350px;width:100%;" scrolling="no">
	</div>		


</div>
