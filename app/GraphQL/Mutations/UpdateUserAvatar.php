<?php

namespace App\GraphQL\Mutations;

final class UpdateUserAvatar
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $file = $args['image'];
        return $file->storePublicly('public/uploads');
    }
}
