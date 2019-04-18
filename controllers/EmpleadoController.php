<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Empleado;

class EmpleadoController extends Controller
{
    public function actionIndex()
    {
        $query = Empleado::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        $empleados = $query->orderBy('num_empleado')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'empleados' => $empleados,
            'pagination' => $pagination,
        ]);
    }
}