<?php

namespace MauticPlugin\RandomSmtpBundle\Service;

class RandomSmtpService
{
    private $smtpConfigs;

    public function __construct()
    {
        $this->smtpConfigs = [
            [
                'host' => getenv('SMTP_HOST1'),
                'port' => getenv('SMTP_PORT1'),
                'encryption' => getenv('SMTP_ENCRYPTION1'),
                'username' => getenv('SMTP_USERNAME1'),
                'password' => getenv('SMTP_PASSWORD1'),
            ],
            [
                'host' => getenv('SMTP_HOST2'),
                'port' => getenv('SMTP_PORT2'),
                'encryption' => getenv('SMTP_ENCRYPTION2'),
                'username' => getenv('SMTP_USERNAME2'),
                'password' => getenv('SMTP_PASSWORD2'),
            ],
            // Add more SMTP configurations as needed
        ];
    }

    public function getSmtpConfigs(): array
    {
        return $this->smtpConfigs;
    }

    public function getRandomSmtpConfig(): ?array
    {
        if (empty($this->smtpConfigs)) {
            return null;
        }

        $randomIndex = array_rand($this->smtpConfigs);
        return $this->smtpConfigs[$randomIndex];
    }

    public function setRandomSmtp(string $selectedSmtpId): bool
    {
        foreach ($this->smtpConfigs as $config) {
            if ($config['id'] === $selectedSmtpId) {
                $this->applySmtpConfig($config);
                return true;
            }
        }

        return false;
    }

    private function applySmtpConfig(array $config): void
    {
        // Implement the logic to update Mautic's email settings
        $this->updateMauticEmailSettings($config);

        // Log the change for debugging
        error_log("Applied SMTP Configuration: " . print_r($config, true));
    }

    private function updateMauticEmailSettings(array $config): void
    {
        // Modify this method based on your approach (configuration file or API)
        // Example for updating via configuration file:
        $configFile = __DIR__ . '/../../../../../app/config/local.php'; // Adjust the path as needed

        if (!file_exists($configFile)) {
            throw new \RuntimeException('Configuration file not found.');
        }

        $settings = include $configFile;

        // Update the SMTP settings
        $settings['mailer_transport'] = $config['encryption'];
        $settings['mailer_host'] = $config['host'];
        $settings['mailer_port'] = $config['port'];
        $settings['mailer_user'] = $config['username'];
        $settings['mailer_password'] = $config['password'];

        // Write the updated settings back to the file
        file_put_contents($configFile, '<?php return ' . var_export($settings, true) . ';');
    }
}
