@if($include_scripts)
@include('fullcalendar::files')
@endif

<script>
    jQuery(document).ready(function () {
        new FullCalendar.Calendar(document.getElementById('{{$id}}'), {!! $options !!}).render();
    });    
    // fullcalendar_calendars.push(new FullCalendar.Calendar(document.getElementById('{{$id}}'), {!! $options !!}));
</script>