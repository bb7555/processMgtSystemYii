<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Item', 'url'=>array('index')),
	array('label'=>'Create Item', 'url'=>array('create')),
	array('label'=>'Update Item', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Item', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Item', 'url'=>array('admin')),
);
?>

<h1>View Item #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'name',
		'url',
		'custom_url',
		'img',
		'product_status',
		'ad_status',
		'maint_status',
		'img_size',
		'img_needed',
		'img_comment',
		'img_second_needed',
		'img_second_comment',
		'seo_metas',
		'prod_search_metas',
		'cat_search_metas',
		'facebook_metas',
		'retail_price',
		'base_prace',
		'prod_match_img',
		'url_set',
	),
)); ?>
