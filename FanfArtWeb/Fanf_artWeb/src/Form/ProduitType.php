<?php

namespace App\Form;

use App\Entity\Produit;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('image', FileType::class, array('label' => 'Image(JPG)', 'data_class'=>null))
            ->add('nomProd')
            ->add('prixProd')
            ->add('descriptionProd')
            ->add('quantiteProd')
            ->add('categorie',EntityType::class,['class' =>'App\Entity\CategorieProduit',
                'choice_label' =>'nomCat',
                'multiple' => false,
            ])
            ->add('userId');

    }
    /**
    * {@inheritdoc}
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionproduit_produit';
    }
}
