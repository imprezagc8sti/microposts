{"filter":false,"title":"LoginController.php","tooltip":"/microposts/app/Http/Controllers/Auth/LoginController.php","ace":{"folds":[],"scrolltop":180,"scrollleft":0,"selection":{"start":{"row":39,"column":53},"end":{"row":39,"column":53},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"hash":"008b681a6f5ad042e370e8dc967a6323691df69b","undoManager":{"mark":52,"position":52,"stack":[[{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"remove","lines":["e"],"id":2},{"start":{"row":27,"column":32},"end":{"row":27,"column":33},"action":"remove","lines":["m"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["o"]},{"start":{"row":27,"column":30},"end":{"row":27,"column":31},"action":"remove","lines":["h"]}],[{"start":{"row":21,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["","","",""],"id":3,"ignore":true}],[{"start":{"row":24,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["","","",""],"id":4,"ignore":true}],[{"start":{"row":22,"column":0},"end":{"row":23,"column":75},"action":"insert","lines":["    Route::get('login', 'Auth\\LoginController@showLoginForm')->name('login');","    Route::post('login', 'Auth\\LoginController@login')->name('login.post');"],"id":5,"ignore":true}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "],"id":6,"ignore":true}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["p"],"id":7,"ignore":true}],[{"start":{"row":25,"column":5},"end":{"row":25,"column":6},"action":"insert","lines":["u"],"id":8,"ignore":true}],[{"start":{"row":25,"column":6},"end":{"row":25,"column":7},"action":"insert","lines":["b"],"id":9,"ignore":true}],[{"start":{"row":25,"column":7},"end":{"row":25,"column":9},"action":"insert","lines":["li"],"id":10,"ignore":true}],[{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":["c"],"id":11,"ignore":true}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":[" "],"id":12,"ignore":true}],[{"start":{"row":25,"column":11},"end":{"row":25,"column":14},"action":"insert","lines":["fun"],"id":13,"ignore":true}],[{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["c"],"id":14,"ignore":true}],[{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"insert","lines":["t"],"id":15,"ignore":true}],[{"start":{"row":25,"column":11},"end":{"row":25,"column":16},"action":"remove","lines":["funct"],"id":16,"ignore":true},{"start":{"row":25,"column":11},"end":{"row":25,"column":20},"action":"insert","lines":["function "]}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"insert","lines":["s"],"id":17,"ignore":true}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":24},"action":"insert","lines":["how"],"id":18,"ignore":true}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":24},"action":"remove","lines":["show"],"id":19,"ignore":true},{"start":{"row":25,"column":20},"end":{"row":25,"column":33},"action":"insert","lines":["showLoginForm"]}],[{"start":{"row":25,"column":33},"end":{"row":25,"column":35},"action":"insert","lines":["{}"],"id":20,"ignore":true}],[{"start":{"row":25,"column":33},"end":{"row":25,"column":35},"action":"insert","lines":["()"],"id":21,"ignore":true}],[{"start":{"row":25,"column":36},"end":{"row":27,"column":4},"action":"insert","lines":["","        ","    "],"id":22,"ignore":true}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"insert","lines":["k"],"id":23,"ignore":true}],[{"start":{"row":26,"column":9},"end":{"row":26,"column":15},"action":"insert","lines":["fjds f"],"id":24,"ignore":true}],[{"start":{"row":26,"column":15},"end":{"row":26,"column":22},"action":"insert","lines":["klnvogi"],"id":25,"ignore":true}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"remove","lines":["i"],"id":26,"ignore":true}],[{"start":{"row":26,"column":16},"end":{"row":26,"column":21},"action":"remove","lines":["lnvog"],"id":27,"ignore":true}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":16},"action":"remove","lines":[" fk"],"id":28,"ignore":true}],[{"start":{"row":26,"column":9},"end":{"row":26,"column":13},"action":"remove","lines":["fjds"],"id":29,"ignore":true}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"remove","lines":["k"],"id":30,"ignore":true}],[{"start":{"row":22,"column":0},"end":{"row":27,"column":5},"action":"remove","lines":["    Route::get('login', 'Auth\\LoginController@showLoginForm')->name('login');","    Route::post('login', 'Auth\\LoginController@login')->name('login.post');","","    public function showLoginForm(){","        ","    }"],"id":31,"ignore":true}],[{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["",""],"id":32,"ignore":true}],[{"start":{"row":20,"column":27},"end":{"row":21,"column":0},"action":"remove","lines":["",""],"id":33,"ignore":true}],[{"start":{"row":21,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["","",""],"id":34,"ignore":true}],[{"start":{"row":21,"column":0},"end":{"row":37,"column":5},"action":"insert","lines":["    public function index()","    {","        $data = [];","        if (\\Auth::check()) {","            $user = \\Auth::user();","            $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);","","            $data = [","                'user' => $user,","                'microposts' => $microposts,","            ];","            $data += $this->counts($user);","            return view('users.show', $data);","        }else {","            return view('welcome');","        }","    }"],"id":35,"ignore":true}],[{"start":{"row":21,"column":20},"end":{"row":21,"column":25},"action":"remove","lines":["index"],"id":36,"ignore":true},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":23},"action":"insert","lines":["ho"],"id":37,"ignore":true}],[{"start":{"row":21,"column":20},"end":{"row":21,"column":23},"action":"remove","lines":["sho"],"id":38,"ignore":true},{"start":{"row":21,"column":20},"end":{"row":21,"column":33},"action":"insert","lines":["showLoginForm"]}],[{"start":{"row":21,"column":0},"end":{"row":37,"column":5},"action":"remove","lines":["    public function showLoginForm()","    {","        $data = [];","        if (\\Auth::check()) {","            $user = \\Auth::user();","            $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);","","            $data = [","                'user' => $user,","                'microposts' => $microposts,","            ];","            $data += $this->counts($user);","            return view('users.show', $data);","        }else {","            return view('welcome');","        }","    }"],"id":39,"ignore":true}],[{"start":{"row":20,"column":27},"end":{"row":21,"column":0},"action":"remove","lines":["",""],"id":40,"ignore":true}],[{"start":{"row":39,"column":27},"end":{"row":39,"column":32},"action":"remove","lines":["guest"],"id":41,"ignore":true},{"start":{"row":39,"column":27},"end":{"row":39,"column":28},"action":"insert","lines":["u"]}],[{"start":{"row":39,"column":28},"end":{"row":39,"column":29},"action":"insert","lines":["s"],"id":42,"ignore":true}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":30},"action":"insert","lines":["t"],"id":43,"ignore":true}],[{"start":{"row":39,"column":30},"end":{"row":39,"column":31},"action":"insert","lines":["h"],"id":44,"ignore":true}],[{"start":{"row":39,"column":27},"end":{"row":39,"column":31},"action":"remove","lines":["usth"],"id":45,"ignore":true}],[{"start":{"row":39,"column":27},"end":{"row":39,"column":28},"action":"insert","lines":["a"],"id":46,"ignore":true}],[{"start":{"row":39,"column":28},"end":{"row":39,"column":29},"action":"insert","lines":["u"],"id":47,"ignore":true}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":30},"action":"insert","lines":["t"],"id":48,"ignore":true}],[{"start":{"row":39,"column":30},"end":{"row":39,"column":31},"action":"insert","lines":["h"],"id":49,"ignore":true}],[{"start":{"row":39,"column":27},"end":{"row":39,"column":31},"action":"remove","lines":["auth"],"id":50,"ignore":true},{"start":{"row":39,"column":27},"end":{"row":39,"column":28},"action":"insert","lines":["g"]}],[{"start":{"row":39,"column":28},"end":{"row":39,"column":29},"action":"insert","lines":["u"],"id":51,"ignore":true}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":30},"action":"insert","lines":["e"],"id":52,"ignore":true}],[{"start":{"row":39,"column":30},"end":{"row":39,"column":31},"action":"insert","lines":["s"],"id":53,"ignore":true}],[{"start":{"row":39,"column":31},"end":{"row":39,"column":32},"action":"insert","lines":["t"],"id":54,"ignore":true}]]},"timestamp":1589680058453}