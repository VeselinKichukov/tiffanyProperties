<?php

namespace App\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactsFormMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $address;
    protected $name;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($address, $name, $messageContent)
    {
        $this->address = $address;
        $this->name = $name;
        $this->messageContent = $messageContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "NEW message from TiffanyApart";

        Log::info(' the name is '.$this->name);
        Log::info(' email is '.$this->address);
        Log::info('message '.var_dump($this->messageContent));

        $data = ['address'=>$this->address,
                  'name'=>$this->name,
                  'messageContent'=>$this->messageContent];

        return $this
                ->subject($subject)
                ->view('emails.contact')->with($data);
        //
        // return $this->view('emails.contact')
        // ->from('no-reply@motiv8soft.com', 'Orhan')
        // ->subject($subject);
    }
}
