<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($locale = '')
    {
        if ($locale === '') {

            session()->keepFlashdata('info');

            return redirect()->to($this->locale);
        }

        $this->request->setLocale($locale);

        session()->set('locale', $locale);

        return view("Home/index");
    }

    public function testEmail()
    {
        $email = service('email');

        $email-> setTo('marlhonalexisserechmiranda@gmail.com');

        $email->setSubject('a test email');

        $email->setMessage('<h1> Hola mundo </h1>');

        if ($email->send()) {
            echo "Mensaje Enviado";
        } else {
            echo $email->printDebugger();
        }

    }
}
