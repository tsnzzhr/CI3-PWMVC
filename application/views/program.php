<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('templates/header.php');
?>

<div class="container mt-3">
<div class="card-container">
		<div class="row w-100 row-cols-1 row-cols-md-3 g-3">
			<div class="col mx-auto">
				<div class="card p-3">
					<img src="<?= base_url();?>assets/img/jeep.png" class="card-img-top"/>
					<div class="card-body">
						<h2 class="card-title text-bold">Driver</h2>
						<p class="card-text text-black">
							Pengemudi pribadi untuk perjalanan jauh maupun dekat.
						</p>
					</div>
				</div>
			</div>
			<div class="col mx-auto">
				<div class="card p-3">
					<img src="<?= base_url();?>assets/img/candidate.png" class="card-img-top"/>
					<div class="card-body">
						<h2 class="card-title text-bold">Mentor Privat</h2>
						<p class="card-text">
							Membantu dalam meningkatkan skill akademik maupun non-akademik sesuai dengan bidangnya.
						</p>
					</div>
				</div>
			</div>
			<div class="col mx-auto">
				<div class="card p-3">
					<img src="<?= base_url();?>assets/img/old.png" class="card-img-top"/>
					<div class="card-body">
						<h2 class="card-title text-bold">Perawat Lansia</h2>
						<p class="card-text">Merawat dan mendampingi lansia baik dalam keadaan sakit atau membutuhkan bantuan karena disfungsi.</p>
					</div>
				</div>
			</div>
			<div class="col mx-auto">
				<div class="card p-3">
					<img src="<?= base_url();?>assets/img/friend.png" class="card-img-top"/>
					<div class="card-body">
						<h2 class="card-title text-bold">Asisten Difabel</h2>
						<p class="card-text">
							Membantu difabel untuk mengembangkan kecakapannya dalam berkomunikasi dan bersosial.
						</p>
					</div>
				</div>
			</div>
			<div class="col mx-auto">
				<div class="card p-3">
					<img src="<?= base_url();?>assets/img/worker.png" class="card-img-top"/>
					<div class="card-body">
						<h2 class="card-title text-bold">Sekretaris Pribadi</h2>
						<p class="card-text">
							Memudahkan manajemen pekerjaan dan arsip perkantoran maupun bisnis.
						</p>
					</div>
				</div>
			</div>
			<div class="col mx-auto">
				<div class="card p-3">
					<img src="<?= base_url();?>assets/img/baby.png" class="card-img-top"/>
					<div class="card-body">
						<h2 class="card-title text-bold">Babysitter</h2>
						<p class="card-text">
							Meringankan pekerjaan bunda dengan terbantunya dalam merawat bayi dan balita.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>

<?php

require('templates/footer.php');
?>

</html>