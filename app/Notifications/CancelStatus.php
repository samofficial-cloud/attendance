<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CancelStatus extends Notification
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
    protected $address;
    protected $name;

    public function __construct( $venue, $date, $month, $year,$day,$time,$address,$name)
    {
        //
        $this->venue = $venue;
           $this->date=$date;
            $this->month=$month;
             $this->year=$year;
              $this->day=$day;
              $this->time=$time;
              $this->time=$address;
              $this->time=$name;


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
                    ->line(($this->name).'has cancelled the reservation made for venue <strong>'. ($this->venue).'</strong> which you approved for date <strong>'.($this->date). '/'.($this->month).'/'. ($this->year).'</strong> and time <strong>'.($this->time). '</strong>.')
                    ->line(' ')
                    ->line(' To view reservations click the button below')
                    
                    ->action('My reservations', url('http://127.0.0.1:8000/approval'))
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
