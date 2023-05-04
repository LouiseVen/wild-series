<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Program;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $program = new Program();
        $program->setTitle('Haunting of Hill House');
        $program->setSynopsis('A haunted house.');
        $program->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program);

        $manager->flush();

        $program = new Program();
        $program->setTitle('Brooklyn Nine-Nine');
        $program->setSynopsis('Cops being funny (for once)');
        $program->setCategory($this->getReference('category_Comedie'));
        $manager->persist($program);

        $manager->flush();

        $program = new Program();
        $program->setTitle('Crazy Ex-Girlfriend');
        $program->setSynopsis('A stalker that wants to be loved.');
        $program->setCategory($this->getReference('category_Comedie'));
        $manager->persist($program);

        $manager->flush();

        $program = new Program();
        $program->setTitle('She-Ra');
        $program->setSynopsis('FOR THE HONOR OF GRAYSKULL !!!');
        $program->setCategory($this->getReference('category_Animation'));
        $manager->persist($program);

        $manager->flush();

        $program = new Program();
        $program->setTitle('Community');
        $program->setSynopsis('WTF, so meta.');
        $program->setCategory($this->getReference('category_Comedie'));
        $manager->persist($program);

        $manager->flush();

        $program = new Program();
        $program->setTitle('The Last of Us');
        $program->setSynopsis('Should not have eaten carbs');
        $program->setCategory($this->getReference('category_Aventure'));
        $manager->persist($program);

        $manager->flush();
    }

    public function getDependencies() 
    {
        return [
            CategoryFixtures::class,
          ];
    }
}
