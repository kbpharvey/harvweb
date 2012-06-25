<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'URL'); ?>
		<?php echo $form->textField($model,'URL',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'URL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image'); ?>
		<?php echo $form->textField($model,'Image',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Section'); ?>
		<?php echo $form->textField($model,'Section',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Section'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->