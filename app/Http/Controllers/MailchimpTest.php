<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mailchimp;
use Mailchimp_Error;
use Mailchimp_List_AlreadySubscribed;

class MailchimpTest extends Controller
{
    //
    public $mailchimp;

    public $listId = '282be78176';

    public function __construct(Mailchimp $mailchimp)

    {

        $this->mailchimp = $mailchimp;

    } 
    public function subscribe(Request $request)

    {

        try {



            $this->mailchimp

            ->lists

            ->subscribe(

                $this->listId,

                ['email' => $request->email]

            );



            return ['statu' =>'success','msg' =>'Email Suscrito con éxito'];



        } catch (Mailchimp_List_AlreadySubscribed $e) {

            return ['statu' =>'error', 'msg' => 'Email ya está suscrito'];

        } catch (Mailchimp_Error $e) {

            return ['statu' =>'error', 'msg' =>'Error de MailChimp'];

        }

    }
}
