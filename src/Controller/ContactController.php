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
        //createForm() crée une instance de la classe ContactType pour générer le formulaire
        $form = $this->createForm(ContactType::class);
        //handleRequest() gère le traitement des données saisies dans le formulaire avec la super globale $_POST
        $form->handleRequest($request);

        //si le formulaire est rempli ET si les règles de validations sont ok
        if($form->isSubmitted() && $form->isValid()) {
            //On récupère les données saisies dans le formulaire grâce à getData()
            $contactFormData = $form->getData();

            //$email = objet qui contient les informations du mail
            $email = (new Email())
                ->from($contactFormData['email']) //auteur
                ->to('marie.favre.rochex@gmail.com') //destinataire
                ->subject('nouveau message') //sujet
                    //message - \PHP_EOL = retour à la ligne - text/plain fichier texte par défaut
                    //lisible par toutes les messageries
                ->text('Auteur:' .$contactFormData['email'].\PHP_EOL.
                    $contactFormData['message'],
                    'text/plain'
                );

            //Si condition respectée on exécute l'envoi
            $mailer->send($email);

            //Un message indique à l'utilisateur si l'envoi est réussi
            $this->addFlash('success', 'Message envoyé, vous allez être redirigé sur la page d\'accueil');

            //Un message indique à l'utilisateur si l'envoi échoue
            $this->addFlash('danger', 'Impossible d\'envoyer le message, veuillez réessayer');

            //redirection sur la page Lutherie
            return $this->redirectToRoute('app_lutherie');
        }

        return $this->render('contact/contact.html.twig', [
            'titreSite' => 'Lutherie d\'Oc',
            'titrePage' => 'Contactez Nicolas',
            'form' => $form->createView(),
        ]);
    }

}
