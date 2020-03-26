@if($include_scripts)
@include('fullcalendar::files')
@endif

<script type="text/javascript">
    jQuery(document).ready(function () {
        new FullCalendar.Calendar(document.getElementById('{{$id}}'), {!! $options !!});        
    });
</script>