<?php

/**
 * This is the model class for table "budget".
 *
 * The followings are the available columns in table 'budget':
 * @property integer $id
 * @property string $Date
 * @property string $Concept
 * @property string $Category
 * @property string $Account
 * @property string $Tags
 * @property string $Amount
 */
class Budget extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Budget the static model class
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
		return 'budget';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Date, Concept, Category, Account, Tags, Amount', 'required'),
			array('Concept, Category, Account', 'length', 'max'=>100),
			array('Tags', 'length', 'max'=>200),
			array('Amount', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Date, Concept, Category, Account, Tags, Amount', 'safe', 'on'=>'search'),
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
			'Date' => 'Date',
			'Concept' => 'Concept',
			'Category' => 'Category',
			'Account' => 'Account',
			'Tags' => 'Tags',
			'Amount' => 'Amount',
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
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('Concept',$this->Concept,true);
		$criteria->compare('Category',$this->Category,true);
		$criteria->compare('Account',$this->Account,true);
		$criteria->compare('Tags',$this->Tags,true);
		$criteria->compare('Amount',$this->Amount,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}