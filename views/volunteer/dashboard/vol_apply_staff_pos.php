

<?php $page = 'vol_apply_pos';
include "vol_dash_header.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>

<div class="grid-container">

<div class="container">
		<div class="contact-box">
			<div class="left" > <img src="<?= URL ?>public/images/attend.png" alt="img" width="500" height="500"/> </div>
			<div class="right">
				<h2> Applying to Join as a Staff Member</h2>
			
			
			
			
			</div>

     


  
    <button>Show Alert</button>
    <div class="alert hide">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Disclaimer : I obey to the code of conduts of the organization!
        <a href="<?= URL ?>Volunteer/volviewevent" class="serv-btn"  >Agree & Apply</a>
        
        </span>
        <div class="close-btn">
          <span class="fas fa-times"></span>
        </div>
</div>
<script src="<?= URL ?>public/js/vol-notification.js"></script>

		</div>
	</div>

<script type="text/javascript">

function validation() {
  Swal.fire('Any fool can use a computer')
}


</script>





<?php include "vol_dash_footer.php" ?>
</html>