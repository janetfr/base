<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Infrastructure\Symfony;

use MyCoon\Backoffice\User\Application\GetUserByToken\GetUserByTokenQuery;
use MyCoon\Backoffice\User\Application\GetUserByToken\GetUserByTokenResponse;
use MyCoon\Shared\Domain\Bus\Query\QueryBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;

final class BasicHttpAuthMiddleware extends AbstractController
{
    private $bus;

    public function __construct(QueryBus $bus)
    {
        $this->bus = $bus;
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        $userResponse = null;

        $token = $event->getRequest()->headers->get('token');
        $boolean = $event->getRequest()->attributes->get('auth');

        if(!empty($token)){
            $query = new GetUserByTokenQuery($token);

            /** @var GetUserByTokenResponse $userResponse */
            $userResponse = $this->bus->ask($query);

            if($userResponse != null){
                $event->getRequest()->attributes->set("user", $userResponse);
            }
        }

        if(!empty($boolean) && $boolean === true && $userResponse == null){
            $event->setResponse(new JsonResponse(['message' => 'Invalid token'], Response::HTTP_UNAUTHORIZED));
        }
    }
}

