To reset your password please go to the url <?= Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token'=>$user->password_reset_token]) ?>