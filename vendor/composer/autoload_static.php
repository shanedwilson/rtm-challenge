<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e10c9e3ef5d615979d17289c0ced028
{
    public static $classMap = array (
        'Milo\\Github\\Api' => __DIR__ . '/..' . '/milo/github-api/src/Github/Api.php',
        'Milo\\Github\\ApiException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\BadRequestException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\ForbiddenException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\Helpers' => __DIR__ . '/..' . '/milo/github-api/src/Github/Helpers.php',
        'Milo\\Github\\Http\\AbstractClient' => __DIR__ . '/..' . '/milo/github-api/src/Github/Http/AbstractClient.php',
        'Milo\\Github\\Http\\BadResponseException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\Http\\CachedClient' => __DIR__ . '/..' . '/milo/github-api/src/Github/Http/CachedClient.php',
        'Milo\\Github\\Http\\CurlClient' => __DIR__ . '/..' . '/milo/github-api/src/Github/Http/CurlClient.php',
        'Milo\\Github\\Http\\IClient' => __DIR__ . '/..' . '/milo/github-api/src/Github/Http/IClient.php',
        'Milo\\Github\\Http\\Message' => __DIR__ . '/..' . '/milo/github-api/src/Github/Http/Message.php',
        'Milo\\Github\\Http\\Request' => __DIR__ . '/..' . '/milo/github-api/src/Github/Http/Request.php',
        'Milo\\Github\\Http\\Response' => __DIR__ . '/..' . '/milo/github-api/src/Github/Http/Response.php',
        'Milo\\Github\\Http\\StreamClient' => __DIR__ . '/..' . '/milo/github-api/src/Github/Http/StreamClient.php',
        'Milo\\Github\\IException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\InvalidResponseException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\JsonException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\LogicException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\MissingParameterException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\NotFoundException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\OAuth\\Configuration' => __DIR__ . '/..' . '/milo/github-api/src/Github/OAuth/Configuration.php',
        'Milo\\Github\\OAuth\\Login' => __DIR__ . '/..' . '/milo/github-api/src/Github/OAuth/Login.php',
        'Milo\\Github\\OAuth\\LoginException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\OAuth\\Token' => __DIR__ . '/..' . '/milo/github-api/src/Github/OAuth/Token.php',
        'Milo\\Github\\Paginator' => __DIR__ . '/..' . '/milo/github-api/src/Github/Paginator.php',
        'Milo\\Github\\RateLimitExceedException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\RuntimeException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\Sanity' => __DIR__ . '/..' . '/milo/github-api/src/Github/Sanity.php',
        'Milo\\Github\\Storages\\FileCache' => __DIR__ . '/..' . '/milo/github-api/src/Github/Storages/FileCache.php',
        'Milo\\Github\\Storages\\ICache' => __DIR__ . '/..' . '/milo/github-api/src/Github/Storages/ICache.php',
        'Milo\\Github\\Storages\\ISessionStorage' => __DIR__ . '/..' . '/milo/github-api/src/Github/Storages/ISessionStorage.php',
        'Milo\\Github\\Storages\\MissingDirectoryException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\Storages\\SessionStorage' => __DIR__ . '/..' . '/milo/github-api/src/Github/Storages/SessionStorage.php',
        'Milo\\Github\\UnauthorizedException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\UnexpectedResponseException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
        'Milo\\Github\\UnprocessableEntityException' => __DIR__ . '/..' . '/milo/github-api/src/Github/exceptions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9e10c9e3ef5d615979d17289c0ced028::$classMap;

        }, null, ClassLoader::class);
    }
}
