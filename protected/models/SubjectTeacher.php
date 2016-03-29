<?php

/**
 * This is the model class for table "subject_teacher".
 *
 * The followings are the available columns in table 'subject_teacher':
 * @property integer $id
 * @property integer $group_id
 * @property integer $subject_id
 * @property integer $type_of_subject_id
 * @property integer $department_id
 * @property integer $teacher_id
 *
 * The followings are the available model relations:
 * @property Teacher $teacher
 * @property Group $group
 * @property Subject $subject
 * @property TypeOfSubject $typeOfSubject
 * @property Department $department
 */
class SubjectTeacher extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'subject_teacher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id, subject_id, type_of_subject_id, department_id, teacher_id', 'required'),
			array('group_id, subject_id, type_of_subject_id, department_id, teacher_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, group_id, subject_id, type_of_subject_id, department_id, teacher_id', 'safe', 'on'=>'search'),
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
			'teacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_id'),
			'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subject_id'),
			'typeOfSubject' => array(self::BELONGS_TO, 'TypeOfSubject', 'type_of_subject_id'),
			'department' => array(self::BELONGS_TO, 'Department', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'group_id' => 'Group',
			'subject_id' => 'Subject',
			'type_of_subject_id' => 'Type Of Subject',
			'department_id' => 'Department',
			'teacher_id' => 'Teacher',
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
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('type_of_subject_id',$this->type_of_subject_id);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('teacher_id',$this->teacher_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SubjectTeacher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
