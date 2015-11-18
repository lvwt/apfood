<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shop', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php
      foreach($shop as $i){
?>
<a href="<?php echo Url::toRoute(['shop/view','id'=>$i->id])?>"><div class="bs-example"><img src="<?php apimg($i->img,'shop')?>" width="160px" height="120px">
<?php echo $i->name.'<br/>'.$i->describe;?>

</div></a>
<?php
}
?>
 
<?php echo Yii::getAlias('@web');?>
</div>
