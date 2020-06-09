<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrcamentoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orcamento)
    {
        $this->orcamento = $orcamento;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $orcamento = $this->orcamento;
        return $this->view('mail.mailOrcamento', compact('orcamento'))->subject('Segue a cópia do seu orçamento')->replyTo('contatos@telhasimperio.com');
    }
}
