<?php

namespace App\Utils;

class MailStructure
{

    private string $destinataire;
    private string $objet;
    private string $message;
    private ?string $bcc;
    private ?string $cc;

    function __construct(string $destinataire, string $objet, string $message, $bcc = null, $cc = null)
    {
        $this->destinataire = $destinataire;
        $this->objet = $objet;
        $this->message = $message;
        $this->bcc = $bcc;
        $this->cc = $cc;
    }

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(string $destinataire)
    {
        $this->destinataire = $destinataire;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet)
    {
        $this->objet = $objet;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function getBcc(): ?string
    {
        return $this->bcc;
    }

    public function setBcc(string $bcc)
    {
        $this->bcc = $bcc;
    }

    public function getCc(): ?string
    {
        return $this->cc;
    }

    public function setCc(string $cc)
    {
        $this->cc = $cc;
    }
}
