<?php

namespace App\Service;

use App\Utils\MailStructure;
use Doctrine\ORM\Query\Expr\From;
use Symfony\Component\Mime\Email;

class MailService
{


    public function sendEmail(MailStructure $mailStructure): Email
    {
        $email = new Email();
        $email->from('no-response@blog4u.fr')
            ->to($mailStructure->getDestinataire())
            ->subject($mailStructure->getObjet())
            ->html($mailStructure->getMessage());

        if (!is_null($mailStructure->getCc())) {
            $email->cc($mailStructure->getCc());
        }

        if (!is_null($mailStructure->getBcc())) {
            $email->bcc($mailStructure->getBcc());
        }

        return $email;
    }
}
