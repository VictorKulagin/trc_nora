<?php
/**
 * Created by PhpStorm.
 * User: gerasinig
 * Date: 24.08.15
 * Time: 16:16
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\web\Controller;
/*use yii\db\Query;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use frontend\models\ContentCategories;*/

class StageRentalForm extends Model
{
    public $name;
    public $phone;
    public $email;
    public $numberParticipants;
    public $eventDescription;
    public $date;
    public $time_start;
    public $time_end;

    public function rules()
    {
        return[
            [['name', 'phone', 'email', 'date', 'time_start'], 'required'],
            [['numberParticipants'], 'safe'],
            [['eventDescription'], 'safe'],
            [['time_end'], 'safe'],
            [['time_start'], 'pattern'=>'/^[0-9]{4}-[0-9]{1,2}-[0-9]{2}.[0-9]{2}:[0-9]{2}:[0-9]{2}$/i'],
            //[['name', 'date' , 'time'], 'required'],
            ['email', 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name'=>'Имя',
            'phone'=>'Телефон',
            'email'=>'Электронная почта',
            'numberParticipants'=>'Количество участников',
            'eventDescription'=>'Описание мероприятия',
        ];
    }

    /*public function mailStageRental()
    {

    }*/

} 