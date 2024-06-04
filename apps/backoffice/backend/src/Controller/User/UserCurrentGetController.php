<?php

namespace MyCoon\Apps\Backoffice\Backend\Controller\User;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use MyCoon\Apps\Backoffice\Backend\Controller\BaseController;
use MyCoon\Shared\Domain\Bus\Query\QueryBus;

class UserCurrentGetController extends BaseController
{
    private QueryBus $bus;

    public function __construct(QueryBus $bus, SerializerInterface $serializer)
    {
        $this->bus = $bus;
        parent::__construct($serializer);
    }

    public function __invoke(Request $request)
    {
        return $this->response($request->attributes->get("user"));
    }
}