<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/CoreBundle/Model/AuditLogModel.php */
class __TwigTemplate_881f7c8f30d2068afbe64485d79e3aba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

namespace Mautic\\CoreBundle\\Model;

use Mautic\\CoreBundle\\Entity\\AuditLog;
use Mautic\\UserBundle\\Entity\\User;

/**
 * @extends AbstractCommonModel<AuditLog>
 */
class AuditLogModel extends AbstractCommonModel
{
    /**
     * @return \\Mautic\\CoreBundle\\Entity\\AuditLogRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository(AuditLog::class);
    }

    /**
     * Writes an entry to the audit log.
     *
     * @param array \$args [bundle, object, objectId, action, details, ipAddress]
     */
    public function writeToLog(array \$args): void
    {
        \$bundle    = \$args['bundle'] ?? '';
        \$object    = \$args['object'] ?? '';
        \$objectId  = \$args['objectId'] ?? '';
        \$action    = \$args['action'] ?? '';
        \$details   = \$args['details'] ?? '';
        \$ipAddress = isset(\$args['ipAddress']) ? (\$this->coreParametersHelper->get('anonymize_ip') ? '*.*.*.*' : \$args['ipAddress']) : '';
        \$log       = new AuditLog();
        \$log->setBundle(\$bundle);
        \$log->setObject(\$object);
        \$log->setObjectId(\$objectId);
        \$log->setAction(\$action);
        \$log->setDetails(\$details);
        \$log->setIpAddress(\$ipAddress);
        \$log->setDateAdded(new \\DateTime());

        \$user     = (!defined('MAUTIC_IGNORE_AUDITLOG_USER') && !defined('MAUTIC_AUDITLOG_USER')) ? \$this->userHelper->getUser() : null;
        \$userId   = 0;
        \$userName = defined('MAUTIC_AUDITLOG_USER') ? MAUTIC_AUDITLOG_USER : \$this->translator->trans('mautic.core.system');
        if (\$user instanceof User && \$user->getId()) {
            \$userId   = \$user->getId();
            \$userName = \$user->getName();
        }
        \$log->setUserId(\$userId);
        \$log->setUserName(\$userName);

        \$this->em->getRepository(AuditLog::class)->saveEntity(\$log);

        \$this->em->detach(\$log);
    }

    /**
     * Get the audit log for specific object.
     *
     * @param string|null             \$object
     * @param string|int              \$id
     * @param \\DateTimeInterface|null \$afterDate
     * @param int                     \$limit
     * @param string|null             \$bundle
     *
     * @return mixed
     */
    public function getLogForObject(\$object, \$id, \$afterDate = null, \$limit = 10, \$bundle = null)
    {
        return \$this->getRepository()->getLogForObject(\$object, \$id, \$limit, \$afterDate, \$bundle);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Model/AuditLogModel.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Model/AuditLogModel.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Model\\AuditLogModel.php");
    }
}
