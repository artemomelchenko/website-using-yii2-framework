<?php

namespace frontend\controllers;

use common\models\Contact;
use common\models\Faq;
use common\models\Main;
use common\models\PageServices;
use common\models\PageTestimonials;
use common\models\Services;
use common\models\Settings;
use common\models\Subservices;
use common\models\Testimonials;
use common\models\User;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\db\Expression;
use yii\helpers\VarDumper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $settings = Main::findOne(1);
        $services = Services::find()->all();
        $faq = Faq::find()->all();
        $set = Settings::findOne(1);

        $post = Yii::$app->request->post();

        if ($post){

            $arr = [
                'Name:' => $post['input_name'],
                'Email:' => $post['input_email'],
                'Message:' => $post['input_message'],
            ];

            User::sendToTelegram($arr);

            return $this->redirect('/success');
        }

        return $this->render('index', [
            'services' => $services,
            'faq' => $faq,
            'settings' => $settings,
            'set' => $set,
        ]);
    }

    public function actionTestimonials()
    {

        $model = new Testimonials();
        $post = Yii::$app->request->post();
        $settings = PageTestimonials::findOne(1);

        if ($post){


           $model->name = $post['input_name'];
            $model->email    = $post['input_email'];
            $model->message   = $post['input_message'];
            $model->accepted = 0;
            $model->created = 0;
            $model->date_create = new Expression('NOW');
            $model->save();

//            return $this->redirect('/success');
        }


        $testimonals = Testimonials::find()->where(['accepted' => 1])->all();
        return $this->render('testimonials', [
            'testimonials' => $testimonals,
            'settings' => $settings,
        ]);
    }

    public function actionServices()
    {

        $post = Yii::$app->request->post();
        $settings = PageServices::findOne(1);

        if ($post){

            $pieces = explode('.', $post['number-post']);
//            $post['number-post']
            $s1 = Services::findOne($pieces[0])->name;
            $s2 = Subservices::findOne($pieces[1])->name;

            $arr = [
                'Name:' => $post['input_name'],
                'Email:' => $post['input_email'],
                'Message:' => $post['input_message'],
                'Service:' => $s1,
                'SubService:' => $s2,
            ];

            User::sendToTelegram($arr);

//            VarDumper::dump($post,10,1);
            return $this->redirect('/success');
        }

        $serbices = Services::find()->with('subservices')->all();
        return $this->render('services', [
            'services' => $serbices,
            'settings' => $settings,
            'set' => $set,
        ]);
    }

    public function actionSuccess()
    {
        return $this->render('success');
    }

    public function actionPrivacyPolicy()
    {
        return $this->render('privacy');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {

        $post = Yii::$app->request->post();
        $settings = Contact::findOne(1);
        $set = Settings::findOne(1);
        if ($post){

            $arr = [
                'Name:' => $post['input_name'],
                'Email:' => $post['input_email'],
                'Message:' => $post['input_message'],
            ];

            User::sendToTelegram($arr);

            return $this->redirect('/success');
        }
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
//                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
//            } else {
//                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
//            }
//
//            return $this->refresh();
//        } else {
            return $this->render('contact', [
                'settings' => $settings,
                'set' => $set
            ]);
//        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
