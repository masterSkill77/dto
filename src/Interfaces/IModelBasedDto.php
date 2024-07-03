<?php

namespace Masterskill\Dto\Interfaces;

interface IModelBasedDto
{
    /**
     * Get the model and transform it as a DTO
     * @param $model The model. It can be a base model or an eloquent model, that's why we didn't type hinted it to not bro the contract, but keep in mind that it's must came from model
     * @return static it's self
     */

    public static function frommodel($model): static;
}
