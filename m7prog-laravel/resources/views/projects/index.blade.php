<x-master-layout>
@foreach( $projects as $project )
        <div class="max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                {{$project->title}}
                <br>
                <a href="{{route('project.show', $project)}}">Bekijk dit item</a>
            </h5>
        </div>
@endforeach 
@section('scripts')
    <script>
        console.log("Mijn script werkt");
    </script>
@endsection
</x-master-layout>