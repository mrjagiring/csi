<?php

/**
 * This is the model class for table "{{wo}}".
 *
 * The followings are the available columns in table '{{wo}}':
 * @property integer $id
 * @property integer $client_id
 * @property string $letter_no
 * @property string $vessel
 * @property string $object
 * @property string $description
 * @property string $attending
 * @property string $loading
 * @property string $destination
 * @property integer $qty
 * @property integer $status
 * @property string $create_at
 */
class Wo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Wo the static model class
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
		return '{{wo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_id, letter_no, vessel, object, description, attending, loading, destination, qty, create_at', 'required'),
			array('client_id, qty, status', 'numerical', 'integerOnly'=>true),
			array('letter_no, destination', 'length', 'max'=>50),
			array('vessel', 'length', 'max'=>100),
			array('object', 'length', 'max'=>200),
			array('loading', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, client_id, letter_no, vessel, object, description, attending, loading, destination, qty, status, create_at', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'client_id' => 'Client',
			'letter_no' => 'Letter No',
			'vessel' => 'Vessel',
			'object' => 'Object',
			'description' => 'Description',
			'attending' => 'Attending',
			'loading' => 'Loading',
			'destination' => 'Destination',
			'qty' => 'Qty',
			'status' => 'Status',
			'create_at' => 'Create At',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('client_id',$this->client_id);
		$criteria->compare('letter_no',$this->letter_no,true);
		$criteria->compare('vessel',$this->vessel,true);
		$criteria->compare('object',$this->object,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('attending',$this->attending,true);
		$criteria->compare('loading',$this->loading,true);
		$criteria->compare('destination',$this->destination,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_at',$this->create_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}