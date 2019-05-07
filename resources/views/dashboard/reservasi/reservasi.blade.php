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
          field: 'title'
        }
      ],
      resources: [
        { id: '1', title: 'Kamar 1'},
        { id: '2', title: 'Kamar 2'},
        { id: '3', title: 'Kamar 3'},
        { id: '4', title: 'Kamar 4'},
        { id: '5', title: 'Kamar 5'},
        { id: '6', title: 'Kamar 6'},
        { id: '7', title: 'Kamar 7'},
        { id: '8', title: 'Kamar 8'},
        { id: '9', title: 'Kamar 9'},
        { id: '10', title: 'Kamar 10'},
        { id: '11', title: 'Kamar 11'},
        { id: '12', title: 'Kamar 12'},
        { id: '13', title: 'Kamar 13'},
        { id: '14', title: 'Kamar 14'},
        { id: '15', title: 'Kamar 15'},
        { id: '16', title: 'Kamar 16'},
        { id: '17', title: 'Kamar 17'},
        { id: '18', title: 'Kamar 18'}
      ],
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
            { resourceId: '2', start: '2019-05-01', end: '2019-05-02', title: 'event 1', url: 'https://www.google.com/'}
        ]
        $('#calendar').fullCalendar('renderEvents', events);
    }
</script>
@endsection