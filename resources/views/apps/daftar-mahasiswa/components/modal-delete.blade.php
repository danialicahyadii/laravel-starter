<!-- Modal -->
<div class="modal fade" id="deleteModal{{ $row->id }}" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body text-center p-5">
            <lord-icon
                src="https://cdn.lordicon.com/xekbkxul.json"
                trigger="loop"
                delay="500"
                colors="primary:#121331,secondary:#e83a30,tertiary:#646e78,quaternary:#ebe6ef"
                style="width:100px;height:100px">
            </lord-icon>
            <div class="mt-4">
                <h4 class="mb-3">Apakah Anda yakin akan hapus ?</h4>
                <p class="text-muted mb-4"> Data ini akan dihapus dari sistem ini.</p>
                <div class="hstack gap-2 justify-content-center">
                    <form method="POST" action="{{ url('users', $row->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <div class="form-group">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

{{-- <div id="deleteModal{{ $row->id }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center p-5">
                <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                </lord-icon>
                <div class="mt-4">
                    <h4 class="mb-3">Apakah Anda yakin akan hapus ?</h4>
                    <p class="text-muted mb-4"> Data ini akan dihapus dari sistem ini.</p>
                    <div class="hstack gap-2 justify-content-center">
                        <form method="POST" action="{{ url('users', $row->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div class="form-group">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --> --}}
