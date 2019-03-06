<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 24.02.19
 * Time: 21:17
 */

namespace App\Controller;


use App\Security\UserConfirmationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package App\Controller
 * @Route("/")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index")
     */
    public function index()
    {
        return $this->render(
            'base.html.twig'
        );
    }

    /**
     * @Route("/confirm-user/{token}", name="default_confirm_token")
     */
    public function confirmUser(
        string $token,
        UserConfirmationService $userConfirmationService)
    {
        $userConfirmationService->confirmUser($token);

        return $this->redirectToRoute('default_index');
    }
}