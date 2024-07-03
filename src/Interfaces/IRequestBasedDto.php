<?php

namespace Masterskill\Dto\Interfaces;

interface IRequestBasedDto
{
    /**
     * Get the request and transform it as a DTO
     * @param $request The request. It can be a base request or a form request, that's why we didn't type hinted it to not bro the contract, but keep in mind that it's must came from request
     */

    public static function fromRequest($request): static;
}
