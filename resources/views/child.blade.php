<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<p>This is my body content.</p>
{{$user}}
<button type="button" class="btn btn-primary">Submit</button>
@push('scripts')
<script>
    var name = "Robin";
    console.log(name);

</script>
@endpush
@endsection
