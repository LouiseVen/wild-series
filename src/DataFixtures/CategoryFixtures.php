<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Action',
        'Aventure',
        'Animation',
        'Fantastique',
        'Horreur',
        'Comedie',
    ];

    public function load(ObjectManager $manager)
    {
        foreach(SELF::CATEGORIES as $key=>$categoryName){
            $category = new Category();
            $category->setName($categoryName);

            $manager->persist($category);
            $this->addReference('category_' . $categoryName, $category);
        }
        
        $manager->flush();
    }
}