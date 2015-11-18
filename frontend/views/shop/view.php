<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shop */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-view">

    <h1><?= Html::encode($this->title) ?></h1>

  
<?php
      foreach($dish as $i){
?>
<div class="bs-example"><div class="col-xs-6"><img src="<?php apimg($i->pic,'dish')?>" width="160px" height="120px" /></div>
<?php echo $i->name.' '.$i->des;?>

<button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
</button>

</div>
<?php
}
?>

</div>
