<div class="container-fluid">
    <div class="alert alert-success" role="alert">
      <i class="fas fa-tachometer-alt"></i>Dashboard
    </div>

    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Selamat Datang</h4>
      <p>Selamat datang di sistem informasi akademik universitas ahmad dahlan</p>
      <hr>
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-cogs"></i>  control panel
        </button>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i>  control panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4 text-info text-center">
                <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">KRS</p></a>
                <i class="fas fa-3x fa-edit"></i>
            </div>

            <div class="col-md-4 text-info text-center">
                <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">KHS</p></a>
                <i class="fas fa-3x fa-fw fa-file-alt"></i>
            </div>

            <div class="col-md-4 text-info text-center">
                <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">Transkip</p></a>
                <i class="fas fa-3x fa-print"></i>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
