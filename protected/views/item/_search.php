<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'custom_url'); ?>
		<?php echo $form->textArea($model,'custom_url',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img'); ?>
		<?php echo $form->textArea($model,'img',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_status'); ?>
		<?php echo $form->textField($model,'product_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ad_status'); ?>
		<?php echo $form->textField($model,'ad_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maint_status'); ?>
		<?php echo $form->textField($model,'maint_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_size'); ?>
		<?php echo $form->textField($model,'img_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_needed'); ?>
		<?php echo $form->textField($model,'img_needed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_comment'); ?>
		<?php echo $form->textArea($model,'img_comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_second_needed'); ?>
		<?php echo $form->textField($model,'img_second_needed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_second_comment'); ?>
		<?php echo $form->textArea($model,'img_second_comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_metas'); ?>
		<?php echo $form->textField($model,'seo_metas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prod_search_metas'); ?>
		<?php echo $form->textField($model,'prod_search_metas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facebook_metas'); ?>
		<?php echo $form->textField($model,'facebook_metas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retail_price'); ?>
		<?php echo $form->textField($model,'retail_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base_prace'); ?>
		<?php echo $form->textField($model,'base_prace'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prod_match_img'); ?>
		<?php echo $form->textField($model,'prod_match_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_set'); ?>
		<?php echo $form->textField($model,'url_set'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->