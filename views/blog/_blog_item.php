<?php
/**
 * User: TheCodeholic
 * Date: 8/11/2019
 * Time: 2:01 PM
 */

use yii\helpers\Html;
/** @var $model \app\models\Article */
?>

<div>
    <a href="<?php echo \yii\helpers\Url::to(['view', 'b_id' => $model->b_id]) ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(), 40) ?>
    </div>
    <p class="text-muted" text-right>
    <small>Created At: <b><?php echo Yii::$app->formatter->asDatetime($model->created_at) ?></b>
            
            </small>
</p>
    <hr>
</div>