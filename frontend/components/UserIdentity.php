<?php
/**
 *
 */

class AdminIdentity extends CUserIdentity
{

    const ADMIN_USERNAME = 'admin';
    const ADMIN_PASSWORD = 'rhexedthxe';

    public function authenticate()
    {
        $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;

        if ($this->username !== self::ADMIN_USERNAME && $this->password !== self::ADMIN_PASSWORD) {
            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
    }


}