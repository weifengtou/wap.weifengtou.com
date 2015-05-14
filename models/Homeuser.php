<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%homeuser}}".
 *
 * @property string $id
 * @property integer $style
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $reg_time
 * @property string $update_time
 * @property integer $status
 * @property string $checkemail
 * @property string $qqopenid
 */
class Homeuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%homeuser}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['style', 'reg_time', 'update_time', 'status'], 'integer'],
            [['email'], 'string', 'max' => 50],
            [['username'], 'string', 'max' => 16],
            [['password', 'checkemail', 'qqopenid'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '用户ID'),
            'style' => Yii::t('app', '1代表项目方，2代表投资人，3代表为选择身份'),
            'email' => Yii::t('app', 'Email'),
            'username' => Yii::t('app', '用户名'),
            'password' => Yii::t('app', '密码'),
            'reg_time' => Yii::t('app', '注册时间'),
            'update_time' => Yii::t('app', '更新时间'),
            'status' => Yii::t('app', '状态(0：为通过手机验证；1：通过手机验证，注册成功)'),
            'checkemail' => Yii::t('app', '邮箱验证'),
            'qqopenid' => Yii::t('app', 'Qqopenid'),
        ];
    }
}
