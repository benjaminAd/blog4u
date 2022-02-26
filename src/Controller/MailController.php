<?php

namespace App\Controller;

use App\Service\MailService;
use App\Utils\MailStructure;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends AbstractController
{

    #[Route('/mail', name: 'mail')]
    public function index(MailerInterface $mailerInterface, MailService $mailService): Response
    {
        $mailerInterface->send($mailService->sendEmail(new MailStructure('test@test.com', 'Mail de Bienvenue Sur Blog4u', '<h1>Bienvenue sur Blog4u</h1> <br/> <p>Nous espérons que vous prendrez du plaisir sur ce blog nouvelle génération.</p>')));

        return $this->render('mail/index.html.twig', [
            'controller_name' => 'MailController',
        ]);
    }
}
