<?php

namespace MyCoon\Apps\Backoffice\Backend\Controller\User;

use MyCoon\Backoffice\User\Application\Search\SearchUserQuery;
use MyCoon\Shared\Domain\Bus\Query\QueryBus;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use MyCoon\Apps\Backoffice\Backend\Controller\BaseController;

class UserAuthenticatePostController extends BaseController
{
    private QueryBus $query;

    public function __construct(QueryBus $query, SerializerInterface $serializer)
    {
        $this->query = $query;
        parent::__construct($serializer);
    }

    public function __invoke(Request $request): Response
    {
        $username = $request->request->get("username");
        $password = $request->request->get("password");

        try{
            $filters[] = [
                "value" => $username,
                "operator" => "=",
                "field" => "username"
            ];

            $filters[] = [
                "value" => sha1($password),
                "operator" => "=",
                "field" => "password"
            ];

            $query = new SearchUserQuery($filters);

            $result = $this->query->ask($query);

            if(empty($result[0])){
                throw new \Exception("Invalid Login", Response::HTTP_BAD_REQUEST);
            }

            return $this->response($result[0], Response::HTTP_OK);

        }catch (\Exception $error){
            return $this->response([
                "message" => $error->getMessage()
            ], $error->getCode());
        }
    }
}