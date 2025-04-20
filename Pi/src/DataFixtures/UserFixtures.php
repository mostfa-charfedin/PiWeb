<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // 🔐 Admin
        $admin = new User();
        $admin->setNom('Admin');
        $admin->setPrenom('Super');
        $admin->setEmail('admin@example.com');
        $admin->setCin(12345678);
        $admin->setNumPhone(99999999);
        $admin->setDatenaissance(new \DateTime('1990-01-01'));
        $admin->setRole('ADMIN'); // Génère ROLE_ADMIN
        $admin->setGenre(true);
        $admin->setPassword('admin123'); // Mot de passe en clair

        $manager->persist($admin);

        // 👤 Utilisateur simple
        $user = new User();
        $user->setNom('User');
        $user->setPrenom('Normal');
        $user->setEmail('user@example.com');
        $user->setCin(87654321);
        $user->setNumPhone(88888888);
        $user->setDatenaissance(new \DateTime('2000-01-01'));
        $user->setRole('USER'); // Génère ROLE_USER
        $user->setGenre(false);
        $user->setPassword('user123'); // Mot de passe en clair

        $manager->persist($user);

        // Sauvegarde
        $manager->flush();
    }
}
