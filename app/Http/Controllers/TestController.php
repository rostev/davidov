<?php

    namespace App\Http\Controllers;

    use DebugBar\DebugBar;
    use Illuminate\Http\Request;
    use Illuminate\View\View;

    class TestController extends Controller
    {
        public function user($user = 12345): View
        {
            DebugBar::class.info($user);
            return view('user', compact('user'));
        }

        public function person(string $name = 'Noname'): void
        {
            echo "Your name is $name";
            echo "<hr>";
        }
    }
