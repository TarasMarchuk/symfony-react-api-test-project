<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 06.03.19
 * Time: 0:10
 */

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     collectionOperations={
 *         "post" = {
 *             "path"="/users/confirm"
 *         }
 *     },
 *     itemOperations={}
 * )
 */
class UserConfirmation
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=30, max=30)
     */
    public $confirmationToken;
}