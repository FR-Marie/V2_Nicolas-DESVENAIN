<?php

namespace App\Controller;


use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     * @param Request $request
     * @param MailerInterface $mailer
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function formulaireDeContact(Request $request, MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $email = (new Email())
                ->from($contactFormData['email'])
                ->to('marie.favre.rochex@gmail.com')
                ->subject('new test mail')
                ->text('Auteur:' .$contactFormData['email'].\PHP_EOL.
                    $contactFormData['message'],
                    'text/plain'
                );

            $mailer->send($email);

            //echo "ça marche";
            //$this->addFlash('success', 'Message envoyé');


            return $this->redirectToRoute('app_lutherie');
        }

        return $this->render('contact/contact.html.twig', [
            'titreSite' => 'Lutherie d\'Oc',
            'titrePage' => 'Contact',
            'form' => $form->createView()
        ]);
    }

}
