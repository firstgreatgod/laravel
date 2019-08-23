@extends('layout')

@section('content')
    <h1 class="title">Create a new Project </h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div class="field">
            <label for="title" class="label">Project title</label>

            <div class="control">
                    <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger': '' }}" value="{{ old('title') }}" required>
            </div>

        </div>

        <div class="field">
            <label for="decription" class="label">Project description</label>
            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger': '' }}" required>{{ old('description') }}</textarea>
            </div>

        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>

        </div>

        @include('errors')
    </form>
@endsection
