<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<style>
	.banner-img{
		width: 75px;
		object-fit:contain;
	}
		.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
    background-color: #84ac7c;
    color: #fff;
}.border-primary {
    border-color: black !important;
}.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color:  #84ac7c;
    border-color:black;
}.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
	object-fit: cover;box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
}.card-primary.card-outline {
    border-top: 3px solid white;
}th{
    font-family: 'Evogria', sans-serif;
}.text-sm .content-header h1 {
    font-size: 1.5rem;
    color: #84ac7c;
}.content-wrapper{
	background-color: #84ac7c;
}
</style>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
			<a style="background-color: #84ac7c;font-family: 'Evogria', sans-serif; border-color: #363e45; color: white"class="btn btn-block btn-sm btn-default btn-flat border-primary new_project" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="5%">
					<col width="20%">
					<col width="20%">
					<col width="15%">
					<col width="35%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Company</th>
						<th>Job Position</th>
						<th>Start</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM `work` order by `ended` desc");
					while($row= $qry->fetch_assoc()):
						$desc = html_entity_decode($row['description']);
						$dest = strip_tags($desc);
						$dest =stripslashes($desc);
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b class="truncate-1"><?php echo ucwords($row['company']) ?></b></td>
						<td><b class="truncate-1"><?php echo ucwords($row['position']) ?></b></td>
						<td><b class="truncate-1"><?php echo $row['started'] ?></b></td>
						<td><small class="truncate-1"><?php echo $desc ?></small></td>
						<td >
		                    <div class="btn-group">
		                        <a style="background-color: #84ac7c;font-family: 'Evogria', sans-serif; border-color: #363e45;" href="javascript:void(0)" data-id='<?php echo $row['id'] ?>' class="btn btn-primary btn-flat btn-sm manage_work">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-sm btn-flat delete_work" data-id="<?php echo $row['id'] ?>">
		                          <i class="fas fa-trash"></i>
		                        </button>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>

	$(document).ready(function(){
		$('.new_work').click(function(){
			location.href = _base_url_+"admin/?page=work/manage";
		})
		$('.manage_work').click(function(){
			location.href = _base_url_+"admin/?page=work/manage&id="+$(this).attr('data-id')
		})
		$('.delete_work').click(function(){
		_conf("Are you sure to delete this detail?","delete_work",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})
	function delete_work($id){
		start_loader()
		$.ajax({
			url:_base_url_+'classes/Content.php?f=work_delete',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					location.reload()
				}
			}
		})
	}
</script>