@if ($message = Session::get('error'))
<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">   
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">  
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('success'))
<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
    <strong>{{ $message }}</strong>
</div>
@endif
