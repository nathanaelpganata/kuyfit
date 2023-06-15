<?php

namespace App\Http\Applications;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use function config;

class StatusPesananMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $reason;
    private string $name;
    private bool $isConfirmed;

    /**
     * @param string $reason
     * @param string $name
     * @param bool $isConfirmed
     */
    public function __construct(string $reason, string $name, bool $isConfirmed)
    {
        $this->reason = $reason;
        $this->name = $name;
        $this->isConfirmed = $isConfirmed;
    }

    public function build(): StatusPesananMail
    {
        return $this->from(config('mail.from'))
            ->markdown('emails.statuspesanan', [
                "name" => $this->name,
                "reason" => $this->reason,
                "isConfirmed" => $this->isConfirmed,
                "app_url" => config('app.url'),
            ]);
    }
}
