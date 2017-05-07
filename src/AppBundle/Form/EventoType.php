<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, [
                'label' => 'Nome do Evento',
                'attr' => [
                    'class' => 'col-sm-12'
                ]
            ])
            ->add('texto', TextareaType::class, [
                'label' => 'Faça uma descrição detalhada do evento',
                'attr' => [
                    'class' => 'col-sm-12',
                    'overflow'  => 'auto',
                    'rows'  => '10',
                ]
            ])
            ->add('cidade', TextType::class, [
                'label' => 'Cidade do Evento',
                'attr' => [
                    'class' => 'col-sm-12'
                ]
            ])
            ->add('estado', ChoiceType::class, [
                'choices' => [
                    'Acre'=>'AC',
                    'Alagoas'=>'AL',
                    'Amapá'=>'AP',
                    'Amazonas'=>'AM',
                    'Bahia'=>'BA',
                    'Ceará'=>'CE',
                    'Distrito Federal'=>'DF',
                    'Espírito Santo'=>'ES',
                    'Goiás'=>'GO',
                    'Maranhão'=>'MA',
                    'Mato Grosso'=>'MT',
                    'Mato Grosso do Sul'=>'MS',
                    'Minas Gerais'=>'MG',
                    'Pará'=>'PA',
                    'Paraíba'=>'PB',
                    'Paraná'=>'PR',
                    'Pernambuco'=>'PE',
                    'Piauí'=>'PI',
                    'Rio de Janeiro'=>'RJ',
                    'Rio Grande do Norte'=>'RN',
                    'Rio Grande do Sul'=>'RS',
                    'Rondônia'=>'RO',
                    'Roraima'=>'RR',
                    'Santa Catarina'=>'SC',
                    'São Paulo'=>'SP',
                    'Sergipe'=>'SE',
                    'Tocantins'=>'TO'
                ],
                'attr' => [
                    'class' => 'col-sm-12'
                ]
            ])
            ->add('dataInicio', DateTimeType::class, [])
            ->add('dataFim', DateTimeType::class, [])
            ->add('logo', FileType::class, [])
            ->add('picto', FileType::class, [])
            ->add('imagem', FileType::class, [])
            ->add('url', UrlType::class, [
                'label' => 'Site do evento',
                'attr' => [
                    'class' => 'col-sm-12'
                ]
            ])
            ->add('destacado', CheckboxType::class, [])
            ->add('noBrasil', CheckboxType::class, [])
            ->add('publicar', CheckboxType::class, [])
            ->add('submit', SubmitType::class, [
                'label' => 'Enviar Evento',
                'attr' => [
                    'class' => 'btn'
                ]
            ])
            ->getForm();
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Evento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_evento';
    }


}
