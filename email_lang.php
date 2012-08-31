<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2012, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

$lang['email_must_be_array']         = "Metoda walidacji e-maila musi być przekazana w tablicy.";
$lang['email_invalid_address']       = "Niepoprawny adres e-mail: %s";
$lang['email_attachment_missing']    = "Nie można zlokalizować następujących załączników: %s";
$lang['email_attachment_unreadable'] = "Nie można otworzyć następujących załączników: %s";
$lang['email_no_recipients']         = "Należy dodać odbiorców: To, Cc, lub Bcc";
$lang['email_send_failure_phpmail']  = "Nie można wysłać e-maila za pomocą PHP mail().  Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.";
$lang['email_send_failure_sendmail'] = "Nie można wysłać e-maila za pomocą PHP Sendmail.  Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.";
$lang['email_send_failure_smtp']     = "Nie można wysłać e-maila za pomoc PHP SMTP.  Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.";
$lang['email_sent']                  = "Twój e-mail został pomyślnie wysłany za pomocą metody: %s";
$lang['email_no_socket']             = "Nie można otworzyć socket'a do Sendmail. Proszę sprawdzić ustawienia.";
$lang['email_no_hostname']           = "Nie podano nazwy hostu SMTP.";
$lang['email_smtp_error']            = "Wystąpił następujący błąd SMTP: %s";
$lang['email_no_smtp_unpw']          = "Błąd: Należy podać nazwę użytkownika i hasło SMTP.";
$lang['email_failed_smtp_login']     = "Błąd przy wysyłaniu komendy AUTH LOGIN. Błąd: %s";
$lang['email_smtp_auth_un']          = "Błąd autentykacji nazwy użytkownika. Błąd: %s";
$lang['email_smtp_auth_pw']          = "Błąd autentykacji hasła. Błąd: %s";
$lang['email_smtp_data_failure']     = "Nie można wysłąć danych: %s";
$lang['email_exit_status']           = "Status kodu wyjścia: %s";


/* End of file email_lang.php */
/* Location: ./system/language/polish/email_lang.php */