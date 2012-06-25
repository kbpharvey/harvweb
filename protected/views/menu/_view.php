<div class="view">
<table>
<tr>
<?php 
?>
<td><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
</td>
<td><?php echo CHtml::encode($data->getAttributeLabel('URL')); ?>:</b>
	<?php echo CHtml::encode($data->URL); ?>
</td>
</tr>
</table>


	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('URL')); ?>:</b>
	<?php echo CHtml::encode($data->URL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image')); ?>:</b>
	<?php echo CHtml::encode($data->Image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Section')); ?>:</b>
	<?php echo CHtml::encode($data->Section); ?>
	<br />


</div>