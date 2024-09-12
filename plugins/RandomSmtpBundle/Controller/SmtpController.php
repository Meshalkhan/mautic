<?php

namespace MauticPlugin\RandomSmtpBundle\Controller;

use MauticPlugin\RandomSmtpBundle\Service\RandomSmtpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SmtpController extends AbstractController
{
    private $smtpService;

    public function __construct(RandomSmtpService  $smtpService)
    {
        $this->smtpService = $smtpService;
    }

    public function indexAction(Request $request): Response
    {
        $smtpConfigs = $this->smtpService->getSmtpConfigs();

        if ($request->isMethod('POST')) {
            $selectedSmtpId = $request->request->get('smtp');
            if ($this->smtpService->setRandomSmtp($selectedSmtpId)) {
                $this->addFlash('success', 'SMTP configuration updated successfully.');
            } else {
                $this->addFlash('error', 'Failed to update SMTP configuration.');
            }
            return $this->redirectToRoute('plugin_randomsmtp_index');
        }

        return $this->delegateView([
            'viewParameters' => [
                'smtpConfigs' => $smtpConfigs,
                'randomSmtp' => $this->smtpService->getRandomSmtpConfig(),
            ],
            'contentTemplate' => 'RandomSmtpBundle:Smtp:index.html.php',
        ]);
    }
    protected function getModelName(): string
    {
        // This should return the model name relevant to your plugin.
        return 'MauticPlugin\RandomSmtpBundle\Model\RandomSmtpModel';
    }
}
