<?php


namespace MyCoon\Shared\Infrastructure\Symfony;

use MyCoon\Backoffice\User\Domain\User;
use MyCoon\Shared\Domain\UserLogged;
use Symfony\Component\HttpFoundation\RequestStack;

class SymfonyUserLogged implements UserLogged
{
    private RequestStack $request;

    public function __construct(RequestStack $request)
    {
        $this->request = $request;
    }

    public function userLogged()
    {
        $user = $this->request->getCurrentRequest()->attributes->get("user");
        return $user;
    }

    public function isUserLogged(): bool
    {
        $user = $this->request->getCurrentRequest()->attributes->get("user");
        if(empty($user)){
            return false;
        }

        return true;
    }

}