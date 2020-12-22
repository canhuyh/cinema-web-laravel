@extends('../layouts.master')

@section('content')

    <section class="content-header">
        <div class="container">
            <h2>Cập nhật suất chiếu</h2>
            <hr>
            <form method="POST" action="{{ url('quan-ly-suat-chieu') }}" class="was-validated d-flex flex-column input-form"
                id="form-cap-nhat-suat-chieu">
                @csrf
                <div class="form-group col-12">
                    <label for="suat-chieu">Suất chiếu:</label>
                    <input type="time" class="form-control" id="suat-chieu" name="suat-chieu" required>
                    <div class="invalid-feedback">Không được bỏ trống trường này</div>
                </div>

                <div class="check-group col-12">
                    <label for="check">Trạng thái:</label>
                    <div class="d-flex" id="check">
                        <div class="form-check">
                            <label class="form-check-label" for="radio-mo">
                                <input type="radio" class="form-check-input" id="radio-mo" name="trang-thai" value="1"
                                    checked>Mở
                            </label>
                            <div class="form-check">
                                <label class="form-check-label" for="radio-dong">
                                    <input type="radio" class="form-check-input" id="radio-dong" name="trang-thai"
                                        value="0">Đóng
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-submit-input-form btn-cap-nhat-suat-chieu"
                    data-toggle="modal">
                    <strong>Cập nhật</strong>
                </button>

                <div class="modal fade modal-cap-nhat-suat-chieu-question" id="popup-cap-nhat-question">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal body -->
                            <div class="modal-body text-center">
                                <i class="fas fa-info-circle" style="color: #dc3545;"></i>
                                Xác nhận cập nhật suất chiếu
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-warning btn-xac-nhan-cap-nhat-suat-chieu">
                                    <strong>Xác nhận</strong>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection