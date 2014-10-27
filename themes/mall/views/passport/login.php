<?php $this->pageTitle = '登录'; ?>
<div class="container">
    <div id="box-register">
        <h2>登录</h2>
        <form class="form-horizontal form-register" method="post" action='<?php echo $this->createUrl('/passport/login') ?>'>
            <div class="control-group">
                <label class="control-label" for="inputEmail">邮箱</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="email" placeholder="登录邮箱">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">密码</label>
                <div class="controls">
                    <input type="password" id="inputPassword"　name="pwd" placeholder="登录密码">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" checked="true">记住登录信息
                    </label>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-success">登录</button>
                </div>
            </div>
        </form>
    </div>
</div>