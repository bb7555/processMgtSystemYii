<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'custom_url'); ?>
		<?php echo $form->textArea($model,'custom_url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'custom_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textArea($model,'img',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_status'); ?>
		<?php echo $form->textField($model,'product_status'); ?>
		<?php echo $form->error($model,'product_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ad_status'); ?>
		<?php echo $form->textField($model,'ad_status'); ?>
		<?php echo $form->error($model,'ad_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maint_status'); ?>
		<?php echo $form->textField($model,'maint_status'); ?>
		<?php echo $form->error($model,'maint_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_size'); ?>
		<?php echo $form->textField($model,'img_size'); ?>
		<?php echo $form->error($model,'img_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_needed'); ?>
		<?php echo $form->textField($model,'img_needed'); ?>
		<?php echo $form->error($model,'img_needed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_comment'); ?>
		<?php echo $form->textArea($model,'img_comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img_comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_second_needed'); ?>
		<?php echo $form->textField($model,'img_second_needed'); ?>
		<?php echo $form->error($model,'img_second_needed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_second_comment'); ?>
		<?php echo $form->textArea($model,'img_second_comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img_second_comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_metas'); ?>
		<?php echo $form->textField($model,'seo_metas'); ?>
		<?php echo $form->error($model,'seo_metas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prod_search_metas'); ?>
		<?php echo $form->textField($model,'prod_search_metas'); ?>
		<?php echo $form->error($model,'prod_search_metas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebook_metas'); ?>
		<?php echo $form->textField($model,'facebook_metas'); ?>
		<?php echo $form->error($model,'facebook_metas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retail_price'); ?>
		<?php echo $form->textField($model,'retail_price'); ?>
		<?php echo $form->error($model,'retail_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base_prace'); ?>
		<?php echo $form->textField($model,'base_prace'); ?>
		<?php echo $form->error($model,'base_prace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prod_match_img'); ?>
		<?php echo $form->textField($model,'prod_match_img'); ?>
		<?php echo $form->error($model,'prod_match_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_set'); ?>
		<?php echo $form->textField($model,'url_set'); ?>
		<?php echo $form->error($model,'url_set'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->