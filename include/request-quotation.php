<?php include("header.php"); ?>
</head>

<body>

<?php include("head.php"); ?>

<section id="breadcrumbs">
	<div class="container">
    	<div class="row">
        	<ul class="breadcrumbs">
            	<li class="first"><a href="index.php" class="bc-home">Home</a></li>
                <li class="f-pb">Request Quotation</li>
            </ul><!-- .breadcrumbs -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- #breadcrumbs -->

<section id="template-page" class="section">
	<div class="container">
        <div class="row">
            <div class="max-970 blog-detail">
                <h1 class="ngc-maintitle">Detail Permintaan Anda</h1>
                <div class="nuke-wysiwyg">
                    <p>Kirim permintaan sesuai kebutuhan bisnis Anda dan temukan penawaran dengan harga terbaik.</p>
                </div><!-- .nuke-wysiwyg -->
                
                <div class="general-form quotation-detail-form">
                    
                    <!-- this is for clone, START -->
                    <div id="clone-me">
                        <div class="item">
                            <a href="" class="remove-me">
                                <span class="fa fa-times icon"></span>
                                <span class="text">Hapus</span>
                            </a>
                            <div class="form-group">
                                <label class="f-pb">Nama Produk</label>
                                <div class="input-wrap has-icon quotation-input-form">
                                    <input type="text" class="autocomplete-quotation" placeholder="Masukkan Nama Produk yang anda minta… contoh: Tekiro Box Fullset">
                                </div><!-- .input-wrap -->
                            </div><!-- .form-group -->
                            <div class="row medium-gutter">
                                <div class="grid-child n-1-1per2 n-540-1per4 n-no-margin-bottom">
                                    <div class="form-group">
                                        <label class="f-pb">Jumlah</label>
                                        <div class="input-wrap">
                                            <input type="number" value="">
                                        </div><!-- .input-wrap -->
                                    </div><!-- .form-group -->
                                </div><!-- .grid-child -->
                                <div class="grid-child n-1-1per2 n-540-1per4 n-no-margin-bottom">
                                    <div class="form-group">
                                        <label class="f-pb">Satuan</label>
                                        <div class="input-wrap">
                                            <div class="select-style">
                                                <select>
                                                    <option>Pieces</option>
                                                    <option>Karton</option>
                                                    <option>Box</option>
                                                </select>
                                            </div><!-- .select-style -->
                                        </div><!-- .input-wrap -->
                                    </div><!-- .form-group -->
                                </div><!-- .grid-child -->
                                <div class="grid-child n-1-1per1 n-no-margin-bottom">
                                    <div class="form-group">
                                        <label class="f-pb">Keterangan</label>
                                        <div class="input-wrap">
                                            <textarea rows="5" style="height: auto;"></textarea>
                                        </div><!-- .input-wrap -->
                                    </div><!-- .form-group -->
                                </div><!-- .grid-child -->
                                <div class="grid-child n-1-1per1 n-no-margin-bottom">
                                    <div class="form-group">
                                        <div class="clone_dropzone" id="upload-0">
                                            <div class="dropzone-intro">
                                                <h3><span class="fa fa-image icon"></span><span class="text">Unggah Gambar Produk di Sini</span></h3>
                                            </div><!-- .dropzone-intro -->
                                            <div class="pta-drop-preview">
                                                
                                            </div><!-- .pta-drop-preview -->
                                        </div><!-- #upload1-dropzone -->
                                    </div><!-- .form-group -->
                                </div><!-- .grid-child -->
                            </div><!-- .row -->
                        </div><!-- .item -->
                    </div><!-- #clone-me -->
                    <!-- this is for clone, END -->

                    <!-- start here -->
                    <div class="item-wrap">
                        <div class="item first">
                            <a href="" class="remove-me">
                                <span class="fa fa-times icon"></span>
                                <span class="text">Hapus</span>
                            </a>
                            <div class="form-group">
                                <label class="f-pb">Nama Produk</label>
                                <div class="input-wrap has-icon quotation-input-form">
                                    <input type="text" class="autocomplete-quotation" placeholder="Masukkan Nama Produk yang anda minta… contoh: Tekiro Box Fullset" value="Tekiro Box Fullset">
                                </div><!-- .input-wrap -->
                            </div><!-- .form-group -->
                            <div class="row medium-gutter">
                                <div class="grid-child n-1-1per2 n-540-1per4 n-no-margin-bottom">
                                    <div class="form-group">
                                        <label class="f-pb">Jumlah</label>
                                        <div class="input-wrap">
                                            <input type="number" value="100">
                                        </div><!-- .input-wrap -->
                                    </div><!-- .form-group -->
                                </div><!-- .grid-child -->
                                <div class="grid-child n-1-1per2 n-540-1per4 n-no-margin-bottom">
                                    <div class="form-group">
                                        <label class="f-pb">Satuan</label>
                                        <div class="input-wrap">
                                            <div class="select-style">
                                                <select>
                                                    <option>Pieces</option>
                                                    <option selected="selected">Karton</option>
                                                    <option>Box</option>
                                                </select>
                                            </div><!-- .select-style -->
                                        </div><!-- .input-wrap -->
                                    </div><!-- .form-group -->
                                </div><!-- .grid-child -->
                                <div class="grid-child n-1-1per1 n-no-margin-bottom">
                                    <div class="form-group">
                                        <label class="f-pb">Keterangan</label>
                                        <div class="input-wrap">
                                            <textarea rows="5" style="height: auto;"></textarea>
                                        </div><!-- .input-wrap -->
                                    </div><!-- .form-group -->
                                </div><!-- .grid-child -->
                                <div class="grid-child n-1-1per1 n-no-margin-bottom">
                                    <div class="form-group">
                                        <div class="dropzone" id="upload-1">
                                            <div class="dropzone-intro">
                                                <h3><span class="fa fa-image icon"></span><span class="text">Unggah Gambar Produk di Sini</span></h3>
                                            </div><!-- .dropzone-intro -->
                                            <div class="pta-drop-preview">
                                                
                                            </div><!-- .pta-drop-preview -->
                                        </div><!-- #upload1-dropzone -->
                                    </div><!-- .form-group -->
                                </div><!-- .grid-child -->
                            </div><!-- .row -->
                        </div><!-- .item -->
                    </div><!-- .item-wrap -->

                    <div class="add-btn-wrap">
                        <a href="" class="btn btn-yellow btn-add-produk"><span class="fa fa-plus"></span>&nbsp;Tambah Produk</a>
                    </div><!-- .add-btn-wrap -->

                    <div class="process-request">
                        <a href="" class="btn btn-red">LANJUT</a>
                        <div class="why-fixcomart">
                            <h3 class="ngc-title">Mengapa Anda Harus Menggunakan Fixcomart Sebagai Purchasing Tools Anda?</h3>
                            <div class="nuke-wysiwyg">
                                <p>Donut pastry apple pie cupcake wafer. Marzipan pudding danish cheesecake sesame snaps dragée tart.</p>
                                <ul>
                                    <li>Anda dapat mengundang supplier favorit Anda secara exclusive untuk memberikan penawaran atas permintaan Anda</li>
                                    <li>Membandingkan semua penawaran dengan mudah</li>
                                    <li>Cepat, efisien, dan menghemat waktu Anda karena tidak perlu melakukan pengecekan email satu per satu</li>
                                    <li>Pantau semua kegiatan permintaan dan penawaran Anda dalam 1 sistem</li>
                                    <li>Data disimpan hingga bertahun-tahun</li>
                                </ul>
                            </div><!-- .nuke-wysiwyg -->
                        </div><!-- .why-fixcomart -->
                    </div><!-- .process-request -->

                </div><!-- .general-form -->

                
                    
            </div><!-- .max-970 -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<?php include("foot.php"); ?>
