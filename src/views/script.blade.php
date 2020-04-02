@if($include_scripts)
@include('fullcalendar::files')
@endif

<script>
    jQuery(document).ready(function () {
        var calendar = new FullCalendar.Calendar(document.getElementById('{{$id}}'), {!! $options !!});
        if(calendars) {
            calendars['{{$id}}'] = calendar;
        }
        // calendar.render();
    });    
</script>