<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Empleados</h1>
<ul>
<?php foreach ($empleados as $empleado): ?>
    <li>
        <?= Html::encode("{$empleado->nombre} ({$empleado->num_empleado})") ?>:
        <?= $empleado->telefono ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>