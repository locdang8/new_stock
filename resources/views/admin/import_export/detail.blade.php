<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.head')
</head>
@include('admin.main')

<div class="container">
	<div class="container row rounded border p-4">
		<div class="col-2">
			<button class="btn btn-info" style="width: 70px">Edit</button>
			<button class="btn btn-danger">Unlink</button>
			<button class="btn btn-success mt-1" style="width: 70px">Done</button>
			<button class="btn btn-success mt-1" style="width: 70px">Sent</button>
		</div>
		<div class="col-4">
			<ul>
                <li>Name: {{ $ipeps->name }}</li>
                <li>Partner: {{ $ipeps->delivery_address }}</li>
                <li>Create date: {{ $ipeps->received_date }}</li>
                <li>Date Payment: {{ $ipeps->delivery_date }}</li>
			</ul>
		</div>
		<div class="col-4">
			<ul>
                <li>Payment Term: {{ $ipeps->partner_id }}</li>
			</ul>
		</div>
		<div class="col-2 align-self-center">
			<div class="bg-light rounded-circle d-flex justify-content-center py-3">{{$ipeps->status}}</div>
		</div>
	</div>
</div>
      </div>
    </section>
    <!-- /.content -->
  </div>
</div>
@include('admin.footer')
</body>
</html>