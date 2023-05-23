<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Program;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAM = [
        [
            'title' => 'Hauting of Hill House',
            'synopsis' => 'A haunted house',
            'category' => 'category_Horreur',
            'poster' => 'build\hillhouse.jpg',
        ],
        [
            'title' => 'Brooklyn 99',
            'synopsis' => 'Cops being funny (for once)',
            'category' => 'category_Comedie',
            'poster' => 'build\b99.jpg',
        ],
        [
            'title' => 'Crazy Ex-Girlfriend',
            'category' => 'category_Comedie',
            'poster' => 'build\CEG.jpg',
            'synopsis' => 'A stalker that wants to be loved',
        ],
        [
            'title' => 'She-Ra',
            'category' => 'category_Animation',
            'poster' => 'build\shera.jpg',
            'synopsis' => 'FOR THE HONOR OF GRAYSKULL !!',
        ],
        [
            'title' => 'Community',
            'category' => 'category_Comedie',
            'poster' => 'build\community.jpg',
            'synopsis' => 'WTF, so meta',
        ],      

    ];

    public function load(ObjectManager $manager): void
    {

        foreach (self::PROGRAM as $key => $currentProgram) {
            $title = str_replace(' ', '', $currentProgram['title']);
            $program = new Program();
            $program->setTitle($currentProgram['title']);
            $program->setCategory($this->getReference($currentProgram['category']));
            $program->setPoster($currentProgram['poster']);
            $program->setSynopsis($currentProgram['synopsis']);
            $manager->persist($program);
            $this->addReference('program_' . $title, $program);
        }
        $manager->flush();
        // $product = new Product();
        // $manager->persist($product);

        // $program = new Program();
        // $program->setTitle('Haunting of Hill House');
        // $program->setSynopsis('A haunted house.');
        // $program->setCategory($this->getReference('category_Horreur'));
        // $program->setPoster('build\hillhouse.jpg');
        // $this->addReference('program_HillHouse', $program);
        // $manager->persist($program);

        // $manager->flush();

        // $program = new Program();
        // $program->setTitle('Brooklyn Nine-Nine');
        // $program->setSynopsis('Cops being funny (for once)');
        // $program->setCategory($this->getReference('category_Comedie'));
        // $program->setPoster('build/b99.jpg');
        // $this->addReference('program_Brooklyn99', $program);
        // $manager->persist($program);

        // $manager->flush();

        // $program = new Program();
        // $program->setTitle('Crazy Ex-Girlfriend');
        // $program->setSynopsis('A stalker that wants to be loved.');
        // $program->setCategory($this->getReference('category_Comedie'));
        // $program->setPoster('build/ceg.jpg');
        // $this->addReference('program_CrazyExGirlfriend', $program);
        // $manager->persist($program);

        // $manager->flush();

        // $program = new Program();
        // $program->setTitle('She-Ra');
        // $program->setSynopsis('FOR THE HONOR OF GRAYSKULL !!!');
        // $program->setCategory($this->getReference('category_Animation'));
        // $program->setPoster('build/shera.jpg');
        // $this->addReference('program_SheRa', $program);
        // $manager->persist($program);

        // $manager->flush();

        // $program = new Program();
        // $program->setTitle('Community');
        // $program->setSynopsis('WTF, so meta.');
        // $program->setCategory($this->getReference('category_Comedie'));
        // $program->setPoster('build/community.jpg');
        // $this->addReference('program_Community', $program);
        // $manager->persist($program);

        // $manager->flush();

        // $program = new Program();
        // $program->setTitle('The Last of Us');
        // $program->setSynopsis('Should not have eaten carbs');
        // $program->setCategory($this->getReference('category_Aventure'));
        // $program->setPoster('build/tlou.jpg');
        // $this->addReference('program_TheLastOfUs', $program);
        // $manager->persist($program);

        // $manager->flush();
    }

    public function getDependencies() 
    {
        return [
            CategoryFixtures::class,
          ];
    }
}
