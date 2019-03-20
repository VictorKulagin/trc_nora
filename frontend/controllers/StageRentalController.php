<?php
/**
 * Created by PhpStorm.
 * User: gerasinig
 * Date: 24.08.15
 * Time: 16:16
 */

namespace frontend\controllers;

use common\models\Mailings;
use Yii;
use yii\helpers\Html;
use yii\web\Controller;
use frontend\models\StageRentalForm;
use frontend\models\StageRental;
use yii\web\Response;

/*use yii\db\Query;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use frontend\models\ContentCategories;*/

class StageRentalController extends Controller
{
    public function actionIndex()
    {

        $model = new StageRental();

        if ($model->load(Yii::$app->request->post()) && $model->save()){
            $model->sendMail();
           return $this->redirect(['index']);

        }


        return $this->render('index', [
            'model' => $model

        ]);
    }

    public function actionRender()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $model = StageRental::find()->where(['status' => 1])->all();

        $tiles = [];
        foreach ($model as $item) {
            $tiles[date('Y-n-j', strtotime($item->time_start))][] = date('H:i', strtotime($item->time_start));
        }
        return $tiles;


//        {"2019-03-11":["12:00","13:00","14:00"],"2019-03-12":["14:00","15:00","16:00"]}

        /*turn [
            '2019-03-15' => ['11:00', '12:00', '13:00', '14:00'],
            '2019-03-16' => ['11:00', '12:00', '13:00', '14:00'],
            '2019-03-17' => ['11:00', '12:00', '13:00', '14:00'],
        ];*/
    }
} 