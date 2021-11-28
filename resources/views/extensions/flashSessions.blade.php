@if (session()->has('success'))
@include('extensions.message', ['type' => 'success', 'message' => session()->get('success')])
@endif
@if (session()->has('warning'))
@include('extensions.message', ['type' => 'warning', 'message' => session()->get('warning')])
@endif
