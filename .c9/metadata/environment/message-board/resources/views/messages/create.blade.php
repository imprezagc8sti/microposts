{"filter":false,"title":"create.blade.php","tooltip":"/message-board/resources/views/messages/create.blade.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":0},"end":{"row":3,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"start","mode":"ace/mode/php"}},"hash":"e7ac5a07fc7f2395c73ccb6221ec805b5eb52b74","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- ここにページ毎のコンテンツを書く -->","","@endsection"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","<!-- ここにページ毎のコンテンツを書く -->","","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- ここにページ毎のコンテンツを書く -->","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","<!-- ここにページ毎のコンテンツを書く -->","","@endsection"],"id":3},{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>メッセージ新規作成ページ</h1>","","    {!! Form::model($message, ['route' => 'messages.store']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('投稿') !!}","","    {!! Form::close() !!}","","@endsection"]}]]},"timestamp":1589213569948}