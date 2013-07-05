<?php

/**
 * This is the model class for table "{{scope}}".
 *
 * The followings are the available columns in table '{{scope}}':
 * @property integer $id_scope
 * @property string $scope
 * @property string $detail
 */
class Scope extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Scope the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{scope}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('scope, detail', 'required'),
			array('scope', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_scope, scope, detail', 'safe', 'on'=>'search'),
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
			'id_scope' => 'Id Scope',
			'scope' => 'Scope',
			'detail' => 'Detail',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_scope',$this->id_scope);
		$criteria->compare('scope',$this->scope,true);
		$criteria->compare('detail',$this->detail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}