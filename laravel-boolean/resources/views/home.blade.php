@extends('layouts.main-layout')

@section('content')

<div class="paste-container centratura">
  <h2>LE LUNGHE</h2>
  <div class="pasta-lunga">
      @foreach ($data as $pasta => $value)
        @if ($value["tipo"] == "lunga")
           <div class="">
             <img src="{{$value['src']}}" alt="">
           </div>
        @endif
      @endforeach
  </div>
  <h2>LE CORTE</h2>
  <div class="pasta-corta">
    @foreach ($data as $pasta => $value)
      @if ($value["tipo"] == "corta")
         <div class="">
           <img src="{{$value['src']}}" alt="">
         </div>
      @endif
    @endforeach
  </div>
  <h2>LE CORTISSIME</h2>
  <div class="pasta-cortissima">
    @foreach ($data as $pasta => $value)
      @if ($value["tipo"] == "cortissima")
         <div class="">
           <img src="{{$value['src']}}" alt="">
         </div>
      @endif
    @endforeach
  </div>
</div>

@endsection
