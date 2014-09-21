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
                <ul class="unstyled inline cart-progress cart-progress-2">
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
<form method="post" action="<?php echo $this->createUrl('/trade') ?>"
      <div class="container">
        <h4>填写并核对订单信息</h4>

        <div class="order-box">

            <div id="step-1">
                <div class="step-title">
                    <h5>收货人信息</h5>
                </div>
                <div class="step-content">
                    <div class="setting">
                        <p>张三   18621326390</p>   
                        <p>上海 徐汇区 内环以内 上海市浦东新区1688<p>
                    </div>
                    <div class="config hide">

                    </div>
                </div>
            </div>
            <div id="step-2">
                <div class="step-title">
                    <h5>支付及配送方式</h5>
                </div>
                <div class="step-content">
                    <div class="setting">
                        <h6>货到付款</h6>
                        <h6>快递</h6>
                    </div>
                    <div class="config hide">
                        <h6>货到付款</h6>
                        <ul class="unstyled">
                            <li><input type="radio"/> 货到付款  送货上门后再收款，支持现金、POS机刷卡、支票支付</li>
                        </ul>

                        <h6>配送方式</h6>
                    </div>
                </div>
            </div>
            <div id="step-3">
                <div id="step-title">
                    <h5>商品清单</h5>
                </div>
                <div class="step-content">
                    <table class="table order-list-table">
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
                                    库存状态
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="cart-item">
                                        <a href="<?php echo $this->createUrl('/item/index', array('id' => 1)) ?>">
                                            <img alt="100X100"  style="width: 100px; height: 100px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWgAAAEOCAYAAACkSI2SAAAGEklEQVR4nO3cO5IiOQBAwb3/UbgBB8DHx8XuK8xaNaFlVB+Kid4XHWmkAxQhtfEQKtH/fH19/QKg55//ewAAzAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAc8jj8fh1uVz+8Hg8Nq97Pp/T657P5+o1t9vtrdefsTau6/U6ff3stUfH+B3z4WcSaHYtgbndbr8fGwM3Pj677nK5/H7sfr9vRuo1lOMHw96HwVHjGMbHr9fr9PFxrq/vtYxv7W/wHfPh5xJoNo1xeg3KGJvX2C4RfA3XGO3Xa2ZBH99rFshP5rP1AXG/3/+Y5yyoW+P6jvnwswk0u9ZWyluxe/er/PheYxxf32/23Dv2VrCzbwtLUNc+hGZj+q758LMJNKeNsTvy+Ja9rY9l+2Ftj/iova2ZWaDXbM3xu+bDzybQnLL1NX157nq9rt5cfL1mbTtg7fnZTb77/f6fcZ25IXd0f3hr9XxmPjAj0Bz2GsW11d/rqYXxdWt70HvBWluRzla8y4fCu9sHZ1bPR05uvDMfGAk0p2ztsY6nIY5uI6ydoFhsBW25dln1ntk6WLupefa1n8wHFgLNaWsnPPbiNNuj/mTFOdvueCd678R5nN/WCt0Kmr9BoPnI7GbXXpxmx/M+3bM9e754ed+j2yF7x/SOjtceNEcINB8582OUWaA/PfUwvufR7Y1l7O8E/egZZqc4+BsEmk1753lnodlbzc4i9+m54WUMy3j2tiu24ny73Q7dAP3k77Y3H/j6Emh2jLF9jcmRG4Wz0K2dljj7y7vlumWlurfVsbetsRX4cX99b+/YLwn5lECza3YiY4zzLMJrz+/F6fWao6vx2U+zZxHdO4J3JN7v3Nx7dz4wEmgOmf0A5EhkxhXnLPQzR/772+zkxuPxmI5zjO1sPDNrgd47oXJ2PjAj0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRD1L+o7H1KWLjK2AAAAAElFTkSuQmCC">
                                        </a>
                                        <a href="#">
                                            商品名称商品名称
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
                                    有货
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="cart-item">
                                        <a href="<?php echo $this->createUrl('/item/index', array('id' => 1)) ?>">
                                            <img alt="100X100"  style="width: 100px; height: 100px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWgAAAEOCAYAAACkSI2SAAAGEklEQVR4nO3cO5IiOQBAwb3/UbgBB8DHx8XuK8xaNaFlVB+Kid4XHWmkAxQhtfEQKtH/fH19/QKg55//ewAAzAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAA0QJNECUQANECTRAlEADRAk0QJRAc8jj8fh1uVz+8Hg8Nq97Pp/T657P5+o1t9vtrdefsTau6/U6ff3stUfH+B3z4WcSaHYtgbndbr8fGwM3Pj677nK5/H7sfr9vRuo1lOMHw96HwVHjGMbHr9fr9PFxrq/vtYxv7W/wHfPh5xJoNo1xeg3KGJvX2C4RfA3XGO3Xa2ZBH99rFshP5rP1AXG/3/+Y5yyoW+P6jvnwswk0u9ZWyluxe/er/PheYxxf32/23Dv2VrCzbwtLUNc+hGZj+q758LMJNKeNsTvy+Ja9rY9l+2Ftj/iova2ZWaDXbM3xu+bDzybQnLL1NX157nq9rt5cfL1mbTtg7fnZTb77/f6fcZ25IXd0f3hr9XxmPjAj0Bz2GsW11d/rqYXxdWt70HvBWluRzla8y4fCu9sHZ1bPR05uvDMfGAk0p2ztsY6nIY5uI6ydoFhsBW25dln1ntk6WLupefa1n8wHFgLNaWsnPPbiNNuj/mTFOdvueCd678R5nN/WCt0Kmr9BoPnI7GbXXpxmx/M+3bM9e754ed+j2yF7x/SOjtceNEcINB8582OUWaA/PfUwvufR7Y1l7O8E/egZZqc4+BsEmk1753lnodlbzc4i9+m54WUMy3j2tiu24ny73Q7dAP3k77Y3H/j6Emh2jLF9jcmRG4Wz0K2dljj7y7vlumWlurfVsbetsRX4cX99b+/YLwn5lECza3YiY4zzLMJrz+/F6fWao6vx2U+zZxHdO4J3JN7v3Nx7dz4wEmgOmf0A5EhkxhXnLPQzR/772+zkxuPxmI5zjO1sPDNrgd47oXJ2PjAj0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRAl0ABRAg0QJdAAUQINECXQAFECDRD1L+o7H1KWLjK2AAAAAElFTkSuQmCC">
                                        </a>
                                        <a href="#">
                                            商品名称商品名称
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
                                    有货
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="order-table-price">
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5">２件商品，商品总价：<span class="price">¥0.00</span></td>
                            </tr>
                            <tr>
                                <td colspan="5">运费：<span class="price">¥0.00</span></td>
                            </tr>
                            <tr>
                                <td colspan="5">应付总额：<span class="price">¥46.00</span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div id="step-4">
                <div class="step-content">
                     <span>应付总额（含运费）：<strong style="color: red">¥46.00</strong></span>  
                    <button type="submit" class="btn btn-danger btn-large">提交订单</button>
                </div>
            </div>

        </div>
    </div>
</form>

