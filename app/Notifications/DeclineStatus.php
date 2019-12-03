<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DeclineStatus extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $venue;
    protected $date;
    protected $month;
    protected $year;
    protected $day;
    protected $time;
    public function __construct( $venue, $date, $month, $year,$day,$time)
    {
        //
        $this->venue = $venue;
           $this->date=$date;
            $this->month=$month;
             $this->year=$year;
              $this->day=$day;
              $this->time=$time;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('VENUE_RESERVATION')
                    ->line('The Venue <strong>'. ($this->venue).'</strong> you reserved for date <strong>'.($this->date). '/'.($this->month).'/'. ($this->year).'</strong> and time <strong>'.($this->time).'</strong> has been declined.')
                    ->line(' ')
                    ->line(' To make another reservations click the button below')
                    
                    ->action('Make Reservation', url('http://127.0.0.1:8000/venue'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
