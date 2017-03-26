<?php

namespace Confee\Domains\Users\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as LaravelResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends LaravelResetPassword
{
    protected $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset Password', $this->link)
            ->line('If you did not request a password reset, no further action is required.');
    }
}