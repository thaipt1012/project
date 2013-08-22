<script src='<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-datetimepicker.min.js'></script>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap-datetimepicker.min.css'); ?>
<script type="text/javascript">
    $(function() {
        $('.datetimepicker4').datetimepicker({
            pickTime: false
        });
    });
</script>

<h1> Update Information </h1>
<hr>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'update-user',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
    ));
    
    ?>
    <div class="row">
        <div class="span3">Name:</div>
        <?php
        echo $form->textField($user, 'name', array(
            'class' => 'text input span4',
        ));
        ?>
    </div>
    <div class="row">
        <div class="span3">Birth day:</div>
        <div class="datetimepicker4 " class="input-append span7">
            <input class="span4" data-format="yyyy-MM-dd" value ="<?php echo $user->birthday; ?>" type="text" name="User[birthday]" placeholder = 'dd-MM-yyyy'></input>
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
        </div>
    </div>  
    <div class="row">
        <div class="span3">Gender:</div>
        <?php
        echo $form->textField($user, 'gender', array(
            'class' => 'text input span4',
        ));
        ?>
    </div>
    <div class="row">
        <div class="span3">Address:</div>
        <?php
        echo $form->textField($user, 'address', array(
            'class' => 'text input span4',
        ));
        ?>
    </div>
     <?php
        echo CHtml::submitButton('Update Now', array(
            'class' => 'btn btn-info'));
        echo '&nbsp;&nbsp;';
        echo CHtml::button('Cancel', array(
            'class' => 'btn btn-warning',
            'submit' => array(
                'user/index',
            ))
        );
     ?>
    
    <?php $this->endWidget(); ?>   
</div>