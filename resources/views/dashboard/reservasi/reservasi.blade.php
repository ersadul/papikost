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
        var days = ['Su','Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];
        var startDate = moment(mulai).format('YYYY-M-D');
        var endDate = moment(mulai).add(7, 'days').format('YYYY-M-D');

        console.log(startDate)
        console.log(endDate)

        $.ajax({
            url: '{{ route('dashboard.get.kamar') }}',
            data: {
                start: startDate,
                end: endDate
            },
            success: function(result){
                var data = JSON.parse(result);
                console.log(data);
                var events = [];
                $.each(data, function(index, event) {
                    var checkIn = new Date(event.check_in);
                    var checkOut = new Date();
                    checkOut.setDate(checkIn.getDate() + parseInt(event.lama_menginap));

                    events.push({
                        resourceId  : event.kamar_id,
                        start       : checkIn,
                        end         : checkOut,
                        title       : `-${days[checkOut.getDay()]} ${checkOut.getDate()} | ${event.nama}`,
                        allDay      : true,
                        url         : '/dashboard/list-reservasi/detail?invoice_id=' + event.id
                    });
                })

                $("#calendar").fullCalendar( 'removeEvents')
                $('#calendar').fullCalendar('addEventSource', events);
            },
            fail: function () {
                alert("something get wrong !");
            }
        })
    }
</script>
@endsection