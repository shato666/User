<?php
/**
 * @package   ImpressPages
 */


namespace Plugin\User;


class Slot {

    public static function User_login()
    {
        if (ipUser()->loggedIn()) {
            return '';
        } else {
            $form = FormModel::loginForm();
            $data = array (
                'form' => $form
            );
            return ipView('view/login.php', $data)->render();
        }
    }
    public static function User_passwordReset()
    {
        $form = FormModel::passwordResetForm();
        $data = array (
            'form' => $form
        );
        return ipView('view/passwordReset.php', $data)->render();
    }
    public static function User_profile()
    {
        if (ipUser()->loggedIn()) {
            $form = FormModel::profileForm();
            $data = array (
                'form' => $form
            );
            return ipView('view/profile.php', $data)->render();
        } else {
            return '';
        }
    }
    public static function User_registration()
    {
        if (ipUser()->loggedIn()) {
            return '';
        } else {
            $form = FormModel::registrationForm();
            $data = array (
                'form' => $form
            );
            return ipView('view/registration.php', $data)->render();
        }

    }

    public static function User_logout()
    {
        if (ipUser()->loggedIn()) {
            $form = FormModel::logoutForm();
            $data = array (
                'form' => $form
            );
            return ipView('view/logout.php', $data)->render();
        } else {
            return '';
        }
    }
}
