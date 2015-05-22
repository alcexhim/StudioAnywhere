<?php
	use Phast\Data\Table;
	use Phast\Data\Column;
	
	$tables[] = new Table("Users", "user_", array
	(
		new Column("ID", "INT", null, null, false, true, true),
		new Column("UserName", "VARCHAR", 50),
		new Column("DisplayName", "VARCHAR", 50),
		new Column("PasswordHash", "VARCHAR", 256),
		new Column("PasswordSalt", "VARCHAR", 32)
	));
?>