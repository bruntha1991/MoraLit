<?php

/**
 * This is the model class for table "crew".
 *
 * The followings are the available columns in table 'crew':
 * @property string $crew_id
 * @property string $first_name
 * @property string $last_name
 * @property string $faculty
 * @property string $year
 * @property string $designation
 * @property string $contact_no
 * @property string $email
 * @property string $image
 */
class Crew extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'crew';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, faculty, year, designation, contact_no, email', 'required'),
			array('first_name, last_name, faculty, designation, email, image', 'length', 'max'=>45),
			array('year', 'length', 'max'=>4),
			array('contact_no', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('crew_id, first_name, last_name, faculty, year, designation, contact_no, email, image', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'crew_id' => 'Crew',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'faculty' => 'Faculty',
			'year' => 'Year',
			'designation' => 'Designation',
			'contact_no' => 'Contact No',
			'email' => 'Email',
			'image' => 'Image',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('crew_id',$this->crew_id,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('faculty',$this->faculty,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('designation',$this->designation,true);
		$criteria->compare('contact_no',$this->contact_no,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Crew the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