<?php include("footer.php"); ?>

<!-- leave this alone, ini untuk custom template preview START -->
<div id="pta-preview-template">
    <div>
        <div class="pta-preview-child">
            <img src="" alt="" data-dz-thumbnail />
            <div class="pta-preview-content">
                <div class="pta-text-wrap">
                    <p class="pta-preview-name" data-dz-name></p>
                    <p class="pta-preview-size" data-dz-size></p>
                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                    <strong class="error text-danger" data-dz-errormessage></strong>
                    <a href="" class="btn smaller btn-red pta-remove" data-dz-remove><span class="fa fa-times icon"></span>HAPUS</a>
                </div><!-- .pta-text-wrap -->
                
            </div><!-- .pta-preview-content -->
        </div><!-- .pta-preview-child -->
    </div>
</div>
<!-- leave this alone, ini untuk custom template preview END -->

<script src="js/dropzone/dropzone.min.js" type="text/javascript"></script>

<script>
        
    function callDropzone() {
        // dropzone
        Dropzone.autoDiscover = false;
        $('.dropzone').each(function(){
            var options = $(this).attr('id');
            var dropUrl = 'test' + options + '.php';
            var dPreview = options + ' .pta-drop-preview';
            var dClickable = options + ' .dropzone-intro';

            $(this).dropzone({
                url: "#",
                clickable: "#" + dClickable,
                maxFiles: 1,
                parallelUploads: 1,
                uploadMultiple: false,
                maxFilesSize: 10,
                acceptedFiles: ".jpg, .jpeg, .png, .gif",
                previewTemplate: document.getElementById('pta-preview-template').innerHTML,
                previewsContainer:  "#" + dPreview,
                init: function () {
                    this.on("addedfile", function () {
                        //alert("File added.");
                        $("#" + dClickable).hide();
                    });
                    this.on("removedfile", function () {
                        $("#" + dClickable).show();
                    });
                }

                // Rest of the configuration equal to all dropzones
            });
        });
    }

    function callAutocomplete() {
        var searchresultsArray = $.map(results, function (value, key) { return { value: value, data: key }; });
        $('.autocomplete-quotation').each(function(){
            $(this).autocomplete({
                lookup: searchresultsArray,
                appendTo: $(this).parent('.quotation-input-form')
            });
        });
    }

    $(document).ready(function(){

        $('.related-blog-carousel').slick({
            dots: true,
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1
                  }
                }
            ]
        });
        $("#share").jsSocials({
            showLabel: true,
            showCount: true,
            shares: ["twitter", "facebook"]
        });

        callAutocomplete();

        callDropzone();
        newNum = 1;
        $(document).on('click','.btn-add-produk', function(e){
            var div = $("#clone-me .item").clone(),
                dropzoneDiv = div.find(".clone_dropzone");
            newNum++;

            dropzoneDiv.attr("id", "upload-" + newNum);
            div.attr("id", "clone-" + newNum);
            $(div).appendTo(".item-wrap");

            var options = dropzoneDiv.attr("id");
            var dropUrl = 'test' + options + '.php';
            var dPreview = options + ' .pta-drop-preview';
            var dClickable = options + ' .dropzone-intro';

            let singleDropzoneOptions = {
                url: "#",
                clickable: "#" + dClickable,
                maxFiles: 1,
                parallelUploads: 1,
                uploadMultiple: false,
                maxFilesSize: 10,
                acceptedFiles: ".jpg, .jpeg, .png, .gif",
                previewTemplate: document.getElementById('pta-preview-template').innerHTML,
                previewsContainer:  "#" + dPreview,
                init: function () {
                    this.on("addedfile", function () {
                        //alert("File added.");
                        $("#" + dClickable).hide();
                    });
                    this.on("removedfile", function () {
                        $("#" + dClickable).show();
                    });
                }
            }

            $("#" + dropzoneDiv.attr("id")).dropzone(singleDropzoneOptions);

            // call autocomplete
            callAutocomplete();

            e.preventDefault();
        });

        // remove item
        $(document).on('click','.remove-me', function(e){
            var dParent = $(this).parent(".item");
            dParent.remove();
            e.preventDefault();
        });
    });
</script>


</body>
</html>