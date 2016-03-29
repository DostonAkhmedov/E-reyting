<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $id
 * @property string $name
 * @property integer $group_id
 * @property integer $subject_id
 * @property integer $type_of_control_id
 * @property integer $ball
 * @property integer $total_ball
 *
 * The followings are the available model relations:
 * @property TypeOfControl $typeOfControl
 * @property Group $group
 * @property Subject $subject
 */
class Student extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, group_id, subject_id, type_of_control_id, ball, total_ball', 'required'),
			array('group_id, subject_id, type_of_control_id, ball, total_ball', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, group_id, subject_id, type_of_control_id, ball, total_ball', 'safe', 'on'=>'search'),
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
			'typeOfControl' => array(self::BELONGS_TO, 'TypeOfControl', 'type_of_control_id'),
			'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subject_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'group_id' => 'Group',
			'subject_id' => 'Subject',
			'type_of_control_id' => 'Type Of Control',
			'ball' => 'Ball',
			'total_ball' => 'Total Ball',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('type_of_control_id',$this->type_of_control_id);
		$criteria->compare('ball',$this->ball);
		$criteria->compare('total_ball',$this->total_ball);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static function getStudents(){
		$model=self::model()->findAll();
		return CHtml::listData($model,'id','name');
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
