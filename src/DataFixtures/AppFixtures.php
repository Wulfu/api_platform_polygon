<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
        $this->loadBlogPosts($manager);
    }

    public function loadBlogPosts(ObjectManager $manager)
    {
        $user = $this->getReference('user_admin');
        $blogPost = new BlogPost();
        $blogPost
            ->setTitle('First post')
            ->setPublished(new \DateTime('2018-07-29 12:00:00'))
            ->setContent("Test first content")
            ->setAuthor($user)
            ->setSlug("first-post");

        $manager->persist($blogPost);

        $blogPost = new BlogPost();
        $blogPost
            ->setTitle('Second post')
            ->setPublished(new \DateTime('2018-07-29 12:00:00'))
            ->setContent("Test second content")
            ->setAuthor($user)
            ->setSlug("second-post");

        $manager->persist($blogPost);

        $manager->flush();
    }

    public function loadComments(ObjectManager $manager)
    {

    }

    public function loadUsers(ObjectManager $manager)
    {
        $user = new User();
        $user
            ->setUsername("Szakal")
            ->setEmail("admin@blog.com")
            ->setName("Mateusz Szamota")
            ->setPassword('secret123#');

        $this->addReference('user_admin', $user);

        $manager->persist($user);
        $manager->flush();
    }
}