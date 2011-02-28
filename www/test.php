<h2>/etc</h2>
<ul>
<?php
foreach (glob('/etc/*') as $item) {
	echo "<li>{$item}</li>";
}
?>
</ul>

<h2>/mnt/orchestra-virtualized/home/</h2>
<ul>
<?php
foreach (glob('/mnt/orchestra-virtualized/home/*') as $item) {
    echo "<li>{$item}</li>";
}
?>
</ul>
