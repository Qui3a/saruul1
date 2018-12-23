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

class PrivateCustomTourType extends AbstractType
{
    private static $accommodation_levels = ['3 star' => '3*', '4 star' => '4*', '5 star' => '5*',];
    private static $budget = ['1000 to 2000' => '1000-2000', '2000 to 3500' => '2000-3500', '3500 to 5000' => '3500-5000', 'over 5000' => 'over 5000'];
    private static $preferences = [
        'Gobi Desert' => 'Gobi Desert',
        'Khongor Sand dune' => 'Khongor Sand dune',
        'Flaming Cliffs' => 'Flaming Cliffs',
        'Khavtsgait Petroglyphs' => 'Khavtsgait Petroglyphs',
        'Yol Valley' => 'Yol Valley',
        'Mountain Biking Day trip in Gobi Desert' => 'Mountain Biking Day trip in Gobi Desert',
        'Camel Riding' => 'Camel Riding',
        'Naadam Festival July – in Ulaanbaatar' => 'Naadam Festival July – in Ulaanbaatar',
        'Rural Naadam Festival in Khuvsgul lake' => 'Rural Naadam Festival in Khuvsgul lake',
        'Eagle Hunting Festival – September – October' => 'Eagle Hunting Festival – September – October',
        'Western Mongolia – Learn about How Kazakh People Hunt with Golden Eagles' => 'Western Mongolia – Learn about How Kazakh People Hunt with Golden Eagles',
        'Terelj National Park' => 'Terelj National Park',
        'Hustai National Park' => 'Hustai National Park',
        'Karakorum – Erdene Zuu Monastery' => 'Karakorum – Erdene Zuu Monastery',
        'Tsenher Hot Spring,' => 'Tsenher Hot Spring,',
        'Genghis Khan Equestrian Statue' => 'Genghis Khan Equestrian Statue',
        'Horse Riding' => 'Horse Riding',
        'Amarabayasgalant Monastery' => 'Amarabayasgalant Monastery',
        'Khuvsgul Lake' => 'Khuvsgul Lake',
        'Visiting reindeer family' => 'Visiting reindeer family',
        'Uushgiin Deer Stones near Khuvsgul lake' => 'Uushgiin Deer Stones near Khuvsgul lake',
        'Visiting Nomad Family in Gobi Desert' => 'Visiting Nomad Family in Gobi Desert',
        'Tuvkhun Monastery' => 'Tuvkhun Monastery',
        'Hiking for a day or more?' => 'Hiking for a day or more?',
        'Cooking Class for Mongolian cuisine' => 'Cooking Class for Mongolian cuisine',
    ];

    public function getName()
    {
        return 'private_custom_tour';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first_name', 'text', array('label' => 'First name'));
        $builder->add('last_name', 'text', array('label' => 'Last name'));
        $builder->add('email', 'email', array('label' => 'Your e-mail address'));
        $builder->add('nationality', 'text', array('label' => 'Nationality'));
        $builder->add('phone_numbers', 'text', array('label' => 'Phone numbers'));
        $builder->add('traveling_children', 'choice', array('label' => 'Traveling Children?', 'choices' => ['Yes' => 'Yes', 'No' => 'No'], 'expanded' => true, 'required' => true));
        $builder->add('accommodation_level', 'choice', array('label' => 'Level of accommodation', 'choices' => self::$accommodation_levels));
        $builder->add('tour_start_date', 'text', array('label' => 'Tour Start Date'));
        $builder->add('tour_end_date', 'text', array('label' => 'Tour End Date'));
        $builder->add('budget', 'choice', array('label' => 'Budget for per person', 'choices' => self::$budget));
        $builder->add('preferences', 'choice', array('label' => 'What do you want to see and do in your custom tour?', 'choices' => self::$preferences, 'multiple' => true, 'expanded' => true));
        $builder->add('comment', 'textarea', array('label' => 'Comments'));
    }

    public function getDefaultOptions(array $options)
    {
        $options['validation_constraint'] = new Assert\Collection(array(
            'fields' => array(
                'first_name' => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array(
                        'pattern' => "/\d/",
                        'match' => false,
                    )),
                ),
                'last_name' => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array(
                        'pattern' => "/\d/",
                        'match' => false,
                    )),
                ),
                'email' => array(
                    new Assert\NotBlank(),
                    new Assert\Email(),
                ),
                'nationality' => array(
                    new Assert\NotBlank(),
                    new Assert\Country(),
                ),
                'phone_numbers' => array(
                    new Assert\NotBlank(),
                ),
                'tour_start_date' => array(
                    new Assert\NotBlank(),
                ),
                'tour_end_date' => array(
                    new Assert\NotBlank(),
                ),
                'comment' => array(
                    new Assert\NotBlank(),
                ),
            ),
            'allowExtraFields' => false,
        ));

        return $options;
    }
}