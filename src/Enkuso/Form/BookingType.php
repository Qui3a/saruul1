<?php
/*
 * This file is part of the TravelMongolia.us package.
 *
 * (c) Enkhbayasgalan Galsandorj (g.enkhbayasgalan@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Enkuso\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

class BookingType extends AbstractType
{
    public function getName()
    {
        return 'booking';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first_name', 'text', array('label'=>'First name'));
        $builder->add('last_name', 'text', array('label'=>'Last name'));
        $builder->add('country', 'text', array('label'=>'Country'));
        $builder->add('phone', 'text', array('label'=>'Day time phone'));
        $builder->add('phone2', 'text', array('label'=>'Evening phone'));
        $builder->add('email', 'email', array('label'=>'Your e-mail address'));
        $builder->add('tour', 'choice', array('choices' => $options['tours']));
        $builder->add('guide', 'choice', array('choices' => $options['guides']));
        $builder->add('number_of_people', 'text', array('label'=>'Number of people'));
        $builder->add('comment', 'textarea', array('label'=>'Your Message'));
    }

    public function getDefaultOptions(array $options)
    {
        $options = array_merge(array(
            'tours' => array('none' => 'No tour'),
        ), $options);

        $options = array_merge(array(
            'guides' => array('none' => 'No guide'),
        ), $options);

        $options['validation_constraint'] = new Assert\Collection(array(
            'fields' => array(
                'first_name'      => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array(
                        'pattern' => "/\d/",
                        'match'   => false,
                    )),
                ),
                'last_name'      => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array(
                        'pattern' => "/\d/",
                        'match'   => false,
                    )),
                ),
                'country'     => array(
                    new Assert\NotBlank(),
                ),
                'phone'     => array(
                    new Assert\NotBlank(),
                ),
                'phone2'     => array(
                    new Assert\NotBlank(),
                ),
                'email'     => array(
                    new Assert\NotBlank(),
                    new Assert\Email(),
                ),
                'tour'    => new Assert\Choice(array(
                        'choices' => array_keys($options['tours'])
                    )),
                'guide'    => new Assert\Choice(array(
                        'choices' => array_keys($options['guides'])
                    )),
                'number_of_people'   => new Assert\NotBlank(),
                'comment'   => new Assert\NotBlank(),
            ),
            'allowExtraFields'  => true,
        ));

        return $options;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'guides' => null,
            'tours' => null,
        ));
    }
}