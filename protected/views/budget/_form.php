<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'budget-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
		<?php echo $form->error($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Concept'); ?>
		<?php echo $form->textField($model,'Concept',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Concept'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Category'); ?>
		<?php echo $form->textField($model,'Category',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Account'); ?>
		<?php echo $form->textField($model,'Account',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tags'); ?>
		<?php echo $form->textField($model,'Tags',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Amount'); ?>
		<?php echo $form->textField($model,'Amount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->