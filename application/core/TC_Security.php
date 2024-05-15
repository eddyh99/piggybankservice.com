<?php

class TC_Security extends CI_Security {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * CSRF Verify DEBUG
     *
     * @return  CI_Security
     */
    public function csrf_verify()
    {

        log_message('info', 'CSRF csrf_verify start');

        // If it's not a POST request we will set the CSRF cookie
        if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST')
        {
            return $this->csrf_set_cookie();
        }

        // Check if URI has been whitelisted from CSRF checks
        if ($exclude_uris = config_item('csrf_exclude_uris'))
        {
            $uri = load_class('URI', 'core');
            foreach ($exclude_uris as $excluded)
            {
                if (preg_match('#^'.$excluded.'$#i'.(UTF8_ENABLED ? 'u' : ''), $uri->uri_string()))
                {

                    log_message('info', 'CSRF url was excluded from CSRF check');
                    return $this;
                }
            }
        }

        // Do the tokens exist in both the _POST and _COOKIE arrays?
        if ( ! isset($_POST[$this->_csrf_token_name], $_COOKIE[$this->_csrf_cookie_name])
            OR $_POST[$this->_csrf_token_name] !== $_COOKIE[$this->_csrf_cookie_name]) // Do the tokens match?
        {
            log_message('info', 'CSRF tokens exist in both the _POST and _COOKIE arrays');
            $this->csrf_show_error();
        }

        // We kill this since we're done and we don't want to polute the _POST array
        unset($_POST[$this->_csrf_token_name]);

        // Regenerate on every submission?
        if (config_item('csrf_regenerate'))
        {

            // Nothing should last forever
            unset($_COOKIE[$this->_csrf_cookie_name]);
            $this->_csrf_hash = NULL;

            log_message('info', 'CSRF was regenerate (Cookie removed)');

        }

        log_message('info', 'CSRF executing _csrf_set_hash');
        $this->_csrf_set_hash();

        log_message('info', 'CSRF executing csrf_set_cookie');
        $this->csrf_set_cookie();

        log_message('info', 'CSRF token verified');
        return $this;
    }

} 