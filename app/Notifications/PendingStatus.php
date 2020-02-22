<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PendingStatus extends Notification
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
    protected $ReservationDate;
    protected $name;
    public function __construct($venue, $date, $month, $year,$day,$name,$ReservationDate)
    {
        //
        $this->name=$name;
        $this->venue = $venue;
           $this->date=$date;
            $this->month=$month;
             $this->year=$year;
              $this->day=$day;
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
                    ->line('The Venue <strong>'. ($this->venue).'</strong> which was already approved for you for <strong>'.($this->date). '/'.($this->month).'/'. ($this->year).'</strong> has been reversed to pending status.')
                    ->line('For any inquiries please contact the Timetable Master.')
                    ->line(' ')
                    ->line(' To view your reservations click the button below.')
                    
                    ->action('My reservations', url('http://127.0.0.1:8000/myreservations'))
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
