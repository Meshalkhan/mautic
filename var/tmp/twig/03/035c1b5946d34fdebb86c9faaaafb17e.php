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

/* @bundles/UserBundle/Controller/PublicController.php */
class __TwigTemplate_91fe51dd351dc9e0731b54bf521d1e6d extends Template
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

namespace Mautic\\UserBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\FormController;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Form\\Type\\PasswordResetConfirmType;
use Mautic\\UserBundle\\Form\\Type\\PasswordResetType;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\PasswordHasher\\Hasher\\UserPasswordHasherInterface;

class PublicController extends FormController
{
    /**
     * Generates a new password for the user and emails it to them.
     */
    public function passwordResetAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\RedirectResponse|\\Symfony\\Component\\HttpFoundation\\Response
    {
        /** @var UserModel \$model */
        \$model = \$this->getModel('user');

        \$data   = ['identifier' => ''];
        \$action = \$this->generateUrl('mautic_user_passwordreset');
        \$form   = \$this->formFactory->create(PasswordResetType::class, \$data, ['action' => \$action]);

        // /Check for a submitted form and process it
        if ('POST' === \$request->getMethod()) {
            if (\$isValid = \$this->isFormValid(\$form)) {
                // find the user
                \$data = \$form->getData();
                \$user = \$model->getRepository()->findByIdentifier(\$data['identifier']);

                try {
                    if (null !== \$user) {
                        \$model->sendResetEmail(\$user);
                    }
                    \$this->addFlashMessage('mautic.user.user.notice.passwordreset');
                } catch (\\Exception) {
                    \$this->addFlashMessage('mautic.user.user.notice.passwordreset.error', [], 'error');
                }

                return \$this->redirectToRoute('login');
            }
        }

        return \$this->delegateView([
            'viewParameters' => [
                'form' => \$form->createView(),
            ],
            'contentTemplate' => '@MauticUser/Security/reset.html.twig',
            'passthroughVars' => [
                'route' => \$action,
            ],
        ]);
    }

    public function passwordResetConfirmAction(Request \$request, UserPasswordHasherInterface \$hasher): mixed
    {
        /** @var UserModel \$model */
        \$model = \$this->getModel('user');

        \$data   = ['identifier' => '', 'password' => '', 'password_confirm' => ''];
        \$action = \$this->generateUrl('mautic_user_passwordresetconfirm');
        \$form   = \$this->formFactory->create(PasswordResetConfirmType::class, [], ['action' => \$action]);
        \$token  = \$request->query->get('token');

        if (\$token) {
            \$request->getSession()->set('resetToken', \$token);
        }

        // /Check for a submitted form and process it
        if ('POST' === \$request->getMethod()) {
            if (\$isValid = \$this->isFormValid(\$form)) {
                // find the user
                \$data = \$form->getData();
                /** @var User \$user */
                \$user = \$model->getRepository()->findByIdentifier(\$data['identifier']);

                if (null == \$user) {
                    \$this->addFlashMessage('mautic.user.user.notice.passwordreset.success');

                    return \$this->redirectToRoute('login');
                } else {
                    if (\$request->getSession()->has('resetToken')) {
                        \$resetToken = \$request->getSession()->get('resetToken');

                        if (\$model->confirmResetToken(\$user, \$resetToken)) {
                            \$encodedPassword = \$model->checkNewPassword(\$user, \$hasher, \$data['plainPassword']);
                            \$user->setPassword(\$encodedPassword);
                            \$model->saveEntity(\$user);

                            \$this->addFlashMessage('mautic.user.user.notice.passwordreset.success');

                            \$request->getSession()->remove('resetToken');

                            return \$this->redirectToRoute('login');
                        }

                        return \$this->delegateView([
                            'viewParameters' => [
                                'form' => \$form->createView(),
                            ],
                            'contentTemplate' => '@MauticUser/Security/resetconfirm.html.twig',
                            'passthroughVars' => [
                                'route' => \$action,
                            ],
                        ]);
                    } else {
                        \$this->addFlashMessage('mautic.user.user.notice.passwordreset.missingtoken');

                        return \$this->redirectToRoute('mautic_user_passwordresetconfirm');
                    }
                }
            }
        }

        return \$this->delegateView([
            'viewParameters' => [
                'form' => \$form->createView(),
            ],
            'contentTemplate' => '@MauticUser/Security/resetconfirm.html.twig',
            'passthroughVars' => [
                'route' => \$action,
            ],
        ]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Controller/PublicController.php";
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
        return new Source("", "@bundles/UserBundle/Controller/PublicController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Controller\\PublicController.php");
    }
}
