<?php

namespace MauticPlugin\MauticRandomSmtpBundle\Controller;

use Mautic\CoreBundle\Controller\FormController;
use Symfony\Component\HttpFoundation\Request;
use MauticPlugin\MauticRandomSmtpBundle\Form\Type\SmtpPreviewType;
use MauticPlugin\MauticRandomSmtpBundle\Randomizer\SmtpRandomizer;
use Symfony\Component\HttpFoundation\Response;

class RandomSmtpController extends FormController
{
    private $smtpRandomizer;

    public function __construct(SmtpRandomizer $smtpRandomizer)
    {
        $this->smtpRandomizer = $smtpRandomizer;
    }

    public function previewAction(Request $request): Response
    {
        // Create the form using the service container
        $form = $this->createForm(SmtpPreviewType::class);

        // Handle form submission
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get form data
            $data = $form->getData();

            try {
                // Use the randomizer to check/preview SMTP settings
                $this->smtpRandomizer->randomize($data['smtp'], $data['message']);
                $this->addFlash('success', 'SMTP preview successful!');
            } catch (\Exception $e) {
                // If an error occurs, add error message to flash
                $this->addFlash('error', $e->getMessage());
            }
        }

        // Delegate the view to the template
        return $this->delegateView([
            'viewParameters' => [
                'form' => $form->createView(),
            ],
            'contentTemplate' => 'MauticRandomSmtpBundle:RandomSmtp:preview.html.twig',
        ]);
    }
}
