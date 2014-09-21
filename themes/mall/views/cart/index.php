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
                    <a href="">删除</a>
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

