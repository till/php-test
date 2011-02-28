<h2>/etc</h2>

<p>Readable? <?php var_dump(is_readable('/etc')); ?></p>

<h2>/mnt/orchestra-virtualized/home/</h2>
<pre>
<?php echo nl2br(shell_exec('ls -lah /mnt/orchestra-virtualized/home')); ?>
</pre>

<h2>ls -lah /etc/init.d</h2>
<pre>
<?php echo nl2br(shell_exec('ls -lah /etc/init.d')); ?>
</pre>

<h2>passwd</h2>
<pre>
	<?php echo nl2br(shell_exec('cat /etc/passwd')); ?>
</pre>
