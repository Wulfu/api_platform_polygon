<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $blogPost = new BlogPost();
        $blogPost
            ->setTitle('First post')
            ->setPublished(new \DateTime('2018-07-29 12:00:00'))
            ->setContent("Test first content")
            ->setAuthor("mateusz szamota")
            ->setSlug("first-post");

        $manager->persist($blogPost);

        $blogPost = new BlogPost();
        $blogPost
            ->setTitle('Second post')
            ->setPublished(new \DateTime('2018-07-29 12:00:00'))
            ->setContent("Test second content")
            ->setAuthor("mateusz szamota")
            ->setSlug("second-post");

        $manager->persist($blogPost);

        $manager->flush();
    }
}
