<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 02.03.19
 * Time: 17:59
 */

namespace App\Entity;


interface PublishedDateEntityInterface
{
    public function setPublished(\DateTimeInterface $published): PublishedDateEntityInterface;
}