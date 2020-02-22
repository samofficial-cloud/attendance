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
    protected $ReservationDate;
    protected $name;
    public function __construct( $venue, $date, $month, $year,$day,$time,$Reason,$name,$ReservationDate)
    {
        //
        $this->name = $name;
        $this->venue = $venue;
           $this->date=$date;
            $this->month=$month;
             $this->year=$year;
              $this->day=$day;
              $this->time=$time;
              $this->Reason=$Reason;
              $this->ReservationDate=$ReservationDate;


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
                    ->greeting('Greetings '.($this->name).',')
                    ->subject('VENUE_RESERVATION')
                    ->line('The reservation <strong>'. ($this->venue).'</strong> you made on'.($this->ReservationDate).' for date <strong>'.($this->date). '/'.($this->month).'/'. ($this->year).'</strong> and time <strong>'.($this->time).'</strong> has been declined due to the following reason(s):')
                    ->line('<strong>'.($this->Reason).'</strong>')
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
