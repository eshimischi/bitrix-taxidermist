<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Sale;

class Fuser
{
    /**
     * Return fuserId.
     *
     * @param bool $skipCreate		Create, if not exist.
     */
    public static function getId($skipCreate = false): ?int
    {
        return 0;
    }

    /**
     * Return user by fuserId.
     *
     * @param int $fuserId		Fuser Id.
     * @return int
     */
    public static function getUserIdById($fuserId)
    {
        return 0;
    }
}
