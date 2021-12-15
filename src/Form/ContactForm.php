<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // le builder enverra les infos du formulaire à la classe du Repo
        $builder
            ->add('name')
            ->add('firstname')
            ->add('news')
            ->add('message')
            ->add('Envoyer', SubmitType::class)
        ;
    }
    // on instantie une nouvelle classe car de base le return est null
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
