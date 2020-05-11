<input type="hidden" class="no_sekarang" value="0">
<p style="display: none;" class="total" value="<?= $total_soal ?>"><?= $total_soal ?></p>
	<!-- number scroll muncul hanya saat di device handphone -->
	<div class="container-fluid hidden-lg hidden-md hidden-sm num-scroll-xs">
		<div class="scrollmenu" id="style-1">
			
			<?php foreach ($jumlah as $sl) : ?>
				<button class="btn-arrow cs-btn-num-soal no"><?= $sl->nomor_soal ?></button>
			<?php endforeach; ?>
			
		</div>
	</div>
	<!-- number scroll muncul hanya saat di device handphone -->

	<div class="container-fluid box-soal">
		
		<div class="col-md-8 col-sm-8">
			<!-- top-sec-soal -->
			<div class="top-section-soal">
				<p class="sub-sec-soal">
					<span class="word-soal">Soal Ke</span>&nbsp;
					<span class="nomor-soal"></span>
					<span class="coutdown">
						<span id="day"></span>
						<span id="hour"></span>&nbsp;<span>:</span>
						<span id="minute"></span>&nbsp;<span>:</span>
						<span id="second"></span> 
						<span id="demo"></span> 
					</span>
				</p>	
			</div>
			<!-- top-sec-soal  -->

			<!-- middle-sec-soal -->
			<div class="panel panel-body isi-soal">

				<!-- isi soal -->
				<div class="sub-isi-soal" id="hasil">
					
				</div>
				<!-- isi-soal -->

				<!-- daftar-jawaban-soal -->
				<div class="funkyradio">
					<!-- loop -->
					<div class="funkyradio-default">			
						<input type="radio" name="radio" id="radio1" value="A">	
						<label for="radio1" class="radio-label">
							<span class="alphabet">A</span>
							<span class="isi-jawaban a"></span>
						</label>
					</div>
					<!-- loop -->
					<div class="funkyradio-default">			
						<input type="radio" name="radio" id="radio2" value="B">	
						<label for="radio2" class="radio-label">
							<span class="alphabet">B</span>
							<span class="isi-jawaban b"></span>
						</label>
					</div>
					<!-- loop -->
					<div class="funkyradio-default">			
						<input type="radio" name="radio" id="radio3" value="C">	
						<label for="radio3" class="radio-label">
							<span class="alphabet">C</span>
							<span class="isi-jawaban c"></span>
						</label>
					</div>
					<!-- loop -->
					<div class="funkyradio-default">			
						<input type="radio" name="radio" id="radio4" value="D">	
						<label for="radio4" class="radio-label">
							<span class="alphabet">D</span>
							<span class="isi-jawaban isi_d"></span>
						</label>
					</div>
					<!-- loop -->
					<!-- js ketika radio button di klik -->
					<script>
					$(document).ready(function () {
						$('#radio1').click(function(){
							var jawaban = $('#radio1').val();
							$('#jwb').val(jawaban);
						});
						$('#radio2').click(function(){
							var jawaban = $('#radio2').val();
							$('#jwb').val(jawaban);
						});
						$('#radio3').click(function(){
							var jawaban = $('#radio3').val();
							$('#jwb').val(jawaban);
						});
						$('#radio4').click(function(){
							var jawaban = $('#radio4').val();
							$('#jwb').val(jawaban);
						});
					});
					</script>
					<p>Jawaban Anda <input type="text" id="jwb" value=""> *Buat Contoh aja ,Ambil Value nya dari input yg idnya jwb</p>
				</div>
				<!-- daftar-jawaban-soal -->
			</div>
			<!-- middle-sec-soal -->

			<!-- bottom-sec-soal -->
			<div class="bottom-section-soal no-mt">
				<button class="btn-arrow prevs">
					<i class="fas fa-chevron-left"></i>&nbsp;<span>Prev</span>
				</button>

				<button class="btn-arrow next">
					<span>Next</span>&nbsp;<i class="fas fa-chevron-right"></i>
				</button>

				<button class="btn-arrow btn-akhiri-ujian" class="button-pilihan" data-toggle="modal" data-target=".bs-example-modal-sm">
					<i class="far fa-stop-circle"></i>&nbsp;<span>Akhiri Ujian</span>
				</button>
			</div>
			<!-- bottom-sec-soal -->
		</div>
		
		<!-- navigasi-soal -->
		<div class="col-md-4 col-sm-4 hidden-xs">
			<div class="top-section-soal num-soal">
				<p class="sub-sec-soal title-nav-soal">Navigasi Soal</p>	
			</div>
			<div class="panel panel-body isi-soal cs-panel-num-soal">	
				<div class="sub-isi-soal">

					<?php foreach ($jumlah as $sl) : ?> 				
						<button class="btn-arrow cs-btn-num-soal no nos-<?= $sl->nomor_soal ?>"><?= $sl->nomor_soal ?></button>
					<?php endforeach; ?>

					<!-- button hijau jika jawaban sudah terisi -->
					<!-- <button class="btn-arrow cs-btn-num-soal right-btn-num-soal">
						
					</button> -->
					<!-- button hijau jika jawaban sudah terisi -->

				</div>
			</div>
		</div>
		<!-- navigasi-soal -->
	</div>
	
	<script>
		function ubah_r(){
			
			if ( $('#jwb').val() == "A" ){
				$( ".a" ).addClass('isi-sebelumnya');
				$( ".b" ).removeClass('isi-sebelumnya');
				$( ".c" ).removeClass('isi-sebelumnya');
				$( ".isi_d" ).removeClass('isi-sebelumnya');
			}else if( $('#jwb').val() == "B" ){
				$( ".a" ).removeClass('isi-sebelumnya');
				$( ".b" ).addClass('isi-sebelumnya');
				$( ".c" ).removeClass('isi-sebelumnya');
				$( ".isi_d" ).removeClass('isi-sebelumnya');
			}else if( $('#jwb').val() == "C" ){
				$( ".a" ).removeClass('isi-sebelumnya');
				$( ".b" ).removeClass('isi-sebelumnya');
				$( ".c" ).addClass('isi-sebelumnya');
				$( ".isi_d" ).removeClass('isi-sebelumnya');
			}else if( $('#jwb').val() == "D" ){
				$( ".a" ).removeClass('isi-sebelumnya');
				$( ".b" ).removeClass('isi-sebelumnya');
				$( ".c" ).removeClass('isi-sebelumnya');
				$( ".isi_d" ).addClass('isi-sebelumnya');
			}else{
				$( ".a" ).removeClass('isi-sebelumnya');
				$( ".b" ).removeClass('isi-sebelumnya');
				$( ".c" ).removeClass('isi-sebelumnya');
				$( ".isi_d" ).removeClass('isi-sebelumnya');
			}

			$( "#radio1" ).attr("checked",false);
			$( "#radio2" ).attr("checked",false);
			$( "#radio3" ).attr("checked",false);
			$( "#radio4" ).attr("checked",false);

		}
	</script>

	<!-- load soal awal -->
	<script>
		$(document).ready(function () {

			load_awal();

			function load_awal() {
				
				ubah_r();

				$.ajax({
					type: 'POST',
					url: '<?= base_url('index.php/Siswa/ujian') ?>',
					data: {
						ids: 1
					},
					success: function (respon) {
						
						$('.no').removeClass('right-btn-num-soal');
						$('.nos-1').addClass('right-btn-num-soal');

						$('.no_sekarang').val(1);
						$('.nomor-soal').text(1);
						var dt = JSON.parse(respon);
						$('#hasil').html(dt.soal);
						$('.a').html(dt.a);
						$('.b').html(dt.b);
						$('.c').html(dt.c);
						$('.isi_d').html(dt.d);
					}
				});
			}

		});
	</script>

	<!-- klik nomor soal -->
	<script type="text/javascript">
            $(document).ready(function () {
                $('.no').click(function () {
                    
					var nomor = $(this).text();

					$.ajax({
                            type: 'POST',
                            url: '<?= base_url('index.php/Siswa/sesi_jawaban') ?>',
                            data: { 
								ids: nomor,
								id: $('.no_sekarang').val(),
								jwb_s: $('#jwb').val() 
							},
                            success: function (respon) {
                                if (respon == "A"){
									$('#jwb').val(respon);
								}else if (respon == "B"){
									$('#jwb').val(respon);
								}else if (respon == "C"){
									$('#jwb').val(respon);
								}else if (respon == "D"){
									$('#jwb').val(respon);
								}else{
									$('#jwb').val('');
								}
								ubah_r();
                            }
                        });

					$('.no_sekarang').val(nomor);
					$('.nomor-soal').text(nomor);
					$('.no').removeClass('right-btn-num-soal');
					$(this).addClass('right-btn-num-soal');

                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url('index.php/Siswa/ujian') ?>',
                        data: { ids: nomor },
                        success: function (respon) {
                            var dt = JSON.parse(respon);
                                $('#hasil').html(dt.soal);
								$('.a').html(dt.a);
								$('.b').html(dt.b);
								$('.c').html(dt.c);
								$('.isi_d').html(dt.d);
                        }
                    });
                });
            });
        </script>

		<!-- klik tombol next -->
        <script type="text/javascript">
            $(document).ready(function () {
                $('.next').click(function () {

                    var total_soal = $('.total').text();
                    var nomor = parseInt($('.no_sekarang').val()) + parseInt(1);
                    
                    if(parseInt(nomor) > parseInt(total_soal)){
                        alert('Soal Sudah Habis');
                    }else{

						$.ajax({
                            type: 'POST',
                            url: '<?= base_url('index.php/Siswa/sesi_jawaban') ?>',
                            data: { 
								ids: nomor,
								id: $('.no_sekarang').val(),
								jwb_s: $('#jwb').val() 
							},
                            success: function (respon) {
                                if (respon == "A"){
									$('#jwb').val(respon);
								}else if (respon == "B"){
									$('#jwb').val(respon);
								}else if (respon == "C"){
									$('#jwb').val(respon);
								}else if (respon == "D"){
									$('#jwb').val(respon);
								}else{
									$('#jwb').val('');
								}
								ubah_r();
                            }
                        });

                        $('.no_sekarang').val(nomor);
						$('.nomor-soal').text(nomor);

						$('.no').removeClass('right-btn-num-soal');
						$('.nos-'+nomor).addClass('right-btn-num-soal');

                        $.ajax({
                            type: 'POST',
                            url: '<?= base_url('index.php/Siswa/ujian') ?>',
                            data: { ids: nomor },
                            success: function (respon) {
                                var dt = JSON.parse(respon);
                                $('#hasil').html(dt.soal);
								$('.a').html(dt.a);
								$('.b').html(dt.b);
								$('.c').html(dt.c);
								$('.isi_d').html(dt.d);
                            }
                        });

                    }
                    
                });
            });
        </script>

		<!-- klik tombol prev(sebelumnya) -->
		<script type="text/javascript">
            $(document).ready(function () {
                $('.prevs').click(function () {

                    var total_soal = $('.total').text();
                    var nomor = parseInt($('.no_sekarang').val()) - parseInt(1);
                    
                    if(parseInt(nomor) < parseInt(1)){
                        alert('Soal Awal');
                    }else{

						$.ajax({
                            type: 'POST',
                            url: '<?= base_url('index.php/Siswa/sesi_jawaban') ?>',
                            data: { 
								ids: nomor,
								id: $('.no_sekarang').val(),
								jwb_s: $('#jwb').val() 
							},
                            success: function (respon) {
                                if (respon == "A"){
									$('#jwb').val(respon);
								}else if (respon == "B"){
									$('#jwb').val(respon);
								}else if (respon == "C"){
									$('#jwb').val(respon);
								}else if (respon == "D"){
									$('#jwb').val(respon);
								}else{
									$('#jwb').val('');
								}
								ubah_r();
                            }
                        });

                        $('.no_sekarang').val(nomor);
						$('.nomor-soal').text(nomor);

						$('.no').removeClass('right-btn-num-soal');
						$('.nos-'+nomor).addClass('right-btn-num-soal');

                        $.ajax({
                            type: 'POST',
                            url: '<?= base_url('index.php/Siswa/ujian') ?>',
                            data: { ids: nomor },
                            success: function (respon) {
								var dt = JSON.parse(respon);
                                $('#hasil').html(dt.soal);
								$('.a').html(dt.a);
								$('.b').html(dt.b);
								$('.c').html(dt.c);
								$('.isi_d').html(dt.d);
                            }
                        });

                    }
                    
                });
            });
        </script>
