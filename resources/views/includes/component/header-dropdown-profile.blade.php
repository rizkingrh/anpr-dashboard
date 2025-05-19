<div class="dropdown-menu dropdown-menu-end me-1">
	<a href="javascript:;" class="dropdown-item">Setting</a>
	<div class="dropdown-divider"></div>
	<form action="/logout" method="POST">
		@csrf
		<button type="submit" class="dropdown-item">
			<i class="fas fa-right-from-bracket" style="margin-right: 5px;"></i>
				Log Out
		</button>
	</form>
</div>