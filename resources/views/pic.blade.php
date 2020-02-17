<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('home') }}" method="get" class="form-horizontal">
          <div class="form-group row">
            <div class="col-lg-6">
              <label>Group by</label>
              <select name="groupby" id="groupby" class="form-control">
                <option value="">-- select --</option>
                <option value="year">Tahun</option>
                <option value="gender">Gender</option>
                <option value="profesi">Profesi</option>
              </select>
            </div>
            <div class="col-lg-6">
              <label>Chart type</label>
              <select name="type" id="type" class="form-control">
                <option value="">-- select --</option>
                <option value="pie">Pie</option>
                <option value="bar">Batang</option>
                <option value="line">Line</option>
                <option value="donut">Donuts</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-12">
              <button type="submit" class="btn-primary btn btn-md btn-block">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card oh ">
      <div class="card-body">
        {!!$chart->html()!!}
      </div>
    </div>
  </div>
</div>

</div>