<div class="modal fade" id="lacakModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabellacak"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <p>Detail Lokasi</p>
              <div class="garis"></div>
            </div>
            <div id="empty-state-modal-lacak" class="col-md-12">
              Belum ada status . . . 
            </div>
          </div>
          <div id="isi-modal-lacak">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-auto" >
                <p>Penerima</p>
                <p>Pengirim</p>
                <p>No. HP</p>
                <p>Alamat</p>
              </div>
              <div class="col-md-6 col-sm-6 col-auto">
                <p id="user"></p>
              </div>
            </div>
            <div class="garis"></div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-auto">          
                  <p>Status</p>
                  <span id="status"></span>
                </div>
                <div class="col-md-6 col-sm-6 col-auto">           
                  <p>Tanggal</p>
                  <span id="tgl"></span>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>