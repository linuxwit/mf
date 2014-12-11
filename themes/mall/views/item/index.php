
<?php
$this->pageTitle = $item['title'];
?>
<ul class="breadcrumb">
    <li><a href="#">首页</a> <span class="divider">></span></li>
    <li><a href="#"><?php echo$item['cat']['title'] ?></a> <span class="divider">></span></li>
    <li class="active"><?php echo $item['title'] ?></li>
</ul>
<div class="row">
    <div class="span4">
        <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => $item['cat']['id'], 'id' => $item['id'])) ?>">
            <img alt=""  style="width: 360px; height: 300px;" src="<?php echo $item['cover'] ?>">
        </a>
    </div>
    <div class="span8">
        <ul class="unstyled porduct-info">
            <li><h4><?php echo $item['title'] ?></h4></li>
            <li><hr/></li>
            <li><h5>免费商城价：<font style="color:red">￥0元</font></h5></li>
            <li><span>市场价：198元</span></li>
            <li><h4><?php $item['limit'] ?></h4></li>
        </ul>
        <div>
            <a href="<?php echo $this->createUrl('/cart', array('item' => 1)) ?>" class="btn btn-danger btn-large">直接购买</a>　
            <a class="btn btn-default btn-large">加入到购物车</a>
        </div>

    </div>
    <div class="span12 product-description">
        <h4>商品介绍</h4>
        <hr/>
        <p style="line-height: 20px;font-size: 14px">
      　红红火火的开业仪式后，整个“寻爱中心”就陷入了一片冷清之中，整整一个星期，也没人上门。<br/>
　　叶晓骅和尤浔在不断地争辩以何种方式登广告时，终于有一个姑娘来到了“寻爱中心”。<br/>
　　羞涩的姑娘三次过门而不入，直达尤浔通过法术把姑娘吸引进来，叶尤二人才了解到这个极度羞涩的姑娘是流浪儿之家的负责人刘琳珊，她负责的主要工作，是对外销售幸运宝贝（娃娃名），而每出售一个幸运宝贝，就会有一块钱的流浪儿基金捐献给流浪儿之家。<br/>
　　最近一段时间，有一个男孩每天都会来买一个幸运宝贝，而在这段时间的接触中，刘琳珊渐渐爱上了男孩，可惜刘琳珊太过羞涩，连男孩的名字都没有过问，男孩就突然不来了……
　　虽然不是自己的新娘，但是作为有缘人，叶尤二人还是接受了这份委托，茫茫人海，要到何处才能找到这个男孩呢？<br/>
　　就在叶尤二人即将泄气的时候，他们突然发现每天都装幸运宝贝的盒子上，有一个奇怪的地图，三个人按图索骥，来到了流浪儿之家，而此时，这里的孩子们，正人手一个幸运宝贝，看到刘琳珊，他们异口同声的叫新老师出来。<br/>
　　新老师正是刘琳珊心仪的男孩，同样超级羞涩的他，不敢向刘琳珊表白，只能通过到流浪儿之家做义工来寄托相思，同时在箱子上，用画笔表达情义。<br/>
　　而在小龙王叶晓骅的法术下，两人终于敞开了心扉……
        </p>
    </div>


</div>

<div class="row">
    <div class="span12 box-same-product">
        <h4>同类产品</h4>
        <ul class="thumbnails">
            <li class="span4">
                <a class="thumbnail" href="<?php echo $this->createUrl('/item', array('cat' => $item['cat']['id'], 'id' => 2)) ?>">
                    <img   style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/2.jpg">
                </a>
            </li>
            <li class="span4">
                <a class="thumbnail" href="<?php echo $this->createUrl('/item', array('cat' => $item['cat']['id'], 'id' => 3)) ?>">
                    <img   style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/3.jpg">
                </a>
            </li>
            <li class="span4">
                <a class="thumbnail" href="<?php echo $this->createUrl('/item', array('cat' => $item['cat']['id'], 'id' => 4)) ?>">
                    <img   style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/4.jpg">
                </a>
            </li>

        </ul>
    </div>
</div>

