<?php $this->pageTitle=Yii::app()->name;
$a = getenv('REMOTE_ADDR');
//print_r ($a);
if ($a = '127.0.0.1')
{
//	echo 'Local';
	$test = 'L';
}
else 
{
//	echo 'Server';
	$test = 'S';
}

?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>


<?php
//sample link
echo CHtml::link("Menu",array('menu/'))

//sample dropdownlist


/*
 echo CHtml::dropDownList($name, $select, $data, $htmlOptions);
    $name = 'harv';//name that will be used in $_POST when form is send
    $select = string with selected value
    $data = content - interesting think, see bellow
    $htmlOptions  = array('width'=>'100','style'='color:red;');//classical array of attributes
 */

//sample data array    
//$data = CHtml::listData( Model::model()->findAll(),'id_item','item_descr' )
?>


