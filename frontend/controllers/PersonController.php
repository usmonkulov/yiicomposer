<?php

namespace frontend\controllers;

//use frontend\models\PersonForm;
use common\models\Person;
use yii\db\Query;
use yii\web\Controller;
use Yii;

class PersonController extends Controller
{
    public function actionIndex()
    {
       // $query = new Query();
        $users_query = (new Query())->from('person')->one();

        $users = Person::find()->one();

//        $row = $query
//            ->select(['email AS e', 'first_name'])
//            ->from(['person per', 'user'])
//            ->where(['id' => $id]);
//        echo "<pre>";
//        print_r($row);
//        echo "</pre>";
//        die();
//        $sql = "update person set gender='erkak' where first_name='Axmat'";
//        $command = Yii::$app->db->createCommand()
//            ->insert('person', [
//                'firs_name' => 'Lola',
//                'last_name' => 'Axmadova',
//                'email' => 'admin@gmail.com',
//                'gender' => 'ayol',
//            ])
//            ->execute();
       return $this->render('index', [
           'user_ar' => $users,
           'user_q' => $users_query,
       ]);
    }

    public function actionAdd()
    {
        $person = new Person();
        if($person->load(Yii::$app->request->post())){
            if($person->save()){
                Yii::$app->session->setFlash("success", "Qushildi");
                $this->redirect('/person/index');
            }
        }
        return $this->render('create', ['model'=>$person]);
//        $person->first_name = \Faker\Provider\en_US\Person::firstNameMale();
//        $person->last_name = \Faker\Provider\en_US\Person::firstNameMale();
//        $person->email = 'email.email.ruu';
//        $person->gender = \Faker\Provider\en_US\Person::GENDER_MALE;
//        $person->save();
    }

//    public function actionIndex()
//    {
//        $ism = 'Natija';
//    $command = Yii::$app->db->createCommand("select * from person where first_name = :param_1 or last_name = :param_2");
//    $command->bindValue(':param_1', 'Natija');
//    $command->bindValue(':param_2', 'Salom');
//    $command->bindValues(['param_1'])
//    $result = $command->queryAll();
//        return $this->render('index', [
//            'data'=>$result,
//        ]);
//    }
}