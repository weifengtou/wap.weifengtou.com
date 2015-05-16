<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
//use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->title='test1';
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <![CDATA[YII-BLOCK-HEAD]]>
</head>
<body>

<![CDATA[YII-BLOCK-BODY-BEGIN]]>
<?php $this->trigger('beginBody'); ?>
    <div class="wrap">
        <?php
            \yii\bootstrap\NavBar::begin([
                'brandLabel' => '主页',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options'=>[
                    'class'=>'navbar-nav',
                ],
                'items'=>[
                    ['label'=>'好项目','url'=>['/site']],
                    ['label'=>'投资人','url'=>['/site']],
                ]
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => '首页', 'url' => ['/site/index']],
                    ['label' => '关于', 'url' => ['/site/about']],
                    ['label' => '联系', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => '登陆', 'url' => ['/site/login']] :
                        ['label' => '登出 (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            \yii\bootstrap\NavBar::end();
        ?>

        <div class="container">
            <?= \yii\widgets\Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            test1
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; 微风投 <?= date('Y') ?></p>
        </div>
    </footer>

<?php $this->trigger('endBody'); ?>
<![CDATA[YII-BLOCK-BODY-END]]>
<?php
foreach (array_keys($this->assetBundles) as $bundle) {
    $this->registerAssetFiles($bundle);
}
?>
</body>
</html>
<?php $this->endPage() ?>
