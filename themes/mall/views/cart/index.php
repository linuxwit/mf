<div class="header-logo">
    <div class="container">
        <div class="row">
            <div class="pull-left logo">
                <a>
                    <h2>
                        <?php echo Yii::app()->name ?>
                    </h2>
                </a>
            </div>
            <div class="pull-right">
                <ul class="unstyled inline cart-progress cart-progress-1">
                    <li class="step-1">
                        1.我的购物车
                    </li>
                    <li class="step-2">
                        2.填写核对订单信息
                    </li>
                    <li class="step-3">
                        3.成功提交订单
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h4>我的购物车</h4>
    <table class="table cart-table">
        <thead>
            <tr class="cart-header">
                <th>
                    商品信息
                </th>
                <th>
                    商城价
                </th>
                <th>
                    数量
                </th>
                <th>
                    金额
                </th>
                <th>
                    操作
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div style="cart-item">
                        <a href="<?php echo $this->createUrl('/item/index', array('id' => 1)) ?>">
                            <img alt=""  style="width: 100px; height: 100px;" src="<?php echo Yii::app()->baseUrl?>/upload/1.jpg">
                        </a>
                        <a href="#">
                            LuckyBaby
                        </a>
                    </div>
                </td>
                <td>
                    ¥0.00
                </td>
                <td>
                    1
                </td>
                <td>
                    ¥0.00
                </td>
                <td>
                    <a href="">删除</a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr >
                <td colspan="5">
                     <span class="pull-right">总计（不含运费）：<strong style="color: red">¥0.00</strong></span> 
                </td>
            </tr>
            <tr class="cart-foot">
                <td colspan="5">
                    <a class="btn btn-danger btn-large pull-right" href="<?php echo $this->createUrl('/order') ?>">去结算</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

