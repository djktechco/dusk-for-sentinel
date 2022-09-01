<?php

use Cartalyst\Sentinel\Users\UserInterface;

class User implements UserInterface
{
    public function find()
    {
        return $this;
    }

    public function first()
    {
        return $this;
    }

    public function where($attribute, $value)
    {
        return $this;
    }

    public function getUserId(): int
    {
        return 12;
    }

    public function getUserLogin(): string
    {
        return 'roni@example.com';
    }

    public function getUserLoginName(): string
    {
        return 'email';
    }

    public function getUserPassword(): string
    {
        return 'p4ssw0rd';
    }
}
