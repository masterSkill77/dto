# Laravel Dto

## The project

This package is intended for the adoption of the DTO schema in Laravel, which is a system for controlling incoming and outgoing data, in collaboration with the Laravel formRequest, or the Eloquent model.

## Installation

To install the project, you should install it from composer :

```bash
composer require masterskill/dto
```

After that, you should publish the config file.

## The DTO class

The Dto class has a different properties to handle. Exemple of the DTO :

```php

<?php

namespace App\Http\Dto;


class UserDto {
    public function __construct(
        public readonly string $name, public readonly string $email
    ) {}
}

```

Or, eventially, the DTO can implements the IRequestBasedDto or IModelBasedDto interfaces to add some functionnality.

```php

<?php

namespace App\Http\Dto;
use Masterskill\Dto\Interfaces\IRequestBasedDto;
use Masterskill\Dto\Interfaces\IModelBasedDto;
use Illuminate\Http\Request;
use App\Models\User;

class UserDto implements IRequestBased, IModelBasedDto {
    public function __construct(
        public readonly string $name, public readonly string $email
    ) {}

    public static function fromRequest(Request $request) {
        return new static("John Doe" , "john.doe@example.com")
    }

    public static function fromModel(User $user) {
        return new static($user->name , $user->email)
    }
}

```
