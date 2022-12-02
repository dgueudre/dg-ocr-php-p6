<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private MailerInterface $mailer,
    ) {
    }

    #[Route('/', name: 'app_home')]
    public function home()
    {
        return $this->render('home.html.twig');
    }

    #[Route('/sendmail', name: 'app_sendmail')]
    public function sendmail()
    {
        $email = (new Email())
        ->from('hello@example.com')
        ->to('you@example.com')
        // ->cc('cc@example.com')
        // ->bcc('bcc@example.com')
        // ->replyTo('fabien@example.com')
        // ->priority(Email::PRIORITY_HIGH)
        ->subject('Time for Symfony Mailer!')
        ->text('Sending emails is fun again!')
        ->html('<p>See Twig integration for better HTML integration!</p>');
        $this->mailer->send($email);

        $this->addFlash('success', 'email envoyé');

        return $this->render('home.html.twig');
    }
}
