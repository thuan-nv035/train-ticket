<div class="modal fade" id="modal-view-pass">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Danh Sách Khách Hàng</h4>
			</div>
			<div class="modal-body">
			<center>
				<strong>Đặt Bởi: </strong><span id="book-by"></span> <br />
				<strong>Ngày Khởi Hành: </strong><span id="date"></span> <br />
				<strong>Số Điện Thoại: </strong><span id="contact"></span> <br />
				<strong>Địa Chỉ: </strong><span id="address"></span><br />
			</center>
				<br />
				<div id="passenger-list">
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="acceptPayment();" class="btn btn-primary accept-pay">Tính
				<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
				</button>

				<button type="button" onclick="addTransaction();" class="btn btn-success accept-pay">Chấp Nhận Thanh Toán
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				</button>
			</div>
		</div>
	</div>
</div>