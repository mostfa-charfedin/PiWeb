<?php

namespace App\Controller;

use App\Entity\Like;
use App\Entity\Poste;
use App\Entity\User;
use App\Repository\LikeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/like')]
class LikeController extends AbstractController
{
    #[Route('/toggle/{id}', name: 'app_like_toggle', methods: ['POST'])]
    public function toggleLike(
        Poste $poste,
        EntityManagerInterface $em,
        LikeRepository $likeRepo,
        SessionInterface $session
    ): JsonResponse {
        $userId = $session->get('id');
        dump($userId); // Ajoute ceci pour déboguer dans var/log/dev.log ou la console Symfony

        if (!$userId) {
            return new JsonResponse(['error' => 'Utilisateur non authentifié', 'session_id' => $userId], 401);
        }

        $user = $em->getRepository(User::class)->find($userId);
        if (!$user) {
            $session->invalidate();
            return new JsonResponse(['error' => 'Utilisateur non trouvé', 'session_id' => $userId], 401);
        }

        $like = $likeRepo->findOneBy(['user' => $user, 'poste' => $poste]);

        if ($like) {
            $em->remove($like);
            $liked = false;
        } else {
            $like = new Like();
            $like->setUser($user);
            $like->setPoste($poste);
            $em->persist($like);
            $liked = true;
        }

        $em->flush();

        return new JsonResponse([
            'success' => true,
            'liked' => $liked,
            'likesCount' => $poste->getLikes()->count(),
        ]);
    }

    #[Route('/count/{id}', name: 'app_like_count', methods: ['GET'])]
    public function getLikeCount(Poste $poste): JsonResponse
    {
        return new JsonResponse(['likeCount' => $poste->getLikes()->count()]);
    }
}