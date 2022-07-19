<?php

namespace App\Constants;

class Roles
{
    const ROLE_ADMINISTRATOR = 'admin';
    const ROLE_CONTENT_EDITOR = 'editor';
    const ROLE_REGULAR_USER = 'user';


    /**
     *  Map pages to user roles
     * @return \string[][]
     */
    public static function mapping(): array
    {
        return [
            'admins'          => [self::ROLE_ADMINISTRATOR],
            'content-editors' => [self::ROLE_CONTENT_EDITOR, self::ROLE_ADMINISTRATOR],
            'regular-users'   => [self::ROLE_REGULAR_USER, self::ROLE_ADMINISTRATOR],
        ];
    }


}
