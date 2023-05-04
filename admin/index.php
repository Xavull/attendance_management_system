<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style type="text/css">
		/* Style for the sidebar */
		.sidebar {
		  height: 100%;
		  width: 200px;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  padding-top: 20px;
		}

		/* Style for the sidebar links */
		.sidebar a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 20px;
		  color: #818181;
		  display: block;
		}

		/* Style for the active sidebar link */
		.sidebar a.active {
		  background-color: #4CAF50;
		  color: white;
		}

		/* Style for the sidebar on hover */
		.sidebar a:hover:not(.active) {
		  background-color: #555;
		  color: white;
		}

		/* Style for the main content */
		.main {
		  margin-left: 200px; /* Same width as the sidebar */
		  padding: 0px 10px;
		}
	</style>
</head>
<body>
	<!-- Sidebar -->
	<div class="sidebar">
		<a href="#" class="active">Clock In</a>
		<a href="#">Leave Management</a>
		<a href="#">Task Management</a>
	</div>

	<!-- Main content -->
	<div class="main">
		<h1>Dashboard</h1>

		<!-- Clock In -->
		<?php
			// Code for clock in functionality
			// ...

			echo "<h2>Clock In</h2>";
			echo "<p>Current time: " . date("h:i:sa") . "</p>";
			echo "<button>Clock In</button>";
		?>

		<!-- Leave Management -->
		<?php
			// Code for leave management functionality
			// ...

			echo "<h2>Leave Management</h2>";
			echo "<p>You have no pending leave requests.</p>";
			echo "<button>Request Leave</button>";
		?>

		<!-- Task Management -->
		<?php
			// Code for task management functionality
			// ...

			echo "<h2>Task Management</h2>";
			echo "<p>You have no pending tasks.</p>";
			echo "<button>Add Task</button>";
		?>
	</div>
</body>
</html>
