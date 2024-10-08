<div>
    @foreach($projects as $project)
        <li>
            <a href="{{route('projects.show', $project->id)}}">
                <x-simple-card :$project/>
            </a>
        </li>
    @endforeach
</div>
