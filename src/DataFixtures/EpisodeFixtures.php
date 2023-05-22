<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Episode;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        //src/DataFixtures/EpisodeFixtures.php
        $episode = new Episode();
        $episode->setTitle('Steven Sees a Ghost');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season1_HillHouse'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Open Casket');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season1_HillHouse'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Touch');
        $episode->setNumber(3);
        $episode->setSeason($this->getReference('season1_HillHouse'));
        $episode->setSynopsis('Third one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('The twin thing');
        $episode->setNumber(4);
        $episode->setSeason($this->getReference('season1_HillHouse'));
        $episode->setSynopsis('Fourth one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Pilot');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season1_Brooklyn99'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('The Tagger');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season1_Brooklyn99'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('The Slump');
        $episode->setNumber(3);
        $episode->setSeason($this->getReference('season1_Brooklyn99'));
        $episode->setSynopsis('Third one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Undercover');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season2_Brooklyn99'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Chocolate Milk');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season2_Brooklyn99'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('The JimmyJabGames');
        $episode->setNumber(3);
        $episode->setSeason($this->getReference('season2_Brooklyn99'));
        $episode->setSynopsis('Third one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Josh just Happen to live here !');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season1_CrazyExGirlfriend'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();
        

        $episode = new Episode();
        $episode->setTitle('Josh\'s Girlfriend is really Cool!');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season1_CrazyExGirlfriend'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Where is Josh\'s Friend ?');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season2_CrazyExGirlfriend'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('When will Josh see How Cool I am ?');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season2_CrazyExGirlfriend'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('The Sword - Part 1');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season1_SheRa'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('The Sword - Part 2');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season1_SheRa'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('The Frozen Forest');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season2_SheRa'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Ties that Bind');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season2_SheRa'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Community11');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season1_Community'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Community12');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season1_Community'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Community21');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season2_Community'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('Community22');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season2_Community'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('The Last Of Us 11');
        $episode->setNumber(1);
        $episode->setSeason($this->getReference('season1_TheLastOfUs'));
        $episode->setSynopsis('First one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();

        $episode = new Episode();
        $episode->setTitle('TheLastOfUs12');
        $episode->setNumber(2);
        $episode->setSeason($this->getReference('season1_TheLastOfUs'));
        $episode->setSynopsis('Second one');
        //... set other episode's properties
        //... create 2 more episodes

        $manager->persist($episode);
        $manager->flush();
    }

    public function getDependencies() 
    {
        return [
            SeasonFixtures::class,
          ];
    }
}
