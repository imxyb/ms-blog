<?php
namespace frontend\controllers;

use app\services\AbcService;
use BaseComponents\base\YarClient;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $this->layout = false;
        $client = new \Yar_Client('http://www.msblog.local/site/test');
//        $client = Yii::$app->yarclient->call(YarClient::PASSPORT_API.'/login');
        var_dump($client->abc());exit;
//        return $this->render('login', [
//
//        ]);
    }
    
    public function actionTest()
    {
        $server = new \Yar_Server(new AbcService());
        $server->handle();
    }
}
