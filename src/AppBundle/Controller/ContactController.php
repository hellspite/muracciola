<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;

class ContactController extends Controller
{
    /**
     * @Route("/contatti", name="contacts")
     */
    public function contactAction(Request $request)
    {
        $address = $this->getParameter('delivery_address');

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $formView = $form->createView();


        $form->handleRequest($request);

        if($form->isValid()){
            $mailer = $this->get('mailer');
            $message = $mailer->createMessage()
                ->setSubject('Prenotazione tavolo')
                ->setFrom($contact->getEmail())
                ->setTo($address)
                ->setBody(
                    $this->renderView(
                        'contacts/email.html.twig', 
                        array(
                            'name' => $contact->getName(),
                            'phone' => $contact->getPhone(),
                            'people' => $contact->getPeople(),
                            'message' => $contact->getMessage()
                        )
                    ),               
                    'text/html'
                );

            $mailer->send($message);

            return $this->redirect($this->generateUrl('mail_sent'));


        }

        return $this->render('contacts/contacts.html.twig', array('form' => $formView));
    }

    /**
     * @Route("/messaggio-inviato", name="mail_sent")
     */
    public function sentAction()
    {
    
        return $this->render('contacts/sent.html.twig');
    }
}
