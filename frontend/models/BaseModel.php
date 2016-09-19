<?php
namespace app\models;

use yii\db\ActiveRecord;

class BaseModel extends ActiveRecord
{
    public function beforeSave($insert)
    {
        if ($insert) {
            if ($this->hasAttribute('create_time')) {
                $this->setAttribute('create_time', time());
            }
            if ($this->hasAttribute('update_time')) {
                $this->setAttribute('update_time', time());
            }
        } else {
            if ($this->hasAttribute('update_time')) {
                $this->setAttribute('update_time', time());
            }
        }
        return parent::beforeSave($insert);
    }

    public function getHeadError()
    {
        if(static::hasErrors()) {
            return static::getFirstError(array_keys(static::getErrors())[0]);
        }
    }
}