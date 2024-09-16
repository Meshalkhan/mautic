<?php

namespace MauticPlugin\MauticRandomSmtpBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SmtpPreviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('smtp', TextType::class, [
                'label' => 'SMTP Settings',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter SMTP settings',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr'  => [
                    'class' => 'form-control',
                    'rows'  => 5,
                    'placeholder' => 'Enter the message',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Preview SMTP',
                'attr'  => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,  // Update if binding to a data class
            'translation_domain' => 'MauticRandomSmtpBundle',  // Enable translation for labels
        ]);
    }
}
