<?php

use humhub\modules\mail\assets\MailMessengerAsset;
use humhub\modules\mail\assets\MailNotificationAsset;
use humhub\modules\mail\permissions\StartConversation;
use humhub\modules\mail\widgets\NewMessageButton;
use humhub\modules\mail\helpers\Url;

/* @var $this \humhub\modules\ui\view\components\View */

MailNotificationAsset::register($this);

$canStartConversation = Yii::$app->user->can(StartConversation::class);
?>

<li class="item">
    <a href="<?= Url::to(['/mail/mail']); ?>">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.0714 18.0699C15.0152 21.1263 10.4898 21.7867 6.78642 20.074C6.23971 19.8539 5.79148 19.676 5.36537 19.676C4.17849 19.683 2.70117 20.8339 1.93336 20.067C1.16555 19.2991 2.31726 17.8206 2.31726 16.6266C2.31726 16.2004 2.14642 15.7602 1.92632 15.2124C0.212831 11.5096 0.874109 6.98269 3.93026 3.92721C7.8316 0.0244319 14.17 0.0244322 18.0714 3.9262C21.9797 7.83501 21.9727 14.1681 18.0714 18.0699Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.9393 11.4131H14.9483" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9304 11.4131H10.9394" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.9214 11.4131H6.9304" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="name">
            <?= Yii::t('custom', 'Чаты'); ?>
            <span class="label label-danger label-notification" id="badge-messages" style="display:none;"></span>
        </div>
    </a>
</li>

