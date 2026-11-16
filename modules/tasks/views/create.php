<h1><?= $headline ?></h1>
<?= validation_errors() ?>
<div class="card">
    <div class="card-heading">
        Task Details
    </div>
    <div class="card-body">
        <?php
        echo form_open($form_location);

        echo form_label('Task Title');
        $task_title_attr = [
            'placeholder' => 'Enter Task Title',
            'required'  => true,
            'minlength' => 2,
            'maxlength' => 255
        ];
        echo form_input('task_title', $task_title, $task_title_attr);

        echo '<label>';
        echo form_checkbox('complete', 1, $complete);
        echo ' Complete';
        echo '</label>';

        echo '<div class="text-center">';
        echo anchor($cancel_url, 'Cancel', ['class' => 'button alt']);
        echo form_submit('submit', 'Submit');
        echo '</div>';
        
        echo form_close();
        ?>
    </div>
</div>
