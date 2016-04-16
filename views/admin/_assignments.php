<?php

/*
 * This file is part of the Dektrium project
 *
 * (c) Dektrium project <http://github.com/hornetalcala>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use hornetalcala\rbac\widgets\Assignments;

/**
 * @var yii\web\View 				$this
 * @var hornetalcala\user\models\User 	$user
 */

?>

<?php $this->beginContent('@hornetalcala/user/views/admin/update.php', ['user' => $user]) ?>

<?= yii\bootstrap\Alert::widget([
    'options' => [
        'class' => 'alert-info',
    ],
    'body' => Yii::t('user', 'You can assign multiple roles or permissions to user by using the form below'),
]) ?>

<?= Assignments::widget(['userId' => $user->id]) ?>

<?php $this->endContent() ?>
