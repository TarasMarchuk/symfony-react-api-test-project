<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 02.03.19
 * Time: 17:49
 */

namespace App\Entity;


use Symfony\Component\Security\Core\User\UserInterface;

interface AuthoredEntityInterface
{
    public function setAuthor(UserInterface $user): AuthoredEntityInterface;
}