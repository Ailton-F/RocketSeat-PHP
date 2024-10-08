<div>
    <h1>Projetos</h1>
    <ul>
        @foreach($projects as $project)
            <li>
                <a href="{{route('projects.show', $project->id)}}">{{$project->title}}</a>
            </li>
        @endforeach
    </ul>
</div>
