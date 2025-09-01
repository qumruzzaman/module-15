@extends('layouts.master')
@section('title', 'Submission Confirmation')
@section('content')
<div class="card">
    <div class="card-header">Submission Confirmation</div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="card-body">
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Message:</strong> {{ $submission->message }}</p>
        @if ($submission->file_path)
            <p><strong>Uploaded File:</strong> <a href="{{ Storage::url($submission->file_path) }}" target="_blank">View File</a></p>
        @endif
        <a href="{{ route('contact') }}" class="btn btn-primary">Back to Contact</a>
    </div>
</div>
@endsection
