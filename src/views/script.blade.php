@if($include_scripts)
@include('fullcalendar::files')
@endif

<script>
    jQuery(document).ready(function () {
        var calEl = document.getElementById('{{$id}}')
        var calendar = new FullCalendar.Calendar(calEl), {!! $options !!}).render();
        calEl.calendar = calendar;
        if(calendars) {
            calendars['{{$id}}'] = calendar;
        }
    });    
</script>