<form class="form-horizontal" role="form" novalidate method="POST" action="<?php echo $this->createUrl('/pay/alipay')?>">
	<input type="hidden" id="itemId" name="item_id"/>
	<input type="hidden" id="itemQty" name="item_qty"/>
	<div class="form-group has-success has-feedback">
		<label for="userEmail" class="col-sm-2 control-label">姓名</label>
		<div class="col-sm-6">
			<input type="email" class="form-control input-lg" id="userEmail" name="name" placeholder="姓名" required>
			<span class="glyphicon glyphicon-ok form-control-feedback"></span>
		</div>
	</div>
	<div class="form-group">
		<label for="userAddress" class="col-sm-2 control-label">收货地址</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="userAddress" name="address" placeholder="收货地址" required>
		</div>
	</div>
	<div class="form-group">
		<label for="userPostCode" class="col-sm-2 control-label">邮编</label>
		<div class="col-sm-4">
			<input type="email" class="form-control" id="userPostCode" name="postcode" placeholder="邮编" required>
		</div>
	</div>
	<div class="form-group">
		<label for="userPhone" class="col-sm-2 control-label">电话号码</label>
		<div class="col-sm-4">
			<input type="email" class="form-control" id="userPhone" name="phone" placeholder="电话号码" required>
		</div>
	</div>
	<div class="form-group">
		<label for="userMobile" class="col-sm-2 control-label">手机号码</label>
		<div class="col-sm-4">
			<input type="email" class="form-control" id="userMobile" name="mobile" placeholder="手机号码" required>
		</div>
	</div>
	<div class="form-group">
		<label for="userEmail" class="col-sm-2 control-label">邮箱</label>
		<div class="col-sm-6">
			<input type="email" class="form-control" id="userEmail" name="email" placeholder="电子邮箱" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">去支付</button>
		</div>
	</div>
</form>