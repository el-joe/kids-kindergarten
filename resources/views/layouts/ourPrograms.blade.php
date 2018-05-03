    <br><br><br>
    <?php use Illuminate\Support\Str; ?>
    <div class="container">
        <div class="row">
            @foreach($classes as $class)
            <div class="col-sm-4 col-md-4" style="margin: 5px 0">
                <div class="panel">
                  <div class="panel-heading">
                    <img style="height: 220px;" src="../public{{ Storage::url($class->avatar) }}" class="img-thumbnail img-responsive">
                  </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8 body1"><strong>{{ $class->name }}</strong></div>
                        <div class="col-sm-4 body2"><strong>{{ $class->price }}$</strong></div>
                    </div>
                    <div class="col" style="font-size: 12px">Open Class : {{ $class['time-from'] }} - {{ $class['time-to'] }}</div>
                    <br>
                    <div class="col-sm-12">{{ Str::limit($class->description,90) }}</div>
                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-sm-6 panel-footer1"><b>Age {{ $class['children-age'] }} years</b></div>
                            <div class="col-sm-6 panel-footer2"><b>Class Size {{ $class['class-size'] }}</b></div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <?php echo $ourProgramsSubmit; ?>
    </div>
    <br><br><br>