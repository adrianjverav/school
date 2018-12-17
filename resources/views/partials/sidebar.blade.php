<div class="scroll-sidebar">
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            @switch(auth()->user()->role)
                @case('admin')
                    @include('admin.options')
                @break
                @case('student')
                    @include('student.options')
                @break
                @case('teacher')
                    @include('teacher.options')
                @break
            @endswitch
        </ul>
    </nav>
</div>
