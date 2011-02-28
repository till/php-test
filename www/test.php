<h2>/etc</h2>

<p>Readable? <?php var_dump(is_readable('/etc')); ?></p>

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

<h2>ls -lah /etc/</h2>
<pre>
<?php echo nl2br(shell_exec('ls -lah /etc/')); ?>
</pre>
