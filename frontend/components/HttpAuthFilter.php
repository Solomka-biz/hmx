<?php

class HttpAuthFilter extends CFilter
{
    /**
     * @return array list of authorized users/passwords
     */
    public $users = array();

    /**
     * @return string authentication realm
     */
    public $realm = 'Authentication needed';

    /**
     * Performs the pre-action filtering.
     *
     * @param CFilterChain $filterChain
     *
     * @throws CHttpException
     * @return boolean whether the filtering process should continue and the action
     *           should be executed.
     */
    protected function preFilter($filterChain)
    {
        if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
            $username = $_SERVER['PHP_AUTH_USER'];
            $password = $_SERVER['PHP_AUTH_PW'];

            if (array_key_exists($username, $this->users) && ($this->users[$username] === $password)) {
                return true;
            }

        }
        header("WWW-Authenticate: Basic realm=\"" . $this->realm . "\"");
        throw new CHttpException(401, Yii::t('yii', 'You are not authorized to perform this action.'));
    }
}

