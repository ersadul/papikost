@extends('layouts.dashboard')
@section('reservasi')
active
@endsection
@section('subreservasi')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Reservasi
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reservasi</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <p>Reservasi</p>
            <div id="calendar"></div>
        </div>
    </div>
    <form action="{{ route('dashboard.form.reservasi') }}" method="post" id="form">
        @csrf
        <input type="hidden" name="date" id="date">
        <input type="hidden" name="room" id="room">
    </form>
</section>
@endsection
@section('script')
<script>
    var kamar = {!! json_encode($kamar->toArray()) !!};
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
      },
      defaultView: 'customWeek',
      views: {
          customWeek: {
              type: 'timeline',
              duration: { weeks: 1 },
              slotDuration: {days: 1},
              buttonText: 'Custom Week'
          }
      },
      resourceColumns: [
        {
          labelText: 'Kamar',
          width: '10%',
          field: 'nama_kamar'
        }
      ],
      resources: kamar,
    dayClick:
        function(date, jsEvent, view, resourceObj) {
            if (moment().format('YYYY-MM-DD') === date.format('YYYY-MM-DD') || date.isAfter(moment())) {
                $("#date").val(date.format());
                $("#room").val(resourceObj.id);
                $("#form").submit();
            }
        }
    })
    var mulai = $('#calendar').fullCalendar('getView').start.format('YYYY-MM-DD')
    getEvents(mulai);

    $('.fc-prev-button').click(function(){
        var mulai = $('#calendar').fullCalendar('getView').start.format('YYYY-MM-DD')
        getEvents(mulai);
    });
    $('.fc-next-button').click(function(){
        var mulai = $('#calendar').fullCalendar('getView').start.format('YYYY-MM-DD')
        getEvents(mulai);
    });
    function getEvents(mulai){
        //ambil event dari tanggal mulai + 6 hari
        events = [
            { resourceId: '2', start: '2019-05-01', end: '2019-05-02', title: 'event 1', url: 'https://www.google.com/'},
            { resourceId: '2', start: '2019-05-09', end: '2019-05-10', title: 'event 2', url: 'https://www.google.com/'},
            { resourceId: '4', start: '2019-05-10', end: '2019-05-12', title: 'event 3', url: 'https://www.google.com/'},
            { resourceId: '7', start: '2019-05-10', end: '2019-05-11', title: 'event 4', url: 'https://www.google.com/'}
        ]
        $('#calendar').fullCalendar('renderEvents', events);
    }
</script>
@endsection