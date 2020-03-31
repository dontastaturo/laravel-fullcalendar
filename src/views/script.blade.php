@if($include_scripts)
@include('fullcalendar::files')
@endif

<script type="text/javascript">
    jQuery(document).ready(function () {
        var calendar_{{$id}} = new FullCalendar.Calendar(document.getElementById('{{$id}}'), {!! $options !!}).render().refetchEvents();
        console.log('ready');
    });
</script>