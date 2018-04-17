<?php


namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\UserP;
use app\models\Cuenta;

class TransferenciaController extends \yii\web\Controller
{
    public function actionTrasferir($id)
    {
    	$user = UserP::find()->where(['IdUserP' => $id])->one();
    	if(!$user)
    	{
    		 throw new NotFoundHttpException("The user was not found.");
    	}    	
    	$account = Cuenta::find()->where(['IdUser' => $user->idUserP])->one();
    	if(!$account)
    	{
    		 throw new NotFoundHttpException("The account was not found.");
    	}    
    	$data = Yii::$app->request->post();	            	

                
        if(isset($data['Cuenta']['cuenta'])){
        	$account1 = Cuenta::find()->where(['idCuenta' => $data['Cuenta']['cuenta']])->one();
        	$account1->Saldo = $account1->Saldo + $data['Cuenta']['cantidad'];
        	$account1->save();
        	$account->Saldo = $account->Saldo - $data['Cuenta']['cantidad'];
        	$account->save();        	
        	return $this->redirect('/cuenta/index');
        } 
        return $this->render('trasferir',
        	['cuenta' => $account,
        	 'val' => $account->Saldo]
        );
    }

    public function actionCredito()
    {
		$data = Yii::$app->request->post();	
		$account = new Cuenta(); 
		if(isset($data['Cuenta']['cuenta']))
		{
			$account = Cuenta::find()->where(['idCuenta' => $data['Cuenta']['cuenta']])->one();
			$account->Saldo = $account->Saldo + $data['Cuenta']['cantidad'];
			$account->save();
			return $this->goHome();
		}
		return $this->render('trasferir',
        	['cuenta' => $account,
        	 'val' => $account->Saldo]
        );  	
    }

    public function actionDebito()
    {
		$data = Yii::$app->request->post();	
		$account = new Cuenta(); 
		if(isset($data['Cuenta']['cuenta']))
		{
			$account = Cuenta::find()->where(['idCuenta' => $data['Cuenta']['cuenta']])->one();
			$account->Saldo = $account->Saldo - $data['Cuenta']['cantidad'];
			$account->save();
			return $this->goHome();
		}
		return $this->render('trasferir',
        	['cuenta' => $account,
        	 'val' => $account->Saldo]
        );  	
    }

}
