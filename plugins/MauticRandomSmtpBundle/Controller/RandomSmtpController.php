<?php

namespace MauticPlugin\MauticRandomSmtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use MauticPlugin\MauticRandomSmtpBundle\Form\Type\SmtpPreviewType;
use MauticPlugin\MauticRandomSmtpBundle\Randomizer\SmtpRandomizer;

class RandomSmtpController extends AbstractController
{
    private $smtpRandomizer;

    public function __construct(SmtpRandomizer $smtpRandomizer)
    {
        $this->smtpRandomizer = $smtpRandomizer;
    }

    public function previewAction(Request $request): Response
    {
        // Create the form using the form type
        $form = $this->createForm('smtp_preview_type');

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

        // Render the template with the form
        return $this->render('@MauticRandomSmtp/RandomSmtp/preview.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
