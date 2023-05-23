<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Season;
use App\Entity\Program;
use Faker\Factory;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    const MAX_SEASONS = 5;
    public function load(ObjectManager $manager): void
    {

        //Puis ici nous demandons à la Factory de nous fournir un Faker
        $faker = Factory::create();

        /**
         * L'objet $faker que tu récupère est l'outil qui va te permettre 
         * de te générer toutes les données que tu souhaites
         */

        foreach (ProgramFixtures::PROGRAM as $key => $currentProgram) {
            $title = str_replace(' ', '', $currentProgram['title']);
            for ($i = 1; $i < self::MAX_SEASONS+1; $i++) {
                $season = new Season();
    
                //Ce Faker va nous permettre d'alimenter l'instance de Season que l'on souhaite ajouter en base
                $season->setNumber($i);
                $season->setYear($faker->year());
                $season->setDescription($faker->paragraphs(3, true));
    
                $season->setProgram($this->getReference('program_' . $title));
    
                $manager->persist($season);

                $this->addReference('season' . $i . '_' . $title, $season);
            }
    
            $manager->flush();
         }
        
    }

    // $season = new Season();
    // $season->setNumber(1);
    // $season->setProgram($this->getReference('program_HillHouse'));
    // $season->setYear(2018);
    // $season->setDescription('There is only one season');
    // //... set other season's properties
    // $this->addReference('season1_HillHouse', $season);

    // $manager->persist($season);
    // $manager->flush();


    // $season = new Season();
    // $season->setNumber(1);
    // $season->setProgram($this->getReference('program_Brooklyn99'));
    // $season->setYear(2013);
    // $season->setDescription('We get to know everyone');
    // //... set other season's properties
    // $this->addReference('season1_Brooklyn99', $season);

    // $manager->persist($season);
    // $manager->flush();


    // $season = new Season();
    // $season->setNumber(2);
    // $season->setProgram($this->getReference('program_Brooklyn99'));
    // $season->setYear(2014);
    // $season->setDescription('Everyone is more mature but still childish');
    // //... set other season's properties
    // $this->addReference('season2_Brooklyn99', $season);

    // $manager->persist($season);
    // $manager->flush();


    // $season = new Season();
    // $season->setNumber(1);
    // $season->setProgram($this->getReference('program_CrazyExGirlfriend'));
    // $season->setYear(2015);
    // $season->setDescription('Rebecca moved to West Covina, and it happens to be where Josh lives');
    // //... set other season's properties
    // $this->addReference('season1_CrazyExGirlfriend', $season);

    // $manager->persist($season);
    // $manager->flush();


    // $season = new Season();
    // $season->setNumber(2);
    // $season->setProgram($this->getReference('program_CrazyExGirlfriend'));
    // $season->setYear(2016);
    // $season->setDescription('You may call her crazy because she is in love');
    // //... set other season's properties
    // $this->addReference('season2_CrazyExGirlfriend', $season);

    // $manager->persist($season);
    // $manager->flush();


    // $season = new Season();
    // $season->setNumber(1);
    // $season->setProgram($this->getReference('program_SheRa'));
    // $season->setYear(2018);
    // $season->setDescription('Adora is also a super woman named She-Ra ?!');
    // //... set other season's properties
    // $this->addReference('season1_SheRa', $season);        

    // $manager->persist($season);
    // $manager->flush();

    // $season = new Season();
    // $season->setNumber(2);
    // $season->setProgram($this->getReference('program_SheRa'));
    // $season->setYear(2019);
    // $season->setDescription('Adora is also a super woman named She-Ra ?!');
    // //... set other season's properties
    // $this->addReference('season2_SheRa', $season);        

    // $manager->persist($season);
    // $manager->flush();

    // $season = new Season();
    // $season->setNumber(1);
    // $season->setProgram($this->getReference('program_Community'));
    // $season->setYear(2009);
    // $season->setDescription('It was supposed to be about a spanish study group');
    // //... set other season's properties
    // $this->addReference('season1_Community', $season);        

    // $manager->persist($season);
    // $manager->flush();

    // $season = new Season();
    // $season->setNumber(2);
    // $season->setProgram($this->getReference('program_Community'));
    // $season->setYear(2010);
    // $season->setDescription('It was supposed to be about a spanish study group');
    // //... set other season's properties
    // $this->addReference('season2_Community', $season);        

    // $manager->persist($season);
    // $manager->flush();

    // $season = new Season();
    // $season->setNumber(1);
    // $season->setProgram($this->getReference('program_TheLastOfUs'));
    // $season->setYear(2023);
    // $season->setDescription('Zombies');
    // //... set other season's properties
    // $this->addReference('season1_TheLastOfUs', $season);        

    // $manager->persist($season);
    // $manager->flush();

    public function getDependencies()
    {
        return [
            ProgramFixtures::class,
        ];
    }
}
