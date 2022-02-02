<?php

namespace App\Interfaces;

interface OAuthLogin
{
    public function authCode(string $code): bool;

    public function getArtistsUserAuthenticated(string $token): array;
}
