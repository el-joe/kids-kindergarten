    <br><br><br>
    <?php use Illuminate\Support\Str; ?>
    <div class="container">
        <div class="row">
            @foreach($teachers as $teacher)
            <div class="col-sm-4 col-md-4">
                <div class="panel">
                  <div class="panel-heading">
                    <img src="../public{{ Storage::url($teacher->avatar) }}" class="img-thumbnail img-responsive" style="height: 250px;width: 300px">
                  </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 body1"><strong>{{ $teacher->name }}</strong></div>
                    </div>
                    <div class="col mx-auto text-center" style="font-size: 12px">-{{ $teacher->specialty }}-</div>
                    <br>
                    <div class="col">{{ Str::limit($teacher->description,50) }}</div>
                    <br>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
    </div>
    <br><br><br><br>