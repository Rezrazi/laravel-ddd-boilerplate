<?php

namespace Domain\User\States;

interface BaseState
{
    public static function getCurrentState();

    public static function setCurrentState();
}
