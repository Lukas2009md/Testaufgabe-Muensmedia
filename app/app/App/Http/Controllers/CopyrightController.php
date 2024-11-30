<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    public const COPYRIGHT = "

    ___.           .____           __                   
    \_ |__ ___.__. |    |    __ __|  | _______    ______
     | __ <   |  | |    |   |  |  \  |/ /\__  \  /  ___/
     | \_\ \___  | |    |___|  |  /    <  / __ \_\___ \ 
     |___  / ____| |_______ \____/|__|_ \(____  /____  >
         \/\/              \/          \/     \/     \/ 
    
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
