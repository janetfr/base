<?php

namespace MyCoon\Apps\Backoffice\Backend\Controller\User;

use MyCoon\Backoffice\User\Application\Create\CreateUserCommand;
use MyCoon\Shared\Domain\Bus\Command\CommandBus;
use Symfony\Component\Serializer\SerializerInterface;
use MyCoon\Apps\Backoffice\Backend\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Exception as Exception;

class UserCreatePostController extends BaseController
{
    private CommandBus $bus;

    public function __construct(CommandBus $bus, SerializerInterface $serializer)
    {
        $this->bus = $bus;
        parent::__construct($serializer);
    }

    public function __invoke(Request $request): Response
    {
        $id = $request->request->get("id");
        $username = $request->request->get("username");
        $password = $request->request->get("password");

        try{
            $command = new CreateUserCommand($id, $username, $password);
            $this->bus->dispatch($command);
        }catch (Exception $error){
            if($error->getCode() != 2003){
                return $this->response([
                    "message" => $error->getMessage()
                ], $error->getCode());
            }
        }
        return $this->response(null, Response::HTTP_CREATED);
    }
}