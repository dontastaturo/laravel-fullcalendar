@if($include_scripts)
@include('fullcalendar::files')
@endif

<script>
    /* jQuery(document).ready(function () {
        new FullCalendar.Calendar(document.getElementById('{{$id}}'), {!! $options !!}).render();
    }); */
    var fullcalendar_calendars = [];
    fullcalendar_calendars['{{$id}}'] = new FullCalendar.Calendar(document.getElementById('{{$id}}'), {!! $options !!}).render();
</script>