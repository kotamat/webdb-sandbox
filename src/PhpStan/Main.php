<?php

namespace Kotamat\WebdbSandbox\PhpStan;

class Main
{
    public function error()
    {
        // 存在しないクラスなのでエラー
        new ErrorClass();
    }

    public function earlyRedirect(Response $response): bool
    {

        if (rand(1, 2) === 1) {
            $foo = true;
        } else {
            $response->redirect();
        }

        return $foo;
    }
}
