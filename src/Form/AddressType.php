<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Address;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address1', TextType::class, [
                'label' => 'Rue'
            ])
            ->add('address2', TextType::class, [
                'required' => false,
                'label' => 'Complément',
                'attr' => [ 'placeholder' => 'appartement, étage, escalier, etc.']
            ])
            ->add('postCode', TextType::class, [
                'label' => 'Code postal'
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville'
            ])
            ->add('phone', TextType::class, [
                'required' => false,
                'label' => 'Téléphone'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class
        ]);
    }
}