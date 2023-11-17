@extends('Layouts.app')
@section('title', ' workspace')

@section('content')
    <h1>Workspace</h1>

    <a href="{{ route('workspace.create') }}" class="btn btn-primary m-2 align-self-start">
        Create a workspace
    </a>


    <table class="my-4 border border-primary rounded">
        <thead class="border-bottom rounded">
            <tr>
                <th class="p-2 border border-primary">workspace name</th>
                <th class="p-2 border border-primary">api token name</th>
                
              
            </tr>
        </thead>
        <tbody>
            @foreach($data AS $s)
            <tr class="position-relative border-bottom">
                <td class="p-2">
                    {{-- <a href="{{ route('workspace.edit', $s->id) }}" class="position-absolute top-0 bottom-0 end-0 start-0"></a> --}}
                    {{ $s->title }}
                </td>
                <td class="p-2">
                    {{ $s->description }}
                </td>

                <td class="p-2">
                    <a class="btn btn-primary" href="{{ route('workspace.show', $s->id) }}">
                        Open
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
