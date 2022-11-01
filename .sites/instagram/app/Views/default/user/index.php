<?php
    /**
     * @var \Wow\Template\View $this
     * @var array              $model
     */
  
?>

<div class="container">
        <div class="cl10"></div>
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <h4 style="margin-top: 0;">Beğeni Gönderme Aracı</h4>
                <p>Beğeni gönderme aracı ile, dilediğiniz gönderiye, kendi belirlediğiniz adette beğeniyi anlık olarak gönderebilirsiniz. Gönderilen beğenilerin tamamı gerçek kullanıcılardır.</p>
                <p>Maximum beğeni krediniz kadar, beğeni gönderebilirsiniz!</p>
                <p>Beğeni göndereceğiniz profil gizli olmamalıdır! Gizli profillerin gönderilerine ulaşılamadığından, beğeni de gönderilememektedir.</p>
<div class="container">
    <ul class="nav nav-tabs nav-justified nav-tabs-justified" style="margin-bottom: 15px;">
        <li<?php if($this->route->params["action"] == "Index") { ?> class="active"<?php } ?>>
       
        </li>
      
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in">
            <?php $this->renderView("shared/list-media", $model); ?>
        </div>
    </div>
</div>