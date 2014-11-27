<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $phone_number
 * @property string $user_type
 * @property string $faculty
 * @property string $last_login_date
 * @property string $last_login_time
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property Like[] $likes
 */
class User extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, username, firstname, lastname, email, password, user_type, last_login_date, last_login_time', 'required'),
            array('user_id', 'numerical', 'integerOnly' => true),
            array('username, firstname, lastname, email, password, phone_number, user_type, faculty', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_id, username, firstname, lastname, email, password, phone_number, user_type, faculty, last_login_date, last_login_time', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'comments' => array(self::HAS_MANY, 'Comment', 'user_id'),
            'likes' => array(self::HAS_MANY, 'Like', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_id' => 'User',
            'username' => 'Username',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'phone_number' => 'Phone Number',
            'user_type' => 'User Type',
            'faculty' => 'Faculty',
            'last_login_date' => 'Last Login Date',
            'last_login_time' => 'Last Login Time',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('firstname', $this->firstname, true);
        $criteria->compare('lastname', $this->lastname, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('phone_number', $this->phone_number, true);
        $criteria->compare('user_type', $this->user_type, true);
        $criteria->compare('faculty', $this->faculty, true);
        $criteria->compare('last_login_date', $this->last_login_date, true);
        $criteria->compare('last_login_time', $this->last_login_time, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getType() {
        $user_ID = Yii::app()->user->getId();
        $data = Yii::app()->db->createCommand()
                ->select('user_type')
                ->from('user')
                ->where('user_id=:user_id', array(':user_id' => $user_ID))
                ->queryAll();
        return $data[0]['user_type'];
    }

}
