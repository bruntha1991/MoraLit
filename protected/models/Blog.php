<?php

/**
 * This is the model class for table "blog".
 *
 * The followings are the available columns in table 'blog':
 * @property integer $blog_id
 * @property string $title
 * @property integer $user_id
 * @property string $content
 * @property string $date
 * @property string $time
 * @property string $image
 * @property string $no_of_views
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property Like[] $likes
 */
class Blog extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'blog';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, user_id, content, date, time, image, no_of_views', 'required'),
            array('user_id', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 100),
            array('image', 'length', 'max' => 45),
            array('no_of_views', 'length', 'max' => 10),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('blog_id, title, user_id, content, date, time, image, no_of_views', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'comments' => array(self::HAS_MANY, 'Comment', 'blog_id'),
            'likes' => array(self::HAS_MANY, 'Like', 'blog_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'blog_id' => 'Blog',
            'title' => 'Title',
            'user_id' => 'User',
            'content' => 'Content',
            'date' => 'Date',
            'time' => 'Time',
            'image' => 'Image',
            'no_of_views' => 'No Of Views',
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

        $criteria->compare('blog_id', $this->blog_id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('time', $this->time, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('no_of_views', $this->no_of_views, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Blog the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getBroadcastNews() {
        $data = Yii::app()->db->createCommand()
                ->select('*')
                ->from('blog')
                ->queryAll();

        return $data;
    }

    public static function TruncateText($text, $max_len) {
        $len = mb_strlen($text, 'UTF-8');
        if ($len <= $max_len)
            return $text;
        else
            return mb_substr($text, 0, $max_len - 1, 'UTF-8') . '...';
    }

}
