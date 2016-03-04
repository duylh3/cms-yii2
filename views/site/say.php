<?php
use yii\helpers\Html;
use yii\bootstrap\Dropdown;
use kartik\date\DatePicker;
use kartik\widgets\FileInput;
?>
<div class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Label <b class="caret"></b></a>
    <?php
        echo Dropdown::widget([
            'items' => [
                ['label' => 'DropdownA', 'url' => '/'],
                ['label' => 'DropdownB', 'url' => '#'],
            ],
        ]);
    ?>
</div>
<?php
echo 'Birth Date';
echo DatePicker::widget([
    'name' => 'dp_1',
    'type' => DatePicker::TYPE_INPUT,
    'value' => '23-Feb-1982',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd-M-yyyy'
    ]
]);

echo '<label class="control-label">Upload Document</label>';
echo FileInput::widget([
    'name' => 'attachment_3',
]);