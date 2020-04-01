@if($include_scripts)
@include('fullcalendar::files')
@endif

<script>
    jQuery(document).ready(function () {
        var calEl = document.getElementById('{{$id}}');
        var calendar = new FullCalendar.Calendar(document.getElementById('{{$id}}')), {!! $options !!});
        calEl.calendar = calendar;
        if(calendars) {
            calendars['{{$id}}'] = calendar;
        }
        calendar.render();
    });    
</script>