<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tags = [
            'Information Request',
            'Technical Support',
            'HR Inquiry',
            'Announcement',
            'Feedback & Suggestions',
            'Document Request',
            'Training & Development',
            'Meeting Request',
            'Policy Clarification',
            'Facilities Issue',
            'Project Collaboration',
            'General Discussion',
            'Job Posting/Internal Mobility',
            'Event Participation',
            'Lost and Found',
        ];

        foreach ($tags as $tagName) {
            $category = new Category();
            $category->setTag($tagName);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
