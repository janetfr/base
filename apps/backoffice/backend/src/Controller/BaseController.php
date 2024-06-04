<?php

namespace MyCoon\Apps\Backoffice\Backend\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class BaseController
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function response($result, $code = 200) : Response
    {
        if($result !== null){
            $this->serializer->__construct([new PropertyNormalizer()], [new JsonEncoder()]);
            return new Response($this->serializer->serialize($result, 'json'), $code);
        }

        return new Response($result, $code);
    }

    public function responseText($result, $code = 200) : Response
    {
        return new Response($result, $code);
    }

    public function encode($data)
    {
        $this->serializer->__construct([new PropertyNormalizer()], [new JsonEncoder()]);
        return $this->serializer->serialize($data, 'json');
    }
}