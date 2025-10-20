<div>
    <h1 class="text-center text-7xl font-bold">All Courses</h1>
    <div class="grid grid-cols-3 gap-5 p-4">
        @foreach ($courses as $course)
        <livewire:course.item :course="$course" :key="$course->id" />
        @endforeach
    </div>
</div>
