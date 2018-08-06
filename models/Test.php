<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $ses_id
 * @property string $position
 * @property string $access_token
 * @property string $avatar
 * @property string $role
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'auth_key', 'position', 'avatar', 'role'], 'required'],
            [['password', 'auth_key', 'position', 'avatar', 'role'], 'string'],
            [['username'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'ses_id' => 'Ses ID',
            'position' => 'Position',
          ///  'access_token' => 'Access Token',
            'avatar' => 'Avatar',
            'role' => 'Role',
        ];
    }
}
