<div class="dropdown-menu dropdown-menu-end me-1"> 
	<form action="{{ url('logout') }}" method="POST">
		@csrf
		<button type="submit" class="dropdown-item">
			<i class="fas fa-right-from-bracket" style="margin-right: 5px;"></i>
				Log Out
		</button>
	</form>
</div>