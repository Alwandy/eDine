<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TableForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text')
            ->add('email', 'text')
            ->add('phone', 'text')
            ->add('attending', 'text')
            ->add('time', 'text')
            ->add('date', 'text');
    }
}
