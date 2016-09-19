<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $password
 * @property integer $status
 * @property string $face
 * @property integer $create_time
 * @property integer $last_login_time
 * @property string $last_login_ip
 */
class User extends \app\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'create_time', 'last_login_time'], 'integer'],
            [['name'], 'string', 'max' => 25],
            [['password'], 'string', 'max' => 70],
            [['face'], 'string', 'max' => 100],
            [['last_login_ip'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '用户名',
            'password' => '密码',
            'status' => '状态',
            'face' => '头像',
            'create_time' => '注册时间',
            'last_login_time' => '最后登陆时间',
            'last_login_ip' => '最后登陆IP',
        ];
    }
}
