<h2>create</h2>
<?php echo form_open('profile/create')?>

<p>
    <label for ="title">First Name:</label>
    <input type="text" name="firstname" id="firstname">
    
</p>
<p>
    <label for ="content">Last Name:</label>
    <input type="text" name="lastname" id="lastname">
    
</p>

<p>
    <input type="submit">
</p>

<?php echo form_close();?>

<?php if(isset($records)) : foreach($records as $row) : ?>
<h2><?php echo $row->firstname; ?></h2>
<h2><?php echo $row->lastname; ?></h2>
<?php endforeach; ?>

<?php else : ?>

<h2> No records </h2>
<?php endif; ?>