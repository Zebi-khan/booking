<div class="side-content-wrap">
	<div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
		<ul class="navigation-left">
			<li class="nav-item">
				<a class="nav-item-hold" href="/admin/">
					<i class="nav-icon i-Bar-Chart"></i>
					<span class="nav-text">Dashboard</span>
				</a>
				<div class="triangle"></div>
			</li>

			<li class="nav-item" data-item="listings">
				<a class="nav-item-hold" href="#">
					<i class="nav-icon i-Suitcase"></i>
					<span class="nav-text">Listings</span>
				</a>
				<div class="triangle"></div>
			</li>

			<li class="nav-item" data-item="bookings">
				<a class="nav-item-hold" href="#">
					<i class="nav-icon i-Library"></i>
					<span class="nav-text">Bookings</span>
				</a>
				<div class="triangle"></div>
			</li>

			<li class="nav-item" data-item="payments">
				<a class="nav-item-hold" href="#">
					<i class="nav-icon i-Dollar"></i>
					<span class="nav-text">Payments</span>
				</a>
				<div class="triangle"></div>
			</li>

			<li class="nav-item" data-item="users">
				<a class="nav-item-hold" href="#">
					<i class="nav-icon i-Add-User"></i>
					<span class="nav-text">Users</span>
				</a>
				<div class="triangle"></div>
			</li>

			<li class="nav-item">
				<a class="nav-item-hold" href="/admin/setting.php">
					<i class="nav-icon i-Settings-Window"></i>
					<span class="nav-text">Settings</span>
				</a>
				<div class="triangle"></div>
			</li>
		</ul>
	</div>

	<div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
		<!-- listings -->
		<ul class="childNav" data-parent="listings">
			<li class="nav-item">
				<a href="/admin/listing/create.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Add new</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/listing/all.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">View all</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/listing/type/all.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Types</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/listing/category/all.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Categories</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/listing/tag/all.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Tags</span>
				</a>
			</li>
		</ul>

		<!-- bookings -->
		<ul class="childNav" data-parent="bookings">
			<li class="nav-item">
				<a href="/admin/booking/create.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Create new</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/booking/all.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">View all</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/booking/all.php?status=New">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">New</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/booking/all.php?status=Pending">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Pending</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/booking/all.php?status=Completed">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Completed</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/booking/all.php?status=Cancelled">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Cancelled</span>
				</a>
			</li>
		</ul>

		<!-- payments -->
		<ul class="childNav" data-parent="payments">
			<li class="nav-item">
				<a href="/admin/payment/all.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">View all</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/payment/all.php?status=pending">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Pending</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/payment/all.php?status=completed">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Completed</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/payment/all.php?status=cancelled">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Cancelled</span>
				</a>
			</li>
		</ul>

		<!-- users -->
		<ul class="childNav" data-parent="users">
			<li class="nav-item">
				<a href="/admin/user/create.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Add new</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/user/all.php">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">View all</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/user/all.php?status=admin">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Admins</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="/admin/user/all.php?status=customer">
					<i class="nav-icon i-Arrow-Next"></i>
					<span class="item-name">Customers</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="sidebar-overlay"></div>
</div>