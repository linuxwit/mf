<?php $this->pageTitle='立即注册';?>
<div class="container">
    <div id="box-register">
        <h2>立即注册</h2>
        <form class="form-horizontal form-register" method="post" action='<?php echo $this->createUrl('/passport/register') ?>'>
            <div class="control-group">
                <label class="control-label" for="inputEmail">您的常用邮箱</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="email" placeholder="常用邮箱">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">请设置密码</label>
                <div class="controls">
                    <input type="password" id="inputPassword"　name="pwd" placeholder="输入密码">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword2">请再次输入密码</label>
                <div class="controls">
                    <input type="password" id="inputPassword2" placeholder="确认密码">
                </div>
            </div>
                        <div class="control-group">
                <label class="control-label" for="inputEmail">您的呢称</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="nickename" placeholder="您的呢称">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-success">注册</button>
                </div>
            </div>
        </form>
    </div>
</div>