<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blogs */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="blogs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-muted">
        <small>Created At: <b><?php echo Yii::$app->formatter->asDatetime($model->created_at) ?></b>
            </small>
        </p>

    <?php if (!Yii::$app->user->isGuest): ?>
    <p>
        <?= Html::a('Update', ['update', 'b_id' => $model->b_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'b_id' => $model->b_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php endif; ?>
    <div>
        <?php echo $model->getEncodedBody(); ?>
    </div>

</div>
