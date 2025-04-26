<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function bepc()
    {
        return view('quiz.bepc');
    }

    public function bac()
    {
        return view('quiz.bac');
    }

    public function bts()
    {
        return view('quiz.bts');
    }

    public function licence()
    {
        return view('quiz.licence');
    }

    public function master()
    {
        return view('quiz.master');
    }

    public function results()
    {
        return view('quiz.results');
    }

    public function bepcScientifique()
    {
        return view('quiz.bepc.scientifique');
    }

    public function bepcLiteral()
    {
        return view('quiz.bepc.literal');
    }

    public function bepcGeneral()
    {
        return view('quiz.bepc.general');
    }

    public function bacScientifique()
    {
        return view('quiz.bac.scientifique');
    }

    public function bacLiteral()
    {
        return view('quiz.bac.literal');
    }

    public function bacEconomique()
    {
        return view('quiz.bac.economique');
    }

    public function btsInformatique()
    {
        return view('quiz.bts.informatique');
    }

    public function btsComptabilite()
    {
        return view('quiz.bts.comptabilite');
    }

    public function btsMarketing()
    {
        return view('quiz.bts.marketing');
    }

    public function licenceInformatique()
    {
        return view('quiz.licence.informatique');
    }

    public function licenceComptabilite()
    {
        return view('quiz.licence.comptabilite');
    }

    public function licenceMarketing()
    {
        return view('quiz.licence.marketing');
    }

    public function masterInformatique()
    {
        return view('quiz.master.informatique');
    }

    public function masterComptabilite()
    {
        return view('quiz.master.comptabilite');
    }

    public function masterMarketing()
    {
        return view('quiz.master.marketing');
    }
} 